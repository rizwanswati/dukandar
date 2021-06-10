<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    function LoadEditForm($id){
        return "Admin CURD Controller ".$id;
    }

    function SaveEditData(Request $request)
    {

    }

    function Delete($id){
        return "Deleting Record on ID:=".$id;
    }
}
