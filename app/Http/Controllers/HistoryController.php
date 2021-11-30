<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('history',[
         'style' => 'history_style',
         'js' => '/js/my_custom/history/history.js',
         'content' => 'history_content'
       ]);
    }

    public function vietnam_preface()
    {
       return view('history',[
         'style' => 'history_style',
         'js' => '/js/my_custom/history/history.js',
         'content' => 'vietnam_preface_content'
       ]);
    }

    public function vietnam_1966()
    {
       return view('history',[
         'style' => 'history_style',
         'js' => '/js/my_custom/history/history.js',
         'content' => 'vietnam_1966_content'
       ]);
    }

    public function vietnam_1967()
    {
       return view('history',[
         'style' => 'history_style',
         'js' => '/js/my_custom/history/history.js',
         'content' => 'vietnam_1967_content'
       ]);
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
