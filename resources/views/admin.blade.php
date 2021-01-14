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
                      <button data-change-btn="{{ $one_user->id }}" type="button" class="btn btn-primary">
                        {{ $one_user->last_name }}, {{ $one_user->first_name }}
                      </button>
                      <div data-change-box="{{ $one_user->id }}">
                        <form method="POST" action="admin/email">
                          @csrf
                          <div>Email Address</div>
                          <input type="hidden" name="member_id" value="{{ $one_user->id }}">
                          <input type="text" name="new_email" value="{{ $one_user->email }}">
                          <button type="submit" name="changeEmail" class="btn btn-success"/>CHANGE</button>
                        </form>
                        <div>
                          <div style="text-align:center">
                            + Add A Time Serving With The Regiment
                          </div>
                          <form method="POST" action="admin/range/add">
                            @csrf
                            <div style="padding:2px 0;display:flex;justify-content:space-between">
                              <input
                                type="hidden"
                                name="member_id"
                                value="{{ $one_user->id }}" />
                              <div>
                                <input style="width:80%"
                                  type="number"
                                  name="start_year"/>
                                <div>Starting Year</div>
                              </div>
                              <div>
                                <input style="width:80%"
                                  type="number"
                                  name="end_year"/>
                                <div>Ending Year</div>
                              </div>
                              <button
                                class="btn btn-success"
                                type="submit"
                                name="new_range">
                                ENTER
                              </button>
                            </div>
                          </form>
                        </div>
                        @foreach ($one_user->all_range as $one_range)
                          <form method="POST" action="admin/range/delete">
                            @csrf
                            <div style="padding:2px 0;display:flex;justify-content:space-between"
                              data-parent="{{ $one_user->id }}"
                              data-start="{{ $one_range[0] }}"
                              data-end="{{ $one_range[1] }}"
                              data-timespan="{{ $one_range[2] }}">
                              <div>{{ $one_range[0] }} - {{ $one_range[1] }}</div>
                              <input
                                type="hidden"
                                name="select_range"
                                value="{{ $one_range[2] }}"/>
                              <button
                                class="btn btn-danger"
                                type="submit"
                                name="delete_range">
                                X
                              </button>
                            </div>
                          </form>
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
