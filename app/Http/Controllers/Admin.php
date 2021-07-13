<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_user as Admins;
use Yajra\DataTables\DataTables;

class Admin extends Controller
{

    function loadAdminUsers(Request $request){
        if($request->ajax()){
            $data = Admins::getAdmins();
            return DataTables($data)
            ->make(true);
        }
    }

    function loadRegUsers(Request $request){
        if($request->ajax()){
            $data = Admins::getRegUsers();
            return DataTables($data)
            ->make(true);
        }
    }

    function loadCities(Request $request){
        if($request->ajax()){
            $data = Admins::getCities();
            return DataTables($data)
            ->make(true);
        }
    }

    function LoadPinRequests(Request $request){
        if($request->ajax()){
            $data = Admins::getPinReqs();
            return DataTables($data)
            ->make(true);
        }
    }

    function updateAdminTable(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Admins::deleteRecord($request->user_id,tableAdmin(),'user_id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array(
                        'user_name'     => $request->user_name,
                        'username'      => $request->username,
                        'user_title'    => $request->user_title,
                        'user_type'     => $request->user_type,
                        'buisness_name' => $request->buisness_name,
                        'admin_cnic'    => $request->admin_cnic,
                        'user_pin_code' => $request->user_pin_code,
                        'user_mobile'   => $request->user_mobile,
                        'user_address'  => $request->user_address,
                        'user_status'   => $request->user_status
                );
                if(!empty($data)){
                    $result = Admins::UpdateRecord('user_id',$request->user_id,$data,tableAdmin());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    function updateUserTable(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Admins::deleteRecord($request->id,tableCustomer(),'id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array(
                        'full_name'     => $request->full_name,
                        'mobile_number' => $request->mobile_number,
                        'user_email'    => $request->user_email,
                        'pin_code'      => $request->pin_code,
                        'address'       => $request->address,
                        'status'        => $request->status
                );
                if(!empty($data)){
                    $result = Admins::UpdateRecord('id',$request->id,$data,tableCustomer());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

    function updateCityTable(Request $request){
        if($request->ajax()){
            if($request->action == "delete"){
                $result =  Admins::deleteRecord($request->city_id,tableCities(),'city_id');
                if($result == 1){
                    return response()->json($result,200);
                }else{
                    return response()->json($result,500);
                }
            }
            if($request->action == "edit"){
                $data = array(
                        'city_name'         => $request->city_name,
                        'province'          => $request->province,
                        'minimum_charges'   => $request->minimum_charges,
                        'city_status'       => $request->city_status,
                );
                if(!empty($data)){
                    $result = Admins::UpdateRecord('city_id',$request->city_id,$data,tableCities());
                    return response()->json($result,200);
                }else{
                    $result = 0;
                    return response()->json($result,500);
                }
            }
        }
    }

}
