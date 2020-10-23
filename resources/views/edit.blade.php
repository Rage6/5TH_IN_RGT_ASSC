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
                      <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input name="first_name" id="firstName" placeholder="First Name" value="{{ $this_user->first_name }}" />
                      </div>
                      <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input name="last_name" id="lastName" placeholder="Last Name" value="{{ $this_user->last_name }}" />
                      </div>
                      <div class="form-group">
                        <label for="bio">Personal History</label>
                        <textarea class="form-control" id="bio" name="bio_box" placeholder="Provide a brief summary of yourself and your time in the 5th" value="{{ $this_user->last_name }}"></textarea>
                      </div>
                      <button type="submit" name="updateBasicInfo" class="btn btn-primary">
                        UPDATE CHANGES
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
