<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Controllers\stdClass;

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
    // public function index()
    // {
    //     $this_user = Auth::user();
    //     $this_id = $this_user->id;
    //     $all_users = DB::table('users')
    //       ->select('id','first_name','last_name')
    //       ->where('id','!=',$this_id)
    //       ->get();
    //     return view('home',compact('this_user','all_users'));
    //     // $style = 'home_style';
    //     // $js = '/js/my_custom/home/home.js';
    //     // $content = 'home_content';
    //     // return view('home',compact('this_user','all_users','style','js','content'));
    // }

    public function index()
    {
        $this_user = Auth::user();
        $this_id = $this_user->id;
        $all_users = DB::table('users')
          ->join('timespan','users.id','timespan.user_id')
          ->select('users.id','email','first_name','last_name','start_year','end_year')
          ->where([
            ['users.id','!=',$this_id],
            ['users.deceased','==','0']
          ])
          ->get();
        $final_all_users = [];
        $this_raw_num = 0;
        $next_raw_num = 1;
        foreach ($all_users as $one_raw) {
          $isDuplicate = false;
          for ($u = $next_raw_num; $u < count($all_users); $u++) {
            if ($one_raw->id == $all_users[$u]->id) {
              $isDuplicate = true;
              $one_range = [$one_raw->start_year,$one_raw->end_year];
              $all_users[$u]->all_range[] = $one_range;
            };
          };
          if ($isDuplicate == false) {
            $one_range = [$one_raw->start_year,$one_raw->end_year];
            $one_raw->all_range[] = $one_range;
            $final_all_users[] = $one_raw;
          };
          $this_raw_num++;
          $next_raw_num++;
        };
        return view('home',compact('this_user','final_all_users'));
    }

}
