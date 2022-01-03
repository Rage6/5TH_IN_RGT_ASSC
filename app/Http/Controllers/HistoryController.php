<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('history',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'history_content'
         ]);
      } else {
        return view('history',[
          'style' => 'history_style',
          'js' => '/js/my_custom/history/history.js',
          'content' => 'history_content'
        ]);
      }
    }

    public function vietnam_preface()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_preface_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_preface_content'
          ]);
      }
    }

    public function vietnam_1966()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_1966_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_1966_content'
          ]);
      }
    }

    public function vietnam_1967()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_1967_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_1967_content'
          ]);
      }
    }

    public function vietnam_1968()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_1968_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_1968_content'
          ]);
      }
    }

    public function vietnam_1969()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_1969_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_1969_content'
          ]);
      }
    }

    public function vietnam_1970()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_1970_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_1970_content'
          ]);
      }
    }

    public function vietnam_1971()
    {
      if (Auth::user()) {
         $unread_count = DB::table('messages')
           ->where([
             ['messages.received_id',Auth::user()->id],
             ['messages.is_read','==',0]
           ])
           ->count();
         return view('vietnam_log',[
           'unread_count' => $unread_count,
           'style' => 'history_style',
           'js' => '/js/my_custom/history/history.js',
           'content' => 'vietnam_1971_content'
         ]);
      } else {
          return view('vietnam_log',[
            'style' => 'history_style',
            'js' => '/js/my_custom/history/history.js',
            'content' => 'vietnam_1971_content'
          ]);
      }
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
