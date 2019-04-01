<?php

namespace App\Http\Controllers\Api;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $admins = Admin::all();
        foreach($admins as $admin){
            if($admin->name == $request['username'] && $admin->password == $request['password']){
                // session(['is_login'=> TRUE]);
                Session::put('is_login', TRUE);
                session(['is_login' => TRUE]);
                // return dd(session('is_login'));
                return response(['status' => 'true', 'data' => 'true', 'message' => '']);
            }else{
                return response(['status' => 'false', 'data' => 'false', 'message' => 'username or password incorrect']);
            }
        }
        

    }
}
