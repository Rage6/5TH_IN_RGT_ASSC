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
    <div class="timelineBox">
      <div class="timelineBar">
        <a href="{{ url('/history/timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment topicSegment">
        <div class="segmentTitle"><u>Michelin Rubber Plant Battle</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <span style="font-size:1.8rem">O</span>n the 6th of March 1970, Company B, 1st Battalion 5th Infantry (Mechanized), was in a night laager in the vast Michelin Rubber Plantation, near Dau Tieng Vietnam.  Earlier that day, Division Intelligence, G2, notified our Battalion that a large enemy force of NVA was reported moving North of B Companies’ area of operation.  I was ordered to send a Platoon sized force to conduct an ambush near the reported enemy location.  Since the platoon would be located beyond the range of my mortar section, I sent my Forward Observer (FO), Lt. Love, along with the ambush platoon to provide artillery support.  I then established 3 squad-sized ambushes along likely avenues of approach to B Companies’ laager site.  I decided to stay with my remaining platoon at the laager site in order to lead a reaction force in case one of my ambush units encountered a major enemy size force.
            </p>
            <div class="segmentImg imgRight imgSmall" style="background-image:url('../../../images/history/topics/michelin-rubber-plant-battle.jpg')">
            </div>
            <p>
              Darkness enveloped the small clearing where our laager was established.  12 Armored Personnel Carriers (APC’s) each mounted with 50 cal. Machine guns formed a circular perimeter.  Between each APC, was a foxhole or fighting position, containing a mounted M-60 machine gun.  In front of our perimeter, claymore mines were positioned along with concertina wire and trip flares.  A section of cyclone fence was installed about 3 feet in the front of each APC.  This fencing was helpful in stopping direct hits from RPGs (Rifle Propelled Grenades) during a battle.  Inside our perimeter were my three Mortar Tracks, Medic Track, Vehicle Recovery Track, Mess Track, the 1st Sgt.’s resupply Track and my Command Track (which was always pointed North).  My FO, before going out with the ambush platoon, established 105mm artillery registration points, and our Mortar Section covered all defoliated positions outside the perimeter.
            </p>
            <p>
              Around 2300 hrs. (11PM) 1st Lt. Sparkman, our 3rd Platoon Leader, left my track and was returning to his platoon when a loud popping sound was heard indicating a trip flare had ignited.  An enemy sapper tripped the flare and Sparkman saw him.  Lt. Sparkman yelled “they’re in the wire”.  I looked up just as one of our machine guns opened up on the sapper, killing him instantly.  At least two other sappers were seen retreating back into the rubber trees and were engaged.  All of the sappers were naked, covered with charcoal for camouflage, and carried satchel charges.  If they had been successful in penetrating our perimeter, we would have been in serious trouble.  As it was, the enemy assault force, which was waiting in at least three locations in the rubber trees, began firing immediately upon being detected by us and attempted to assault our position from three sides.  Though undermanned, we put up a terrific fight against a Battalion size force of NVA regulars.  You will hear about six minutes of the ensuing battle, which lasted about 3 hours.  18 out of approximately 50 of our soldiers inside the perimeter were wounded, none of their wounds were life threatening.  Although no body count was taken, intelligence reported that enemy losses were estimated to be 180 killed or wounded.
            </p>
            <div class="segmentImg imgLeft">
              <audio class="audioClip" controls>
                <source src="../../../audio/firefight.mp3">
              </audio>
            </div>
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

