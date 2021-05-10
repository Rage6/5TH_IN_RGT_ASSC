@extends('layouts.master')

@section('reunion_style')
  <!-- Welcome Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/reunion/360_reunion.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/reunion/375_reunion.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 376px) and (max-width: 414px)" type="text/css" href="/css/my_custom/reunion/414_reunion.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/reunion/768_reunion.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/reunion/1366_reunion.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/reunion/1920_reunion.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/reunion/past_1920_reunion.css">
  <script>
    function openAndCloseForm() {
      let currentDisplay = document.getElementById("reunionForm").style.display;
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
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let formTop = document.getElementById("reunionForm").offsetTop;
      let scrollAmount = formTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
  </script>
  @include ('footer.style')
@stop

@section('reunion_content')
  <div class="main">
    <div class="content">
      <div class="regIntro">
        <div class="mainTitle">
          <span>Bobcat</span> <span>Reunion</span>
        </div>
        <div class="reunionDate dateAndLocation">
          August 10 - 15
        </div>
        <div class="reunionLocation dateAndLocation">
          Washington, DC
        </div>
        @if (Route::has('login'))
          @auth
            <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
              Register Now!
            </div>
          @else
            <a href="{{ 'login?newRoute=reunion' }}">
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
                <div class="regFormFull">
                  <div class="regFormHalf">
                    <div class="regFormBasic">
                      <div class="regFormSubtitles">
                        Basic Information
                      </div>
                      <input required type='text' name='first_name' value='{{ $this_user->first_name }}' placeholder='First Name'/>
                      <input required type='text' name='last_name' value='{{ $this_user->last_name }}' placeholder='Last Name'/>
                      <input required type='tel' name='phone_number' placeholder='Phone Number'/>
                      <input required type='email' name='email' value='{{ $this_user->email }}' placeholder='Email'/>
                    </div>
                    <div class="regFormBasic">
                      <div class="regFormSubtitles">
                        Arrival Date
                      </div>
                      <input type='date' name='arrival_date' placeholder='mm/dd/yyyy'/>
                      <div class="regFormSubtitles">
                        Additional Guests
                      </div>
                      <input id='guestNum' type='number' min='0' name='guest_num' value='0'/>
                      <input type='text' name='guest_names' placeholder='Guest Name(s)'/>
                    </div>
                  </div>
                  <div class="regFormHalf">
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
                    <textarea rows="4" class="commentArea" name='comments' placeholder='Comments...'></textarea>
                  </div>
                </div>
                <button>REGISTER</button>
              </form>
            </div>
          </div>
        @endauth
      @endif
      <div class="regRow">
        <div class="regSection hotelSection">
          <div class="reunionSectBttn">HOTEL DETAILS</div>
        </div>
        <div class="regSection dayOneSection">
          <div class="reunionSectBttn">WEDNESDAY</div>
        </div>
        <div class="regSection dayTwoSection">
          <div class="reunionSectBttn">THURSDAY</div>
        </div>
        <div class="regSection dayThreeSection">
          <div class="reunionSectBttn">FRIDAY</div>
        </div>
        <div class="regSection dayFourSection">
          <div class="reunionSectBttn">SATURDAY</div>
        </div>
    </div>
    <!-- </div> -->
    @include ('footer.content')
  </div>
@stop
