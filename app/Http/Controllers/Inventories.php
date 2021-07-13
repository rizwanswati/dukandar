<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use Yajra\DataTables\DataTables;

class Inventories extends Controller
{
    public function loadStocks(Request $request){
        if($request->ajax()){
            $data = Inventory::getStock();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadSuppliers(Request $request)
    {
        if($request->ajax()){
            $data = Inventory::getSuppliers();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadPurchinvoices(Request $request){
        if($request->ajax()){
            $data = Inventory::getPurchaseInvoices();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadPurchinvoicesItm(Request $request){
        if($request->ajax()){
            $data = Inventory::getPurchaseInvoicesItems();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadReturnItems(Request $request){
        if($request->ajax()){
            $data = Inventory::getRetrunItems();
            return DataTables($data)
            ->make(true);
        }
    }

    public function loadReturnInvoices(Request $request){
        if($request->ajax()){
            $data = Inventory::getRetrunItemsInvoices();
            return DataTables($data)
            ->make(true);
        }
    }

    public function updateStocks(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Inventory::deleteRecord($request->id,tableStocks(),'id');
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
                    $result = Inventory::UpdateRecord('id',$request->id,$data,tableStocks());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateSuppliers(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Inventory::deleteRecord($request->supplier_id,tableSuppliers(),'supplier_id');
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
                    $result = Inventory::UpdateRecord('supplier_id',$request->supplier_id,$data,tableSuppliers());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updatePurchinvoices(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Inventory::deleteRecord($request->id,tablePurhcaseInvoice(),'id');
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
                    $result = Inventory::UpdateRecord('id',$request->id,$data,tablePurhcaseInvoice());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updatePurchinvoicesItm(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Inventory::deleteRecord($request->id,tablePurchaseReturnItems(),'id');
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
                    $result = Inventory::UpdateRecord('id',$request->id,$data,tablePurchaseInvoiceItems());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
       }
    }

    public function updateReturnItems(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Inventory::deleteRecord($request->id,tablePurchaseReturnItems(),'id');
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
                    $result = Inventory::UpdateRecord('id',$request->id,$data,tablePurchaseReturnItems());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateReturnInvoices(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Inventory::deleteRecord($request->pur_return_invoice_id,tablePurchaseReturnInvoices(),'pur_return_invoice_id');
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
                    $result = Inventory::UpdateRecord('pur_return_invoice_id',$request->pur_return_invoice_id,$data,tablePurchaseReturnInvoices());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }
}
