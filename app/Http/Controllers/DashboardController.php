<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
        if(Session::get('is_login') == TRUE){
            return view('dashboard/pages/dashboard');
        }else{   
            return redirect('/admin-login');
        }
    }
}
