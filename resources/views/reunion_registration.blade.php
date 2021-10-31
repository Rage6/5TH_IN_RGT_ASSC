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
          September 13 - 18
        </div>
        <div class="reunionLocation dateAndLocation">
          Colorado Spring, CO
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
                    Do you plan on attending: the US Olympic Museum & Garden of the Gods Tour (lunch included)?
                  </div>
                  <input type='radio' name='event_one' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_one' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending: the Royal Gorge Railroad Tour ($20 lunch voucher)?
                  </div>
                  <input type='radio' name='event_two' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_two' value='No'/><span>No</span>
                </div>
                <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending: the Memorial Service at Fort Carson?
                  </div>
                  <input type='radio' name='event_three' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='event_three' value='No'/><span>No</span>
                </div>
                <!-- <div class='radioTypeBox'>
                  <div>
                    Do you plan on attending the ladies breakfast 9am Saturday morning? There is no charge.
                  </div>
                  <input type='radio' name='ladies_breakfast' value='Yes'/><span>Yes</span>
                  <input checked type='radio' name='ladies_breakfast' value='No'/><span>No</span>
                </div> -->
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
        <div class="regSection paymentSection">
          <!-- <div
            class="reunionSectBttn"
            data-section="payment"
            data-type="button"
            onclick="clickSection('payment','button')">PAYMENTS</div> -->
            <a href="http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html" target="_blank" style="cursor:pointer;color:white">
              <div
                class="reunionSectBttn">PAYMENTS
              </div>
            </a>
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
              Hotel Elegant&eacute; Conference & Event Center</br>
              2886 S. Circle Drive</br>
              Colorado Springs, CO 80906</br>
            </div>
            <div class="hotelMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4117.256067646065!2d-104.7978941686085!3d38.7980823243563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87134462d12b8335%3A0x9b5a074af68729fe!2s2886%20S%20Circle%20Dr%2C%20Colorado%20Springs%2C%20CO%2080906!5e0!3m2!1sen!2sus!4v1634250360925!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
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
                  Shuttle Service to/from the Airport & within an 8 mile radius of the hotel based on request and  availability
                </li>
                <li>
                  Breakfast for 2 included in Room Rate​ for single/double, additional $10 per person for triple/quadruple rooms.
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
                  <li>King or Double Queen room:
                    <ul>
                      <li>Single/Double - $119</li>
                      <li>Triple - $129</li>
                      <li>Quadruple - $139</li>
                    </ul>
                  </li>
                </ul>
                <ul>
                  <li>Loft Suite:
                    <ul>
                      <li>Single/Double - $119</li>
                      <li>Triple/Quadruple - $209</li>
                    </ul>
                  </li>
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
                <a href="https://www.reseze.net/servlet/SendPage?hotelid=1410&amp;skipfirstpage=true&amp;page=2714178" target="_blank" style="cursor:pointer">
                  <div class="reserveBttn">BOOK ONLINE</div>
                </a>
                <div>
                  <div>
                    <u>Book By Email</u>
                  </div>
                  <div>mcm09reservations1@mcmelegante.com</div>
                </div>
                <div>
                  <div>
                    <u>Book By Phone</u>
                  </div>
                  <div>
                    Call (719) 576-5900 and, when booking, tell them "5th Infantry Regiment Association". Booking prices are good up to 3 days before and after the reunion dates. Reservations must be made by Friday, August 12th, 2022.
                  </div>
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
          Wednesday, Sept. 14th, 10:00 am - 3:30 pm
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              U.S. Olympic & Paralympic Museum (10 - 12)
            </div>
            <div class="boxSubcontent">
              Public tours start with an inspirational 12-minute film and then a 45-minute outdoor walking tours of the training complex, including the weightlifting and wrestling facilities, the Aquatics Center and the Sports Center Gymnasiums. Visitors can then explore the U.S. Olympic Hall of Fame Rotunda, the Team USA Store and art exhibitions found throughout the facility.​
            </div>
            <div class="reunionBoxImg shuttle"></div>
          </div>
          <!-- <div class="boxTotal">
            <div class="boxSubtitle">
              National Air & Space Museum Steven F. Udvar-Hazy Center
            </div>
            <div class="boxSubcontent">
              Two large hangars display thousands of aviation and space artifacts, including a Lockheed SR-71 Blackbird, a Concorde, and the Space Shuttle <i>Discovery</i>.​
            </div>
            <div class="reunionBoxImg shuttle"></div>
          </div> -->
          <div class="boxTotal">
            <div class="boxSubtitle">
              Riding Tour @ Garden of the Gods (2 - 3:30)
            </div>
            <div class="boxSubcontent">
              TBA
            </div>
            <div class="reunionBoxImg winery"></div>
            <div class="boxSubcontent">
              TBA
            </div>
          </div>
          <!-- <div class="boxTotal">
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
          </div> -->
          <div class="boxTotal">
            <div class="boxSubtitle">
              Lunch
            </div>
            <div class="boxSubcontent">
              <!-- Make your lunch selection in the shopping cart. Choice of our picnic-style wraps include: -->
              <ul>
                <!-- <li>Chicken Caesar Wrap</li>
                <li>Tuna Sun Dried Tomato</li>
                <li>Turkey BLT with Avocado</li>
                <li>Buffalo Chicken Wrap with Blue Cheese</li>
                <li>Veggie Roasted Red Pepper Hummus</li> -->
                <li>TBA</li>
              </ul>
              <!-- Includes homemade pepper kettle chips and penne pasta salad. -->
            </div>
          </div>
          <!-- <div class="boxTotal">
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
          </div> -->
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <!-- <ul>
                <li>
                  $79 per person. This includes the museum visit, lunch, tour, and wine tasting.
                </li>
              </ul>
              <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div>
              <a href="http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html" target="_blank" style="cursor:pointer">
                <div class="reserveBttn">FEE & MEAL</div>
              </a> -->
              TBA
            </div>
          </div>
          <!-- <div class="boxTotal">
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
          </div> -->
        </div>
      </div>
      <div
        class="reunionSectBox thursdayBox"
        data-section="thursday"
        data-type="box">
        <div class="boxTitle">
          Thursday, Sept. 15th, 9:00 am - 4:00 pm
        </div>
        <div class="boxContent">
          <!-- <div class="boxTotal">
            <div class="boxSubtitle">
              Washington, D.C. Memorial & Monuments Day
            </div>
            <div class="boxSubcontent">
              <div class="boxTotal">
                We will see as many as time permits, and we will have tour guides.
                <div class="memorialList">
                  <div class="listBullet"></div>
                  <div class="listText">Lincoln Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">Vietnam Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">Korean Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">9/11 Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">Washington Monument</div>
                  <div class="listBullet"></div>
                  <div class="listText">Iwo Jima Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">World War II Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">Franklin Delano Roosevelt Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">Jefferson Memorial</div>
                  <div class="listBullet"></div>
                  <div class="listText">American Veterans Disabled for Life Memorial</div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="boxTotal">
            <div class="boxSubtitle">
              Royal Gorge Route Railroad
            </div>
            <div class="boxSubcontent">
              This is Colorado's first and only full-service railroad dining experience. The Royal Gorge Route Railroad features beautifully restored mid-century coach, dining, bar and lounge, and dome cars with luxurious seating. Take in the panoramic views from your seat or the open-air car. Full bar and extensive, well-curated wine list always available.
            </div>
            <div class="reunionBoxImg memorialCollage">
              <div class="oneCorner upperLeft"></div>
              <div class="oneCorner upperRight"></div>
              <div class="oneCorner lowerLeft"></div>
              <div class="oneCorner lowerRight"></div>
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  Vista Dome Option: $125
                </li>
                <li>
                  Club Car Option: $109
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
        class="reunionSectBox fridayBox"
        data-section="friday"
        data-type="box">
        <div class="boxTitle">
          Friday, Sept. 16th, 9:00 am - 4:00 pm
        </div>
        <div class="boxContent">
          <!-- <div class="boxTotal">
            <div class="boxSubtitle">
              National Army Museum
            </div>
            <div class="boxSubcontent">
              The National Museum of the United States Army will serve as the capstone of the Army Museum Enterprise and provide the only comprehensive portrayal of Army history and traditions.  The National Army Museum will celebrate the selfless service and sacrifice of over 30 million men and women who have worn the Army uniform since 1775.  The Museum will be a technological marvel incorporating the latest advances in museum exhibits while providing advanced educational opportunities that will capture the attention of visitors old and young.  As the Army’s national landmark, the Museum will honor United States Soldiers – past, present, and future – and provide an interactive educational experience explaining the Army’s role in creating and defending our nation, as well as the Army’s social initiatives and contributions for more than 240 years.
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  $89 per person. This includes the museum's memorial service, a catered luncheon, and self-guided tour.
                </li>
              </ul>
              <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div>
              <a href="http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html" target="_blank" style="cursor:pointer">
                <div class="reserveBttn">FEE & MEAL</div>
              </a>
            </div>
            <div class="reunionBoxImg army_museum"></div>
          </div> -->
          <div class="boxTotal">
            <div class="boxSubtitle">
              TBA
            </div>
            <div class="boxSubcontent">
              TBA
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Total Cost
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  TBA
                </li>
              </ul>
              <!-- <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div> -->
              <a href="http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html" target="_blank" style="cursor:pointer">
                <div class="reserveBttn">FEE & MEAL</div>
              </a>
            </div>
            <div class="reunionBoxImg army_museum"></div>
          </div>
        </div>
      </div>
      <div
        class="reunionSectBox hotelBox"
        data-section="saturday"
        data-type="box">
        <div class="boxTitle">
          Saturday, Sept. 17th
        </div>
        <div class="boxContent">
          <div class="boxTotal">
            <div class="boxSubtitle">
              Morning Schedule
            </div>
            <div class="boxSubcontent">
              <div class="banquetList">
                <div>General Membership Meeting</div>
                <div>0900 - 1000</div>
                <div>Ladies Breakfast</div>
                <div>0900 - 1000</div>
                <div>Fragging</div>
                <div>1030 - 1100</div>
              </div>
              <div>
                Feel free to explore the surrounding area, Colorado Springs, while waiting for the evening banquet.
              </div>
              <iframe width="auto" height="auto" src="https://www.youtube.com/embed/OcxUYUXg0xg" title="Colorado Springs, CO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Dinner Choices
            </div>
            <div class="boxSubcontent">
              <div class="mealList">
                <div>Chicken Piccata: grilled chicken breast, lemon caper herb sauce</div>
                <div>$49</div>
                <div>Brilled Tilapia: herb & butter crusted white fish, garlic butter, lemon crown</div>
                <div>$49</div>
                <div>Flat Iron Steak: grilled, cracked peper demi</div>
                <div>$49</div>
                <div>Vegetable Wellington: grilled vegetables, boursin cheese, parmesan-wrapped pastry</div>
                <div>$49</div>
              </div>
              <div>
                Each meal also includes: salad w/ choice of dressing, assorted rolls and butter, chef's choice of a soup, vegetables, and dessert.
              </div>
              <div style="margin-bottom:30px">
                To pay for this event and/or any other events during this reunion, click below.
              </div>
              <a href="http://bobcat.ws/dulles-virginia-reunion-shopping-cart.html" target="_blank" style="cursor:pointer">
                <div class="reserveBttn">MEAL PAYMENT</div>
              </a>
            </div>
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Ladies Breakfast
            </div>
            <div class="boxSubcontent">
              <ul>
                <li>
                  This meal will be available for any women part of our association, be they an official member​ or attending the reunion with a member.
                </li>
                <li>
                  The Ladies Breakfast is free of charge, and it will take place from 9 - 10 am.
                </li>
              </ul>
            </div>
            <!-- <div class="reunionBoxImg shuttle"></div> -->
          </div>
          <div class="boxTotal">
            <div class="boxSubtitle">
              Bobcat Banquet
            </div>
            <div class="boxSubcontent">
              <div class="banquetList">
                <div>Cocktails</div>
                <div>1700</div>
                <div>Dinner</div>
                <div>1800</div>
                <div>Program</div>
                <div>1900</div>
                <div>Approx. Auction</div>
                <div>2000</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div
        class="reunionSectBox"
        data-section="payment"
        data-type="box">
        This is the box for the Payments information
      </div> -->
    </div>
    @include ('footer.content')
  </div>
@stop
