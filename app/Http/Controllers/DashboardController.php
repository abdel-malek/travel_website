<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            return view('dashboard/pages/dashboard');
        }else{   
            return redirect('/admin-login');
        }
    }
}
