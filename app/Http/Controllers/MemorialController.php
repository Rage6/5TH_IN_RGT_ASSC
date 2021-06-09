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
       ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id AS con_id','when_displayed')
       ->orderBy('casualties.last_name')
       ->get();
       $all_conflicts = DB::table('conflicts')
        ->select('id','name')
        ->orderBy('start_year')
        ->get();
       $casualty_count = count($all_casualty_basics);
       $current_date = date('Y-m-d');
       $current_casualty = null;
       // Shows today's selected casualty, or chooses a casualty for today
       $all_null_request = DB::table('casualties')
        ->join('conflicts','conflicts.id','casualties.conflict_id')
        ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id AS con_id','when_displayed')
        ->where('when_displayed','=',null)
        ->get();
       $null_count = count($all_null_request);
       if ($null_count > 0) {
         $already_selected = null;
         $cas_links = null;
         for ($cas_num = 0; $cas_num < count($all_casualty_basics); $cas_num++) {
           $one_casualty_basic = $all_casualty_basics[$cas_num];
           if ($one_casualty_basic->when_displayed == $current_date) {
             // $already_selected = $one_casualty_basic;
             $already_selected_id = $one_casualty_basic->cas_id;
             $already_selected_raw = DB::table('casualties')
              ->join('conflicts','conflicts.id','casualties.conflict_id')
              ->select('casualties.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','moh_id','conflicts.name AS con_name','conflicts.id AS con_id','photo','unit','when_displayed')
              ->where('casualties.id','=',$already_selected_id)
              ->get();
             $already_selected = $already_selected_raw[0];
             $cas_links = DB::table('other_urls')
              ->select('name','url')
              ->where('casualty_id','=',$already_selected_id)
              ->get();
           };
           if ($already_selected == null && $cas_num == count($all_casualty_basics)-1) {
             $max_rand = $null_count - 1;
             $selected_num = rand(0,$max_rand);
             $already_selected_id = $all_null_request[$selected_num]->cas_id;
             DB::table('casualties')
               ->where('id',$already_selected_id)
               ->update(['when_displayed' => $current_date]);
             $already_selected_raw = DB::table('casualties')
              ->join('conflicts','conflicts.id','casualties.conflict_id')
              ->select('casualties.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','moh_id','conflicts.name AS con_name','conflicts.id AS con_id','photo','unit','when_displayed')
              ->where('casualties.id','=',$already_selected_id)
              ->get();
             $already_selected = $already_selected_raw[0];
             $cas_links = DB::table('other_urls')
              ->select('name','url')
              ->where('casualty_id','=',$already_selected_id)
              ->get();
           };
         };
       } else {
         $already_selected = null;
         $cas_links = null;
         DB::table('casualties')
           ->update(['when_displayed' => null]);
         $all_casualty_count = count($all_casualty_basics);
         $max_rand = $all_casualty_count - 1;
         $selected_num = rand(0,$max_rand);
         $already_selected_id = $all_casualty_basics[$selected_num]->cas_id;
         DB::table('casualties')
           ->where('id','=',$already_selected_id)
           ->update(['when_displayed' => $current_date]);
         $already_selected_raw = DB::table('casualties')
          ->join('conflicts','conflicts.id','casualties.conflict_id')
          ->select('casualties.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','moh_id','conflicts.name AS con_name','conflicts.id AS con_id','photo','unit','when_displayed')
          ->where('casualties.id','=',$already_selected_id)
          ->get();
         $already_selected = $already_selected_raw[0];
         $cas_links = DB::table('other_urls')
          ->select('name','url')
          ->where('casualty_id','=',$already_selected_id)
          ->get();
       };
       //
       return view('casualties',[
         'style' => 'casualties_style',
         'js' => '/js/my_custom/memorials/memorials.js',
         'content' => 'casualties_content',
         'all_casualty_basics' => $all_casualty_basics,
         'all_conflicts' => $all_conflicts,
         'casualty_count' => $casualty_count,
         'already_selected' => $already_selected,
         'cas_links' => $cas_links
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
         ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id','when_displayed')
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
         ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id','when_displayed')
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
         ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id','when_displayed')
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
         ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id','when_displayed')
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
      $current_date = date('Y-m-d');
      $current_casualty = null;
      // Shows today's selected casualty, or chooses a casualty for today
      $all_null_displayed = DB::select('select * from casualties where when_displayed is null');
      $null_count = count($all_null_displayed);
      $unfiltered_casualty_array = DB::table('casualties')
       ->join('conflicts','conflicts.id','casualties.conflict_id')
       ->select('casualties.id AS cas_id','rank','first_name','last_name','unit','conflicts.name AS con_name','conflicts.id','when_displayed')
       ->orderBy('casualties.last_name')
       ->get();
      if ($null_count > 0) {
        $already_selected = null;
        $cas_links = null;
        for ($cas_num = 0; $cas_num < count($unfiltered_casualty_array); $cas_num++) {
          $one_casualty_basic = $unfiltered_casualty_array[$cas_num];
          if ($one_casualty_basic->when_displayed == $current_date) {
            $already_selected_id = $one_casualty_basic->cas_id;
            $already_selected_raw = DB::table('casualties')
             ->join('conflicts','conflicts.id','casualties.conflict_id')
             ->select('casualties.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','moh_id','conflicts.name AS con_name','conflicts.id AS con_id','photo','unit','when_displayed')
             ->where('casualties.id','=',$already_selected_id)
             ->get();
            $already_selected = $already_selected_raw[0];
            $cas_links = DB::table('other_urls')
             ->select('name','url')
             ->where('casualty_id','=',$already_selected_id)
             ->get();
          };
          if ($already_selected == null && $cas_num >= count($unfiltered_casualty_array)) {
            $max_rand = $null_count - 1;
            $selected_num = rand(0,$max_rand);
            DB::table('casualties')
              ->where(['cas_id','=',$already_selected->id])
              ->update(['when_displayed' => $current_date]);
            $already_selected_id = $unfiltered_casualty_array[$selected_num]->cas_id;
            $already_selected_raw = DB::table('casualties')
             ->join('conflicts','conflicts.id','casualties.conflict_id')
             ->select('casualties.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','moh_id','conflicts.name AS con_name','conflicts.id AS con_id','photo','unit','when_displayed')
             ->where('casualties.id','=',$already_selected_id)
             ->get();
            $already_selected = $already_selected_raw[0];
            $cas_links = DB::table('other_urls')
             ->select('name','url')
             ->where('casualty_id','=',$already_selected_id)
             ->get();
          };
        };
      } else {
        $already_selected = null;
        $cas_links = null;
        DB::table('casualties')
          ->update(['when_displayed' => null]);
        $unfiltered_casualty_count = count($unfiltered_casualty_array);
        $max_rand = $unfiltered_casualty_count - 1;
        $selected_num = rand(0,$max_rand);
        $already_selected_id = $unfiltered_casualty_array[$selected_num]->cas_id;
        DB::table('casualties')
          ->where('id','=',$already_selected_id)
          ->update(['when_displayed' => $current_date]);
        $already_selected_raw = DB::table('casualties')
         ->join('conflicts','conflicts.id','casualties.conflict_id')
         ->select('casualties.id AS cas_id','first_name','last_name','rank','place','injury_type','city','state','burial_site','middle_name','day_of_death','month_of_death','year_of_death','comments','moh_id','conflicts.name AS con_name','conflicts.id AS con_id','photo','unit','when_displayed')
         ->where('casualties.id','=',$already_selected_id)
         ->get();
        $already_selected = $already_selected_raw[0];
        $cas_links = DB::table('other_urls')
         ->select('name','url')
         ->where('casualty_id','=',$already_selected_id)
         ->get();
      };
      return view('casualties',[
        'style' => 'casualties_style',
        'js' => '/js/my_custom/memorials/memorials.js',
        'content' => 'casualties_content',
        'all_casualty_basics' => $all_casualty_basics,
        'all_conflicts' => $all_conflicts,
        'casualty_count' => $casualty_count,
        'already_selected' => $already_selected,
        'cas_links' => $cas_links
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
