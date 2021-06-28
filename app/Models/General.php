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

    public static function getVendor($id){
            $user = DB::select("select user_name from admin_users where user_id=$id");
            return $user;
    }

    public static function getCategory($id){
        $category = DB::select("select category_name from items_categories where category_id=$id");
        return $category;
    }

    public static function getSubCategory($id){
        $subcategory = DB::select("select subcategory_name from items_sub_categories where subcategory_id=$id");
        return $subcategory;
    }

    public static function getItem($id){
        $item = DB::select("select item_name from items where item_id=$id");
        return $item;
    }
    public static function getBrandName($id){
        $brand = DB::select("select brand_name from items__brands where brand_id=$id");
        return $brand;
    }

    public static function CustomerName($mob){
        $fullName = DB::select("select full_name from user_registrations where mobile_number=$mob");
        return $fullName;
    }

    public static function getSupplierName($id){
        $fullName = DB::select("select full_name from user_registrations where mobile_number=$id");
        return $fullName;
    }

    public static function getZoneName($id){
        $Name = DB::select("select zone_name from zones where zone_id=$id");
        return $Name;
    }


}