@section('the_rifle_and_the_myth_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar">
        <a href="{{ url('/history/timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment topicSegment">
        <div class="segmentTitle"><u>M-16: The Rifle And The Myth</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              In 1957, Eugene M. Stoner, a skilled civilian engineer, was commissioned by the United States Army to develop a shoulder fired weapon that weighed no more than seven pounds, and that was to be capable of automatic as well as semi-automatic firing. In less than a year, he delivered a prototype of the weapon to the Army at Fort Benning, Georgia where it was given a thorough testing. The Army found the rifle, which was named the AR-15, to be equal to its own M-14 in firing at distances of up to five hundred yards. The AR-15 was found to be superior to the M-14 in respect to weight, ease of automatic firing without climbing, and in the weight of its ammunition, which allowed a soldier to carry more rounds without weight increase. After months of testing, the United States Continental Army Command Board recommended that the AR-15 rifle be adopted to replace the M-1 rifle, of World War II fame, as the Army's standard basic infantry weapon.
            </p>
            <p>
              The recommendation was not adopted, and it was not until 1962 that 1,000 of the rifles were sent to Vietnam for months of testing in the hands of United States Advisors and Vietnamese soldiers. This was accomplished over the objections of the Department of the Army by the direct intervention of Robert McNamara, the secretary of Defense. These tests in Vietnam proved to be the publicity needed to persuade the Air Force and the Navy to ask for initial purchases of the weapon, in order to equip their personnel serving in Vietnam. Following the Air Force and Navy requests, Army General Paul Harkins was so impressed with the test results that he placed an order, in the summer of 1962, requesting 20,000 of the rifles for use by United States and Vietnamese troops.
            </p>
            <p>
              The Army Staff resisted the change and was reluctant to adopt the AR-15 in lieu of the more conventional M-14 rifle. Again, Secretary of Defense MacNamara, who was also impressed by the test results showing the Ar-15 to be superior to the M-14, intervened and forced the services into a compromise. This compromise resulted in the Army placing an order in 1963 for 85,000 AR-15 rifles to be used by its troops in Vietnam, while keeping the M-14 rifle as the standard weapon for its other troops stationed in the United States and in Europe.
            </p>
            <p>
              From its first introduction into Vietnam in 1962 until 1966 the rifle, now termed the M-16, enjoyed a reputation of an extremely lethal and dependable weapon among the soldiers using it in combat. In 1966 a jamming malfunction with the M-16 rifle began to become commonplace. This malfunction consisted of the failure of the rifle to extract a fired cartridge shell. The extractor would grip the rim of an expended cartridge and instead of pulling the cartridge from the chamber of the barrel on the rearward movement of the bolt, the extractor would pull a portion of the rim from the cartridge as the bolt moved to the rear, leaving the cartridge in the chamber of the barrel. This then required the soldier to take a cleaning rod and insert it into the muzzle end of the barrel and force the fired cartridge from the chamber, thus clearing the weapon so that it could be fired again. [Fighting a modern war with a muzzle loader; Oh happy, happy, joy, joy.] Confidence among combat troops soon reached such a low level that 1/5th Mech. combat troops began arming themselves with whatever other weapons were available. These included rifles, pistols, shotguns, sub-machineguns and whatever else could be scrounged.
            </p>
            <p>
              Why did a weapon that enjoyed a reputation of reliability in combat suddenly begin to malfunction? Almost as perplexing is the question of why in late 1967, the rifle again began to live up to its old reputation of reliability and the malfunctions ceased.
            </p>
            <p>
              In May of 1967, after numerous complaints had been received by members of the United States Congress regarding the malfunctioning of the M-16 rifle in Vietnam, a special subcommittee of the Congressional Armed Forces Committee, began to investigate the allegations.
            </p>
            <p>
              In Vietnam, when the malfunction started to make its appearance and the combat soldier started asking why, he was told that it was his fault because he was not keeping his weapon clean. A further complication at the time was that there were two types of ammunition available. The IMR and the Ball Propellent became mixed as the Ball Propellent was being introduced and the IMR was being used up. Then it was said that the weapon needed a new buffer and that would cure the problem. With the new buffer the malfunction continued, and again the soldier was told it was his fault because he was not properly cleaning his rifle. The Army tried to blame him and the rifle. As it turns out, the blame for the malfunction rested with neither the soldier nor the M-16 rifle. It rested with the manufacture of 5.56 mm. ammunition with ball propellant, because it was cheaper than using IMR extruded propellant, and there was a huge surplus of old artillery powder from which ball propellant was manufactured.
            </p>
            <p>
              Following is part of the text of the hearings held by the Congressional Armed Forces Special Subcommittee.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
