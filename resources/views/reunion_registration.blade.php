@extends('layouts.master')

@section('reunion_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/reunion/360_reunion.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/reunion/375_reunion.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/registration/414_registration.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/registration/768_registration.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/registration/1366_registration.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/registration/1920_registration.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/registration/past_1920_registration.css">
  <script>
    function openAndCloseForm() {
      let currentDisplay = document.getElementById("reunionForm").style.display;
      console.log(currentDisplay);
      let currentWidth = window.outerWidth;
      if (currentDisplay == 'none') {
        if (currentWidth < 1366) {
          document.getElementById("reunionForm").style.display = "block";
        } else {
          document.getElementById("reunionForm").style.display = "grid";
        };
      } else {
        document.getElementById("reunionForm").style.display = "none";
      };
    };
  </script>
  @include ('footer.style')
@stop

@section('reunion_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          Reunion Registration
        </div>
        @if (Route::has('login'))
          @auth
            <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
              Register Now!
            </div>
          @else
            <a href="{{ route('login') }}">
              <div class="regBttn">
                Login To Register
              </div>
            </a>
          @endauth
        @endif
      </div>
      @if (Route::has('login'))
        @auth
          <div class="regForm" id="reunionForm" style="display:none">
            <div>
              <form method="POST" action="/reunion/registration">
                @csrf
                <input required type='text' name='first_name' placeholder='First Name'/>
                <input required type='text' name='last_name' placeholder='Last Name'/>
                <span>Number of Additional Guests</span>: <input id='guestNum' type='number' min='0' name='guest_num' value='0'/>
                <input type='text' name='guest_names' placeholder='Guest Names'/>
                <input required type='tel' name='phone_number' placeholder='Phone Number'/>
                <input required type='email' name='email' placeholder='Email'/>
                <input type='date' name='arrival_date' placeholder='Last Name'/>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the Air & Space Museum with lunch and historic tour at Bull Runn (wine tasting included)?
                  </div>
                  <input type='radio' name='air_and_space' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='air_and_space' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the Washington DC memorial and monument day?
                  </div>
                  <input type='radio' name='dc_monuments' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='dc_monuments' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the memorial service, tour, and luncheon at the National Army Museum?
                  </div>
                  <input type='radio' name='army_museum' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='army_museum' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the ladies breakfast 9am Saturday morning? There is no charge.
                  </div>
                  <input type='radio' name='ladies_breakfast' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='ladies_breakfast' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Are you driving?
                  </div>
                  <input type='radio' name='driving' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='driving' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Is this your first reunion?
                  </div>
                  <input type='radio' name='first_reunion' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='first_reunion' value='No'/><span>No</span>
                </div>
                <textarea name='comments'>Comments</textarea>
                <button>Enter</button>
              </form>
            </div>
          @endauth
        @endif
      </div>
      <div class="regRow">
        <div class="regSection" style="background:rgba(139,0,0,0.8)">
          <div class="regSubtitle">
            Purpose & Values
          </div>
          <div>
            <div>
              <div>Purposes of this Association</div>
              <ul>
                <li>
                  To carry on in mind, spirit, and deed the values and traditions instilled in us as members of the 5th Infantry of the 25th Infantry Division.
                </li>
                <li>
                  To provide support to our members and their families.
                </li>
                <li>
                  To foster our fellowship through organized meetings, reunions, and distribution of information.
                </li>
              </ul>
            </div>
            <div>
              <div>The Association stands for:</div>
              <ul>
                <li>
                  Steadfast devotion to the principles upon which our country was founded.
                </li>
                <li>
                  The high standards and ideals set by our Army.
                </li>
                <li>
                  The determined and aggressive spirit of our fighting 25th Infantry Div.
                </li>
                <li>
                  The ever-present team work that has carried the 5th Infantry of the "Tropic Lightning" to victory.
                </li>
                <li>
                  The perpetuation of the unselfish friendships formed in combat.
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="regSection" style="background:rgba(255,255,255,0.8);color:black">
          <div class="regSubtitle">
            Benefits & Opportunities
          </div>
          <div>
            <div>
              Every member of the 5th Infantry Regiment Association gains:
              <ul>
                <li>
                  Quarterly newsletters
                </li>
                <li>
                  Membership roster of names, addresses, and phone numbers
                </li>
                <li>
                  Member names and email addresses
                </li>
                <li>
                  Frequent email updates with Association, Regiment, Division and reunion news
                </li>
                <li>
                  Membership card
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="regSection" style="background:rgba(0,100,0,0.8)">
          <div class="regSubtitle">
            Qualifications &</br> Pricing Options
          </div>
          <div>
            <div>
              <div class="qualTitle">
                <i>Can I become a member?</i>
              </div>
              <div>
                <div>
                  <u>Soldiers & Veterans</u>: If you are/or were a member of the 5th Infantry Regiment, and would like to rejoin your unit, you have found the right place. We are the 5th Infantry Regiment Association, and we need a few good men to fill the ranks of the finest chapter in the US Army.
                </div>
                <div style="margin-top:10px">
                  <u>Associate Members</u>: We also offer an associates membership to those that were a family member to a veteran of the 5th Infantry Regiment.
                </div>
              </div>
            </div>
            <div>
              <div class="qualTitle">
                <i>What are the membership costs?</i>
              </div>
              <div>
                If you would like to become a member, the dues and how long each due lasts are listed below. The prices of the "Lifetime" options are based on your age when you paid that particular option.
              </div>
              <div class="costList">
                <div class="costTitle">
                  <span>Active duty</span>
                  <span class="costInLine">$5 per year</span>
                </div>
                <div class="costNumbers">$5 per year</div>
                <div class="costTitle">
                  <span>One Year</span>
                  <span class="costInLine">$15 per year</span>
                </div>
                <div class="costNumbers">$15 per year</div>
                <div class="costTitle">
                  <span>Two Years</span>
                  <span class="costInLine">$25 for 2 years</span>
                </div>
                <div class="costNumbers">$25 for 2 years</div>
                <div class="costTitle">
                  <span>Five Years</span>
                  <span class="costInLine">$60 for 5 year</span>
                </div>
                <div class="costNumbers">$60 for 5 years</div>
                <div class="costTitle">
                  <span>Lifetime (< 50 y/o)</span>
                  <span class="costInLine">$200 once</span>
                </div>
                <div class="costNumbers">$200 once</div>
                <div class="costTitle">
                  <span>Lifetime (50 - 64 y/o)</span>
                  <span class="costInLine">$150 once</span>
                </div>
                <div class="costNumbers">$150 once</div>
                <div class="costTitle">
                  <span>Lifetime (65+ y/o)</span>
                  <span class="costInLine">$100 once</span>
                </div>
                <div class="costNumbers">$100 once</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
@stop
