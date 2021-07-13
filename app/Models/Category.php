<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public static function getCategory(){
        $data = DB::select("select * from items_categories");
        return $data;
    }

    public static function getSubCategory(){
        $data = DB::select("select items_sub_categories.*,
        items_categories.category_name
        from items_sub_categories
        LEFT OUTER JOIN items_categories ON items_sub_categories.category_id=items_categories.category_id");
        return $data;
    }

    public static function deleteRecord($id,$tableName,$PK){
        return DB::table($tableName)
        ->where($PK,$id)
        ->delete();
    }

    public static function UpdateRecord($PK,$id,$data,$tableName){
        return DB::table($tableName)
        ->where($PK,$id)
        ->update($data);
    }
}
