<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Mail\RegistrationEmail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('member_registration',[
          'style' => 'registration_style',
          'js' => '/js/my_custom/registration/registration.js',
          'content' => 'registration_content'
        ]);
    }

    public function post(Request $request)
    {
      $new_content = Request::input('testing_content');
      Mail::to(['nvogt10@gmail.com','nicholas.vogt2017@gmail.com'])->send(new RegistrationEmail($new_content));
      return redirect('/');
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
