<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    public static function getItems(){
        $data = DB::select("SELECT items.*,
        admin_users.user_name,items_categories.category_name,items_sub_categories.subcategory_name
        from items
        LEFT OUTER JOIN admin_users ON items.vendor_id=admin_users.user_id
        LEFT OUTER JOIN items_categories ON items.item_category=items_categories.category_id
        LEFT OUTER JOIN items_sub_categories ON items.item_sub_category=items_sub_categories.subcategory_id");
        return $data;
    }

    public static function getImages()
    {
        $data = DB::select("SELECT items__images.*,
        items.item_name from items__images
        LEFT OUTER JOIN items ON items__images.item_id=items.item_id");
        return $data;
    }

    public static function getInfo(){
        $data = DB::select("SELECT  info.id,
		info.item_id,
        info.item_brand_id,
        info.is_group_of_items,
        info.added_time,
        info.last_modified_time,
        info.last_modification_reason,
        info.added_by,
        info.last_modified_by,
        item.item_name as item_name,
        itemBrand.brand_name as BrandName,
        fullname.user_name as user_name,
        loginname.username as username
		FROM items__info info
		LEFT OUTER JOIN admin_users fullname on info.added_by = fullname.user_id
        LEFT OUTER JOIN admin_users loginname on info.last_modified_by = loginname.user_id
		LEFT OUTER JOIN items item on info.item_id = item.item_id
        LEFT OUTER JOIN items__brands itemBrand on info.item_brand_id = itemBrand.brand_id");
        return $data;
    }
     public static function getLikes(){
        $data = DB::select("SELECT items__liked.*,
        items.item_name, user_registrations.full_name from items__liked
        LEFT OUTER JOIN items ON items__liked.item_id=items.item_id
        LEFT OUTER JOIN user_registrations ON items__liked.mobile_number = user_registrations.mobile_number");
        return $data;
     }

    public static function getBrands(){
        $data = DB::select("SELECT * from items__brands");
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
