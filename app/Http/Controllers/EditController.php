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
use Illuminate\Support\Facades\DB;

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
        $all_links = DB::table('other_urls')
          ->select('name','url')
          ->where('member_id','=',$this_user->id)
          ->get();
        return view('edit',compact('this_user','all_links'));
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

    public function addNewLink(Request $request)
    {
      DB::table('other_urls')
        ->insert(
          [
            'name' => Request::input('link_name'),
            'url' => Request::input('link_url'),
            'member_id' => Request::input('user_id')
          ]);
      return redirect('home/edit');
    }
}
