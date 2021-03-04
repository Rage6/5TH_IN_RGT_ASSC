<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryTopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ben_cui_battle()
    {
     $ben_cui_casualties = DB::table('casualties')
      ->join('conflicts','conflicts.id','casualties.conflict_id')
      ->select('casualties.id','rank','first_name','last_name','name')
      ->where('name','like','%Ben Cui%')
      ->orderBy('casualties.last_name')
      ->get();
     return view('history_topic_lists',[
       'style' => 'history_style',
       'js' => '/js/my_custom/history/history.js',
       'content' => 'ben_cui_battle_content',
       'all_casualties' => $ben_cui_casualties
     ]);
    }

    public function presidential_citation()
    {
     return view('history_topic',[
       'style' => 'history_style',
       // 'style' => 'css.history',
       'js' => '/js/my_custom/history/history.js',
       'content' => 'presidential_citation_content'
     ]);
    }

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
