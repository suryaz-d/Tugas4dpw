<?php

namespace App\Http\Controllers;

class Auth extends Controller
{
    function showAdminlogin(){
        return view('adminlogin');
    }
}