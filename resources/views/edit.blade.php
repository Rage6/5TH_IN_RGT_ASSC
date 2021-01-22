@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Your Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('This is the edit page') }} -->
                    <form method="POST" action="edit/basics">
                      @csrf
                      <div class="basicInfoGrid">
                        <div>First Name</div>
                        <input name="first_name" id="firstName" placeholder="First Name" value="{{ $this_user->first_name }}" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Last Name</div>
                        <input name="last_name" id="lastName" placeholder="Last Name" value="{{ $this_user->last_name }}" required />
                      </div>
                      <div class="basicInfoGrid">
                        <div>Email</div>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ $this_user->email }}" required/>
                      </div>
                      <div class="imgGrid">
                      @if (auth()->user()->current_img)
                        <div
                          class="img-thumbnail rounded"
                          style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ auth()->user()->current_img }}?t=<?php echo(time()); ?>'); background-size:contain; background-position: center; background-repeat:no-repeat"></div>
                      @else
                        <img class="img-thumbnail rounded" src="/uploads/images/profile-default.jpg">
                      @endif
                      @if (auth()->user()->veteran_img)
                        <div class="img-thumbnail rounded" style="background-image: url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ auth()->user()->veteran_img }}?t=<?php echo(time()); ?>'); background-size:contain; background-position: center; background-repeat:no-repeat"></div>
                      @else
                        <img class="img-thumbnail rounded" src="/uploads/images/profile-default.jpg">
                      @endif
                      </div>
                      <button class="btn">
                        <a href="{{ route('profile') }}">{{ __('CHANGES PHOTOS') }}</a>
                      </button>
                      <div class="form-group historyBox">
                        <label for="biography">Personal History</label>
                        <textarea class="form-control" id="biography" name="biography" maxlength="255" placeholder="Provide a brief summary of yourself and your time in the 5th">{{ $this_user->biography }}</textarea>
                      </div>
                      <button type="submit" name="updateBasicInfo" class="btn btn-primary">
                        UPDATE CHANGES
                      </button>
                      <button class="btn">
                        <a href="{{ route('home') }}">{{ __('CANCEL') }}</a>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
