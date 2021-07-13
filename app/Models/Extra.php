<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Extra extends Model
{
    use HasFactory;
    public static function getAddImgs(){
        $data = DB::select("SELECT * FROM advertising_images");
        return $data;
    }

    public static function getSearches(){
        $data = DB::select("SELECT extra_data__user_search.*,
        user_registrations.full_name
        FROM extra_data__user_search
        LEFT OUTER JOIN user_registrations ON extra_data__user_search.mobile_number=user_registrations.mobile_number");
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
