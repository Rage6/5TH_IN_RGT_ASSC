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
            <div class="card adminCard">
              <div class="card-header">
                MEMBER LIST
              </div>
              <div class="addMemberSection">
                <div class="addMemberBttn" data-addbttn="member">
                  <div>
                    +
                  </div>
                </div>
                <div class="addMemberInfo" data-addbox="member">
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
                      @php
                        $background = 'white';
                      @endphp
                      @foreach ($one_user->all_range as $one_range)
                        @if ($background == 'white')
                          <div style='background-color:{{$background}}'>
                          @php
                            $background = 'rgba(52,144,220,0.2)'
                          @endphp
                        @else
                          <div style='background-color:{{ $background }}'>
                            @php
                              $background = 'white'
                            @endphp
                        @endif
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
                                @if ($one_range[0] == null && $one_range[1] == null)
                                  Associate Member
                                @else
                                  @if ($one_range[3] == null)
                                    {{ $one_range[0] }}
                                  @else
                                    {{ $one_range[3] }} {{ $one_range[0] }}
                                  @endif
                                   -
                                  @if ($one_range[1] != 0)
                                    @if ($one_range[4] == null)
                                     {{ $one_range[1] }}
                                    @else
                                      {{ $one_range[4] }} {{ $one_range[1] }}
                                    @endif
                                  @else
                                    Now
                                  @endif
                                @endif
                              </div>
                              <input
                                type="hidden"
                                name="select_range"
                                value="{{ $one_range[2] }}"/>
                            </div>
                            <div class="jobAndUnit">
                              @if ($one_range[5] != null && $one_range[6] != null)
                                {{ $one_range[5] }}, {{ $one_range[6] }}
                              @elseif ($one_range[5] == null && $one_range[6] != null)
                                {{ $one_range[6] }}
                              @elseif ($one_range[5] != null && $one_range[6] == null)
                                {{ $one_range[5] }}
                              @endif
                            </div>
                          </form>
                        </div>
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
                                <option selected value="0">Month (optional)</option>
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
                                placeholder="Year" />
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
                                <option value="0">Month (optional)</option>
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
                          </form>
                          <div>
                            - OR -
                          </div>
                          <div>
                            <form method="POST" action="admin/range/associate">
                              @csrf
                              <input
                                type="hidden"
                                name="assoc_id"
                                value="{{ $one_user->id }}" />
                              <button
                                class="btn btn-success"
                                type="submit"
                                name="associate_member">
                                ASSOCIATE MEMBER
                              </button>
                            </form>
                          </div>
                          <div>
                            NOTE: Leave the 'End Time' empty if the time span has not ended yet.
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="oneInfo">
                      <div class="infoTitle">Other Details</div>
                      <form method="POST" action="admin/member/details">
                        @csrf
                        <input
                          type="hidden"
                          name="member_id"
                          value="{{ $one_user->id }}" />
                        <div class="detailGrid">
                          <div>
                            Is {{ $one_user->first_name }} {{ $one_user->last_name }} deceased?
                          </div>
                          <div>
                            <select name="is_deceased">
                              @if ($one_user->deceased == 1)
                                <option value="1" selected>YES</option>
                                <option value="0">NO</option>
                              @else
                                <option value="1">YES</option>
                                <option value="0" selected>NO</option>
                              @endif
                            </select>
                          </div>
                        </div>
                        <div>
                          If {{ $one_user->first_name }} {{ $one_user->last_name }} earned the Congressional Medal of Honor (CMOH), please select him from our CMOH records.
                        </div>
                        <div>
                          @php
                            $current_member_id = null;
                            foreach ($all_recipients as $one_recipient) {
                              if ($one_recipient->member_id == $one_user->id) {
                                $current_recipient_name = $one_recipient->last_name.", ".$one_recipient->first_name;
                                $current_member_id = $one_recipient->member_id;
                              };
                            };
                          @endphp
                          <select class="detailMOH" name="recipient_id">
                            @if ($current_member_id == null)
                              <option value="null" selected>
                                N/A
                              </option>
                            @else
                              <option value="{{ $current_member_id }}" selected>
                                {{ $current_recipient_name }}
                              </option>
                              <option value="null">N/A</option>
                            @endif
                            @foreach ($all_recipients as $one_recipient)
                              @if ($one_recipient->member_id != $one_user->id)
                                <option value="{{ $one_recipient->id }}">
                                  {{ $one_recipient->last_name }}, {{ $one_recipient->first_name }}
                                </option>
                              @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="detailNote">
                           <u>NOTE</u>: A member cannot be labeled as a CMOH recipient until they are entered into our CMOH table. This can be done in the "Medal of Honor Recipients" box below.
                        </div>
                        <div>
                          Was {{ $one_user->first_name }} {{ $one_user->last_name }} killed in action (KIA)?
                        </div>
                        <div>
                          @php
                            $this_member_id = null;
                            foreach ($all_casualties as $one_casualty) {
                              if ($one_casualty->member_id == $one_user->id) {
                                $current_casualty_name = $one_casualty->last_name.", ".$one_casualty->first_name;
                                $this_member_id = $one_casualty->member_id;
                              };
                            };
                          @endphp
                          <select class="detailMOH" name="casualty_id">
                            @if ($this_member_id == null)
                              <option value="null" selected>
                                N/A
                              </option>
                            @else
                              <option value="{{ $this_member_id }}" selected>
                                {{ $current_casualty_name }}
                              </option>
                              <option value="null">N/A</option>
                            @endif
                            @foreach ($all_casualties as $one_casualty)
                              @if ($one_casualty->member_id != $one_user->id)
                                <option value="{{ $one_casualty->id }}">
                                  {{ $one_casualty->last_name }}, {{ $one_casualty->first_name }}
                                </option>
                              @endif
                            @endforeach
                          </select>
                        </div>
                        <div class="detailNote">
                           <u>NOTE</u>: A member cannot be labeled as KIA until they are entered into our Casualty records. This can be done in the "Casualty List" box below.
                        </div>
                        <!-- </div> -->
                        <button
                          class="btn btn-success"
                          type="submit"
                          name="other_details">
                          CHANGE
                        </button>
                      </form>
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
              <?php
              // echo("<pre>");
              //
              // echo("</pre>");
              ?>
              </div>
            </div>
            <div class="card adminCard">
              <div class="card-header">
                MEDAL OF HONOR RECIPIENTS
              </div>
              <div class="card-body">
                <div class="addMemberSection">
                  <div class="addMemberBttn" data-addbttn="recipient">
                    <div>
                      +
                    </div>
                  </div>
                  <div class="addMemberInfo" data-addbox="recipient">
                    <form method="POST" action="admin/recipient/add">
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
                        type="text"
                        name="rank"
                        required
                        placeholder="Rank during event" />
                      <input
                        type="text"
                        name="conflict"
                        required
                        placeholder="War, campaign, conflict, etc." />
                      <input
                        type="text"
                        name="action_date"
                        required
                        placeholder="Date of action" />
                      <input
                        type="text"
                        name="place"
                        required
                        placeholder="Location" />
                      <textarea
                        type="text"
                        name="citation"
                        rows="5"
                        required
                        placeholder="Official citation">
                      </textarea>
                      <label for="posthumous">Posthumous</label>
                      <select id="posthumous" name="posthumous">
                        <option value="1">YES</option>
                        <option value="0">NO</option>
                      </select>
                      <input type="submit" value="ENTER" />
                    </form>
                  </div>
                </div>
                <div class="allRecipientCard">
                  @foreach ($all_recipients as $one_recipient)
                    <form method="POST" action="admin/recipient/delete">
                      @csrf
                      <div class="oneRecipient">
                        <input type="hidden" name="recip_id" value="{{ $one_recipient->id }}">
                        <div>
                          {{ $one_recipient->last_name }}, {{ $one_recipient->first_name }}
                        </div>
                        <button class="btn btn-danger" type="submit">
                          X
                        </button>
                      </div>
                    </form>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="card adminCard">
              <div class="card-header">
                CASUALTY LIST
              </div>
              <div class="addMemberSection">
                <div class="addMemberBttn" data-addbttn="casualty">
                  <div>
                    +
                  </div>
                </div>
                <div class="addMemberInfo" data-addbox="casualty">
                  <form method="POST" action="admin/casualty/add">
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
                      type="text"
                      name="rank"
                      placeholder="Rank" />
                    <input
                      type="text"
                      name="conflict"
                      required
                      placeholder="War, campaign, or conflict" />
                    <input
                      type="text"
                      name="date_of_death"
                      required
                      placeholder="Date of death" />
                    <input
                      type="text"
                      name="place"
                      placeholder="Location of injury" />
                    <input
                      type="text"
                      name="injury_type"
                      placeholder="Type of injury" />
                    <input
                      type="text"
                      name="city"
                      placeholder="City of origin" />
                    <input
                      type="text"
                      name="state"
                      placeholder="State/Territory of origin" />
                    <input
                      type="text"
                      name="burial_site"
                      placeholder="Burial site" />
                    <input type="submit" value="ENTER" />
                  </form>
                </div>
                <div class="allRecipientCard">
                  @foreach ($all_casualties as $one_casualty)
                    <form method="POST" action="admin/casualty/delete">
                      @csrf
                      <div class="oneRecipient">
                        <input type="hidden" name="cas_id" value="{{ $one_casualty->id }}">
                        <div>
                          {{ $one_casualty->last_name }}, {{ $one_casualty->first_name }}
                        </div>
                        <button class="btn btn-danger" type="submit">
                          X
                        </button>
                      </div>
                    </form>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
