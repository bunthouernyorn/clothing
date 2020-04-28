<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function GetLogin()
    {
        echo 'Đây là trang login';
    }

    public function GetIndex()
    {
        echo 'Đây là trang quản trị';
    }
}
