@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  {{ __('BOBCAT File') }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @csrf
                    <div class="form-group">
                      {{ $view_user->first_name }} {{ $view_user->last_name }}
                    </div>
                    <div class="card">
                      @if ($view_user->current_img)
                        <div id="primaryImg" class="primaryImg" data-time="current" style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ $view_user->current_img }}?t=<?php echo(time()); ?>');"></div>
                      @else
                        <div id="primaryImg" class="primaryImg" data-time="current" style="background-image: url('/uploads/images/profile-default.jpg')"></div>
                      @endif
                      @if ($view_user->veteran_img)
                        <div id="secondaryImg" class="secondaryImg" data-time="veteran" style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ $view_user->veteran_img }}?t=<?php echo(time()); ?>')"></div>
                      @else
                        <div id="secondaryImg" class="secondaryImg" data-time="veteran" style="background-image: url('/uploads/images/profile-default.jpg')"></div>
                      @endif
                    </div>
                    <div>
                      <div class="card-subtitle">
                        Personal History
                      </div>
                      <div class="card-text">
                        @if ($view_user->biography)
                          {{ $view_user->biography }}
                        @else
                          <i>{{ __('No biography at this time') }}</i>
                        @endif
                      </div>
                    </div>
                    <a href="/home/message/{{ $view_user->id }}">
                      <div>
                        Message {{ $view_user->first_name }}
                      </div>
                    </a>
                    <button class="btn">
                      <a href="{{ route('home') }}">
                        {{ __('BACK') }}
                      </a>
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
