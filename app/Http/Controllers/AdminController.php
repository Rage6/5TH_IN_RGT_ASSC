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
          ->join('timespan','users.id','timespan.user_id')
          ->select('user_id','timespan.id','email','first_name','last_name','timespan.id','start_year','end_year')
          ->get();
        $final_all_users = [];
        $this_raw_num = 0;
        $next_raw_num = 1;
        foreach ($all_users as $one_raw) {
          $isDuplicate = false;
          for ($u = $next_raw_num; $u < count($all_users); $u++) {
            if ($one_raw->user_id == $all_users[$u]->user_id) {
              $isDuplicate = true;
              $one_range = [$one_raw->start_year,$one_raw->end_year,$one_raw->id];
              $all_users[$u]->all_range[] = $one_range;
            };
          };
          if ($isDuplicate == false) {
            $one_range = [$one_raw->start_year,$one_raw->end_year,$one_raw->id];
            $one_raw->all_range[] = $one_range;
            $final_all_users[] = $one_raw;
          };
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
      // $this_user = Auth::user();
      // $this_user->email = Request::input('new_email');
      // $this_user->save();

      // $select_member = User::find([
      //   'id' => Request::input('member_id')
      // ]);
      // $select_member = User::where('id',Request::input('member_id'));
      DB::table('users')
        ->where('id',Request::input('member_id'))
        ->update(['email' => Request::input('new_email')]);
      // return view('admin',compact('this_user'));
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
