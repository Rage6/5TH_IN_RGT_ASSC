<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\RegistrationEmail;

use Illuminate\Support\Facades\App;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $currentYear = date("Y");
      $modern_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->where('end_year','>',$currentYear - 100)
        ->orWhere('end_year','=',null)
        ->orderBy('start_year','asc')
        ->get();
      return view('member_registration',[
        'style' => 'registration_style',
        'js' => '/js/my_custom/registration/registration.js',
        'content' => 'registration_content',
        'modern_conflicts' => $modern_conflicts
      ]);
    }

    public function post(Request $request)
    {
      $modern_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->where('end_year','>',1920)
        ->orderBy('start_year','asc')
        ->get();
      $init_submission = app();
      $new_submission = $init_submission->make('stdClass');
      $new_submission->first_name = Request::input('first_name');
      $new_submission->last_name = Request::input('last_name');
      $new_submission->spouse_name = Request::input('spouse_name');
      $new_submission->address_line_1 = Request::input('address_line_1');
      $new_submission->address_line_2 = Request::input('address_line_2');
      $new_submission->city = Request::input('city');
      $new_submission->state = Request::input('state');
      $new_submission->zip_code = Request::input('zip_code');
      $new_submission->country = Request::input('country');
      $new_submission->phone_number = Request::input('phone_number');
      $new_submission->conflicts = '';
      $init_conflict = true;
      foreach ($modern_conflicts as $one_conflict) {
        $input_name = "conflict_".$one_conflict->id;
        $conflict_result = Request::input($input_name);
        if (isset($conflict_result)) {
          if ($init_conflict == true) {
            $new_submission->conflicts .= Request::input($input_name);
            $init_conflict = false;
          } else {
            $new_submission->conflicts .= ", ".Request::input($input_name);
          }
        };
      };
      $new_submission->unit_details = Request::input('unit_details');
      $new_submission->registration_type = Request::input('registration_type');
      $new_submission->pay_method = Request::input('pay_method');
      $new_submission->email = Request::input('email');
      $new_submission->comments = Request::input('comments');
      if (App::environment() == 'local') {
        Mail::to(['nvogt10@gmail.com','nicholas.vogt2017@gmail.com'])->send(new RegistrationEmail($new_submission));
      } else {
        Mail::to([env('MEMBERSHIP_EMAIL_1'),env('MEMBERSHIP_EMAIL_2'),env('MEMBERSHIP_EMAIL_3'),env('MEMBERSHIP_EMAIL_4')])->send(new RegistrationEmail($new_submission));
      }

      if ($new_submission->pay_method == "checking") {
        return redirect('http://www.bobcat.ws/application.htm');
      } else {
      //   if ($new_submission->registration_type === "Renewal") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Active Duty") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Associate") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "One Year") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Two Years") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Five Years") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Life to 49") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Life to 64") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else if ($new_submission->registration_type === "Life 65 and above") {
      //     return redirect('http://bobcat.ws/membership-payment.html');
      //   } else {
      //     return redirect('/');
      //   }
        return redirect('/');
      };
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
