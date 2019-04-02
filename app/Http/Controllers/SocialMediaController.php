<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\SocialMedia;

class SocialMediaController extends Controller
{
       public function index()
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            $social_media = SocialMedia::all();
            return view('dashboard/pages/social_media')->with('social_media',$social_media);
        }else{
            return redirect('/admin-login');
        }
    }

    public function edit($id)
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            $social_media = SocialMedia::find($id);
            return view('dashboard/pages/social_media_edit')->with('social_media',$social_media); 
        }else{
            return redirect('/admin-login');
        }
    }

    public function update(Request $request,$id)
    {
        if(Session::get('is_login') == TRUE){
            $social_media = SocialMedia::find($id);
            $social_media->link = $request['link'];
            $social_media->type = $request['type'];
            $social_media->save();
            return redirect('social_media');
        } else {
            return redirect('/admin-login');
        }
    }
    
    public function add()
    {
        if(Session::get('is_login') == TRUE){
            Session::put('edit_image', FALSE);
            return view('dashboard/pages/social_media_add');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function store(Request $request)
    {
        if(Session::get('is_login') == TRUE){
            $social_media = new SocialMedia;
            $social_media->link = $request['link'];
            $social_media->type = $request['type'];
            $social_media->save();
            return redirect('social_media');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function remove(Request $request)
    {
        if(Session::get('is_login') == TRUE){
            $social_media = SocialMedia::find($request['id']);
            $social_media->delete();
            return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        }else{
            return redirect('/admin-login');
        }
    }
}
