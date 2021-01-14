@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administration Center') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card">
                  <div class="card-header">
                    MEMBER LIST
                  </div>
                  <div class="card-body" style="display:flex;flex-direction:column">
                  @foreach ($final_all_users as $one_user)
                    <div style="margin:10px 2%; border: 1px solid lightblue">
                      <button data-change-btn="{{ $one_user->user_id }}" type="button" class="btn btn-primary">
                        {{ $one_user->first_name }} {{ $one_user->last_name }}
                      </button>
                      <div data-change-box="{{ $one_user->user_id }}">
                        <form method="POST">
                          @csrf
                          <div>Email Address</div>
                          <input type="hidden" name="member_id" value="{{ $one_user->user_id }}">
                          <input type="text" name="new_email" value="{{ $one_user->email }}">
                          <button type="submit" name="changeEmail" class="btn btn-success"/>CHANGE</button>
                        </form>
                        @foreach ($one_user->all_range as $one_range)
                          <div
                            data-parent="{{ $one_user->user_id }}"
                            data-start="{{ $one_range[0] }}"
                            data-end="{{ $one_range[1] }}"
                            data-timespan="{{ $one_range[2] }}">
                            {{ $one_range[0] }} - {{ $one_range[1] }}
                          </div>
                        @endforeach
                      </div>
                    </div>
                  @endforeach
                  </div>
                  <?php
                  // echo("<pre>");
                  //
                  // echo("</pre>");
                  ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
