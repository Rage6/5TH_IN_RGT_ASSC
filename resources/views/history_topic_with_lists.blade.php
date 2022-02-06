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

@section('ben_cui_battle_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_12">
        <a href="{{ url('/history/timeline') }}">
          <div>
            <div> RETURN </div>
          </div>
        </a>
      </div>
    </div>
    <div class="allSegments">
      <div class="nonTimeSegment topicSegment">
        <div class="segmentTitle"><u>Ben Cui Battle</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              <i>
                The following is a description of the battle in Ben Cui on August 21st, 1968. It is based on the Combat Operations Report (COR) submitted by 1LT Arthur B. Cook Jr on Sept. 1st, 1968. It is a compilation of eyewitness reports from the leaders and men at the battle.
              </i>
            </p>
            <div class="benCuiAlbumRow benCuiRight">
              <a href="{{ url('/history/album/ben-cui') }}">
                <div class="benCuiAlbumBttn">
                  <div>BEN CUI</div>
                  <div>PHOTOS</div>
                </div>
              </a>
            </div>
            <p>
              <span style="font-size:1.8rem">A</span>t 210640 August 1968 company C 1st Bn (Mech), 5th Infantry departed  Dau Tieng base camp with the mission of sweeping from Dau Tieng to  XT 420445, staying approximately 1000 meters to the south of route 239.  The scout platoon, with the 3rd brigade CRIP and one twin 40mm self propelled weapon attached departed Dau Tieng at 210658 August 1968 to sweep and outpost the MSR from Dau Tieng to XT 371424. The two units were to move abreast on parallel routes in order to provide additional security for the units.
            </p>
            <p>
              At 0813 hours the scout platoon was located at XT 463468.  Company C had moved to the south and at XT 473456. Both units reported no enemy contact.  Company C was moving with two rifle teams abreast. The 1st platoon on the right was led by SSG Lang, while the 3rd platoon on the left was led by 1LT Cook.  Each platoon's personnel carriers followed the dismounted elements of the platoon.  The Company commander 1LT Snodgrass, moved on foot, and alternated his position between the lead platoons.
            </p>
            <div class="benCuiAlbumRow benCuiLeft">
              <a target="_blank" href="http://bobcat.ws/marvin-rex-young-tribute.html">
                <div class="benCuiAlbumBttn mohBttn">
                  <div>Medal of Honor Recipient</div>
                  <div>Marvin Rex Young</div>
                </div>
              </a>
            </div>
            <p>
              At 0831 hours the scout dog with the point element of the company alerted.  The handler stated that he thought that there might be a large number of personel to the southwest.  The battalion S-3 in the OH-23 helicopter made a low VR of the area concerned but could locate nothing unusual.  It was concluded that the dao had probably alerted to the presence of civilians in the village at XT 464448.  The Company commander then adjustd 81mm mortar fire into the rubber plantation to his front, with negative results.
            </p>
            <p>
              Two enemy soldiers were engaged by the security elements of company C at 0906 hours.  The enemy soldiers were at a range of 200 meters and withdrew to the south without returning fire.
            </p>
            <p>
              At 0913 hours the scout platoon was located at checkpoint "G" and was conducting a search of the village at XT 464448.  This search netted nothing except for the information that three buildings in the southern edge of the village had been used by the enemy for billets and classrooms.
            </p>
            <p>
              Company C located and destroyed a mine at XT 476454 at 0914 hours. The company then shifted to the westto move out of the open area into the rubber.  The company continued moving south Until it made a turn to to the west astride the trail leading fron XT 470444 to 463444.  The company moved to the west with one lead platoon on each side of the trail. The scout dog with it's security element was moving ahead of the platoon security by approximatelt 30 meters.
            </p>
            <div class="casualtyBox">
              <div class="casualtyTitle">The Men Lost</div>
              <div class="casualtyList">
              @foreach ($all_casualties as $one_casualty)
                <div class="oneCasualty" data-casualtyid="{{ $one_casualty->id }}">
                  <div>
                    {{ $one_casualty->rank }} {{ $one_casualty->first_name }} {{ $one_casualty->last_name }}
                  </div>
                  <a href="/memorials/casualties?id={{ $one_casualty->id }}&selected=yes">
                    <div class="fullArrow">
                      <div class="topArrowHalf"></div>
                      <div class="bottomArrowHalf"></div>
                    </div>
                  </a>
                </div>
              @endforeach
              <!-- <div class="shadeBottom">
              </div> -->
              </div>
            </div>
            <p>
              At 1012 hours, the scout platoon observed a red star cluster in the vincinity of the village at XT 463448.  The Scout platoon continued searching the village at XT 463448.  At 1035 hours company C called in a negative situation report and gave XT 462440 as the current location of the unit.
            </p>
            <p>
              At 1110 hours, company C reported receiving sniper fire at XT 462444, and reported 1 US KIA and 1 US WIA.  The report stated that the fire was coming from the west and southwest.  The unit requested gunship support.  At this time the point and security elements were approximately 40 meters west of the road that extends south from route 239 to XT 463440. At this point, the lead platoons were crossing the road.  The second platoon and the mortar platoon were following the 3rd platoon, south of the east-west trail.
            </p>
            <p>
              As the enemy increased their volume of fire, the lead elements returned the fire, and remained west of the north-south road for approximately ten minutes.  The enemy continued to advance, with the elements attempting to move along the south flank of company C.  The enemy advanced from the west on the dismounted elements of company C.  Most of the enemy soldiers were wearing green and camouflaged uniforms, and were moving from tree to tree in short rushes, and advancing rapidly toward the north-south road, while some of the enemy were occupying camouflaged positions. the volume of fire  initially was low, but soon reach an extremely high rate.  During this period SSG Lang, the 1st platoon leader was killed.
            </p>
            <p>
              The company commander, realizing he could not effectively employ his cal. 50 machine guns over his own troops, withdrew his troops to the line of personnel carriers, now dispersed along the east side of the north-south road.  Further, since enemy soldiers had been observed while attempting to envelop his right flank, the company commander ordered his reserve, the 2nd platoon to displace to the right rear of his 1st platoon. He then displaced his mortars to the rear to obtain overhead clearance in order that they could be employed.  During this period the unit employed all available weapons, to include M-72 laws to break up the enemy attack.
            </p>
            <div class="benCuiAlbumRow benCuiLeft">
              <a href="{{ url('/history/topic/presidential-citation') }}">
                <div class="benCuiAlbumBttn presSeal">
                  <div style="font-size:2rem">Presidential</div>
                  <div>Citation</div>
                </div>
              </a>
            </div>
            <p>
              At 1135 hours the battalion S-3 urgently requested the gunships, which had ben previously requested but had not arrived.  The Artillery FO on the ground was attempting to get clearances to employ artillery.  At this time company C marked the unit position with purple smoke, and a few minutes later with yellow smoke.  The unit at this time was still defending along the road with the troops deployed with the troops personnel carriers.  The company continued to fire in this position for approximately 30 minutes.
            </p>
            <p>
              During this 30 minute period the scout platoon deployed along route 239 with the lead element at XT 461448.  The scout platoon leader observed enemy troops moving to the southeast in the vicinity of XT 458446, and took these units under fire with cal. 50 machineguns and small arms.  Shortly he moved a twin-40mm weapon into a firing position and this weapon fired in excess of 300 rounds.  The scout platoon was soon engaged in small arms and RPG fire.  At 1149 the scout platoon leader observed and reported at least an enemy company moving southeast of the village at XT 450450.
            </p>
            <p>
              Company C continued to remain in position along the north-south road until approximately 1150 hours, at which time 3 personnel carriers, on the left sid of the company position, were hit with RPG weapons. These weapons were apparently fired from extremely  short range. The company commander then decided to withdraw approximately 150 meters and to organize another defensive position.  The unit withdrew, taking with it the wounded personnel and the body of SSG Lang.  During this period, five more men were killed.
            </p>
            <div class="benCuiAlbumRow benCuiRight">
              <a href="{{ url('/history/topic/ben-cui-forum') }}">
                <div class="benCuiAlbumBttn benCuiForumBttn">
                  <div>2013</div>
                  <div>BEN CUI</div>
                  <div>FORUM</div>
                </div>
              </a>
            </div>
            <p>
              Upon order the 1st and the 3rd platoon withdrew.  This movement disposed the company with three platoons abreast, since the 2nd platoon held in place.  At this time eight personnel carriers were on line, and all cal. 50 machineguns were operating.  In addition, the dismounted personnel were firing individual weapons and m-72 laws.  At this time 81mm mortars were firing with their rounds impacting near the second platoon.  The artillery forward observer, LT Ranney, was adjusting the artillery which was impacting 200 meters west of the friendly elements. At this time three of the remaining personnel carriers sustained RPG hits.  These RPG hits killed the 4.2 mortar forward observer and one of the company radio operators and wounded the company commander, the artillery forward observer and the remaining company radio operator.  the last transmission LT Ranney, the artillery forward observer, made was to the effect that the last artillery rounds had landed 200 meters east of his position. Since the artillery fire direction center knew that if the rounds were landing 200 meters east of LT Ranney, the were landing on the troops of company C, thus the FDC check fired the artillery.  Several minutes passed prior to the resuming fire.
            </p>
            <!-- <div class="benCuiAlbumRow benCuiRight">
              <a href="{{ url('/history/topic/ben-cui-forum') }}">
                <div class="benCuiAlbumBttn benCuiForumBttn">
                  <div>2013</div>
                  <div>BEN CUI</div>
                  <div>FORUM</div>
                </div>
              </a>
            </div> -->
            <p>
              At 1154 hours the forward air controller reported an estimated time of arrival of 20 to 25 minutes for the first airstrike, and the 1st Brigade announced an ETA of 15 minutes for alight fire team, this light fire team arrived at 1201 hours and was immediately employed along the southern flank of the unit.
            </p>
            <p>
              Now Commanded by 1lt Cook, company C reported at 1200 hours that the situation was extremely critical and that he planned to withdraw. All wounded were loaded onto personnel carriers and the unit withdrew over the same route taken on the advance.  The last element to withdraw was the 2nd platoon.  The company movd and secured a landing zone at XT 473455.
            </p>
            <p>
              1200 hours the scout platoon was heavily engaged from the south, and observed an estimated eneemy platoon maneuvering to block route 239 to the north of the scout platoon.   At this time the scout platoon was ordered to move east through the village at XT 463448 and to link up with company C at the landing zone.  This movement resulted in a short anvance by the enemy, followed by a halt of his advance.  Following th Medical evacuation of casualties, all unit were ordered by the commanding officer to return to Dau Tieng to regroup and to prepare to return to the Ben Cui plantation to continue the contact. Th scout platoon was subsequently oreder to return to the eastern edge of th rubber.  At 1600 hours all elements were ordered to return to Dau Tieng.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop

@section('after_action_reports_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar timelineBar_19">
        <div data-opbutton="clean_sweep">
          <div data-opbutton="clean_sweep">"CLEAN SWEEP"</div>
        </div>
        <div data-opbutton="kahuku">
          <div data-opbutton="kahuku">"KAHUKU"</div>
        </div>
        <div data-opbutton="honolulu">
          <div data-opbutton="honolulu">"HONOLULU"</div>
        </div>
        <div data-opbutton="circle_pines">
          <div data-opbutton="circle_pines">"CIRCLE PINES"</div>
        </div>
        <div data-opbutton="kalamazoo">
          <div data-opbutton="kalamazoo">"KALAMAZOO"</div>
        </div>
        <div data-opbutton="waikiki">
          <div data-opbutton="waikiki">"WAIKIKI"</div>
        </div>
        <div data-opbutton="wahiawa">
          <div data-opbutton="wahiawa">"WAHIAWA"</div>
        </div>
        <div data-opbutton="coco_palms">
          <div data-opbutton="coco_palms">"COCO PALMS"</div>
        </div>
        <div data-opbutton="makiki">
          <div data-opbutton="makiki">"MAKIKI"</div>
        </div>
        <div data-opbutton="mokoleia">
          <div data-opbutton="mokoleia">"MOKOLEIA"</div>
        </div>
        <div data-opbutton="koko_head">
          <div data-opbutton="koko_head">"KOKO HEAD"</div>
        </div>
        <div data-opbutton="oahu">
          <div data-opbutton="oahu">"OAHU"</div>
        </div>
        <div data-opbutton="kipapa">
          <div data-opbutton="kipapa">"KIPAPA"</div>
        </div>
        <div data-opbutton="sunset_beach">
          <div data-opbutton="sunset_beach">"SUNSET BEACH"</div>
        </div>
        <div data-opbutton="kailua">
          <div data-opbutton="kailua">"KAILUA"</div>
        </div>
        <div data-opbutton="attleboro">
          <div data-opbutton="attleboro">"ATTLEBORO"</div>
        </div>
        <div data-opbutton="cedar_falls">
          <div data-opbutton="cedar_falls">"CEDAR FALLS"</div>
        </div>
        <div data-opbutton="ben_cui">
          <div data-opbutton="ben_cui">"BEN CUI"</div>
        </div>
      </div>
    </div>
    <div class="allSegments">
      <div data-opname="clean_sweep" class="nonTimeSegment topicSegment aarSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: CLEAN SWEEP</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <div>HEADQUARTERS</div>
              <div>1ST BATTALION (MECH) 5TH INFANTRY</div>
              <div>APO San Francisco 96225</div>
            </div>
            <div class="aarTopic">
              TLMAA-C February 1966
            </div>
            <div class="aarTopic">
              SUBJECT: After Action Report – Operation Clean Sweep
            </div>
            <div class="aarTopic">
              <div>TO: Commanding Officer</div>
              <div>2d Bde, 25th Inf Div</div>
              <div>APO U.S. Forces 96225</div>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:   (our order) OPORD 11-66, 1st Bn (Mech) 5th Inf.
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:   220730FEB66 to 241615FEB66.
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>: Wooded area running from coordinates 674135 to 691118 to 693128.
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>: Search and destroy; protect ARVN bulldozers leveling the area.
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>
                The operation was a coordinated attack between the 1/5th Mech and the 49th Inf (ARVN) Regt. Elements of the 1/8th Arty and Co C, 65th Engr Bn, were in support. The 1/5th Mech crossed the LD at 0830 (prescribed time). The 1/49th (ARVN) Regt, attacking on the right of the 1/5th Mech, crossed the LD 17 minutes late. The 1/5th Mech attacked with two Co’s abrest, A on the right (E), and B on the left (W). Recon plat screened the left (W) flank and a platoon of Co C searched and cleared the wooded area centered at coord 677118. Co C (-) was in reserve with the mission of protecting the bulldozers. The two forward companies proceeded slowly through rather heavy woods at first. The 1/49th (ARVN) Regt proceeded rapidly to the objective area mounted on APC’s. Apparently they never dismounted to search and destroy in the zone until they arrived on their Obj 12 (698113). During this perion both the Recon Plat and Co B received sniper fire, primarily from their left flank and rear from the vicinity of the woods centered at 676118. As the Recon Platoon broke into the rice paddy short of the objective area (vic coord 684117) they received considerable fire from the woodline vic coord 684119. Fire included that from two automatic weapons believed to be .50 cal. VC elements were engaged by machine gun fire, small arms fire and artillery. It is believed that one of the MG’s was knocked out. From the time the units crossed the LD until about 1130 hours all three companies and the Recon Platoon were subjected to sniper fire. Most of the fire was delivered from the flanks and rear. Co B ran into extensive tunnels vic coord 688120. Co B then searched the area thoroughly, after which they pushed approximately 800 meters into the woods to the NW in an attempt to run down the VC who had fled in that direction; no contact was made. Co A searched out the entire area from 691118 to 693128 with no further contact. Recon Platoon reconnoitered along the woodline from coord 687120 to 682133 and back with no contact. Co B returned to the perimeter using the rice paddy SW of the area in which they were searching (coord of rice paddy – 680120). A platoon of Co C supported this move from a position vic coord 679120. As Co B moved into the rice paddy they received machine gun and small arms fire from their right rear from the vic coord 676120. The battalion spent the night in a perimeter vic coord 688119. Nine ambushes were set outside the perimeter; two were triggered (4 VC confirmed killed, 3 more estimated killed).
              </div>
              <div>
                On 23 Feb six tanks from Troop B, 3/4 Cav, joined the attack. The battalion searched and cleared the entire area centered at coord 680125 and the area centered at 676118. The only contact consisted of sniper fire from VC located vic coord 673137. Fire was effectively returned. The battalion went into a perimeter at the same location as the previous night. Ambushes were established at coord 668122, 673129, 682132. Five additional ambushes were established close to the battalion perimeter. The only contact was made by ambush at coord 668122 which observed 6 - 8 VC just before dark vic coord 665123. VC were taken under fire by artillery and small arms. Results are unknown.
              </div>
              <div>
                On 24 Feb Co A searched and destroyed a wooded area centered at 665128; Recon Platoon searched and destroyed area centered at 663133 but made no contact. Co B moved through the rubber plantation to the left (SW) of the road running through coord 6613. Co C checked rice paddies around objective area and protected the bulldozers. Upon returning to base camp, Co C received sniper fire from a lone sniper located vic coord 667126 – the only contact of the day.  Throughout the entire operation security was provided the six ARVN bulldozers which leveled the entire area centered at coord 692122.
              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>: Area searched on 22 and 23 Feb was heavily fortified. There were trenches behind every hedgerow. Foxholes were everywhere and there were numerous small bunkers. Defensive tunnels were dug throughout the area; extensive tunnels were located vic 688120. The area obviously had been recently used. Area checked the last day (24 Feb) did not show any evidence that VC had stayed there. There was evidence of fresh digging in the rubber plantation. The holes were about two feet deep and were located vic coord 662125.
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>: First day: Estimated 2 squads reinforced with 2 heavy machine guns. They wore steel helmets and black uniforms. Second day: A total of about 10 men. Third day: Lone sniper.
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>
                  VC killed: 11 confirmed, 13 additional estimated killed.
                </li>
                <li>
                  Destroyed:
                  <ul>
                    <li>25 bunkers</li>
                    <li>8 booby traps</li>
                    <li>4 AP mines</li>
                    <li>5 bags of black powder (regular sugar bag size)</li>
                    <li>79 tunnel entrances (4 of these were extensive. One was a two level tunnel about 200 meters long. Two one level tunnels of 40 and 75 meters were also destroyed. All four of these were located vic coord 688120. This area was apparently a VC training area. ARVN LNO stated that signs indicated that the cadre was from North Vietnam. An APC caved in a huge hole about 15' deep and 12' in diameter vic coord 689121 (this apparently was some sort of underground classroom).</li>
                    <li>800 pounds of rice</li>
                    <li>3 caches of food</li>
                    <li>20 duds (included 12 artillery rounds and 8 Air Force bombs)</li>
                  </ul>
                </li>
                <li>
                  Numerous documents and miscellaneous articles of clothing were found and turned over to Bde S-2.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>: 5 KIA, 18 WIA. Of the WIA, 8 were returned to duty the same day they were wounded. One additional man was slightly wounded enroute to objective area when a .50 cal MG accidently discharged. List of casualties is attached at Inclosure 1.
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>
                  One APC was hit by what was believed to have been a booby trap which contained a shape charge. Round completely penetrated  front of track and came out the other side. Extensive damage was done and the APC will have to be evacuated.
                </li>
                <li>
                  Two other APC’s were deadlined as a result of the operation. Both should be repaired within 24-48 hours.
                </li>
                <li>
                  One 1.5 ton trailer was damaged when a main spring was apparently ripped out from under the trailer.
                </li>
                <li>
                  No weapons were lost.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>
                  It was determined that the battalion is capable of operating for 3 days on this type operation without resupply of anything except water. However the 1 ½ ton trailers pulled behind tracks received rough treatment during the cross country movement. These trailers cannot sustain such treatment. The ammo trailers, on the other hand, stood up very well. Surprisingly, the APC’s consumed on the average of only 40 gallons of gas (this is one-half their capacity) for the three day operation.
                </li>
                <li>
                  Troops do not properly follow-up ambushes. When an ambush is tripped, the force should stay in place, attempt to locate and search the bodies, secure the VC weapons, and, where the situation permits, cover the bodies by fire in an attempt to further ambush any VC attempting to recover the bodies.
                </li>
                <li>
                  It is extremely difficult to coordinate and control the movement of APC’s through heavily wooded areas. An air observer in the helicopter is essential for control and even then the rate of movement is slow and constant shifting of APC’s back and forth to straighten the lines is essential.
                </li>
                <li>
                  Troops are unnecessarily exposing themselves in the APC’s by sticking their heads and bodies too far out of the tracks.
                </li>
                <li>
                  Reconnaissance by air and map is considered very inadequate. The woods were much thicker than anticipated. The use of recon patrols several days in advance of such an operation, when possible, is recommended. This would also permit more adequate intelligence of the area. It is also felt that intelligence support from Brigade must be improved upon. What intelligence we got from the area we got ourselves from the 49th ARVN Inf Regt.
                </li>
                <li>
                  Traffic control points are essential when using Route One. Civilian traffic was heavy and interfered considerably with the operation.
                </li>
                <li>
                  Value of Mechanized Infantry was again proven. Had a straight Infantry Battalion attempted to cross the open rice paddy under the heavy enemy fire from the well dug in positions along the wood line, they would have received heavy casualties.
                </li>
                <li>
                  Use of extensive ambushes to screen preparation of perimeter and protect perimeters proved to be highly effective.
                </li>
                <li>
                  Casualty reporting from Co to Bn and from Bn to Bde must be more accurate and reports must be submitted more rapidly. It is believed the log net should be used for this to keep command net free. Minor wounds where a man stayed with his unit were not being reported. A standard form should be established by Brigade to permit giving casualty reports in the clear (i.e., fill in the blanks by line number).
                </li>
                <li>
                  Our system of keeping Brigade abreast of the situation must be improved upon. Forward CP must make at least hourly reports. Rear CP which should constantly monitor all transmissions should supplement information with periodic landline reports. It is also most helpful on a single battalion operation to have Bde monitor our net in an effort to stay informed.
                </li>
                <li>
                  Our communications secuity must be improved upon.
                </li>
                <li>
                  Companies must report enemy information more rapidly on the command net so that all units will have the benefit of the information.
                </li>
                <li>
                  More effective use can be made of artillery fire. The first day we should have preceded our movement by artillery fire. It was much better the second day. Use of H&I fires around perimeter at night was effective and could have been more so were it not for the proximity of the ARVN forces.
                </li>
              </ol>
              <div>
                FOR THE COMMANDER:</br>
                BILLY J. HAMMONS as Captain, Infantry
                Adjutant
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION CLEAN SWEEP
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitList">
                <!--- <div>FAIN, James L.</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "James" && $one_casualty->last_name == "Fain")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>SP4	11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>ROBINSON, Grant</div><div>PFC	11D10</div><div>WIA</div>
                <div>ROBINSON, Jessie C.</div><div>SP4	11B20</div><div>WIA</div>
                <div>HEGBERG, Alfred</div><div>PFC	11E10</div><div>WIA</div>
                <div>RAYMOND, Donald W.</div><div>SGT 11D40</div><div>WIA</div>
                <div>CARTER, William</div><div>PFC 	11C20</div><div>WIA</div>
                <div>AGUIRRE, Luis H. I</div><div>SP4	11D20</div><div>WIA</div>
                <div>BELL, Amos Jr.</div><div>SSG 	11D40</div><div>WIA</div>
                <div>BAILEY, Kedric L.</div><div>PFC	11D10</div><div>WIA</div>
                <div>HARRIS, Steve W</div><div>PFC	11D10</div><div>WIA</div>
                <div>BAKER, Albert</div><div>PFC	11C20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co.  A</div>
              <div class="casUnitList">
                <div>JACKSON, Carl</div><div>SP4 11B20</div><div>WIA</div>
                <div>MCNEIL, Eddie Jr.</div><div>SP4 11B20</div><div>WIA</div>
                <div>MOLIERE, Larry D.</div><div>PFC	11B10</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. B</div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>PVT 11B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>PARNELL, William B.</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "William" && $one_casualty->last_name == "Parnell")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>SSG	11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>GARIS, Gary W.</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Gary" && $one_casualty->last_name == "Garis")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>SP4	11B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>MARTIN, Guy W.</div><div>SSG	11B40</div><div>WIA</div>
                <div>CAVALIER, Clark P.</div><div>SSG	11B40</div><div>WIA</div>
                <div>DRAKE, Melvin P.</div><div>SP4	11B20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. C</div>
              <div class="casUnitList">
                <!-- <div>CASSUBE, Richard H.</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Richard" && $one_casualty->last_name == "Cassube")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>SGT 11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>BENNETT, Bertram S</div><div>SSG 11B40</div><div>WIA</div>
                <div>PAQUETTE, Earl R</div><div>SP4 11B20</div><div>WIA</div>
                <div>THOMPSON, David M.</div><div>SSG	11B40</div><div>WIA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="kahuku" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: KAHUKU</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <div>HEADQUARTERS</div>
              <div>1ST BATTALION (MECH) 5TH INFANTRY</div>
              <div>APO San Francisco 96225</div>
            </div>
            <div class="aarTopic">
              TLMAA-C 29 April 1966
            </div>
            <div class="aarTopic">
              <div>SUBJECT: Commanding Officer</div>
              <div>2d Bde Task Force</div>
              <div>25th Infantry Division</div>
              <div>APO U. S. Forces 96225</div>
            </div>
            <div class="aarTopic">
              1. Operation KAHUKU, search and destroy.
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>: 7 April 1966
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">General</span>:
              <div>
                The operation was conducted in Phuoc Vinh Ninh (XT 6814). The Bn OPIRD 16-66 was issued 061400APR66. The operation was conducted with elements of the 2d Bde Task Force. Lt Col Greer is the reporting officer. Task organization and commanders were as follows:
              </div>
              <div>
                1st Bn (Mech) 5th Inf: Lt Col T. U. Greer, commanding.</br>
                Co A: Capt. J. A. Renner, commanding.</br>
                B Trp, 3/4 Cav: Capt C. R. Quickmire, commanding.</br>
                Co C, 1/69th Armored: Capt P. C. Gutzman, commanding.</br>
                2d Platoon, Co B, 1/5th Mech:  1/Lt T. Jagosc, Plat Ldr.</br>
                Hvy Mort Plat:  1/Lt J. E. McQuinn, Plat Ldr.</br>
                Attachments and detachments: Incl 1.</br>
              </div>
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Intelligence</span>:
              <ol type="a">
                <li>
                  One platoon of local guerrillas had been reported in the area of operations. Exact location of the VC platoon was not known. It was believed that when the VC determined a major U.S. attack was under way they would attempt to withdraw to the safe areas vicinity Tan Hoa (XT 695145) and/or Dong Sao (XT 700105). It was suspected that the same general harassing and delaying tactics -- sniper fire and boobytraps -- would be employed by the VC. The VC were known to have several MG's and automatic weapons.
                </li>
                <li>
                  During the operation no platoon size force was encountered at any one time. The primary mission of the TF was to seal off all routes of escape with platoon size elements while the main force conducted search and destroy operations throughout the entire area of operations. The mission was accomplished, but only four - and five - man VC groups were encountered by our forces. Upon deploying into the AO, small groups of VC were engaged and killed in trenches, bunkers and spider holes.
                </li>
                <li>
                  The terrain consisted primarily of dry rice paddies,  moderate to thickly vegetated woods and scattered marshy streambeds. Observation and fields of fire were both restricted by the numerous hedgerows in the objective area. The only obstacle to tracked movement was the low marshy stream areas, but these posed no obstacle to dismounted personnel. The weather caused no change in the course of action.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Mission</span>: TF GREER attacks 070700APR to conduct search and destroy operations in assigned area of operations (Incl 1).
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Concept of Operations</span>: The Task Force established platoon size blocking positions on CP 6 (XT 690128) and CP 7 (XT 669132) to prevent VC movement in or out of Phuoc Vinh Ninh and attacked rapidly to conduct search and destroy operations in Phuoc Vinh Ninh.
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Execution</span>: The Task Force crossed the LD on time with the 2d Plat, Co B, 1/5th Mech moving rapidly to establish the blocking position on CP 6. The TF moved rapidly into the area and at 0750 Co C, 1/69th, operating the center of the area, received small arms fire from vic XT 676134. Automatic weapons fire was returned and contact broken but no results could be determined. At 0807 2d Plat, Co B, 1/5th Mech secured and established the blocking position vic XT 669132 without enemy contact. At 0811, B Trp, 3/4 Cav spotted nine civilians moving into a hole on the right of PL EGG (XT 686117). A small element was left to apprehend the civilians and the unit continued on its search and destroy mission. At the same time, Co A, 1/5 Mech sustained two WIA's from small arms fire from XT 675123. The casualties were minor and after treatment remained with the unit. At 0812, Co C, 1/69th Armored saw nine people moving into a hole vic XT 676118 and detached an element to apprehend the civilians. The civilians captured by B Trp, 3/4 Cav and Co C, 1/69th Armored were later turned over to the National Police. At 0813, Co A, 1/5 Mech received small arms fire and contact was broken. By 0817 all units had crossed PL CANDY (XT 678119). At the same time, the Bn Cmd Gp, which was to the rear of the forward elements, spotted five VC's getting out of a trench on PL CANDY vic XT 678119 with a MG and automatic weapons to engage the rear of the TF. The Bn Cmd Gp moved back and opened fire on the VC's who retreated into a trench with the machinegun. The VC's were pursued and killed and their MG and three carbines captured. Documents on one of the VC's disclosed that he was a squad leader of the C 306 Bn, Local Force, Cu Chi. Two WIA's were sustained by the Bn Cmd Gp. Co C, 1/69th Armored destroyed an enemy area with demolitions at 0841 and sustained one WIA from a falling tree vic XT 684127. At the same time, the 1st Plat, B Trp, 3/4 Cav seized and established the blocking position vic XT 690128. At 0851, Co C, 1/69th Armored spotted five VC's in a trench. The unit maneuvered and engaged the Vc's with automatic weapons and small arms fire, killing three (confirmed) and wounding one who died shortly thereafter. Intelligence received from the 2d Bde indicated that a VC company with a strength of 110 men with automatic weapons capability was in the operations area. At 0855 the Bn Cmdr aborted the Co C, 1/5th Mech planned mission in another area and committed Co C to assist in Operation KAHUKU. At 0902 a helicopter in support of Operation KAHUKU was hit by fire and forced down vicinity XT 695115. The pilot sustained serious wounds by burns and there were three ambulatory casualties. The WIA's were evacuated by Dust Off and the equipment was extracted by ground troops in the area. At 0909 another helicopter received fire and had to return to Cu Chi. No casualties were sustained. At 0922, B Trp, 3/4 Cav found a VC base camp vicinity XT 684123.  A detailed search of the area disclosed no weapons or equipment and the area was destroyed. At 0925 a VC PW in the area stated that the VC's had moved out and were in the Bao Cap area and artillery fires were placed throughout the Bao Cap area. At 0933, Co A, 1/27th Inf was dispatched forward to augment the effectiveness of the blocking position vic XT 669132. By 0937 TF GREER had swept through the entire objective area and received the order to return to PL EGG and make another sweep through the area. At 0950, Co C, 1/5th Mech arrived in the objective area and was given the mission of conducting a detailed search of the area north of the LD up to PL CANDY attacking from west to east between CP 13 (XT 675120) and CP 17 (XT 677118). At 1000, Hvy Mortar Platoon, unable to fire due to the employment of friendly troops throughout the objective area, received orders to displace and establish a blocking position to the southwest, vic CP 3 (XT 677112). At 1027, Co C, 1/69th Armored reported the killing of nine VC's in a trench on PL BUNNY (XT 691124) and captured several documents and weapons. Co A, 1/5th Mech also killed two VC's  in a tunnel at 1052 on CP 4 (XT 677124) and gave chase to a third who escaped with an automatic weapon. B Trp, 3/4 Cav located a house vicinity XT 677122 that was boobytrapped and destroyed the structure. By 1115 all units had returned to PL EGG and immediately started the return search of the area. The search progressed slowly and without contact and at 1132 Co C, 1/5th Mech found a 250 lb bomb that was rigged for command detonation vicinity XT 686125.  The bomb was destroyed and the unit continued its search and at 1146 found an undetermined number of AP mines in a house vic XT 677118. A further search of the area revealed a cache of small arms ammunition. No enemy could be found and all munitions and VC structures were destroyed. At 1152, Co C, 1/5th Mech found a large cache of military equipment and documents in another house vic XT 677188. A check of the cache revealed that it was boobytrapped with CBU bombs. The house and the cache were destroyed. at 1201, B Trp, 3/4 Cav killed one VC and captured and destroyed an undetermined number of grenades on PL BASKET vicinity XT 693124. At 1215, B Trp, 3/4 Cav found a dead VC, female, in a tunnel in the same area. There were several boobytraps and hand grenades found with the body. The boobytraps and grenades were destroyed. Between1216 and 1430 sporadic and ineffective sniper fire was received from the southwestern section of PL EGG vic XT 658116 and at 1430 Co A and Co C,  1/5th Mech received the order to conduct a two company sweep through the Ap Dong Sao area (XT 700105). Both units made a NW-SE sweep through the entire area finding and destroying three boobytraps; however, no enemy contact was made and the units made a return sweep through the area and closed into base camp at 1620. The 49th ARVN Regt assumed the responsibility of the mop-up operation and moved in with dozers as the TF started a homeward sweep toward base camp. B Trp, 3/4 Cav sustained two minor WIA's from small arms fire from vic XT 689118 and killed one VC vic XT 689117 who was attempting to depart the area of operations. At 1613, B Trp killed another VC in a trench vicinity XT 689116. By 1800 all elements had closed to base camp with the exception of  B Trp, 3/4 Cav, which was providing security for the downed helicopter.
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Supporting Forces</span>: Co C, 1/5th Mech, Capt J. G. Andress, commanding, responded rapidly and greatly enhanced the effectiveness of the search and destruction of VC's and Vc structures in the area of operations. The Bde reaction force, Co A, 1/27th Inf, Capt L. J. Mayene, commanding, was committed into the area of operations by the Bde CO to strengthen the blocking position on CP #7 vic XT 669132. Light fire team, UH1B armed helicopters supported the TF.
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Results</span>:
              <div>
                a. VC's killed:
                <ol>
                  <li>
                    26 VC's killed (body  count )
                  </li>
                  <li>
                    19 VC's killed (estimated)
                  </li>
                  <li>
                    18 civilians detained and turned over to National Police
                  </li>
                </ol>
                b. Destroyed:
                <ol>
                  <li>
                    17 bunkers
                  </li>
                  <li>
                    5 tunnels
                  </li>
                  <li>
                    20 buildings
                  </li>
                  <li>
                    18 boobytraps
                  </li>
                  <li>
                    30 hand grenades
                  </li>
                  <li>
                    8 CBU bombs (boobytrapped)
                  </li>
                  <li>
                    1  250lb bomb (boobytrapped).
                  </li>
                </ol>
                c. Captured:
                <ol>
                  <li>
                    Miscellaneous papers and documents
                  </li>
                  <li>
                    4 Russian carbines, 7.62mm
                  </li>
                  <li>
                    1 U. S. carbine, M2
                  </li>
                  <li>
                    (4) 2 U. S. BAR's
                  </li>
                  <li>
                    2 Chicom 7.62mm assault rifles
                  </li>
                  <li>
                    1 Russian MG 34,  7.92mm LMG
                  </li>
                  <li>
                    1 Chicom 7.62mm carbine.
                  </li>
                </ol>
              </div>
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Administrative Matters:</span>:
              <ol type="a">
                <li>
                  <u>Supplies</u>:Operation KAHUKU was a one day operation and no resupply was necessary.
                </li>
                <li>
                  <u>Maintenance</u>: During the course of the operation the TF had several tanks and APC's mired; however, all were extracted and no major maintenance problem occurred during the operation as all vehicles returned to base camp under their own power.
                </li>
                <li>
                  <u>Transportation</u>: The TF vehicles consumed approximately one-half the fuel in their tanks during the operation and no refueling was necessary during the operation.
                </li>
                <li>
                  <u>Medical</u>: Casualty list, Incl 2.
                </li>
                <li>
                  <u>Communications</u>: No communications problems were encountered during the operation.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Special Equipment & Techniques</span>: None
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">Commander's Analysis</span>: The commitment of Co C, 1/5th Mech into the area of operations was necessitated by the large number of tunnels, bunkers and buildings in the area which required a thorough search. The Tank Co and Cac Troop were not capable of nor prepared for conducting detailed ground or underground searches.
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">Conclusions & Lessons Learned</span>:
              <ol type="a">
                <li>
                  The speed and violence of the attack prevented most of the VC from escaping.
                </li>
                <li>
                  No air or artillery preparations were fired to forewarn the VC of an impending attack. Extensive preparations are habitually employed by both ARVN and U.S. Forces prior to any attack. Supporting fires were preplanned and on call for this operation.
                </li>
                <li>
                  The coordinated use of blocking positions and armed helicopters to seal off  the area was very effective.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              FOR THE COMMANDER</br>
              BILLY J. HAMMONDS</br>
              Captain, Infantry</br>
              Adjutant
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION KAHUKU
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">HHC</div>
              <div class="casUnitList">
                <div>JORDAN, Herman</div><div>Maj 1542</div><div>WIA</div>
                <div>BOX, Delbert</div><div>PFC 11B10</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co A</div>
              <div class=casUnitList>
                <div>CROWLEY, Morris</div><div>SGT 	11B40</div><div>WIA</div>
                <div>FRANKS, Mack H.</div><div>PFC	11B10</div><div>WIA</div>
                <div>JEROLDS, James R.</div><div>SSG	11B40</div><div>WIA</div>
                <div>FORMAN, Thomas G.</div><div>PFC	11H10</div><div>WIA</div>
              </div>
              <div class="casUnitName">B Trp, 3/4 CAV</div>
              <div class="casUnitList">
                <div>MICHALAK, Stanley</div><div>PFC	11E10</div><div>WIA</div>
                <div>ROBINSON, William F.</div><div>PVT E2	11B20</div><div>WIA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="honolulu" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: HONOLULU</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <div>HEADQUARTERS</div>
              <div>1ST BATTALION (MECH) 5TH INFANTRY</div>
              <div>APO SAN FRANCISCO 96225</div>
            </div>
            <div class="aarTopic">
              TLMAA-C 23 MARCH 1966
            </div>
            <div class="aarTopic">
              SUBJECT: After Action Report – Operation Clean Sweep
            </div>
            <div class="aarTopic">
              <div>TO: Commanding Officer</div>
              <div>2d Bde TF, 25th Inf Div</div>
              <div>APO US Forces 96225</div>
            </div>
            <div class="aarTopic">
              1. OPORD 14-66 (Operation HONOLULU). Search and destroy.
            </div>
            <div class="aarTopic">
              2. 140700MAR66 - 191932MAR66
            </div>
            <div class="aarTopic">
              3. 1st Battalion (Mechanized), 5th Infantry, in conjunction with the 2nd Bde Task Force, 25th Infantry Division, conducted search and destroy operations in Hau Nghia Province vic Tan Phu Thuong (XT 4802), Hoa Khanh (XT 4800), (XT 5102), Loc Thanh (XT 4416) Ap Cay Queo (XT 5411), and Duc Ngai (XT 5608).  The Bn OPORD No 14-66 was issued 130900 MAR66 after receipt of 2nd Bde TF OPORD 17-66 on 111200MAR66. Lt Col T. U. Greer is the reporting officer. Task Organization and commanders were as follows:
              <ol type="a">
                <li>
                  1st Bn (Mech)  5th Inf:  Lt Col  T. U. Greer, commanding.
                  <ol type="1">
                    <li>Co A:  Capt  J. A. Renner,  commanding.</li>
                    <li>Co B:  Capt  E. B. Vickery, commanding.</li>
                    <li>Co C:  Capt  J. G. Andress, commanding.</li>
                    <li>Recon Plat:  Lt  D. T. Schou.</li>
                    <li>Hvy Mort Plat:  Lt  J. E. McQuinn.</li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Intelligence</span>:
              <ol type="a">
                <li>
                   Intelligence estimates indicated that the area of operations was completely controlled and dominated by the VC and, in view of the extensive reported fortifications, VC unit dispositions, installations, bunkers, base areas and trench systems, it was evident that the area had been extensively occupied by VC units. The Oriental River, a known major logistical line of communication for the VC, was believed to have established along the banks and surrounding heavily vegetated areas, company, battalion and regimental size supply bases.  Platoon size units were known to operate in the less concealed areas north and northwest of the Oriental River and Bao Trai (XT 5304).  VC company and battalion size units have operated in the area north and northwest of the Oriental River and Bao Trai to attack lightly defended outposts, isolated small units or infiltrate to the north through the Ho Bo Woods (XT 6426)  or the Bo Lai Woods (XT 5034).  A detailed Order of Battle was provided in the 2nd Bde Intelligence annex which itemized the various units that are known to have operated in the area for the past six  to twelve months. There are no specific locations or dispositions of enemy units available. Company or larger size units were expected to move to or remain near the more secure and fortified areas along the Oriental River. The VC were expected to use squad and platoon size forces to harass and attempt to delay advancing friendly forces.
                </li>
                <li>
                  Enemy situation during operation: During the entire operation there was no enemy contact which could be estimated as any larger than two VC squads. No main forces, local force, or elements thereof, were engaged. However, thorough questioning of the civilians indicated that within the past month several VC units had established overnight bivouac areas in the vic XT 5101, XT 5100, and XT 5199. A search of the area indicated that it had been utilized recently. One POW captured on 17 Mar 66 stated that he was from a local guerrilla unit of approximately 30 VC, he would not state the unit designation, but he did say that the unit departed the area at approximately 0100 hours 17 Mar 66 by crossing the Oriental River vic XT 414127. A thorough search of the wooded areas along the banks of the Oriental River indicated that the VC were not utilizing this area as previously reported but were operating extensively in the area approximately 800 meters from the river. However, heavy small arms fire was received from grid squares XT 5097 and XT 5098.
                </li>
                <li>
                   Terrain and Weather. During Phase 1 of the operation, southwest of Bao Trai, the terrain was sufficiently vegetated in various stages to offer concealment to small VC elements attempting to harass advancing forces with small arms fire. Because the specific location of any VC unit was not known, specific concealed routes to an area could not be used. This places the attacking or searching forces at a disadvantage when concealed movement is considered. There were many obstacles in the entire area of operation but there was a distinct difference in their type and effect. Phase 1 found track vehicle movement impossible beyond a general line of 1,500 - 2,000 meters northeast of the Oriental River. Inasmuch as this is the dry season, the fact is particularly significant. Foot movement beyond the untrafficable area for M113 personnel carriers was difficult but by no means beyond the capability of any infantry unit. Phase 2 offered different obstacles to tracked movement but in no way stopped mounted movement. These obstacles primarily consisted of large ditches or trenches which generally extended from north to south in the vic XT 4116 and XT 4117. These trenches averaged 6 to 8 feet wide and four to six feet deep. There were bypasses but their detection and utilization caused movement to be slowed considerably and in many cases caused canalization of entire elements. Observation in the Phase 1 area was fair to good. Fields of fire were excellent. Observation in the Phase 2 area was good to excellent and fields of fire were  also excellent.
                </li>
                <li>
                   Fortifications: The Phase 1 area was extensively fortified primarily with fighting positions in all dikes.  Positions were orientated to place fire in all directions from easily constructed but well protected and concealed positions. The Phase 2 area was heavily fortified, particularly in the area XT 417159. Tunnels including large underground rooms had waterproof paper ceilings. The area was heavily boobytrapped and several fighting positions were found surrounding the tunnel area. Civilians stated that the VC utilize this area quite extensively. It is recommended that the position be bombed to attempt maximum destruction to preclude further use by the VC.
                </li>
                <li>
                  CA/Psy Ops.  The civilians in the area of operations were generally friendly and willing to give information. Particular success was noted among young children for their fears of the VC are not as deeply imbedded in their minds. Interrogation of prisoners indicated that the VC had previously stored rice in the hamlet Ap An Loi, XT 438155, by storing just a few bags in each house of the village.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Mission</span>: 1st Bn(Mech) 5th Inf conducted search and destroy operation commencing 140900MAR66 to include disrupting VC infiltration routes along the Oriental River.
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Concept of Operation</span>: 1st Bn (Mech) 5th Inf conducted a road march to the attack position GUAVA 140730MAR66 as part of the 2nd Bde TF. Movement across LD 141000MAR was a coordinated attack with the 2nd Bn, 27th Inf, airmobile assault landing on their assigned area of operation. The commanders concept visualized a rapid movement along two axes to Objectives 1 and 10 by Co A and Co B, respectively. Co C in reserve, occupied PSN 5 initially. If the terrain was such as to deny movement to APC's, dismounted operations envisioned Co A seizing Obj 1 and Co B seizing OBJ 2. Arty and mortar support on call. (Incl 1, Operation overlay #1).
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Execution</span>:
              <div>
                The battalion moved along Route BLUE 140715MAR66 to the attack position GUAVA without opposition. The Recon Platoon moved as the Bn advance guard, followed by Co A, Co B, Comnd Op, Hvy Mort Plat and Co C.  Upon arrival in the attack position, Recon Plat located several bunkers and two sampans vic XT 543022. A thorough search of the area disclosed nothing of significance. By 0931 hours all elements were in the attack position and crossed the LD at 1000 hours, assisted by the Recon Plat. First contact was made by Co B, when they received small arms fire from vic XT 476012. Fire was returned and contact broken by the VC with no known casualties. At 1045 hours, Co A discovered several documents in a hole vic XT 478010. Co B suffered three WIA's from enemy fire enroute to Obj 10.  By 1330 hours it became evident that none of the units would be able to continue the mounted attack and the alternate plan (dismounted attack) was placed into effect. Co A continued the attack dismounted to Obj 1, Co B to Obj 2 and Co C (Bn reserve) was ordered to follow Co B by bounds. At 1230 hours a VC sqd vicXT 485017 started to deliver heavy small arms fire against Co B, which was attempting to extract mired vehicles. Co B engaged the VC and Co C was moved around Co B to seize Obj 2.  After suppressing the VC fire by fire and maneuver, the VC immediately broke contact, leaving behind six packs, complete with clothing and equipment, ammunition, grenades and several documents. Co B was given Obj 3 as their new objective. At 1300 hours Co B again made contact and killed 7 VC (3 conf, 4 est) vic XT 483006. Recon Platoon was relieved of the mission of route reconnaissance from Obj 4 to Obj 3 and committed to search Obj 6. Co A seized Obj 1 by 1347 against light small arms fire and discovered many bunkers and a large cave on the objective area. At 1443 Co B captured a VC at XT 485017 hiding in a hole. He was unarmed but carrying linked ammunition and miscellaneous equipment. Recon Platoon found fresh diggings vic XT 497027 and two VC sampans during their search of Obj 6.  At 1536 hours Co B was brought under fire from vic XT 474009 and sustained two WIA's. VC's were taken under fire and broke contact. By 1700 hours all units were coiled on their objectives. Recon Plat was brought forward to secure Co B's mired vehicles vic XT 488017 and the remainder of the battalion secured itself for the night in position 14.
              </div>
              <div>
                First contact on 15 March came at 0400 hours when Co C received light  small arms fire from XT 474015. There were no casualties and the VC broke contact immediately upon receiving return fire. At 0755 Co A sighted a sampan moving across the river at XT 463014 and engaged it with small arms fire. No estimate of casualties was made. Contact was lost due to undergrowth and fog. The recon Platoon continued their sweep of Obj 6 at 0900 hours and found an injured civilian whose cart had just hit a mine. The civilian was wounded, but, before being evacuated, he informed the platoon leader that the VC were located in Obj 8 vic XT 514016. However a search of the area revealed nothing. By 0955 hours all companies were on the move for the day's operation.  Co A moved on to Obj 5 at 1055 hours and commenced their search,  finding grenades and small arms ammo. At 1100 hours Co C discovered three rocket launcher rounds and Chicom grenades in a home, vic XT 485018, while enroute to Obj 4.  By 1105 hours Co B completed the search of Obj 8 and continued their sweep to Obj 10. Recon Platoon commenced their sweep of Obj 9 at the same time. At 1117 hours Co C was brought under VC small arms fire from vic XT 479006 and suffered one WIA. Co A completed the search of Obj 5 and began movement back to Area 14 at 1140 hours.  Co C located a cache vic XT 498005 at 1253 hours consisting of ammunition, weapons parts, combat packs and equipment. By 1334 Co B completed its search of Obj 10 and  continued to Obj 11, receiving light small arms fire while crossing canals but sustaining no casualties. The recon Platoon completed the search of Obj 9 and reconnaissance of routes to Obj 13 at 1443 hours and was given the mission of guiding Co A along the route to Obj 13. Co A dismounted vic XT 496991 and started the sweep for Obj 13. At 1507 hours Co C received small arms fire from vic XT 484004 and at the same time a bobbytrap was tripped, resultiing in two WIA's and one KIA. Co C employed fire and maneuver to supress the enemy fire.  At 1518 hours, during an aero-medical evacuation,  small arms fire broke out, resulting in two more WIA's. Fire was returned and contact was immediately broken by the VC. By 1540 hours Co C completed the seizure of Obj 4. At 1646 Recon Platoon arrived at Psn 15 and started a detailed search of the surrounding areas and by 1750 hours all units were coiled for the night. By 160900MAR all units were engaged in their respective missions. Co A was sweeping south to Objectives 12 and 13, Co B was sweeping NW to Obj 8, and Co C was sweeping SE to seize the area between Obj 13 and the battalion left (SE) boundary. At 1000 hours Co B located a minefield vic XT 486989 and started clearing a path through it. At 1038 a boobytrap was tripped vic XT 490986, inflicting two WIA's on Co B. By 1130 hours Co A had secured Obj 12 and was enroute to Obj 13 with negative contact. Co C was taken under fire by approximately  six VC with automatic weapons vic XT 495990. Co C maneuvered against the VC's who quickly moved into a bunker and exfiltrated through numerous tunnels. A tunnel search produced negative results. Co B started to receive small arms fire from XT 495991 at 1226 hours and contact was broken when small arms and artillery fire was placed on the target. At 1518 hours Co A completed its search of Obj 13 and started its sweep back to Obj 8. Co B closed into Position 15 at 1535 hours and the company commander was evacuated due to wounds received on 14 Mar 66.  Lt  F. G. Trennery, the executive officer, assumed command. At 1522 hours Co C was engaged by two .50 cal MG's and small arms fire from vic XT 506978 and XT 512981. The unit employed fire and maneuver, supported by mortars and artillery and by 1714 hours the VC's were neutralized and an estimated ten VC's killed.  Co C suffered four WIA's from this action. Recon Platoon hit an AT mine, damaging one APC vic XT 518025 at 1750 hours, and suffered one minor casualty who was returned to duty at 1800 hours. By 2045 hours all units closed into PSN 15 and four ambushes were established to protect the perimeter.  At 2213 hours ambush #1 at XT 522013 was sprung when two VC's entered the killing zone. One Vc was killed (conf) and one  estimated wounded. The ambush remained in the vicinity in an attempt to ambush any recovery party. At 0107 hours the ambush returned with the body and a wallet. At 0700 hours one wounded VC, suspected to have been the second man seen by the ambush, was captured on the battalion perimeter. The battalion commenced to move to a new area of operations at 0710 hours and crossed the LD at 170900MAR in accordance with 2d Bde Fraq O #1 (encl 2, Operation overlay #2). Enroute to the LD Co C hit a mine at XT 471118,  damaging one APC and sustaining six WIA's, four of which were evacuated and two of which returned to duty. Co A attacked along Axis POPPY to seize Obj FRED, Co C along Axis ROSE to seize Obj GEORGE and recon Platoon along Axis DAISY to seize Obj JACK. Co B, in reserve, was to occupy Psn M and conduct search and destroy operations in Positions A, B and C. By 1000 hours lead elements were along PL SUZY and Co B and Recon Platoon were just forward of PL MARGE. Recon Platoon located a classroom with trenches and tunnels leading out of the area at XT 448159. The classroom had a capacity to seat 25 persons and four feet of it was below the surface of the earth. A thorough search was conducted and the classroom destroyed. At 1014 hours Co A encountered boobytraps vic Obj D but suffered no casualties. At 1034 Co A hit an AT mine vic XT 421158, damaging one APC but sustaining no casualties. By 1147 hours Co C was on Psn GEORGE and searching the area. At 1230 hours Recon Platoon moved to the north edge of Psn JACK and Co A on Psn FRED. Co C found civilians hiding in holes on Psn GEORGE and also found some documents. Recon Platoon detained one civilian on Psn JACK who revealed that 20 VC had recently passed through the area wearing green uniforms, helmets and carrying one mortar. At 1430 hours Co B captured a VC vic XT 438155. Co A suffered two WIA's due to a boobytrap on Psn FRED at 1547 hours and at 1605 hours Co B encountered a heavily boobytrapped area vic XT 427177 (Psn 4). Co B proceeded slowly, destroying all boobytraps and mines in the area. Recon Platoon detained 26 civilians and 30 children on Psn JACK and, after interrogation by National Police, one was found to be a VC. The Platoon saw several signs which stated "Beware of Boobytraps and Mines," and destroyed three boobytraps which were found. By 1800 hours all units had completed their assigned searches and were establishing their night perimeters. Five VC's were spotted by Co C vic XT 401178 who engaged them with small arms fire. A later check of  the area revealed several heavy drag marks and three VC were estimated to have been killed. By 180800MAR all units were engaged in their assigned operations. Co A was given the mission of searching and destroying VC facilities vic Psn FRED and the area vic XT 417159. Co B was assigned areas L, P and N and was also required to attach on a platoon to A Troop, 3/4 Cav. Co C was assigned to the area surrounding Psn GEORGE and the Recon Platoon to areas R and S. Co C located an extensive tunnel network with fortified fighting positions at XT 417159. The area was searched thoroughly and found to contain many boobytraps and mines. The boobytraps inflicted two WIA's and one KIA on Co A during the search. Attempts to destroy the area completely failed and an air strike was requested to hit the area after the operation was over. Co B also encountered a tunnel system on Psn P at 1101 hours and Co C located one vic XT 412175. A search of the tunnels disclosed a set of jungle fatigues with NCO chevrons imprinted on it and two CBU bomb pods. Co B evacuated two VC's and two VC suspects who were captured vic XT 467156. Recon Platoon discovered a 24 ton cache of rice vic XT 457160 (Psn S). Eight tons were bagged and evacuated along with a female VC suspect and her child. The platoon from Co B, attached  to Troop A, 3/4 Cav, hit a mine vic XT 474127 and received no casualties; however, the platoon sustained two WIA's due to boobytraps vic XT 462130. By 1930 hours all units were in the assembly area and preparing for night operations. The battalion began the final phase of the operation at 190025MAR when Co C departed the assembly area for the dismount point (Psn 7) (Incl 3, Operations Overlay #8). One APC hit a mine enroute and one minor WIA was sustained, given medical attention, and returned to duty. The company dismounted in Psn T and moved along a prescribed route to Obj U where a reported 100 VC were in bivouac. The unit reported being in position around Obj U; however, at 0545 hours, a daylight check of the position revealed that the company was 1,000 meters west of Obj U. Co C started to receive small arms fire from vic XT 525106 and immediately returned fire. The VC broke contact and Co C resumed movement to Obj U without casualties. At 0715 hours the Recon Plat departed to establish blocking positions X, Y, and Z. Co A followed at 0725 hours to conduct search and destroy operations in Area BLUE. By 0857 Co A and Co C were sweeping through Obj BLUE.at 0937 hours 8 to 10 personnel were seen running into the NE portion of Obj BLUE. A detailed search by both A and C companies revealed only civilians in the area. By 1130 hours Co A proceeded to Obj GREEN, followed shortly thereafter by Co C. Before leaving, Co A found a VC blood-stained pack and several signs in the area which read "Beware of Mines and Boobytraps." A civilian was also found in the area but was released upon the advice of the National Policeman. The Recon Platoon was relieved of the blocking positions X, Y and Z and moved to provide the SE flank security for Co A at 1059 hours. Co B was sent to check area V but found the people to be friendly and conducting normal activities. Upon questioning 15 to 20 civilians they determined that no VC had been in the area for some time. A report was received of 100 VC located at XT 545105 as recently as 190700MAR and Co A moved to make contact. By 1433 Co B completed its search of Psn V and instructed to sweep the woods NE of and along the road to Obj GREEN. At 1528 Co A received small arms fire from a rice paddy vic XT 565094 and engaged the target with small arms, artillery and mortars. A total of ten VC were estimated to have been killed in this encounter. At 1635 Co A started its return to base camp followed by Recon Platoon, Hvy Mort Plat and Co C. Co B remained in the area of operations as the Bde reaction force and was released at 1730 hours. The last element closed into the battalion base at 1932 hours.
              </div>
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Support Forces</span>:
              <ol type="a">
                <li>
                  Btry C, 1st Bn, 8th Arty (DS).
                </li>
                <li>
                  Co B, 65th Engr Bn, provided a two man demolition team for each company and Recon Platoon.
                </li>
                <li>
                  Each company and Recon Platoon was provided with one interpreter and one National Policeman.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Results</span>:
              <ol type="a">
                <li>
                  Personnel Summary
                  <ol>
                    <li>
                      Friendly casualties: KIA - 2, WIA - 30
                    </li>
                    <li>
                      VC: Killed - 5 (conf). 31 (est), 4 captured. Suspects detained and evacuated : 6 men and one woman and child.
                    </li>
                  </ol>
                </li>
                <li>
                  Equipment and material losses
                  <ol>
                    <li>
                      Friendly: Five APC's were damaged by AT mines. One of these vehicles has been repaired and returned to the unit. The remaining four must be repaired at support maintenance.
                    </li>
                    <li>
                      VC: (Items captured and/or destroyed)
                      <ol>
                        <li>
                        Ammunition and weapons.
                          <ol type="a">
                            <li>7.92 Chicom linked rounds - 750.</li>
                            <li>.30 cal loose rounds - 250.</li>
                            <li>AT rockets - 5.</li>
                            <li>Grenade launcher - 1.</li>
                            <li>Chicom MG spare barrels - 2.</li>
                            <li>Chicom grenades - 49.</li>
                          </ol>
                        </li>
                        <li>
                        Miscellaneous VC equipment.
                          <ol>
                            <li>Combat packs - 8.</li>
                            <li>Medical kits - 1.</li>
                            <li>Entrenching tools - 6.</li>
                          </ol>
                        </li>
                        <li>
                        Mines and boobytraps.
                          <ol>
                            <li>Mines, AT, detonated by vehicles - 7.</li>
                            <li>Mines, AP, detonated by vehicles - 8.</li>
                            <li>Boobytraps detonated -7; destroyed in place - 33.</li>
                          </ol>
                        </li>
                        <li>
                        Installations destroyed.
                          <ol>
                            <li>Bunkers - 30.</li>
                            <li>Tunnels - 6.</li>
                            <li>Classrooms - 1.</li>
                            <li>Sampans - 14.</li>
                          </ol>
                        </li>
                        <li>
                          Food supplies: 8 tons of rice were evacuated from the operations area.
                        </li>
                        <li>
                          Documents: Approximately three boxes of documents were found or taken from POW's, which resulted in approximately 45 actual VC documents of varying degrees of importance. Many of the documents have been forwarded to MACV for further evaluation.
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Administrative Matters</span>:
              <ol type="a">
                <li>
                  The battalion started operations with a strength of 761 and terminated with 732 personnel, six of which were WIA's returned to duty.
                </li>
                <li>
                  Supplies. Resupply was accomplished by two methods. One method was aerial resupply by helicopter from base camp. The other method was the positioning of Class III in a Bn trains located in the Bn trains area (Psn ACE). During the aerial resupply, there were two instances that items outloaded were not delivered on the second day (15 March 1966). One helicopter was unable to land at Co A due to enemy fire, and another helicopter was unable to land at the Bn CP due to darkness. The failure to complete delivery resulted in the loss of approximately 300 meals of "A" rations. Although only the two shipments were not delivered, several resupply shipments could not be made because the helicopter was diverted for  use on heliborne operations, airlift of POW's and extraction of captured rice. The diversion of helicopters also hindered resupply in that the unit was never certain of when helicopters would be available. At times the unit had two or three helicopters for its use; however, due to the lack of available information until the last moment, time was lost getting supplies properly positioned. The uncertainty of available helicopters required water and hot rations to be prepared well in advance and kept sitting at the helipad. Operations were late starting in the mornings because of late arrival of helicopters to extract empty water cans and other equipment. Helicopters were never available earlier than 0800 hours and sometimes not before 1000 hours. The use of different helicopters during the day  required more detailed instruction to each pilot as to location and call signs. The resupply of Class III was handled by the Bn trains by tactical vehicles returning to the position to refuel or provide escort for wheeled gasoline tankers to unite. Brigade's failure to move the trains forward on the 4th day made it more difficult to refuel. The battalion expended 30,000 rounds of 5.56mm, 3,700 rounds of 7.62mm, 7,500 rounds of cal. 50,  350 40mm grenades, 439 81mm mortar rounds, 8 rounds 90mm HE, 414  4.2" mortar rounds, 256 hand grenades, 223 smoke grenades, 22M18A1 mines, and 100 pounds of demolitions.
                </li>
                <li>
                  Maintenance. Five APC's, M113, were damaged by mines. Of the five damaged, one was repaired by Bn maintenance and the others were evacuated to higher support echelon. Seven other APC's, M113, developed maintenance trouble of some type; however, they were repaired on site or in the Bn trains and returned to using unit. The largest problem was the evacuation of damaged or inoperative tracks. The shortage of authorized VTR's required tactical vehicles to be diverted for use as recovery vehicles. The unit requested a VTR M-88 from Bde for use in evacuation; however, by the time the VTR was available, evacuation had been accomplished by other means. The brigade's failure to move the trains forward on the 4th day made the evacuation of damaged vehicles very difficult.
                </li>
                <li>
                  Transportation: The battalion consumed 4,657 gallons of MOGAS.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Special Equipment & Techniques</span>: Aluminum balks for engineer bridges used as footing proved very helpful in recovery operations. 100 foot cables are also a necessity in recovery operations.
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">Commander's Analysis</span>: At 2115 hours , 16 March, a report rated with an A-1 reliability was received stating that approximately 100 VC were located in the woods at coordinates XT 529113. It is known that the VC frequently move soon after dawn and it was felt that the best way to insure hitting the enemy was to have the area surrounded by dawn, thus the decision to move C Co at night. As it turned out, two things prevented success. First, the VC were in area BLUE but not in the woods at coordinates XT 529113. Secondly, the company went into position 1000 meters west of the objective. It is believed that we are definitely capable of maneuvering at night, especially between the hours of 2400 and 0500, in order to gain surprise.
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>
                  Resupply by helicopter is a real problem. Companies must stop movement by about 1630 hour to allow time for helicopter to bring in supplies and to permit reconnaissance of ambush sites and company perimeters. When a heliborne operation is in progress in the afternoon, it denies use of helicopter for resupply and caused one company to go without food or water for one night. Helicopters must drop in next morning to pick up empty water cans. On both mornings companies couldn't move until 0945 because choppers were so late in arriving.</br>
                  RECOMMENDATION: Helicopters should be made available sooner and companies must leave a detachment to secure an LZ and catch up later with the company.
                </li>
                <li>
                  Platoon leaders themselves must call in artillery fire more. The arty FO  is with the company commander and in close terrain the exact location of forward platoons is not known by the FO. Hence, the platoon leader of the forward platoon, who also knows the enemy location, must call in the artillery fire more often.
                </li>
                <li>
                  The VC are definitely employing AP mines with their AT mines. The operation proved that the VC can and will emplace mixed minefields, contrary to previous information received.
                </li>
                <li>
                  Broadcasts run all young men out of area. All young men moved out of the Phase 2 area prior to the arrival of friendly forces. All exits for VC, draft dodgers, ect, must be blocked. The exodus evidently started as a result of warning from heliborne loudspeakers prior to the operation.</br>
                  RECOMMENDATION: It is believed that a much larger study of this technique of alerting all types of personnel in the area should be made. It is believed that through various means the VC that were in the area knew of the impending operation and chose to exfiltrate from the area.
                </li>
                <li>
                  VC hide in rice paddies rather than in woods when the paddy is thick. Searches must be extended into the rice paddies with equal emphasis.
                </li>
                <li>
                  System to indicate resupply items must be worked out. Bn S-4 will develop a line item list. This will permit units to order by  line item (eg., Line Item #1 (which happens to be 7.62mm linked, unit-1 box) 6 boxes). This will also remind units of items most likely to be forgotten,  like batteries and smoke grenades.
                </li>
                <li>
                  Companies need a "remain overnight box" to be brought in by helicopter in the evening and picked up in the morning. This should contain trip flares, Claymores, starlight devices, sniperscopes, ect.
                </li>
                <li>
                  S-4 with his M577 must be in the field with the battalion for all operations.
                </li>
                <li>
                  Mounted sweeps will seldom turn up enemy small forces unless they are willing to be found. A detailed house-to-house search is required to turn up anything.
                </li>
                <li>
                  Movement at night to surround a VC area at dawn will work. VC does not expect us to move at night.
                </li>
              </ol>
            </div>
            <div>
              <div class="aarTopic">
                FOR THE COMMANDER</br>
                D. H. SNODGRASS</br>
                CWO (W-4)</br>
                Ass't Adjutant</br>
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK</div><div>TYPE</div>
              </div>
              <div class="casUnitList">
                <div>SAUERS, Raymond D.</div><div>PFC</div><div>WIA</div>
                <div>TERRY, Cecil F.</div><div>SP4</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. A</div>
              <div class="casUnitList">
                <div>GARCIA, Joe N.</div><div>SSG</div><div>WIA</div>
                <div>CROSBY, Henry D.</div><div>PVT</div><div>WIA</div>
                <div>MC LANE, Richard</div><div>SP4</div><div>WIA</div>
                <div>BUNCH, Jimmy D.</div><div>SGT</div><div>WIA</div>
                <div>BROWER, Larry N.</div><div>SP4</div><div>WIA</div>
                <div>SHONO, David D.</div><div>SP4</div><div>WIA</div>
                <!-- <div>STANDS, Daniel G.</div><div>PVT</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Daniel" && $one_casualty->last_name == "Stands Jr")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>PVT</div>
                    <div>KIA</div>
                  @endif
                @endforeach
              </div>
              <div class="casUnitName">Co. B</div>
              <div class="casUnitList">
                <div>VICKERY, Ellison B.</div><div>CAPT</div><div>WIA</div>
                <div>BROER, James</div><div>1/LT</div><div>WIA</div>
                <div>BROWN, Eugene</div><div>SSG</div><div>WIA</div>
                <div>MC GULLAM, Dennis</div><div>SP4</div><div>WIA</div>
                <div>GUSTAVUS, Theodore</div><div>SP4</div><div>WIA</div>
                <div>KAPRAL, William</div><div>MSGT</div><div>WIA</div>
                <div>CORRERA-MORALES, F.</div><div>PVT</div><div>WIA</div>
                <div>RIVERA-SIERRA, E.</div><div>PFC</div><div>WIA</div>
                <div>DAWSON,  Preston</div><div>SGT</div><div>WIA</div>
                <div>SOUZA, Frank</div><div>SSG</div><div>WIA</div>
                <div>MILLER, Joe</div><div>PVT</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. C</div>
              <div class="casUnitList">
                <div>TALON, Mariano</div><div>SGT</div><div>WIA</div>
                <div>CHIN, Robert C.</div><div>SP4</div><div>WIA</div>
                <div>WILSON,  John T.</div><div>SP4</div><div>WIA</div>
                <div>RUFF, Joe E.</div><div>PFC</div><div>WIA</div>
                <div>VINCENT, James B.</div><div></div><div>WIA</div>
                <div>SZABO, Michael M.</div><div>SP4</div><div>WIA</div>
                <!-- <div>SNODGRASS, George</div><div>SP4</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "George" && $one_casualty->last_name == "Snodgrass")
                    <div>
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    </div>
                    <div>SP4</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>THOMPSON, John T.</div><div>SP4</div><div>WIA</div>
                <div>POLK, Harry E.</div><div>SSG</div><div>WIA</div>
                <div>KNOTT, Elvin</div><div>SP4</div><div>WIA</div>
                <div>NELSON, Guy</div><div>SP4</div><div>WIA</div>
                <div>POWELL, Jackie A.</div><div>SGT</div><div>WIA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="circle_pines" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: CIRCLE PINES</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              HEADQUARTERS</br>
              1ST BATTALION (MECH) 5TH INFANTRY</br>
              APO San Francisco 96225</br>
            </div>
            <div class="aarTopic">
              TIMAA-C 10 April 1966
            </div>
            <div class="aarTopic">
              SUBJECT:  After-Action Report
            </div>
            <div class="aarTopic">
              TO:</br>
              2d Bde Task Force</br>
              25th Infantry Division</br>
              APO U. S. Forces 96225</br>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Operation Circle Pines</span>, search and destroy.
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>: 29 March - 5 April 1966
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">General</span>: The operation started in the rubber plantation west of Phu Hoa Dong (XT 7119) and continued through the Ho Bo Woods (XT 6229). The Bn OPORD 15-66 was issued 271000MAR66. The operation was conducted with the 2d Bde Task Force. Lt Col Greer is the reporting officer. Task organization and commanders were as follows:
              <ol type="a">
                <li>
                  1st Bn (Mech) 5th Inf:  Lt Col T. U. Greer, commanding.
                  <ol>
                    <li>Co A: Capt J. A. Renner, commanding.</li>
                    <li>Co B:  1/Lt F. G. Trenery, commanding.</li>
                    <li>Co C: Capt J. G. Andress, commanding.</li>
                    <li>Recon Plat:  1/Lt D. T. Schou.</li>
                    <li>Hvy Mort Plat:  1/Lt J. E. McQuinn.</li>
                  </ol>
                </li>
                <li>
                  Recon Platoon was attached to Co A and Co C was detached to the 1/69th Armor.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Intelligence</span>:
              <ol type="a">
                <li>
                  One Main Force Battalion, the 307 Bn of the 165A Regt, has been reported in the operations area. The 048 Heavy Weapons Company was reported supporting the 307 Bn. Exact locations and dispositions of the VC forces were not known. It was believed that when the VC determined that a major U.S. attack was underway they would attempt to withdraw and exfiltrate in small groups to safe areas in the Ho Bo Woods (XT 6228) and the Iron Triangle (XT 7025). It was expected that the same general harassing and delaying tactics, sniper fire, and boobytraps would be employed by the VC. The VC were known to have anti-armor capability through the use of the Soviet RLRPG-2,  which is capable of penetrating 6-7 inches of armor and is effective up to 150 meters.
                </li>
                <li>
                  During the operation in the plantation, no large VC force was encountered. The primary mission of the Bn was to seal off all routes of escape out of Phu Hoa Dong while the 7th Regt (ARVN) conducted search and destroy operations throughout the entire village area. This mission was accomplished, but only two- and three-man VC groups were encountered by our blocking position. Upon deploying into the Ho Bo Woods with objectives in the area of XT 6527 and XT 6526, no major enemy contact was made, although ambushes around company perimeters engaged and killed small groups of VC attempting to probe the unit defenses or bypass and depart the area. Co A was ordered into an area vic XT 629305 which reportedly was occupied by small elements from the VC 7th Regt. Co A met heavy resistance in the area from an estimated two VC platoons, but they succeeded in securing the objective. The VC encountered in this area were wearing complete black uniforms, helmets, web and harness equipment. The VC also employed 175mm duds as command detonated mines triggered from well concealed bunkers. A complete battalion attack into the north-western side of the Ho Bo Woods resulted in the following:</b>
                  Co C completely searched a heavily wooded area within which the Recon Platoon had located a large rice and military equipment cache (XT 598265). There was some enemy contact in the area, but these VC were believed to be only guarding the cache area. Co B and Recon Platoon encountered light to heavy resistance when they moved in the attack vic XT 585290. These VC elements were not identified and throughout the entire operation the battalion did not encounter any VC elements larger than two platoons. Specific identification of units was not made, although several documents, maps, photos, ect., found in tunnels referred to units which had been in the area recently.
                </li>
                <li>
                  Terrain and Weather. The weather caused no significant changes in plans throughout the operational period. The terrain in the plantation area consisted of sparse to heavily undergrown rubber plantations and open flat fields. Observation in this area is good to excellent and fields of fire are excellent. There are no obstacles to tracked movement in the plantation area. The streams and bordering marshy fields are obstacles to tracked movement. The Ho Bo Woods area consists of rubber plantations, sparse to dense woods and open rice paddies with some extremely large dikes in the area of XT 605215. Some were approximately four feet high and four feet wide but did not present an obstacle to tracked movement.
                </li>
                <li>
                  Fortifications: Extensive three and four level tunnel complexes were located and destroyed in the vic of XT 658247. Small tunnels were also located and destroyed in the vicinity of XT 630303 and XT 658258. The following were recently used by VC for bivouac areas, storage, or both: XT 598265, XT 590270, XT 590275, XT 585305 to XT 598326 to XT 615312. All of the above were reported to Bde S-2 as continuous H&I targets.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Mission</span>: 1/5th Mech attacks 290700MAR to seize Obj 1 and conduct search and destroy operations in assigned area of operation.
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Concept of Operation</span>: Task Force attacked rapidly through the plantation to seize Obj's 1 and 2 and establish blocking positions A, B, C and D to prevent VC movement in and out of Phu Hoa Dong. Preplanned fires were on call (Incl 1).
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Execution</span>: The Task Force departed the LD on time and secured Obj's 1 and 2 by 0900 hours. All blocking positions were established and occupied by 0935 hours. Upon securing Obj 1, Co A shot one VC attempting to swim the river from the south to the north and detained several indigenous personnel they spotted leaving the area. Co B killed two VC's and captured one, together with several documents, weapons, ammunition and miscellaneous equipment. Co C made no contact. During the afternoon sporadic contact was made by each company, and four VC kills (conf) and one VC wounded were made while the battalion suffered two WIA's. A POW revealed the location of a rice cache which was investigated and confirmed by Co A and turned over to the ARVN for disposition. Co A also located a second rice cache, as well as miscellaneous weapons,  ammunition and equipment. Co B also located various small arms, ammunition and equipment. Recon Platoon located several tunnels, weapons and documents, as well as several sampans, which were sunk, and a landing site. The companies coiled for the night in company perimeters and established nine ambushes to augment the security and increase the effectiveness of the blocking positions. By 1945 the task force had killed a total of ten VC (conf) and captured three VC. In addition, six suspects were detained. On the following day all units conducted extensive searches in their areas, resulting in Recon Platoon finding and destroying a tunnel complex and Co A finding two large stores of ammunition, grenades, documents, tng equipment and a considerable amount of penicillin, heroin and miscellaneous medical supplies. Extensive damage was done to one Recon Platoon APC by a command detonated mine. Ten ambushes were established that night, making negative enemy contact. On the third day the Task Force area of operations was enlarged by an additional 12,000 square meters for search and destroy operations. Search and destroy operations commenced early that morning and seven tunnels were destroyed, one M-1 rifle and various documents captured, plus two VC killed (conf) and one VC wounded. One friendly WIA was sustained, and one track suffered moderate damage from an AT mine. That night seven ambush sites were established which accounted for four VC kills confirmed and six estimated in three contacts. One friendly WIA was sustained. On 1 Apr 66 the Task Force continued to occupy blocking positions in conjunction with the ARVN search of Phu Hoa Dong, which was completed that afternoon. At 0915 hours, a new order was received from the Bde CO to move to and occupy a new assembly area in preparation for the continuation of the attack into the Ho Bo Woods (incl 2). At 1330 hours the Bn CP departed the original assembly area, closing on the new assembly area BOBCAT at 1625, with one APC sustaining extensive damage from an AT mine enroute. Shortly thereafter, Capt. E. B. Vickery returned to duty, resuming command of Co B. Upon closing into the assembly area, an attachment of A Trp, 3/4 Cav, commanded by Capt J. R. Monahan, was effected. Eight ambushes were established that night, one of which made enemy contact, reporting one confirmed VC kill and one estimated, as well as one rifle and a small quantity of ammunition and miscellaneous documents captured. The attack was launched at 0730, 2 Apr 66, along assigned axes. The Objectives PAM and KIM were seized at 0901 and 0912, respectively. Objective CAROL was seized by 1200 hours. No enemy contact was made, though A Trp, 3/4 Cav had three vehicles damaged by AT mines. Due to reported VC activity north of the Bde TF objectives, the Bn was given the mission to seize a new blocking position vic OP D (XT 628304). Co A was dispatched to the area at 1450 hours and arrived at 1545 hours. Upon arriving in the vicinity of OP D, they encountered an estimated VC force of two squads and in the ensuring fire fight killed six VC (conf). The objective was secured by 1632 hours. One APC was destroyed by a command detonated mine and resulted in four KIA and six WIA (which included two National Policemen). The mine was later determined to be a 175mm Arty round rigged for electrical detonation. During the search of the TF's area of operations, many weapons, munitions, documents, maps and pictures were captured. Two 100 lb bags of rice and two tunnels were also found and destroyed. Recon Platoon suffered two WIA's in the day's operation while killing one VC (conf), destroying many tunnels and capturing one carbine and a large supply of arms, munitions, and miscellaneous equipment. Eight ambushes were employed by the battalion to supplement the security of each company base. One of the ambushes was sprung at 1955 hours, resulting in eight VC killed (five conf, three est). Several weapons and some munitions, equipment and documents were taken from the bodies. On 3 Apr 66 all units conducted a systematic search of their respective areas, resulting in the capture of several weapons and a quantity of munitions, equipment and documents. Co B suffered two WIA's due to boobytraps. One of the boobytraps captured by Co A consisted of a 175mm shell, fuzed for command detonation and wired to a bicycle generator affixed to a rotary grindstone. Co B dispatched a platoon to check on reported ground fire from vic XT 657273. One of the tracks was destroyed by a mine which ignited the gas tank. One KIA and four WIA's were suffered. The unit suffered another WIA due to small arms fire in the same area. One VC suspect was captured. Recon Platoon estimated killing two VC in tunnels. Eight ambushes were established during the hours of darkness, but none made contact. Final instructions for the continuation of the operation were received at 1900 hours. All units were alerted and at 2300 hours the TF Frag O was issued (Incl 3). The next phase of Operation CIRCLE PINES commenced at 040700APR66. Co C returned to Bn control at 0630 and A Trp, 3/4 Cav reported to the 1/69th Armor at the same time. At 0819 hours the Recon Platoon discovered several large rice caches in a well concealed and fortified area. Co C was diverted from its preplanned mission to conduct a thorough search of the area vic XT 600265. The remainder of the Bn continued on its preplanned operation. At 0855 hours a heavy volume of  rifle grenade fire was received while passing through CP 6. Co B suffered three WIA's. The VC were engaged by artillery, gunships and small arms fire. The initial sweep to the north was supported by artillery, Tac air, and  gunships. Light VC contact was made by each unit. During the southeast sweep,  Co B and Co C were diverted to vic XT 598259. Air and artillery supported the sweep. By 1800 hours Co A closed into a base area. The Bn(-) closed into a new assembly area at 2400 hours. During the day 23 VC were killed (6 conf and 15 est). Several tunnels, five tons of rice,  and four rifles were destroyed. Over four tons of rice, a large amount of military equipment, munitions and arms were captured. The Bn suffered 19 WIA's and 1 KIA. At       051610APR66 the Recon Platoon was committed to the 2/27th Inf to assist in securing the area which was attacked earlier that morning. By 0900 hours Co B was also committed to the 2/27th Inf. Co C was placed under Bde OPCON to assist the return movement of the Bde complex. All elements closed into the Bn base camp by 1621 hours. No enemy contact was made.
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Supporting Forces</span>:
              <ul type="a">
                <li>Btry C, 1/8th Arty (DS)</li>
                <li>1/8th Arty (-) (GS)</li>
                <li>25th Inf Div.</li>
              </ul>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Results</span>:
              <ol type="a">
                <li>
                  VC killed (Confirmed and estimated):</br>
                  (1) 40 VC killed (body count).</br>
                  (2) 57 VC killed (est).</br>
                  (3) 3 VC captured.</br>
                  (4) 6 VC suspects detained.</br>
                </li>
                <li>Destroyed:</br>
                  (1) 1,420 rounds, Russian, 7.62mm.</br>
                  (2) 90 carbine rounds.</br>
                  (3) 60 .45 cal rounds.</br>
                  (4) 40 crimped cartridges.</br>
                  (5) 4  .45 cal SMG magazines.</br>
                  (6) 74 hand grenades.</br>
                  (7) 19 rifle grenades.</br>
                  (8) 11 AT mines.</br>
                  (9) 3 AP mines</br>
                  (10)  1  175mm command detonated mine.</br>
                  (11)  1  155mm command detonated mine.</br>
                  (12) 30 bobbytraps.</br>
                  (13) 2  81mm boobytraps.</br>
                  (14) 2 small Claymores.</br>
                  (15) 6 houses.</br>
                  (16) 71 tunnels.</br>
                  (17) 8 bunkers</br>
                  (18) 4.7 tons of spoiled rice.</br>
                </li>
                <li>
                  Captured:</br>
                  (1) 5 tons of rice.</br>
                  (2) 3-55 gal drums of miscellaneous military equipment, including 90 flashlights, web equipment, ammo pouches and gloves (all new).</br>
                  (3) 10 pistol belts.</br>
                  (4) 13 packs.</br>
                  (5) miscellaneous maps, narcotics, penicillin and tng manuals.</br>
                  (6) 1 medical aid kit.</br>
                  (7) 5 large bags of documents.</br>
                  (8) 1 SMG.</br>
                  (9) 1 RPG-2 rocket launcher.</br>
                  (10) 6 Russian 7.62mm rifles.</br>
                  (11) 4 bolt action rifles (destroyed).</br>
                  (12) 3 M1 rifles.</br>
                  (13) 3 bolt action rifles.</br>
                  (14) 1 pistol, homemade.</br>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Administrative Matters</span>:
              <ol type="a">
                <li>
                  Supplies:  Resupply was accomplished by two methods. Primary method was aerial resupply by helicopter from base camp. The other method was the positioning of Class III and Class IV at OP Ann Margaret while operating in the plantation and then positioning the same supplies in a Bn trains located in the Bde trains area vic Trung Lap. During the operation, 126 sorties delivered the following supplies: Class I - 21,862 pounds; Class II and IV - 8,900 pounds; Class III - 46,000 pounds (5,750 gallons); Class V - 22,198 pounds; and water - 23,925 pounds (2,981 gallons). The largest problem encountered in resupply was receiving the attached unit, A Trp, 3/4 Cav,  on the fourth day of the operation and being informed at approximately 1600 hours that they needed 1,000 gallons of MOGAS and 1,500 gallons of diesel fuel to accomplish their mission. The fuel was delivered despite a shortage of daylight time. Another problem encountered was water resupply at base camp. During the first two days of the operation, a 5,000 gallon water tanker was positioned at the helipad; however, its pump was inoperable. It was removed on the third day. Then, and continuously afterwards, the water points were either closed or a long waiting time existed. Recommend that if a completely operational water tanker is not positioned on the helipad that one of the water points be designated for use only by vehicles involved in resupply by helicopters. The availability of helicopters in the early morning and late evening still caused some problems in resupply. Helicopters were never available earlier than 0800 hours and at most times were released at 1700 hours. The tactical operation required constant or considerable movement before 0800 hours and after 1700 hours. Therefore, it is essential that  helicopters be available for resupply missions, especially during the periods of 0700-0900 and 1600-1900 hours. The Bn expended 46,000 rounds of 5.56mm, 62,000 rounds of 7.62mm, 22,200 rounds of cal .50, 858 40mm grenades, 180 81mm mortar rounds, 803 hand grenades, 43 incendiary grenades, 195 smoke grenades, 30 M18A1 mines, 1440 pounds of demolitions,  and 720 pounds of C4 demolitions.
                </li>
                <li>
                  Maintenance: The Bn started the operations with two APC's  short due to vehicles being inoperable and turned into support maintenance. During the operations, nine APC's, M113, were damaged by mines; one APC, M113, was slightly damaged by a rocket launcher round; one APC, M113, was damaged by a claymore mine; one Carrier Command Post, M577, was damaged by a mine; and one mortar SP track 4.2", M106, was destroyed completely by fire and secondary explosions. Two of the APC's, M113, which hit mines were further damaged by fire.
                </li>
                <li>
                  Transportation: The Task Force consumed 8,058 gallons of MOGAS and 1,700 gallons of diesel fuel.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Special Equipment & Techniques</span>: None
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">Commander's Analysis</span>: Co C was diverted from its preplanned objective on 4 April due to the Recon Platoon's findings. The area was too large for a platoon and showed every indication of being a VC stronghold.
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">Conclusions and Lessons Learned</span>:
              <ol type="a">
                <li>
                  Ambushes again proved to be most effective. Of five ambushes making contact, a total of 20 VC were killed (11 conf and 9 est).
                </li>
                <li>
                  Operating with ARVN was very difficult. The major problems were:
                  <ol>
                    <li>
                      ARVN would not stay on line.
                    </li>
                    <li>
                      After the first day they did not follow their plan and hence did not asequately clear the village.
                    </li>
                  </ol>
                </li>
                <li>
                  Cross attachment of mechanized and armored elements created a distinct recovery problem. This unit does not have the capability  to recover a damaged tank.
                </li>
                <li>
                  Every TC must constantly be aware of his location by  frequent reference to the map and through use of the compass.
                </li>
                <li>
                  Women and children would leave the village during artillery fires and move toward or through the CP areas.
                </li>
                <li>
                  A helicopter pad can be cleared in lightly wooded areas in less than 15 minutes for a single helicopter. This enhances the unit's flexibility in selecting an assembly area.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              FOR THE COMMANDER:</br>
              D. M. SNODGRASS</br>
              CWO (W-3)</br>
              Ass't Adjutant</br>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION CIRCLE PINES
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">HHC</div>
              <div class="casUnitList">
                <div>BEARD, Harley E.</div><div>SGT E5 11B40</div><div>WIA</div>
                <!-- <div>SHIPP, Keith L.</div><div>PFC E3	11C10</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Keith" && $one_casualty->last_name == "Shipp")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>NICHOLS, Larry J.</div><div>SP4 E4 11B20</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Larry" && $one_casualty->last_name == "Nichols")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP4 E4 11B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>BLISS, Harvey L</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>STOCKER, Clemon</div><div>SGT E5	11C40</div><div>WIA</div>
                <div>ROGERS, Fred L.</div><div>SGT E5	11B40</div><div>WIA</div>
                <div>ADKINS, Herbert A.</div><div>PVT E2 11C10</div><div>WIA</div>
                <div>SAGONIA, John P.</div><div>PFC E3 11C10</div><div>WIA</div>
                <div>GRAHAM, Thomas D.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>BROWN, Donald H.</div><div>SGT E5 11B40</div><div>WIA</div>
                <div>CARLYLE, Billy S.</div><div>SP4 E4	11C20</div><div>WIA</div>
              </div>
              <div class="casUnitName">A Co.</div>
              <div class="casUnitList">
                <!-- <div>COFFEY, Jesse J.</div><div>SGT E5	11B40</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Jesse" && $one_casualty->last_name == "Coffey")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SGT E5 11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>FRANKLIN, George S.</div><div>SP4 E4	11B20</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "George" && $one_casualty->last_name == "Franklin")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP4 E4 11B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>THORNELL, Lester J.</div><div>SP4 E4	76K30</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Lester" && $one_casualty->last_name == "Thornell")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP4 76K30</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>DORRIS, Curtis E.</div><div>SP5 E5 94B20</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Curtis" && $one_casualty->last_name == "Dorris")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP5 E5 94B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>DE JESUS, Miguel</div><div>SP4 E4 	11B20</div><div>WIA</div>
                <div>STURGES, Scott L.</div><div>1st Lt 1542</div><div>WIA</div>
                <div>SULLIVAN, Harold A</div><div>SSG E6 11B40</div><div>WIA</div>
                <div>HARRIS, John M.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>COFFORTH, Alfred</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>JOHNSON, William D.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>PARKER, James R</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>BRANCH, Walter A</div><div>PFC E3 11B10</div><div>WIA</div>
              </div>
              <div class="casUnitName">B Co.</div>
              <div class="casUnitList">
                <div>HOUSLEY, Leonard D.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>CASTRO-CRESPO, Anidal</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>GOEHRKE, Lance M.</div><div>PVT E2	11B10</div><div>WIA</div>
                <div>HOLMAN, James A.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>PRILLWITZ, Walter</div><div>SGT E5 11B40</div><div>WIA</div>
                <div>BAY, Donald E.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>MCMILLAN, Thomas</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>JOHNSON, Ronald D.</div><div>PFC E3 11C10</div><div>WIA</div>
                <div>ARNOLD, Robert E.</div><div>SSG E6	11B40</div><div>WIA</div>
                <div>JOHNSON, Donald R.</div><div>PFC E3 11B10</div><div>WIA</div>
                <!-- <div>SMITH, Steven M.</div><div>PFC E3 11B10</div><div>KIA</div> -->
                <div>OWENS, Walter Jr.</div><div>SGT E5	11C40</div><div>WIA</div>
                <div>KAVANAUGH, John</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>MARTIN, Guy W.</div><div>SSG E6 11B40</div><div>WIA</div>
                <div>MCGOUGH, John W.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>BALDWIN, Donald D.</div><div>PVT E1 11B10</div><div>WIA</div>
                <div>MURDOCK, Anthony W.</div><div>SGT E5	11B40</div><div>WIA</div>
                <!-- <div>SYKES, Hamp J. Jr.</div><div>PFC E3	11B10</div><div>KIA</div> -->
                <div>BRAY, Dillard R. Jr.</div><div>SFC E7 11B40</div><div>WIA</div>
                <div>MEDGETT, Dewey</div><div>PVT E2 11B10</div><div>WIA</div>
                <div>GOODMAN, James R.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>FLYNN, James</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>HARLER, Ashby W.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>MILLER, Jerry D.</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>COLLIER, Gerald</div><div>SP4 E4	11B20</div><div>WIA</div>
              </div>
              <div class="casUnitName">C Co.</div>
              <div class="casUnitList">
                <!-- <div>MORRIS, Arthur C.</div><div>SGT E5 11B40</div><div>KIA</div> -->
                <!-- <div>JARRELL, Roger D.</div><div>PFC E3 11B10</div><div>KIA</div> -->
                <!-- <div>TAYLOR, Jimmy B.</div><div>SGT E5 11B40</div><div>KIA</div> -->
                <div>BRASHER, Daniel E.</div><div>1st Lt 1542</div><div>WIA</div>
                <div>SEXTON, Dennis W.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>MCCARTNEY, Samuel</div><div>SSG E6	11B40</div><div>WIA</div>
                <div>WONG, Paul A.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>DUVALL, Ernest F.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>HOPKINS, Charles R.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>SMITH, Donnie R.</div><div>SGT E5 11B40</div><div>WIA</div>
                <div>TORREY, Edward L.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>BARNEY, Ernest E.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>DECOT, Michael E.</div><div>PFC E3	11B20</div><div>WIA</div>
                <div>BISSONNETTE, Don W.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>KNOTT, Elvin V.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>HAROLDSON, Jerry L.</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>PEAL, Jerry C</div><div>SSG E6	11B40</div><div>WIA</div>
                <div>WELLS, Anthony D.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>MASON, Wesley J.</div><div>1st Lt 1542</div><div>WIA</div>
                <div>BEVIS, Reynolds R.</div><div>PVT E2 11B10</div><div>WIA</div>
                <div>MELVIN, Clyde D.</div><div>SP4 E4 11B20</div><div>WIA</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="kalamazoo" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: KALAMAZOO</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="waikiki" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: WAIKIKI</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="wahiawa" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: WAHIAWA</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="coco_palms" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: COCO PALMS</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="makiki" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: MAKIKI</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="mokoleia" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: MOKOLEIA</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="koko_head" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: KOKO HEAD</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="oahu" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: OAHU</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="kipapa" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: KIPAPA</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="sunset_beach" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: SUNSET BEACH</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="kailua" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: KAILUA</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="attleboro" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: ATTLEBORO</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="cedar_falls" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: CEDAR FALLS</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-opname="ben_cui" class="nonTimeSegment topicSegment">
        <div class="backBttn">
          <a href="{{ url('/history/timeline') }}">
            <div><< HISTORY</div>
          </a>
        </div>
        <div class="segmentTitle"><u>OPERATION: BEN CUI</u></div>
        <div class="segmentContent">
          <div class="segmentWords aarWords">
            <div class="aarHqAddress aarTopic">
              <!-- Headquarters -->
            </div>
            <div class="aarTopic">
              <!-- TLMAA-C February 1966 -->
            </div>
            <div class="aarTopic">
              <!-- SUBJECT: After Action Report – Operation Clean Sweep -->
            </div>
            <div class="aarTopic">
              <!-- To, with address -->
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Reference</span>:
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>:
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Place</span>:
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Mission</span>:
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">General Summary of Operation</span>:
              <div>

              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Description of Area of Operation</span>:
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Enemy Encountered</span>:
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Results of Operation</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Friendly Casualties</span>:
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Equipment Damaged</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Lessons Learned</span>:
              <ol type="a">
                <li>

                </li>
              </ol>
              <div>
                <!-- FOR THE COMMANDER:</br> -->
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName"><!-- Unit name --></div>
              <div class="casUnitList">
                <!-- <div>DAY, Billy B.</div> -->
                <!-- <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div> -->
                <!-- <div>PVT 11B20</div><div>KIA</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
@stop
