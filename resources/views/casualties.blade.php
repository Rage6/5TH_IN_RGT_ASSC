@extends('layouts.master')

@section('casualties_style')
  <!-- Casualties Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/memorials/casualties/360_casualties.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/memorials/casualties/375_casualties.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/memorials/casualties/414_casualties.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/memorials/casualties/768_casualties.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/memorials/casualties/1366_casualties.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/memorials/casualties/1920_casualties.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/memorials/casualties/past_1920_casualties.css">
  @include ('footer.style')
@stop

@section('casualties_content')
  <div class="mainBody">
    <div class="casualtySearch">
      <div class="casualtySearchTitle">FIND A FALLEN SOLDIER</div>
        <form method="POST" action="/memorials/casualties/search">
          @csrf
          <div class="casualtySearchForm">
            <input class="firstNameInput" type="text" name="firstName" value="" placeholder="First Name"/>
            <input class="lastNameInput" type="text" name="lastName" value="" placeholder="Last Name"/>
            <select class="conflictInput" name="conflict">
              <option value="">ALL</option>
              @foreach ($all_conflicts as $one_conflict)
                <!-- <option value="{{ $one_conflict->id }}">
                  {{ $one_conflict->name }}
                </option> -->
                <option value="{{ $one_conflict->id }}">
                  {{ $one_conflict->name }}
                </option>
              @endforeach
            </select>
            <input class="submitInput" type="submit" name="submitSearch" value="SEARCH" />
          </div>
        </form>
    </div>
    <div class="casualtyList">
      <div class="casualtyListTitle">
        <div>Name</div>
        <div>Conflict</div>
      </div>
      <div class="allCasualtyListRows">
        @foreach ($all_casualty_basics as $one_casualty_basic)
        <div class="casualtyListRow">
          <div>
            {{ $one_casualty_basic->last_name }}, {{ $one_casualty_basic->first_name }}
          </div>
          <div>
            {{ $one_casualty_basic->name }}
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="casualtyIntro">
      The creation of this page was done to honor  those who paid the supreme sacrifice while in service to their nation.  Struck down in the prime of their lives, they never faltered in their dedication to fellow soldiers and gave their lives so that others would survive.   We, who survived the brutal reality of war, must never forget the price they paid.  The Association's recognition of their valor cannot be complete until this page is accurate in detail.  We view it as a work in progress and depend upon you to help make it as comprehensive as possible.  Please submit information about omissions, corrections, or other details that would be helpful to...
    </div>
  </div>
  @include ('footer.content')
@stop
