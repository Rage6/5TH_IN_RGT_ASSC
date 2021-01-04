<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function michelin_rubber_plant_battle()
    {
      return view('history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'michelin_rubber_plant_battle_content'
      ]);
    }

    public function the_rifle_and_the_myth()
    {
      return view('history_topic',[
        'style' => 'history_style',
        'js' => '/js/my_custom/history/history.js',
        'content' => 'the_rifle_and_the_myth_content'
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
