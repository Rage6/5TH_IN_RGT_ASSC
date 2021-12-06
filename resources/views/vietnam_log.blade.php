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

@section('vietnam_preface_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar">
        <a href="{{ url('/history/vietnam-history/preface') }}">
          <div>
            <div>Preface</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1966') }}">
          <div>
            <div>1966</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1967') }}">
          <div>
            <div>1967</div>
          </div>
        </a>
        <div>
          <div>1968</div>
        </div>
        <div>
          <div>1969</div>
        </div>
        <div>
          <div>1970</div>
        </div>
        <div>
          <div>Maps</div>
        </div>
        <div>
          <div>Glossary</div>
        </div>
      </div>
    </div>
    <!-- <div>
      <p>
        The history of the Fifth Infantry Regiment spans two centuries of American fighting tradition.  During that time, it has received battle streamers for participation in fifty-one separate campaigns in nine major conflicts.  Each of these streamers represents the blood, sweat and tears of infantrymen from every era in the country’s history. Congress authorized the formation of the 5th Infantry on April 12, 1808.  Junior only to the 3rd Infantry (1784) and the 4th Infantry (1792), it is the third oldest active unit in the U.S. Army.
      </p>
      <div>
        <img style="float:left;width:50%;height:50%" src="/images/welcome/bobcat_logo_black-min.png">
      </div>
      <p>
        While garrisoned at the Monteith Barracks in Furth, Germany, the regimental baseball team adopted the name, “5th Infantry Bobcats.”  By the early 1960’s, the Bobcat moniker had been generalized to all members of the regiment.  In 2007, it was discovered that this unit nickname had never been formally recognized and recorded by the Department of the Army and could have been easily usurped by another unit.  The commander of 1st Battalion, 5th Infantry at Fort Wainwright, Alaska successfully registered the name.
      </p>
    </div> -->
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="preface">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>Preface</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              A history is not an action-adventure story where the author stimulates the senses of the reader with the skillful use of descriptive adjectives. It is supposed to be a recording of factual material. We have attempted to locate the material that is available concerning the activities of the men of the 1st Battalion(Mechanized) 5th Infantry, 25th Infantry Division, during the Viet Nam War, verify it, extract from it accurate data, such as date, time, event, and location, and then put that material into a somewhat readable format. There are gaps in the research material found and thus gaps in the finished work. We had requested input from people who were members of the battalion during the Viet Nam era for several years before writing this work. Some responded, some did not. If some who were there disagree with this rendition of events, then we strongly urge them to sit down with pencil and paper and write it the way they think it should be recorded. A few members of the battalion have written works about their individual tours. We strongly urge and welcome others to do so also.
            </p>
            <p>
              This work is not written to meet the approval of a university professor. It is written with the veteran and those interested in the veteran as the primary audience. Any conclusions to be drawn from the material are left to the reader. The reader is reminded that this is an accounting of the activities of an Infantry Battalion, and not of any one individual in particular. The decision was made early on, that the only names mentioned would be the names of those who were killed. The only awards mentioned are the three Medal of Honor awards. To do otherwise would be, in our opinion, a disservice to all the men who served with the battalion, be they leader or follower, rifleman or cook. The actions of a battalion in combat are a team effort. To achieve success in its assigned mission, a battalion needs the applied skills of all its members.
            </p>
            <p>
              War is not nice. War is killing and destroying. No one hates war more than an experienced warrior. Unfortunately, war is a fact of human existence. It has always been a part of the human experience and in all probability always will be.
            </p>
            <p>
              We have made no attempt to justify or discredit the participation of the United States in this particular cold war conflict. Nor has there been any conscious effort to pass judgement on any military strategy or tactics used. That subject material is for other works about the era.
            </p>
            <p>
              Answering the "who, what, where, when, why, and how" of a battalion size organization, spanning a five and a third year period, is an awesome undertaking. In the end it proved to be a very humbling experience.
            </p>
            <p>
              Larry Hadzima</br>
              Neillsville, Wisconsin</br>
              January 05, 2000
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1966_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar">
        <div data-button="jan" data-year="1966">
          <div data-button="jan" data-year="1966">January</div>
        </div>
        <div data-button="feb" data-year="1966">
          <div data-button="feb" data-year="1966">February</div>
        </div>
        <div data-button="mar" data-year="1966">
          <div data-button="mar" data-year="1966">March</div>
        </div>
        <div data-button="apr" data-year="1966">
          <div data-button="apr" data-year="1966">April</div>
        </div>
        <div data-button="may" data-year="1966">
          <div data-button="may" data-year="1966">May</div>
        </div>
        <div data-button="jun" data-year="1966">
          <div data-button="jun" data-year="1966">June</div>
        </div>
        <div data-button="jul" data-year="1966">
          <div data-button="jul" data-year="1966">July</div>
        </div>
        <div data-button="aug" data-year="1966">
          <div data-button="aug" data-year="1966">August</div>
        </div>
        <div data-button="sep" data-year="1966">
          <div data-button="sep" data-year="1966">September</div>
        </div>
        <div data-button="oct" data-year="1966">
          <div data-button="oct" data-year="1966">October</div>
        </div>
        <div data-button="nov" data-year="1966">
          <div data-button="nov" data-year="1966">November</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="1966">
        <div class="segmentContent">
          <div class="backBttn">
            <a href="{{ url('/history/timeline') }}">
              <div><< HISTORY</div>
            </a>
          </div>
          <div class="segmentTitle"><u>Vietnam, 1966</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              During the latter part of 1965, the 25th Infantry Division was alerted to deploy to Viet Nam. On December 24, 1965, the advance party for the 25th Division arrived in the Republic of South Viet Nam. It was decided that the 25th Division's 3rd Brigade would be deployed to Pleiku in the central part of South Viet Nam. The 2nd Brigade and the remainder of the division were to be deployed to Cu Chi District of Hau Nghia Province, located between the City of Saigon and the Cambodian Border.
            </p>
            <p>
              The main body of the 2nd Brigade Task Force, 25th Infantry Division, arrived at Vung Tau, South Viet Nam on January 18, 1966. The 2nd Brigade Command Post was initially located in the area of Saigon University. Company B, 1st Bn 503 Bde, 173rd Abn Div was under the operational control of the 2nd Brigade Task Force and supplied the perimeter security for the Task Force. The 2nd Bn 27th Infantry supplied 9 rifle squads to Co B, 1/503rd Inf to reinforce the perimeter security of the staging area. The 1st Bn 27th Infantry and the 1st Bn (M) 5th Infantry were on standby to furnish 3 rifle squads each to Co B, 1/503 rd Infantry, should they be needed. Controlled issue of ammunition for the 2nd Brigade Task Force was to be maintained. Only those personnel occupying perimeter defensive positions and ambush sites were supposed to be issued ammunition.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 1: Overview of South Vietnam</li>
              </ul>
            </div>
            <p>
              On January 22, 1966 an Operations Order was issued to alert units to prepare to move to the area of Cu Chi. Movement was to be in 4 segments. The first segment on January 25; the second on January 27; the third on January 29 and the fourth at a date to be determined.
            </p>
            <p>
              The 1st Infantry Division (Reinf) was given the assignment of receiving, staging and deploying the 2nd Brigade 25th Infantry Division to the base area near Cu Chi. The 1st Division was to coordinate security during movement to, initial occupation of, and development of the Cu Chi base camp area.
            </p>
            <p>
              The 3rd Brigade, 1st Infantry Division was assigned to clear and secure the initial base area near Cu Chi not later than 1200 hrs on January 25, 1966.  The 25th Infantry Division of the Army of the Republic of South Viet Nam (ARVN) was assigned to secure Highway 1 from the area of the Cau Bong Bridge to the road junction of Highway 8A near Cu Chi during the movement of the 2nd Brigade Task Force convoys.
            </p>
            <p>
              On January 25, 1966 at 0930 hours, Task Force Jack, consisting of one company from the 1st Bn(M) 5th Infantry , one battery from the 1st Bn 8th Artillery, Companies B and C of the 65th Engineer Battalion and the advance parties from 2nd Brigade units departed the staging area near Saigon University and proceeded to an assigned assembly area at Cu Chi. After the arrival of TF Jack at Cu Chi, elements of the 1st Infantry Division continued to receive small arms (SA), automatic weapons (AW) and mortar fire. The Viet Cong (VC) in the area were operating in small teams and attempted to maintain continual harassing activities against friendly forces.
            </p>
            <p>
              TF Jack units were moved into assembly areas in the vicinity of their assigned sectors. The 3rd Brigade of the 1st Infantry Division was responsible for the security and defense of the area and orders were issued that strict fire discipline was to be observed by all units. The firing of weapons by TF Jack units was not permitted during the period that the 3rd Brigade, 1st Infantry Division had responsibility for security of the area.
            </p>
            <p>
              On January 27, 1966, at 0830 hours, Task Force Queen, consisting of the 1st Bn 27th Infantry, the 2nd Bn 27th Infantry, the 1st Bn 8th Artillery(-), the 2nd Brigade Headquarters and Headquarters Company (-), and elements of the 2nd Support Bn, proceeded from the staging area near Saigon University to Cu Chi.
            </p>
            <p>
              On January 29, 1966, at 0830, hours Task Force King, consisting of the 1st Bn(M) 5th Infantry(-), The 2nd Brigade HHC Rear element, and elements of the 2nd Support Bn began movement to their assigned assembly area at Cu Chi from the staging area near Saigon University.
            </p>
            <p>
              Meanwhile at 0700 hours, the 1st Bn 27th Infantry began relieving the 1st Bn 28th Infantry, 1st Infantry Division and assumed their perimeter defensive positions. They also provided extraction zone security for the 1st Bn 28th Infantry.
            </p>
            <p>
              At 1200 hours, the 2nd Bn 27th Infantry began relieving Company B, 2nd Bn 2nd Infantry, 1st Infantry Division and assumed their perimeter defensive sector. A secure extraction zone was also provided for Company B, 2nd Bn 2nd Infantry.
            </p>
            <p>
              There were 5 tunnel systems that had been located in the area by the 3rd Brigade, 1st Infantry Division soldiers. Some of the information passed on from the 1st Division soldiers to soldiers of the 2nd Brigade 25th Infantry Division was to beware of hand grenade booby traps marked with a red dot somewhere on the handle as this indicated the grenade had been short fused by the VC and should be destroyed in place. Also rice bags in the area have been found to be booby trapped, and snipers have been firing at them from trees and spider holes.
            </p>
            <p>
              On January 30, 1966, an operation began with the purpose to expand and clear the base camp perimeter. At 0815 hours, two companies from the 1st Bn(M) 5th Infantry passed through the lines of the 2nd Bn 27th Infantry and attacked outward. The 2nd Bn 27th Infantry with Company B, 65th Engineers followed, sweeping and clearing the area and destroying tunnel complexes that were located. During the five day operation 20 tunnel complexes, some as long as a half mile were located and destroyed. Booby traps of all sorts were used by the Viet Cong to inflict casualties.
            </p>
            <p>
              On January 31, 1966, a booby trap was detonated killing two men from Company B, 1st Bn(M), 5th Infantry. The event emotionally jolted some the men of the company and impressed upon them that this was the real thing. Not training, not practice. Soldiers get horribly wounded and disfigured in wartime. Soldiers die in wartime! These were people you knew, if only by sight. One moment they are laughing, talking, breathing, living and the next moment they are very horribly dead.  How thin and delicate the thread between life and death is, was a lesson soon to be indelibly implanted in the consciousness of the soldiers of the battalion. Some wondered who would be next.
            </p>
            <p>
              During January 1966, two Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Armando Tesillo</li>
              <li>Dan R Shearin</li>
            </ul>
            <p>
              They were the second and third Bobcats to die in Vietnam. The first was Jerry W. Osborn who was killed on April 1, 1965 while TDY from the 1st Bn(M) 5th Infantry as a helicopter door gunner.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 2: 1966 Operations I</li>
                <li>Map 3: 1966 Operations II</li>
              </ul>
            </div>
            <div class="oneMonth" data-section="feb">
              FEBRUARY
            </div>
            <p>
              The 1st Bn(M) 5th Infantry soldiers continued to improve upon the defensive positions in their area of the base camp perimeter. This included clearing the thick vegetation growth out to the banks of the Ben Muong, a stream that ran across the front of the portion of the perimeter that the 1st Bn(M) 5th Infantry was assigned to occupy and defend. The men of the line companies lived in the bunkers and fighting positions, washing with water taken from local wells. They got as used to the mosquitoes, bugs and other various local critters that they had so far encountered as well as one can get used to such things.
            </p>
            <p>
              On February 3, 1966 the last element of the 2nd Brigade Task Force closed into the Cu Chi base camp area from the staging area near Saigon University. There were no major convoy incidents during the movement of the entire task force.
            </p>
            <p>
              Patrols, ambushes, 3 to 4 man Claymore teams, out posts (OPs), listening posts (LPs), sniper-killer teams, all became a part of normal life for the soldiers of the battalion. Mistakes were made and lessons were often harshly learned. Extremely rare, if nonexistent, was the combat soldier who did not, at one time or another, make a mistake, of one sort or another. Unfortunately, when a mistake was made in a combat situation, someone usually ended up getting wounded or killed. Not always, but often enough.
            </p>
            <p>
              On February 11, 1966 a man from Company B was shot and killed while examining the kill zone after a nighttime ambush was tripped. No one used a flashlight after that.
            </p>
            <p>
              On February 14, 1966 was a busy day for the medics and the Dust-offs. At 0530 hours, Company A prepared to depart the base camp area and to move across the Ben Muong on a dismounted Reconnaissance in Force (RIF) of the area beyond the stream. An element of Company B secured the stream-crossing site to be used on the operation. They were in place at 0530 hours. Company A crossed their line of departure at 0630 hours.  A platoon from Company C was positioned beyond the Ben Muong to act as a security force for Company A’s route of withdrawal, should it become necessary and also as a left flank security. At 0745 hours, the Company C security platoon received several rounds of small arms fire but sustained no injuries. At 0935 hours, the Company C platoon again received small arms fire. In the exchange four men were wounded. One was hit in the head and another in the hip. By 1019 hours all four had been Dusted-off.
            </p>
            <p>
              Company A was making slow but steady progress on their sweep, destroying houses and tunnels and finding rice caches. By 1100 hrs they had sustained 10 wounded. Then two Chicom Claymores were command detonated by the Viet Cong, killing 8 and wounding 3 in the vicinity of XT 643176.  Four of those killed were from Company A. Two were forward observers from Battery C, 1st Bn 8th Artillery, and two were non-combatant photographers. At 1430 hours, Company A began their return back to the base camp. By 1630 hours the Company C security element had recrossed the stream on the fringe of the base camp perimeter.
            </p>
            <p>
              Also on February 14th, a platoon from Company C was attached to the 2nd Bn 27th Infantry for a clearing operation. At 0837 hours, a man from Company C was injured when he fell on a punji stake. At 1030 hours, the Company C “angel” track (Medical Armored Personnel Carrier) hit an Anti-Tank (AT) mine at XT 632158. The vehicle was disabled and a number of VC attacked from the south in an attempt to capture the vehicle. They were driven off by the track commander and driver firing the .50 caliber machine gun and an M-79 grenade launcher. Several men were later wounded by sniper fire while extracting the downed vehicle.
            </p>
            <p>
              There had been some mention concerning what was considered a slow reaction time of the Dust-offs (medical evacuation helicopters) during the day, but in situations like that minutes can appear to be hours. The medics and doctors were not miracle workers. They did the best they could with what they had. In many instances they performed their duties above and beyond the normal requirements of their responsibilities.
            </p>
            <p>
              Among the Bobcat casualties for the day were 4 killed from Company A and 1 killed from Company C. Wounded were 5 from HQ Company, 15 from Company A, and 3 from Company C. The casualties of members of supporting units were reported and carried on the parent unit rosters.
            </p>
            <p>
              On February 18, 1966 the First Platoon of Company C began a raiding mission at 0100 hours. All 18 members of the raiding party were volunteers. They crossed their line of departure (LD) at about 0115 hours and the Ben Muong at 0130 hours. After crossing the stream they moved through dry rice paddies for about 900 meters, stopping some 25 meters short of the wood line, where they set up security.  Sp/4 Fernandez and the squad leader went into the wood line on a brief reconnaissance of the area. At about 0235 hours Sp/4 Fernandez and the squad leader returned and the party moved forward into the rubber plantation for about 300 meters. The raiding party set up a perimeter and SP/4 Fernandez and the squad leader went out on another reconnaissance of the area. When they returned to the raiding party they stated that there was nothing to raid. The party then moved back about 100 meters and set up in a line perimeter near a graveyard (XT 178654), where they were going to wait until moving back to the base camp at 0900 hours.
            </p>
            <p>
              At about 0700 hours, contact was made with some VC on the left front. The M-60 machine gunner on the left flank opened fire, killing 3 of the Viet Cong. Immediately the entire patrol came under intense enemy small arms, automatic weapons and grenade fire. At this time the M-60 gunner was shot and killed. The left flank was pushed back about 20 meters. Sp/4 Fernandez and the medic moved forward in an attempt to rescue the M-60 gunner. Three more men came out to help them. The gunner was picked up and the group started to move back when the man carrying the M-60 gunner was shot in the left leg. Everyone hit the ground and returned fire. Grenades and small arms and automatic weapons fire from the VC was intense. Sp/4 Fernandez observed a grenade land amongst his small group. He accidentally kicked the grenade when he attempted to move away and it rolled nearer to the wounded soldier. Sp/4 Fernandez yelled a warning and dove onto the grenade and smothered the blast with his body, saving the lives of those around him.
            </p>
            <p>
              Artillery and mortar fire was called in on the enemy positions around the patrol. Tactical air strikes with napalm were also summoned. The remainder of the 1st Platoon of Company C made their way out to the patrol.  At that time the raiding party moved back to the rice paddy area at the edge of the woods. Sp/4 Fernandez was laid on the ground and the wounded man he saved was laid next to him. The wounded man held Sp/4 Fernandez’s hand and talked with him. Sp/4 Fernandez told him he was hurting. The Dust-off arrived and the wounded along with the dead M-60 gunner were evacuated. The man with the leg wound was placed next to Sp/4 Fernandez at the hospital. The next time he looked, Sp/4 Fernandez was not there anymore. The wounded man asked the doctor about SP/4 Fernandez but the doctor would not tell him anything.
            </p>
            <p>
              The 1st Platoon of Company C returned to the base camp perimeter by 0935 hours.
            </p>
            <p>
              SP/4 Daniel Fernandez was later posthumously awarded the Congressional Medal of Honor for his actions.
            </p>
            <p>
              On February 22, 1966, Troop A, 3rd Squadron, 4th Cavalry arrived at the Cu Chi Base Camp Area.
            </p>
            <p>
              While the priority of the 2nd Brigade was the continued expansion and improvement of the Cu Chi Base Camp area, a three day mounted search and clear operation was conducted by the 1st Bn(M) 5th Infantry. Their mission was to search and clear a wooded area located some 1500 meters southeast of the Cu Chi base camp, running from coordinates XT 674135 to 698118. They were then to provide security for six ARVN bulldozers that were to level parts of the area. The 1st Bn, 49th Infantry Regiment (ARVN) was to attack and operate in the southeastern portion of the objective area (XT 698113).
            </p>
            <p>
              The 1/5th Mech crossed the line of departure (LD) at 0830 hours, attacking with Companies A and B abreast. Recon Platoon screened the left (west) flank. A platoon from Company C was to search and clear the wooded area centered at XT 677118. Company C(-) was held in reserve. All units experienced continual sniper fire during the initial advance. At one point the Recon Platoon received intense small arms(SA) and heavy machine gun (MG) fire which was returned with organic weapons, mortar and artillery fire. Extensive tunnel systems were located in the vicinity of XT 688120. The battalion formed a night defensive perimeter at XT 688119 and spent the night at that location. Nine ambushes were deployed, two of which made contact with the enemy.
            </p>
            <p>
              On February 23, 1966, six tanks from the 3/4 Cavalry joined the battalion. The day consisted of search and clearing operations with only light sniper fire being received. A lone sniper firing incident was the only enemy contact made on February 24th.  After conducting a final sweep, the battalion closed back to Cu Chi base camp at the end of the day.
            </p>
            <p>
              The area that had been searched during the operation was found to be heavily fortified with trenches, small bunkers, tunnels, mines and booby traps. An estimated platoon of VC were in the operation area. The battalion suffered casualties of 5 Bobcats killed and 18 wounded. The battalion also reported one of its first incidents of a friendly fire casualty when a man received a gunshot wound to his left buttocks.
            </p>
            <p>
              It was noted in the battalion operations summary that "Troops are unnecessarily exposing themselves in the APCs by sticking their heads and bodies too far out of the tracks."
            </p>
            <p>
              During February 1966, Fourteen Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Safford S. Pye</li>
              <li>Robert O. Cantrell</li>
              <li>William A Hoos Jr.</li>
              <li>Gene C. Milligan</li>
              <li>Joseph T. Benton</li>
              <li>Daniel Fernandez</li>
              <li>Richard H. Cassube</li>
              <li>James L. Fain</li>
              <li>Billy B. Day</li>
              <li>Gary W. Garis</li>
              <li>William B. Parnell</li>
              <li>Ira C. Boggs Jr.</li>
              <li>Sidney John Elyea</li>
              <li>Douglas</li>
              <li>Dwight Alley</li>
              <li>Donald Edward Daniels</li>
              <li>Walter Norris Ammons</li>
            </ul>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 4: Cu Chi Base Camp and the "Filhol."</li>
              </ul>
            </div>
            <p>
              "He knew no one and no one knew him. He had no friends here, no confidants. He was not in on the gags, he did not share in the trifles and the traditions. He was new in the outfit. A replacement."
            </p>
            <p>
              "They talked afterwards of how the blood was spurting from the new guy in all directions, how he never uttered a cry of pain, and how, when he finally gave in, he did it quietly. They wondered then who he was and where he was from. What he was like and why he was here. But no one had the answers. They didn't know his first name. They were not sure where he was from. Most only knew his last name cause it was stenciled on his shirt." [From a news article by Tom Thiede]
            </p>
            <p>
              Years later the men would rack their brains trying to recall the names. They could see the faces, they remembered well the details of the death. Some could recall the time of day, even the date, and what the weather was like. But no one could remember the names!
            </p>
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              March 1966 was also a month of working on, expanding upon and improving the defensive perimeter of the Cu Chi base camp. An 8 foot long Monitor Lizard was finally shot and killed in the Ben Muong. The creature had been spotted on occasion and soldiers were extremely watchful when wading across the stream or when working near it.
            </p>
            <p>
              On March 04, 1966, the 1/5th(M) and the 2/27th Infantry conducted a one day search and destroy operation in the vicinity of Xom Moi , Giong Viec and Ba Xa, all located some 1500 meters NE of Cu Chi and along a dirt road marked on the map as Highway 237.  There were no friendly casualties suffered by the 1/5th(M) during the operation and all members were commended for the maximum destruction of enemy equipment and structures. Numerous booby traps and dud rounds of various types were also found and destroyed.
            </p>
            <p>
              The soldiers of the battalion were learning more and more about the booby traps used by the VC.  There were the hand grenades with trip wire; the unexploded cluster bomb units rigged with tip wire; the Chicom Claymore designed to explode in a 360 degree circle, the artillery and bomb duds, rigged to be tripped or command detonated. They were in the ground, on the ground, hung in trees or bamboo clusters, ankle high, knee high, waist high, head high or higher. You would find them on trails or footpaths. They could be encountered in tunnels or attached to spider hole covers. One was even found attached to a pineapple growing in a garden. And there were the sharpened bamboo sticks, referred to as punji stakes. All were designed to damage the human body. They were not everywhere, all the time, but they were around.
            </p>
            <p>
              There was a road that ran from the village of Cu Chi, through the base camp, across the Ben Muong, and then through the Filhol – Balancie Rubber Plantations to the village of Phu Hoa Dong where it linked up with Highway 15. The portion of the dirt road through the plantations had not seen motor vehicle traffic for some time and was overgrown with vegetation. The bridge at the Ben Muong had been destroyed and in March of 1966 the engineers of the 25th Infantry Division completed construction of a new one. This bridge would allow direct access to the area north of the base camp by tracked vehicles. The bridge was in the 1/5th(M)’s sector of the perimeter and the battalion was given the job of providing security for it. This was accomplished by establishing a platoon size combat out post located just to the north of the bridge on the southern edge of the rubber plantation. The area directly north of the outpost was made up of three rubber plantations. The Filhol, the Balancie, and the Liocara. But the area was soon referred to simply as “the Filhol” by the soldiers of the battalion. Ann Margret was the name initially given to the combat outpost by some of the officers and it stuck with the troops.
            </p>
            <p>
              From March 14 thru 19, 1966 the 1/5th(M) participated in a search and destroy operation, the first phase of which was located in the general area southwest of Bao Trai (XT 5204) near the Oriental River. The units of the battalion crossed the LD [line of departure] at 1000 hours on March 14, 1966 and encountered light enemy contact. Some APCs got stuck in the soft ground as they approached to within 1000 to 1500 meters of the Oriental River. The battalion then continued the operation dismounted. The battalion spent the night of March 14 in the vicinity of XT 483023. One man was wounded when he attempted to throw a captured booby-trapped hand grenade into a canal. He pulled the pin and threw the grenade but it had been short-fused and immediately exploded. Light enemy contact was made on the morning of March 15th as the companies moved to and searched various objective areas. At 1507 hours Company C received SA fire and at the same time a booby trap was detonated. The encounter resulted in 4 Bobcats wounded and 1 killed. Sporadic contact continued through the day and by 2045 hours all units closed in the vicinity of XT 5202.
            </p>
            <p>
              At 0710 hours, on March 17th the battalion, now mounted, moved north to an area of operations west of the junction of Highways10 and 6A, towards the Oriental River. Anti-tank mines and booby traps were encountered throughout the day.
            </p>
            <p>
              On March 18, 1966, the battalion continued to search the area. Tunnel networks and booby traps and mines were again encountered. Several Bobcats were wounded and 1 was killed.
            </p>
            <p>
              On March 19, 1966, there was light enemy contact. By 1930 hours all units had closed back to Cu Chi Base Camp.
            </p>
            <p>
              On March 28, 1966, the 25th Infantry Division command group arrived at Cu Chi Base Camp.
            </p>
            <p>
              From March 29, 1966 to April 05, 1966 the 1/5th(M) participated in a four battalion search and destroy operation which began in the Filhol and continued into the Ho Bo Woods (XT 6229).
            </p>
            <p>
              The men of the battalion were still adjusting. Changes were made to the APCs. Sandbags were put around the cargo hatch opening to offer a little better protection to soldiers fighting from the tracks. The M-60 machine gun mounting post was removed from the track and the gun was employed from the side of the cargo hatch using the sandbags as a gun rest.
            </p>
            <p>
              In the initial phase of the operation on March 29, the 1/5th (M) moved through the rubber plantation and established blocking positions to prevent movement in or out of the village of Phu Hoa Dong. The 7th ARVN Regiment then conducted search operations throughout the entire village area. There was light enemy contact throughout the day. Night ambushes were of course employed, and they met with some success.
            </p>
            <p>
              On the next day the units conducted a search of the local area. Numerous supply caches and tunnel systems were located.
            </p>
            <p>
              On March 31, 1966 the battalion enlarged the area of its search and destroy operations. Enemy contact was again sporadic and more tunnel systems and enemy supplies were located. Blocking positions around Phu Hoa Dong continued into the 1st of April and that afternoon the battalion made preparations to move into the Ho Bo Woods area.
            </p>
            <p>
              During March 1966 , two Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>George E. Snodgrass</li>
              <li>Daniel G. Stands Jr.</li>
            </ul>
            <p>
              A major malfunction of the M-16 Rifle started to appear amongst soldiers in Viet Nam. The rifle would fire, but the extractor would be unable to remove the spent cartridge from the chamber of the rifle. A rod would then have to be inserted down the barrel and the spent cartridge would have to be “punched” out of the chamber. Initially, it was related that the soldiers were not clearning their weapons properly and this was the cause of the jamming.
            </p>
            <p>
              Then it was stated that the weapon needed a new buffer system to correct the problem. Next the barrel chamber was crome plated to reduce fouling friction. Then the barrel twists were changed and a bolt closure device was installed. And the weapon kept jamming. And the department of the Army fell back to saying that the soldier was not keeping the weapon properly cleaned.
            </p>
            <p>
              Bullshit. We cleaned the damn things. We over-cleaned them, if there is such a thing. When your life and the lives of those around you depend upon a weapon, you take care of that weapon. But nothing seemed to solve the problem. They kept jamming all through 1966 and into 1967.
            </p>
            <p>
              Finally, a Congressional Sub-Committee held hearings on the problem in 1967 and concluded that the rifle was initially provided with a cartridge containing IMR Propellant and worked fine. Then the Army Munitions Command contracted with Olin Mathieson to produce the powder for the cartridge and they in turn supplied Ball Propellant, which was cheaper to manufacture. Ball Propellant burned faster and increased the cyclic rate of fire in the M-16 Rifle. According to the weapons inventor, Eugene Stoner, this was a worst case senerio for the weapon and was THE cause of the “failure to extract” jamming malfunction.
            </p>
            <p>
              Furture ammunition was made with IMR Powder and the jamming problem disappeared as the Ball Propellant ammunition was replaced.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>
                  <a href="{{ url('/history/topic/the-rifle-and-the-myth') }}" target="_blank">
                    The Rifle and the Myth: Congressional Sub-Committee held hearings on the problem in 1967
                  </a>
                </li>
                <li>
                  Map 5: Northern Ho Bo Woods and Southern Ho Bo
                </li>
                <li>
                  Map 6: Northern Filhol and Southern Ho Bo.
                </li>
              </ul>
            </div>
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              At 0730 hours on April 2, 1966, the battalion units moved along assigned routes to predetermined objective areas. Troop A, ¾ Cavalry was attached to the 1/5th(M) and Company C 1/5th(M) was OPCON to the 1/69th Armor. Company C had 2 APCs bog down and during the extrication process one Bobcat was shot and killed. Upon moving to a secondary objective, Company A had an APC destroyed by a command detonated 175mm Arty round at 1730 hours. A second was damaged by another mine. The 1st APC was flipped over onto its top and resulted in 4 Bobcats killed and 4 wounded. Two Vietnamese National Policemen were also wounded. Three Bobcats were wounded on the 2nd APC.  One of the men described it as one hectic evening and night. “The command detonated mine blew the track up and over onto its back, killing four and seriously wounding others. When I got there the track commander, who was seriously wounded, was determined to ‘call in my own damn dust off.’ Due to enemy contact we had to strip the track, evac the wounded and pull back for the night. We were in contact all night long ¼ then recovered the A5 in the am ... finding our cook, KIA, beneath the track.”
            </p>
            <p>
              Numerous tunnel systems and assorted fortifications were discovered in the area along with some caches of various supplies and equipment. “There were so many houses and tunnels that they couldn’t be effectively covered in a week’s time;” and “The area is honeycombed” were some of the reports being transmitted over the radio.
            </p>
            <p>
              On April 3, 1966, the battalion task force continued a detailed search of the area. Tunnel systems, supply caches and numerous booby traps were encountered. Enemy contact was light. Co B had an APC detonate a mine, the explosion of which ignited the gas tank, resulting in one Bobcat being killed and 4 wounded in the vicinity of XT 655270.  Some of the men started referring to the area as the “Christmas Tree” because it was ‘decorated’ with so many booby traps and mines.
            </p>
            <p>
              On April 4, 1966, Company C returned to battalion control and Troop A, ¾ Cav went OPCON to the 1/69th Armor.  Company C also reported that on April 3rd while OPCON to the 1/69th, they had 3 Bobcats killed and 13 wounded.  The battalion continued its search and destroy mission in the area. A very large cache of polished rice was located along with several smaller ones in well concealed and booby-trapped areas. There were several skirmishes during the day resulting in one Bobcat killed. Among the wounded were 7 men who were badly burned when there was an internal explosion and fire on one of the 4.2 inch mortar tracks.
            </p>
            <p>
              At 0900 hours on April 5, 1966, Company B and the Recon Platoon were committed to assist the 2/27th Infantry, whose A Company had been attacked in their night defensive perimeter in the Ho Bo Woods by the 1st Battalion, 165A VC Regiment. Later in the day they were assigned to assist the return movement of the Brigade Command Group from Trung Lap. All units closed into Cu Chi Base Camp by 1630 hours with no enemy contact, ending the operation.
            </p>
            <p>
              The battalion reported VC killed by body count during the operation and a large amount of enemy supplies and equipment were located. Estimates were also reported on the number of enemy soldiers probably or possibly killed. It was becoming apparent to the men of the battalion that this was to be a war of numbers. How many, how much. It was not sufficient to report that some small arms ammunition was located. It was required that the number of rounds, the caliber, and make of the rounds be reported. It soon got to a point where units were reporting the “capture” of a single, rubber sandal, or ¼ pound of documents, or a pair of gloves, amongst the items found on the various operations. Enemy body count was also being emphasized, big time! Initially some incentives were experimented with, as if the war were some sort of contest which was winnable by whichever side scored the highest number. In the beginning of April 1966, one company had a policy in effect where if a soldier killed a Viet Cong and his body and weapon were recovered, he was entitled to a three day pass to Saigon. Another had a liberal policy as to letting the men keep the weapons of any killed VC.
            </p>
            <p>
              Their were also the friendly losses, as the casualties of war were by no means a one sided event.
            </p>
            <p>
              On April 6, 1966, one of the men burned in the 4.2 inch mortar track fire on April 4th died of his injuries.
            </p>
            <p>
              On April 7, 1966, the 1/5th(M)(-), supported by Troop B, ¾ Cavalry and Company C of the 1/69th Armor and Company A, 1/27th Infantry, participated in phase one of a search and destroy mission of the Phuoc Vinh Ninh area, located southeast of Cu Chi Base Camp at XT 6814. There was sporadic enemy contact during the sweep of the area. Numerous booby traps and mines were encountered. Eight men were wounded by mines and booby traps.
            </p>
            <p>
              On April 8, 1966, a platoon from Company B conducted a reconnaissance into the Filhol. "What I seem to recall," the platoon leader later recollected, "was that it was less than a platoon size recon. After finishing the recon (we had seen a lot of indication of traffic on one trail) I called in and asked for permission to set an ambush for a while and see what happened. I believe I remember springing the ambush quite a few times, maybe four or five. Each encounter was with a small group, 2-4 individuals. Most would not surrender when challenged and although armed, would run and be shot. Each time we would take some branches and clean up the blood on the dusty trail and reset the ambush."
            </p>
            <p>
              "I do recall there being captives and I do remember one was a young woman who was detained behind the platoon position where we had the tracks. I definitely remember going back there when I heard a commotion and found several guys preparing to rape her. I put a stop to that."
            </p>
            <p>
              Soldiers are a reflection of the society that produces them. Thus in the military, as in society in general, there are thieves, rapists, murderers, sadists, alcoholics and drug abusers. And there are men of honor and principle and deep religious beliefs. As in society, the latter far outnumber the former. And there are rules and laws that must be followed, even during war. The officers and NCOs usually did a good job in making sure those rules and laws were followed. And there was a system in place to punish those who violated or disobeyed.
            </p>
            <p>
              On April 9, 1966, Company B dropped off a dismounted platoon sized daylight ambush in the Filhol. The remainder of the company, then conducted a reconnaissance of the area to the north west and stumbled onto an entrenched company size VC force. During the 45 minute fire fight which followed, one of the APC’s was hit twice with 57mm recoilless rifle rounds. Company A and C were dispatched into the area to assist in a further search of the enemy who had fled the trench line after having enough.
            </p>
            <p>
              Later in the afternoon an APC from Company B, driving through the thick vegetation fell into a deep gully and turned over onto its top and caught fire. Somehow there were no casualties in the incident and no fatalities during the day’s activities. All units closed back into Cu Chi Base Camp by 1800 hours.
            </p>
            <p>
              On April 13, 1966, the 25th Division PX commenced operations at the Cu Chi base camp. The major facility was established with a warehouse and sub-exchanges were to be established in subordinate units.
            </p>
            <p>
              On April 13th, the 1st Bn(M) 5th Inf began a two day search and destroy operation in the Filhol. C Company (-) of the 1/69th Armor was attached to the battalion along with 1 platoon of the 65th Engineers. The battalion task force was divided into three teams and a command group. At 0630 hours, all elements departed Cu Chi Base Camp through OP Ann Margret and the teams secured their respective objectives without opposition. The battalion command group established a task force forward base in the vicinity of XT 647207. As the teams conducted searches of their areas throughout the day, 7 APCs, 3 tanks and 1 VTR struck mines. 1 tank was struck by an RPG-2 round that penetrated through the tank and caused 1 minor injury. This was the first time that a tank of the 25th Division had been hit with an RPG round. Company B encountered a small group of VC in spider holes and tunnels who, by the use of snipers and rifle grenades, killed 5 and wounded 7 members of the company. The other teams suffered light casualties in scattered encounters. Companies A and C and the Recon Platoon closed into the battalion night base camp. B Company established its own perimeter as it was providing security for three tanks which had become mired and were not extracted until 2300 hours.
            </p>
            <p>
              On April 14, 1966 the companies continued the search of the area between the Filhol and the Ho Bo Woods. Light contact was made and mines and booby traps were again encountered.  At 0950 hours, Company B received small arms fire resulting in 1 man killed. At 1535 hours, Company A discovered a rice cache. In the process of checking it, a booby trap was detonated and 1 Bobcat was killed and two were wounded. By 1900 hours all elements had closed Cu Chi Base Camp.
            </p>
            <p>
              During the operation VC had been killed and 68 short tunnels, 41 bunkers and various amounts of weapons, munitions, equipment and supplies were seized or destroyed. 8 APCs, 2 tanks and 1 TVR had been damaged by AT mines and 2 tanks were damaged by AT weapons. 7 Bobcats died and 27 were wounded.
            </p>
            <p>
              From April 16th thru the 21st the 1/5th(M), along with the 1/27th Infantry and the 2/27th Infantry, participated in a 2nd Brigade search and destroy operation northeast of Trang Bang. The operation consisted of daytime sweeps and night-time saturation ambushes.
            </p>
            <p>
              On April 23, 1966, the 3rd Platoon of Company C departed Cu Chi base camp at 0720 hours for a mounted patrol into the Filhol. At 1045 hours they reported that 1 man had been killed by sniper fire near XT 696196. At 1600 hours the platoon returned to Cu Chi Base Camp with the one Bobcat KIA.
            </p>
            <p>
              During the day a sergeant from Company B was conducting a class on the use of the Claymore anti-personnel mine in the battalion motor pool. The group was inside an APC with the rear ramp in the down position. One of the B Company mechanics said he had just walked past the track when there was an explosion. Somehow the claymore had detonated. Two men were killed outright and several were wounded. The mechanic related that there were putting people on jeeps and ¾ ton trucks and rushing them to the hospital area. “It was a bloody mess,” he related.
            </p>
            <p>
              On April 27, 1966 one of the Bobcats wounded in the Claymore class incident died of his wounds.
            </p>
            <p>
              On April 30, 1966, the main body of the 25th Infantry Division’s 1st  Brigade arrived at Cu Chi Base Camp.
            </p>
            <p>
              During April 1966, 24 Bobcats died in Viet Nam. They were:
              <ul>
                <li>Jesse J. Coffey</li>
                <li>Curtis E. Dorris</li>
                <li>George S. Franklin</li>
                <li>Keith L. Shipp</li>
                <li>Lester J. Thornell</li>
                <li>Jimmy B. Taylor</li>
                <li>Larry J. Nichols</li>
                <li>Hamp J. Sykes Jr.</li>
                <li>Johnny B. Boston</li>
                <li>Roger D. Jarrell</li>
                <li>Arthur C. Morris Jr.</li>
                <li>Steven M. Smith</li>
                <li>Donald R. Brown</li>
                <li>Green Conley</li>
                <li>Frank A. D’Amico</li>
                <li>Clinton B. Fackrell</li>
                <li>Phillips LaMarr</li>
                <li>James R. Taylor</li>
                <li>Lewis M. Thomas</li>
                <li>Howard E. Rothring Jr.</li>
                <li>Francisco Correa-Morales</li>
                <li>John P. Isaacs</li>
                <li>Walter J. Type</li>
                <li>Donald Ray Johnson</li>
                <li>John Parnella</li>
              </ul>
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 7: Trang Bang and Go Dau Ha.</li>
                <li>Map 8: Trang Bang north to Suoi Cao.</li>
              </ul>
            </div>
            <p>
              Casualties for the 25th Infantry Division(-) during the period of January 1, 1966 thru April 30, 1966 were: 91 KIA(killed in action), 914 WIA(wounded in action), 0 MIA(missing in action), 17 DOW(died of wounds), and 12 NBD(non-battle deaths).
            </p>
            <p>
              There was a small outbreak of Bacillary Dysentery within the 1/5th Inf(M), which was classified as from a filth borne source. Whether from water, nonpotable ice or food handler was never confirmed.
            </p>
            <p>
              It was also noted that the burn out of human wastes collected in the half drums using diesel fuel had not proven totally satisfactory as some residue always remained and the disposal of the residue had created some problems. There was nothing like the smell of burning shit in the morning to arouse the senses.
            </p>
            <p>
              Although there were some base camp growing pains, the engineer battalion managed to establish the camp to a class II configuration in less than 45 days.
            </p>
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              From May 1, 1966 thru May 11th, the 1/5th(M) and Company C, 1/69th Armor participated in providing security for engineer operations on Hwy 1 and Hwy 22 in the vicinity of Go Dau Ha.
            </p>
            <p>
              On May 5, 1966, another of the Bobcats wounded in the Claymore class incident in April died of wounds received.
            </p>
            <p>
              On May 7, 1966, Company B, with one platoon of tanks attached, conducted a one day reconnaissance operation in the southern Boi Loi Woods code named “Sitting Bull.”  At 1205 hours, the force engaged some VC in a trench line. At the end of the engagement 1 Bobcat was killed and 22 were wounded. 12 of the WIAs were evacuated and the others were treated and returned to duty.
            </p>
            <p>
              Also on May 7, 1966 another Bobcat who was wounded in the Claymore class incident died from the wounds he received.
            </p>
            <p>
              On May 10, 1966 a Bobcat from Company A, which was attached to the 1st Brigade on an operation in the Filhol, was killed when a booby trapped tunnel door was detonated. Members of the company spent most of the night digging his body out of the collapsed tunnel system. On May 12, 1966 , all 1/5th(M) units were back at Cu Chi Base Camp.
            </p>
            <p>
              From May 15, 1966 thru May 27, the 1/5th(M) participated in a multi-battalion search and destroy operation in the Filhol, the Ho Bo Woods(XT 6228) and the Boi Loi Woods(XT 5630).
            </p>
            <p>
              On May 18, 1966, Company B was involved in a firefight. One of the soldiers was firing from an APC cargo hatch. Another soldier got up to relieve him and as the first went to sit down his rifle accidentally discharged, the round struck and killed the second soldier, who was standing in the cargo hatch. The man who fired the round, when he spoke of the incident, was very distressed and despondent about having killed one of his own men. He would have given anything to change what happened, but he knew that could never be.
            </p>
            <p>
              On May 26, 1966, at 0810 hours, as Company C was in the process of extracting its night ambushes, one man was killed when a Claymore mine he was in the process of disarming, exploded.
            </p>
            <p>
              Also on May 26, a sixth man who was wounded in the Claymore class incident in April, died of his wounds.
            </p>
            <p>
              During the operation 2 Bobcats died and 43 were wounded, of whom 25 returned to duty. Of the 11 APCs that were damaged by AT mines, 5 were repaired in the field, one was unrecoverable and blown in place, and 5 were evacuated to base camp for major repairs.
            </p>
            <p>
              On May 30, 1966 a Bobcat from Company B died from the wounds he received on May 7, 1966
            </p>
            <p>
              During May 1966, Eight Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>James E. Johnson</li>
              <li>Hermando S. Moya</li>
              <li>Ismael Lebron-Lopez</li>
              <li>Robert Smith Jr.</li>
              <li>Bobby J. Barefield</li>
              <li>Frederick C. Bullington</li>
              <li>Jesus Lopez Ramos Jr.</li>
              <li>Pekka Trunkhahn</li>
            </ul>
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              “During June, all of Southeast Asia is under the influence of the southwest monsoon. The weather will usually follow a daily pattern, highlighted by thundershowers in the afternoon and early evening. Rain can be expected about 22 days of the month, with a total average of 12.5 inches. Heavy showers will not normally last more than 45 minutes.
            </p>
            <p>
              Cloudiness will prevail most of the day, with only about one quarter of the day in sunshine. But temperatures will not be affected much: the mean daily maximum should be 92 degrees with an average minimum of 75 degrees. Although the temperatures are lower for June than May, the high relative humidity will make it seem just as warm. The average relative humidity for the whole month will be between 80 and 90 per cent.”
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 9: Bao Trai area</li>
              </ul>
            </div>
            <p>
              On June 1, 1966, a Bobcat, who was wounded on April 13th, died of his wounds. He was a medic who responded to the call for help from others and took a sniper's bullet in the head.
            </p>
            <p>
              From June 3 thru June 8, the 1/5th(M) participated in a 4 battalion search and destroy operation in the Bao Trai area. As soon as the 1/5th(M) entered their AO the Recon Platoon observed some VC attempting to flee. The Recon Platoon opened fire and killed two. They then ran over two more with their APCs as they gave chase. A search was made of the area (XT 466155) and the VC were found to be hiding under the water. Hand grenades were used to help flush them out. 12 VC were killed and 19 were captured by the members of the Recon Platoon in this initial encounter of the operation.
            </p>
            <p>
              On June 7, 1966, Company C discovered a very large ammunition and weapons cache vic XT 518110. The cache was located on a camouflaged lean-to built just above the water level.
            </p>
            <p>
              By 1645 hours on June 8, 1966, the battalion had closed Cu Chi Base Camp. During the operation there were no Bobcats killed. 24 were wounded, of whom 14 were treated and returned to duty. 6 APCs were damaged by AT mines, 3 of which had to be sent back to base camp for repair.
            </p>
            <p>
              On June 18, 1966, the 1/5th(M) conducted a one day search and destroy operation in the Filhol. At 1030 hours one Recon track hit an AT mine and had to be towed. Company A started receiving sniper fire and then mortar fire at 1145 hours on the southern edge of the Plantation. 2 APCs were hit by RPG-2 rounds. Company A located a bunker and tunnel system vic XT 682166 at 1215 hours. They spent the rest of the afternoon neutralizing the area and searching and destroying the bunker and tunnel system. Company C conducted a search and destroy operation in the center and west end of the Filhol. They deposited a stay behind ambush at XT 675200. Company A left an ambush at XT 679167.  Numerous mines and booby traps were located and destroyed during the day. All elements except the two ambushes closed base camp by 1835 hours. During the operation Company A suffered 3 KIAs and 14 WIAs, 2 of whom were treated and returned to duty.
            </p>
            <p>
              On June 19, 1966, at 0510 hours, the Company C stay-behind ambush reported that one of their men had moved out of position without his helmet and when challenged did not halt, and was shot and killed.
            </p>
            <p>
              Between June 19 and June 24, 1966 different elements of the 1/5th(M) were attached to and OPCON the 2/27th Infantry.
            </p>
            <p>
              On June 21 and June 22, elements of the 1/5th(M) conducted convoy escort to Bao Trai.
            </p>
            <p>
              On June 24, 1966 one Bobcat from Company B died of wounds he had sustained earlier.
            </p>
            <p>
              From June 25 to July 1, 1966 the 1/5th(M) conducted operations in the Boi Loi Woods and the Ho Bo Woods. Their primary objective was to locate and destroy VC units and base camps. This was the fourth excursion of the battalion into the area. Some troops wondered why they were going back into "that damn" area. "I didn’t loose anything the last time we went in there," was one comment expressed. Others wondered why the battalion just didn’t set up a base in the area and stay there, instead of going in, "kicking ass and getting our ass kicked" and then leaving and letting Charlie rebuild his defenses and booby traps and then going back in and starting the whole process all over again. Just didn’t seem to make much sense. But then nothing much did. The majority of the troops did not even know where the Ho Bo and Boi Loi were on a map. They had no idea of the overall "Big Picture" of what was happening in Viet Nam other than the Communists were trying to take over the place. But then at times one wondered if anyone had any idea of the overall "Big Picture" or if there even was a "Big Picture," other than the statistics of who killed how many and who captured what. Yet the men of the battalion carried on, doing what was asked of them.The battalion began its operations on June 25 at 0630 hours, when the battalion left Cu Chi Base Camp and conducted operations along the southern edge of the Boi Loi Woods complex. It was hoped that these maneuvers would deceive the VC as to the main operation which commenced on the 26th and consisted of S&D operations in the Ho Bo Woods.
            </p>
            <p>
              On June 26, 1966, the battalion moved to the Ho Bo Woods area. Company A made contact at a bunker tunnel complex. In the ensuing firefight one Bobcat was killed and 13 were wounded, of whom 7 were dusted off. 2 Company A APCs had hit AT mines. At 1432 hours Company C encountered a large command bunker with an extensive tunnel complex. During the fight which followed, 2 Bobcats were killed and 6 were wounded. 2 of the WIA were returned to duty.
            </p>
            <p>
              On June 28, 1966, at 1040 hours Company B had a man killed in a tunnel. The man who was behind him said, "We got to a corner in the tunnel. It turned 90 degrees to the right. He moved part way around the corner and said ‘Oh No,’ and then some shots were fired and he was dead." The men who went into the tunnel to retrieve his body were fired at by the VC and had to use his body as a shield as they dragged it out.
            </p>
            <p>
              On June 29, 1966, a Bobcat from Company A died from a gunshot wound to the head he had received earlier.
            </p>
            <p>
              On June 30, 1966, a Bobcat from Company B died from fragmentation wounds he had received earlier.
            </p>
            <p>
              During June 1966, 12 Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Jimmy L. Scott</li>
              <li>Elton O. Harris</li>
              <li>Garry L. Burgess</li>
              <li>Joseph S. Vesely Jr.</li>
              <li>Ivor E. Bunch</li>
              <li>William Jones Jr.</li>
              <li>Hachiro Imae</li>
              <li>James L. Northrop</li>
              <li>Gerald R. Rolf</li>
              <li>Rickey D. Castleman</li>
              <li>Clarence Gene Forman</li>
              <li>Arnoldo J. Cardenas.</li>
            </ul>
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              On July 1, the battalion terminated the operation at 0700 hours. Six Bobcats died during the operation and 81 were wounded with 39 being treated and returned to duty.
            </p>
            <p>
              14 APCs were damaged by mines. 6 were repaired in the field and the other 8 had to be evacuated. 6 of the evacuated APCs were declared combat losses. A mechanical problem with the idler arm separating from the carrier hull still existed. This required the vehicle to be short tracked if it was to move under its own power. There were 7 such mechanical failures during the operation, all of which required the evacuation of the tracks.
            </p>
            <p>
              Numerous bunkers and tunnel systems were destroyed by a "special tunnel team" from the 65th Engineer Battalion. A special technique of using acetylene gas and detonator proved inadequate. The method worked well in tunnels of less that 6 feet in depth, but the majority of the tunnel complexes encountered were of much greater depth. Cratering charges placed throughout the tunnels at key locations and linked with detonating cord proved effective. It was noted however that this method would require a large amount of explosives for the extensive tunnel systems in the area. While 78 tunnels were found and destroyed, it was believed that this was only a small portion of the tunnels that exist in the area.
            </p>
            <p>
              During the month of June, agent reports, Chieu Hoi reports, and SPAR activity indicated that the VC had returned to the Ho Bo Woods area. Operations conducted by the 1/5th(M) during the period June 25 to July 1 confirmed these reports. Numerous reports continued to be received during the month concerning large VC units moving into the Boi Loi Woods area from the vicinity of the Michelin Plantation.
            </p>
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              On July 4, 1966, Company C, 1/5th(M) was attached to the 2/27th Infantry. They provided road security along Highway 7A south of Heip Hoa (XT 4709) and also provided security for a "County Fair."
            </p>
            <p>
              The beginning of July was a period of maintenance of vehicles and a welcome "break" in the action.
            </p>
            <p>
              During the period of June 26 to July 5, 1966, the 25th Division Chemical Section provided technical supervision to division troop units for the dispersal of 2,4-D Defoliant on the perimeter of Cu Chi Base camp. The mixture used was two parts Diesel and one part 2,4-D.
            </p>
            <p>
              Method of dispersion was the use of the M106 Portable Riot Control Agent Dispenser (Mighty Mite) loaded on a vehicle. In areas that could not be traversed by vehicles, the M106 was back packed. A total of 22 barrels were dispersed. Later evaluation indicated that not enough defoliant was dispersed by this method and recurring applications would be required to defoliate new growth.
            </p>
            <p>
              During the day on July 15, 1966, the 1/5th(M) conducted maintenance and civil affairs activities southeast of Cu Chi in Tan Phu Trung (XT 6809).
            </p>
            <p>
              On July 16, 1966, the 1/5th(M) conducted a platoon size sweep of the area around XT 685069, searching for a suspected VC base camp with no contact being made. The remainder of the battalion conducted escort and maintenance throughout the day.
            </p>
            <p>
              On July 17, 1966, the 1/5th(M) again conducted maintenance and civil affairs activities during the day at Tan Phu Trung.
            </p>
            <p>
              On July 18, 1966, the battalion continued maintenance and civil affairs. Two daylight ambushes were deployed, one of which was tripped.
            </p>
            <p>
              On July 19, 1966, Company A and the Recon Platoon conducted a S&D operation in the area of Ap Phu Loi (XT 707110).
            </p>
            <p>
              Elsewhere on the 19th, the 1/27th Infantry was conducting Eagle Flights. The 1st Platoon Company A, 1/27th Infantry went into a landing zone at XT 577265. At 1235 hours the platoon received sniper fire. At 1239 hours the 3rd Platoon of Company A 1/27th Infantry was inserted into XT 562265. Small arms fire was received as the helicopters approached the LZ and upon dismounting the platoon moved across the LZ under intense small arms fire. Both units became heavily engaged and the 2nd Platoon was committed at 1430 hours into XT 577265. A platoon from Company B, 1/27th Infantry was inserted into XT 562265 at 1550 hours.
            </p>
            <p>
              At 1504 hours Company B, 1/5th(M) was alerted to stand by as a reaction force for the units of the 1/27th Infantry. The men mounted their vehicles in the Cu Chi base camp motor pool and waited. They could see the helicopter gunships firing and the sound of artillery firing was constant. Some of the men wondered why they were not moving. People were in trouble. And they waited. And they waited.
            </p>
            <p>
              At 1630 hours the extraction of the 1st platoon of Company A 1/27th Infantry was completed under intense fire.
            </p>
            <p>
              During the action 25 "Wolfhounds" were killed and 24 wounded.
            </p>
            <p>
              Company B, 1/5th(M) was given the word to stand down but was informed that at least 15 Wolfhounds were left on the field of battle and were presumed dead. The company was to move out in the morning. That information did not sit too well with some of the men. You don’t leave people on the battlefield, dead or alive. Besides, how do you know for sure they were dead? Bobcats were not afraid of the dark. "They should send us now" was a general feeling among the men.
            </p>
            <p>
              It was a restless night.There was an attack on the Phuoc Hiep outpost located on Highway 1, nine kilometers northwest of Cu Chi. The VC also fired 40 – 50 rounds of 82mm mortar into the Trung Lap ARVN Ranger Training Center. This clearly demonstrated the capability of VC main force units to successfully conduct simultaneous attacks on separate targets.
            </p>
            <p>
              On July 20, 1966, at 0630 hours, Companies A and B and the Recon Platoon of the 1/5th(M) left base camp enroute to search the area of the previous day’s contact by the 1/27th Infantry. At 0910 hours the bodies of 15 Wolfhounds were located near XT 576268. They were laying in a neat row, next to each other, all on their backs. They were clothed, but stripped of all weapons and equipment. It was a sad sight indeed. But at the same time, the professional courtesy of the enemy also left an impression.
            </p>
            <p>
              A helicopter had been shot down and burned during the action of the day before. When it was turned over the body of a door gunner and his M-60 machinegun were located. The units of the battalion closed back into base camp at 1640 hours.
            </p>
            <p>
              On July 21, 1966, Companies A and B and the Recon Platoon departed base camp for a search and destroy operation in the western end of the Filhol. Several preselected objective areas were searched. At 1600 hours Company B became engaged in a fire fight in the vicinity of XT 642217. During the course of the fight one of the APCs moved to attack from the right flank and a command-detonated mine was exploded. There were several cases of TNT and C4 explosives inside the carrier. When the mine detonated, it set off the explosives. The only thing left of the APC was the floorboard and the driver’s steering sticks. There were seven Bobcats in the APC at the time of the explosion. Most of their body parts were located and recovered from around the area. Some were not found. By 1700 hours Company A had closed with Company B and the units moved out of the area at 1800 hours heading for Cu Chi Base Camp. It was noted in a medical evaluation report that "There was difficulty identifying the remains of seven men, who were mutilated when their track exploded. A careful search for remains should be made if tactically possible whenever a body has been mutilated. This could assist in the positive identification of the remains."
            </p>
            <p>
              On July 22, 1966, the battalion performed maintenance and prepared for future operations.
            </p>
            <p>
              Also on the 22nd, condolence boxes containing canned food, clothing, rice and health items were donated to the surviving family members of National Police Officers Mai Van Dung and Dang Van Tron who were killed in action while working with the 25th Infantry Division.
            </p>
            <p>
              On July 23, 1966, the 1/5th(M) conducted reconnaissance in force (RIF) operations in the vicinity of XT 5423, 5525, 5724, 5723, 5621 and 5619. 55 VC suspects were apprehended of which 19 were confirmed to be VC. The battalion returned to base camp at 1715 hours.
            </p>
            <p>
              On July 24, 1966, the battalion (minus Company C which was attached to the 4/9th Infantry) began a 19 day period of operations in the northern Filhol, the Ho Bo Woods, and the area around Trung Lap.
            </p>
            <p>
              At 0815 hours Company A and the Recon Platoon commenced operations. With the assistance of a PF soldier and a Chieu Hoi, a VC base camp was located at XT 720104. The camp consisted of 4 buildings and a bunker tunnel complex. One Bobcat was killed when a booby trap was detonated. The camp was destroyed and the units closed Cu Chi Base Camp at 1440 hours.
            </p>
            <p>
              On July 25, 1966, the battalion conducted maintenance throughout the day.
            </p>
            <p>
              On July 26, 1966, the 1/5th(M) conducted maintenance and an element provided a convoy escort to Bao Trai. Company B, 1/5th(M) was attached to the 2/27th Infantry and reinforced Company C, 2/27th Infantry at a fire support base at Bao Trai upon an intelligence report that the Bao Trai outpost was to be attacked.
            </p>
            <p>
              That night Cu Chi Base Camp received a total of 206 rounds of 75mm recoilless rifle and 82mm mortar fire.
            </p>
            <p>
              On July 27, 1966, the battalion(-) departed base camp to establish a battalion forward base at XT 5130. Company B joined the battalion en route. Companies A and B and the Recon Platoon conducted operations in the area and established daytime ambushes. The units closed the battalion base by1630 hours and at 1910 hours deployed night ambushes.
            </p>
            <p>
              Company C returned to Cu Chi Base Camp at 1830 hours, terminating its attachment to the 4/9th Infantry.
            </p>
            <p>
              On July 28, 1966, Companies A and B and the Recon Platoon departed for the village of Loc Hung (XT 5226) at 0655 hours. Operating with a local Regional Forces Platoon, they commenced a seal and search of the village. 19 VC suspects were apprehended, 5 of whom proved to be VC. The units returned to the battalion forward base camp by 1630 hours.
            </p>
            <p>
              On July 29, 1966, the battalion ended operations and returned to the division base camp by 1830 hours.
            </p>
            <p>
              On July 30, 1966, units of the battalion conducted maintenance, civil affairs operations at Tan Phu Trung and provided an escort for an artillery convoy from Duc Hue (XT 4405) to Cu Chi.
            </p>
            <p>
              It was noted in a report that the Filhol Plantation and the Ho Bo Woods in spite of their proximity to the division base camp, constant harassment by artillery, and frequent S&D operations, continued to be the scene of occasional intense fighting.
            </p>
            <p>
              During the Quarterly Reporting Period of May 1 thru July 31, 1966 casualties for the 25th Infantry Division(-) were:
            </p>
            <p>
              KIA- 132; WIA- 1,239; MIA- 0; DOW- 24; NBI- 34; NBD- 11.
            </p>
            <p>
              During July 1966, eight Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>David L. Berry</li>
              <li>James X. Gilch</li>
              <li>Richard D. Gill Jr.</li>
              <li>Samuel G. Harris</li>
              <li>Leo E. Hinterlong</li>
              <li>Wilberto C. Sanchez</li>
              <li>Larry Van Clief</li>
              <li>Charlie Gray</li>
            </ul>
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              On August 1, 1966, the 1/5th(M) conducted S&D operations and also checked the effectiveness of a B-52 strike in the area of XT 640225 – XT 665240. Four extensive bunker- tunnel complexes were located and destroyed. Artillery dud rounds rigged for command detonation and some weapons and ammunition were located in the complexes. The battalion set up two night bases with Company A at XT 645227 and the battalion(-) at XT 608234. Night ambushes were employed.
            </p>
            <p>
              On August 2 and 3, 1966, the battalion continued searching the area. More tunnel and bunker complexes were located and destroyed. Enemy contact was light. Some areas were extensively booby-trapped with cluster bomb unit bomblets and command detonated mines. On August 03, one Bobcat was killed when a boobytrap was detonated.
            </p>
            <p>
              On August 4, 1966, the battalion continued its search and destroy operations in the area. At 1101 hours vic XT 658259 a booby trap was detonated killing one Bobcat from Company C and seriously injuring another. At 1132 hours 1 Bobcat from Company C was killed and 3 were injured while they were investigating a bunker that turned out to be booby-trapped. That evening ambushes were again employed from the battalion's night encampment.
            </p>
            <p>
              On August 5, 1966, the battalion conducted RIF operations of two areas. Enemy contact was again light and scattered. Several steel and log reinforced bunkers were located and destroyed, along with munitions and supplies. The battalion relocated its night encampment to XT 569241. No night ambushes were deployed. Also on August 05, a Bobcat died of wounds he had received earlier.
            </p>
            <p>
              On August 6, 1966, the battalion participated in a 2nd Brigade seal and search operation of the village of Trung Lap. At 0545 hours the battalion command APC hit a mine causing 3 WIA. The track was damaged beyond repair and was destroyed in place. At 1205 hours a 4.2 inch mortar track hit a mine resulting in 4 WIA. At 1410 hours the battalion C&C helicopter was knocked to the ground and severely damaged as it detonated a mine while lifting off over a bamboo hedgerow. There were 3 WIA as a result of the crash. The operation was completed at 1540 hours and all units closed Cu Chi Base Camp by 1800 hours.
            </p>
            <p>
              From August 8 thru 14, 1966, the 2nd Platoon of Company C was attached to the 1/27th Infantry.
            </p>
            <p>
              On August 10, 1966, Company B, 1/5th(M) was attached to the 4/9th Infantry effective at 0800 hours. They provided security and conducted S&D operations east of the junction of highways 26 and 19, in the area of XT 355450.
            </p>
            <p>
              On August 13, 1966, Company B, 1/5th(M) conducted reconnaissance of possible stream crossing sites north of Go Dau Ha in the area of XT 328407.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 10: Dong Hoa area</li>
              </ul>
            </div>
            <p>
              On August 14, 1966, the 1/5th(M) became attached to the 1st Brigade. Company A was assigned to provide security for Battery A, 7/11th Artillery at Go Dau Ha. Company B provided security for the extraction of the 4/9th Infantry at XT 355432. Company C conducted S&D operations northeast of Go Dau Ha, in the area of XT 337437. The battalion established a forward base near Trung Mit at XT 4039. From August 14 thru the 20th, the 3rd Platoon of Company A was attached to the 1/27th Infantry.
            </p>
            <p>
              On August 15, 1966, Company A remained at Go Dau Ha providing security. Companies B and C and the Recon Platoon conducted reconnaissance of various areas. At 1150 hours, one APC from the Recon Platoon detonated a mine at XT 371422. Five Bobcats were wounded and evacuated. One died of his injuries later in the day. All units closed the battalion forward base by 1900 hours.
            </p>
            <p>
              On August 16, 1966, Company A continued to provide security at Go Dau Ha for artillery units. Companies B and C conducted separate S&D operations in the area. Both units had light contact and closed back to the battalion forward base by 1730 hours. A Recon Platoon APC detonated a mine at XT 358438 while on an escort mission from Go Dau Ha. Three Bobcats were wounded. One wounded Bobcat died of his wounds before a dust-off could get there. A check of the road revealed 3 more mines in the area. The platoon stayed at Trung Mit overnight.
            </p>
            <p>
              From August 17 thru August 30, 1966, the battalion continued operations in the area. Enemy contact was light. From August 20th thru the 28th, the 1st Platoon of Company B was attached to the 1/27th Infantry. On the 21st, Company B replaced Company A at Go Dau Ha. Enemy munitions and fortifications were located and destroyed. On the 28th, two men were injured when an APC detonated a mine. The 2nd Platoon of Company B was attached to the 1/27th Infantry from August 28 thru September 1, 1966. On the 29th , six Bobcats were wounded by a 60mm mortar round.
            </p>
            <p>
              On August 30, 1966, the battalion(-) returned to Cu Chi Base Camp.
            </p>
            <p>
              On August 31, 1966, Companies A, B(-), and C conducted road clearing, security and convoy escort duties. Company C was the last to close Cu Chi at 2337 hours.
            </p>
            <p>
              In the battalion commander’s analysis of the operation it was noted that "Fragmenting a mechanized battalion reduces its firepower and shock action and seriously hampers its flexibility. Employing a mechanized unit in a static security role, ie., securing an artillery battery, protecting engineer work crews, ect., fails to make use of the mobility and shock action which characterize mechanized infantry."
            </p>
            <p>
              During August 1966, six Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Robbin A. Goodwin</li>
              <li>Rodney W. Casselman</li>
              <li>Joe L. Hill</li>
              <li>Richard J. Willett</li>
              <li>Steve W. Harris</li>
              <li>Robert A. Schmid</li>
            </ul>
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              On September 1, 1966, elements of Company B were still attached to the 1/27th Infantry.
            </p>
            <p>
              On September 2, 1966, the 1/5th(M) was attached to and under OPCON of the 1st Brigade. Company A established a base at the northern end of the Filhol ( XT 691213) where they conducted daylight patrols and night ambushes of traffic on the Saigon River.
            </p>
            <p>
              On September 3, 1966, the Battalion Headquarters and the Recon Platoon joined Company A and established a forward base in the area of XT 679211. After conducting local S&D operations the battalion command group, and the Recon Platoon departed the Filhol and returned to Cu Chi Base Camp. Company B conducted operations in the Filhol under OPCON of the 4/23rd Infantry and retuned to Cu Chi Base at 2000 hours. Company A remained in the Filhol deploying night ambushes and Company C remained under OPCON of the 2nd Brigade and had 1 platoon attached to the 1/27th Infantry.
            </p>
            <p>
              On September 4, 1966, the battalion command group, Company B and the Recon Platoon joined Company A in the Filhol and established a forward base. Company C remained OPCON to the 2nd Brigade.
            </p>
            <p>
              On September 5 and 6, 1966, battalion units conducted local S&D operations. Contact was light and scattered. One APC detonated a mine without casualties. Miscellaneous enemy supplies and fortifications were located and destroyed.
            </p>
            <p>
              On September 7, 1966, Company B and one platoon from Company A conducted operations in conjunction with the 4/9th Infantry. Recon Platoon suffered one WIA from small arms fire. At 1455 hours Company C (-) joined the battalion at the forward base.
            </p>
            <p>
              On September 8, 1966, the battalion conducted 3 separate company size operations in conjunction with the ARVN 1/7th Infantry.
            </p>
            <p>
              On September 9, 1966, The battalion moved to a new base area at XT 680211 on the northern fringe of the Filhol. S&D operations continued. Company C became OPCON to the 2nd Brigade and established a forward combat base at XT 439349.
            </p>
            <p>
              On September 10, 1966, the battalion conducted two one company operations with light contact. Company C conducted RIF operations north of Bao Don (XT 442365) and received 9 rounds of mortar fire at their night location.
            </p>
            <p>
              On September 11, 1966, the battalion command group moved to XT 637211. Company A conducted an S&D operation, destroying bunker and tunnel complexes. At 1205 hours two WIAs were sustained from small arms fire. At 1220 hrs a 105mm artillery round was command detonated against an APC wounding 3 Bobcats. Company B conducted an S&D operation, destroying bunkers and tunnel complexes and munitions. 3 APCs detonated mines with no casualties. At 1900 hours the battalion forward base received 4 rounds of 60mm mortar fire resulting in 1 Bobcat from Company A being killed.
            </p>
            <p>
              At 2005 hours Company B received 15 rounds of friendly 105mm artillery fire. 1 Bobcat from Company B was killed and 3 were seriously wounded. Supposedly someone was firing a counter-mortar barrage.
            </p>
            <p>
              On September 12, 1966, the battalion(-) was detached from the 1st Brigade and returned to Cu Chi Base Camp, closing by 1215 hours. Company C established a blocking position at XT 540205 and was attached to the 1/27th Infantry. Also on the August 12, one Bobcat from Company C died from wounds he had received earlier.
            </p>
            <p>
              From September 13 thru 19, 1966, the battalion conducted maintenance and prepared for future operations. During the period the Recon Platoon conducted a three day search and destruction of a two level tunnel complex that was reported by a Chieu Hoi at XT 695117. A total of 1270 meters of tunnel were destroyed. There were also Medcaps and road runner operations conducted.
            </p>
            <p>
              On September 20, 1966, a series of operations in preselected objective areas in the Filhol and Boi Loi Woods and vicinity began. The mission of the battalion was to conduct S&D and RIF operations and on order to assist in the destruction of VC forces fixed by 1/27th Infantry Eagle Flights. An APC from Company C detonated an AT mine at XT 614243 resulting in 2 WIA who were evacuated. The Battalion command group, while enroute to establish a forward base, had one APC hit a mine at XT 625218 at 1230 hours resulting in extensive damage to the vehicle and 2 minor injuries. The damaged APC was taken back to Cu Chi by the Recon Platoon who then returned to the battalion forward base at XT 609240. During the day numerous dud artillery rounds and booby traps were located and destroyed. Night ambushes were employed from the forward command base.
            </p>
            <p>
              On September 21, 1966, Co A displaced to the new battalion base location. Companies B and C conducted S&D operations. One platoon from Company A escorted a damaged Recon Platoon APC to Trung Lap. Enroute they had 1 APC detonate a mine. Companies B and C both located enemy base camps with various amounts of equipment and supplies. Among the items found and destroyed were 21 - 55gallon drums of 30W oil.
            </p>
            <p>
              On September 22, 1966, at 0415 hours the forward base received 15 rounds of 60mm mortar rounds resulting in 5 WIA. Company A dispatched one platoon to recon a direct route from the forward base camp to Trung Lap. At 1105 hours an APC from Company A detonated an AT mine resulting in 1 WIA. The vehicle was extensively damaged and the company dispatched additional APCs to assist in its removal. The wet ground caused the damaged APC and the towing vehicles to continually bog down. The party did not close the battalion base until 0200 hours. Company B (-) performed maintenance while one of its platoons extracted stuck vehicles and returned to base camp at 1545 hours. Company C conducted S&D operations in an attempt to locate the area from where the mortar attack had taken place. The area was located and while extending the area of their S&D operation the company engaged an estimated 8 VC at 1216 hours. At 1332 hours an APC detonated a mine and one Bobcat was wounded. Night ambushes were deployed from the battalion forward base with negative contact. Also on September 22, one Bobcat from Company B died from injuries he had received earlier.
            </p>
            <p>
              On September 23, 1966, the battalion moved to a new base location at XT 505307. While enroute S&D operations were conducted. Some vehicles became stuck in the soft ground and all units, except one platoon from Company B, finally closed the new base. The Company B platoon remained at XT 513304 with a stuck 4.2 inch mortar track.
            </p>
            <p>
              On September 24, 1966, elements conducted local S&D operations and repaired and extracted downed vehicles. The Recon Platoon escorted two brigade command carriers to the brigade forward CP at XT 475265. The 3rd platoon from Company B spent the night at Go Dau Ha.
            </p>
            <p>
              On September 25, 1966, at 0110 hours it was reported that one of the men with the platoon at Go Dau Ha was involved in a shooting incident. Apparently he wanted the services of a female companion of one of the American advisors at Go Dau Ha, and when they were refused he shot the American advisor in the foot with his .45 cal pistol.
            </p>
            <p>
              Company A departed the base at 0745 hours and at 0842 hours one APC hit an AT mine at XT 493316. The explosion ignited the gas tank and eight Bobcats burned to death. Three others were seriously injured. At 0955 hours it was requested that Graves Registration dispatch a team to remove the remains of those deceased Bobcats that were still inside the track.
            </p>
            <p>
              At 0940 hours Company B had one APC hit a mine causing 2 minor injuries but extensive damage to the track. At 0947 hours one Recon Platoon APC hit a mine. There were 3 wounded and the APC was a total loss. At 1100 hours a Company B APC hit a mine resulting in 2 wounded.
            </p>
            <p>
              On September 27, 1966, the companies conducted local S&D operations. At 1150 hours an APC from Company A had a booby trap that was suspended in a tree command detonated as the track moved past. One Bobcat from Company A was killed and 2 were wounded.
            </p>
            <p>
              At 2047 hours an OP/LP from Company C was fired upon with an M-79 by a Company C soldier on the Company C portion of the perimeter. One Bobcat was killed and two were wounded in the incident.
            </p>
            <p>
              On September 28, 1966, at 0859 hours, one APC from Company A hit an AT mine resulting in 4 minor wounded and extensive damage to the track. While in the same area at 1000 hours, Company A received 2 rifle grenades with negative casualties. At 1135 hours Company A received 2 rounds of fire from an AT weapon. Company C had just joined Company A in the area. At 1207 hours one APC from Company C detonated an AT mine resulting in 4 minor WIA. At 1210 hours Company A received sniper fire at XT 498333 resulting in one Bobcat from Company A being killed.
            </p>
            <p>
              At 1147 hours, elements of Company B engaged in a fire-fight resulting in two Bobcats from Company B killed and two others wounded.
            </p>
            <p>
              The battalion established a new CP location at XT 533347.
            </p>
            <p>
              On September 30, 1966, 5 APCs from Company A continued their march toward Go Dau Ha at first light. At 0700 hours the vehicles became bogged down at XT 489299 and the element awaited assistance. Company A(-) departed the perimeter at 1110 hours acting as rear guard for the battalion during movement to the 2nd Brigade CP. At 1208 hours one APC from Company C which was traveling with the group struck an AT mine at XT 510447 resulting in 1 Bobcat from Company C being killed and 3 others wounded. The APC was later stripped and destroyed in place.
            </p>
            <p>
              Company A(-) was unable to get to the 2nd Bde CP because of stuck vehicles and established a night base at XT 478352. Company B was also forced to establish its own night perimeter at XT 510346. Company C managed to close the 2nd Brigade forward CP at 1930 hours.
            </p>
            <p>
              During September 1966, seventeen Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Earl E. Irving Jr.</li>
              <li>Rolando L. Soliz</li>
              <li>Billy J. Dailey</li>
              <li>James E. Miller</li>
              <li>Gary A. Barnard</li>
              <li>Gary R. Dopp</li>
              <li>Roy D. Hutting</li>
              <li>Ernest R. Martie</li>
              <li>Terry L. Pundsack</li>
              <li>Robert M. Waters</li>
              <li>Walter Williams Jr.</li>
              <li>Charles M. Centeno</li>
              <li>Thomas A. Lowden</li>
              <li>Thomas J. Ontiveros</li>
              <li>Ralph G. Till</li>
              <li>Terry L. Snyder</li>
              <li>ONE whose name is unknown to us writing this report.</li>
            </ul>
            <p>
              "Higher temperatures and less thunderstorm activity can be expected in October as the autumn season sets in in the Cu Chi and Tay Ninh area. October marks the transition between the wet and the dry season. Temperatures during this period at Tay Ninh will increase to an average high of 90 degrees and a low of 75 degrees. Cu Chi temperatures will be slightly cooler. Warm moist air from the southwest will be replaced by the relatively cooler, drier air of the northeast monsoon."
            </p>
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              On October 1, 1966, the battalion finished closing to the 2nd Brigade forward CP.
            </p>
            <p>
              On October 2, 1966, the battalion defended the brigade forward base and conducted maintenance. One platoon from Company A conducted road runner operations from Trang Bang to Cu Chi.
            </p>
            <p>
              On October 4, 1966, one Bobcat from Company A died from wounds he had previously received. Throughout the day the battalion performed maintenance and secured the brigade perimeter until all brigade elements were removed. At 1700 hours the battalion departed the forward base and returned to Cu Chi Base Camp, closing by 2100 hours.
            </p>
            <p>
              October 5, 1966 was a day of maintenence. On the 6th, Company C operated in the area of Tan Phu Trung. On the 7th, a convoy was escorted to Trang Bang and Companies A and B patroled in the area of Tan Phu Trung. Medcap activities were also conducted in the area.
            </p>
            <p>
              On October 8, 1966, the battalion conducted local operations with no significant contact. During the day elements of the battalion conducted convoy escort to Bao Trai and Duc Lap.
            </p>
            <p>
              On October 8, 1966 a ten man patrol from Company C, 1/27th Infantry departed the Bao Trai airstrip at 1930 hours to set up at XT 544038. At 0146 hours the patrol was attacked and communication was lost. An 18 man reaction force was committed at 0212 hours. Company C 1/27th Infantry began to search at first light. At 0720 hours the bodies of 9 of the patrol members were located at XT 563032. At 0831 hours a villager along the trail being followed disclosed that 30 VC and a Negro US Soldier prisoner passed through the village moving southwest.
            </p>
            <p>
              From October 9 thru 11, 1966, the battalion continued local operations in the area of Tan Phu Trung, souteast of Cu Chi.
            </p>
            <p>
              The battalion participated in the mid-Autumn children's festival at Tan Phu Trung. Candy and toys were distributed to some 1500 children. The 1/5th(M) also delivered a brick-making machine, cement and steel fence posts to the village.
            </p>
            <p>
              In the commander's analysis it was noted that the mines encountered were becoming larger, resulting in greater physical damage to the APCs. However, barring aggravating factors such as fires or secondary explosions, casualties from mine detonations remained relatively light.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 11: Tan Phu Trung</li>
              </ul>
            </div>
            <p>
              On October 12, 1966, the 1/5th(M) continued pacification and security operations at Tan Phu Trung.
            </p>
            <p>
              On October 16, 1966, at 0155 hours, an OP/LP (XT 692095) from Company C received 3 incoming hand grenades resulting in one Bobcat from Company C being killed and one injured who later died of wounds he received. An immediate search of the area was conducted with no enemy contact.
            </p>
            <p>
              On October 17, 1966, operations in the area of Tan Phu Trung continued. At 0700 hours one platoon from Company C made an airmobile combat assault into the area of XT 715120. One platoon from Company A secured the Hoc Mon Bridge (XT 713072).
            </p>
            <p>
              On October 18, 1966, two platoons from Company B closed base camp at 0110 hours after conducting a night road runner operation to and from Trung Lap to escort one battery of the 3/13 Artillery back to Cu Chi. At 1015 hours, Company C conducted an airmobile combat assault into XT 696135. One minor WIA was received when a VC squad was engaged. At 1345 hours Company B conducted an S&D operation at XT 627218 in response to a LRRP contact with 25 VC. One minor WIA was suffered at 1612 hours from a booby trap. At 1641 hours, another minor WIA was received from a booby trap.
            </p>
            <p>
              On October 19, 1966, Company C conducted an airmobile combat assault into multiple landing zones starting at 0920 hours. One platoon from Company A secured the Hoc Mon Bridge during hours of darkness.
            </p>
            <p>
              On October 22, 1966, Company A continued operations from a forward base (XT 687104) in Tan Phu Trung. The remainder of the battalion commenced an S&D operation into the Ho Bo Woods. There was light contact with several WIAs sustained.
            </p>
            <p>
              On October 23, 1966, Company B sustained two Bobcats KIA and two wounded at 1440 hours when an APC was hit by an AT round. Company B and Company C destroyed numerous bunkers and tunnels in the area. The battalion forward base was located at XT 588281. Company A continued operations in Tan Phu Trung.
            </p>
            <p>
              On October 24, 1966, Company C sustained 1 WIA from a sniper at 0940 hours. Company B located an enemy base camp at 1330 hours and destroyed the structures. At 1650 hours, with the assistance of a Chieu Hoi, Company C located a booby trap factory and destroyed 600 pounds of TNT and miscellaneous items used in the manufacture of booby traps. All units closed Cu Chi Base Camp by 1800 hours. Company A continued operations in Tan Phu Trung.
            </p>
            <p>
              On October 27, 1966, The 1/5th(M) Battalion(-) conducted RIF/S&D operations southeast of Trang Bang in the area of XT 5214. The battalion(-) established a forward base at XT 509141. The battalion(-) continued operations in the area and closed back to Cu Chi base camp at 1840 hours on October 29, 1966. Company A remained at a forward base at XT 525141 and Company B continued operations in the Tan Phu Trung area.
            </p>
            <p>
              On October 31, 1966 Company A completed "bushmaster" and S&D operations in Thai My (XT 5214) and returned to Cu Chi Base Camp at 1255 hours. At 1500 hours Company C discovered an extensive tunnel complex just to the northeast of Tan Phu Trung at XT 702102.
            </p>
            <p>
              Exploration was halted due to darkness and was scheduled to resume the next morning.
            </p>
            <p>
              For the Quarterly Reporting Period of August 01, 1966 thru October 31, 1966, the 25th Infantry Division(-) reported the following personnel statistics:
            </p>
            <p>
              79 - KIA; 845 - WIA; 7 - MIA; 19 - DOW; 3 - NBD; and 65 - NBI.
            </p>
            <p>
              It was also noted that there was a shortage of Infantry NCOs in the grades E-5 and E-6. The casualty rate of NCOs has created a shortage in greater proportion than the rate of fill.
            </p>
            <p>
              The influx of approximately 1200 daily hire laborers into the Division base has required intensive and continuous counter-intelligence measures to neutralize VC espionage.
            </p>
            <p>
              Medical: Veneral Disease is being contracted at a steady rate. The rates for August, September, and October were 278.0, 205.5, and 212.2 cases / 1000 men/year respectively.
            </p>
            <p>
              In the Division command analysis it was noted that:
            </p>
            <ol>
              <li>
                Explosives and demolitions are carried in the cargo compartment of APCs with troops. On occasion vehicles carrying troops and explosives hit anti-tank mines which cause the explosives to detonate. It was recommended that only a minimum amount of demolitions should be carried and additional demolitions be brought out by resupply means. The carrier which is used to carry the demolitions should only have a minimum number of personnel aboard to reduce the number of personnel exposed to a single explosion.
              </li>
              <li>
                VC forces make extensive use of mines and booby traps, often placing them in vehicle tracks. Command detonated mines are often rigged in trees to be employed against vehicle crewmen from above. During the last 30 days there has been a marked increase in VC deployment of RPG-2's. The RPG-2's have been employed singly or in groups (up to five) and have been habitually fired from close in.
              </li>
            </ol>
            <p>
              During the month of October 1966, five Bobcats died in Viet nam. They were:
            </p>
            <ul>
              <li>George W. Alexander Jr.</li>
              <li>Gerald J. Collier</li>
              <li>John C. Ardis</li>
              <li>Thomas William London</li>
              <li>Jimmy Doyle Phipps</li>
            </ul>
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              On November 1, 1966, Company C continued exploring the tunnel complex at XT 702102. A large ammunition cache was located in the tunnel at 1010 hours. At 1745 hours the tunnel was destroyed.
            </p>
            <p>
              On November 2, 1966, Company C closed Cu Chi at 0900 hours. The battalion continued maintenance and preparation for future operations.
            </p>
            <p>
              On November 3, 1966, at 0615 hours, the 1st Battalion(M) 5th Infantry with Troop B, 3/4 cavelry attached, commenced an attack into the northern Filhol in the area of XT 6322. Company A, with the help of a Chieu Hoi, discovered a munitions cache. At 1800 hours Company A established a base at XT 655231. Company B sustained 1 Bobcat wounded in a fire fight when an APC detonated an AT mine. Company B established a base at XT 647241.
            </p>
            <p>
              Company C became engaged in a firefight at XT 638239. The fight went from 1253 hours until the VC broke contact at 1700 hours. During the fight, two Bobcats were killed and three were wounded. The Battalion CP and Company C established a base at XT 635235. Troop B had 3 APCs hit mines resulting in 3 troopers being wounded. Troop B established a base at XT 642228.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 12: Katum area</li>
              </ul>
            </div>
            <p>
              On November 4, 1966, a Chieu Hoi led Company B to a munitions and weapons cache. At 1250 hours a Company C APC hit an AT mine resulting in two Bobcats wounded. The battalion(-) closed into Cu Chi Base Camp by 2350 hours. Company A continued to move throughout the night.
            </p>
            <p>
              On November 5, 1966, Company A closed Cu Chi Base Camp at 0630 hours. Company B moved to Go Dau Ha, closing at 1730 hours. The remainder of the battalion moved to an assembly area (XT 416238) closing at 0155 hours on November 6.
            </p>
            <p>
              On November 6, 1966, at 0700 hours, the 1/5th(M) was attached to the 3rd Brigade, 1st Infantry Division. The battalion departed Go Dau Ha and established a base at XT 340583 and provided a perimeter defense for the 3rd Brigade, 1st Infantry Division Headquarters, a forward supply airhead, two artillery batteries, a Special Forces compound and a Popular Forces compound. Company A was sent to XT 394622 to reinforce an infantry battalion which was securing a fire support base consisting of two artillery batteries. The 1/5th(M) continued to provide security to fire support bases and conducted local patrolling and ambushes until November 10.
            </p>
            <p>
              On November 10, 1966, the 1/5th(M) reverted to OPCON of the 2nd Brigade, 25th Infantry Division and moved its base to XT 274686 to secure the 2nd Brigade Headquarters at the "Old French Fort" located north of Nui Ba Dinh mountain on Highway 4.
            </p>
            <p>
              On November 11, 1966, the battalion conducted RIF operations in the area, north to the junction of Highways 247 and 4. Many signs of recent activity were found along the trails in the area. Some enemy supplies were located and destroyed. Company A established a perimeter at XT 269755. One platoon of Company C, with a damaged APC, spent the night in the Company A base. Company C(-) and Company B returned to the battalion forward base. Night ambushes were deployed with negative contact.
            </p>
            <p>
              On November 12, 1966, The battalion secured and established an area for a fire support base at XT 273785, on Highway 4, just to the north of the Highway 247 junction. For the next 13 days the battalion units conducted security, reconnaissance, and search and destroy operations in the area between Nui Ba Dinh and Katum. Enemy contact was scattered with some brief intense encounters. APCs hit mines wounding some and booby traps were encountered. Enemy bases and supply caches were discovered and destroyed throughout the area. One Bobcat died on the operation. That was on November 22, 1966 . "We were just standing there talking to each other," said a member of Company C, "when there was a single shot and down he went. He was dead before he hit the ground."
            </p>
            <p>
              On November 25, 1966, Operation Attleboro ended. The majority of the units involved moved back to Cu Chi Base Camp on November 24. The 1/5th(M) conducted deep reconnaissance and had a "training exercise" on extraction techniques east of Trai Bi.
            </p>
            <p>
              "It was noted that two basic things resulted from this operation (Attleboro): (1) We have learned that the controlled road is one of the basic logistical routes utilized by the 9th VC Division, and (2) one thing that surprised us was the adequacy of the intelligence network which the VC had. They knew just about every move we made."
            </p>
            <p>
              On November 28, 1966, the 3rd Brigade of the 4th Infantry Division established a base at Dau Tieng. The 3rd Brigade began continuous operations in the area surrounding Dau Tieng with maximum use of small unit patrols and "Bushmasters."
            </p>
            <p>
              Company C, 1/5th(M), was attached to the 3rd Battalion, 21st Infantry and conducted operations in the Thanh Dien Forest, south of the Tay Ninh Base Camp.
            </p>
            <p>
              During November 1966, three Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Riccardo B. Dickerson</li>
              <li>Milburn H. Starnes</li>
              <li>Dock J. Pinion</li>
            </ul>
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              On December 1, 1966, the 2nd Brigade of the 25th Infantry Division began operations in Hau Nghia Province to interdict the VC harvest, movement and storage of rice and to locate and destroy VC forces, base camps and supplies.
            </p>
            <p>
              On December 7, 1966, the 2nd Brigade established a Brigade Forward Command Post and assumed the additional mission of screening the rice producing areas adjacent to the Ho Bo - Boi Loi Woods complex. The 1/5th(M) effected a ground link up with the 1/27th Infantry at the forward combat base north of Trang Bang. (XT 484271). While enroute the Recon Platoon had 2 APC's hit AT mines near XT 509240 resulting in four Bobcats being wounded.
            </p>
            <p>
              On December 8, 1966, the battalion conducted reconnaissance in the area and received sniper fire which resulted in four Bobcats being wounded.
            </p>
            <p>
              On December 9, 1966, units from the 1/5th(M) conducted a RIF from XT 601307 to 530314, and secured LZs for the 1/27th Infantry. A firefight took place at XT 526314 and shortly thereafter an APC from Company A detonated an AT mine resulting in one Bobcat from Company A being killed and three others wounded.
            </p>
            <p>
              On December 10, 1966, Company A secured an LZ for the 1/27th Infantry and then joined the rest of the battalion in conducting S&D operations. During the day 3 APCs detonated AT mines resulting in seven Bobcats being wounded.
            </p>
            <p>
              On December 11, 1966, 3 underground fortifications, containing numerous electrical items and medicines, were located by Company A.
            </p>
            <p>
              On December 12, 1966, all three companies conducted S&D operations and the Recon Platoon secured a river crossing at XT 525345. There was no enemy contact during the day.
            </p>
            <p>
              On December 13, 1966, Company A located 7 underground fortifications containing supplies and ammo. Also on December 13, a Bobcat from Company B died in hospital from wounds he had received on an earlier date.
            </p>
            <p>
              From December 14, 1966, thru December 18, the 1/5th(M) conducted S&D operations in the Boi Loi Woods and along the Saigon River. Miscellaneous enemy supplies and equipment, along with enemy fortifications and tunnels were located and destroyed.
            </p>
            <p>
              On December 18, 1966, the 1/5th(M) conducted a convoy move to Cu Chi Base Camp, closing at 0900 hours.
            </p>
            <p>
              On December 19, 1966, Company B provided security for villages north of Bao Trai in the area of XT 568069. This was in response to recent VC threats against the villagers.
            </p>
            <p>
              On December 20, 1966, Company A established a company base at XT 629198 near Bau Tron, northwest of the Cu Chi base. Company B secured Battery A of the 1/8th Artillery at Duc Hanh and Company C prepared for night ambushes.
            </p>
            <p>
              On December 21, 1966, the 1/5th(M) conducted company ambushes and patrols. At 2320 hours Company A received mortar and RPG-2 fire which resulted in ten Bobcats being wounded.
            </p>
            <p>
              The fire was returned with Artillery with unknown results.
            </p>
            <p>
              On December 22, 1966, Company A conducted an S&D operation from XT 630197 southeast to Cu Chi Base Camp. Company B established a company base northwest of Cu Chi at XT 630206. Company C continued to provide security northeast of Bao Trai at Duc Hanh (XT 570070).
            </p>
            <p>
              On December 23, 1966, Company B conducted S&D operations around their forward base. Company C continued to provide security for the 1/8th Artillery.
            </p>
            <p>
              On December 24, 1966, Company A and the Recon Platoon prepared for future operations at Cu Chi Base Camp.
            </p>
            <p>
              On December 26, 1966, Companies A and C conducted an S&D operation northwest of the Cu Chi Base Camp near XT 6319 while Company B and the Recon Platoon set up blocking positions near XT 6220. There was no enemy contact but enemy material losses were extensive.
            </p>
            <p>
              On December 28, 1966, the battalion continued S&D operations in the same area. At 0740 hours an unknown number of VC were engaged at XT 627183. One Bobcat from Company A was killed and one was wounded. Also on December 28th, a Bobcat from Company B died in hospital from wounds he had received on a previous date.
            </p>
            <p>
              On December 29, 1966, the battalion conducted S&D operations. Company A established a forward base at XT 630174 and all other elements of the battalion closed Cu Chi Base Camp by 1640 hours.
            </p>
            <p>
              On December 30, 1966, Company B established a forward base at XT 630163. The remainder of the battalion conducted maintenance.
            </p>
            <p>
              On December 31, 1966, the 1/5th(M) conducted daylight ambush patrols. A patrol from Company C was fired upon at 1600 hours by 3 VC. There were no friendly casualties. And that is the best way to have closed out the year.
            </p>
            <p>
              During December 1966, four Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Melvin L. Sherrell</li>
              <li>Dennis F. Delasandro</li>
              <li>William L. McLaughlin</li>
              <li>One whose name is unknown to us who are writing this report</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('vietnam_1967_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar">
        <div data-button="jan" data-year="1966">
          <div data-button="jan" data-year="1966">January</div>
        </div>
        <div data-button="feb" data-year="1966">
          <div data-button="feb" data-year="1966">February</div>
        </div>
        <div data-button="mar" data-year="1966">
          <div data-button="mar" data-year="1966">March</div>
        </div>
        <div data-button="apr" data-year="1966">
          <div data-button="apr" data-year="1966">April</div>
        </div>
        <div data-button="may" data-year="1966">
          <div data-button="may" data-year="1966">May</div>
        </div>
        <div data-button="jun" data-year="1966">
          <div data-button="jun" data-year="1966">June</div>
        </div>
        <div data-button="jul" data-year="1966">
          <div data-button="jul" data-year="1966">July</div>
        </div>
        <div data-button="aug" data-year="1966">
          <div data-button="aug" data-year="1966">August</div>
        </div>
        <div data-button="sep" data-year="1966">
          <div data-button="sep" data-year="1966">September</div>
        </div>
        <div data-button="oct" data-year="1966">
          <div data-button="oct" data-year="1966">October</div>
        </div>
        <div data-button="nov" data-year="1966">
          <div data-button="nov" data-year="1966">November</div>
        </div>
        <div data-button="dec" data-year="1966">
          <div data-button="dec" data-year="1966">December</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="civilWar">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Vietnam, 1967</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              From January 1 thru January 4, 1967, the battalion continued S&D and ambush operations in the area between the Filhol and the Ho Bo Woods without enemy contact. Enemy fortifications, tunnels, and supplies were discovered and destroyed.
            </p>
            <p>
              On January 5, 1967, the battalion conducted maintenance at Cu Chi and prepared for future operations. For other than track drivers and maintenance personnel, that usually meant cleaning your weapons and catching up on sleep. When out on operations, and with ambushes, one was lucky to get 5 hours of sleep in any 24 hour period. After a few days it begins to catch up to a person.
            </p>
            <p>
              On January 6, 1967, the 1/5th(M) became attached to the 196th Light Infantry Brigade.  Troop B of the 3/4 Cavelry became OPCON to the 1/5th(M). The battalion moved to the area north of Trung Lap in preparation for Operation Cedar Falls.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map: Operation Cedar Falls</li>
              </ul>
            </div>
            <p>
              On January 7, 1967, the battalion began to work its way north towards the Saigon River and the Ho Bo Woods. Three Bobcats from Company A were killed on January 7. A 105mm artillery dud, hung in a tree, was command detonated as they were checking out some suspicious noise.
            </p>
            <p>
              The 1st Infantry Division along with the 173rd Airborne, 11th Armored Cavalry, and several ARVN units were beginning a detailed search of the Ben Suc, Thanh-Dien Forestry preserve and the so called "Iron Triangle" areas.
            </p>
            <p>
              On January 8, 1967, the 196th LIB established blocking positions on the banks of the Saigon River. The 1/5th(M) was the right (east) flank element in the area north of the Rach Son Creek in the Ho Bo Woods (XT 669248). Four Bobcats died on January 8th. Three of them on a Company B ambush patrol that something went wrong on. The fourth was from Company C.
            </p>
            <p>
              The battalion continued their blocking operation with some local patroling and ambushes.
            </p>
            <p>
              On January 17, 1967, four Bobcats were killed when the helicopter they were passengers in crashed. All four helicopter crew members were also killed. The helicopter was on the return trip to Cu Chi Base Camp from a resupply mission to the battalion forward base when it developed mechanical problems.
            </p>
            <p>
              On January 18, 1967, two Bobcats were killed in separate incidents. One from Company A and one from Company C.
            </p>
            <p>
              On January 19, 1967 one of the companies came across the bodies of 9 VC who had been killed.
            </p>
            <p>
              On January 20, 1967, Company B, with the guidence of a Chieu Hoi located an arms and ammunition cache at XT 661281. Two Bobcats from Company A died when a booby trap was detonated.
            </p>
            <p>
              On January 21, 1967, one Bobcat from Company C died from small arms fire and a medic died from shrapnel. Also on January 21, Company A located a tunnel complex with a main tunnel 600 meters long and also 10 branch tunnels. This was in the area of XT 650235, some 1500 meters south  west of the Saigon River and just to the north of the Rach Son Creek. The tunnel complex was searched for four days and over 60 pounds of documents were evacuated from the area.
            </p>
            <p>
              On January 26, 1967, Operation Cedar Falls ended.
            </p>
            <p>
              From January 27 thru January 30, 1967, the battalion conducted maintenance, training and prepared for future operations at Cu Chi Base Camp.
            </p>
            <p>
              One Bobcat from Company B was accidentally killed north of the Ben Muong Stream, on January 30th.
            </p>
            <p>
              During January 1967, eighteen Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Danny C. Barnes</li>
              <li>Willy V. Quast</li>
              <li>David Young</li>
              <li>Lynn A. Harris</li>
              <li>Arnez F. Miller Jr.</li>
              <li>Carlos M. Rodriguez</li>
              <li>David L. Sheehy</li>
              <li>Herbert H. Crowder</li>
              <li>Herschel L. Epps Jr.</li>
              <li>Larry G. Gray</li>
              <li>Frank J. Krebs</li>
              <li>Donald L. Helton</li>
              <li>Leo V. Silbert</li>
              <li>Morgan E. Savage</li>
              <li>James B. Simmons</li>
              <li>John L. Wilhelm</li>
              <li>Richard L. Parham.</li>
            </ul>
            <p>
              For the Quarterly Reporting Period of November 1, 1966 to January 31, 1967, the 25th Infantry Division(-) reported the following statistics: KIA- 123; WIA- 1029; MIA- 0; NBD- 0; NBI- 33.
            </p>
            <p>
              Administration: There still remained a shortage in Infantry NCOs. The casualty rate and rotation losses among these NCOs has created a shortage greater than the rate of fill. Other MOS that the Division Headquarters placed in the critical short category were: 05B20; 11D20; 11D40; 11F20; 11F40; 26C20; 45F20; 63E20; 67M20; 67Q20; 72B10; 74D20; 82C10; 82C20; 91C20; 96C20.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 13: Nui Ba Den</li>
              </ul>
            </div>
            <div class="oneMonth" data-section="feb">FEBRUARY</div>
            <p>
              On February 1, 1967, the battalion moved from Cu Chi to Tay Ninh. The battalion was attached and OPCON to the 196th Light Infantry Brigade. During the day one Bobcat from Company B died from small arms fire.
            </p>
            <p>
              On February 2, 1967, Company A, 4/31st Infantry conducted an airmobile assault into the area of XT 055684, some 7 kilometers west of Hwy 22 and the village of Trai Bi.
            </p>
            <p>
              At 0632 hours the 1/5th(M) left Tay Ninh and assaulted to the area where Company A, 4/31st Infantry was located. Lead elements of the 1/5th(M) linked up with the 4/31st at 1050 hours. A bridge was then airlifed to the site and installed by the 175th Engineer Company. The 1/5th(M) crossed the bridge and continued to XT 034717. The battalion secured an LZ for the helilift of the 4/31st Infantry(-) into the area at 1640 hours.
            </p>
            <p>
              On February 03, 1967, the 1/5th(M) commenced an attack at 0818 hours to the area of WT 9869, which was near the Cambodian Border south of the "Dog's Head."  At 0900 hours the Recon Platoon was dispatched to sweep the flank of the battalion. At 0906 hours a Recon APC detonated an AT mine with negative casualties. At 1049 hours Company A located a TA/312 telephone in the area of WT 995699. At 1201 hours Company A, 1/5th(M), secured an LZ for the 2/1st Infantry.
            </p>
            <p>
              At 1330 hours elements from Company B received fire from a 57 mm Recoilless Rifle while repairing a track that had broken down in the area of WT 999698. Two Bobcats were wounded. The Recon Platoon was dispatched to assist the Company B elements and while enroute received RR fire resulting in 2 Bobcats being wounded. Fire was returned and the Recon Platoon proceeded to link up with the elements from Company B.
            </p>
            <p>
              At 1459 hours, an APC from Company C detonated an AT mine in the area of WT 999701 resulting in 13 Bobcats being wounded. At 1510 hours, the Recon Platoon, still providing security for the Company B elements, started to receive heavy small arms fire from an estimated 15 to 20 VC in the area of WT 000697. At this time the Recon Platoon had elements of Company B and Company A with them. The APC of the Company A XO was hit by a RR round, killing him and two others on the APC instantly. The VC managed to overtake and occupy the APC, firing its .50 caliber machine gun. A man from Company B was wounded while attempting to take the APC under fire.
            </p>
            <p>
              "He was laying in a small depression next to me with real bad stomach wounds. We tried to comfort him and kept telling him he would be ok, but then all the color left his face and he died. I felt very helpless about not being able to do something for him," recalled a Bobcat that was with him.
            </p>
            <p>
              The APC was recovered at 1555 hours after air and artillery fire was placed into the area and the VC broke contact. During the day 5 Bobcats were killed and 24 were wounded.  The VC wore a mixture of camoflauged uniforms and black "pajama" type clothing. It was noted that they fought with considerable determination and exhibited good discipline and fire control.
            </p>
            <p>
              Elements of the battalion closed into a new battalion CP at 1750 hours in the area of WT 977698.
            </p>
            <p>
              On February 04, 1967, the battalion conducted S&D operations in the area surrounding their night base. At 0910 hours Company B discovered an uncompleted base camp at WT 976706. At 1520 hours, Company C engaged 2 VC at WT 996693, killing both. Among the items found with the bodies were 7 rounds of 57mm HEAT ammunition and a tripod.
            </p>
            <p>
              On February 05, 1967, at 0812 hours, an ambush patrol from Company A located at WT 969696 received fire from across the Tonle Roti River, which marked the border between Cambodia and South Viet Nam. The ambush returned fire into Cambodia, resulting in 2 VC being killed. One body fell into the river and the other was dangling in a tree. The ambush continued receiving fire from inside Cambodia until 0830 hours when they were retrieved by Company A.
            </p>
            <p>
              At 1006 hours, Company A departed the battalion base camp following Company B. At 1025 hours Company C departed the base camp enroute to link up with the 4/31st Infantry. At 1033 hours Company A received small arms fire from their left flank. The fire was returned with unknown results. At 1244 hours, Company A passed through Company B and assumed the lead. At 1335 hours in the area of WT 983666, Company A became involved in a fire-fight with a force of unknown size. They began receiving RPG-2 fire, rifle grenades and small arms fire. 2 APCs were hit by RPG-2 fire and one detonated a mine. Contact was broken at 1735 hours. Two Bobcats were killed and 18 were wounded in the fire-fight. As elements of Company A were searching the trench line area of the fight, a sniper shot and killed one Bobcat.
            </p>
            <p>
              The battalion established a new base camp at WT 996665. All elements closed the base by 1937 hours.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>
                  <a href="http://175thengineers.homestead.com/BridgeGadsdenVietnam.html" target="_blank">
                    Photographs from the 175th Engineers from this day
                  </a>
                </li>
                <li>
                  <a href="http://175thengineers.homestead.com/bridgerepair.html" target="_blank">
                    More related material from the 175th Engineers
                  </a>
                </li>
              </ul>
            </div>
            <p>
              On February 06, 1967, while conducting S&D operations in the area, elements of the battalion discovered a VC base camp and hospital at WT 988682. Documents found identified units of the Staff Directorate of COSVN. Several dead VC were located during the operations along with some radio equipment, weapons and ammunition.
            </p>
            <p>
              On February 07, 1967, Company B departed the battalion forward base to examine the area of WT 995685 after a B-52 strike. Company A and Company C(-) conducted S&D operations in the area of WT 9868. At 1405 hours Company A received fire from an estimated VC platoon resulting in one Bobcat wounded. At 1425 hours, Company A again made contact with the VC, who were wearing kakhi uniforms. At 1450 hours contact was broken but again reestablished at 1501 hours in the area of WT 964670. Air strikes were placed into the area where the VC were firing from. After the air strikes, Company A moved into the area and discovered VC bodies and a cache of 18 tons of rice. All elements closed the battalion forward base at WT 995664 by 1906 hours.
            </p>
            <p>
              On February 08, 1967, the battalion commenced operations "in accordance with the rules governing the TET truce period."  At 1035 hours Company A discovered VC bodies at WT 982666.  5 had been killed by small arms fire, 4 were in a bomb crater and 1 was in a covered bunker.  At 1335 hours, Company B received 3 rounds of small arms fire. At 1540 hours, in the area of WT 010688, Company B received automatic weapons fire from an unknown number of VC. Fire was returned with organic weapons. One Bobcat from Company B was killed in the initial exchange of fire. All elements closed the battalion forward base for the night.
            </p>
            <p>
              On February 10, 1967, an LP outside the battalion perimeter received 1 hand grenade at 0207 hours with negative casualties. At 1315 hours the Recon Platoon received 10 rifle grenades in the area of WT 989650. There were negative casualties and fire was returned with unknown results.  In the area of WT 995670, elements of the battalion located a very sophisticated training area consisting of 44 structures and fortifications, 2 class rooms, 2 mess halls, and a 75 X 30 meter rifle range complete with silouette targets.
            </p>
            <p>
              On February 12, 1967, Companies B and C departed the battalion base at 0730 hours and secured an LZ at FSB Delta in the area of WT 0364. The 2/1st Infantry was airlifted into the LZ. At 0949 hours the battalion headquarters and Company A departed the forward base and established a new battalion forward base at WT 984616. At 1140 hours, Companies B and C departed FSB Delta and closed the new battalion forward base at 1620 hours. During the evening 7 rifle grenades were received into the base.
            </p>
            <p>
              On February 13, 1967, at 0815 hours, the battalion commenced S&D operations in the area of WT 9962.Elements discovered several VC base camps and an ordnance factory at WT 986642. It contained bombs, artillery rounds, hand grenades and tools and molds for manufacturing explosive devices. That night the battalion forward base received 5 rounds of mortar fire.
            </p>
            <p>
              On February 14 and 15, 1967, the battalion continued S&D operations in the area of WT 0256 and 0358. On February 15th, seventeen rounds of 60mm mortar fire was received.
            </p>
            <p>
              On February 16, 1967, the battalion broke camp at 0730 hours and moved to the bridge site at XT 0559. Lead elements crossed the bridge at 0800 hours and the battalion continued movement southeast to Tay Ninh, where they closed at 1330 hours.
            </p>
            <p>
              War Zone C was located north of Tay Ninh City bounded on the north and the west by the Cambodian border. This area was a confirmed VC stronghold. The entire area was characterized by dense forest, with numerous enemy bunkers, tunnels and base camps. On February 22, 1967, the 2nd Brigade of the 25th Infantry Division, began Operation Junction City Alternate. The 2nd Brigade area of operatons was a portion of War Zone C which was heavily wooded and in which no US units had operated in for over a year. It was known that the area contained a lot of bunkers and base camp areas.
            </p>
            <p>
              On February 22, 1967, the 1/5th(M) began Operation Junction City Alternate by moving from the area of Trai Bi at XT 1170 to secure FSB Pershing at XT 1375, which was some 3000 meters southeast of the junction of Highways 22 and 247.
            </p>
            <p>
              On February 23, 1967, the battalion established a forward base at XT 151765, just to the north of Highway 247 and 5000 meters east of Highway 22. Elements of the battalion located a base camp of 5 bunkers and 15 structures north of the battalion forward base. 2 APCs detonated AT mines resulting in 5 Bobcats being wounded. One Bobcat from Company A died of his wounds.
            </p>
            <p>
              On February 24, 1967, elements of the battalion located two base camps containing arms, ammunition and supplies. During the day, 12 Bobcats were wounded and 1 APC was damaged when VC were engaged at XT 166804. The VC employed command detonated mines. 3 of the VC killed in the exchange were identified as members of the 272nd VC Regiment.
            </p>
            <p>
              On February 25, 1967, while further searching a VC base camp located on the 24th at XT 154834, an unknown number of VC were engaged. Among the items found in the base camp area after the fire-fight were 300 rounds of 105mm artillery ammunition.
            </p>
            <p>
              On February 27, 1967, the 1/5th(M) moved to secure FSB Foche for the emplacement of the 1/8th Artillery and the 2nd Brigade forward command post.
            </p>
            <p>
              On February 28, 1967, the battalion conducted S&D operations around and also provided security for the fire support base.
            </p>
            <p>
              During February 1967, eleven Bobcats died in Viet Nam. They Were: Ervin L. Laird; Jackson Thomas; Paul T. Short Jr.; Marco J. Baruzzi; Raymond F. Demory; James E. Bostock; Joseph M. Brady; Henry R. Lopez; Jack M. Secrest Jr.; and Landon C. Ray.
            </p>
            <div class="oneMonth" data-section="mar">MARCH</div>
            <p>
              On March 01, 1967, the battalion conducted S&D operations to the north and east of FSB Foche, which was located approximately 18 kilometers southwest of Katum. At 0952 hours, an APC detonated an AT mine resulting in nine Bobcats being wounded and moderate damage to the APC. To the east, elements engaged an unknown number of VC, killing 2 and capturing 1. Five Bobcats were wounded in the exchange of fire.
            </p>
            <p>
              On March 02, 1967, Companies A and B conducted S&D operations to the northeast of FSB Foche. An enemy base camp was located and destroyed at XT 165880. Company C provided security for the fire support base.
            </p>
            <p>
              On March 03, 1967, Company A provided security for the base while Companies B and C conducted S&D operations in the area.
            </p>
            <p>
              On March 04, 1967, the battalion provided security for the air extraction of the 2nd Brigade Headquarter's forward elements from the fire support base. At 1300 hours the 1st Battalion(M) 5th Infantry was attached and OPCON to the 11th Armored Cavalry Regiment.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 14 "French Fort."</li>
              </ul>
            </div>
            <p>
              On March 05, 1967, a Bobcat from Company B was killed by shrapnel when the battalion forward base received a 120 round 60mm and 82mm mortar barrage.
            </p>
            <p>
              On March 13, 1967, a Bobcat from Company C was shot and killed.
            </p>
            <p>
              On March 14, 1967, the 1/5th(M)(-) became OPCON to the 196th Light Infantry Brigade. At 1830 hours the battalion(-) closed the "French Fort", located 7 kilometers north of Nui Ba Den at XT 2868.
            </p>
            <p>
              On March 15, 1967, the battalion units conducted local S&D operations and escorted convoys in the area of the French Fort. At 1300 hours the battalion established a command post about 3 kilometers northwest of the French Fort at XT 267734. At 1635 hours, the Recon Platoon was escorting a convoy north on Highway 4 when the lead APC was struck by an RPG-2 round near XT 273722. Two Bobcats were wounded. At 1640 hours an APC from Company B was hit by an RPG-2 round in the same area. Four Bobcats were wounded and one died of his wounds later in the day. The fire was returned with SA and AW fire with unknown results.
            </p>
            <p>
              At 2000 hours the Cu Chi Base Camp received 50 rounds of 82mm mortar fire and 25 rounds of 75mm recoilless rifle fire.
            </p>
            <p>
              On March 16, 1967, between 0135 and 0200 hours, 150 rounds of 60mm, 82mm mortar and 75mm RR rounds were received on the 196th LIB command post located at the French Fort. 4 men were killed and 22 were wounded. One of those killed was a Bobcat at the battalion's rear supply area, which was also located at the fort. 2 Bobcats from the unit were also among the wounded.
            </p>
            <p>
              Units of the battalion cleared and secured roads and then conducted convoy escort from the junction of Highways 4 and 247, south to the French Fort. At 1320 hours, the Recon Platoon located an AT mine in the road at XT 270766 and blew it in place.
            </p>
            <p>
              On March 17, 1967, the 1/5th(M) conducted S&D operations east of Highway 4. At 1600 hours, Company C, 1/5th(M) became OPCON to the 2/34th Armor. Company C, 2/34th Armor became OPCON to the 1/5th(M).
            </p>
            <p>
              On March 18, 1967, the battalion(-) conducted S&D operations west to XT 193726 and at 1530 hours the battalion established a forward base at that location. At 1415 hours, a convoy being escorted by elements of Company B. A command detonated mine was set off against one of the vehcles in the convoy. At 1600 hours, the Recon Platoon was escorting a convoy on Highway 4, south from Prek Klok, when a vehicle was struck by a burst of automatic weapons fire. Fire was returned and gunships were employed with unknown results.
            </p>
            <p>
              On March 19, 1967, units of the battalion conducted S&D operations in the area. Cross attachment with the 2/34th Armor was terminated at 1330 hours. One Bobcat from Company C was accidentally killed. All units closed the new battalion forward base located at XT 238726 by 1700 hours.
            </p>
            <p>
              On March 20, 1967, the Recon Platoon and Company C(-) conducted convoy escort from Soui Da to Prek Klok after clearing and securing the highway. Companies A, B and C(-) conducted S&D operations in the area. Company A had one APC hit a large mine at 1045 hours at XT 241805.  Five Bobcats were wounded and dusted off. All units closed the battalion command post by 1650 hours.
            </p>
            <p>
              On March 21, 1967, the battalion conducted road security and S&D operations in the area.
            </p>
            <p>
              On March 22, 1967, the Recon Platoon with personnel from the 169th Engineers cleared and secured the road from the "French Fort" to the Soui Da turnoff. Company A conducted S&D operations north to the 82 grid line. Companies B and C conducted S&D operations east of Highway 4. At 0825 hours, an APC from Company A hit an AT mine resulting in one Bobcat being wounded.  At 0850 hours, Company C had an APC detonate a mine at XT 273744 resulting in eight Bobcats being wounded. At 1130 hours, an APC from Company A hit a mine at XT 245815. Four Bobcats were wounded. All elements closed the battalion forward base, now located at XT 255755, by 1700 hours. One of the wounded Bobcats from Company A died of his injuries.
            </p>
            <p>
              On March 23, 1967, Company A provided security for the battalion base. Company B and part of Company C conducted S&D operations in the area. The Recon Platoon and part of Company C conducted road security and convoy escort operations.
            </p>
            <p>
              On March 24, 1967, the Recon Platoon conducted road security and escort on Highway 4 from the "French Fort" to the Soui Da turnoff. Company B remained at the battalion base for security. Company C secured a drop zone for a resupply airdrop. Company A screened and blocked from XT 3074 to 3076.
            </p>
            <p>
              On March 25, 1967, Recon Platoon and one platoon from Company C cleared and secured the roadway and escorted convoys. At 1305 hours, one platoon from Company C secured a drop zone at XT 267786. The drop was 90% effective. 10% was damaged and recovered. One platoon from Company C secured a crossing site while the 175th Engineers implaced an AVLB. Companies A and B crossed the bridge and conducted S&D operations from XT 3180 to 3178. There was negative contact and units closed the new battalion base at Prek Klok by 1900 hours.
            </p>
            <p>
              On March 26, 1967, the Recon Platoon and one platoon from Company A were assigned route clearing and convoy escort duty from Prek Klok to Soui Da. The battalion(-) established blocking positions in coordination with sweeps made by the 3rd Brigade, 4th Infantry Division. At 1120 hours, an APC from Company B struck a mine at XT 295737. One Bobcat was wounded. At 1300 hours, one platoon from Company A secured a drop zone for a resupply drop at XT 269711.
            </p>
            <p>
              On March 27, 1967, the Recon Platoon went to the "French Fort" and escorted the 3/13th Artillery to Prek Klok, closing at 0925 hours. Companies A and C departed the base at 0730 hours. At 1155 hours an AVLB was placed across the stream at XT 310804. Elements then conducted S&D operations east to XT 355933. Elements of Company B secured a drop zone for two resupply drops. One was at 1230 hours and the other at 1600 hours.
            </p>
            <p>
              On March 28, 1967, the battalion began operations to secure areas for two new fire support bases. Companies A and C secured the first, untill they were relieved by the 4/31st Infantry at 1115 hours. Company B and the Recon Platoon secured the 2nd area at Katum. While enroute Company B had an APC detonate a mine resulting in extensive damage to the track and one Bobcat wounded. At 1611 hours the battalion CP, Companies A, C and the Recon Platoon(-) closed the fire support base at Katum. Company B secured a resupply drop zone and remained there for the night. Recon Platoon(-) secured an AVLB at XT 289865.
            </p>
            <p>
              On March 29, 1967, the battalion secured an LZ for the airlift of the 2/1st Infantry Battalion from the "French Fort."  The 1/5th(M) then conducted local S&D operations and closed the new Battalion base at XT 276935, some 5000 meters northwest of Katum and 6000 meters south of the Cambodian border.
            </p>
            <p>
              On March 30, 1967, Companies A and B conducted S&D operations in the area, and the Recon Platoon conducted a reconnaissance of the area.  Company C departed the battalion base to escort a convoy from Prek Klok. At 1134 hours, one APC from the Recon Platoon detonated an AT mine at XT 278914. At 1340 hours Company C engaged an unknown size enemy force at XT 249779. Two APCs were hit by 57mm recoilless rifle rounds. One of them was struck in the rear ramp with two rounds. Six Bobcats were wounded. Gunships overhead gave covering fire and contact was broken. The battalion established a new base at XT 281969, only 1500 meters south of the Cambodian Border.
            </p>
            <p>
              On March 31, 1967, Companies A, B, and C conducted S&D operations to the west of the battalion base. The Recon Platoon remained in reserve with the battalion command group. Company A made a brief contact at 0830 hours, exchanging small arms fire with negative results.
            </p>
            <p>
              At 1034 hours, Company B had one APC struck by an RPG-2 round at XT 229973. The fire was received from a trench line less than 1,000 meters south of the Cambodian Border. At 1052 hours while searching the area, Company B received more RPG-2 fire with negative hits. The area was taken under fire with 81mm mortars and organic weapons fire. At 1059 hours, 2 Company B APCs were hit by RPG-2 rounds. At 1125 hours, another APC was hit by RPG fire. Contact was broken at 1140 hours. At 1345 hours, Company B made contact in the same general area. One APC was hit by RPG fire, and contact was immediately broken. In all, four Bobcats from Company B were killed and 16 were wounded.
            </p>
            <p>
              At 1645 hours an APC from Company C hit an AT mine, resulting in 4 Bobcats being wounded. All units closed the battalion base by 1815 hours.
            </p>
            <p>
              During March 1967, ten Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Gerald J. Breen</li>
              <li>Jerry L. Borgens</li>
              <li>James P. Vadbunker</li>
              <li>Robert S. Liszcz</li>
              <li>Viril L. Austin</li>
              <li>Charles M. Douglas</li>
              <li>Kenneth L. Breshears</li>
              <li>Charles C. Dickey Jr.</li>
              <li>Gary F. Schuler</li>
              <li>John A.Todi</li>
            </ul>
            <div class="oneMonth" data-section="apr">APRIL</div>
            <p>
              On April 01, 1967, Companies A and B conducted S&D operations in the area without enemy contact. Company C secured the battalion forward base while the Recon Platoon secured a drop zone for a resupply drop.
            </p>
            <p>
              On April 03, 1967, the battalion conducted S&D operations in the area. At 1337 hours, Company A engaged some VC at XT 210945. A check of the area resulted in locating 23 60mm mortar rounds and 23 82mm mortar rounds, along with documents and miscellaneous equipment.
            </p>
            <p>
              On April 04, 1967, at 1400 hours, an APC from Company C hit a mine. After striking the mine the APC was hit by a LAW fired from a bunker. Six Bobcats were wounded. At 1550 hours, while searching an area some 8,000 meters due west of Katum, an APC from Company A detonated an AT mine at resulting in five Bobcats being wounded. At 1558 hours, Company A located a communications wire line at XT 240906. While checking the line, an unknown number of VC opened fire with small arms and automatic weapons fire. Fire was returned and the VC broke contact at 1615 hours. One Bobcat from Company A was killed and one was wounded in the exchange of fire.
            </p>
            <p>
              On April 05, 1967, the battalion conducted S&D operations in the area of XT 1582, 1588, 2182, 2188, with negative contact. The Recon Platoon conducted convoy escort for Battery B, 2/35th Artillery.
            </p>
            <p>
              On both April 06 and 07, the battalion conducted S&D operations without contact.
            </p>
            <p>
              On April 08, 1967, the 1/5th(M) secured an LZ for the extraction of the 2/1st Infantry. The battalion then moved overland to Tay Ninh.
            </p>
            <p>
              From April 09, 1967 to April 21, 1967, the 2nd Brigade participated in in an operation in Gia Dinh Province with the mission of interdicting VC supply routes to and from the Saigon area.
            </p>
            <p>
              On April 22, 1967, the 1/5th(M) began another operation in one of their favorite “homes away from home.”
            </p>
            <p>
              Operation Manhattan had the objective of destroying VC elements, supplies and bases in the Ho Bo Woods, the Boi Loi Woods and along the Saigon River. The 2nd Brigade area of operations was the lower Boi Loi and Ho Bo Woods area.
            </p>
            <p>
              An after action report stated "It apperared from the start that the VC had been forwarned of the operation. There was plain evidence that the VC, shortly before the operation began, had deliberately and unhurriedly evacuated the area. They employed AT and AP mines and booby traps along with 2 and 3 man sniper teams to delay friendly forces."
            </p>
            <p>
              One Bobcat from the Recon Platoon was killed when an APC detonated a mine.
            </p>
            <p>
              On April 23, 1967, the 1/5th(M) secured an LZ in the area of XT 5331 for the 1/27th Infantry. The battalion also secured routes of communication. Three APCs detonated AT mines resulting in two Bobcats from Company C being killed and three wounded.
            </p>
            <p>
              On April 24, 1967, the battalion conducted S&D operations in the area of XT 5131 without enemy contact.
            </p>
            <p>
              On April 25, 1967, the battalion continued S&D operations in the area. An APC from Company A detonated an AT mine resulting in one Bobcat being killed and eight others being wounded.  Only a few bunkers were located and destroyed during the day.
            </p>
            <p>
              On April 26, 1967, units of the battalion continued S&D operations. At 1410 hours Company B came upon a VC who was in the process of setting up a Chicom Claymore mine at XT 520324. He was killed in the exchange of fire. The area of the Boi Loi was once again heavily booby-trapped. Eight Bobcats were wounded during the day.
            </p>
            <p>
              On April 27, 1967, units of the battalion located an underground VC hospital complex. Again mines and booby traps were encountered in the area of operations. One Bobcat was killed and fifteen were wounded during the day.
            </p>
            <p>
              On April 28 and 29, 1967, the battalion continued operations in the same area with no enemy contact. Some bunkers and tunnels were located and destroyed. On April 29, the battalion assumed responsibility for the security of engineer activities in the area.
            </p>
            <p>
              On April 30, 1967, the battalion minus Company C conducted S&D operations from XT 538338 to the Saigon River and back without contact.
            </p>
            <p>
              Company C was attached to the 1/27th Infantry. At 1005 hours the unit made contact at XT 578285, while conducting a sweep. The units remained in a fire-fight until 1115 hours, at which time the VC broke contact after friendly artillery was employed. One Bobcat from Company C was killed and two were wounded during the encounter.
            </p>
            <p>
              During April 1967, seven Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>James K. Lindsey</li>
              <li>James P. English</li>
              <li>Stephen L. Colopy</li>
              <li>James L. Russell</li>
              <li>Gary L. Doose</li>
              <li>Rom Worley</li>
              <li>Gene D. Smith</li>
            </ul>
            <p>
              For the Quarterly Reporting Period of  February 01, 1967 thru April 30, 1967 the 25th Infantry Division(-) reported the following: KIA- 116; WIA- 1,239; MIA- 0; NBD- 8; NBI- 46.
            </p>
            <p>
              Use of highways by convoys continued to be the primary mode of resupply to Cu Chi, Tay Ninh and Dau Tieng base camps. During the last three months there were 448 convoys between Saigon and Cu Chi. Between Cu Chi, Tay Ninh and Dau Tieng there were 172 convoys.
            </p>
            <p>
              Since July 1966 there have been 27 VC agents taken into custody from among the division base camp’s indigenous work force.
            </p>
            <p>
              There continued to be a critical shortage of Infantry and Artillery NCOs in grades E-5 and E-6.
            </p>
            <div class="oneMonth" data-section="may">MAY</div>
            <p>
              On May 01, 1967, the1/5th(M)(-) conducted local S&D operations without contact. Company C remained attached to the 1/27th Infantry.
            </p>
            <p>
              On May 02, 1967, the battalion conducted S&D operations in the area of XT 5333 and also provided resupply convoy escort.
            </p>
            <p>
              On May 03, 1967, the 1/5th(M) commenced a two day sweep of the Ho Bo Woods. At 0925 hours, Company A made contact with an unknown number of VC at XT  604267.  Four Bobcats from Company B were killed when an APC hit a mine. There was intermittent contact throughout the day.
            </p>
            <p>
              On May 04, 1967, the battalion continued the sweep through the Ho Bo. Six Bobcats were killed during the day by mines and booby traps; four from Headquarters Company, one from Company A and one from Company B.
            </p>
            <p>
              On May 05, 1967, elements of the battalion conducted S&D operations in the area and also conducted a road sweep to Trang Bang. There was no enemy contact during the day.
            </p>
            <p>
              On May 06, 1967, the battalion conducted operations in the middle of the Boi Loi Woods in the area of XT 5533. They also secured engineer operations in the area. There was no enemy contact.
            </p>
            <p>
              On May 07, 1967, the battalion continued S&D operations and the securing of engineer activities. At 0840 hours, an APC from the Recon Platoon hit an AT mine. One Bobcat was killed and three were wounded by the explosion.
            </p>
            <p>
              On May 08, 1967, the battalion continued operations without enemy contact.
            </p>
            <p>
              On May 09, 1967, the battalion continued security for engineer activities until 1500 hours. At that time they moved from XT 554337 to the Cu Chi Base Camp, ending their participation in Operation Manhattan.
            </p>
            <p>
              From May 10 thru May 12, 1967, the battalion remained at Cu Chi Base Camp conducting maintenance and preparing for future operations.
            </p>
            <p>
              On May 13, 1967, Company A provided the Cu Chi Base Camp reaction force. Other units of the battalion conducted “roadrunner” operations on Highway 8A, from Cu Chi to Bao Trai and Fire Support Base Nickel, located 3 ½ kilometers east of Bao Trai at XT 565045. This began the battalion’s participation in Operation Kolekole which was concentrated in the areas of Duc Hoa, Bao Tri, Hiep Hoa and Loc Giang as well as along the Oriental River. The operation would “officially” begin on May 14, 1967.
            </p>
            <p>
              On May 14, 1967, elements of the battalion continued roadrunner operations to Bao Trai and also provided security southwest of Bao Trai at XT 527043. At 1225 hours an APC from Company B detonated an AT mine resulting in four Bobcats being wounded. Company A remained the Cu Chi Base Camp reaction force.
            </p>
            <p>
              On May 15 and 16, 1967, the battalion continued roadrunner and security operations in the area of Bao Trai. Company A continued its mission of base camp reaction force.
            </p>
            <p>
              On May 17, 1967, the battalion(-) conducted S&D operations in the area of Ap Dong Hoa(3),  7 kilometers west of Bao Trai near the Oriental River. There was no enemy contact.
            </p>
            <p>
              On May 18, 1967, the 1/5th(M)(-) conducted S&D operations south, north and northwest of Bao Trai.  At 1450 hours the Battalion Commander’s APC detonated an AT mine on Highway 10, one kilometer north of the junction of Highway 7A. One Bobcat was killed and four were wounded.
            </p>
            <p>
              On May 19 and 20, 1967, the battalion(-) continued S&D operations to the east of Bao Trai in the area of  XT 5604. On the 20th, Company C assumed the role of Cu Chi Base reaction force. One Bobcat from Company C was killed by small arms fire.
            </p>
            <p>
              On Sunday, May 21, 1967, the 1/5th(M)(-) along with the 1/27th Infantry(-), conducted a cordon and search of  Ap Duc Ngai (1), located north of Bao Trai, with no enemy contact. One Bobcat from Company C was killed by an explosive device during the day.
            </p>
            <p>
              On May 22, 1967, the battalion conducted cordon and search operations with the 1/49th Infantry(ARVN) east of Bao Trai in the area of XT 5903. They then conducted S&D operations from that area to FSB/PB Nickel with negative enemy contact.
            </p>
            <p>
              On May 23, 1967, the battalion(-) conducted roadrunner operations during the hours of darkness. During daylight they remained at FSB/PB Nickel.
            </p>
            <p>
              From May 24 to 31, 1967, the battalion conducted roadrunner, search and destroy, cordon and search and security operations in the Bao Trai area with light, intermittent enemy contact.
            </p>
            <div class="vietnamLogLinkBox">
              <ul>
                <li>Map 15  Duc Hoa area</li>
              </ul>
            </div>
            <p>
              During May 1967, fourteen Bobcats died in Viet Nam. They were:  James H. Flickinger; Chester G. Jordan; Glendell Morgan; Lee H. Russ; Thomas A. Brynelsen; John S. Cartwright; Ralph W. Crytzer Jr.; Jack R. Lenner; James N. Law; William E. McGinnis II; Daniel M. Kasten; Ronny L. Palmer; Mack E. Gregory;  and David A. Haraldson.
            </p>
            <div class="oneMonth" data-section="jun">JUNE</div>
            <p>
              From June 01, 1967 to June 06, 1967, the battalion continued a variety of operations in the Bao Trai, Duc Hoa and Cu Chi areas.
            </p>
            <p>
              On June 02, 1967, Company C had an ambush patrol out. An APC from Company C was on road patrol near the ambush site and hit an AT mine. The track was flipped over onto its top. After the explosion, the ambush patrol went to the APC to help the wounded and secure the area. The platoon sergeant was lying next to the track with both his legs pinned underneath it. The driver was dead in the driver’s hatch.
            </p>
            <p>
              On June 07, 1967, the battalion(-) conducted roadrunner operations between Bao Trai and Cu Chi on Highway 8A.  An APC from Company B hit a mine and burned. Six Bobcats were killed. Two of the bodies burned inside the track and could not be recovered until later in the day. Elements of the battalion also conducted a seal and search of Tho Mo on Highway 10, between Bao Trai and Duc Hoa. Elements also continued security missions in the area.
            </p>
            <p>
              From June 08, 1967 to June 13, 1967, the battalion continued various types of operations in the same general area. On June13, a “County Fair” Operation was conducted at Thoi Moi (1), southeast of Bao Trai.
            </p>
            <p>
              On June 14, 1967, the battalion conducted roadrunner operations in the vicinity of Bao Trai. Company C conducted combined security operations with one platoon of the 2/49th Infantry (ARVN) on the road running between Duc Lap and Duc Hoa. An APC from Company C detonated a mine. Two Bobcats were killed by the blast.
            </p>
            <p>
              On June 15, 1967, the battalion conducted local security operations in the vicinity of Bao Trai. Company C worked the road between Duc Lap and Duc Hoa with the 49th Infantry (ARVN).
            </p>
            <p>
              On June 16, 1967, Company A conducted road security operations with the 49th ARVN Infantry. The battalion(-) conducted a cordon and search in the area of Tho Mo, located on Highway10 about halfway between Bao Trai and Duc Hoa.
            </p>
            <p>
              On June 17, 1967, Company C conducted a combined sweep operation of the FSB Nickel perimeter along with an ARVN MI squad.  The remainder of the battalion conducted security operations.
            </p>
            <p>
              On June 18, 1967, the 1/5th(M) along with the 1st and 2nd Battalions of the 27th Infantry conducted a cordon and search operation of Giong Lon, located southeast of Bao Trai at XT 6102.
            </p>
            <p>
              On June 19, 1967, Company B conducted road security operations with elements of the 2/49th ARVN Infantry. The remainder of the battalion conducted local security operations.
            </p>
            <p>
              On June 20, 1967, the Recon Platoon conducted road clearing operations on Highway 8A south of Cu Chi, along with one platoon of ARVN Soldiers from the 2/49th Infantry. The battalion(-) conducted a sweep between Highways 8A and 9A, moving from the southwest to the northeast.
            </p>
            <p>
              From June 21, 1967 to June 30, 1967, the battalion continued operations in the area of Bao Trai and FSB Nickel. The units of the battalion conducted combined operations with various elements of the Army of the Republic of Viet Nam. On June 24, there was a ceremony celebrating the reopening of Highway10 between Duc Hoa and Bao Trai. On the 29th of June units of the battalion conducted “Eagle Flights” to four landing zones east of Bao Trai with negative enemy contact.
            </p>
            <p>
              During June 1967, Eight Bobcats died in Viet Nam. They were: Everdene Baker Jr.; Harris V. Davis; William L. Evans; Rex A. LaDuke;  Luis E. Milan-Anavitarte; Kenneth P. Newton; Robert L. Holland;  and Joseph H. Urmann.
            </p>
            <div class="oneMonth" data-section="jul">JULY</div>
            <p>
              From July 01, 1967 to July 09, 1967, the battalion concentrated its operations to the southeast of Bao Trai. Numerous combined operations were conducted with elements of the ARVN 49th Infantry. Airmobile combat assaults were made with no enemy contact, however, enemy fortifications were located and destroyed.
            </p>
            <p>
              On July 10, 1967, the battalion shifted its operations to the northwest of Bao Trai, along the Oriental River.
            </p>
            <p>
              On July 12, 1967, the battalion conducted S&D operations in the area bounded by Highways 6A, 10, 7A and the Oriental River. Company A located and destroyed 55 bunkers. Company B located and destroyed 9 bunkers, one tunnel and several booby traps.
            </p>
            <p>
              On July 13, 1967, the battalion encountered light and sporadic enemy contact in the area of Loc Giang, located southeast of the road junction of Highways 10 and 6A. Two Bobcats were wounded by small arms fire and dusted off.
            </p>
            <p>
              At 2135 hours Cu Chi Base Camp came under mortar attack. 16 rounds of 82mm Mortar fire impacted in less than one minute. 15 soldiers were wounded.
            </p>
            <p>
              On July 14, 1967, at 0720 hours one Bobcat from Company B was wounded when an anti-personnel mine was detonated north of Highway 6A between Loc Hua and the Oriental River. At 0721 hours, an APC from Company A detonated an AT mine with negative casualties.
            </p>
            <p>
              At 0745 hours, one Bobcat from Company A was killed and two were wounded when a man stepped on a mine near Loc Thuan. At 0900 hours, Company C suffered four wounded when two booby traps were detonated. Elements of the battalion located and destroyed numerous booby traps during the day.
            </p>
            <p>
              On July 15, 1967, while working the same area, Company B located a munitions cache. Among the items found were 60 81mm mortar rounds, 43 60mm mortar rounds and 32- 2.75inch rockets.
            </p>
            <p>
              From July 16 thru 19, 1967, the battalion conducted S&D operations in the area of Loc Giang. On July16, a search operation was conducted with the Trang Bang Regional Forces Company. Elements of the battalion provided security for engineer activities in the area.
            </p>
            <p>
              On July 24, 1967, the battalion continued local security and S&D operations in the Loc Giang area. Companies A and B had light enemy contact. At 2000 hours Company B suffered four wounded when an AT mine was detonated.
            </p>
            <p>
              At 2328 hours, Dau Tieng Base Camp received 70 82mm Mortar rounds impacting inside the base perimeter and 30 rounds impacting outside the perimeter. One aircraft was destroyed and 24 received substantial damage. 50 personnel were wounded.
            </p>
            <p>
              From July 25 to July 31, 1967, the battalion continued working the Loc Giang area. Security was provided to engineer and artillery activities in the area. S&D operations were conducted along the Oriental River. On July 26th, Company A suffered two wounded when a booby trap was detonated at 1115 hours in the area of XT 435175, north of Highway 6A.
            </p>
            <p>
              At 1320 hours, another man from Company A was wounded from a booby trap in the same general area. On July 27th, airmobile combat assaults were made on the east and west sides of the Oriental River. On July 28th, Company C had one man wounded from a booby trap explosion. On July 29th, four airmobile combat assaults were conducted by units of the battalion along with one Company of CIDG personnel from Hiep Hoa. Enemy contact was light and scattered. On July 30th, elements of the battalion continued to provide security for engineer and artillery activities in the area. Three Bobcats from Company C were wounded when a booby trap was detonated. On July 31st, S&D operations continued in the area.
            </p>
            <p>
              During July 1967, one Bobcat died in Viet Nam. He was:
            </p>
            <ul>
              <li>Guillermo Munoz</li>
            </ul>
            <p>
              For the Quarterly Period of May 01, 1967 to July 31, 1967 the 25th Infantry Division reported the following: KIA: 123;   WIA: 1331;   MIA: 0;   DOW: 15;   NBD: 8;   NBI: 93.
            </p>
            <p>
              There continued to be a shortage of approximately 50% of the authorized Infantry NCOs in grades E-5 and E-6 for the Division.
            </p>
            <p>
              Convoys: Cu Chi to Saigon – 202</br>
              Saigon to Cu Chi – 176</br>
              Cu Chi to Tay Ninh / Dau Tieng – 176</br>
            </p>
            <p>
              The 25th Infantry Division Quartermaster Bath Unit reported that “extensive support” was given to the 1st Bn(M), 5th Infantry and to the 4th Bn, 9th Infantry during field operations this reporting quarter.
            </p>
            <p>
              A summary of enemy activities noted that VC activities for the Quarter consisted mainly of harassing attacks and tactics (Mines, booby traps, ect). These were directed toward delaying operations that were in support of rural development. There were also many acts of assassination and kidnapping against the civilian populace.
            </p>
            <div class="oneMonth" data-section="aug">AUGUST</div>
            <p>
              On August 01, 1967, security for engineer and artillery activities continued to be provided by units of the battalion. S&D operations were conducted in the Loc Giang area and an airmobile combat assault was made into an LZ 4 kilometers south of Trang Bang.
            </p>
            <p>
              On August 02, 1967, airmobile combat assaults were made into three different landing zones southeast of Loc Giang along route 10. Enemy contact was light and 2 VC were killed. Security for the activities of engineer and artillery units in the area was provided by units of the battalion.
            </p>
            <p>
              On August 04, 1966, at 1025 hours, a grenade factory was located 1 kilometer north of highway 6A, along the Oriental River at XT 406169. At 1420 hours, a second grenade factory was located several hundred meters to the northeast of the first location.
            </p>
            <p>
              On August 05, 1967, the 1/5th(M)(-) conducted a cordon and search operation in the area of Loc Binh which is located 1 kilometer southeast of the junction of Highways 10A and 6A. That evening at 2145 hours three Bobcats were wounded by enemy mortar fire.
            </p>
            <p>
              On August 06, 1967, at 1430 hours, a munitions factory was located in the area of XT 419180. This was only a couple of hundred meters north of the grenade factories located on August 4.
            </p>
            <p>
              On August 07, 1967, at 1530 hours, a large ammo cache was located in the area of XT 404169, near the banks of the Oriental River.
            </p>
            <p>
              The battalion continued to provide security for engineer and artillery units in the area. On August 9th, Company C had one man wounded from a booby trap. On August 10th, combat airmobile assaults were made into 5 different LZs. Contact was light. At 1145 hours, Company A had 4 men injured by a charging water buffalo in the area of XT 4713. On August 11th, S&D operations continued in the area. At 1215 hours, the Recon Platoon had an APC detonate an AT mine causing two Bobcats to be wounded. On August 12th, a munitions cache containing 268 Chicom grenades, 12 grenade launchers and assorted small arms ammunition was located at XT 414172. Again, this was in the same general area as the munitions factories that had been located earlier in the month. On August 13th, at 0630 hours, a Bobcat from Company C was wounded by a booby trap and dusted off. On August 16th, a small weapons cache was located along the Oriental River at XT 397184. Company C engaged four VC on August 17th and killed all four. At 1241 hours on August 18th, Company A located a weapon’s cache at XT 432146. At 1545 hours Company C located a weapon and ammunition cache at XT 430127.
            </p>
            <p>
              On August 19, 1967, elements of the battalion continued to secure engineer work areas and to provide security for artillery units. At 0515 hours, an ambush patrol from the Recon Platoon that was set up on the Oriental River had one man evacuated with a gunshot wound.
            </p>
            <p>
              On August 20, 1967, elements of the battalion conducted airmobile combat assaults into eight different landing zones. Contact was light and sporadic.
            </p>
            <p>
              On August 22, 1967, at 1100 hours a Chieu Hoi directed the Recon Platoon to a location were several weapons were discovered. At 1425 hours another Chieu Hoi led Company C to a 1,400 pound rice cache at XT 453147.
            </p>
            <p>
              On August 24, 1967, an ambush patrol from Company C engaged a motorized sampan on the Oriental River at 0255 hours, sinking the boat. Elements of the battalion conducted airmobile combat assaults. At 1040 hours, Company A suffered two Bobcats wounded from a booby trap at XT 459039.  Within the next hour the company located 3 small caches in the same area, containing small arms and mortar ammunition.
            </p>
            <p>
              On August 25, 1967, the battalion continued Eagle Flights in the Loc Giang area. That afternoon, 11 detainees and 1 VC POW were apprehended and turned over to Vietnamese authorities.
            </p>
            <p>
              On August 26, 1967, the Recon Platoon was led to a tunnel at XT 412165 by the VC POW of the previous day. One Chicom carbine and 200 rounds of ammunition were found inside the tunnel located several hundred meters north of Highway 6A. Eagle Flights were conducted to an area where a Chieu Hoi stated that a weapons cache was located. No cache could be found.
            </p>
            <p>
              On August 28, 1967, at 1535 hours, Company C with the assistance of a Hoi Chanh located and destroyed 2 tunnels and 4 hidden spider holes. At 1900 hours, a Company C ambush patrol engaged 2 sampans and 5 VC on the Oriental River at XT 406143. The sampans, loaded with cargo were sunk and the VC were killed in the engagement.
            </p>
            <p>
              On August 29, 1967, the battalion continued to provide security for engineer elements working on Highway 10 and also conducted S&D operations in the area.
            </p>
            <p>
              On August 30, 1967, the Recon Platoon engaged and sunk a sampan on the river. Elements also assisted S-2 personnel in apprehending a female who was identified by Hoi Chanhs as a VC nurse.
            </p>
            <p>
              During August 1967, no Bobcats died in Viet Nam.
            </p>
            <div class="oneMonth" data-section="sep">SEPTEMBER</div>
            <p>
              On September 01, 1967, the 1/5th(M) conducted S&D operations in the Loc Giang area and provided security for engineer work areas and artillery units. Three Bobcats from Company C were wounded when a booby trap was detonated at 0925 hours near Loc Hoa at XT 419180. Company A was led to a tunnel by a Hoi Chanh near Xom Mia at XT 453163. Several weapons and a US Claymore mine were located in the tunnel. At 1700 hours, Company C went OPCON to Task Force Hodson.
            </p>
            <p>
              On September 02, 1967, elements of Company B conducted an airmobile combat assault to an LZ at XT 414149. Company A apprehended some detainees near XT 4417.  One platoon from Company B secured a bridge about 5 kilometers west of Trang Bang at XT 453191 during the night. Company C, while OPCON to TF Hodson, conducted security operations in the sugar cane fields near XT 438078.
            </p>
            <p>
              On September 03, 1967, at 0023 hours, the platoon from Company B securing the bridge site received one round of mortar fire. The 1/5th(M)(-) conducted S&D operations in the Loc Giang area as part of the election security for the Republic of Viet Nam. Company C conducted security and S&D operations as part of TF Hodson.
            </p>
            <p>
              On September 04, 1967, elements of the battalion conducted S&D operations in the Loc Giang area. One platoon from Company B remained at the bridge site as security. Company C remained OPCON to TF Hodson and conducted S&D and security operations in the Ap Dong Hoa area.
            </p>
            <p>
              On September 05, 1967, Company C returned to battalion control at 0800 hours. Operations continued in the Loc Giang area.
            </p>
            <p>
              On September 07, 1967, the battalion conducted S&D, saturation patrolling and security operations. At 1237 hours, the Recon Platoon apprehended a female detainee who was later identified as a VC intelligence agent. At 1415 hours, an APC from Company A detonated an AT mine. Four of the nine Bobcats who were wounded were dusted-off.
            </p>
            <p>
              On September 08, 1967, Company A and the Recon Platoon conducted “Bushmaster” operations. Security for engineer and artillery activities was continued. Airmobile combat assaults were also conducted. At 1310 hours, a Bobcat from Company C was injured when a helicopter crashed due to a lost rotor blade.
            </p>
            <p>
              On September 09, 1967, the battalion continued to provide security for artillery and engineer operations. Day and night ambush patrols were also conducted throughout the area. At 1620 hours, an APC from Company A detonated an AT mine with negative casualties. On September 10th, airmobile combat assaults were conducted with negative contact. On September 11th, the battalion conducted mounted sweep operations as well as dismounted search and destroy operations.
            </p>
            <p>
              On September 12, 1967, elements of the battalion conducted an airmobile combat assault and established a blocking position west of Go Dau Ha at XT 2532. Company A remained in the area of FSB Diane, providing security for engineer and artillery operations. At 1445 hours, one Bobcat from Company C was killed by a “friendly” artillery long round. At 1515 hours, a Hoi Chanh led Company C to a small ammunition cache at XT 252324. By 1800 hours, the battalion- completed airmobile movement back to FSB Diane. The Recon Platoon provided security for FSB Carol located northwest of Go Dau Ha at XT 334357.
            </p>
            <p>
              On September 13, 1967, “Eagle Flights” were conducted by units of the battalion to three LZs. One detainee was taken into custody by Company A at 1545 hours.
            </p>
            <p>
              On September 14, 1967, the battalion continued security operations and also conducted saturation ambush patrolling in the area of Loc Giang. At 0515 hours, an ambush patrol from Company A engaged 2 VC with negative results. At 2220 hours, an ambush patrol from Company A, located 500 meters south of the junction of Highways10 and 6A, received small arms and automatic weapons fire at XT 435157. One Bobcat was killed and two were wounded.
            </p>
            <p>
              On September 16, 1967, Company B returned to Cu Chi Base Camp and assumed the role of base reaction force. Company A continued to provide security for engineer operations at the laterite pit and west of the junction of Highways 1 and 7A. A Hoi Chanh led the Recon Platoon to 5 AT mines and they were destroyed in place. Company C, 2/27th Infantry became OPCON to the 1/5th(M) for security of engineer activities in the Loc Giang area. At 1930 hours, an ambush patrol from Company C, 1/5th(M), engaged and killed 3 VC in a sampan on the Oriental River. Company B, 1/5th(M) went OPCON to the 1st Brigade at 2015 hours.
            </p>
            <p>
              On September 17, 1967, the battalion(-) continued operations in the Loc giang area. Company B was released from OPCON to the 1st Brigade at 1715 hours and continued as Cu Chi Base Camp reaction force.
            </p>
            <p>
              On September 18, 1967, at 0621 hours, an APC from Company C detonated an AT mine. Four Bobcats were wounded and the APC was a combat loss. Company B remained at Cu Chi and the battalion with Company C, 2/27th Infantry continued operations in the Loc Giang area.
            </p>
            <p>
              On September 19, 1967, the battalion(-) conducted security operations and prepared for night saturation ambush patrolling. Company B remained at Cu Chi and provided one platoon to secure engineer operations 6 kilometers northwest of Cu Chi.
            </p>
            <p>
              On September 21, 1967, Co C, 2/27th Infantry provided security for engineer operations in the Loc Giang area. The 1/5th(M)(-) conducted S&D operations and saturation night ambush activities in the area. Company B was still the Cu Chi Base reaction force, but provided one platoon for security of engineer operations. At 0730 hours, an APC from Company B detonated an AT mine near Xom Thap at XT 543169. Two Bobcats were killed and four were wounded.
            </p>
            <p>
              On September 22, 1967, the battalion(-) continued S&D operations and ambush patrolling. Company B provided one platoon for engineer security and remained the Cu Chi Base reaction force.
            </p>
            <p>
              On September 25, 1967, Company B went OPCON to the 1/27th Infantry. The remainder of the battalion conducted S&D operations and night ambush patrols in the Loc Giang area.
            </p>
            <p>
              On September 28, 1967, at 0700 hours, Company B was released OPCON from the 1/27th Infantry and secured Rome Plow operations between Highways 1 and 7A at XT 5416. The 1/5th(M)(-) occupied blocking positions along the Oriental River at XT 4116 and XT 4114.
            </p>
            <p>
              On September 29, 1967, the battalion(-) conducted S&D operations and night ambush activities in the Loc Giang area. Company B continued to provide security for Rome Plow operations.
            </p>
            <p>
              On September 30, 1967, the 1/5th(M)(-) occupied night positions at Fire Support/Patrol Base Diane at XT 424166. During the day they began movement to Cu Chi Base Camp, arriving at 1355 hrs. Company B remained at XT 545155 providing security for Rome Plow operations.
            </p>
            <p>
              The battalion had been in the field for 142 days. It was a long time to be moving through the muck and mud. But it paid off in locating hidded enemy caches. During that time period, the battalion had a policy of using everything and anything that was available to throw at the enemy, before using troops.
            </p>
            <p>
              Ambushes along the Oriental River were very successful. Besides mounting 106mm Recoilless Rifles on one APC in each platoon, 90mm Recoilless Rifles, were used on the ambushes. The men used “short rounds, making for one big shotgun. They would blow a sampan plum out of the water.”
            </p>
            <p>
              During September 1967, four Bobcats died in Viet Nam. They were: Evaristo Sandoval; Harold J. Canan; Michael A. Roberts; and William E. Swensgard.
            </p>
            <div class="oneMonth" data-section="oct">OCTOBER</div>
            <p>
              From October 01, 1967 to October 07, 1967, the 1st Battalion(M) 5th Infantry remained at Cu Chi Base Camp conducting maintenance on vehicles and equipment.
            </p>
            <p>
              On October 08, 1967, the battalion departed Cu Chi Base Camp and moved to an area 4 kilometers southeast of Trang Bang at XT 537168. Their mission was to establish a fire support / patrol base at that location. Platoon sized S&D operations were conducted in the area during the afternoon.
            </p>
            <p>
              On October 09, 1967, the battalion(-) remained at the fire support / patrol base. Company B and Company C set up separate night base perimeters to the south, one north of  Highway 7A and one South of  Highway 7A. Company A provided one platoon for a Cu Chi Base Camp reaction force. Platoon size S&D operations were conducted in the area. At 2216 hours, an ambush patrol from Company B engaged and killed 3 VC, 1000 meters west of the Company night base.
            </p>
            <p>
              On October 11, 1967, platoon sized S&D operations were continued in the area. Company A again provided one platoon for Cu Chi Base Camp reaction force. At 1930 hours, an ambush patrol from Company B, located 200 meters south of the one that was “tripped” on August 9th, engaged 4 VC, killing two of them.
            </p>
            <p>
              On October 12, 1967, Company A provided one platoon for Cu Chi Base Camp reaction force and one platoon to secure Fire Support Base Martha, located 6 kilometers northwest of Trang Bang at XT 452266. The battalion(-) continued small unit S&D operations.
            </p>
            <p>
              On October 13, 1967, the battalion(-) moved to a blocking position on the Oriental River in conjunction with a combined S&D operation of the 1/27th Infantry and the 49th ARVN Infantry. The battalion(-) returned to their forward base area at XT 546155 by 1800 hours. Company A continued to provide one platoon for Cu Chi Base Camp reaction force and one platoon to secure FSB Martha.
            </p>
            <p>
              On October 15, 1967, platoon size S&D operations were conducted. At 1220 hours, in the area of XT 553143, an APC from Company B exploded an 81mm round that was rigged with a pressure type detonating device. One Bobcat was killed and three were wounded.
            </p>
            <p>
              On October 16, 1967, Companies B and C conducted “Bushmaster” operations at Ap Binh Dong and Thai My along Highway 7A. Company A continued to provide one platoon to secure FSB Martha and one platoon for Cu Chi Base Camp. One Bobcat from the Recon Platoon was killed by a booby trap explosion.
            </p>
            <p>
              On October 17, 1967, units of the battalion conducted S&D operations and a combined operation with the Trang Bang Popular Forces. Company B located 1 tunnel and had light contact, capturing 1 VC POW. Company C established a night base near Thai My and the battalion(-) established a base near Xom Thap.
            </p>
            <p>
              On October 18, 1967, one daylight ambush was deployed. S&D operations were conducted with light contact.
            </p>
            <p>
              On October 19, 1967, Company C provided security for Fire Support / Patrol Base Gertrude located southwest of Thai My at XT 524144. Company A provided one platoon to secure FSB Martha. One Bobcat from Company C was killed by a boobytrap explosion. At 2150 hours, an ambush patrol from Company B engaged three VC, killing one.
            </p>
            <p>
              On October 20, 1967, Company B established a new base area south of Ap Dong Hoa (2) on Highway 7A. Company C provided security for FSB Gertrude and Company A provided security for FSB Joyce, north of Go Dau Ha (XT 383262), until relieved by the Recon Platoon.
            </p>
            <p>
              At 2320 hours, a South Vietnamese CIDG patrol walked into the kill zone of a Company B ambush patrol that was set up on the edge of the sugar cane at XT 458079. Three South Vietnamese soldiers were killed and two were wounded.
            </p>
            <p>
              On October 21, 1967, the battalion(-) conducted platoon size S&D operations. Company A provided one platoon to secure FSB Joyce and the Recon Platoon provided security for FSB Gertrude. Company B remained in the area south of Hiep Hoa and deployed extensive night ambush patrols.
            </p>
            <p>
              On October 22 and 23, 1967, Company B deployed combined ambush patrols with elements of the Hiep Hoa Popular Forces.
            </p>
            <p>
              On October 24, 1967, Company C moved to a new base camp in the area of FSB/PB Sandra located just west of Trang Bang. There they conducted security operations with the 34th ARVN Ranger Battalion, providing protection for engineer activity in the area. The Recon Platoon secured FSB Gertrude.
            </p>
            <p>
              On October 25, 1967, Company C remained at FSB/PB Sandra providing local security with the 34th Rangers. Company B provided one platoon for Cu Chi Base Camp reaction force. Company A provided one platoon for the protection of FSB/PB Marilyn and one platoon to secure culvert construction work by engineers on Highway 7A. The Recon Platoon continued to provide protection for FSB Gertrude.
            </p>
            <p>
              From October 26 to October 30, 1967, units of the battalion continued to provide protection for fire support bases and engineer work activities. Ambush patrols and small unit S&D operations were also conducted.
            </p>
            <p>
              On October 31, 1967, Company B provided one platoon for a reaction force at Cu Chi Base Camp. Company C(-) continued working with the 34th ARVN Rangers in providing protection for engineer construction work. At 1950 hours, an APC from Company A detonated an AT mine on Highway 1 near the intersection of Highway 7A, half way between Cu Chi and Trang Bang. Four Bobcats were killed and two were wounded.
            </p>
            <p>
              During October 1967, seven Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Frank A. Price III</li>
              <li>Junior R. Burns</li>
              <li>Gary P. Polley</li>
              <li>Ralph J. DiPace</li>
              <li>Gregory G. Hubbard</li>
              <li>John C. Steer</li>
              <li>Robert W. Larison</li>
            </ul>
            <div class="oneMonth" data-section="nov">NOVEMBER</div>
            <p>
              On November 01, 1967, elements of the battalion continued to protect engineers working at a culvert site near Xom Thap. Company C worked with the 34th ARVN Rangers securing the roadways in the area of Bao Trai. Ambushes were deployed. (Always).
            </p>
            <p>
              On November 02, 1967, the battalion continued to provide protection for engineer activities. At 1550 hours, one Bobcat from Company B was wounded when he detonated a booby trapped hand grenade. At 1950 hours, the Recon Platoon received harassing sniper fire with negative casualties.
            </p>
            <p>
              On November 03, 1967, at 0235 hours, the Recon Platoon received 30 rounds of enemy mortar fire. Two Bobcats were wounded. Company C continued to work with the 24th ARVN Rangers securing Highway 10 between Bao Trai and Duc Hoa. Protection also continued for the engineers working near Xom Thap. At 2130 hours, a listening post from Company A engaged one VC with unknown results.
            </p>
            <p>
              On November 06, 1967, the 1/5th(M) went OPCON to the 1st Brigade, 25th Infantry Division.
            </p>
            <p>
              On November 11, 1967, a Bobcat from Company C was killed by an explosion. This individual carried a Chicom grenade around with him that he had found. This day a dud artillery round was located and he was going to attempt to detonate the dud using the Chicom grenade. He activated the fuse and the grenade exploded, killing him. It had been rigged with an instantaneous fuse.
            </p>
            <p>
              On November 15, 1967, two Bobcats from Headquarters Company were killed in a mortar attack on the battalion night forward base camp. A third Bobcat from Company C died from multiple fragmentation wounds.
            </p>
            <p>
              On November 17, 1967, the battalion was released from OPCON to the 1st Brigade at 0600 hours. One platoon from Company B was assigned to protect FSPB Janet, located in the northeastern edge of the Filhol at XT 703207. The battalion(-) provided security for Rome Plow operations in the area of Thai My at XT 5415.
            </p>
            <p>
              On November 19, 1967, the 1/5th(M)(-) continued to protect Rome Plow operations. Units also provided protection, along with elements of the 34th ARVN Rangers, for engineer activities along Highway 10 between Dong Hoa(2) and Loc Thanh. At 2102 hours, an ambush patrol from Company C exchanged small arms fire with an estimated 5 VC with negative casualties. At 2205 hours, an ambush patrol from Company C, located along Highway 10, fired on a small group of VC with a 106mm Recoilless Rifle, killing one. Company B(-) provided security for an engineer ferry crossing site on the Saigon River at XT 712209.
            </p>
            <p>
              On November 20, 1967, the battalion forward base remained in the area of Thai My at XT 545155. Company C(-) provided security along Highway 10. Two squads from Company C were assigned to protect FSB Sandra. At 2015 hours, an ambush patrol from Company B engaged 2 VC in a sampan on the Saigon River. Using a 106mm RR, they killed the VC and sank the boat. At 2145 hours, the same ambush, located at XT 712211, killed another VC.
            </p>
            <p>
              On November 21, 1967, Company B provided one platoon for Cu Chi Base Camp security patrol. One platoon was assigned to protect FSB Janet. The remainder of the company provided security for Rome Plow operations in the area of Thai My. Company A provided one platoon to secure an engineer culvert construction site on Highway 7A, at XT 557157. Company C continued operations along Highway 10 until 0800 hours. At that time they commenced movement to Cu Chi Base Camp, closing at 1015 hours.
            </p>
            <p>
              On November 22, 1967, Company C remained at Cu Chi Base Camp as base reaction force. One platoon from Company A continued to protect the engineer culvert site on Highway 7A. The remainder of Company A secured Rome Plow operations. One platoon from Company B secured FSB Janet and the remainder of the company provided protection to the engineer ferry crossing site on the Saigon River at XT 702210.
            </p>
            <p>
              On November 24, 1967, Company A continued to provide protection for engineer and Rome Plow activities. Company B sent one platoon to Cu Chi for base camp reaction force; one platoon to secure FSB Janet and the remainder of the company secured the ferry crossing site on the Saigon River. Company C provided 2 squads to secure FSB Sandra. The remainder of Company C secured motor movement along Highway 10 from Loc Thanh to Dong Hoa.
            </p>
            <p>
              On November 26, 1967, Rome Plow clearing operations were completed and the 1/5th(M)(-) moved to Cu Chi Base Camp, arriving at 1600 hours. Company B(-) continued protecting the ferry crossing site and 2 squads from Company C secured FSB Sandra.
            </p>
            <p>
              On November 27, 1967, at 1200 hours, Company C went OPCON to the 1st Brigade, 25th Infantry Division. The battalion(-) remained at Cu Chi Base.
            </p>
            <p>
              On November 30, 1967, the battalion(-) remained at Cu Chi. Company C remained OPCON to the 1st Brigade. Company B assigned one platoon to secure an engineer ferry crossing site.
            </p>
            <p>
              During November 1967, five Bobcats died in Viet Nam. They were: Robert W. Larison; Anderson Turner; Lorinzer P. Clark Jr; Jimmie L. McMorris; and Otis T. Smith.
            </p>
            <div class="oneMonth" data-section="dec">DECEMBER</div>
            <p>
              On December 01, 1967, the 1/5th(M) went OPCON to the 1st Brigade, 25th Infantry Division and ended their participation in Operation Kolekole.
            </p>
            <p>
              Statistical data for units when they were involved in Operation Kolekole which “officially” terminated on December 07, 1967, was:
            </p>
            <p>
              Unit  KIA WIA DOW NBI</br>
              1/5th(M): 27 206 1 27</br>
              1/27th Inf: 69 418 10 23</br>
              2/27th Inf: 47 237 2 18</br>
              4/23rd(M):   1   13 1 1</br>
            </p>
            <p>
              From December 01, 1967 to December 07, 1967, the battalion participated in the close of Operation Barking Sands with the 1st Brigade. Operation Barking Sands involved pacification and Rome Plow clearing in Cu Chi and Trang Bang Districts of Hau Nghia Province.
            </p>
            <p>
              From December 08, 1967 to December 19, 1967, the 1st Battalion(M) 5th Infantry was OPCON to the 25th Infantry Division. The battalion operated in the northern part of Tay Ninh Province, providing road security and protection for engineer work projects.
            </p>
            <p>
              On December 13, 1967, one Bobcat from Company C was killed when the APC he was in was hit by an RPG round. He was an RTO, who spent time the night before taking care of personal matters as if he sensed something was going to happen.
            </p>
            <p>
              On December 16, 1967, the battalion forward base camp was located near Highway 22 at XT 079839, about 8 kilometers north of Highway 247.  At 1100 hours, an estimated platoon sized VC force struck from the west and southwest and southeast. Approximately 20 to 30 rounds of RPG-2 were fired along with AK-47 fire. At 1120 hours, the VC broke contact. Two Bobcats from Company C were killed and 16 were wounded. Two other Bobcats from Company C burned to death inside an APC that was hit by an RPG-2. Their remains had to be removed by Graves Registration personnel. 2 APCs were destroyed in the attack. The VC had 3 men killed by body count.
            </p>
            <p>
              At 1415 hours, a tank that had hit a mine was stripped and destroyed in place.
            </p>
            <p>
              From December 20, 1967 to December 23, 1967, the battalion was OPCON to the 1st Brigade, 25th Infantry Division.
            </p>
            <p>
              During December 1967, five Bobcats died in Viet Nam. They were:
            </p>
            <ul>
              <li>Gene F. Lee</li>
              <li>Michael T. Collins</li>
              <li>Edward A. Finlay</li>
              <li>James Y. Hidalgo</li>
              <li>Kenneth D. Kralick</li>
            </ul>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="{{ url('/history/album/gwot') }}">
                  <li>Photo Album</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
