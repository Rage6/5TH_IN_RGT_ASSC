@extends('layouts.master')

@section('history_style')
  <!-- History Styles -->
  <!-- Default CSS files; 0px -> 360px-->
  <link rel="stylesheet" type="text/css" href="/css/my_custom/history/360_history.css">
  <!-- 361px -> 375px-->
  <link rel="stylesheet" media="screen and (min-width: 361px) and (max-width: 375px)" type="text/css" href="/css/my_custom/history/375_history.css">
  <!-- 376px -> 414px-->
  <link rel="stylesheet" media="screen and (min-width: 375px) and (max-width: 414px)" type="text/css" href="/css/my_custom/history/414_history.css">
  <!-- 415px -> 768px-->
  <link rel="stylesheet" media="screen and (min-width: 415px) and (max-width: 768px)" type="text/css" href="/css/my_custom/history/768_history.css">
  <!-- 769px -> 1366px-->
  <link rel="stylesheet" media="screen and (min-width: 769px) and (max-width: 1366px)" type="text/css" href="/css/my_custom/history/1366_history.css">
  <!-- 1367px -> 1920px-->
  <link rel="stylesheet" media="screen and (min-width: 1367px) and (max-width: 1920px)" type="text/css" href="/css/my_custom/history/1920_history.css">
  <!-- 1921px and Greater -->
  <link rel="stylesheet" media="screen and (min-width: 1921px)" type="text/css" href="/css/my_custom/history/past_1920_history.css">
  @include ('footer.style')
@stop

@section('michelin_rubber_plant_battle_content')
  <div class="mainBody">
    <div class="allSegments">
    <div class="timeSegment">
      <div class="segmentTitle"><u>Michelin Rubber Plant Battle</u></div>
      <div class="segmentContent">
        <div class="segmentWords">
          <p>
            The contents of this recording contain the dramatic noises of a battle.  On the 6th of March 1970, Company B, 1st Battalion 5th Infantry (Mechanized), was in a night laager in the vast Michelin Rubber Plantation, near Dau Tieng Vietnam.  Earlier that day, Division Intelligence, G2, notified our Battalion that a large enemy force of NVA was reported moving North of B Companies’ area of operation.  I was ordered to send a Platoon sized force to conduct an ambush near the reported enemy location.  Since the platoon would be located beyond the range of my mortar section, I sent my Forward Observer (FO), Lt. Love, along with the ambush platoon to provide artillery support.  I then established 3 squad-sized ambushes along likely avenues of approach to B Companies’ laager site.  I decided to stay with my remaining platoon at the laager site in order to lead a reaction force in case one of my ambush units encountered a major enemy size force.
          </p>
          <p>
            Darkness enveloped the small clearing where our laager was established.  12 Armored Personnel Carriers (APC’s) each mounted with 50 cal. Machine guns formed a circular perimeter.  Between each APC, was a foxhole or fighting position, containing a mounted M-60 machine gun.  In front of our perimeter, claymore mines were positioned along with concertina wire and trip flares.  A section of cyclone fence was installed about 3 feet in the front of each APC.  This fencing was helpful in stopping direct hits from RPGs (Rifle Propelled Grenades) during a battle.  Inside our perimeter were my three Mortar Tracks, Medic Track, Vehicle Recovery Track, Mess Track, the 1st Sgt.’s resupply Track and my Command Track (which was always pointed North).  My FO, before going out with the ambush platoon, established 105mm artillery registration points, and our Mortar Section covered all defoliated positions outside the perimeter.
          </p>
          <p>
            Around 2300 hrs. (11PM) 1st Lt. Sparkman, our 3rd Platoon Leader, left my track and was returning to his platoon when a loud popping sound was heard indicating a trip flare had ignited.  An enemy sapper tripped the flare and Sparkman saw him.  Lt. Sparkman yelled “they’re in the wire”.  I looked up just as one of our machine guns opened up on the sapper, killing him instantly.  At least two other sappers were seen retreating back into the rubber trees and were engaged.  All of the sappers were naked, covered with charcoal for camouflage, and carried satchel charges.  If they had been successful in penetrating our perimeter, we would have been in serious trouble.  As it was, the enemy assault force, which was waiting in at least three locations in the rubber trees, began firing immediately upon being detected by us and attempted to assault our position from three sides.  Though undermanned, we put up a terrific fight against a Battalion size force of NVA regulars.  You will hear about six minutes of the ensuing battle, which lasted about 3 hours.  18 out of approximately 50 of our soldiers inside the perimeter were wounded, none of their wounds were life threatening.  Although no body count was taken, intelligence reported that enemy losses were estimated to be 180 killed or wounded.
          </p>
          <p>
            This battle was recorded by one of our soldiers who was sitting inside his APC and was making a tape recording for his girl friend back home.  He dropped the recorder's handset when the first shots were fired and manned his 50 cal. Machine gun.  Unknown to him, he left the tape recorder on.  The tape ran out about six minutes into the battle.  What you hear is a small portion of the battle, but enough to appreciate the intensity of the fight.  The soldier gave a copy of the tape to Specialist Gregg Wilbanks, a driver and 50 cal. gunner on 3-4 track.  Gregg, who was seriously wounded in Cambodia, gave me a copy when we got together in September 2002 at our Battalion’s reunion in Branson, MO.  May the fighting spirit of the 1/5 Infantry live on.
          </p>
          <p>
            Sincerely,</br>
            Ralph G. Laubecher</br>
            B Co. Commander, 6 March 1970</br>
          </p>
        </div>
      </div>
    </div>
    </div>
  </div>
  @include ('footer.content')
@stop
