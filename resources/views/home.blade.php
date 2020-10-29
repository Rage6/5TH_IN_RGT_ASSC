@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <?php
                  // This was to test the email system
                  // use App\Mail\TestEmail;
                  // $data = ['message' => 'This is a test!'];
                  // Mail::to('nvogt10@gmail.com')->send(new TestEmail($data));
                ?>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                      @if ($this_user->current_img)
                        <img class="card-img-top" src='{{ $this_user->current_img }}'/>
                      @else
                        <img class="card-img-top" src="/uploads/images/profile-default.jpg">
                      @endif
                      <div class="card-body">
                        <h5 class="card-title">
                          {{ $this_user->first_name }} {{ $this_user->last_name }}
                        </h5>
                        <!-- <textarea disabled class="col-md-8" style="height:100px">
                          {{ $this_user->biography }}
                        </textarea> -->
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
                          Searching for a specific Bobcat? Enter their first, last, or nickname, and then click 'SEARCH'. Once found,
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
                                <form method="GET" name="seeBobcat">
                                  <button class="btn rounded-circle border-success" name="view_id" value="{{ $one_user->id }}">
                                    P
                                  </button>
                                </form>
                                <form method="GET" name="messageBobcat">
                                  <button class="btn rounded-circle border-success" name="message_id" value="{{ $one_user->id }}">
                                    M
                                  </button>
                                </form>
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
