<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Day;
use Session;

class PackageController extends Controller
{
    public function index()
    {
        if(Session::get('is_login') == TRUE){
            $package = Package::all();
            return view('dashboard/pages/package')->with('package',$package);
        } else {
            return redirect('/admin-login');
        }
    }

    public function edit($id)
    {
        if(Session::get('is_login') == TRUE){
            $package = Package::find($id);
            $days = Day::all()->where('package_id',$id);
            return view('dashboard/pages/package_edit')->with('package',$package)->with('days',$days);
        } else {
            return redirect('/admin-login');
        }
    }
    
    

    public function update(Request $request,$id)
    {
        if(Session::get('is_login') == TRUE){
        $package = Package::find($id);
        $package->title = $request['title'];
        $package->description = $request['description'];
        $package->price = $request['price'];
        $package->save();
       $days = json_decode($request['days']);
       foreach ($days as $get_days){
           if($get_days->id != null){
                $day = Day::find($get_days->id);
           }else{
               $day = new Day;
           }
       $day->title = $get_days->title;
       $day->package_id = $id;
       $day->description = $get_days->description;
       $day->save();
       }
        return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        } else {
            return redirect('/admin-login');
        }
    }
    
    public function add()
    {
        if(Session::get('is_login') == TRUE){
            return view('dashboard/pages/package_add');
        }else{
           return redirect('/admin-login');  
        }
    }
    
    public function store(Request $request)
    {
        if(Session::get('is_login') == TRUE){
//            $package = new Package;
//            $package->title = $request['title'];
//            $package->description = $request['description'];
//            $package->price = $request['price'];
//            $package->save();
            $id_package = "";
            $last_id_package = Package::all();
            foreach ($last_id_package as $get_last_id_package){
                $id_package = $get_last_id_package->id;
            }
            $days = json_decode($request['days']);
            foreach ($days as $get_days){
                $day = new Day;
                $day->title= $get_days->title;
                $day->package_id = $id_package;
                $day->description = $get_days->description;
                
                $imageName = rand(10,100000).'.'.$get_days->image->getClientOriginalName();
                $get_days->image->move(public_path('images'), $imageName);
                $day->image = $imageName;
//                $array_image = $get_days->image['tmp_name'];
              
                
                $day->save();
//                  return $get_days->image['tmp_name'];
            }
             return response(['status' => 'true', 'data' =>$array_image, 'message' => '']);
        } else {
            return redirect('/admin-login');
        }
    }
    
    public function remove(Request $request)
    {
        if(Session::get('is_login') == TRUE){
            $package = Package::find($request['id']);
            $package->delete();
            return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        } else{
            return redirect('/admin-login');
        }
    }
}
