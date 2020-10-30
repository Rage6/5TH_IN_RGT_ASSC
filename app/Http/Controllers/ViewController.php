<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
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
        ->select('id','first_name','last_name','current_img','veteran_img','biography')
        ->where('id','=',$id)
        ->first();
      return view('view',compact('this_user','view_user'));
    }
}
