<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\PersonalEmail;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
      $this_user = Auth::user();
      $this_id = $this_user->id;
      $view_user = DB::table('users')
        ->select('id','first_name','last_name')
        ->where('id','=',$id)
        ->first();
      $conversation = DB::table('messages')
        ->select('id','content','is_read','sent_id','received_id')
        ->where([
          ['sent_id','=',$this_id],
          ['received_id','=',$view_user->id]
        ])->orWhere([
          ['sent_id','=',$view_user->id],
          ['received_id','=',$this_id]
        ])->orderBy('id','desc')
        ->get();
      return view('message',compact('this_user','view_user','conversation'));
    }

    public function post(Request $request)
    {
      $receiver = Request::input('receiver');
      $content = Request::input('content');
      DB::table('messages')
        ->insert([
            'content' => Request::input('content'),
            'sent_id' => Request::input('sender'),
            'received_id' => Request::input('receiver')
          ]
        );
      return redirect('/home/message/'.$receiver);
    }

    // For emailing...
    // public function post(Request $request)
    // {
    //   $this_user = Auth::user();
    //   $this_id = $this_user->id;
    //   $all_users = DB::table('users')
    //     ->select('id','first_name','last_name','email')
    //     ->where('id','!=',$this_id)
    //     ->get();
    //   $sender = Auth::user();
    //   $new_sender_id = $this_user->id;
    //   $new_sender_name = $this_user->first_name." ".$this_user->last_name;
    //   $new_sender_email = $this_user->email;
    //   $new_receiver_id = Request::input('receiver_id');
    //   $new_receiver_data = DB::table('users')
    //     ->select('first_name','last_name','email')
    //     ->where('id','=',$new_receiver_id)
    //     ->first();
    //   $new_receiver_name = $new_receiver_data->first_name." ".$new_receiver_data->last_name;
    //   $new_content = Request::input('content');
    //   // $data = Request::input('content');
    //   // Mail::to($receiver_data->email)->send(new PersonalEmail($data));
    //   Mail::to($new_receiver_data->email)->send(new PersonalEmail($new_content,$new_receiver_name,$new_sender_name,$new_sender_email));
    //   // $status = "Message sent";
    //   // return view('home',compact('this_user','all_users'));
    //   return redirect('/home');
    // }
}
