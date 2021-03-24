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
          ->select('id','email','first_name','last_name','deceased')
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
          ->select('id','first_name','last_name','rank','action_date','place','citation','posthumous','member_id','conflict_id')
          ->orderBy('last_name','asc')
          ->orderBy('first_name','asc')
          ->get();
        $all_casualties = DB::table('casualties')
          ->select('id','first_name','middle_name','last_name','rank','place','injury_type','injury_type','day_of_death','month_of_death','year_of_death','year_of_death','city','state','burial_site','comments','member_id','moh_id','conflict_id')
          ->orderBy('last_name','asc')
          ->orderBy('first_name','asc')
          ->get();
        $all_conflicts = DB::table('conflicts')
          ->select('id','name','start_year','end_year')
          ->orderBy('start_year')
          ->get();
        $all_conflict_links = DB::table('conflict_links')
          ->select('conflict_id','casualty_id','member_id','recipient_id')
          ->get();
        $all_urls = DB::table('other_urls')
          ->select('name','url','member_id','casualty_id','moh_id')
          ->get();
        return view('admin',compact('final_all_users','all_recipients','all_casualties','all_conflicts','all_conflict_links','all_urls'));
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
      DB::table('recipients')
        ->where('member_id','=',Request::input('user_id'))
        ->update([
          'member_id' => NULL
        ]);
      DB::table('casualties')
        ->where('member_id','=',Request::input('user_id'))
        ->update([
          'member_id' => NULL
        ]);
      DB::table('users')
        ->where('id','=',Request::input('member_id'))
        ->delete();
      return redirect('home/admin');
    }

    public function stillAlive(Request $request)
    {
      DB::table('users')
        ->where('id','=',Request::input('member_id'))
        ->update([
          'deceased' => Request::input('is_deceased')
        ]);
      return redirect('home/admin');
    }

    public function cmohConnection(Request $request)
    {
      if (Request::input('recipient_id') != "null") {
        DB::table('recipients')
          ->where('recipients.member_id','=',Request::input('member_id'))
          ->update([
            'recipients.member_id' => NULL
          ]);
        DB::table('recipients')
          ->where('recipients.id','=',Request::input('recipient_id'))
          ->update([
            'recipients.member_id' => Request::input('member_id')
          ]);
      } else {
        DB::table('recipients')
          ->where('recipients.member_id','=',Request::input('member_id'))
          ->update([
            'recipients.member_id' => NULL
          ]);
      };
      return redirect('home/admin');
    }

    public function casualtyConnection(Request $request)
    {
      if (Request::input('casualty_id') != "null") {
        DB::table('casualties')
          ->where('casualties.member_id','=',Request::input('member_id'))
          ->update([
            'casualties.member_id' => NULL
          ]);
        DB::table('casualties')
          ->where('casualties.id','=',Request::input('casualty_id'))
          ->update([
            'casualties.member_id' => Request::input('member_id')
          ]);
      } else {
        DB::table('casualties')
          ->where('casualties.member_id','=',Request::input('member_id'))
          ->update([
            'casualties.member_id' => NULL
          ]);
      };
      return redirect('home/admin');
    }

    public function addConflictToMember(Request $request)
    {
      DB::table('conflict_links')
        ->insert([
          'conflict_id' => Request::input('selected_conflict'),
          'member_id' => Request::input('member_id')
        ]);
      return redirect('home/admin');
    }

    public function deleteConflictFromMember(Request $request)
    {
      DB::table('conflict_links')
        ->where([
          ['conflict_id','=',Request::input('conflict_id')],
          ['member_id','=',Request::input('member_id')]
        ])
        ->delete();
      return redirect('home/admin');
    }

    public function addRecipient(Request $request)
    {
      DB::table('recipients')
        ->insert([
          'first_name' => Request::input('first_name'),
          'last_name' => Request::input('last_name'),
          'rank' => Request::input('rank'),
          'conflict_id' => Request::input('conflict'),
          'action_date' => Request::input('action_date'),
          'place' => Request::input('place'),
          'citation' => Request::input('citation'),
          'posthumous' => Request::input('posthumous')
        ]);
        $new_moh_id = DB::getPdo()->lastInsertId();
        $link_id_list = Request::input('link_id_list');
        if ($link_id_list != "") {
          $link_id_array = explode(",",$link_id_list);
          foreach($link_id_array as $one_link_id) {
            $name = 'moh_link_name_'.$one_link_id;
            $link = 'recipient_link_'.$one_link_id;
            DB::table('other_urls')
              ->insert([
                'name' => Request::input($name),
                'url' => Request::input($link),
                'moh_id' => $new_moh_id
              ]);
          };
        };
      return redirect('home/admin');
    }

    public function changeRecipient(Request $request)
    {
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'first_name' => Request::input('first_name')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'last_name' => Request::input('last_name')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'rank' => Request::input('rank')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'conflict_id' => Request::input('conflict')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'action_date' => Request::input('action_date')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'place' => Request::input('place')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'citation' => Request::input('citation')
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->update([
          'posthumous' => Request::input('posthumous')
        ]);
      DB::table('other_urls')
        ->where('moh_id','=',Request::input('recip_id'))
        ->delete();
      $link_list = Request::input('link_list');
      $link_array = explode(",",$link_list);
      foreach ($link_array as $one_link) {
        $input_name = "link_name_".$one_link;
        $input_url = "link_url_".$one_link;
        DB::table('other_urls')
        ->insert([
          'name' => Request::input($input_name),
          'url' => Request::input($input_url),
          'moh_id' => Request::input('recip_id')
        ]);
      };
      return redirect('home/admin');
    }

    public function deleteRecipient(Request $request)
    {
      DB::table('other_urls')
        ->where('moh_id','=',Request::input('recip_id'))
        ->delete();
      DB::table('casualties')
        ->where('moh_id','=',Request::input('recip_id'))
        ->update([
          'moh_id' => NULL
        ]);
      DB::table('recipients')
        ->where('id','=',Request::input('recip_id'))
        ->delete();
      return redirect('home/admin');
    }

    public function addCasualty(Request $request)
    {
      DB::table('casualties')
        ->insert([
          'first_name' => Request::input('first_name'),
          'middle_name' => Request::input('middle_name'),
          'last_name' => Request::input('last_name'),
          'rank' => Request::input('rank'),
          'conflict_id' => Request::input('conflict'),
          'day_of_death' => Request::input('day_of_death'),
          'month_of_death' => Request::input('month_of_death'),
          'year_of_death' => Request::input('year_of_death'),
          'place' => Request::input('place'),
          'injury_type' => Request::input('injury_type'),
          'city' => Request::input('city'),
          'state' => Request::input('state'),
          'burial_site' => Request::input('burial_site'),
          'comments' => Request::input('comments')
        ]);
        $new_cas_id = DB::getPdo()->lastInsertId();
        $link_id_list = Request::input('link_id_list');
        if ($link_id_list != "") {
          $link_id_array = explode(",",$link_id_list);
          foreach($link_id_array as $one_link_id) {
            $name = 'cas_link_name_'.$one_link_id;
            $link = 'casualty_link_'.$one_link_id;
            DB::table('other_urls')
              ->insert([
                'name' => Request::input($name),
                'url' => Request::input($link),
                'casualty_id' => $new_cas_id
              ]);
          };
        };
      return redirect('home/admin');
    }

    public function changeCasualty(Request $request)
    {
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'first_name' => Request::input('first_name')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'middle_name' => Request::input('middle_name')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'last_name' => Request::input('last_name')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'rank' => Request::input('rank')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'conflict_id' => Request::input('conflict')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'month_of_death' => Request::input('month_of_death')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'day_of_death' => Request::input('day_of_death')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'year_of_death' => Request::input('year_of_death')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'place' => Request::input('place')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'injury_type' => Request::input('injury_type')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'city' => Request::input('city')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'state' => Request::input('state')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'burial_site' => Request::input('burial_site')
        ]);
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->update([
          'comments' => Request::input('comments')
        ]);
      return redirect('home/admin');
    }

    public function casualtyDetails(Request $request)
    {
      if (Request::input('recipient_to_casualty') != "null") {
        DB::table('casualties')
          ->where('casualties.id','=',Request::input('casualty_id'))
          ->update([
            'casualties.moh_id' => Request::input('recipient_to_casualty')
          ]);
      } else {
        DB::table('casualties')
          ->where('casualties.id','=',Request::input('casualty_id'))
          ->update([
            'casualties.moh_id' => NULL
          ]);
      };
      return redirect('home/admin');
    }

    public function deleteCasualty(Request $request)
    {
      DB::table('casualties')
        ->where('id','=',Request::input('cas_id'))
        ->delete();
      return redirect('home/admin');
    }

    public function addConflict(Request $request)
    {
      DB::table('conflicts')
        ->insert([
          'name'=>Request::input('conflict_name'),
          'start_year'=>Request::input('start_year'),
          'end_year'=>Request::input('end_year')
        ]);
      return redirect('home/admin');
    }

    public function changeConflict(Request $request)
    {
      DB::table('conflicts')
        ->where('id','=',Request::input('conflict_id'))
        ->update([
          'name' => Request::input('name'),
          'start_year' => Request::input('start_year'),
          'end_year' => Request::input('end_year')
        ]);
      return redirect('home/admin');
    }

    public function deleteConflict(Request $request)
    {
      DB::table('recipients')
        ->where('member_id','=',Request::input('user_id'))
        ->update([
          'member_id' => NULL
        ]);
      DB::table('casualties')
        ->where('member_id','=',Request::input('user_id'))
        ->update([
          'member_id' => NULL
        ]);
      DB::table('conflicts')
        ->insert([
          'name'=>Request::input('conflict_name'),
          'start_year'=>Request::input('start_year'),
          'end_year'=>Request::input('end_year')
        ]);
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
