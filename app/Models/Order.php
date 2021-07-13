<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    public static function getOrders(){
        $data = DB::select("SELECT orders.*,
        user_registrations.full_name,cities.city_name
        from orders
        LEFT OUTER JOIN user_registrations ON
        orders.mobile_number=user_registrations.mobile_number
        LEFT OUTER JOIN cities ON order_city=cities.city_id");
        return $data;
    }

    public static function getOrderStatus()
    {
        $data = DB::select("SELECT orders_status.*,
        admin_users.user_name
        from orders_status
        LEFT OUTER JOIN admin_users ON
        orders_status.decision_by=admin_users.user_id");
        return $data;
    }

    public static function getInvoiceItems()
    {
        $data = DB::select("SELECT invoice_items.*,
        admin_users.user_name,items.item_name
        from invoice_items
        LEFT OUTER JOIN admin_users ON
        invoice_items.vendor_id=admin_users.user_id
        LEFT OUTER JOIN items ON invoice_items.item_id=items.item_id");
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
