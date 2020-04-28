<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
//use DB;
use Illuminate\Support\Facades\Auth;
use App\models\users;

class LoginController extends Controller
{
    public function GetLogin()
    {
        return view('backend.login.login');
    
    }

    public function PostLogin(LoginRequest $request)
    {
        //DB::table('users')->where('email',$request->email)->where('password',$request->password)->count()>0
       // $request->email=='Bunthoeurnyorn@gmail.com'&&$request->password=='12345
       //users::where('email',$request->email)->where('password',$request->password)->count()>0
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        {
            //session()->put('email',$request->email);      
            return redirect('admin');
        }else{
            return redirect('login')->withInput()->with('thongbao','Tài khoản khoặc mật khẩu không chính xác!');
        }
    
    }
    public function GetIndex()
    {
        return view('backend.index');
    }

    public function Logout()
    {
        //session()->forget('email');
        Auth::logout();
        return redirect('/login');
    }
    
}
