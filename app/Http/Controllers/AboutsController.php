<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Session;

class AboutsController extends Controller
{
    public function index()
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            $abouts = About::all();
            return view('dashboard/pages/about')->with('about',$abouts);
        }else{   
            return redirect('/admin-login');
        }
    }
    public function edit($id)
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            $about = About::find($id);
            return view('dashboard/pages/about_edit')->with('about',$about); 
        }else{   
            return redirect('/admin-login');
        }
    }

    public function update(Request $request,$id)
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            $about = About::find($id);
            $about->name = $request['name'];
            $about->content = $request['content'];
            $about->save();
            return redirect('abouts');
        }else{
            return redirect('/admin-login');
        }
    }

}
