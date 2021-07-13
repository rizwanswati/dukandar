<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Yajra\DataTables\DataTables;

class Orderajaxdatatable extends Controller
{

    function index(Request $request){
        if($request->ajax()){
            $data = Order::getOrders();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadOrderStatus(Request $request)
    {
        if($request->ajax()){
            $data = Order::getOrderStatus();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadItemInvoices(Request $request)
    {
        if($request->ajax()){
            $data = Order::getInvoiceItems();
            return DataTables($data)
            ->make(true);
        }
    }

    function action(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Order::deleteRecord($request->orders_id,tableOrders(),'orders_id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array();
                foreach($request->all() as $key => $value){
                    if($key != 'action'){
                        $data[$key] = $value;
                    }
                }
                if(!empty($data)){
                    $result = Order::UpdateRecord('orders_id',$request->orders_id,$data,tableOrders());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    function updateOrderStatus(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Order::deleteRecord($request->order_status_id,tableOrderStatus(),'order_status_id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array();
                foreach($request->all() as $key => $value){
                    if($key != 'action'){
                        $data[$key] = $value;
                    }
                }
                if(!empty($data)){
                    $result = Order::UpdateRecord('order_status_id',$request->order_status_id,$data,tableOrderStatus());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    function updateItemInvoices(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Order::deleteRecord($request->id,tableInvoiceItem(),'id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array();
                foreach($request->all() as $key => $value){
                    if($key != 'action'){
                        $data[$key] = $value;
                    }
                }
                if(!empty($data)){
                    $result = Order::UpdateRecord('id',$request->id,$data,tableInvoiceItem());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }
}
