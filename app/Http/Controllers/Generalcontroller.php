<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class Generalcontroller extends Controller
{
    function index(){
        $data['TableData'] = General::getAdminUsers(tableAdmin());
        return view('AdminTables/dbinfo',['Table'=>$data['TableData'],'tableName'=>'Admin Users']);
    }
    function loadRegUsers(){
        $data['TableData'] = General::getAdminUsers(tableCustomer());
       // return $data;
        return view('AdminTables/customer',['Table'=>$data['TableData'],'tableName'=>'Registered Users']);
    }
    function LoadCities(){
        $data['TableData'] = General::getAdminUsers(tableCities());
        return view('AdminTables/cities',['Table'=>$data['TableData'],'tableName'=>'Cities']);
    }
    function LoadPinRequests(){
        $data['TableData'] = General::getAdminUsers(tablePinRequest());
        return view('AdminTables/pinreqs',['Table'=>$data['TableData'],'tableName'=>'Pin Requests']);
    }

    public function loadItems()
    {
        $data['TableData'] = General::getAdminUsers(tableItems());
        return view('Items/items',['Table'=>$data['TableData'],'tableName'=>'Items']);
    }

    public function loadInvoiceItem()
    {
        $data['TableData'] = General::getAdminUsers(tableInvoiceItem());
        return view('Items/invoiceitems',['Table'=>$data['TableData'],'tableName'=>'Invoice Items']);
    }
    public function loadBrands()
    {
        $data['TableData'] = General::getAdminUsers(tableBrands());
        return view('Items/brands',['Table'=>$data['TableData'],'tableName'=>'Brands']);
    }
    public function loadImages()
    {
        $data['TableData'] = General::getAdminUsers(tableimages());
        return view('Items/images',['Table'=>$data['TableData'],'tableName'=>'Images']);
    }
    public function loadInfo()
    {
        $data['TableData'] = General::getAdminUsers(tableinfo());
        return view('Items/info',['Table'=>$data['TableData'],'tableName'=>'Info']);
    }
    public function loadLikes()
    {
        $data['TableData'] = General::getAdminUsers(tableliked());
        return view('Items/likes',['Table'=>$data['TableData'],'tableName'=>'Likes']);
    }

}
