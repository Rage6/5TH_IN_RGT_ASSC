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
                    <div class="row">
                      @if ($view_user->current_img)
                        <div class="img-thumbnail rounded float-left w-50" style="background-image: url('{{ $view_user->current_img }}?t=<?php echo(time()); ?>'); background-size:cover; background-position: center; min-width: 100px; min-height: 300px"></div>
                      @else
                        <!-- <img class="img-thumbnail rounded float-right w-50" src="/uploads/images/profile-default.jpg"/> -->
                        <div class="img-thumbnail rounded float-left w-50" style="background-image: url('/uploads/images/profile-default.jpg'); background-size:cover; background-position: center; min-width: 100px; min-height: 300px"></div>
                      @endif
                      @if ($view_user->veteran_img)
                        <div class="img-thumbnail rounded float-right w-50" style="background-image: url('{{ $view_user->veteran_img }}?t=<?php echo(time()); ?>'); background-size:cover; background-position: center; min-width: 100px; min-height: 300px"></div>
                      @else
                        <!-- <img class="img-thumbnail rounded w-50" src="/uploads/images/profile-default.jpg"/> -->
                        <div class="img-thumbnail rounded float-right w-50" style="background-image: url('/uploads/images/profile-default.jpg'); background-size:cover; background-position: center; min-width: 100px; min-height: 300px"></div>
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
