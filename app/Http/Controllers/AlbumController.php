<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{

  // public function index()
  // {
  //   return view('album',[
  //     'style' => 'album_style',
  //     'js' => '/js/my_custom/history/album/album.js',
  //     'content' => 'album_content'
  //   ]);
  // }

  public function ww2()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    }
  }

  public function korea()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'korea_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    }
  }

  public function vietnam()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'vietnam_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    }
  }

  public function ben_cui()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ben_cui_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    }
  }

  public function gwot()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'gwot_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'ww2_content'
      ]);
    }
  }

  public function vietnam_maps()
  {
    if (Auth::user()) {
       $unread_count = DB::table('messages')
         ->where([
           ['messages.received_id',Auth::user()->id],
           ['messages.is_read','==',0]
         ])
         ->count();
      return view('album',[
        'unread_count' => $unread_count,
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'vietnam_map_content'
      ]);
    } else {
      return view('album',[
        'style' => 'album_style',
        'js' => '/js/my_custom/history/album/album.js',
        'content' => 'vietnam_map_content'
      ]);
    }
  }

}
