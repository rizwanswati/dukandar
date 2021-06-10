<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class General extends Model
{
    use HasFactory;

    public static function getAdminUsers($tableName){
            $data = DB::select("select * from $tableName");
            return $data;
    }

    public static function getCity($id){
            $city = DB::select("select city_name from cities where city_id=$id");
            return $city;
    }
}
