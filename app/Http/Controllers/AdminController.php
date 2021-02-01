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
          ->select('id','email','first_name','last_name','deceased','moh')
          ->orderBy('last_name','asc')
          ->get();
        $final_all_users = [];
        $this_raw_num = 0;
        $next_raw_num = 1;
        foreach ($all_users as $one_raw) {
          $all_timespan = DB::table('timespan')
            ->select('id','user_id','start_year','end_year','start_month','end_month','job','unit')
            ->where('user_id',$one_raw->id)
            ->get();
          $one_raw->all_range = [];
          $month_names = array(
            null,
            "JAN",
            "FEB",
            "MAR",
            "APR",
            "MAY",
            "JUN",
            "JUL",
            "AUG",
            "SEP",
            "OCT",
            "NOV",
            "DEC"
          );
          foreach($all_timespan as $one_timespan) {
            $start_month_name = $month_names[intval($one_timespan->start_month)];
            $end_month_name = $month_names[intval($one_timespan->end_month)];
            $one_range = [
              $one_timespan->start_year,
              $one_timespan->end_year,
              $one_timespan->id,
              // $one_timespan->start_month,
              $start_month_name,
              // $one_timespan->end_month,
              $end_month_name,
              $one_timespan->job,
              $one_timespan->unit
            ];
            $one_raw->all_range[] = $one_range;
          };
          $final_all_users[] = $one_raw;
          $this_raw_num++;
          $next_raw_num++;
        };
        $all_recipients = DB::table('recipients')
          ->select('id','first_name','last_name','member_id')
          ->orderBy('last_name','asc')
          ->get();
        return view('admin',compact('final_all_users','all_recipients'));
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
          'user_id' => Request::input('member_id'),
          'start_month' => Request::input('start_month'),
          'end_month' => Request::input('end_month'),
          'job' => Request::input('new_job'),
          'unit' => Request::input('new_unit')
        ]);
      return redirect('home/admin');
    }

    public function addAssociate(Request $request)
    {
      DB::table('timespan')
        ->insert([
          'user_id' => Request::input('assoc_id')
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

    public function addMember(Request $request)
    {
      $randome_password = bin2hex(random_bytes(32));
      DB::table('users')
        ->insert([
          'first_name' => Request::input('first_name'),
          'last_name' => Request::input('last_name'),
          'email' => Request::input('email'),
          'password' => $randome_password,
          'deceased' => 0,
          'admin' => 0
        ]);
      return redirect('home/admin');
    }

    public function deleteMember(Request $request)
    {
      DB::table('timespan')
        ->where('user_id','=',Request::input('member_id'))
        ->delete();
      DB::table('users')
        ->where('id','=',Request::input('member_id'))
        ->delete();
      return redirect('home/admin');
    }

    public function changeDetails(Request $request)
    {
      DB::table('users')
        ->where('id','=',Request::input('member_id'))
        ->update([
          'deceased' => Request::input('is_deceased')
        ]);
      DB::table('recipients')
        ->where('member_id','=',Request::input('member_id'))
        ->update([
          'member_id' => null
        ]);
      if (Request::input('recipient_id') != "null") {
        DB::table('recipients')
          ->where('id','=',Request::input('recipient_id'))
          ->update([
            'member_id' => Request::input('member_id')
          ]);
      } else {
        DB::table('recipients')
          ->where('id','=',Request::input('recipient_id'))
          ->update([
            'member_id' => NULL
          ]);
      };
      return redirect('home/admin');
    }

    public function addRecipient(Request $request)
    {
      DB::table('recipients')
        ->insert([
          'first_name' => Request::input('first_name'),
          'last_name' => Request::input('last_name'),
          'rank' => Request::input('rank'),
          'conflict' => Request::input('conflict'),
          'action_date' => Request::input('action_date'),
          'place' => Request::input('place'),
          'citation' => Request::input('citation'),
          'posthumous' => Request::input('posthumous')
        ]);
      return redirect('home/admin');
    }

    public function deleteRecipient(Request $request)
    {
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
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
