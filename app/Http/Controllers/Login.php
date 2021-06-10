<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_user;

class Login extends Controller
{
    function adminLogin(Request $request)
    {
        $username   = $request->input('username');
        $pin        = $request->input('password');
        $type       = $request->input('usertype');

        $data = Admin_user::where(
            [
                'user_name'     => $username,
                'user_pin_code' => $pin,
                'user_type'     => typeReturn($type)
            ]
        )->first();

        if (!empty($data))
        {
            if ($data->user_status == 'Active') {
                init_Session($data);
                return redirect('dashboard');

            }else{
                return 'User is not Active';
            }
        }else{
            return 'User Does Not Exist';
        }
    }
    function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
    function LoadDashboard(){
        return view('index');
    }
    function showSess(Request $request){
        return $request->session()->all();
    }

}
