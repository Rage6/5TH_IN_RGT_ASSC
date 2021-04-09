@extends('layouts.master')

@section('registration_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/registration/360_registration.css">
  <!-- 361px -> 375px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/registration/375_registration.css"> -->
  <!-- 376px -> 414px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/registration/414_registration.css"> -->
  <!-- 415px -> 768px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/registration/768_registration.css"> -->
  <!-- 769px -> 1366px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/registration/1366_registration.css"> -->
  <!-- 1367px -> 1920px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/registration/1920_registration.css"> -->
  <!-- 1921px and Greater -->
  <!-- <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/registration/past_1920_registration.css"> -->
  @include ('footer.style')
@stop

@section('registration_content')
  <div class="main">
    <div class="content">
      <div>
        Membership & Registration
      </div>
      <div>
        If you are or were a member of the US Army's 5th Infantry Regiment and would like to rejoin your unit, then you have found the right place. We are the 5TH INFANTRY REGIMENT ASSOCIATION, and we need a few good men and women to fill the ranks of the finest regiment of the US Army. We also offer an "associates membership" to a family member of a veteran of the 5th Infantry Regiment.
      </div>
      <div>
        <div>Purpose & Values</div>
        <div>Benefits & Opportunities</div>
        <div>Fees & Pricing Options</div>
        <div>Register Now!</div>
      </div>
      <div>
        @csrf
        <div>
          <form method="POST">
            @csrf
            <textarea name="testing_content" placeholder="Some content" required ></textarea>
            <input type="submit" value="SUBMIT"/>
          </form>
        </div>
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
