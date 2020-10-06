@extends('layouts.master')

@section('album_style')
  <!-- History Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/history/album/360_album.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/history/album/375_album.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/history/album/414_album.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/history/album/768_album.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/history/album/1366_album.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/history/album/1920_album.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/history/album/past_1920_album.css">
  @include ('footer.style')
@stop

@section('ww2_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>World War II</div>
      <div>PHOTO ALBUM</div>
    </div>
    <div class="allImgBox">
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/COL_Wooten.jpg" />
        </div>
        <div class="oneCaption">
          Col Wooten (71st patch) talking with some Russian tank soldiers. This must have been taken somewhere at the Enns River in or near Steyr, Austria, May 7 or later, 1945.
        </div>
        <div class="photographer">
          Courtesy of Robert J. Lapine
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/Company_A.jpg" />
        </div>
        <div class="oneCaption">
          Sgt. Milburn Rogers, Company A, 5th Infantry, gets the first Bronze Star awarded to a member of the Division after it went into action.
        </div>
        <div class="photographer">
          Courtesy of Glen Cuneo
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/Company_C_left.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            The left portion of the official photo of Company C, 5th Infantry Regiment.
          </div>
          <div>
            Each name is numbered by its row (front to back) and location within that row (left to right). Not all soldiers could be identified in this photo.
          </div>
          <div>
            <div>Jerry R. Moore (1/1)</div>
            <div>George J. Wilkens (1/3)</div>
            <div>Kenneth A. Young (1/4)</div>
            <div>Everett D. Fish (1/7)</div>
            <div>Stephen G. Gurka [?] (1/8)</div>
            <div>Murray E. Stebbins (2/2)</div>
            <div>Victor L. Forister (2/6)</div>
            <div>Jack E. Waters (2/7)</div>
            <div>Lenardo D. Di Bella (2/8)</div>
            <div>Raymond Mannon (3/4)</div>
            <div>George J. Butler (3/8)</div>
            <div>Doo K. Wong (4/6)</div>
            <div>Stephen G. Gurka [?] (4/8)</div>
            <div>David A. Pollick (4/)</div>
            <div>Monroe LeFevre Jr. (5/1)</div>
            <div>Harold D. Germann (5/2)</div>
            <div>Austin E. Pritchett (5/5)</div>
            <div>Ercil L. Bogner (5/6)</div>
            <div>Milburn Lake (6/1)</div>
            <div>Alvin G. Kramer (6/2)</div>
            <div>Albert I. Faulkner (6/4)</div>
            <div>Donald H. Sitz (6/6)</div>
            <div>Francis J. Schneble (6/8)</div>
            <div>Stvrch[?] (6/9)</div>
          </div>
        </div>
        <div class="photographer">
          Courtesy of Kenneth A. Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/Company_C_middle.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            The middle portion of the official photo of Company C, 5th Infantry Regiment.
          </div>
          <div>
            Each name is numbered by its row (front to back) and location within that row (left to right). Not all soldiers could be identified in this photo.
          </div>
          <div>
            <div>Stephen G. Gurka[?] (1/1)</div>
            <div>Stephen M. Hudacik (1/2)</div>
            <div>John Vavrek (1/3)</div>
            <div>Edwin W. Allen (1/4)</div>
            <div>William C. Hartman (1/6)</div>
            <div>Leo C. NcMahon (2/3)</div>
            <div>Robert S. Blim (2/4)</div>
            <div>Dale Barnstable (2/5)</div>
            <div>Joseph Sockel (2/6)</div>
            <div>Mike B. Layden (2/7)</div>
            <div>Carl M. Bush (2/8)</div>
            <div>Charles T. [OR] Robert R. Miller (3/2)</div>
            <div>Carl Nadolsky (3/6)</div>
            <div>Clarence G. Ochs (4/2)</div>
            <div>William L. La Due (4/4)</div>
            <div>Robert E. Bohrer (4/6)</div>
            <div>Joseph Petnuch (4/7)</div>
            <div>Thomas M. Queener (5/3)</div>
            <div>Sturch [?] (6/1)</div>
            <div>Green [?] (6/3)</div>
            <div>Ernest W. Nordquist (6/4)</div>
          </div>
        </div>
        <div class="photographer">
          Courtesy of Kenneth A. Young
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/Company_C_right.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            The right portion of the official photo of Company C, 5th Infantry Regiment.
          </div>
          <div>
            Each name is numbered by its row (front to back) and location within that row (left to right). Not all soldiers could be identified in this photo.
          </div>
          <div>
            <div>Arthur Lee [OR] Howard J. Lee (1/3)</div>
            <div>Chester A. Handy (1/4)</div>
            <div>Steven Revilock (1/5)</div>
            <div>James F. Fereira (2/7)</div>
            <div>Harry Lathrop</div>
          </div>
        </div>
        <div class="photographer">
          Courtesy of Kenneth A. Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/Company_D.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            "Photo of Co D 5th Inf . I got this yesterday from Stan Isaacson (LTC, USAR, Ret'd). He and his brother Robert are in the third row from the top, fifth and fourth from the right. The photo was probably taken in September or October 1944. The men are still wearing leggins. We didn't get combat boots until November or December, 1944."
          </div>
        </div>
        <div class="photographer">
          Courtesy of Robert J. Lapine
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/eaglenest1.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            Ken Young at Hitler's Eagles Nest
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/eaglenest2.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            SS Barracks part way down the mountain from the Eagles Nest
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/eaglenest3.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            SS Barracks part way down the mountain from the Eagles Nest
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/Kyoung5.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            (Left to Right) Sgt. Dale Barnstable [Squad Leader], S/SGT Kenneth Young [Section Leader], T/Sgt Everett Fish [Platoon Leader of the 60MM Mortor Section]
          </div>
        </div>
        <div class="photographer">
          Courtesy of Ken Young
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/COL_Sidney_Wooten.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            Col. Sidney C. Wooten, Regimental Commander
          </div>
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/COL_Charles_Gettys.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            Col. Charles Martin Gettys, 2nd Battalion Commander
          </div>
        </div>
        <div class="photographer">
          Courtesy of "History of the 71st Infantry"
        </div>
      </div>
      <div class="oneImgBox oddBox">
        <div class="oneImg">
          <img src="../../../images/history/albums/ww2/MAJ_James_Haley.jpg" />
        </div>
        <div class="oneCaption">
          <div>
            Maj. James W. Haley, 3rd Battalion Commander
          </div>
        </div>
        <div class="photographer">
          Courtesy of "History of the 71st Infantry"
        </div>
      </div>
      <div class="oneImgBox evenBox">
        <div class="oneImg">
          <a href="../../../images/history/albums/ww2/area_of_operations.jpg">
            <img src="../../../images/history/albums/ww2/area_of_operations.jpg" />
          </a>
        </div>
        <div class="oneCaption">
          <div>
            Area Of Operations - The 5th Infantry Across Europe
          </div>
        </div>
        <div class="photographer">
          By Col. Sidney C. Wooten
        </div>
      </div>

    </div>
  </div>
  @include ('footer.content')
@stop

@section('korea_content')
  <div class="mainBody">
    <div>Korean War</div>
    <div>PHOTO ALBUM</div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_content')
  <div class="mainBody">
    <div>Vietnam War</div>
    <div>PHOTO ALBUM</div>
  </div>
  @include ('footer.content')
@stop

@section('gwot_content')
  <div class="mainBody">
    <div class="mainTitle">
      <div>Global War On Terrorism</div>
      <div>PHOTO ALBUM</div>
    </div>
  </div>
  @include ('footer.content')
@stop
