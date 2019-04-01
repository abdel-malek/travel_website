<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Api\AdminController;
use Illuminate\Http\Request; 
use App\Admin;
use Session;
// use App\Http\Controller

class LoginAdminController extends AdminController
{
    public function index(){
        // dd(Session::all());
        if(Session::get('is_login') == TRUE){
            return redirect('/dashboard');
        }else{
            return view('dashboard/pages/login');
        }
       
    }

    public function login(Request $request)
    {
        $admins = Admin::all();
        foreach($admins as $admin){
            if($admin->username == $request['username'] && $admin->password == md5($request['password'])){
                Session::put('is_login', TRUE);
                Session::put('user_id', $request['id']);
                Session::put('username', $request['username']);
                return redirect('/dashboard');
            }else{
                return redirect('/admin-login');
            }
        }     
    }
    
    public function logout(){
        Session::forget('is_login');
        Session::forget('user_id');
        Session::forget('username');
        return redirect('/admin-login');
    }
}
