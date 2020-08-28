<div class="menuBody">
  <div class="mainMenuTopBttn">
    <a class="mainMenuLink" href="{{ url('/') }}">
      <img src="images/welcome/5INF_crest-min.png"/>
    </a>
    <div id="mainMenuTopBttn" class="mainMenuTopSquare">
      <div></div>
      <div></div>
      <div></div>
    </div>
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
