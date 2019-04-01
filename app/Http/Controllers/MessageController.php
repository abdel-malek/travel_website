<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Session;

class MessageController extends Controller
{
    public function index() {
        if (Session::get('is_login') == TRUE) {
            $message = Message::all();
            return view('dashboard/pages/message')->with('message', $message);
        } else {
            return redirect('/admin-login');
        }
    }

    public function remove(Request $request)
    {
        if(Session::get('is_login') == TRUE){
            $message = Message::find($request['id']);
            $message->delete();
            return response(['status' => 'true', 'data' => 'true', 'message' => '']);
        } else {
            return redirect('/admin-login');
        }
    }
}
