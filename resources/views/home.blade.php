@extends('layouts.app')

@section('home_style')
  <!-- Home Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/home/360_home.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/home/375_home.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/home/414_home.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/home/768_home.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/home/1366_home.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/home/1920_home.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/home/past_1920_home.css">
@stop

@section('home_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <?php
                  // This was to test the email system
                  // use App\Mail\PersonalEmail;
                  // $data = ['content' => 'This is a test!'];
                  // $data = "Took off the 'content' variable.";
                  // Mail::to('nvogt10@gmail.com')->send(new PersonalEmail($data));
                ?>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                      <div style="display:flex;flex-wrap: wrap">
                        @if ($this_user->current_img)
                          <div style="height:200px;width:50%;background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ auth()->user()->current_img }}?t=<?php echo(time()); ?>');background-size:cover;background-position:center"></div>
                        @else
                          <div style="height:200px;width:50%;background-image: url('/uploads/images/profile-default.jpg');background-size:cover;background-position:center"></div>
                        @endif
                        @if ($this_user->veteran_img)
                          <div style="height:200px;width:50%;background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ auth()->user()->veteran_img }}?t=<?php echo(time()); ?>');background-size:cover;background-position:center"></div>
                        @else
                          <div style="height:200px;width:50%;background-image: url('/uploads/images/profile-default.jpg');background-size:cover;background-position:center"></div>
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
                        <div class="card-title">
                          FIND A FELLOW BOBCAT
                        </div>
                        <div class="card-subtitle">
                          Searching for a specific Bobcat? Enter their first or last name, and then click 'SEARCH'. This will help you view their profile or send them a personal message.
                        </div>
                        <div class="card-body">
                          <input id="searchBox" class="col-lg-8" type="text" placeholder="First, last, or nickname." required/>
                          <div id="searchBttn" class="btn btn-secondary">
                            SEARCH
                          </div>
                        </div>
                        <div class="card-body">
                          @foreach ($all_users as $one_user)
                            <div data-first="{{ strtolower($one_user->first_name) }}" data-last="{{ strtolower($one_user->last_name) }}" style="display: flex; justify-content: space-between">
                              <div>
                                {{ $one_user->first_name }} {{ $one_user->last_name }}
                              </div>
                              <div class="row">
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
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
