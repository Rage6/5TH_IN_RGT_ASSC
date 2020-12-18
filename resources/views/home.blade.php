
@extends('layouts.app')

<!-- @section('home_style') -->
  <!-- Home Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <!-- <link rel="stylesheet" type="text/css" href="/css/my_custom/home/360_home.css"> -->
  <!-- 361px -> 375px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/home/375_home.css"> -->
  <!-- 376px -> 414px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/home/414_home.css"> -->
  <!-- 415px -> 768px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/home/768_home.css"> -->
  <!-- 769px -> 1366px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/home/1366_home.css"> -->
  <!-- 1367px -> 1920px-->
  <!-- <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/home/1920_home.css"> -->
  <!-- 1921px and Greater -->
  <!-- <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/home/past_1920_home.css"> -->
<!-- @stop -->


<!-- @section('home_content') -->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                  <!-- This was the PHP to test the email system -->
                  <!-- use App\Mail\PersonalEmail;
                  $data = ['content' => 'This is a test!'];
                  $data = "Took off the 'content' variable.";
                  Mail::to('nvogt10@gmail.com')->send(new PersonalEmail($data)); -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                      <div>
                        @if ($this_user->current_img)
                          <div id="primaryImg" class="primaryImg" data-time="current" style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ auth()->user()->current_img }}?t=<?php echo(time()); ?>');"></div>
                        @else
                          <div id="primaryImg" class="primaryImg" data-time="current" style="background-image: url('/uploads/images/profile-default.jpg')"></div>
                        @endif
                        @if ($this_user->veteran_img)
                          <div id="secondaryImg" class="secondaryImg" data-time="veteran" style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ auth()->user()->veteran_img }}?t=<?php echo(time()); ?>')"></div>
                        @else
                          <div id="secondaryImg" class="secondaryImg" data-time="veteran" style="background-image: url('/uploads/images/profile-default.jpg')"></div>
                        @endif
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">
                          {{ $this_user->first_name }} {{ $this_user->last_name }}
                        </h5>
                        <div class="card-text">
                          {{ $this_user->biography }}
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <div>
                          FIND A FELLOW BOBCAT
                        </div>
                        <div>
                          Select a category to search by, enter the desired name or year, and click 'FIND'</b>'.
                        </div>
                        <!-- <div>Trouble searching? <u id="troublesBttn">Click here</u></div>
                        <div id="troublesBox" class="troublesBox">
                          <ol>
                            <li>
                              The name you enter must completely match a member's name in the database for it to be displayed. This means entering 'Sam' will not show you 'Samuel', and 'Bobby' will not show you 'Bob'.
                            </li>
                            <li>
                              Enter a single year when using the 'Year' category. It will show you every member that was an active duty soldier assigned to the 5th Regiment at some point during that year. Trying to include a months or day will only result in an empty list.
                            </li>
                          </ol>
                        </div> -->
                        <div class="card-body">
                          <div class="searchBttnRow">
                            <div data-category="first">First Name</div>
                            <div data-category="last">Last Name</div>
                            <div data-category="year">Year</div>
                          </div>
                          <div class="categoryBox" id="firstBox">
                            <input id="searchByFirst" class="col-lg-8" type="text" placeholder="Enter a first name"/>
                            <div id="searchFirstBttn" class="btn btn-secondary">
                              FIND
                            </div>
                          </div>
                          <div class="categoryBox" id="lastBox">
                            <input id="searchByLast" class="col-lg-8" type="text" placeholder="Enter a last name"/>
                            <div id="searchLastBttn" class="btn btn-secondary">
                              FIND
                            </div>
                          </div>
                          <div class="categoryBox" id="yearBox">
                            <input id="searchByYear" class="col-lg-8" type="text" placeholder="Enter a year"/>
                            <div id="searchYearBttn" class="btn btn-secondary">
                              FIND
                            </div>
                          </div>
                        </div>
                        <!-- <div>Trouble searching? <u id="troublesBttn">Click here</u></div>
                        <div id="troublesBox" class="troublesBox">
                          <ol>
                            <li>
                              The name you enter must completely match a member's name in the database for it to be displayed. This means entering 'Sam' will not show you 'Samuel', and 'Bobby' will not show you 'Bob'.
                            </li>
                            <li>
                              Enter a single year when using the 'Year' category. It will show you every member that was an active duty soldier assigned to the 5th Regiment at some point during that year. Trying to include a months or day will only result in an empty list.
                            </li>
                          </ol>
                        </div> -->
                        <div class="allSearchResults">
                          @foreach ($final_all_users as $one_user)
                            <div
                              data-user="{{ $one_user->id }}"
                              data-first="{{ strtolower($one_user->first_name) }}"
                              data-last="{{ strtolower($one_user->last_name) }}"
                              style="display: flex; justify-content: space-between;">
                              <div>
                                {{ $one_user->first_name }} {{ $one_user->last_name }}
                                @foreach ($one_user->all_range as $one_range)
                                  <div
                                    data-parent="{{ $one_user->id }}"
                                    data-start="{{ $one_range[0] }}"
                                    data-end="{{ $one_range[1] }}">{{ $one_range[0] }} - {{ $one_range[1] }}</div>
                                @endforeach
                              </div>
                              <div>
                                <a href="home/view/{{ $one_user->id }}">
                                  <button class="btn rounded-circle border-success">
                                    P
                                  </button>
                                </a>
                                <a href="home/message/{{ $one_user->id }}">
                                  <button class="btn rounded-circle border-success">
                                    M
                                  </button>
                                </a>
                              </div>
                            </div>
                          @endforeach
                        </div>
                        <div>Trouble searching? <u id="troublesBttn">Click here</u></div>
                        <div id="troublesBox" class="troublesBox">
                          <ol>
                            <li>
                              The name you enter must completely match a member's name in the database for it to be displayed. This means entering 'Sam' will not show you 'Samuel', and 'Bobby' will not show you 'Bob'.
                            </li>
                            <li>
                              Enter a single year when using the 'Year' category. It will show you every member that was an active duty soldier assigned to the 5th Regiment at some point during that year. Trying to include a months or day will only result in an empty list.
                            </li>
                          </ol>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
