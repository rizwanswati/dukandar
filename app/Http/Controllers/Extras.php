<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Extra;
use Yajra\DataTables\DataTables;

class Extras extends Controller
{
    public function loadAdIamges(Request $request)
    {
        if($request->ajax()){
            $data = Extra::getAddImgs();
            return DataTables($data)
            ->addColumn('image', function ($data) {
                $url=$data->image_url;
                return '<img src='.$url.' border="0" width="55" height="55" class="img-rounded" align="center" />';
         })->rawColumns(['image'])
         ->make(true);
        }
    }

    public function loadUsrSrchs(Request $request){
        if($request->ajax()){
            $data = Extra::getSearches();
            return DataTables($data)
            ->make(true);
        }
    }

    public function updateAdIamges(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Extra::deleteRecord($request->id,tableAdImageData(),'id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array();
                foreach($request->all() as $key => $value){
                    if($key != 'action'){
                        $data[$key] = $value;
                    }
                }
                if(!empty($data)){
                    $result = Extra::UpdateRecord('id',$request->id,$data,tableAdImageData());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }
}
