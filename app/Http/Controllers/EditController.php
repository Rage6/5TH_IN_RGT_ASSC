<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use App\User;
// use Illuminate\Http\Input;
// use Illuminate\Http\Request;
// use Request;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class EditController extends Controller
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
        return view('edit',compact('this_user'));
    }

    public function updateBasicInfo(Request $request)
    {
      $this_user = Auth::user();
      $this_user->first_name = Request::input('first_name');
      $this_user->last_name = Request::input('last_name');
      $this_user->biography = Request::input('biography');
      $this_user->save();
      // $request->session()->put('status','Update Successful');
      return redirect('home');
    }
}
