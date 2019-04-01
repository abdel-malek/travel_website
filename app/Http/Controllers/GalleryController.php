<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use Session;

class GalleryController extends Controller
{
           public function index()
    {
        if(Session::get('is_login') == TRUE){
            $gallery = Gallery::all();
            return view('dashboard/pages/gallery')->with('gallery',$gallery);
        }else{
            return redirect('/admin-login');
        }
    }

    public function edit($id)
    {
        if(Session::get('is_login') == TRUE){
            $gallery = Gallery::find($id);
            return view('dashboard/pages/gallery_edit')->with('gallery',$gallery); 
        }else{
            return redirect('/admin-login');
        }
    }

    public function update(Request $request,$id)
    {
        if(Session::get('is_login') == TRUE){
            $gallery = Gallery::find($id);
            if($request['image']){
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
                $gallery->image = $imageName;
            }
            $gallery->title = $request['title'];
            $gallery->save();
            return redirect('gallery');
        } else {
            return redirect('/admin-login');
        }
    }
    
    public function add()
    {
        if(Session::get('is_login') == TRUE){
            $gallery = Gallery::all();
            return view('dashboard/pages/gallery_add')->with('gallery',$gallery);
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function store(Request $request)
    {
        if(Session::get('is_login') == TRUE){
             $gallery = new Gallery;
            if($request['image']){
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
                $gallery->image = $imageName;
            }
            $gallery->title = $request['title'];
            $gallery->save();
            return redirect('gallery');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function remove(Request $request)
    {
        if(Session::get('is_login') == TRUE){
            $gallery = Gallery::find($request['id']);
            $gallery->delete();
            return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        }else{
            return redirect('/admin-login');
        }
    }
}
