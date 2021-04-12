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
      <div>Register Now!</div>
      <div>
        <form method="POST">
          @csrf
          <div style="width:100%">
            <input style="width:100%" name="first_name" type="text" placeholder="First Name" required/>
          </div>
          <input name="last_name" type="text" placeholder="Last Name" required/>
          <input name="spouse_name" type="text" placeholder="Spouse Name"/>
          <input name="address_line_1" type="text" placeholder="Street Address" required/>
          <input name="address_line_2" type="text" placeholder="APT, Room #, etc."/>
          <input name="city" type="text" placeholder="City" required/>
          <input name="state" type="text" placeholder="State" required/>
          <input name="zip_code" type="text" placeholder="Zip Code" required/>
          <input name="country" type="text" placeholder="Country (if not US)"/>
          <input name="phone_number" type="text" placeholder="Phone Number" required/>
          <div>
            @foreach ($modern_conflicts as $one_conflict)
              <div>
                <input name="conflict_{{ $one_conflict->id }}" type="checkbox" value="{{ $one_conflict->name }}"/>
                <label>{{ $one_conflict->name }}</label>
              </div>
            @endforeach
          </div>
          <textarea name="time_in_rgt" placeholder="Time (years and/or month) in the regiment"></textarea></br>
          <textarea name="unit_details" placeholder="To help connect with old friends in the regiment, specify your units, jobs, and times in the Regiment"></textarea></br>
          <select name="registration_type">
            <option value="Renewal">Renewal</option>
            <option value="Active Duty">Active Duty</option>
            <option value="Associate">Associate</option>
            <option value="One Year">One Year</option>
            <option value="Two Years">Two Year</option>
            <option value="Five Years">Five Year</option>
            <option value="Life to 49">Life to 49</option>
            <option value="Life to 64">Life to 64</option>
            <option value="Life 65 and above">Life 65 and above</option>
            <option value="Just information please">Just information please</option>
          </select></br>
          <input name="email" type="email" placeholder="Email" />
          <textarea name="comments" placeholder="Include any necessarry questions or comments about your registration form"></textarea>
          <input type="submit" value="SUBMIT"/>
        </form>
      </div>
      <!-- <div>
        If you are or were a member of the US Army's 5th Infantry Regiment and would like to rejoin your unit, then you have found the right place. We are the 5TH INFANTRY REGIMENT ASSOCIATION, and we need a few good men and women to fill the ranks of the finest regiment of the US Army. We also offer an "associates membership" to a family member of a veteran of the 5th Infantry Regiment.
      </div> -->
      <div>
        <div>Purpose & Values</div>
        <div>Benefits & Opportunities</div>
        <div>Fees & Pricing Options</div>
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
