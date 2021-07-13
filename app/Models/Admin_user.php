<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin_user extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function getAdmins(){
        $data = DB::select("select admin_users.*,
        cities.city_name from admin_users LEFT OUTER JOIN cities ON
        admin_users.user_city=cities.city_id");
        return $data;
    }

    public static function getRegUsers(){
        $data = DB::select("select user_registrations.*,
        cities.city_name from user_registrations LEFT OUTER JOIN cities ON
        user_registrations.user_city=cities.city_id");
        return $data;
    }

    public static function getCities(){
        $data = DB::select("select * from cities");
        return $data;
    }

    public static function getPinReqs(){
        $data = DB::select("select pin_requests.*,
        admin_users.user_name from pin_requests LEFT OUTER JOIN admin_users ON
        pin_requests.decision_by=admin_users.user_id");
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
