<?php

namespace App\Http\Controllers;

use App\Models\Admin_user;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\Allowedcatagories;
use App\Models\Itemscategory;
use App\Models\Invoices;
use App\Models\City;


class Vendorinvoices extends Controller
{

    function index(Request $request){
        $cities = City::select('city_id','city_name')->get();
        $sess =  $request->session()->all();
        $user_id = $sess['SessionCore']['user_id'];
        return view('invoicedetail',['cities'=> $cities,'user_id'=>$user_id]);
    }

    function Invoice($from,$to,$cat_id,$vendor_id)
    {
        $data['from'] = $from;
        $data['to'] = $to;
        $data['cat_id'] = $cat_id;
        $data['vendor_id'] = $vendor_id;

        $jsonResponse = Invoices::generateInvoice($data);
        if (!empty($jsonResponse)) {
            return response($jsonResponse, 200);
        }else{
            return response(['key'=>'No record found'],404);
        }
    }

    function test($id=null,$pass=null)
    {
        if ($id != null && $pass != null){
        $data['from'] = 2;
        $data['to'] = 3;
        $data['cat_id'] = 4;
        $data['vendor_id'] = 5;
        return $data;
        }else{
            return ['key'=>'Parameters Empty'];
        }
    }

    function check(Request $request){
        return $request->input();
    }

    function getVendors($city_id){
       $vendors =  Admin_user::select('user_id','user_name')
        ->where(['user_city'=>$city_id])
            ->get();
        if (!empty($vendors)) {
            return response($vendors, 200);
        }else{
            return response(['key'=>'No record found'],404);
        }
    }
    function getCategories($user_id){
        $allowed_cat_ids = Allowedcatagories::select('allowed_category_id')->where([
            'user_id' => $user_id
        ])->get();

        $categories = array();
        foreach ($allowed_cat_ids as $ids){
            $categories[] = Itemscategory::select('category_name','category_id')
                ->where(['category_id'=>$ids['allowed_category_id']])
                ->get();
        }
        if (!empty($categories)) {
            return response($categories, 200);
        }else{
            return response(['key'=>'No record found'],404);
        }
    }
}
