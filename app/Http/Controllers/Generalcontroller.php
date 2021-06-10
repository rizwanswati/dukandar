<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\General;

class Generalcontroller extends Controller
{
    function index(){
        $data['TableData'] = General::getAdminUsers(tableAdmin());
        return view('AdminTables/dbinfo',['Table'=>$data['TableData'],'tableName'=>'Admin Users']);
    }
    function loadRegUsers(){
        $data['TableData'] = General::getAdminUsers(tableCustomer());
       // return $data;
        return view('AdminTables/customer',['Table'=>$data['TableData'],'tableName'=>'Registered Users']);
    }
    function LoadCities(){
        $data['TableData'] = General::getAdminUsers(tableCities());
        return view('AdminTables/cities',['Table'=>$data['TableData'],'tableName'=>'Cities']);
    }
    function LoadPinRequests(){
        $data['TableData'] = General::getAdminUsers(tablePinRequest());
        return view('AdminTables/pinreqs',['Table'=>$data['TableData'],'tableName'=>'Pin Requests']);
    }
}
