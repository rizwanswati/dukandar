<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Zone extends Model
{
    use HasFactory;
    public static function getZones(){
        $data = DB::select("SELECT zones.*,
        cities.city_name FROM zones
        LEFT OUTER JOIN cities ON zones.city_id = cities.city_id");
        return $data;
    }
    public static function getZonesAreas(){
        $data = DB::select("SELECT zone_areas.*,
        zones.zone_name FROM zone_areas
        LEFT OUTER JOIN zones ON zones.zone_id = zone_areas.zone_id");
        return $data;
    }

    public static function getZonesInvoices(){
        $data = DB::select("SELECT zzz_invoice_items.*,
        user_registrations.full_name,
        admin_users.user_name,
        items.item_name
        FROM zzz_invoice_items
        LEFT OUTER JOIN user_registrations ON zzz_invoice_items.operation_by_user=user_registrations.id
        LEFT OUTER JOIN items ON zzz_invoice_items.item_id=items.item_id
        LEFT OUTER JOIN admin_users ON zzz_invoice_items.operation_by_user=admin_users.user_id");
        return $data;
    }

    public static function getVendorStatus(){
        $data = DB::select("SELECT zzz_vendor_include_status.*,
        admin_users.user_name,
        items.item_name
        FROM zzz_vendor_include_status
        LEFT OUTER JOIN items ON zzz_vendor_include_status.item_id=items.item_id
        LEFT OUTER JOIN admin_users ON zzz_vendor_include_status.operation_by_user=admin_users.user_id");
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
