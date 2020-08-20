<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="5th Infantry Regiment Association">
    <!-- <meta property="og:description" content=""> -->
    <!-- <meta property="og:description" content=""> -->

    <title>5th Infantry Regiment Association</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Arvo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Bellefair&family=Bellota+Text&family=Black+Ops+One&family=Charm&family=Cinzel&family=IM+Fell+English+SC&family=Italianno&family=Nanum+Myeongjo&family=News+Cycle&family=Prompt&family=Special+Elite&family=Spectral+SC&family=Staatliches&family=Stardos+Stencil&family=Thasadith&family=Vollkorn+SC&display=swap" rel="stylesheet">

    <!-- Styles -->
    <!-- Default CSS file; 0px -> 360px-->
    <link rel="stylesheet" type="text/css" href="css/my_custom/welcome/360_welcome.css">
    <!-- 361px -> 375px-->
    <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="css/my_custom/welcome/375_welcome.css">
    <!-- 376px -> 414px-->
    <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="css/my_custom/welcome/414_welcome.css">
    <!-- 415px -> 768px-->
    <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="css/my_custom/welcome/768_welcome.css">
    <!-- 769px -> 1366px-->
    <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="css/my_custom/welcome/1366_welcome.css">
    <!-- 1367px -> 1920px-->
    <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="css/my_custom/welcome/1920_welcome.css">
    <!-- 1921px and Greater -->
    <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="css/my_custom/welcome/past_1920_welcome.css">

    <link rel="icon" href="images/welcome/5INF_COA-min.png">

    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/my_custom/welcome/welcome.js"></script>
  </head>
  <body>
    <!-- <div class="wholeBody"> -->
      <div class="menuBody">
        <div class="mainMenuTopBttn">
          <a class="mainMenuLink" href="{{ url('/') }}">
            <img src="images/welcome/5INF_COA-min.png"/>
          </a>
          <img id="mainMenuTopBttn" src="images/welcome/main_menu-min.png"/>
        </div>
        <div class="mainMenuBox">
          <a href="{{ url('/') }}">
            <div class="mainMenuBttn" data-bttn-num="0">
              HOME
            </div>
          </a>
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
              <div class="mainMenuSubBttn">+ History Timeline</div>
              <!-- <div class="mainMenuSubBttn">+ War of 1812</div>
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
              <div class="mainMenuSubBttn" style="padding-left:15%">+ Afghanistan</div> -->
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
      <div class="introBody introBodyMax">
        <div class="introBody introIraq"></div>
        <div class="introBody introAfghanistan"></div>
        <div class="introBody introVietnam"></div>
        <div class="introBody introKorea"></div>
        <div class="introBody introWW2"></div>
        <div class="introBody introFrontier"></div>
        <div class="introBody intro1812"></div>
      </div>
      <div class="introBody">
        <div class="mainTitle">
          <div>5th Infantry</div>
          <div>Regiment</div>
          <div>Association</div>
        </div>
        <div id="bottomView" class="bottomView">
          <div>LEARN MORE</div>
        </div>
      </div>
      <div class="lowerBody">
        <div class="sectionTitle welcomeTitle">Home of the Bobcats</div>
        <div class="sectionContent welcomeContent">
          This organization is dedicated to all of the past, present, and future members of the United States Army's <u>5th Infantry Regiment</u>, commonly known as the "Bobcats". The 5th Regiment (or its ancestral regiments) has participated in nearly every major American conflict since 1808. Its soldiers are the sinews of the Regiment, both in peace and in war. They are the fabric of its history and its tradition.
        </div>
        <div class="allCompartments">
          <div class="oneCompartment desktopTitle">
            <div class="sectionTitle pastTitle">
              Reflect On Our Past
            </div>
            <div class="sectionTitle presentTitle">
              Act In Our Present
            </div>
            <div class="sectionTitle futureTitle">
              Join In Our Future
            </div>
          </div>
          <div class="oneCompartment">
            <div class="mobileComponent desktopComponent">
              <div class="sectionTitle pastTitle mobileTitle">
                Reflect On Our Past
              </div>
              <div class="sectionContent pastContent">
                <div>
                  The 5th Regiment has a unique and exciting military history spanning over 200 years of service. Here you can discover the Regiment's origin, read about it's role at any given time period, and even review a book dedicated to the Regiment.
                </div></br>
                <div>
                  Additionally, you can find the names of every 5th Regiment soldier that recieved the Medal of Honor, every soldier that died as a result of their service, and every deceased member of the Association.
                </div>
              </div>
            </div>
            <div class="mobileComponent desktopComponent">
              <div class="sectionTitle presentTitle mobileTitle">
                Act In Our Present
              </div>
              <div class="sectionContent presentContent">
                The 5th Regiment Infantry Association is a very active organization. It carries out an offical reunion every year, and members recieve frequent updates in the Association's regular newsletters. It also maintains frequent communications with the active units that that currently bear the our Regiment's crest. Finally, the Association frequently works to raise money and support for our active duty soldiers, fellow members, and related worthwhile causes.
              </div>
            </div>
            <div class="mobileComponent desktopComponent">
              <div class="sectionTitle futureTitle mobileTitle">
                Join In Our Future
              </div>
              <div class="sectionContent futureContent">
                <div>
                  The 5th Infantry Regiment Association's door is always open to every honorable soldier that has served as part of the 5th Infantry Regiment, be they past or present. It also accepts "associate members", meaning any family member of a Bobcat veteran. Members can update their personal profile, communicate with other members easier, read any newsletter, and purchase members-only merchandise.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer">
          <a href="{{ url('/') }}">
            <div>HOME</div>
          </a>
          <a>
            <div>ASSOCIATION</div>
          </a>
          <div>HISTORY</div>
          <div>HALL OF HONOR</div>
          <div>PHOTO ALBUM</div>
          <div>MEMBERS ONLY</div>
        </div>
      </div>
    <!-- </div> -->
  </body>
</html>
