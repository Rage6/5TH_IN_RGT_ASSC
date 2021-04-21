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

class LinkController extends Controller
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
          ->select('id','name','url')
          ->where('member_id','=',$this_user->id)
          ->get();
        return view('links',compact('this_user','all_links'));
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
      return redirect('home/edit/links');
    }

    public function deleteOldLink(Request $request)
    {
      DB::table('other_urls')
        ->where('id','=',Request::input('link_id'))
        ->delete();
      return redirect('home/edit/links');
    }
}
