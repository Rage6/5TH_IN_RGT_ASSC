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
                    <input class="addSubmitBttn" type="submit" value="ENTER" />
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
                          <!-- <div>
                            Note: Leave the 'End Time' empty if the time span has not ended yet.
                          </div> -->
                        </div>
                      </div>
                    </div>
                    <div class="oneInfo">
                      <div class="infoTitle">
                        Wars / Conflicts
                      </div>
                      @php
                        $background = 'white';
                      @endphp
                      @foreach ($all_conflict_links as $one_link)
                        @if ($one_user->id == $one_link->member_id)
                          @foreach ($all_conflicts as $one_conflict)
                            @if ($one_conflict->id == $one_link->conflict_id)
                              <form method="POST" action="admin/member/delete-conflict">
                                @csrf
                                <input type="hidden" name="conflict_id" value="{{ $one_link->conflict_id }}">
                                <input type="hidden" name="member_id" value="{{ $one_user->id }}">
                                @if ($background == 'white')
                                  <div
                                    class="oneTimeSpan"
                                    style='background-color:{{$background}}'>
                                    <!-- <div>Conflict ID: {{ $one_link->conflict_id }}</div>
                                    <div>Member ID: {{ $one_user->id }}</div> -->
                                    <button
                                      class="btn btn-danger"
                                      type="submit">
                                      X
                                    </button>
                                    <div>{{ $one_conflict->name }}</div>
                                  </div>
                                  @php
                                    $background = 'rgba(52,144,220,0.2)'
                                  @endphp
                                @else
                                  <div style='background-color:{{ $background }}'>
                                    <div>{{ $one_conflict->name }}</div>
                                    <!-- <div>Conflict ID: {{ $one_link->conflict_id }}</div>
                                    <div>Member ID: {{ $one_user->id }}</div> -->
                                    <button
                                      class="btn btn-danger"
                                      type="submit">
                                      X
                                    </button>
                                  </div>
                                    @php
                                      $background = 'white'
                                    @endphp
                                @endif
                              </form>
                            @endif
                          @endforeach
                        @endif
                      @endforeach
                      <div class="addTimeSpanBttn" data-addwarbttn="{{ $one_user->id }}">
                        + Add Conflict
                      </div>
                      <div class="gotBox" data-addwarbox="{{ $one_user->id }}">
                        <form method="POST" action="admin/member/add-conflict">
                          @csrf
                          <input
                            type="hidden"
                            name="member_id"
                            value="{{ $one_user->id }}">
                          <select name="selected_conflict">
                            @foreach ($all_conflicts as $one_conflict)
                              <option value="{{ $one_conflict->id }}">{{ $one_conflict->name }}</option>
                            @endforeach
                          </select>
                          <button
                            class="btn btn-success"
                            type="submit"
                            name="add_conflict_member">
                            ADD
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="oneInfo">
                      <div class="infoTitle">Other Details</div>
                      <form method="POST" action="admin/member/deceased">
                        @csrf
                        <input
                          type="hidden"
                          name="member_id"
                          value="{{ $one_user->id }}" />
                        <div class="detailGrid">
                          <div>
                            + Is {{ $one_user->first_name }} {{ $one_user->last_name }} deceased?
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
                        <button
                          class="btn btn-success"
                          type="submit"
                          name="deceased_or_not">
                          CHANGE
                        </button>
                      </form>
                      <form method="POST" action="admin/member/cmoh">
                        @csrf
                        <input
                          type="hidden"
                          name="member_id"
                          value="{{ $one_user->id }}" />
                        <div>
                          <div data-gotcmohbttn="{{ $one_user->id }}" class="gotBttn">
                            + Earned the Congressional Medal of Honor (CMOH)?
                          </div>
                          <div data-gotcmohbox="{{ $one_user->id }}" class="gotBox">
                            <div class="detailNote">
                               If so, you should connect them to their recording in our CMOH list. You can do this by...
                               <ol>
                                 <li>
                                   Enter their CMOH information, like the event's date and official citation, into our "MEDAL OF HONOR RECIPIENTS" table.
                                 </li>
                                 <li>
                                   Select their name from the list of CMOH recipient dropdown box below
                                 </li>
                               </ol>
                            </div>
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
                            </br>
                            <button
                              class="btn btn-success"
                              type="submit"
                              name="cmoh_or_not">
                              CHANGE
                            </button>
                          </div>
                        </div>
                      </form>
                      <form method="POST" action="admin/member/casualty">
                        @csrf
                        <input
                          type="hidden"
                          name="member_id"
                          value="{{ $one_user->id }}" />
                        <div>
                          <div data-gotkilledbttn="{{ $one_user->id }}" class="gotBttn">
                            + KIA, MIA, or Killed in service?
                          </div>
                          <div data-gotkilledbox="{{ $one_user->id }}" class="gotBox">
                            <div class="detailNote">
                               If so, you should connect them to their record in our CASUALTY list. You can do this by...
                               <ol>
                                 <li>
                                   Enter the information about their death and basic information into our "CASUALTY LIST" box
                                 </li>
                                 <li>
                                   Select their name from the list of names in the dropdown box below
                                 </li>
                               </ol>
                            </div>
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
                            </br>
                            <button
                              class="btn btn-success"
                              type="submit"
                              name="cmoh_or_not">
                              CHANGE
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- <div class="oneInfo">
                      <div class="infoTitle">
                        Wars / Conflicts
                      </div>
                      @php
                        $background = 'white';
                      @endphp
                      @foreach ($all_conflict_links as $one_link)
                        @if ($one_user->id == $one_link->member_id)
                          @foreach ($all_conflicts as $one_conflict)
                            @if ($one_conflict->id == $one_link->conflict_id)
                              @if ($background == 'white')
                                <div style='background-color:{{$background}}'>
                                  {{ $one_conflict->name }}
                                </div>
                                @php
                                  $background = 'rgba(52,144,220,0.2)'
                                @endphp
                              @else
                                <div style='background-color:{{ $background }}'>
                                  {{ $one_conflict->name }}
                                </div>
                                  @php
                                    $background = 'white'
                                  @endphp
                              @endif
                            @endif
                          @endforeach
                        @endif
                      @endforeach
                    </div> -->
                    </br>
                    </br>
                    <div class="oneInfo">
                      <div class="deleteMemberWarning" data-delbttn="{{ $one_user->id }}">
                        DELETE MEMBER?
                      </div>
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
                    <form method="POST" action="admin/recipient/add" enctype="multipart/form-data">
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
                      <select
                        name="conflict"
                        required>
                        @foreach ($all_conflicts as $one_conflict)
                          <option value="{{ $one_conflict->id }}">
                            {{ $one_conflict->name }}
                          </option>
                        @endforeach
                      </select>
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
                      <div class="col-md-6">
                          <input
                            type="file"
                            name="new_moh_img" />
                      </div>
                      <div>
                        <div>
                          <u>CUSTOM LINKS</u>
                        </div>
                        <div
                          class="gotBttn"
                          data-linkbttn="recipients"
                          data-new="true">
                          + ADD LINK
                        </div>
                        <div
                          class="linkBox"
                          data-editlinktype="recipients"
                          data-editlinkuse="new">
                          <!-- This is where the Link slots are added -->
                        </div>
                        <input
                          class="mohLinkIdList"
                          data-listtype="moh"
                          data-listuse="new"
                          type="hidden"
                          name="link_id_list"
                          value="" />
                      </div>
                      <input class="addSubmitBttn" type="submit" value="ENTER" />
                    </form>
                  </div>
                </div>
                <div class="allRecipientCard">
                  @foreach ($all_recipients as $one_recipient)
                  <div class="oneMemberCard">
                    <button
                      data-recipientbttn="{{ $one_recipient->id }}"
                      type="button"
                      class="btn btn-primary oneMemberButton">
                      {{ $one_recipient->last_name }}, {{ $one_recipient->first_name }}
                    </button>
                    <div
                      data-recipientbox="{{ $one_recipient->id }}"
                      class="oneMemberInfo">
                      <div class="oneInfo">
                        <form method="POST" action="admin/recipient/change" enctype="multipart/form-data">
                          @csrf
                          <input
                            type="hidden"
                            name="recip_id"
                            value="{{ $one_recipient->id }}" />
                          @if ($one_recipient->photo == NULL)
                            <div class="changeImg" style="background-image:url('/uploads/images/profile-default.jpg')"></div>
                          @else
                            <div class="changeImg" style="background-image:url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ $one_recipient->photo }}?t=<?php echo(time());?>')"></div>
                          @endif
                          <input
                            type="file"
                            name="current_moh_img"/>
                          <input
                            type="hidden"
                            name="existing_filename"
                            value="{{ $one_recipient->photo }}"/>
                          <div class="infoTitle">
                            First Name
                          </div>
                          <input
                            type="text"
                            name="first_name"
                            required
                            value="{{ $one_recipient->first_name }}" />
                          <div class="infoTitle">Last Name</div>
                          <input
                            type="text"
                            name="last_name"
                            required
                            value="{{ $one_recipient->last_name }}" />
                          <div class="infoTitle">Rank</div>
                          <input
                            type="text"
                            name="rank"
                            required
                            value="{{ $one_recipient->rank }}" />
                          <div class="infoTitle">Conflict</div>
                          <select name="conflict">
                            @foreach ($all_conflicts as $find_conflict)
                              @if ($one_recipient->conflict_id == $find_conflict->id)
                                <option value="{{ $find_conflict->id }}">
                                  {{ $find_conflict->name }}
                                </option>
                              @endif
                            @endforeach
                            @foreach ($all_conflicts as $find_conflict)
                              @if ($one_recipient->conflict_id != $find_conflict->id)
                                <option value="{{ $find_conflict->id }}">
                                  {{ $find_conflict->name }}
                                </option>
                              @endif
                            @endforeach
                          </select>
                          <div class="infoTitle">Date of Event</div>
                          <input
                            type="text"
                            name="action_date"
                            required
                            value="{{ $one_recipient->action_date }}" />
                          <div class="infoTitle">Location of Event</div>
                          <input
                            type="text"
                            name="place"
                            required
                            value="{{ $one_recipient->place }}" />
                          <div class="infoTitle">Citation</div>
                          <textarea
                            type="text"
                            name="citation"
                            rows="5"
                            required>{{ $one_recipient->citation }}</textarea>
                          <div class="infoTitle">Posthumous</div>
                          <select id="posthumous" name="posthumous">
                            @if ($one_recipient->posthumous == 1) {
                                <option value='1' selected>YES</option>
                                <option value='0'>NO</option>";
                            @else
                                <option value='0' selected>NO</option>
                                <option value='1'>YES</option>
                            @endif
                          </select>
                          <div class="addLinkRow">
                            <div>
                              <u>CUSTOM LINKS</u>
                            </div>
                            <div
                              class="addLinkBttn"
                              data-bttntype="recipients"
                              data-new="false"
                              data-boxid="{{ $one_recipient->id }}">
                              +
                            </div>
                          </div>
                          @php
                            $highest_num = 0;
                            $link_list = "";
                          @endphp
                          <div
                            data-editlinktype="recipients"
                            data-editlinkuse="existing"
                            data-editlinkboxid="{{ $one_recipient->id }}">
                            @foreach ($all_urls as $one_url)
                              @if ($one_recipient->id == $one_url->moh_id)
                                @php
                                  $highest_num += 1;
                                  if ($link_list == "") {
                                    $link_list = $link_list.$highest_num;
                                  } else {
                                    $link_list = $link_list.",".$highest_num;
                                  };
                                @endphp
                                <div
                                  class="card"
                                  data-linkboxnum="{{ $highest_num }}"
                                  data-linkboxtype="recipients"
                                  data-linkboxid="{{ $one_recipient->id }}">
                                  <input
                                    name="moh_link_name_{{ $highest_num }}"
                                    placeholder="Link Name"
                                    value="{{ $one_url->name }}" />
                                  <input
                                    name="moh_link_url_{{ $highest_num }}"
                                    placeholder="Link URL"
                                    value="{{ $one_url->url }}" />
                                  <div
                                    class="btn btn-danger"
                                    data-linkdeletenum="{{ $highest_num }}"
                                    data-linkdeletetype="recipients"
                                    data-linkdeleteid="{{ $one_recipient->id }}">
                                    X
                                  </div>
                                </div>
                              @endif
                            @endforeach
                          </div>
                          <input
                            data-linklist="recipients"
                            data-linklistid="{{ $one_recipient->id }}"
                            type="hidden"
                            name="link_list"
                            value="{{ $link_list }}" />
                          </br>
                          <button
                            class="btn btn-success"
                            type="submit">
                            CHANGE
                          </button>
                        </form>
                        <div class="oneInfo">
                          <div class="deleteMemberWarning" data-delrecipientbttn="{{ $one_recipient->id }}">DELETE RECIPIENT?</div>
                          <div class="deleteMemberBox" data-delrecipientbox="{{ $one_recipient->id }}">
                            Are you sure that you want to delete {{ $one_recipient->first_name }} {{ $one_recipient->last_name }} from the database? <u>This will permanently delete their information</u>!
                            </br>
                            <div class="btn btn-secondary" data-cancelrecipientbttn="{{ $one_recipient->id }}">
                              NO, cancel this
                            </div>
                            <div>
                              <form method="POST" action="admin/recipient/delete">
                                @csrf
                                <button
                                  class="btn btn-danger"
                                  type="submit"
                                  name="delete_recipient">
                                  YES, delete it
                                </button>
                                <input
                                  type="hidden"
                                  name="recip_id"
                                  value="{{ $one_recipient->id }}"/>
                                <input
                                  type="hidden"
                                  name="recip_photo"
                                  value="{{ $one_recipient->photo }}"/>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>

            <div class="card adminCard">
              <div class="card-header">
                CASUALTY LIST
              </div>
              <div class="card-body">
                <div class="addMemberSection">
                  <div class="addMemberBttn" data-addbttn="casualty">
                    <div>
                      +
                    </div>
                  </div>
                  <div class="addMemberInfo" data-addbox="casualty">
                    <form method="POST" action="admin/casualty/add" enctype="multipart/form-data">
                      @csrf
                      <input
                        type="text"
                        name="first_name"
                        required
                        placeholder="First Name" />
                      <input
                        type="text"
                        name="middle_name"
                        placeholder="Middle Name or Initial" />
                      <input
                        type="text"
                        name="last_name"
                        required
                        placeholder="Last Name" />
                      <input
                        type="text"
                        name="rank"
                        placeholder="Rank" />
                      <select
                        name="conflict"
                        required>
                        @foreach ($all_conflicts as $one_conflict)
                          <option value="{{ $one_conflict->id }}">
                            {{ $one_conflict->name }}
                          </option>
                        @endforeach
                      </select>
                      <div class="dateDeathTitle">
                        DATE OF DEATH
                      </div>
                      <div class="dateDeath">
                        <input
                          type="number"
                          min="1"
                          max="12"
                          name="month_of_death"
                          required
                          placeholder="MM" />
                        <input
                          type="number"
                          min="1"
                          max="31"
                          name="day_of_death"
                          required
                          placeholder="DD" />
                        <input
                          type="text"
                          name="year_of_death"
                          min="1800"
                          required
                          placeholder="YYYY" />
                      </div>
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
                      <textarea
                        type="text"
                        name="comments"
                        rows="5"
                        placeholder="Notes, comments, or descriptions">
                      </textarea>
                      <div class="col-md-6">
                        <input
                          type="file"
                          name="new_casualty_img" />
                      </div>
                      <div>
                        <div>
                          <u>CUSTOM LINKS</u>
                        </div>
                        <div
                          class="gotBttn"
                          data-linkbttn="casualties"
                          data-new="true">
                          + ADD LINK
                        </div>
                        <div
                          class="linkBox"
                          data-editlinktype="casualties"
                          data-editlinkuse="new">
                          <!-- This is where the Link slots are added -->
                        </div>
                        <input
                          class="casLinkIdList"
                          data-listtype="cas"
                          data-listuse="new"
                          type="hidden"
                          name="link_id_list"
                          value="" />
                      </div>
                      <input class="addSubmitBttn" type="submit" value="ENTER" />
                    </form>
                  </div>
                </div>
                <div class="allRecipientCard">
                  @foreach ($all_casualties as $one_casualty)
                    <div class="oneMemberCard">
                      <button
                        data-casualtybttn="{{ $one_casualty->id }}"
                        type="button"
                        class="btn btn-primary oneMemberButton">
                        {{ $one_casualty->last_name }}, {{ $one_casualty->first_name }}
                      </button>
                      <div
                        data-casualtybox="{{ $one_casualty->id }}"
                        class="oneMemberInfo">
                        <div class="oneInfo">
                          <form method="POST" action="admin/casualty/change" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="cas_id" value="{{ $one_casualty->id }}">

                            @if ($one_casualty->photo == NULL)
                              <div class="changeImg" style="background-image:url('/uploads/images/profile-default.jpg')"></div>
                            @else
                              <div class="changeImg" style="background-image:url('https://5th-rgt-profile-photos.s3.us-east-2.amazonaws.com/{{ $one_casualty->photo }}?t=<?php echo(time());?>')"></div>
                            @endif
                            <input
                              type="file"
                              name="current_cas_img"/>
                            <input
                              type="hidden"
                              name="existing_filename"
                              value="{{ $one_casualty->photo }}"/>

                            <div class="infoTitle">First Name</div>
                            <input type="text" name="first_name" value="{{ $one_casualty->first_name }}">
                            <div class="infoTitle">Middle Name</div>
                            <input type="text" name="middle_name" value="{{ $one_casualty->middle_name }}">
                            <div class="infoTitle">Last Name</div>
                            <input type="text" name="last_name" value="{{ $one_casualty->last_name }}">
                            <div class="infoTitle">Rank</div>
                            <input type="text" name="rank" value="{{ $one_casualty->rank }}">
                            <div class="infoTitle">Conflict</div>
                            <select name="conflict">
                              @foreach ($all_conflicts as $find_conflict)
                                @if ($one_casualty->conflict_id == $find_conflict->id)
                                  <option value="{{ $find_conflict->id }}">
                                    {{ $find_conflict->name }}
                                  </option>
                                @endif
                              @endforeach
                              @foreach ($all_conflicts as $find_conflict)
                                @if ($one_casualty->conflict_id != $find_conflict->id)
                                  <option value="{{ $find_conflict->id }}">
                                    {{ $find_conflict->name }}
                                  </option>
                                @endif
                              @endforeach
                            </select>
                            <div class="infoTitle">Date of Death (MM/DD/YYYY)</div>
                            <div class="dateDeath">
                              <input
                                type="number"
                                min="1"
                                max="12"
                                name="month_of_death"
                                required
                                value="{{ $one_casualty->month_of_death }}" />
                              <input
                                type="number"
                                min="1"
                                max="31"
                                name="day_of_death"
                                required
                                value="{{ $one_casualty->day_of_death }}" />
                              <input
                                type="text"
                                name="year_of_death"
                                min="1800"
                                required
                                value="{{ $one_casualty->year_of_death }}" />
                            </div>
                            <div class="infoTitle">Place</div>
                            <input type="text" name="place" value="{{ $one_casualty->place }}">
                            <div class="infoTitle">Injury Type</div>
                            <input type="text" name="injury_type" value="{{ $one_casualty->injury_type }}">
                            <div class="infoTitle">City</div>
                            <input type="text" name="city" value="{{ $one_casualty->city }}">
                            <div class="infoTitle">State</div>
                            <input type="text" name="state" value="{{ $one_casualty->state }}">
                            <div class="infoTitle">Burial Site</div>
                            <input type="text" name="burial_site" value="{{ $one_casualty->burial_site }}">
                            <div class="infoTitle">Comments or Notes</div>
                            <textarea
                              type="text"
                              name="comments"
                              rows="5">{{ $one_casualty->comments }}</textarea>
                            </br>

                            <div class="addLinkRow">
                              <div>
                                <u>CUSTOM LINKS</u>
                              </div>
                              <div
                                class="addLinkBttn"
                                data-bttntype="casualties"
                                data-new="false"
                                data-boxid="{{ $one_casualty->id }}">
                                +
                              </div>
                            </div>
                            @php
                              $highest_cas_num = 0;
                              $cas_link_list = "";
                            @endphp
                            <div
                              data-editlinktype="casualties"
                              data-editlinkuse="existing"
                              data-editlinkboxid="{{ $one_casualty->id }}">
                              @foreach ($all_urls as $one_url)
                                @if ($one_casualty->id == $one_url->casualty_id)
                                  @php
                                    $highest_cas_num += 1;
                                    if ($cas_link_list == "") {
                                      $cas_link_list = $cas_link_list.$highest_cas_num;
                                    } else {
                                      $cas_link_list = $cas_link_list.",".$highest_cas_num;
                                    };
                                  @endphp
                                  <div
                                    class="card"
                                    data-linkboxnum="{{ $highest_cas_num }}"
                                    data-linkboxtype="casualties"
                                    data-linkboxid="{{ $one_casualty->id }}">
                                    <input name="cas_link_name_{{ $highest_cas_num }}" value="{{ $one_url->name }}" />
                                    <input name="cas_link_url_{{ $highest_cas_num }}" value="{{ $one_url->url }}" />
                                    <div
                                      class="btn btn-danger"
                                      data-linkdeletenum="{{ $highest_cas_num }}"
                                      data-linkdeletetype="casualties"
                                      data-linkdeleteid="{{ $one_casualty->id }}">
                                      X
                                    </div>
                                  </div>
                                @endif
                              @endforeach
                            </div>
                            <input
                              data-linklist="casualties"
                              data-linklistid="{{ $one_casualty->id }}"
                              type="hidden"
                              name="cas_link_list"
                              value="{{ $cas_link_list }}" />
                            </br>

                            <button type="submit" name="changeCasualty" class="btn btn-success"/>CHANGE</button>
                          </form>
                        </div>
                        <div class="oneInfo">
                          <form method="POST" action="admin/casualty/details">
                            @csrf
                            <input
                              type="hidden"
                              name="casualty_id"
                              value="{{ $one_casualty->id }}" />
                            <div class="infoTitle">
                              Other Details
                            </div>
                            <div data-gotmedalbttn="{{ $one_casualty->id }}" class="gotBttn">
                              + Earned the Congressional Medal of Honor (CMOH)?
                            </div>
                            <div data-gotmedalbox="{{ $one_casualty->id }}" class="gotBox">
                              <div>
                                If {{ $one_casualty->first_name }} {{ $one_casualty->last_name }} earned the Congressional Medal of Honor (CMOH), please select him from our CMOH records.
                              </div>
                              <div>
                                @php
                                  $current_recipient_id = null;
                                  foreach ($all_recipients as $one_recipient) {
                                    if ($one_recipient->id == $one_casualty->moh_id) {
                                      $current_recipient_name = $one_recipient->last_name.", ".$one_recipient->first_name;
                                      $current_recipient_id = $one_recipient->id;
                                    };
                                  };
                                @endphp
                                <select class="detailMOH" name="recipient_to_casualty">
                                  @if ($current_recipient_id == null)
                                    <option value="null" selected>
                                      N/A
                                    </option>
                                  @else
                                    <option value="{{ $current_recipient_id }}" selected>
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
                                 <u>NOTE</u>: Cannot find a certain recipient on the CMOH list? Enter their information onto the "Medal of Honor Recipients" box below.
                              </div>
                              </br>
                              <button
                                class="btn btn-success"
                                type="submit"
                                name="casualty_details">
                                CHANGE
                              </button>
                            </div>
                          </form>
                        </div>
                        </br>
                        </br>
                        <div class="oneInfo">
                          <div class="deleteMemberWarning" data-delcasbttn="{{ $one_casualty->id }}">DELETE CASUALTY?</div>
                          <div class="deleteMemberBox" data-delcasbox="{{ $one_casualty->id }}">
                            Are you sure that you want to delete {{ $one_casualty->first_name }} {{ $one_casualty->last_name }} from the database? <u>This will permanently delete their information</u>!
                            </br>
                            <div class="btn btn-secondary" data-cancelcasbttn="{{ $one_casualty->id }}">
                              NO, cancel this
                            </div>
                            <div>
                              <form method="POST" action="admin/casualty/delete">
                                @csrf
                                <button
                                  class="btn btn-danger"
                                  type="submit"
                                  name="delete_casualty">
                                  YES, delete it
                                </button>
                                <input
                                  type="hidden"
                                  name="cas_id"
                                  value="{{ $one_casualty->id }}"/>
                                <input
                                  type="hidden"
                                  name="cas_photo"
                                  value="{{ $one_casualty->photo }}"/>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
            <div class="card adminCard">
              <div class="card-header">
                CONFLICTS
              </div>
              <div class="card-body">
                <div class="addMemberSection">
                  <div class="addMemberBttn" data-addbttn="conflict">
                    <div>
                      +
                    </div>
                  </div>
                  <div class="addMemberInfo" data-addbox="conflict">
                    <div>
                      <u>NOTE:</u> Specific battles should be recorded "Overall conflict - Specific battle". For example, the Battle of Lundy Lane would be recorded as "War of 1812 - Battle of Lundy's Lane".
                    </div>
                    <form method="POST" action="admin/conflict/add">
                      @csrf
                      <input
                        type="text"
                        name="conflict_name"
                        required
                        placeholder="Conflict Name" />
                      <input
                        type="number"
                        min="1808"
                        name="start_year"
                        required
                        placeholder="Start Year" />
                      <input
                        type="number"
                        name="end_year"
                        placeholder="End Year" />
                      <input class="addSubmitBttn" type="submit" value="ENTER" />
                    </form>
                  </div>
                </div>
                <div class="allRecipientCard">
                  @foreach ($all_conflicts as $one_conflict)
                    <div class="oneMemberCard">
                      <button
                        data-conflictbttn="{{ $one_conflict->id }}"
                        type="button"
                        class="btn btn-primary oneMemberButton">
                        {{ $one_conflict->name }}
                      </button>
                      <div class="oneMemberInfo" data-conflictbox="{{ $one_conflict->id }}">
                        <div class="oneInfo">
                          <form method="POST" action="admin/conflict/change">
                            @csrf
                            <input type="hidden" name="conflict_id" value="{{ $one_conflict->id }}">
                            <div class="infoTitle">Name</div>
                            <input type="text" name="name" value="{{ $one_conflict->name }}">
                            <div class="infoTitle">Start Year</div>
                            <input type="text" name="start_year" value="{{ $one_conflict->start_year }}">
                            <div class="infoTitle">End Year</div>
                            <input type="text" name="end_year" value="{{ $one_conflict->end_year }}">
                            <button type="submit" name="changeEmail" class="btn btn-success"/>CHANGE</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
