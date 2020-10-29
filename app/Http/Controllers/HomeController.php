<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
    public function index()
    {
        $this_user = Auth::user();
        $this_id = $this_user->id;
        $all_users = DB::table('users')
          ->select('id','first_name','last_name')
          ->where('id','!=',$this_id)
          ->get();
        return view('home',compact('this_user','all_users'));
    }
}
