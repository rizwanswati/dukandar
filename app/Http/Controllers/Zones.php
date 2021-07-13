<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use Yajra\DataTables\DataTables;


class Zones extends Controller
{
    public function loadZones(Request $request){
        if($request->ajax()){
            $data = Zone::getZones();
            return datatables($data)->make(true);
        }
    }
    public function loadZonearea(Request $request){
        if($request->ajax()){
            $data = Zone::getZonesAreas();
            return datatables($data)->make(true);
        }
    }

    public function loadZoneInvoices(Request $request){
        if($request->ajax()){
            $data = Zone::getZonesInvoices();
            return datatables($data)->make(true);
        }
    }

    public function loadZoneVendor(Request $request){
        if($request->ajax()){
            $data = Zone::getVendorStatus();
            return datatables($data)->make(true);
        }
    }


    public function updateZones(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Zone::deleteRecord($request->zone_id,tableZones(),'zone_id');
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
                    $result = Zone::UpdateRecord('zone_id',$request->zone_id,$data,tableZones());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateZonerea(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Zone::deleteRecord($request->area_id,tableZonesAreas(),'area_id');
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
                    $result = Zone::UpdateRecord('area_id',$request->area_id,$data,tableZonesAreas());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateZoneInvoices(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Zone::deleteRecord($request->id,tableZoneInvoiceItems(),'id');
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
                    $result = Zone::UpdateRecord('id',$request->id,$data,tableZoneInvoiceItems());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    public function updateZoneVendor(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Zone::deleteRecord($request->id,tableZoneVendorStatus(),'id');
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
                    $result = Zone::UpdateRecord('id',$request->id,$data,tableZoneVendorStatus());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }
}
