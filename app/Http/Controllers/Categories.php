<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\URL;

class Categories extends Controller
{
    public function loadCategories(Request $request)
    {
        if($request->ajax()){
            $data = Category::getCategory();
            return DataTables($data)
            ->addColumn('image', function ($data) {
                $url=$url=$this->ImgURL().$data->category_image_url;
                return '<img src='.$url.' border="0" width="55" height="55" class="img-rounded" align="center" />';
         })->rawColumns(['image'])
         ->make(true);
        }
    }

    public function loadSubCategories(Request $request){
        if($request->ajax()){
            $data = Category::getSubCategory();
            return DataTables($data)
            ->addColumn('image', function ($data) {
            $url= $url=$this->ImgURL().$data->subcategory_image_url;
            return '<img src='.$url.' border="0" width="55" height="55" class="img-rounded" align="center" />';
         })->rawColumns(['image'])
         ->make(true);
        }
    }

    public function updateCategories(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Category::deleteRecord($request->category_id,tableCategories(),'category_id');
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
                    $result = Category::UpdateRecord('category_id',$request->category_id,$data,tableCategories());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateSubCategories(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Category::deleteRecord($request->subcategory_id,tableItemSubCategory(),'subcategory_id');
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
                    $result = Category::UpdateRecord('subcategory_id',$request->subcategory_id,$data,tableItemSubCategory());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    protected function ImgURL(){
        return URL::to('/')."/assets/images/";
    }
}
