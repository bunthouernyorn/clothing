<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ListUser()
    {
        return view ("backend.user.listuser");
    }

    public function AddUser()
    {
        return view ("backend.user.adduser");
    }
    public function EditUser()
    {
        return view ("backend.user.edituser");
    }
}

