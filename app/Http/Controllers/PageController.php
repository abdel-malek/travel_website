<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Day;
use App\Gallery;
use App\SocialMedia;

class PageController extends Controller
{
    public function index(){
        $social_media = SocialMedia::all();
        return view('client/pages/index')->with('social_media',$social_media);
    }
    public function contact_us(){
        return view('client/pages/contact_us');
    } 
    public function rooms(){
        return view('client/pages/rooms');
    }
    public function package(){
        return view('client/pages/package');
    }
    public function why_syria(){
        return view('client/pages/why_syria');
    }
    public function our_services(){
        return view('client/pages/our_services');
    }
    
    public function about(){
        return view('client/pages/about');
    }
    public function offers(){
        return view('client/pages/offers');
    } 
    public function contact_us_store(Request $request){
        $message = new Message;
        $message->name = $request->first_name .' '.$request->last_name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->phone = $request->phone;
        $message->save();
        return redirect('contact_us');
    }
    
     public function day($id){
         $day = Day::where('package_id',$id)->get();
        return view('client/pages/day')->with('day',$day);
    }
      public function all_day(){
         $day = Day::all();
        return view('client/pages/day')->with('day',$day);
    }
     public function gallery(){
         $gallery = Gallery::all();
        return view('client/pages/gallery')->with('gallery',$gallery);
    }
}
