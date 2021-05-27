<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function casualties_index()
    {
      $all_casualty_basics = DB::table('casualties')
       ->join('conflicts','conflicts.id','casualties.conflict_id')
       ->select('casualties.id','rank','first_name','last_name','unit','conflicts.name','conflicts.id')
       ->orderBy('casualties.last_name')
       ->get();
       $casualty_count = DB::table('casualties')
        ->count();
       $all_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->orderBy('start_year')
        ->get();
      return view('casualties',[
        'style' => 'casualties_style',
        'js' => '/js/my_custom/memorials/memorials.js',
        'content' => 'casualties_content',
        'all_casualty_basics' => $all_casualty_basics,
        'all_conflicts' => $all_conflicts,
        'casualty_count' => $casualty_count
      ]);
    }

    public function casualties_search(Request $request)
    {
      $all_casualty_basics = [];
      $first_name = $request->firstName;
      $last_name = $request->lastName;
      $unit_init = $request->unit;
      $unit = "%".$unit_init."%";
      $conflict_init = $request->conflict;
      $conflict = "%".$conflict_init."%";
      if ($conflict != '' && $unit_init != '') {
        $first_list = DB::table('casualties')
         ->join('conflicts','conflicts.id','casualties.conflict_id')
         ->select('casualties.id','rank','first_name','last_name','unit','conflicts.name','conflicts.id')
         ->orderBy('casualties.last_name')
         ->where(
           [
             ['conflicts.name','like',$conflict],
             ['casualties.unit','like',$unit]
           ])
         ->get();
         if ($first_name != '') {
           $second_list = [];
           foreach ($first_list as $one_first_name) {
             if ($first_name == $one_first_name->first_name) {
               $second_list[] = $one_first_name;
             };
           };
           if ($last_name != '') {
             $third_list = [];
             foreach ($second_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $third_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $third_list;
           } else {
             $all_casualty_basics = $second_list;
           };
         } else {
           if ($last_name != '') {
             $second_list = [];
             foreach ($first_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $second_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $second_list;
           } else {
             $all_casualty_basics = $first_list;
           };
         };
      } elseif ($conflict != '' && $unit_init == '') {
        $first_list = DB::table('casualties')
         ->join('conflicts','conflicts.id','casualties.conflict_id')
         ->select('casualties.id','rank','first_name','last_name','unit','conflicts.name','conflicts.id')
         ->orderBy('casualties.last_name')
         ->where('conflicts.name','like',$conflict)
         ->get();
         if ($first_name != '') {
           $second_list = [];
           foreach ($first_list as $one_first_name) {
             if ($first_name == $one_first_name->first_name) {
               $second_list[] = $one_first_name;
             };
           };
           if ($last_name != '') {
             $third_list = [];
             foreach ($second_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $third_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $third_list;
           } else {
             $all_casualty_basics = $second_list;
           };
         } else {
           if ($last_name != '') {
             $second_list = [];
             foreach ($first_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $second_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $second_list;
           } else {
             $all_casualty_basics = $first_list;
           };
         };
      } elseif ($conflict == '' && $unit_init != '') {
        $first_list = DB::table('casualties')
         ->join('conflicts','conflicts.id','casualties.conflict_id')
         ->select('casualties.id','rank','first_name','last_name','unit','conflicts.name','conflicts.id')
         ->orderBy('casualties.last_name')
         ->where('casualties.unit','like',$unit)
         ->get();
         if ($first_name != '') {
           $second_list = [];
           foreach ($first_list as $one_first_name) {
             if ($first_name == $one_first_name->first_name) {
               $second_list[] = $one_first_name;
             };
           };
           if ($last_name != '') {
             $third_list = [];
             foreach ($second_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $third_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $third_list;
           } else {
             $all_casualty_basics = $second_list;
           };
         } else {
           if ($last_name != '') {
             $second_list = [];
             foreach ($first_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $second_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $second_list;
           } else {
             $all_casualty_basics = $first_list;
           };
         };
      } else {
        $first_list = DB::table('casualties')
         ->join('conflicts','conflicts.id','casualties.conflict_id')
         ->select('casualties.id','rank','first_name','last_name','unit','conflicts.name','conflicts.id')
         ->orderBy('casualties.last_name')
         ->get();
         if ($first_name != '') {
           $second_list = [];
           foreach ($first_list as $one_first_name) {
             if ($first_name == $one_first_name->first_name) {
               $second_list[] = $one_first_name;
             };
           };
           if ($last_name != '') {
             $third_list = [];
             foreach ($second_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $third_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $third_list;
           } else {
             $all_casualty_basics = $second_list;
           };
         } else {
           if ($last_name != '') {
             $second_list = [];
             foreach ($first_list as $one_last_name) {
               if ($last_name == $one_last_name->last_name) {
                 $second_list[] = $one_last_name;
               };
             };
             $all_casualty_basics = $second_list;
           } else {
             $all_casualty_basics = $first_list;
           };
         };
      };
      $first_name = $request->firstName;
      $last_name = $request->lastName;
      $all_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->orderBy('start_year')
        ->get();
      $casualty_count = count($all_casualty_basics);
      return view('casualties',[
        'style' => 'casualties_style',
        'js' => '/js/my_custom/memorials/memorials.js',
        'content' => 'casualties_content',
        'all_casualty_basics' => $all_casualty_basics,
        'all_conflicts' => $all_conflicts,
        'casualty_count' => $casualty_count
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
