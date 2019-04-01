<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
use App\Package;
use Session;

class DayController extends Controller
{
        public function index()
    {
        if(Session::get('is_login') == TRUE){
            $Day = Day::with('package')->get();
            return view('dashboard/pages/day')->with('day',$Day);
        }else{
            return redirect('/admin-login');
        }
    }

    public function edit($id)
    {
        if(Session::get('is_login') == TRUE){
            $Day = Day::find($id);
            $package = Package::all();
            return view('dashboard/pages/day_edit')->with('day',$Day)->with('package',$package); 
        }else{
            return redirect('/admin-login');
        }
    }

    public function update(Request $request,$id)
    {
        if(Session::get('is_login') == TRUE){
            $day = Day::find($id);
            $day->title = $request['title'];
            $day->description = $request['description'];
            $day->package_id = $request['package_id'];
            $day->save();
            return redirect('day');
        } else {
            return redirect('/admin-login');
        }
    }
    
    public function add()
    {
        if(Session::get('is_login') == TRUE){
            $packages = Package::all();
            return view('dashboard/pages/day_add')->with('package',$packages);
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function store(Request $request)
    {
        if(Session::get('is_login') == TRUE){
             $day = new Day;
            if($request['image']){
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('images'), $imageName);
                $day->image = $imageName;
            }
            $day->title = $request['title'];
            $day->description = $request['description'];
            $day->package_id = $request['package_id'];
            $day->save();
            return redirect('day');
        }else{
            return redirect('/admin-login');
        }
    }
    
    public function remove(Request $request)
    {
        if(Session::get('is_login') == TRUE){
            $day = Day::find($request['id']);
            $day->delete();
            return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        }else{
            return redirect('/admin-login');
        }
    }
}
