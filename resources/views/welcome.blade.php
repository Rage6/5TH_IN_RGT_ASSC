<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>5th Infantry Regiment Association</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="css/my_custom/welcome/welcome.css" rel="stylesheet">

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/my_custom/welcome/welcome.js"></script>
  </head>
  <body>
    <div>
      <div class="menuBody">
        <div class="mainMenuTopBttn">
          <a class="mainMenuLink" href="{{ url('/') }}">
            <img src="images/welcome/5INF_COA-min.png"/>
          </a>
          <img id="mainMenuTopBttn" src="images/welcome/main_menu-min.png"/>
        </div>
        <div class="mainMenuBox">
          <div class="mainMenuBttn" data-bttn-num="0">
            HOME
          </div>
          <div>
            <div class="mainMenuBttn" data-bttn-num="1">
              ASSOCIATION
            </div>
            <div class="mainMenuSubBox" data-box-num="1">
              <div class="mainMenuSubBttn">+ What Is A Member?</div>
              <div class="mainMenuSubBttn">+ Becoming A Member</div>
              <div class="mainMenuSubBttn">+ Newsletter Sample</div>
              <div class="mainMenuSubBttn">+ Merchandise Example</div>
              <div class="mainMenuSubBttn">+ Our Donations</div>
            </div>
          </div>
          <div>
            <div class="mainMenuBttn" data-bttn-num="2">
              HISTORY
            </div>
            <div class="mainMenuSubBox" data-box-num="2">
              <div class="mainMenuSubBttn">+ Origin & Traditions</div>
              <div class="mainMenuSubBttn">+ War of 1812</div>
              <div class="mainMenuSubBttn">+ 1815 - 1845</div>
              <div class="mainMenuSubBttn">+ Mexican War</div>
              <div class="mainMenuSubBttn">+ Frontier Defense & Indian Wars</div>
              <div class="mainMenuSubBttn">+ 1891 - 1939</div>
              <div class="mainMenuSubBttn">+ World War II</div>
              <div class="mainMenuSubBttn">+ Korean War</div>
              <div class="mainMenuSubBttn">+ 1954 - 1966</div>
              <div class="mainMenuSubBttn">+ Vietnam War</div>
              <div class="mainMenuSubBttn">+ 1975 - 2001</div>
              <div class="mainMenuSubBttn" style="cursor:none;background-color:grey">+ Global War On Terror</div>
              <div class="mainMenuSubBttn" style="padding-left:15%">+ Iraq</div>
              <div class="mainMenuSubBttn" style="padding-left:15%">+ Afghanistan</div>
              <div class="mainMenuSubBttn">+ Book: "Two Centuries of Valor: The Story of the 5th Infantry Regiment"</div>
            </div>
          </div>
          <div>
            <div class="mainMenuBttn" data-bttn-num="3">
              HALL OF HONOR
            </div>
            <div class="mainMenuSubBox" data-box-num="3">
              <div class="mainMenuSubBttn">+ KIA, MIA, & Died In Service</div>
              <div class="mainMenuSubBttn">+ Medal of Honor Recipients</div>
              <div class="mainMenuSubBttn">+ Deceased Members</div>
            </div>
          </div>
          <div>
            <div class="mainMenuBttn" data-bttn-num="4">
              PHOTO ALBUM
            </div>
            <div class="mainMenuSubBox" data-box-num="4">
              <div class="mainMenuSubBttn">+ Album 1</div>
              <div class="mainMenuSubBttn">+ Album 2</div>
            </div>
          </div>
          @if (Route::has('login'))
            <div>
              <div class="mainMenuBttn" data-bttn-num="5">MEMBERS ONLY</div>
              <div class="mainMenuSubBox" data-box-num="5">
                  @auth
                      <a href="{{ url('/home') }}">
                        <div class="mainMenuSubBttn">
                          + My Profile
                        </div>
                      </a>
                      <div class="mainMenuSubBttn">+ Clothing & Items</div>
                      <div class="mainMenuSubBttn">+ Reunions</div>
                      <div class="mainMenuSubBttn">+ Newsletters</div>
                  @else
                      <a href="{{ route('login') }}">
                        <div class="mainMenuSubBttn">+ Login</div>
                      </a>
                  @endauth
              </div>
            </div>
          @endif
        </div>
      </div>
      <div class="introBody">
        <div class="mainTitle">
          <div>5th Infantry</div>
          <div>Regiment</div>
          <div>Association</div>
        </div>
        <div id="bottomView" class="bottomView">
          <div>MORE</div>
        </div>
      </div>
      <div class="lowerBody">
        <div>Home of the Bobcats</div>
        <div>This is Test 2</div>
      </div>
    </div>
  </body>
</html>
