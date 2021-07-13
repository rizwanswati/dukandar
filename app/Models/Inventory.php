<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inventory extends Model
{
    use HasFactory;

    public static function getStock(){
        $data = DB::select("SELECT inventory__stock.*,
        items.item_name FROM inventory__stock
        LEFT OUTER JOIN items ON inventory__stock.item_id=items.item_id");
        return $data;
    }

    public static function getSuppliers(){
        $data = DB::select("SELECT inventory__suppliers.*,
        cities.city_name FROM inventory__suppliers
        LEFT OUTER JOIN cities ON inventory__suppliers.supplier_city=cities.city_id");
        return $data;
    }

    public static function getPurchaseInvoices(){
        $data = DB::select("SELECT  info.*,
        suppliers.supplier_name as supplier_name,
        fullname.user_name as user_name,
        loginname.username as username
		FROM inventory__purchese_invoices info
		LEFT OUTER JOIN admin_users fullname on info.created_by = fullname.user_id
        LEFT OUTER JOIN admin_users loginname on info.last_modified_by = loginname.user_id
		LEFT OUTER JOIN inventory__suppliers suppliers on info.supplier_id = suppliers.supplier_id");
        return $data;
    }

    public static function getPurchaseInvoicesItems(){
        $data = DB::select("SELECT inventory__purchese_invoice_items.*,
        items.item_name FROM inventory__purchese_invoice_items
        LEFT OUTER JOIN items ON inventory__purchese_invoice_items.item_id=items.item_id");
        return $data;
    }

    public static function getRetrunItems(){
        $data = DB::select("SELECT inventory__purchase_return_items.*,
        items.item_name FROM inventory__purchase_return_items
        LEFT OUTER JOIN items ON inventory__purchase_return_items.item_id=items.item_id");
        return $data;
    }

    public static function getRetrunItemsInvoices(){
        $data = DB::select("SELECT inventory__purchase_return_invoices.*,
        inventory__suppliers.supplier_name,admin_users.user_name FROM inventory__purchase_return_invoices
        LEFT OUTER JOIN inventory__suppliers ON inventory__purchase_return_invoices.supplier_id=inventory__suppliers.supplier_id
        LEFT OUTER JOIN admin_users ON inventory__purchase_return_invoices.created_by=admin_users.user_id");
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
