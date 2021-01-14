<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
      $this_user = Auth::user();
      if ($this_user->admin == 1) {
        $all_users = DB::table('users')
          -> select('id','email','first_name','last_name')
          ->orderBy('last_name','asc')
          ->get();
        $final_all_users = [];
        $this_raw_num = 0;
        $next_raw_num = 1;
        foreach ($all_users as $one_raw) {
          $all_timespan = DB::table('timespan')
            ->select('id','user_id','start_year','end_year')
            ->where('user_id',$one_raw->id)
            ->get();
          $one_raw->all_range = [];
          foreach($all_timespan as $one_timespan) {
            $one_range = [$one_timespan->start_year,$one_timespan->end_year,$one_timespan->id];
            $one_raw->all_range[] = $one_range;
          };
          $final_all_users[] = $one_raw;
          $this_raw_num++;
          $next_raw_num++;
        };
        return view('admin',compact('final_all_users'));
      } else {
        return redirect('/');
      };
    }

    public function changeEmail(Request $request)
    {
      DB::table('users')
        ->where('id',Request::input('member_id'))
        ->update(['email' => Request::input('new_email')]);
      return redirect('home/admin');
    }

    public function addRange(Request $request)
    {
      DB::table('timespan')
        ->insert([
          'start_year' => Request::input('start_year'),
          'end_year' => Request::input('end_year'),
          'user_id' => Request::input('member_id')
        ]);
      return redirect('home/admin');
    }

    public function deleteRange(Request $request)
    {
      DB::table('timespan')
        ->where('id','=',Request::input('select_range'))
        ->delete();
      return redirect('home/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
