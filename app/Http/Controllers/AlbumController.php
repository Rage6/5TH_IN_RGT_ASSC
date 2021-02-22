<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    return view('album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'ww2_content'
    ]);
  }

  public function korea()
  {
    return view('album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'korea_content'
    ]);
  }

  public function vietnam()
  {
    return view('album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'vietnam_content'
    ]);
  }

  public function ben_cui()
  {
    return view('album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'ben_cui_content'
    ]);
  }

  public function gwot()
  {
    return view('album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'gwot_content'
    ]);
  }

}
