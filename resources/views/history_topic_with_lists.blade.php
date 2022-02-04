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
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "James" && $one_casualty->last_name == "Fain")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div>SP4	11B10</div><div>KIA</div>
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
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Billy" && $one_casualty->last_name == "Day")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div>PVT 11B20</div><div>KIA</div>
                <!-- <div>PARNELL, William B.</div> -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "William" && $one_casualty->last_name == "Parnell")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div>SSG	11B40</div><div>KIA</div>
                <!-- <div>GARIS, Gary W.</div> -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Gary" && $one_casualty->last_name == "Garis")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div>SP4	11B20</div><div>KIA</div>
                <div>MARTIN, Guy W.</div><div>SSG	11B40</div><div>WIA</div>
                <div>CAVALIER, Clark P.</div><div>SSG	11B40</div><div>WIA</div>
                <div>DRAKE, Melvin P.</div><div>SP4	11B20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co. C</div>
              <div class="casUnitList">
                <!-- <div>CASSUBE, Richard H.</div> -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Richard" && $one_casualty->last_name == "Cassube")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div>SGT 11B40</div><div>KIA</div>
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
