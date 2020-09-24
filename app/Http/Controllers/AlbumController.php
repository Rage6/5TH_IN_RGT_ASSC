<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{

  public function index()
  {
    return view('album',[
      'style' => 'album_style',
      'js' => '/js/my_custom/history/album/album.js',
      'content' => 'album_content'
    ]);
  }
}
