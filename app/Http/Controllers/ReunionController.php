<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\ReunionEmail;

class ReunionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $this_user = Auth::user();
      // if ($this_user != NULL) {
        return view('reunion_registration',[
          'style' => 'reunion_style',
          'js' => '/js/my_custom/reunion/reunion.js',
          'content' => 'reunion_content',
          'this_user' => $this_user
        ]);
      // } else {
      //   return view('reunion_registration',[
      //     'style' => 'reunion_style',
      //     'js' => '/js/my_custom/reunion/reunion.js',
      //     'content' => 'reunion_content'
      //   ]);
      // }
    }

    public function post(Request $request)
    {
      $init_submission = app();
      $new_submission = $init_submission->make('stdClass');
      $new_submission->first_name = Request::input('first_name');
      $new_submission->last_name = Request::input('last_name');
      $new_submission->guest_num = Request::input('guest_num');
      $new_submission->guest_names = Request::input('guest_names');
      $new_submission->phone_number = Request::input('phone_number');
      $new_submission->email = Request::input('email');
      $new_submission->arrival_date = Request::input('arrival_date');
      $new_submission->air_and_space = Request::input('air_and_space');
      $new_submission->dc_monuments = Request::input('dc_monuments');
      $new_submission->army_museum = Request::input('army_museum');
      $new_submission->ladies_breakfast = Request::input('ladies_breakfast');
      $new_submission->air_and_space = Request::input('air_and_space');
      $new_submission->driving = Request::input('driving');
      $new_submission->first_reunion = Request::input('first_reunion');
      $new_submission->comments = Request::input('comments');
      $new_email = Request::input('email');
      Mail::to(['nicholas.vogt2017@gmail.com','nvogt10@bobcat.ws'])->send(new ReunionEmail($new_submission));
      // Mail::to(['randy@bobcat.ws','nvogt10@gmail.com','carolynjk@bobcat.ws','crd@bobcat.ws','nicholas.vogt2017@gmail.com','nvogt10@bobcat.ws'])->send(new ReunionEmail($new_submission));
      return redirect('http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html');
      // return redirect('/reunion');
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
