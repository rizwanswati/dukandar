<?php

function typeReturn($type){
    if ($type==1)
        return 'Admin';
    if ($type==2)
        return 'Operations Manager';
    if ($type==3)
        return 'Vendor';
}

function init_Session($data){
    session(['SessionCore' =>
        [
            'user_id' => $data->user_id,
            'username' => $data->user_name,
            'user_type'=> $data->user_type,
            'user_city'=>$data->user_city
        ]]);
    session()->start();
}

function printData($item){
    echo '<pre>';
        print_r($item);
    echo '</pre>';
}

function getSessionItem($sessKey,$item){
    $sess =  session()->all();
    return $sess[$sessKey][$item];
}

function tableAdmin(){
    return 'admin_users';
}

function tableCustomer(){
    return 'user_registrations';
}

function tableCities(){
    return 'cities';
}

function tablePinRequest()
{
    return 'pin_requests';
}

function getCity($id){
    $city = \App\Models\General::getCity($id);
    if (empty($city)) {
        return " ";
    }else{
        return $city[0]->city_name;
    }
}




