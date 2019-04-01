<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;

class AdminController extends Controller
{
    public function index()
    {
         if(Session::get('is_login') == TRUE){
        $admins = Admin::all();
        return view('dashboard/pages/admin')->with('admin',$admins);
         }else{
             return redirect('/admin-login');
         }
    }

    public function edit($id)
    {
        if(Session::get('is_login') == TRUE){
        $admin = Admin::find($id);
        return view('dashboard/pages/admin_edit')->with('admin',$admin); 
        }else{
            return redirect('/admin-login');
        }
    }

    public function update(Request $request,$id)
    {
        if(Session::get('is_login') == TRUE){
        $admin = Admin::find($id);
        $admin->username = $request['username'];
        $admin->password = md5($request['password']);
        $admin->save();
        return redirect('admin');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function add()
    {
        if(Session::get('is_login') == TRUE){
            return view('dashboard/pages/admin_add');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function store(Request $request)
    {
        if(Session::get('is_login') == TRUE){
       $admin = new Admin;
       $admin->username = $request['username'];
       $admin->password = md5($request['password']);
       $admin->save();
        return redirect('admin');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function remove(Request $request)
    {
        if(Session::get('is_login') == TRUE){
        $admin = Admin::find($request['id']);
        $admin->delete();
        return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        }else{
            return redirect('/admin-login');
        }
    }
}