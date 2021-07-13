<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Yajra\DataTables\DataTables;


class Items extends Controller
{
    public function loadItems(Request $request)
    {
        if($request->ajax()){
            $data = Item::getItems();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadBrands(Request $request)
    {
        if($request->ajax()){
            $data = Item::getBrands();
            return DataTables($data)
            ->addColumn('brand_image_url', function ($data) {
                $url=$data->brand_image_url;
                return '<img src='.$url.' border="0" width="55" height="55" class="img-rounded" align="center" />';
         })->rawColumns(['brand_image_url'])
         ->make(true);
        }
    }

    public function loadImages(Request $request)
    {
        if($request->ajax()){
            $data = Item::getImages();
            return DataTables($data)
            ->addColumn('image', function ($data) {
                $url=$data->item_image_url;
                return '<img src='.$url.' border="0" width="55" height="55" class="img-rounded" align="center" />';
         })->rawColumns(['image'])
         ->make(true);
        }
    }

    public function loadInfo(Request $request)
    {
        if($request->ajax()){
            $data = Item::getInfo();
            return DataTables($data)
            ->make(true);
        }
    }
     public function loadLikes(Request $request){
        if($request->ajax()){
            $data = Item::getLikes();
            return DataTables($data)
            ->make(true);
        }
     }

    public function updateItems(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Item::deleteRecord($request->item_id,tableItems(),'item_id');
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
                    $result = Item::UpdateRecord('item_id',$request->item_id,$data,tableItems());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateBrands(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Item::deleteRecord($request->brand_id,tableBrands(),'brand_id');
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
                    $result = Item::UpdateRecord('brand_id',$request->brand_id,$data,tableBrands());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateImages(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Item::deleteRecord($request->items_images_id,tableimages(),'items_images_id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array();
                foreach($request->all() as $key => $value){
                    if($key != 'action' && $key != 'image'){
                        $data[$key] = $value;
                    }
                }
                if(!empty($data)){
                    $result = Item::UpdateRecord('items_images_id',$request->items_images_id,$data,tableimages());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function UpdateInfo(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Item::deleteRecord($request->id,tableinfo(),'id');
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
                    $result = Item::UpdateRecord('id',$request->id,$data,tableinfo());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }
}
