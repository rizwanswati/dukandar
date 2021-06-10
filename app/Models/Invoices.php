<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Invoices extends Model
{
    use HasFactory;

    public static function generateInvoice($data){

        $cat_id     = $data['cat_id'];
        $vendor_id  = $data['vendor_id'];
        $from       = $data['from'];
        $to         = $data['to'];

       $data =  DB::select("SELECT DATE_FORMAT(orders.date, '%d %M %Y %r') AS Date,
                    orders.invoice_number AS 'Invoice',
                    items.item_name, invoice_items.item_rate, invoice_items.item_qty AS 'Qty',
                    CEIL((invoice_items.item_qty * invoice_items.item_rate) - ((invoice_items.item_rate*invoice_items.item_qty*invoice_items.item_discount_percent)/100)) AS Total,
                    invoice_items.item_unit, invoice_items.item_discount_percent AS 'Disc'
                    from items, orders, invoice_items
                    where items.item_id = invoice_items.item_id
                    AND orders.invoice_number = invoice_items.invoice_number
                    AND orders.status = 'Delivered'
                    AND items.item_category = '$cat_id'
                    AND invoice_items.vendor_id = '$vendor_id'
                    AND invoice_items.vendor_include = '1'
                    AND orders.date >= '$from 00:00:00'
                    and orders.date <= '$to 23:59:59'
                    ORDER by orders.date ASC");


           return $data;

    }

}
