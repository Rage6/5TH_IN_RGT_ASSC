@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
              <div class="card-header">
                MEMBER LIST
              </div>
              <div class="addMemberSection">
                <div class="addMemberBttn">
                  <div>
                    +
                  </div>
                </div>
                <div class="addMemberInfo">
                  <form method="POST" action="admin/member/add">
                    @csrf
                    <input
                      type="text"
                      name="first_name"
                      required
                      placeholder="First Name" />
                    <input
                      type="text"
                      name="last_name"
                      required
                      placeholder="Last Name" />
                    <input
                      type="email"
                      name="email"
                      required
                      placeholder="Email Address" />
                    <input type="submit" value="ENTER" />
                  </form>
                </div>
              </div>
              <div class="card-body allMembersCard">
              @foreach ($final_all_users as $one_user)
                <div class="oneMemberCard">
                  <button data-memberbttn="{{ $one_user->id }}" type="button" class="btn btn-primary oneMemberButton">
                    {{ $one_user->last_name }}, {{ $one_user->first_name }}
                  </button>
                  <div class="oneMemberInfo" data-memberbox="{{ $one_user->id }}">
                    <div class="oneInfo">
                      <form method="POST" action="admin/email">
                        @csrf
                        <div class="infoTitle">Email Address</div>
                        <input type="hidden" name="member_id" value="{{ $one_user->id }}">
                        <input type="text" name="new_email" value="{{ $one_user->email }}">
                        <button type="submit" name="changeEmail" class="btn btn-success"/>CHANGE</button>
                      </form>
                    </div>
                    <div class="oneInfo">
                      <div class="infoTitle">Time In 5th RGT</div>
                      @foreach ($one_user->all_range as $one_range)
                        <form method="POST" action="admin/range/delete">
                          @csrf
                          <div
                            class="oneTimeSpan"
                            data-parent="{{ $one_user->id }}"
                            data-start="{{ $one_range[0] }}"
                            data-end="{{ $one_range[1] }}"
                            data-timespan="{{ $one_range[2] }}">
                            <button
                              class="btn btn-danger"
                              type="submit"
                              name="delete_range">
                              X
                            </button>
                            <div>
                              <div>
                                @if ($one_range[3] == null)
                                  {{ $one_range[0] }}
                                @else
                                  {{ $one_range[3] }} {{ $one_range[0] }}
                                @endif
                                 -
                                @if ($one_range[1] != null)
                                  @if ($one_range[4] == null)
                                   {{ $one_range[1] }}
                                  @else
                                    {{ $one_range[4] }} {{ $one_range[1] }}
                                  @endif
                                @else
                                  Now
                                @endif
                              </div>
                            </div>
                            <input
                              type="hidden"
                              name="select_range"
                              value="{{ $one_range[2] }}"/>
                          </div>
                          <div>
                            @if ($one_range[5] != null && $one_range[6] != null)
                              {{ $one_range[5] }}, {{ $one_range[6] }}
                            @elseif ($one_range[5] == null && $one_range[6] != null)
                              {{ $one_range[6] }}
                            @elseif ($one_range[5] != null && $one_range[6] == null)
                              {{ $one_range[5] }} }}
                            @endif
                          </div>
                        </form>
                      @endforeach
                      <div>
                        <div class="addTimeSpanBttn" data-addbttn="{{ $one_user->id }}">
                          + Add A Time Span
                        </div>
                        <div class="addTimeSpanBox" data-addbox="{{ $one_user->id }}">
                          <form method="POST" action="admin/range/add">
                            @csrf
                            <input
                              type="hidden"
                              name="member_id"
                              value="{{ $one_user->id }}" />
                            <div class="addTimeGrid">
                              <div
                                style="
                                  grid-row-start:1;
                                  grid-column-start:1">
                                  Start Time
                              </div>
                              <select
                                style="
                                  grid-row-start:2;
                                  grid-column-start:1"
                                name="start_month"/>
                                <option selected value="null">Month (optional)</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                              </select>
                              <input
                                style="
                                  grid-row-start:3;
                                  grid-column-start:1"
                                type="number"
                                min="1808"
                                max="9999"
                                name="start_year"
                                placeholder="Year"/>
                              <div
                                style="
                                  grid-row-start:1;
                                  grid-column-start:2">
                                  End Time
                              </div>
                              <select
                                style="
                                  grid-row-start:2;
                                  grid-column-start:2"
                                name="end_month"/>
                                <option value="null">Month (optional)</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                              </select>
                              <input
                                style="
                                  grid-row-start:3;
                                  grid-column-start:2"
                                type="number"
                                min="1808"
                                max="9999"
                                placeholder="Year"
                                name="end_year"/>
                              <div>Job</div>
                              <input name="new_job" placeholder="Medic, 1SG, etc."/>
                              <div>Unit</div>
                              <input name="new_unit" placeholder="HHC, B Co, etc."/>
                            </div>
                            <div class="centerAddBttn">
                              <button
                                class="btn btn-success"
                                type="submit"
                                name="new_range">
                                ENTER
                              </button>
                            </div>
                            <div>
                              NOTE: Leave the 'End Time' empty if the time span has not ended yet.
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    </br>
                    </br>
                    <div class="oneInfo">
                      <div class="deleteMemberWarning" data-delbttn="{{ $one_user->id }}">DELETE MEMBER?</div>
                      <div class="deleteMemberBox" data-delbox="{{ $one_user->id }}">
                        Are you sure that you want to delete {{ $one_user->first_name }} {{ $one_user->last_name }} from the database? <u>This will permanently delete their profile</u>!
                        </br>
                        <div class="btn btn-secondary" data-cancelbttn="{{ $one_user->id }}">
                          NO, cancel this
                        </div>
                        <div>
                          <form method="POST" action="admin/member/delete">
                            @csrf
                            <button
                              class="btn btn-danger"
                              type="submit"
                              name="delete_member">
                              YES, delete it
                            </button>
                            <input
                              type="hidden"
                              name="member_id"
                              value="{{ $one_user->id }}"/>
                          </form>
                        </div>
                      </div>
                    </div>
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
@endsection
