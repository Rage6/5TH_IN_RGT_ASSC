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
    function clickSection(section,type) {
      // Opens the correct box...
      let allBoxes = document.querySelectorAll("[data-type='box']");
      for (let boxNum = 0; boxNum < allBoxes.length; boxNum++) {
        allBoxes[boxNum].style.display = "none";
      };
      let targetBox = document.querySelectorAll("[data-type='box'][data-section='"+section+"']")[0];
      targetBox.style.display = "block";
      // ...and scrolls down to opened box
      let menuHeight = document.getElementById("mainMenuTopBttn").offsetHeight;
      let targetTop = targetBox.offsetTop;
      let scrollAmount = targetTop - menuHeight;
      window.scroll({
        top: scrollAmount,
        behavior: 'smooth'
      });
    };
    document.querySelectorAll('[data-type]');
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
        <div class="regBttn" id="regBttn" onclick="openAndCloseForm()">
          Register Now!
        </div>
      </div>
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
                  @auth
                    <input required type='text' name='first_name' value='{{ $this_user->first_name }}' placeholder='First Name'/>
                    <input required type='text' name='last_name' value='{{ $this_user->last_name }}' placeholder='Last Name'/>
                    <input required type='email' name='email' value='{{ $this_user->email }}' placeholder='Email'/>
                  @else
                    <input required type='text' name='first_name' placeholder='First Name'/>
                    <input required type='text' name='last_name' placeholder='Last Name'/>
                    <input required type='email' name='email' placeholder='Email'/>
                  @endauth
                  <input required type='tel' name='phone_number' placeholder='Phone Number'/>
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
      <div class="regRow">
        <div class="regSection hotelSection">
          <div
            class="reunionSectBttn"
            data-section="hotel"
            data-type="button"
            onclick="clickSection('hotel','button')">HOTEL DETAILS</div>
        </div>
        <div class="regSection dayOneSection">
          <div
            class="reunionSectBttn"
            data-section="wednesday"
            data-type="button"
            onclick="clickSection('wednesday','button')">WEDNESDAY</div>
        </div>
        <div class="regSection dayTwoSection">
          <div
            class="reunionSectBttn"
            data-section="thursday"
            data-type="button"
            onclick="clickSection('thursday','button')">THURSDAY</div>
        </div>
        <div class="regSection dayThreeSection">
          <div
            class="reunionSectBttn"
            data-section="friday"
            data-type="button"
            onclick="clickSection('friday','button')">FRIDAY</div>
        </div>
        <div class="regSection dayFourSection">
          <div
            class="reunionSectBttn"
            data-section="saturday"
            data-type="button"
            onclick="clickSection('saturday','button')">SATURDAY</div>
        </div>
        <div class="regSection locationSection">
          <div
            class="reunionSectBttn"
            data-section="location"
            data-type="button"
            onclick="clickSection('location','button')">LOCATION</div>
        </div>
      </div>
      <div
        class="reunionSectBox hotelBox"
        data-section="hotel"
        data-type="box">
        <div class="boxTitle">
          Hotel Details
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              Location:
            </div>
            <div class="boxSubcontent">
              The Crowne Plaza Dulles Airport
              2200 Centreville Road
              Herndon, Virginia 20170​
            </div>
            <div class="hotelMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49639.6878705143!2d-77.43878072054437!3d38.95869515093366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b6478d0ca0b5bf%3A0x1c03d989da58212e!2s2200%20Centreville%20Rd%2C%20Herndon%2C%20VA%2020170!5e0!3m2!1sen!2sus!4v1621436298432!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <div>
            <div class="boxTotal">
              <div class="boxSubtitle">
                Hotel Amenities:
              </div>
              <ul>
                <li>
                  Free parking
                </li>
                <li>
                  Shuttle Service to/from the Airport & within a 5 mile radius of the hotel based on request and  availability
                </li>
                <li>
                  Breakfast for 2 included in Room Rate​
                </li>
                <li>
                  Free Wi-Fi in guestrooms
                </li>
              </ul>
            </div>
            <div class="boxTotal">
              <div class="boxSubtitle">
                Cost:
              </div>
              <div class="boxSubcontent">
                <ul>
                  <li>$129 Single / Double per night</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="boxTotal" id="hotelReservation">
            <div class="boxSubtitle">
              Reservations:
            </div>
            <div class="boxSubcontent">
              <div class="rowIntro">To make a reservation:</div>
              <div class="reservationRow">
                <a href="https://www.ihg.com/crowneplaza/hotels/us/en/herndon/washv/hoteldetail?fromRedirect=true&qSrt=sBR&qIta=99801505&icdv=99801505&qSlH=WASHV&qGrpCd=FIR&setPMCookies=true&qSHBrC=CP&qDest=2200%20Centreville%20Road,%20Herndon,%20VA,%20US&srb_u=1" target="_blank" style="cursor:pointer">
                  <div class="reserveBttn">BOOK ONLINE</div>
                </a>
                <i>OR</i>
                <div>
                  Call 1-(877) 390-5944 and, when booking, tell them "5th Infantry Regiment Association". Booking prices are good up to 3 days before and after the reunion dates. Reservations must be made by July 26th, 2021.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox wednesdayBox"
        data-section="wednesday"
        data-type="box">
        <div class="boxTitle">
          Wednesday, Aug. 11th, 9:00 am - 3:00 pm
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              National Air & Space Museum Steven F. Udvar-Hazy Center
            </div>
            <div class="boxSubcontent">
              Two large hangars display thousands of aviation and space artifacts, including a Lockheed SR-71 Blackbird, a Concorde, and the Space Shuttle <i>Discovery</i>.​
            </div>
            <div class="reunionBoxImg shuttle"></div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Winery at Bull Run
            </div>
            <div class="boxSubcontent">
              Travel back in tine to the year 1861. Immerse yourself in the beautiful, historically landscaped vistas, tour the structures dotting the landscape while learning of the secrets they keep, and listen to the unique stories of the American Civil War that took place on these very grounds</br>
              Taste award-winning wines along the journey at <a href="https://www.wineryatbullrun.com" target="_blank">The Winery at Bull Run</a>
            </div>
            <div class="reunionBoxImg winery"></div>
            <div class="boxSubcontent">
              Walk amongst the ruins of the Hillwood Mansion, which served as a hospital during the First Battle of Bull Run. Explore an authentic Civil War soldiers's winter quarters cabin that still appears inhabited today.
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Lunch
            </div>
            <div class="boxSubcontent">
              Make your lunch selection in the shopping cart. Choice of our picnic-style wraps include:
              <ul>
                <li>Chicken Caesar Wrap</li>
                <li>Tuna Sun Dried Tomato</li>
                <li>Turkey BLT with Avocado</li>
                <li>Buffalo Chicken Wrap with Blue Cheese</li>
                <li>Veggie Roasted Red Pepper Hummus</li>
              </ul>
              Includes homemade pepper kettle chips and penne pasta salad.
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  $79 per person. This includes the museum visit, lunch, tour, and wine tasting.
                </li>
              </ul>
              <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div>
              <a href="http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html" target="_blank" style="cursor:pointer">
                <div class="reserveBttn">FEE & MEAL</div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox"
        data-section="thursday"
        data-type="box">
        This is the box for the Thursday information
      </div>
      <div
        class="reunionSectBox"
        data-section="friday"
        data-type="box">
        This is the box for the Friday information
      </div>
      <div
        class="reunionSectBox"
        data-section="saturday"
        data-type="box">
        This is the box for the Saturday information
      </div>
      <div
        class="reunionSectBox"
        data-section="location"
        data-type="box">
        This is the box for the Location information
      </div>
    </div>
    @include ('footer.content')
  </div>
@stop
