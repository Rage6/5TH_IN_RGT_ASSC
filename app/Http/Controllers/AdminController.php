<?php

namespace App\Http\Controllers;

use App\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

use App\Traits\UploadTrait;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    use UploadTrait;
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
          ->select('id','first_name','last_name','rank','action_date','place','citation','posthumous','member_id','conflict_id','photo')
          ->orderBy('last_name','asc')
          ->orderBy('first_name','asc')
          ->get();
        $all_casualties = DB::table('casualties')
          ->select('id','first_name','middle_name','last_name','rank','place','injury_type','injury_type','day_of_death','month_of_death','year_of_death','year_of_death','city','state','burial_site','comments','member_id','moh_id','conflict_id','photo')
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
      $new_member = new User;
      $new_member->first_name = Request::input('first_name');
      $new_member->last_name = Request::input('last_name');
      $new_member->email = Request::input('email');
      $new_member->password = $randome_password;
      $new_member->save();
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
      // Adds all of the basic information
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
      if (Request::hasFile('new_moh_img')) {
        // Assigns the photo's filename
        $last_name = Request::input('last_name');
        $moh_photo_name = "moh_".$last_name."_".$new_moh_id;
        // DB::table('recipients')
        //   ->where('id','=',$new_moh_id)
        //   ->update([
        //     'photo' => $moh_photo_name
        // ]);
        // Uploades the image to AWS
        Request::validate([
            'new_moh_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if (Request::has('new_moh_img')) {
          // First, sends to AWS...
          $image = Request::file('new_moh_img');
          $filePath = $moh_photo_name.'.'.$image->getClientOriginalExtension();
          $s3 = Storage::disk('s3');
          $s3->put($filePath, file_get_contents($image), 'public');
          // ...then adds name to DB
          $photo_with_ext = $moh_photo_name.".".$image->getClientOriginalExtension();
          DB::table('recipients')
            ->where('id','=',$new_moh_id)
            ->update([
              'photo' => $moh_photo_name.".".$image->getClientOriginalExtension()
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
      if ($link_list != "") {
        $link_array = explode(",",$link_list);
        foreach ($link_array as $one_link) {
          $input_name = "moh_link_name_".$one_link;
          $input_url = "moh_link_url_".$one_link;
          DB::table('other_urls')
          ->insert([
            'name' => Request::input($input_name),
            'url' => Request::input($input_url),
            'moh_id' => Request::input('recip_id')
          ]);
        };
      };
      if (Request::hasFile('current_moh_img')) {
        $filename = Request::input('existing_filename');
        Storage::disk('s3')->delete($filename);
        Request::validate([
            'current_moh_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if (Request::has('current_moh_img')) {
          // Deletes the current image in AWS...
          $filename = Request::input('existing_filename');
          Storage::disk('s3')->delete($filename);
          // ...in order to add the new image to AWS...
          $last_name = Request::input('last_name');
          $recip_id = Request::input('recip_id');
          $extension = Request::file('current_moh_img')->getClientOriginalExtension();
          $new_filename = "moh_".$last_name."_".$recip_id.".".$extension;
          $image = Request::file('current_moh_img');
          $s3 = Storage::disk('s3');
          $s3->put($new_filename, file_get_contents($image), 'public');
          // ...and update the photo name in DB.
          DB::table('recipients')
            ->where('id','=',Request::input('recip_id'))
            ->update([
              'photo' => $new_filename
            ]);
        };
      };
      return redirect('home/admin');
    }

    public function deleteRecipient(Request $request)
    {
      $delete_filename = Request::input('recip_photo');
      Storage::disk('s3')->delete($delete_filename);
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
          $link = 'cas_link_url_'.$one_link_id;
          DB::table('other_urls')
            ->insert([
              'name' => Request::input($name),
              'url' => Request::input($link),
              'casualty_id' => $new_cas_id
            ]);
        };
      };
      if (Request::hasFile('new_casualty_img')) {
        // Assigns the photo's filename
        $last_name = Request::input('last_name');
        $cas_photo_name = "cas_".$last_name."_".$new_cas_id;
        // DB::table('recipients')
        //   ->where('id','=',$new_cas_id)
        //   ->update([
        //     'photo' => $cas_photo_name
        // ]);
        // Uploades the image to AWS
        Request::validate([
            'new_casualty_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if (Request::has('new_casualty_img')) {
          // First, sends to AWS...
          $image = Request::file('new_casualty_img');
          $filePath = $cas_photo_name.'.'.$image->getClientOriginalExtension();
          $s3 = Storage::disk('s3');
          $s3->put($filePath, file_get_contents($image), 'public');
          // ...then adds name to DB
          $photo_with_ext = $cas_photo_name.".".$image->getClientOriginalExtension();
          DB::table('casualties')
            ->where('id','=',$new_cas_id)
            ->update([
              'photo' => $photo_with_ext
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
      DB::table('other_urls')
        ->where('casualty_id','=',Request::input('cas_id'))
        ->delete();
      $cas_link_list = Request::input('cas_link_list');
      if ($cas_link_list != "") {
        $cas_link_array = explode(",",$cas_link_list);
        foreach ($cas_link_array as $cas_one_link) {
          $cas_input_name = "cas_link_name_".$cas_one_link;
          $cas_input_url = "cas_link_url_".$cas_one_link;
          DB::table('other_urls')
          ->insert([
            'name' => Request::input($cas_input_name),
            'url' => Request::input($cas_input_url),
            'casualty_id' => Request::input('cas_id')
          ]);
        };
      };
      if (Request::hasFile('current_cas_img')) {
        $filename = Request::input('existing_filename');
        Storage::disk('s3')->delete($filename);
        Request::validate([
            'current_cas_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if (Request::has('current_cas_img')) {
          // Deletes the current image in AWS...
          $filename = Request::input('existing_filename');
          Storage::disk('s3')->delete($filename);
          // ...in order to add the new image to AWS...
          $last_name = Request::input('last_name');
          $cas_id = Request::input('cas_id');
          $extension = Request::file('current_cas_img')->getClientOriginalExtension();
          $new_filename = "cas_".$last_name."_".$cas_id.".".$extension;
          $image = Request::file('current_cas_img');
          $s3 = Storage::disk('s3');
          $s3->put($new_filename, file_get_contents($image), 'public');
          // ...and update the photo name in DB.
          DB::table('casualties')
            ->where('id','=',Request::input('cas_id'))
            ->update([
              'photo' => $new_filename
            ]);
        };
      };
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
