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
                <!-- <div>JOHNSON, Donald R.</div><div>PFC E3 11B10</div><div>WIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Donald" && $one_casualty->last_name == "Johnson")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>SMITH, Steven M.</div><div>PFC E3 11B10</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Steven" && $one_casualty->last_name == "Smith")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>OWENS, Walter Jr.</div><div>SGT E5	11C40</div><div>WIA</div>
                <div>KAVANAUGH, John</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>MARTIN, Guy W.</div><div>SSG E6 11B40</div><div>WIA</div>
                <div>MCGOUGH, John W.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>BALDWIN, Donald D.</div><div>PVT E1 11B10</div><div>WIA</div>
                <div>MURDOCK, Anthony W.</div><div>SGT E5	11B40</div><div>WIA</div>
                <!-- <div>SYKES, Hamp J. Jr.</div><div>PFC E3	11B10</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Hamp" && $one_casualty->last_name == "Sykes")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
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
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Arthur" && $one_casualty->last_name == "Morris")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SGT E5 11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>JARRELL, Roger D.</div><div>PFC E3 11B10</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Roger" && $one_casualty->last_name == "Jarrell")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- <div>TAYLOR, Jimmy B.</div><div>SGT E5 11B40</div><div>KIA</div> -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Jimmy" && $one_casualty->last_name == "Taylor")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SGT E5 11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
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
              HEADQUARTERS<br>
              1ST  BATTALION  (MECH)  5TH  INFANTRY<br>
              APO San Francisco 96225
            </div>
            <div class="aarTopic">
              AVTLSBA-C
            </div>
            <div class="aarTopic">
              SUBJECT:  After-Action Report, Operation KALAMAZOO
            </div>
            <div class="aarTopic">
              TO:<br>
              Commanding Officer<br>
              2d Brigade<br>
              25th Infantry Division<br>
              APO U. S. Forces 96225
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Operation</span>: KALAMAZOO, search and destroy.
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Date</span>: 130600APR66 - 141830APR66.
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">General</span>: The 1st Bn (mech) 5th Infantry, 2d Bde, 25th Inf Div, conducted search and destroy operations in TAOR (Incl 1). The Bn OPORD No 17-66 was issued at 121400APR66. Lt Col T. U. Greer is the reporting officer. Task organization and commanders were as follows:
              <ul>
                <li>
                  1st Bn (Mech) 5th Inf (Lt Col T. U. Greer, commanding).
                </li>
                <li>
                  Tm RENNER (Capt J. A. Renner, commanding), Co A, 1/5th Mech; 2/C/1/69th Armored/ 1 demo tm.
                </li>
                <li>
                  Tm GUTZMAN (Capt P. C. Gutzman, commanding),  Co C (-), 1/69th Armored; 3/A/1/5th Mech; 1/B/1/5th Mech; 1 demo tm.
                </li>
                <li>
                  Tm VICKERY (Capt E. B. Vickery, commanding), Co B (-), 1/5th Mech; 3/C/1/69th Armored; 1 demo tm.
                  <ul>
                    <li>
                      Recon Platoon (1/Lt D. T. Schou).
                    </li>
                    <li>
                      Hvy Mort Plat (1/Lt J. E. McQuinn).
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Intelligence</span>
              <ol type="a">
                <li>
                  The 305th Battalion of the 165th A Regiment had established bases in the Filhol Plantation and continues to conduct harassing type activities within the plantation and the outlying areas. During the hours of darkness, radar has detected vehicular movement along the roads and trails running through the plantation area. The last reported location of the 305th Bn was in vic coord XT 650208 on 9 Apr 66. Documents captured at this location revealed that personnel from the 1st and 4th Companies of the 305th were involved in the action. It was also believed that elements of the 305th Bn took part in the attack on A/2/27th on 5 April. The 307th Bn was believed to be operating in the Ho Bo Woods area with the last reported location on 11 Apr in the vic XT 614255,  XT 614268 and XT 634267. As a result of recent combat operations, the 305th Bn was not considered to be at full strength.
                </li>
                <li>
                  During the operation no major enemy force of significant size was engaged by this unit. Several ambushes were employed; however no night contact was made. Elements of the TF received automatic weapons fire from approximately 15-20 VC. This was the largest enemy contact during the entire operation. It was expected that once the VC determined a major U. S. effort was launched the VC would exfiltrate north to the Ho Bo Woods.
                </li>
                <li>
                  The terrain was primarily dense to sparsely populated rubber trees and rice paddies. There were scattered, thickly wooded areas which considerably limited visibility. There were no natural obstacles to tracked movement; however, all roads, trails and trafficable areas were mined. The weather caused no change in plans or courses of action.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Mission</span>: TF GREER conducts search and destroy operations in the TAOR, commencing 130600APR66, establishes TF base vicinity Psn VICKY (XT 647207) and prepared for operations into the Ho Bo Woods on order.
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Concept of Operation</span>: TF GREER attacks with Tm VICKERY, TM GUTZMAN and Tm RENNER to seize VICKY, GRACE and ROSE, respectively. Each team conducts search and destroy operations in AO and continues to attack on order (Incl 1).
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle"> Execution</span>:
              <div>
                TF GREER departed base camp at 0600 and all elements crossed the LD by 0630 hours, Tm VICKERY arrived on the edge of Psn VICKY at 0700 and by 0718 the psn was seized and occupied without enemy resistance. Tm GUTZMAN seized and secured Psn GRACE at 0722. As Tm VICKERY and Tm GUTZMAN commenced the search in their AO, Tm RENNER seized and secured Psn ROSE at 0800 and immediately started a detailed search of the AO. The search progressed methodically and at 0811 one APC from Co C, 1/69th hit a mine vic XT 655176. No casualties were sustained; however, the vehicle could not be repaired in place and was evacuated. By 0905 Tm VICKERY was occupying Psn VIOLET and preparing to move to Psn VERA. Meanwhile, Tm GUTZMAN, enroute to Psn GLORIA, had three APC's throw tracks due to dense vegetation. Forward progress was temporarily impeded; however, the vehicles were repaired in place and continued with the advance to Psn GLORIA. One APC from Tm RENNER hit an AT mine 200 meters east of Psn ROSE. No casualties were sustained; however, the vehicle had to be evacuated due to the extent of damage. Personnel from Tm RENNER found and destroyed a box of grenades in the vicinity of the downed APC. At 0950 Tm GUTZMAN arrived on Psn GLORIA and began searching operations. Tm RENNER received automatic weapons fire from the SE of Psn ROSE at 0958 and quickly maneuvered elements in an attempt to run down the VC. At 0950 gunships reported receiving heavy automatic fire from XT 632238 (Area ZULU)  and Tm VICKERY was diverted into the area. Arty fires were adjusted throughout Area ZULU as Tm VICKERY moved rapidly into the area with the mission of sweeping the area around the creek vic XT 643233. Co A, 1/5th Mech reported one man slightly wounded by rifle grenade fragments while chasing a small VC element vic Psn VICKY at 1030. Helicopters reported receiving ground fire from XT 627175 at 1110 and Tm GUTZMAN was instructed to move to that vicinity and develop the situation. A med evac track of Tm RENNER hit an AT mine on Psn ROSE at 1120 that blew one track off and damaged the road wheel. No casualties were sustained and the vehicle was evacuated. Tm GUTZMAN, working in the southern edge of Psn GLORIA, received mortar fire at 1123 and elements were maneuvered in the direction of the fire in an attempt to suppress it. One tank of Tm GUTZMAN was hit by a round from an AT weapon at 1140 that penetrated the tank and wounded one man. The tank was slightly damaged and continued the movement. The AT weapon was later identified as an RPG-2, when the fin assembly was found. Co A received rifle grenade fire on Psn ROSE at 1157 from an estimated reinforced rifle squad. The unit returned 81mm mortar fire on the enemy as troops were maneuvered against the enemy, but the enemy broke contact. During the engagement, Tm RENNER sustained five WIA's from rifle grenade shrapnel. At 1210, Tm VICKERY arrived in Area ZULU where the helicopter received fire (XT 627175) and began a systematic search of the area and at 1212 an airborne observer spotted approximately 10 VC breaking out into the open 200 meters in front of Tm Vickery's elements who quickly pushed in that direction while 4.2" mortar fire was adjusted into the target area. A systematic search of tunnels and bunkers in the area revealed a rice cache but no VC and the search was continued. At 1216 hours the lead tank hit an AT mine that blew one track off and damaged the road wheel. Two APC's from Tm Renner hit AT mines at 1230 while searching Psn ROSE, causing moderate damage to the APC's and three minor WIA's, who were treated and remained with the unit. At 1255 the Bn Cmdr in a C & C helicopter spotted 10 VC who were flushed in the open by Tm VICKERY vic XT 64172238. 4.2" mortar fire was delivered on the VC and two VC kills were estimated. Tm VICKERY continued to search Area ZULU and at 1302 the unit sustained two KIA's and one WIA from small arms fire from spider holes vic XT 638236. Small arms and automatic weapons fire was returned. Recon Platoon found a rice cache of approximately 1000 lbs at 1348 vic XT 678222. Two VC were seen entering a house in the 6117 grid square by gunships at 1402. An airstrike was delivered on the house at 1419 and a secondary explosion occurred. At 1415 Tm RENNER found and destroyed a small ammunition cache vic XT 646229. Tm VICKERY sustained two KIA's and six WIA's from a heavy volume of accurate rifle grenades and small arms fire from XT 635235 at 1442. The unit immediately engaged the VC by fire and maneuver, but the VC broke contact. The search was continued and at 1510 the crew chief of a resupply helicopter, diverted to the area for evacuation of Co B's WIA's was wounded. At 1520, the TF VTR hit an AT mine vic XT 640223, causing moderate damage to the track; however, no casualties were sustained. Recon Platoon found 40 graves at 1620 hours vic XT 654223. An inspection of the grave sites disclosed that the tombstones were engraved with VC flags and carbines engraved under the flag. The graves were determined to be one month old. One APC from Co A, 1/5th Mech hit an AT mine vic XT 640227. Extensive damage was done to the right track; however, no casualties were sustained. Tm GUTZMAN spotted a VC who was getting into a well. The unit gave chase as the VC moved down into the well and into a tunnel entrance that branched off from the well. A through search of the well and tunnel disclosed no VC or equipment. The well and all tunnel entrances were destroyed. Another APC from Tm RENNER hit an AT mine vic XT 666225 at 1825, causing minor damage to the track. The vehicle was repaired and placed into action. A tank of Tm GUTZMAN, while towing a damaged tank, hit an AT mine at 1833, causing minor damage to the track. Tm RENNER killed one VC at 1834 who emerged from a hole and threw a grenade at an APC vic XT 639217. At 1840 a tank crew with a stuck vehicle vic XT 628229 shot and killed three VC who were attempting to emplace a machinegun approximately 100 meters from the mired tank. By 1857 Tm RENNER, Tm GUTZMAN, and Recon Platoon closed into the Bn area and were preparing defenses for the night. At the same time a flare ship was requested for the personnel extracting three tanks which had become mired in Tm VICKERY's area during the afternoon. The vehicles were finally extracted and closed into TM VICKERY's area at 2325 hours. Between 2330 and 0200 no enemy contact was made. Tm VICKERY received an undetermined number of rifle grenades into their position vic XT 632235 at 0205 causing one casualty (minor) who was treated and remained with the unit until 0750. Tm RENNER departed the Bn perimeter at 0645 enroute to check the area bordered by roads from XT 641221 to XT 644214 to XT 670235 to XT 667238. At the same time Tm GUTZMAN moved out to check the sector bordered by roads from XT 644214 to XT 648207 to XT 677225 to XT 673231 with a NE direction of attack. The teams had the additional mission of checking the trench area vicinity Psn VICKY and VERA. By 0743, Tm RENNER had completed searching the first portion of their objective area and immediately moved to check the remainder of its sector. At 0750 one APC hit an AT mine. No damage was done to the track; however, two minor WIA's were sustained and, after treatment remained with the unit. Two command detonated mines were set off  against one of Tm RENNER's APC's vic XT 643219 at 0803 hours. No damage was done to the track and the unit commenced a chase attempting to overrun the VC. Tm VICKERY received automatic weapons fire at 0846 from the streamline vic XT 628223. Arty fire was adjusted on the area and the enemy broke contact. No results could be determined. The Bn Smaj, traveling with one tank and one APC, received fire at 0915 from an estimated 15-20 VC vic XT 628223. Arty fire was immediately adjusted on the enemy. Three VC kills were estimated. Tm VICKERY began a sweeping search of their area at 0950 and immediately started to receive light small arms fire. Automatic and small arms fire was returned and in the ensuing fire fight, one WIA was sustained before the enemy broke contact. Tm VICKERY pursued in the direction of the fleeing VC and at 1107 spotted one VC getting into a hole. As the VC moved into the hole, five AT mines were set off  around the hole. Elements of Tm VICKERY moved up to the hole and a check disclosed that three more AT mines were around the hole and that the VC was inside. The VC was killed and the mines destroyed and the team was instructed to complete its mission and return to the Bn CP. On its way back, Co B, 1/5th Mech was given the mission of checking the area where a secondary explosion was observed on 13 Apr vic XT 636253. Tm RENNER located a rice cache at 1535 vic XT 645215. In the process of checking the rice cache it was found to be boobytrapped and the unit sustained one KIA and two WIA's.  A Dust Off helicopter received automatic weapons fire from vic XT 640225 and could not land. Gunships and Arty took the automatic weapons under attack. Operation KALAMAZOO was terminated at 1707 and by 1900 all elements of TF GREER had returned to base camp.
              </div>
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Supporting Forces</span>:
              <ul type="a">
                <li>
                  Btry C, 1/8th Arty (DS)
                </li>
                <li>
                  1/8th Arty (-)(GS); 3/13th Arty (GS)
                </li>
                <li>
                  Lt Fire Tm (UH1D)
                </li>
                <li>
                  Tac Air
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Results</span>:
              <ol type="a">
                <li>
                  VC killed (confirmed and estimated)
                  <ol>
                    <li>
                      9 VC killed (body count)
                    </li>
                    <li>
                      15 VC killed (estimated)
                    </li>
                    <li>
                      15 VC suspects detained
                    </li>
                  </ol>
                </li>
                <li>
                  <ol>
                    Destroyed:
                    <li>
                      69 hand grenades
                    </li>
                    <li>
                      68 tunnels (short)
                    </li>
                    <li>
                      12 CBU bombs
                    </li>
                    <li>
                      4 rifle grenades
                    </li>
                    <li>
                      15 AT mines
                    </li>
                    <li>
                      3 60mm duds
                    </li>
                    <li>
                      9  105mm duds
                    </li>
                    <li>
                      1  8" dud
                    </li>
                    <li>
                      1 M72 LAW
                    </li>
                    <li>
                      7 20mm rounds
                    </li>
                    <li>
                      20 .50 cal rounds
                    </li>
                    <li>
                      13  1/4 lb blocks of dynamite
                    </li>
                    <li>
                      350 rounds 7.62mm linked ammo
                    </li>
                    <li>
                      41 bunkers
                    </li>
                    <li>
                      36 buildings
                    </li>
                    <li>
                      3 trenches
                    </li>
                    <li>
                      50 boobytraps
                    </li>
                    <li>
                      2,600 lbs of rice (boobytrapped)
                    </li>
                    <li>
                      1 Russian MG
                    </li>
                    <li>
                      300 M1 rounds.
                    </li>
                  </ol>
                </li>
                <li>
                  <ol>
                    <li>
                      Miscellaneous papers and documents
                    </li>
                    <li>
                      1 rifle, U.S., M1
                    </li>
                    <li>
                      2 RPG rounds
                    </li>
                    <li>
                      2 RPG charges
                    </li>
                    <li>
                      1 large Chicom grenade.
                    </li>
                  </ol>
                </li>
                <li>
                  <ol>
                    U.S. Equipment Damaged:
                    <li>
                      8 APC's - AT mines
                    </li>
                    <li>
                      1 VTR - AT mine
                    </li>
                    <li>
                      2 tanks - AT weapons
                    </li>
                    <li>
                      1 tank - AT mine.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Administrative Matters</span>:
              <ol type="a">
                <li>
                  Personnel: 484 personnel started the operation and 452 completed, three of whom were WIA's  who had returned to duty. There were seven KIA's and 27 WIA's (Incl 2).
                </li>
                <li>
                  Supplies: Resupply was accomplished by helicopter from base camp. At times the unit had three helicopters working and at other times only one. Bde made all necessary helicopter support available. Due to experience gained in previous operations the resupply use of helicopters was more efficient. The previous average per lift was 935 lbs. During Operation KALAMAZOO, the average per lift was 1125 lbs. 5,700lbs of water, 5,880 lbs of Class I, 8,270 lbs Class V and 1910 lbs Class II and Iv were lifted. It was not necessary to effect resupply of  Class III. The Bn expended 600 rounds of 5.56mm, 1000 rounds of 7.62mm, 900 rounds of .50 cal, 45 rounds of 40mm, 106 rounds of 4.2" mortar HE (16 VT fused and 20 WP), 132 hand grenades, 5 CS-1 grenades, 31 smoke grenades and 100 lbs of TNT.
                </li>
                <li>
                  Maintenance. One M88 and eight M113's became inoperable. The M88 and five M113's were disabled due to a combination of mines and mechanical failure. The M88 and five of the M113's were returned to duty during the operation. All three of the M113's not returned to duty were disabled due to combat damage.
                </li>
                <li>
                  Transportation. The Bn consumed 2968 gallons of MOGAS.
                </li>
                <li>
                  Communications. No communication problems were encountered during the operation.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Special Equipment and Techniques</span>: None
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">Commander's Analysis</span>:
              <ol type="a">
                <li>
                  The area in the vicinity of Obj ROSE was laced with mines and the VC were continuously laying them throughout the operation. It is a difficult area to traverse without hitting mines, as there are only a few areas traversable without difficulty by track vehicles.
                </li>
                <li>
                  It was surprising that there were so many unblown tunnels in the Obj ROSE area, since the area has been worked before by this division.
                </li>
                <li>
                  The area north of Rach Son Creek between XT 645232 and XT 653255 has never been worked by this division. It is believed that this area is well tunneled and well used by the VC.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">Conclusions and Lessons Learned</span>: No new lessons learned.
            </div>
            <div>
              <div>
                FOR THE COMMANDER:<br>
                BILLY J. HAMMONDS<br>
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">HHC</div>
              <div class="casUnitList">
                <!-- SCOTT, Jimmy L.	SP5 E5	91B20	HHC	WIA-KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Jimmie" && $one_casualty->last_name == "Scott")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP5 E5 91B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
              </div>
              <div class="casUnitName">A Co.</div>
              <div class="casUnitList">
                <div>CONWAY, Richard A.</div><div>SGT E5 11B40</div><div>WIA</div>
                <div>MATHALLER, Kenneth L.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>SULLIVAN, Donald L</div><div>PVT E2	11B10</div><div>WIA</div>
                <div>BROWN, Girnie R.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>SKATES, Dale E.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>SCOTT, William Jr.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>RODRIGUEZ, Rodolfo</div><div>SSG E6 11B40</div><div>WIA</div>
                <div>WILLIAMS, Walter J.</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>CASTLEMAN, Rickey D.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>RHODES, James Jr.</div><div>PFC E3	91B20</div><div>WIA</div>
                <div>LOVE, John E. L.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>SHAFFER, Paul K</div><div>SFC E7	11C40</div><div>WIA</div>
                <div>SEWELL, Bernard</div><div>SSG E6	11B40</div><div>WIA</div>
                <div>SELDON, Melvin R</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>MOLIERE, Larry J. Jr.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>LANIER, Warren M</div><div>SGT E5	11B40</div><div>WIA</div>
                <div>HARRIS, Elton O</div><div>SSG E6	11B40</div><div>WIA</div>
                <!-- THOMAS, Lewis M.	PFC E3	11B10	Co A 	KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Lewis" && $one_casualty->last_name == "Thomas")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
              </div>
              <div class="casUnitName">B Co.</div>
              <div class="casUnitList">
                <div>
                  WALDROP, Winford P.
                </div>
                <div>
                  SSG E6	11C40
                </div>
                <div>
                  WIA
                </div>
                <div>
                  MCCULLION, Joseph R.
                </div>
                <div>
                  PVT E2	11B10
                </div>
                <div>
                  WIA
                </div>
                <div>
                  ESPER, James V.
                </div>
                <div>
                  SFC E6	11B40
                </div>
                <div>
                  WIA
                </div>
                <div>
                  HACKETT, Robert W.
                </div>
                <div>
                  SP4 E4 11B20
                </div>
                <div>
                  WIA
                </div>
                <div>
                  PURCELL, John W.
                </div>
                <div>
                  SGT E5 11B40
                </div>
                <div>
                  WIA
                </div>
                <!-- ROTHRANG, Howard F. Jr.	PFC E3	11B10	Co B 	KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Howard" && $one_casualty->last_name == "Rothring Jr")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PFC E3 11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>
                  STEVER, Frank E.
                </div>
                <div>
                  SGT E5 11B40
                </div>
                <div>
                  WIA
                </div>
                <!-- D'AMICO, Frank A.	1ST LT 	1542	Co B 	 KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Frank" && $one_casualty->last_name == "D'Amico")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>1ST LT 1542</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- FACKRELL, Clinton B.	SGT E5 	11B40	Co B	KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Clinton" && $one_casualty->last_name == "Fackrell")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SGT E5 11B40</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- TAYLOR, James R. 	PVT E2	11B10	Co B 	KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "James" && $one_casualty->last_name == "Taylor")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>PVT E2	11B10</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <!-- LAMARR, Phillip 	SP4 E4	11B20	Co B	KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Phillip" && $one_casualty->last_name == "La Marr")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP4 E4	11B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>
                  CHEWNING, Leroy R.
                </div>
                <div>
                  SP4 E4	11B20
                </div>
                <div>
                  WIA
                </div>
                <!-- CONLEY, Green 	SP4 E4 	11B20	Co B	KIA -->
                @foreach ($all_casualties as $one_casualty)
                  @if ($one_casualty->first_name == "Green" && $one_casualty->last_name == "Conley")
                    <div><a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a></div>
                    <div>SP4 E4 11B20</div>
                    <div>KIA</div>
                  @endif
                @endforeach
                <div>
                  HARRIS, David K.
                </div>
                <div>
                  SP4 E4	11B20
                </div>
                <div>
                  WIA
                </div>
                <div>
                  BENNETT, Robert
                </div>
                <div>
                  SGT E5 11B40
                </div>
                <div>
                  WIA
                </div>
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
              HEADQUARTERS<br>
              1ST BATTALION (MECH) 5TH INFANTRY<br>
              APO San Francisco 96225<br>
            </div>
            <div class="aarTopic">
              TLMAA-C 20 MARCH 1966
            </div>
            <div class="aarTopic">
              SUBJECT: After-Action Report
            </div>
            <div class="aarTopic">
              TO: Commanding Officer<br>
              2d Bde TF, 25th Inf Div<br>
              APO US Forces 96225<br>
            </div>
            <div class="aarTopic">
              1. OPORD 12-66 (Operation WAIKIKI).
            </div>
            <div class="aarTopic">
              2. 040710MAR-041830MAR66.
            </div>
            <div class="aarTopic">
              3. 1st Bn (Mech) 5th Infantry, in conjunction with the 2nd Bn, 27th Infantry, conducted search and destroy operations in Hau Nghia Province vic Xom Moi (XT 612170), Giong Viec (XT 605153) and Ba Xa (XT 595172). The Bn OPORD No 12-66 was issued 022000MAR66 and detailed instructions were issued 030930MAR66. Lt Col T.U. Greer is the reporting officer. Task organization and commanders were as follows:
              <ul>
                <li>
                  Task Force Steel (Lt Col T.U. Greer, commanding).
                  <ol>
                    <li>
                      Recon Platoon (Lt D. T. Schou)
                    </li>
                    <li>
                      Hvy Mort Plat (Lt J.E. McQuinn). Three spt squads, Trp A, 3/4 Cav.
                    </li>
                    <li>
                      Team Smash (Capt J.A. Renner, commanding)
                      <ol type="a">
                        <li>
                          Co A (-), 1/5th Mech.
                        </li>
                        <li>
                          3d Plat, Trp A, 3/4 Cav.
                        </li>
                        <li>
                          Three demolition teams, Co B, 65th Engr Bn.
                        </li>
                    </ol>
                    </li>
                    <li>
                      Company B (Capt E. B. Vickery, commanding).
                      <ol type="a">
                        <li>
                          (a) Four demolition Teams, Co B, 65th Engr Bn.
                        </li>
                        <li>
                          (b) Two mechanized flame APC’s, 1st Inf Div.
                        </li>
                      </ol>
                    </li>
                    <li>
                      Team Crusher (Capt J.R. Monihan, commanding).
                      <ol type="a">
                        <li>
                          Trp A (-), 3/4 Cav.
                        </li>
                        <li>
                          3d Plat, Co A, 1/5th Mech.
                        </li>
                        <li>
                          Two demolition teams, Co B, 65th Engr Bn.
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Intelligence</span>:
              <ol type="a">
                <li>
                  Intelligence prior to the operation indicated that two estimated VC LF companies C1/306and C 54, to include two VC guerrilla platoons, were known to have temporarily occupied small houses and defensive positions in the area of operations. The enemy was expected to utilize small elements up to platoon size to harass attacking elements through the use of heavy sniper fire, boobytraps and mines. The enemy was expected to harass attacking forces from concealed positions in the vic of Xom Moi (XT 6117), Gia Be (XT 6018), Ba Xa #1 (XT 5917), Ba Xa #2 (XT 6119), Coy Tram (XT 5816) and Giong Viec (XT 6015).
                </li>
                <li>
                  During the conduct of the operation some sniper fire was received upon moving into the attack position vic Giong Viec (XT 605155). Contact with and questioning of an old man from that area resulted in the determination that approximately 10 VC were in the Giong Viec area, but they ran to Ba Xa #1 (XT 5917) when the attacking forces approached. Approximately fifteen (15) SA rounds and eight (8) rifle grenades were received by the Recon Platoon from Ba Xa #1. A bunker with approximately seven (7) VC was destroyed vic XT 624174. There was no enemy contact in the Xom Moi area. A mounted sweep of the Ba Xa #1 area by a reinforced company resulted in light enemy contact - primarily SA sniper fire. There were no specific indicators of VC unit identification.
                </li>
                <li>
                  Terrain and Weather
                  <ol>
                    <li>
                      Cover and concealment: The primary objective area of Xom Moi (XT 6117) was considerably destroyed by continuous Air Force bombing and artillery shelling. The remaining vegetation, rubber trees, underbrush, bamboo hedgerows and small thick clumps of tall trees with underbrush afforded the enemy good concealment for harassing sniper type action. Extensive trench networks as indicated on the aerial photo of Xom Moi also afforded additional concealment to the enemy forces. The only cover that existed in the area was afforded by the moderate tunnel networks which generally connected small houses in the area. Mounted attacking friendly forces by the very nature of the attack and rapid movement were afforded minimum or no concealment by the terrain.
                    </li>
                    <li>
                      Obstacles: There were no obstacles in the area of operations that would seriously impede or limit mounted or dismounted movement.
                    </li>
                    <li>
                      Observation: During movement into the attack position, open fields vic XT 6015, observation was excellent. Hedgerows and moderate underbrush in the attack position and Xom Moi objective area caused extremely limited observation, usually from one hedgerow to the next. This caused considerable difficulty in detecting the enemy as well as in controlling movement of friendly elements.
                    </li>
                    <li>
                      Avenues of approach to the attack position from the RP and from the LD to the southern edge of Xom Moi woodline (XT 605163) were excellent and afforded rapid movement with excellent dispersion of mounted elements.
                    </li>
                    <li>
                      The weather was no factor in the operation and caused no changes in plans or courses of action.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Mission</span>: To attack rapidly through the lower portion (S) of Obj Pine and conduct search and destroy operations in the upper (N) portion of Obj Pine on order.
            </div>
            <div class="aarTopic">
              6. The battalion task force moved from its base camp to an attack position, during which time the 2d Bn, 27th Infantry conducted a helicopter assault landing. On order the battalion conducted a mounted attack on three axes through the lower and upper portions of Obj Pine up to PL Zulu; continued the mounted sweep back to PL X-ray, then searched back to PL Zulu with dismounted infantry following the track vehicles (Incl 1, Operation Overlay).
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Execution</span>: 2d Bde Opn Order 14-66 was received on 281500FEB66 and Frag Order 15-66 on 031146MAR66. Task Force Steel crossed the LD at 0710 hours (as planned) and moved along Route Jack to occupy attack Position Apple (Co B), Orange (Tm Smash), and Cherry (Tm Crusher). Recon Platoon screened the movement along Route Jack and Co B secured the attack positions. At 0740 hours Heavy Mortar Platoon occupied Position Plum to support the attack. Each unit received some small arms fire while moving into their attack positions but suffered no casualties.  Recon Platoon occupied blocking position Prune at 0746 with negative contact. By 0820 all elements were in position to commence the attack and permission to cross the LD was received at 0833 hours. The TF, less Recon Plat, crossed the LD at 0834 hours without contact, except for Tm Crusher, which received some small arms fire from the woods to their front. By 0835 hours all units were on PL X-ray. The Recon Platoon started receiving what was believed to be 60mm mortar fire from vic XT 595172 at 0908 hours. The fire was not effective and 4.2" mortar fire suppressed the VC fires. The TF mounted attack continued to PL Zulu at 0916 hours against light small arms fire and completed the first sweep at 0952. Tm Crusher located an enemy bunker with seven VC vic XT 624174 which was taken under fire and estimated two VC were killed and four wounded. Co B occupied blocking position Pear and Tm Crusher occupied Position Peach with elements of their respective units. The remainder of the TF continued its mounted sweep back to PL X-ray at 1020 hours but no contact was made on the return movement. TF Steel then dismounted from their personnel carriers and started a detailed search from PL X-ray to PL Zulu. Co B located a tunnel complex vic XT 61151700 which contained grenades and .50 cal ammo.  Tm Crusher located three VC in black uniforms and steel helmets vic XT 637173, employed small arms fire and estimated killing two and wounding one. At 1115 hours small arms fire was received by the Recon Platoon on Obj Cedar but no casualties were sustained. At 1212 hours Recon Platoon received rifle grenade fire from vic XT 605175 and again sustained no casualties. At 1252 hours Recon Platoon was attached to Tm Smash to search Obj Cedar. Tm Smash found and destroyed a heavily boobytrapped weapons cache vic XT 615175. Tm Crusher located a heavily boobytrapped area vic XT 617173 and 600 pounds of rice vic XT 620170. All units closed on PL Zulu by 1422 hours with no enemy contact. Team Crusher was detached from TF Steel and attached to the 2/27 Inf at 1452 hours. Tm Smash completed their exploration through Obj Cedar and started their return to the Bn base camp. Co B swept back through Positions Apple and Orange, then returned to Bn base.  All elements closed into the base at 1825 hours.
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Supporting Forces</span>: One battery of artillery was in direct support of the TF and fired the preparation, but, due to the scheme of maneuver, limited VC contact, and lack of targets, was not extensively utilized.
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Results</span>:
              <ol type="a">
                <li>
                  Friendly: No casualties. 597 personnel participated in the operation.
                </li>
                <li>
                  Enemy: Six (6) killed (conf); three (3) (est) for a total on nine (9). Captured items included 14 bags of rice, three bags of peanuts, five US steel helmets, two US bayonets and two entrenching tools. Equipment and facilities which were destroyed included: nine Chicom hand grenades, three rifles, one submachinegun, 200 rounds of cal .30 ammunition, two boxes of Chicom grenades, 50 rounds of Chicom cal .51 ammunition, two French AT mines, 25 tunnels, 21 bunkers, 20 boobytraps, four boobytrapped 155mm duds, and miscellaneous clothing.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Administrative Matters</span>:
              <ol type="a">
                <li>
                  Supply. The TF expended 2,000 rounds of 7.62mm, 3,000 cal .50, 100 40mm grenades, 70 4.2" mortar rounds, 53 hand grenades and 1200 lbs of demolitions.
                </li>
                <li>
                  Maintenance. Requirements were light. Largest problem was the replacement of thrown tracks due to heavy underbrush and trees; however, this was corrected at 1st echelon level.
                </li>
                <li>
                  Transportation. TF consumed 1200 gallons of MOGAS.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. Special equipment and techniques. Flame throwers were taken into the operation but were not needed.
            </div>
            <div class="aarTopic">
              12. The light resistance encountered by the rapid sweep and an unopposed detailed search resulted in an early termination of the operation. After seizing the objective area, the TF continued its sweep into the surrounding areas in an attempt to make contact; however, the results were negative.
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">Conclusions and lessons learned.</span>:
              <ol type="a">
                <li>
                  Extensive air strikes, which were conducted during the week preceeding the operation, and the air and artillery preparation of the objective, which began at 0700 hours, apparently drove the VC out of the area. Recommend that future air strikes be limited to D-day preparation and close air support for all search and destroy operations.
                </li>
              </ol>
            </div>
            <div>
              FOR THE COMMANDER:<br>
              1 Incl BILLY J. HAMMONS<br>
              as Captain, Infantry Adjutant
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
              HEADQUARTERS<br>
              1ST BATTALION (MECH) 5TH INFANTRY<br>
              APO San Francisco 96225
            </div>
            <div class="aarTopic">
              AVTLSBA-C 10 JUNE 1966
            </div>
            <div class="aarTopic">
              SUBJECT:  Combat Operations After-Action Report (RCS/J3/32)
            </div>
            <div class="aarTopic">
              TO:  Commanding Officer<br>
              2d Brigade, 25th Infantry Division<br>
              ATTN:  AVTLBDB-T<br>
              APO U. S. Forces 96225<br>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Operation WAHIAWA, search and destroy</span>
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Dates of Operation</span>:  151200May 66-271830MAY66
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">General</span>: The 1st Bn (Mech), 5th Infantry, as part of the 2Bde Task Force, 25th Inf Div, conducted search and destroy operations in conjunction with airmobile and ground operations conducted by two other battalion task forces to locate and destroy VC forces, supplies and bases in the area of operation. The Bn OPORD 20-66  (Operation WAHIAWA) was isssued 141200MAY66.
              <ol type="a">
                <li>
                  Reporting Officer:  Lt Col T. U. Greer.
                </li>
                <li>
                  Task Organization:
                  <ol>
                    <li>
                      1st Bn (Mech), 5th Inf:  Lt Col T. U. Greer, commanding.<br>
                      Co A:  Capt J. A. Renner, commanding.<br>
                      Co B:  Capt E. B. Vickery, commanding.<br>
                      Co C:  Lt W. A. Blair, commanding.<br>
                      Heavy Mort Plat:  Lt L. W. Phillips.<br>
                    </li>
                    <li>
                      detached:  Recon Plat:  Lt Dirck T. Schou.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              <span class="topicTitle">Intelligence</span>:
              <ol type="a">
                <li>
                  Intelligence prior to Operation. Annex A (Intelligence) to OPORD 20-66 provided an estimate of VC strength, location, disposition and situation within the AO. Of primary concern were the 320th Bn (XT 5434, 7 May 66, A-1) and elements of the 272nd Regiment (XT 6137) which were in excellent position to reinforce VC units in the Boi Loi Woods.  The Boi Loi Woods area (XT 5034) was a known VC stronghold and probable supply area. During Operation MASTIFF (March 66) the U.S. 1st Infantry Division had uncovered ten base camp areas, two large caches (75 tons or more), and a VC training camp within the area. On 7 May, B/1/5th contacted C403 Company,  320th Bn vic XT 508316 and received heavy, accurate and well disciplined AW fire. Because of this it was assumed that the 320th Bn was well trained and well equipped with automatic weapons. VR indicated extensive trenchwork and numerous well used trails. It was estimated that caches were most likely to be found within 50 to 100 meters off the trails. VC squad and possibly platoon sized harassing operations were expected.
                </li>
                <li>
                  Enemy situation during operation. Initial contact was attained by Co A, when, on 15 May, they apprehended 16 VCS vic XT 481300. These VCS were evacuated to the 25th MID where further interrogation revealed five VCC, two VCS and nine civilians. The civilians were released. Contact was again made by Co A, when, on 17 May, they surprised four VC in a small base camp area. The VC were fired upon and immediately broke contact. One VC was later found dead in a tunnel along with various munitions at XT 499317. Co A discovered four more VC in a small base camp area vic XT 500316, took them under fire and the VC again broke contact. Search of the area up to XT 505320 produced a typewriter, three ledger books, a telephone, TA312, and a radio PRC-10 and indicated a CP area which had obviously been surprised. The ledgers turned out to be the intelligence files of the Tay Ninh Military Intelligence Subsector. Co B discovered a major base camp area including living quarters, mess hall, training areas and a firing range, complete with silhouette targets vic XT 496322. Subsequent enemy contact consisted of day and night ambushes during which on only one occasion was a force of larger than four VC encountered. On 26 May a Co C daylight ambush saw seven VC outside of the kill zone vic XT 515309. Again, the VC immediately broke contact when fired upon. On numerous occasions the VC made contact with the same ambush and more than once inthe same location on the same day. This indicates either poor communications within the VC units contacted or poor coordination between VC units operating in the general area. The VC tended to move more during the hours pf daylight than during the hours of darkness. Ambushes made more contact during the day than at night. Loss of the PRC-10 radio was of significance to the VC. Documents taken from a dead VC eight days after the capture of the radio indicated higher headquarters (VC) had lost contact with units in the Boi Loi Woods. A large cache of rice, kerosene, cloth, and other items was discovered by Co A vic XT 564324 on 19 May. Co B discovered many caches of rice, kerosene and other items vic XT 5830 on 23-24 May. Discovery of such large caches and interpretation of enemy documents in the area indicate the presence of a major VC supply area in the AO. The VC employed AT mines and AP boobytraps extensively in the AO. The mines were placed in old tracks, especially at paddy dikes and in likely avenues of approach. Most mines encountered were pressure activated; however, assessment of damage to some APC's indicates that some mines were either command detonated or activated by some electrical device, causing the point of detonation to be in the APC's belly rather than on the tracks. It is believed that the latter is true due to the absence of any CD wires. Cache areas were extensively boobytrapped, especially with CBU bomblets.
                </li>
                <li>
                  Terrain and Weather.
                  <ol>
                    <li>
                      Climatic and weather conditions. The weather picture presented by the May Climatic Summary was quite accurate. Adverse climatic conditions had minimal effect upon operations. Low ceilings delayed use of command and control helicopters on three occasions and caused the postponement of two air strikes. Rain and cloud cover adversely affected the use of the starlight devices. The amount of rain experienced had little effect upon trafficability other than on some occasions making it necessary for vehicles to spread out and avoid using the same tracks, thus increasing the chances of detonating AT mines.
                    </li>
                    <li>
                      Relief and drainage systems. Significant relief patterns were encountered along the Saigon River from XT 565325 to XT596325. Slopes varied from moderate to steep and are in some cases an obstacle to tracked vehicle movement, especially vic XT 580310 to XT 596323. Areas adjacent to major creeks in the area are presently trafficable for mechanized operations. However, their trafficability will be greatly reduced, if not entirely eliminated, with the expected increasing rains during the months of June, July and August. The area vic XT 517310 will prevent no obstacle as rains increase.
                    </li>
                    <li>
                      Vegetation. The forest areas in the AO represented by dark green on the map are definitely not suited for mechanized operation. The undergrowth is so dense that tracked vehicles are just able to punch their way through single file. It would be impossible to maintain tactical formations with sufficient control. The map is accurate in depicting forest patterns in the general area of XT 5830, XT 5931 and XT 6031; these areas shown in dark green are extremely thick in this area. Although the area shown as plantation has more undergrowth than is usually found in plantations, it was still easily traversed by APC's. There are many trails throughout the area. Trails in the Boi Loi Woods vic XT 5132 are accurately shown on the map. They are, however, more extensive than shown. The trail entering vic XT 503316 exits at XT 498319. There is now a trail, courtesy of the 1/5th Mech, about the width of an APC which enters at XT 511315 and exits at XT 505324. The forrest area in XT 5130 is not as thick as shown. There is only one band, 50 meters wide, of thick forest extending from XT 510305 to XT 513300. The area vic XT 532305 has extensive hedgerows and several sizable patches of woods. The area shown as light forest and scrub vic XT 5532, XT 5533, and XT 5434 is more of an obstacle to mechanized operations than indicated by its map representation. This is also thick undergrowth through which APC's must negotiate in single file.
                    </li>
                    <li>
                      Obstacles to Mechanized Operations.
                      <ol type="a">
                        <li>
                          Natural. Those areas represented as heavy woods on the map are obstacles through which APC's can move only by punching their way through. Control of  tactical formations in these areas is nearly impossible. The areas represented as light forest and scrub growth (see C 3 above) are also obstacles. The major streams in the AO may be crossed but at only a few points. Crossing sites used and known by the 1st Bn (Mech, 5th Inf are at the following coordinates:<br>
                          <u>Rach Suoi (west) XT 499322 to XT 538344</u>:
                          <ul>
                            <li>XT 502323</li>
                            <li>XT 513332</li>
                            <li>XT 527344</li>
                          </ul>
                          There are other possible crossing points from XT 499322 to XT 512329:<br>
                          <u>Rach Suoi (east) XT 540300 to XT 541343</u>:
                          <ul>
                            <li>XT 542311</li>
                            <li>XT 548323</li>
                            <li>XT 546333</li>
                          </ul>
                          <u>Rach Thai Thai, XT 572278 to XT 619318</u>. There are many probable sites along the southernmost 500 meters and other possible sites along the upper portions. The following are known excellent crossing sites:
                          <ul>
                            <li>XT 574283</li>
                            <li>XT 586305</li>
                            <li>XT 612310</li>
                          </ul>
                          These streams will present more of an obstacle as rains increase. The areas along their banks will become increasingly difficult to use also. The areas adjacent to Rach Thai Thai are already getting quite soft and it was necessary for vehicles to spread out and not track each other, which increased the chances of hitting AT mines.One tracked flame thrower was seen bogged down along Rach Suoi (west) vic XT 533342. The rice paddies will become more of an obstacle as they become flooded. Experience has indicated that when a paddy won't hold water, it won't hold a track. The ground seems to absorb rather than hold the water in this area. The dikes were in most cases no obstacle, although a few were high enough to provide a serious hindrance. They will slow rather than stop mechanized movement. The area northeast to the river from the road running from XT 999326 to XT 615312 is untrafficable.
                        </li>
                        <li>
                          Man-made. There are four types of man-made obstacles in the AO: fortifications, minefields, bomb craters, and cultivated fields. Fortifications in the form of trenches and foxholes were found around most major clearings which might be used as a landing zone. These clearings were vic XT 496314, XT 489338, XT 516323, XT 574297 and XT 576307. They presented no obstacle to tracked vehicle movement but would undoubtedly, if occupied, jeopardize any attempted heliborne landing. There were many small bunkers and well positions along the southern edge of the triangle of land from XT 595306 to XT 614311. Again, these presented no obstacle to tracked movement, but would become a serious threat to heliborne landings attempted between those positions and the stream or to a dismounted attack from the south. Mines were encountered throughout the AO, AT mines of considerable size were used by the VC extensively (see 2 above). Two heavily mined areas were encountered, one at XT 584304 and one vic XT 577288. The corridor bounded by the stream and heavy woods was especially susceptible to heavy mining by the VC. Particular attention should be paid in future operations to the open areas vic XT 493317, XT 542312, XT 577287 as areas susceptible to mining. Bomb craters caused by large bombs dropped in the AO are obstacles to tracked vehicle movement due to their proximity to each other, their depth, and the quantity of loose spoil thrown up by the explosion. On one occasion a unit was so channelized by bomb craters that only two tracks could remain abreast while passing between a series of craters (vic XT 573297). Cultivated fields are an obstacle to tracked vehicle movement only in that they tend to channelize movement. Civil affairs doctrine states that, whenever possible, units will avoid destruction of civilian's crops and cultivated fields, thus, to an admittedly minor though undeniable degree, introducing a restrictive element upon maneuver. This will become more important as the rice harvest approaches.
                        </li>
                      </ol>
                    </li>
                    <li>
                      Conclusions Pertaining to Terrain and Weather.  During the dry season, the AO is suited for mechanized operations if in conjunction with non-mechanized forces. During the period of the Southwest Monsoon (June-Sept) the AO is unsuited for mechanized operations.
                    </li>
                  </ol>
                </li>
                <li>
                  Fortifications. (See C 4 (b) above). Fortifications are shown in detail on the overlay. Trenches were from 2 1/2 to 4 1/2 feet deep, made in the standard zig-zag pattern and generally had small horizontal off-shoots that provided enough space for one man to obtain overhead cover. In no cases were supplies found stored in the trenches other than an occasional discarded clip of ammunition or a stray document. Trenches were not destroyed except to run APC's over them. Bunkers were of standard construction. Most had overhead cover consisting of logs about six inches in diameter covered with dirt 2 to 2 1/2 feet thick. The bunkers were 4 to 5 feet deep and from 4x4 to 5x5 feet wide. They had from one to three firing ports each at ground level, the apertures of which were one foot wide inside and extended to about 2 1/2 feet wide outside. The bunkers sometimes had an additional horizontal hole to provide cover should the overhead be destroyed. Those portions of the bunkers' walls which were above ground level were 2 to 2 1/2 feet thick. No supplies were found stored in bunkers other than an occasional misplaced item. Foxholes were of standard construction, about 3 to 4 1/2 feet deep, 2x3 to 4 feet, without overhead cover. Some had from 6 inches to 1 foot of overhead cover. One VC fortified village was found. The bunkers and trenches conformed to the description stated above. The living quarters, mess hall and other structures within the village were of various sizes, but were generally excavated 3 to 3 1/2 feet deep and had a tin covered roof 2 to 4 feet off the ground, supported by logs. Under the roof was a flat pan-like structure designed to give overhead cover to the structure. The pan was supported by logs from 3 inches to 5 inches thick and covered with an additional 3 to 6 inches of dirt supported by tin.
                </li>
                <li>
                  CA/Psy Ops. During Operation WAHIAWA, the Bn's CA/Psy Ops activities were passive rather than active. There was no opportunity to utilize MEDCAP or distribute Helping Hand material. The Bn requested no Psy Ops missions. There were only two areas found which were heavily occupied by civilian personnel: Xom Bung Binh, XT 555343, and the area vic XT 535303. These areas were occupied mainly by women, children and old men. They had a neutral attitude to U.S. forces and there were no incidents. There were, however, many cultivated areas, areas in which there were homes recently occupied and in which water buffalo were abundant but areas without people. These include the village at XT 603321.
                </li>
                <li>
                  Conclusions.
                  <ol>
                    <li>
                      VC communications are poor at best and loss of any radio communications equipment is seriously detrimental to their effort.
                    </li>
                    <li>
                      Use of daylight ambushes should be increased as the VC in the Boi Loi area tended to move freely during hours of daylight.
                    </li>
                    <li>
                      The 16 VCS (of which at least 5 turned out to be VCC) apprehended on 15 May appeared to be on some sort of Sunday pass. If other indications confirm this Sunday pass system, it would appear the Div could capitalize on this procedure through the initiation of operations on Sundays.
                    </li>
                    <li>
                      The area vic XT 5931 and XT 5031 is probably a base area for transplant or regrouping Bn to regiment sized VC forces.
                    </li>
                    <li>
                      The AO is a major COSVN rear service supply area.
                    </li>
                    <li>
                      The VC are using AT mines of 50 lbs and more and activating them, in some cases, with electrical devices designed to cause the point of detonation to be under the body of the APC, as opposed to under the track itself.
                    </li>
                    <li>
                      Areas adjacent to major streams in the AO will be of doubtful trafficability as the Southwest Monsoon becomes firmly established.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Mission</span>:
              <div>
                1/5th Mech moves 151200MAY66 to forward base areas and conducts deceptive operations. Conducts search and destroy operations in AO "A" and Obj 4, commencing 160700MAY66. Prepares to conduct search and destroy operations in AO "C" on order. Conducts S&D opns in Obj 5 on order (Incl 1, Operation Overlay).
              </div>
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Concept of Operation</span>:
              <div>
                1/5th Mech moves from base camp commencing 151200MAY66 to occupy blocking positions DAISY, ORCHID, and LILY as a deceptive maneuver (these same blocking positions were occupied by the 1/5th Mech less than two weeks prior to this operation in securing critical bridge sites along the road to Tay Ninh). Moves across LD 160700MAY66 to conduct S&D operations in AO "A" and Obj 4 with three companies. Priority of Hvy Mort fires to Co A.  The commander's concept visualized the following:
                <ol type="a">
                  <li>
                    Co A would escort and secure the Bde Quartering Party commencing 151000MAY66 to vic XT 480272 (fwd Bde CP). Upon release the Co would proceed to establish a forward base at Obj LILY. On 160700MAY66 the unit would conduct S%D operations along Axis SLUGGER, searching and clearing the trench line along the southern edge of Obj 4 and reporting any trails leading along the axis. The unit would be prepared to conduct S&D operations along SUMMIT and OREGON from N to S on order. Co B would move to establish a forward base at Obj DAISY from which to conduce deceptive recon patrols along the Cu Nan Creek for possible crossing sites. On 160700MAY66 the unit would cross the LD in direction IRIS, POPPY and PANSY to conduct thorough S&D operations in zone and be prepared to conduct S&D operations along SUMMIT and OREGON on order. Co C would escort and secure movement of the Bde trains commencing 151400MAY66 to vic XT 480272 and upon release move to occupy forward base ORCHID. On 160700MAY66 the unit would move along Axis BUTCH conducting S&D operations and occupying blocking psns TULIP and ROSE. On order, the company will conduct S&D opns along SANTA FE and into Obj ZINNIA.
                  </li>
                </ol>
              </div>
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Execution</span>:
              <div>
                At 151002MAY66 Co A departed base camp escorting the Bde Quartering Party to vic XT 480272. As the Bde forward CP was closing the intended area, the Bn CO, from the air, observed several civilians departing rapidly on bicycles in the direction of the Boi Loi Woods. A platoon was dispatched to pursue the group and at vic XT 481300 apprehended 16 VC suspects, consisting of 14 young men, one old man and one young woman. The suspects were turned over to the National Police at the Bde fwd CP. At 1200 Co B and the Bn CP departed base camp to establish its position vic Obj ORCHID. At 1400 Co C departed base camp, escorting the Bde trains to vic XT 480272. At 1407, Co A was released and moved to assist the Recon Plat in a road clearing operation. At 1415 Co B and the Bn CP arrived at Obj ORCHID and initiated defensive preparations while selected B Co elements conducted deceptive recon patrols along Cu Nan Creek. At 1520, Bde trains vehicles being escorted by Co C became bogged down in mud enroute to the fwd CP and Co C remained overnight to aid in extraction and to provide security. Co A completed its mission and arrived at Obj LILY at 1800 hours. The Bn CO then directed Co A to move to Obj ORCHID to provide security for the night due to the absence of Co C.  After a Bde directed delay, Co's A and B departed at 160835 for the objective area. Co C was released from Bde control and moved to the rendezvous vic Boi Loi Woods in order to accomplish its mission. Co A reached the edge of Obj 4 at 0922 and initiated S&D operations along Axis SLUGGER. At 0924 Co B reached the vic Boi Loi Woods and continued along its direction of attack to Obj IRIS. At 0935 Co C initiated its movement along Axis BUTCH to establish blocking positions vic XT 500320, XT 504324, and XT 512327.Co B moved rapidly through IRIS with negative contact and entered Obj POPPY at 0940. Co B continued on to Obj PANSY, arriving there at 1005. At 1126 Co A reached the edge of its objective area and initiated the return sweep back along Axis SLUGGER. Co C, meanwhile, located at vic XT 513324 a heavily boobytrapped area at 1155. Co uncovered a cache of rice at 1225 consisting of 58 100 lb bags. Co B, searching PANSY, uncovered 50 100 lb bags of rice. At 1314 Co A and Co C linked up vic SUMMIT and OREGON to conduct S&D operations through the wooded area from NW to SE, including a search of Obj LILAC, which resulted in negative contact. At 1405 Co C located a major supply cache vic XT 513326 consisting generally of sheet steel, roofing tin, wax, medical supplies, buttons and cloth (see 9 b). By 1410 Co B had completed its search of PANSY and returned to search Obj POPPY in detail. Co A established its night defensive position vic XT 484305 and employed four ambushes, Co B was positioned vic XT 502299 during the hours of darkness and employed three ambushes. Co C remained in sector vic XT 513328 to protect a large cache and suspected additional caches. During darkness, Co C employed five ambushes. At 1804, Co C located a cache consisting of 30 sheets of steel 1/8" thick and three feet by seven feet vic XT 516313. At 2007 the Co C ambush enroute to its position vic XT 531328 was grenaded short of its position and also received AW fire from vic XT 512332. The element returned fire and adjusted mortar/Arty fire in the area as it relocated. All ambushes returned at first light. At 170646MAY66 Co A departed along Axis BUTCH with the mission to conduct S&D operations along Axis BUTCH in order to check the trails and woods edge for hidden caches. At 0715 Co B initiated S&D operations along the wooded area north of the trail on Axis BUTCH extending from SW (XT 491317) to NE (XT 509333). At 0700 Co C continued work in the cache area and started a thorough search of the area along SUMMIT and Obj ZINNIA. At 0745 Co C elements found a piston-type machine vic XT 513327. At 1055 Co B found a base camp area vic XT 496322 which contained living quarters, mess hall, training area and training range. A check of the area indicated that the area had been used as recently as that same day or late the afternoon prior. The area was destroyed and the search continued. At 1100 Co A located six "lean-to's," fresh food and several bicycles at XT 509321. At 1305 Co C elements established a blocking position to block VC flushed by an element of the 2/27th conducting S&D operations. Also, one platoon from Co C was dispatched to secure an LZ site and provide security for a downed helicopter of the 2/27th Inf. At 1330 Co A elements continuing their search surprised four VC in a base camp vic XT 500313. The VC were fired on and two were hit. The VC broke contact and Co A gave chase following blood trails. Co B, at 1355, dispatched one platoon to cut off VC moving to escape through that area. At 1500 Co B sustained two WIA from a boobytrap while destroying  a VC camp and later received two rifle grenades when they departed the area. The unit made a search with negative results. At 1535 Co A elements following blood trails from their previous VC contact located a tunnel complex vic XT 499317 in which was found one dead VC confirmed to be a result of the unit's engagement. Also found was one M1 rifle, miscellaneous munitions and grenades. At 1625, elements of Co A found a small CP vic XT 500316. Upon entering the area four VC were sighted and taken under fire with an estimated two KIA resulting. A search of the area revealed ledger books and a portable typewriter. At the same time other Co A elements found another CP area vic XT 505320 which contained a TA312 telephone and one PRC-10 radio (on freq 40.0). At 1830 an APC from Co C hit an AT mine vic XT 512339, injuring three persons and causing extensive damage to the track. At 1855 the medical APC evacuating the casualties hit an AT mine vic XT 493316 which caused moderate damage to the vehicle but no injuries. During darkness Co C established its base vic XT 513328 and employed six ambushes. A Co established its perimeter around the Bn CP vic XT 483306 and employed three ambushes. Co B established itself vic XT 502299 and employed three ambushes. At 2056 the C Co ambush located vic XT 508326 engaged an undetermined number of VC approximately 50 meters from their position with Claymore mines, SA AW fire and mortars. Two VC kills were estimated. A short time later the ambush located vic XT 510328 received SA fire and rifle grenades. The ambush returned fire and estimated one VC killed. During this action,  two friendly WIA's were sustained. All ambush patrols returned at first light. At 0700 Co B initiated a search of the area extending SW (XT 501326) to NE (XT 516348). Eight water cans and a bicycle were found shortly thereafter vic XT 496323. At 0708 Co A started a search of the area extending from SW (XT 493310) to NE (XT 513320) at which point the unit would swing S, searching N to S. Departing its area at 0830, Co C conducted a search through the woods' edge on both sides of SANTA FE. At 0950 Co A elements discovered one typewriter and a small amount of rice vic XT 500316 and an arms room with anti-aircraft spare parts and an armorer school graduation certificate vic XT 505320. At 1257 Co A had completed the search of its assigned sector and received orders to search the area vic XT 486330. By 1506 Co B completed its search to XT 508335 in their area. At 1632 two VC attempting to emplace a Claymore mine in Co A's new search area were surprised and engaged by Co A resulting in one VC killed (BC) and one captured carbine and Claymore mine. During the hours of darkness, night defensive positions were established by Co A vic XT 484306; Co B vic XT 503298 and Co C vic XT 484306. The Bn established six ambushes which returned at first light with negative contact. The Bn moved at 190743 to conduct S&D operations in AO "C" vic XT 5634 IAW Bn FRAG ORDER #1 (see Incl 2,  Operation Overlay). At 0833 the lead APC of Co C hit an AT mine vic XT 531306, which caused two casualties and extensive damage to the track. At 0910 Co B passed PL CHEVY with negative contact. At 1027 Co A reached Obj DE SOTO and began its search and at 1027 found a large cache consisting of 200 100 lb bags of rice, 150 5 gal cans of kerosene and 500 sheets of tin, all stored on pallets. At 1132 Co A flushed and engaged three VC on DE SOTO killing one VC (BC) and capturing one 9mm SMG. Co B crossed PL DODGE at 1112 and continued its sweep to Obj OLDSMOBILE. At 1116 Co C found a rice cache in ground holes vic XT 555320. At 1214 Co A located seven tons of rice, a large quantity of black cloth, several sewing machines and 1500 lbs of dried fish in their objective area. Arriving at 1330 hours, Co B initiated its search of Obj OLDSMOBILE. At 1620 all elements had finalized their search and initiated movement to the Bn CP vic XT 554335. During darkness eight ambushes were employed with negative contact. At 200700 the Bn was enroute to support the 2/27th Inf by screening and blocking N, W and SW of the 2/27th's planned operation in AO "A" vic XT 5233 IAW Bn FRAG ORDER #2 (oral). After a lengthy delay vic AO "A," awaiting the lifting of air strikes and artillery in the area,  The companies deployed to accomplish their assigned mission. The commander's concept visualized Co A screening and blocking N of the 2/27th between XT 503347 and XT 535345, then conducting S&D operations N to the Saigon River. Co B would screen and block W of the 2/27th between XT 505347 and XT 510330, then conduct S&D operations to GL 49. Co C would establish squad size ambushes along SANTA FE from vic XT 513329 to vic XT 518312 and provide a southern blocking position for the 2/27th. Between 1020 and 1105 Co A elements found 2500 lbs of rice, 27 new bicycles, salt and 20 hand grenades. In the meantime, Co B located 1500 lbs of loose rice vic XT 513344. At 1257 Co A shot and killed one VC (BC) vic XT 527359 and captured one unidentified rifle and miscellaneous documents. At 1317 an APC from Co B hit an AT mine vic XT 510338 causing extensive damage to the vehicle. The units completed their missions and initiated movement to the Bn CP vic XT 484306. At 1743 the lead element of Co C enroute to the Bn CP engaged five VC vic XT 520308, resulting in the capture of one wounded VC and one M1 rifle. On-the-spot interrogation of the VC and documents found later revealed that the VC was a member of the 1st platoon, 320th Bn, and a member of a 20 man recon element dispatched to the Boi Loi Woods to determine why communications contact had been lost with the resident unit. The company arrived at the Bn area at 2045. During darkness three ambushes were employed. All returned at daylight with negative contact. Throughout the day the entire Bn conducted care, cleaning and maintenance of vehicles, weapons and equipment in preparation for the next phase of operation WAHIAWA.  At 1800 Bn FRAG ORDER #3 (oral) was issued. During the night, Co B established four ambushes, three of which were to remain in position until 221500MAY66. One ambush would shift its position at 0600 in order to cover the movement of the Bde CP, which was displacing. Co C established eight ambushes which were to remain in position until 221500MAY66. At 0709 Co A departed the area in order to secure the LZ vic XT 542296 for the 2/27th Inf. At 0715 the Bn CP and command elements moved to vic XT 554276. At 0820 the LZ was reached and Co A  initiated a sweep of the area. At 0903 the 3rd platoon of Co A was dispatched to the new Bde CP to provide security for the Bde CP complex. At 0930 the Co C ambush located vic XT 488296 wounded and captured one VC armed with two Chicom grenades. The VC died at 1020 before he could be evacuated. At 0945 the Co B ambush located vic XT 517308 engaged three VC headed in another direction who approached within 200 meters of the ambush site. One VC was killed (BC) and one Chicom carbine and documents were captured. At 1035 screening elements of Co A located 40 plastic canteens and 13 100 lb bags of rice, miscellaneous documents and personal letters, including a citation for bravery. At 1330 Co A (-) was released from its LZ security mission and proceeded to the new Bn CP area, arriving there at 1410. Co A's 3rd platoon completed its security mission; however, they remained at the new Bde CP to provide added security. At 1440 the same Co B ambush which had relocated after the previous incident engaged four VC, killing one (BC) and estimating three others killed. One Russian 7.62 SMG, three magazines of 7.62mm ammo and two grenades were captured. Co C initiated the extraction of their ambushes at 1500 and were completed by 1730. The companies coiled in the vic XT 555277 during darkness and established one ambush each in sector. At 230730MAY66 the Bn attacked in zone in a new area of operations IAW FRAG ORDER #4 (Incl 3, Operation Overlay). The commander's concept planned the Bn attacking in zone with Co B, Co C and Co A. Co B would seize and establish a blocking position on Obj IMPALA while Co C and Co A sweep rapidly along the outer edge of their respective sectors to seize Objectives WILDCAT and FAIRLANE. If no major force were encountered, Co A and Co C were to sweep back to PL SEDAN along HARDTOP, then conduct a detailed search of their zones to locate and destroy VC caches. Arty/mortar preparation from H hour to H+10 minutes on Obj IMPALA; air strikes on Obj WILDCAT at H+30 minutes and on Obj FAIRLANE at H+1.5 hours. Recon platoon would join the Bn for the operation and would move abreast of Co A sweeping the creek until it arrived vic XT 591306 where it would block and be the Bn reaction force. As Co C entered its zone at 0803, elements discovered one camouflaged bunker-type shack and a cache of 400 bags of rice vic XT 587308. At 0805 two Co A APC's hit mines vic XT 584304, injuring four personnel and causing extensive damage to both tracks. At 0815, as Co B moved to its objective, one APC hit an AT mine vic XT 582305, injuring four personnel and causing extensive damage to the track. At 0823 Co B elements discovered 350 100 lb bags of rice, 45 grenades and nine CBU bomblets vic XT 584308. Shortly thereafter, the unit uncovered a suspected minefield vic XT 578310. At vic XT 580309 the same unit discovered 18 55 gal drums of kerosene and 93 3x15 foot straw mats. At 1030 Co C elements located a landing site vic XT 595316. At 1043, Co B elements located a cache of documents consisting of ledgers and logs vic XT 580309. At 1036 one Co A APC hit a mine vic XT 607313, causing extensive damage. At 1104 Co A engaged several VC in a trench vic XT611315, killing one VC (BC) and estimating two other kills. At 1113 3,000 empty rice bags were found vic XT 580309. At 1216 Co C was moving with lead elements on PL WAGON. Co A, at 1232, reached PL WAGON vic XT 612315. At 1245 Co B elements uncovered rice and miscellaneous documents vic XT 584308. At 1259 Co C elements received small arms fire and a command detonated mine vic XT 607318 and XT 609323. The unit was in thick brush; however, it broke to an open field and maneuvered against the enemy while Arty/mortar fires were adjusted in the area. One WIA was sustained as the VC broke contact. At 1410 a Co A APC hit an AT mine vic XT 608318, resulting in extensive damage and three WIA. At 1440 one Recon Platoon APC hit an AT mine vic XT 563282 resulting in minor damage to the track. The Bn CP displaced at 1555 to vicinity XT 582305 to coil for the evening with Co B. Co A and Co C coiled together and established night defensive positions vic XT 608318 and eight ambushes were employed. Co B employed three ambushes in its area. At 0345 and 0445 the ambush located XT 611320 engaged two sampans resulting in two sampans destroyed and two VC kia (estimated). At 0700 Co A and Co C resumed the searches of their areas in order to complete the S&D mission in the AO (Co C also employed daylight ambushes along infiltration routes). Co B resumed the search of their area as other elements attempted to destroy the large rice caches which could not be evacuated. At 0800, while Recon Platoon was moving to the Bde CP, one APC hit an AT mine injuring two personnel slightly and causing damage to the track. At 1116 Co C found four tons of peanuts vic XT 599324. At 1155 elements from the same company captured one six hp outboard engine and sank one sampan vic XT 607324. At 1235 Co B elements searching the area vic XT 587308 found large amounts of rice, dried fish, and brown sugar type sorghum and continued to work that area. Co A at 1250 completed their search and proceeded  to the Bn CP. At 1345 Co A received a new mission and departed the area to conduct a search and destroy operation vic XT 578308 NW to XT 575314 in order to attempt link-up with the 1/27th Inf. By 1420 Co C had completed its search and reported that seven sampans had been destroyed (two by gunships called in earlier). At 1445 Co A, searching vic XT 579311, discovered a landing site and a cache of rice and empty rice sacks. By 1730 all units were coiled at the Bn CP vic XT 582305. During darkness nine ambushes were established by the Bn; however, no night contact was made. At light Co B ambushes remained in position and all others returned to their units. At 250700 the Bn initiated action to screen and secure flanks of the 1/27th Inf and the 2/27th Inf as those units moved overland to new areas. At 0700 Co A dispatched two platoons, one each, to XT 550300 and XT 550320 to assist in the above security mission by establishing several ambushes. One platoon was left in the Bn CP area to establish a stay-behind ambush. Co C at 0900 dispatched two platoons to vic XT 533305 in order to also provide ambushes as security. A third platoon completed the Bn S&D mission in the AO by screening E from XT 536308 to GL 59. At 1005 the Co B ambush located vic XT 578296 killed two VC (BC) and captured four Chicom grenades and miscellaneous documents. One friendly WIA resulted from fragments from an M79 round fired at the VC. At 1240 the C Co platoon completed its S&D operation and returned to the Bn CP. At 1305 the Bn CP group, Hvy Mort Plat and the command elements of  A and B Co's moved to a new CP location vic XT 555275. At 1420 the C Co ambush located vic XT 531305 engaged two VC, killing one (BC) and captured one Chicom rifle, two hand grenades and miscellaneous web gear. At 1430 Co B extracted its ambushes and made a sweep in an area vic XT 573300. Aerial observation indicated a suspected VC base camp. The company sweep proved that the area checked had not been used in quite a while; however, several documents were found. Three additional ambushes were established during darkness in the vic of the Bn CP. At 1900 the Co A ambush located vic XT 545309 engaged two VC. Both VC were shot and wounded; however, one VC escaped. At 2040 the ambush located vic XT 536318 received approximately three rounds of possible 120mm mortar fire resulting in one WIA. At 0703 the Co A ambush located vic XT 553313 killed two VC (BC) and captured a Chicom assault rifle, seven ammo magazines and two Chicom grenades. At 0810, as Co C initiated extraction of the ambushes, one EM was killed when a boobytrap he was disarming exploded. By 0910 Co A and Co B ambushes had returned to the Bn area. At 1150 the Recon Platoon replaced the Co C ambush located vic XT 509304 which returned to the Bn area. At 1440 the Recon Platoon spotted four VC in the open vic XT 515314. Arty fire was adjusted effectively on the target. Four VC kills were estimated. Co B returned from its sweep at 1540. The Recon Platoon returned to the Bn CP at 1625. At 1800 Co B was dispatched to vic XT 499249 to secure the 2/27th CP. They arrived at 1920 and performed their mission under the OPCON of the 2/27th Inf. During darkness six ambushes were employed. At 270730 Co B returned to the 1/5th's control with an attached Engr platoon and initiated clearance and security of the road between XT 508259 and Trang Bang. At 0741 Co C initiated its mission to secure the road from XT 508259 to XT 496236 which B/1/5th had cleared. At 0659 Co A departed on its mission to secure the road from vic XT 532285 to vic XT 508259 which the 1/27th had cleared. At 0830 Co B turned over the cleared sector to Co C for security as planned. The Recon Platoon secured and escorted damaged salvage vehicles at 0920 to waiting lowboys at Trang Bang. At 1107 one WIA was sustained from SA fire as the Bn CP vic XT 555272 initiated movement to base camp. At 1515 elements of Bde and supporting Arty had passed through Co A's area. Co A then secured one AVLB from vic XT 518266 and moved through Co C. As Co A cleared, Co C secured one AVLB at XT 508259 and initiated movement to base camp. As all elements passed through Co B's area, Co B initiated movement. All elements closed into base by 1855 hours, bringing to a close the Bn's participation in Operation WAHIAWA.
              </div>
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Supporting Forces</span>:
              <ul>
                <li>Artillery:
                  <ul>
                    <li>1st Bn, 8th Arty (-) GS</li>
                    <li>B/3/13th Arty, GSR, 1/8th Arty (-)</li>
                  </ul>
                </li>
              </ul>
              <div>
                Artillery support in the form of preparatory, preplanned, "on call" and H&I fires was found to be accurate, timely, and met all requirements of the tactical situation. The 1/8th Arty LNO monitored all requests which led to proper and fitting control. Preparations were controlled by the Bn LNO from the air.
              </div>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Results Casualties</span>:
              <div>
                <ol type="a">
                  <li>Personnel Summary:
                    <ol>
                      <li>(1) Friendly: KIA - 2.  WIA - 43 (25 returned to duty).</li>
                      <li>(2) Enemy : KIA - 29 (13 BC; 16 est). Captured: 6 (VCC) 2 (VCS).</li>
                    </ol>
                  </li>
                  <li>
                    Equipment and Material Losses.
                    <ol>
                      <li>
                        Friendly - 11 APC's were damaged by AT mines.
                      </li>
                      <li>
                        Enemy:
                        <ol type="a">
                          <li>
                            Ammunition: 2 Claymore mines; 107 hand grenades; 13 rifle grenades; 6 AP mines; 7 AT mines; 20 CBU bomblets; 1 105mm boobytrap; 1  1/2 lb block of TNT;  4 grenade-type boobytraps; 60 rds of 9mm ammo; 140 rds of 7.62mm (in 10 magazines); 8 rds of .30 cal ammo; 3 rds of carbine ammo.
                          </li>
                          <li>
                            Weapons: 1 SMG 9mm; 1 SMG 7.62mm, Russian "Sudayev"; 8 carbines (Chicom); 2 M1 rifles; 1 rifle, unk.
                          </li>
                          <li>
                            Food Supplies: 167 1/2 tons rice; 5 1/2 tons peanuts;  1 1/2 tons dried fish; 50 5 gal cans dried fish; 300 lbs salt; 2 boxes red pepper;  25 tons brown sugar type sorghum.
                          </li>
                          <li>
                            Medical Supplies:  2 boxes medical supplies and instruments; 15 gals quinine; 3 gals strychnine; 1 IV (blood) stand.
                          </li>
                          <li>
                            Documents: 3 ledger books; 2 billfolds;  personal letters; miscellaneous documents.
                          </li>
                          <li>
                            Construction Material: 525 sheets tin.
                          </li>
                          <li>
                            Installations: 3 buildings; 1 mess hall; 14 sleeping quarters; 1 command bunker; 3 tunnels; 10 sampans.
                          </li>
                          <li>
                            Miscellaneous: 2430 gals kerosene; 8 sewing machines; 130 bolts cloth; 100 lbs clothes; 1 gasoline engine (type unk); 1 small piston-type engine; 1 6 hp outboard motor; 1 PRC-10 radio; 1 TA312 telephone; 41 canteens; 2 typewriters; 8 U. S. water cans; 28 bicycles; 1 bale comm wire; 10 gal can buttons; 2 gals vaseline; 1 package rubber bands; 5 gals test tubes; 98 straw mats; 5600 empty rice bags; 1 pistol belt; 4 tons paraffin.
                          </li>
                        </ol>
                      </li>
                    </ol>
                  </li>
                </ol>
              </div>
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Administrative Matters</span>:
              <ol type="a">
                <li>
                  Personnel. The battalion started the operation with a strength of 777 personnel and terminated the problem with a strength of 732 personnel. Two KIA and 43 WIA were sustained (25 WIA returned to duty).
                </li>
                <li>
                  Supplies. Resupply was accomplished by helicopter. During the first part of the operation, the Bn operated a helipad from the forward Bde area, then from base camp. The only major problems during the aerial resupply were as follows: On the evening of 18 May all helicopters were diverted from our resupply mission prior to complete resupply of water, ammo and "A" rations for one company. Later in the evening we were given one sortie which delivered the ammo and water. However, we could not complete delivery on "A" rations; therefore, approximately 200 meals of "A" rations for Co B were lost. On 19 May 66 we did not receive helicopters needed for resupply of repair parts and extraction of items until 1300 hours. This delay of helicopters resulted in the CP group being unable to move until late in the afternoon. Also, on 24 May the unit received only one helicopter in the morning, therefore causing delay of the extraction of equipment, i.e. fuel drums, until 1200 hours. During the operation, the unit utilized 172 sorties which carried 221,255 pounds of equipment into the area. Items airlifted were as follows: Class I: 164,000 pounds; Class II: 2,000 pounds; Class III: 146,000 pounds; Class V: 15,200 pounds and water: 45,000 pounds.
                </li>
                <li>
                  Maintenance. The unit started the operation with two carriers, M113, short due to supply shortages and one in for maintenance. During the operation, 11 carriers, M113, hit mines. Of the 11, five were repaired sufficiently in the field to continue operations; one was unable to be recovered and was destroyed in place and the other five evacuated to base camp for major repairs.
                </li>
                <li>
                  Transportation. The Bn consumed 10,800 gals of MOGAS and 100 gals diesel.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Special Equipment and Techniques</span>: None
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">Commander's Analysis</span>: Nothing of particular significance.
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">Conclusions and Lessons Learned</span>:
              <ol type="a">
                <li>
                  Initial contact with the VC on Sunday, 15 May indicated perhaps the VC were in town on pass without their weapons. Future indications of this should be looked for with exploitation as appropriate.
                </li>
                <li>
                  In areas which VC have dominated for some time they seem to move far more during the daylight hours than during darkness. Furthermore, within their position areas they employ little or no security.
                </li>
                <li>
                  The VC communications system is very poor. VC forces walked into the same ambush site twice within a few hours on at least two occasions.
                </li>
                <li>
                  Extraction of large caches can be a major problem which must be planned for prior to the start of any operation.
                </li>
                <li>
                  There are continuous indications that the Saigon River is being used extensively by the VC in transporting supplies.
                </li>
              </ol>
              <div>
                FOR THE COMMANDER:<br>
                JAMES G. ANDRESS<br>
                Capt, Inf
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">HHC</div>
              <div class="casUnitList">
                <div>SCHOU, Dirck</div><div>1st Lt 1542</div><div>WIA</div>
                <div>BUTLER, David A.</div><div>SP5 E5	11F20</div><div>WIA</div>
                <div>BAILEY, Herbert R.</div><div>SP4 E4	91B20</div><div>WIA</div>
                <div>MOREAU, Ryan R.</div><div>PSG E7	11H40</div><div>WIA</div>
                <div>MC BRYDE, Jerry O.</div><div>SP5 E5 91B20</div><div>WIA</div>
                <div>DE RICO, Paul</div><div>SP5 E5	91B30</div><div>WIA</div>
                <div>SCOTT, John A.</div><div>SP4 E4	91A10</div><div>WIA</div>
                <div>GRAHEK, David J.</div><div>PFC E3 91B20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co A</div>
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
                <div>THOMAS, George H.</div><div>SGT E5	11B40</div><div>WIA</div>
                <div>BROWN, Girnie H.</div><div>PFC E3	11B20</div><div>WIA</div>
                <div>ELLIOTT, Thomas</div><div>SGT E5 11C40</div><div>WIA</div>
                <div>FEW, Alphonso</div><div>SP4 E4	11C20</div><div>WIA</div>
                <div>HARRIS, John M.</div><div>SP4 E4 	11B20</div><div>WIA</div>
                <div>MILLS, Theodore W.</div><div>SGT E5	11B40</div><div>WIA</div>
                <div>GRIFFITH, Von D.</div><div>SP4 E4	11B40</div><div>WIA</div>
                <div>MARTHALLER, Kenneth</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>RODRIQUEZ, Rodolfo</div><div>SSG E6	11B40</div><div>WIA</div>
                <div>HUTTING, Roy D.</div><div>SGT E5	11B20</div><div>WIA</div>
                <div>LOVE, John D.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>WILLIAMS, Curtice J</div><div>PFC E3 	11C10</div><div>WIA</div>
                <div>LOPEZ, Arthus</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>GOREE, Monty L.</div><div>SP4 E4 	11B20</div><div>WIA</div>
                <div>POWERS, Henery O.</div><div>SP4 E4 	11B20</div><div>WIA</div>
                <div>ARNOLD, Jerry V</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>ANDERS, William F.</div><div>SGT E5 	11C40</div><div>WIA</div>
                <div>LARSON, Dewaine L.</div><div>PFC E3	11C20</div><div>WIA</div>
                <div>PAYTON, Loydell</div><div>PFC E3	11C10</div><div>WIA</div>
                <!-- <div>LEBRON-LOPEZ, Ismael</div> -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Ismael" && $one_casualty->last_name == "Lebron-Lopez")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div>SP4 E4	11B20</div><div>KIA</div>
              </div>
              <div class="casUnitName">Co B</div>
              <div class="casUnitList">
                <div>CROWELL, Perry</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>HOUSLEY, Leonard D.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>HENSLEY, Larry F.</div><div>PFC E3	63B20</div><div>WIA</div>
                <div>BENNETT, Robert</div><div>SGT E5 	11B40</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co C</div>
              <div class="casUnitList">
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Bobby" && $one_casualty->last_name == "Barefield")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div>PFC E3	11B10</div><div>KIA</div>
                <!-- <div>BAREFIELD, Bobby J.</div><div>PFC E3	11B10</div><div>KIA</div> -->
                <div>TALLEY, Kenneth</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>ABBOTT, Gerald R.</div><div>2nd Lt 1542</div><div>WIA</div>
                <div>STOECKLEY, Richard</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>MOON, William</div><div>SGT E5	11B40</div><div>WIA</div>
                <div>SCOTT, Dennis</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>SCRANTLIN, James N.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>McCARTNEY, Samuel Jr.</div><div>SFC E6	11B40</div><div>WIA</div>
                <div>STEPHENS, Forrest E</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>JOHNSON, John D.</div><div>SP4 E4 11C20</div><div>WIA</div>
                <div>ORR, Ronald E.</div><div>PFC E3 11B20</div><div>WIA</div>
                <div>WILLIAMS, Arthur</div><div>SGT E5 11B40</div><div>WIA</div>
                <div>CHASE, James E.</div><div>SP4 E4	11B20</div><div>WIA</div>
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
              HEADQUARTERS<br>
              1ST BATTALION (MECH) 5TH INFANTRY<br>
              APO San Francisco 96225<br>
            </div>
            <div class="aarTopic">
              AVTLSBA-C 13 July 1966
            </div>
            <div class="aarTopic">
              SUBJECT: Combat Operations After-Action Report (RCS/J3-32)
            </div>
            <div class="aarTopic">
              THRU: Commanding Officer<br>
              2d Brigade, 25th Infantry Division<br>
              ATTN: AVTLSB-C<br>
              APO U. S. Forces 96225<br>
            </div>
            <div class="aarTopic">
              THRU: Commanding General<br>
              25th Infantry Division<br>
              ATTN: AVTLAG-OP<br>
              APO U. S. Forces 96225<br>
            </div>
            <div class="aarTopic">
              TO:  Commander<br>
              U.S. Military Assistance Command, Viet Nam<br>
              ATTN: J343<br>
              APO U. S. Forces 96243<br>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">NAME OF OPERATION</span>:  "COCO PALMS."
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">DATES OF OPERATION</span>:  250630JUN66 - 011935JUL66.
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">GENERAL</span>: The 1st Battalion (Mechanized), 5th Infantry conducted this separate battalion operation in the area of the Boi Loi and Ho Bo Woods, Hau Nghia and Binh Duong Provinces (Incl 1, TAOR Overlay).
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">COMMAND HEADQUARTERS</span>: 1st Battalion (Mechanized), 5th Infantry, 2d Brigade, 25th Infantry Division.
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">REPORTING OFFICER</span>: Lt Col Thomas U. Greer, Commanding Officer, 1st Bn (Mech) 5th Inf.
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">TASK ORGANIZATION</span>:
              <ul>
                <li>
                  1st Bn (Mech) 5th Inf (Lt Col T.U. Greer, Commanding)
                </li>
                <li>
                  Recon Plat (Lt J. E. McQuinn)
                </li>
                <li>
                  Scty Plat
                </li>
                <li>
                  Hvy Mort Plat (Lt L. Phillips)
                </li>
                <li>
                  Mech Flame Sec, 65th Engr Bn
                </li>
                <li>
                  Co A (Lt G. F. Smith, Commanding)
                  <ul>
                    <li>Engr Sqd (-), 65th Engr Bn</li>
                  </ul>
                </li>
                <li>
                  Co B (Capt E. B. Vickery, Commanding)
                  <ul>
                    <li>Demo Tm, 65th Engr Bn</li>
                  </ul>
                </li>
                <li>
                  Co C (Capt W. A. Blair, Commanding)
                  <ul>
                    <li>Demo Tm, 65th Engr Bn</li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">SUPPORTING FORCES</span>:
              <ol type="a">
                <li>
                  <span class="topicTitle">Artillery</span>:
                  <ol>
                    <li>
                      Composition:
                      <ol type="a">
                        <li>
                          First five days of operation:
                          <ul>
                            <li>B/3/13th Arty (155 How SP): DS 1/5th Mech</li>
                            <li>1plat D/3/13th Arty: Atch B/3/13th Arty.</li>
                          </ul>
                        </li>
                        <li>
                          Sixth to eight days of operation:
                          <ul>
                            <li>C/7/11th Arty (105 How towed): DS 1/5th Mech</li>
                            <li>B/3/13th Arty: Atch C/7/11th Arty</li>
                            <li>1 plat D/3/13th Arty: Atch C/7/11th Arty.</li>
                          </ul>
                        </li>
                      </ol>
                    </li>
                    <li>
                      Comments:
                      <ol type="a">
                        <li>
                          Phase I - The artillery support was not considered adequate due to a lack of accuracy during a critical mission.
                        </li>
                        <li>
                          Phase II - The artillery fired a 10 minute preparation on Objectives C and A. A 155mm howitzer battery and one platoon 8" located at Cu Chi provided the preparation on Objective C while a 155mm howitzer battery and one platoon 8" located at Trung Lap fired the preparation on Objective A. 4.2" mortars were used to prepare blocking position Z and Objective B. The preparation was accurate and timely. On the second and third days of Phase II a roving preparation, controlled by the Arty LO from the air, was used on objective areas (GS XT 6528 and vicinity XT 657268). The artillery fire was extremely accurate and timely. All "will-adjust" missions during this phase were accurate and timely.
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
                <li>
                  <span class="topicTitle">Air Support</span>
                  <ol>
                    <li>
                      Composition: 7th AF provided close air support.
                    </li>
                    <li>
                      Comments: The Bde AF Lo traveled in the C&C ship and called for all "Immediate" air strikes. The required response time varied, but in all cases it was considered satisfactory. Eleven preplanned close air support missions were utilized in Phases I and II. A preplanned B52 air strike requested by the 25th Inf Div to precede the attack on 26 June was not flown. Due to the lack of information from the USAF concerning the approval or disapproval of the strike,  H-hour, ect., the attack was unnecessarily delayed for 55 minutes.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">INTELLIGENCE</span>:
              <ol type="a">
                <li>
                  Intelligence prior to the operation: Two main force battalions of the 165A Regt had been reported in the operations area. The Trang Bang Local Force Company was also reported in the area of operations vic XT 4932. USAF FAC reported light to moderate small arms fire was constantly received during the week of 17-23 June from along the streams (XT 610270 - XT 625306, XT 495318 - XT 520345) and the wooded areas on the northeast edge of the Ho Bo Woods (XT 663260 - XT 635307). Results of operations by this battalion into the Boi Loi - Ho Bo Woods on 29 Mar - 5 Apr (CIRCLE PINES), 16-21 Apr (KAHALA) and 15-27 May (WAHIAWA) revealed that the area contained several supply bases and the base area of the C320th Mobile Bn, Tay Ninh Province. Documents and PW's captured in the area indicated the Tay Ninh Provincial Committee was located in the Boi Loi Woods with subordinate sections as follows: Tay Ninh Military Intelligence sub-sections (XT 500316),  Tay Ninh Provincial Armament sub-section (XT 511339),  and Workers Proselyting Section, Tay Ninh Provincial Committee (XT 527338). The numerous caches, base camps and documents substantiated that the Boi Loi was a major COSVN rear service supply area. The Ho Bo has long been the base area for the Saigon-Gia Dinh Special Region Committee.
                </li>
                <li>
                  Enemy situation during the operation: Initial contact was made by Company B on 25 June when they wounded and captured a VCC who claimed to be the XO and political officer (but was probably a platoon leader or higher rank) of the 1st Co, 320th Bn, vic XT 506314. Co C determined through interrogation of civilians in the area, that a VC force of 10 to 15 personnel moved every day south along the trail at coordinates XT 482299, moving just after dark. This same force usually passed in the opposite direction each day about 1000 hours. After assaulting a bunker on 26 June, Co C wounded and captured a VCC vic XT 640304. Documents in his possession indicated that he was a member of the security element of the Saigon - Gia Dinh Special region Committee, which seems to be located in the extensive tunnel system in the area. Numerous documents found in the area indicated that the Political Staff, Military Affairs Committee, Saigon - Gia Dinh Special Region and agencies subordinate to COSVN were located in the area. Of particular interest were the large number of receipts for ammunition and weapons found in a tunnel which indicated the presence of an ammo and weapons supply point in the area. Documents captured in vic XT 634305 indicated the B103 Medical Section, Rear Service Staff, Saigon - Gia Dinh Special Region Committee was in the area. The documents included medical books, requests for medicine, medical expense records and related documents. Numerous letters of introduction to VC, dated 13 June 1966, from various medical sections stating that they would attend a medical class numbered B46 were also captured. One of the documents, a request to join the Communist Party, was addressed to the Security Section, Saigon - Gia Dinh Special Region. Additional documents also indicated the presence of the Propaganda and Training Section (many propaganda signs were in the area, some written in English and some in Vietnamese) and the 2d Co, 243rd Anti-aircraft Bn, U80 Arty Regt in the Ho Bo Woods. No enemy force of significant size was encountered during the operation. Enemy strength was estimated at 15-20 VC operating in two and three-man cells. Of significance was the fact that in several cases the VC fought from within the tunnels - a change to his tactics thus far encountered by this battalion. The edges of the Ho Bo are laced with trenches (Incl 2). Extensive defensive fortifications consisting of bunkers, trenches with overhead cover, tunnels and underground rooms were encountered during the operation. Some examples of the more significant ones are as follows:
                  <ol>
                    <li>
                      Area I (Incl 3):  Fortifications in this area consisted of 29 large bunkers (20' X 20'), which had been constructed within the 60 days prior to this operation. (This unit had been through the area on April 21, during Operation KAHALA. At that time the bunkers were not there.) Unlike other bunkers found in the area, these were partially above ground with all-around 6"x12" firing ports approximately three feet above ground level (Incl 4).  The bunkers were built in pairs connected by a tunnel. One trap door in the tunnel was the main entrance into each bunker pair and an escape tunnel led out of each bunker (Incl 5). All of the bunkers were concealed from aerial observation by rubber trees and dense woods. Excavations for five more bunkers had been completed but construction had not started. The bunkers within the complex were mutually supporting and on one of the main avenues of approach into the Ho Bo (Incl 6). Each bunker was capable of sleeping 40 VC. Once the bunkers were completed, the complex would have been able to house an estimated 1,360 VC.
                    </li>
                    <li>
                      Area II (Incl 3):  Fortifications in this area consisted of a series of 5'x6' mutually supporting bunkers interconnected by a trench and tunnel system (Incl 7). An unusual and well protected bunker was located in this area vic XT 621291 (Incl 8). In addition to its use as a fighting position, the bunker also served as the control center for several clusters of command detonated mines and bombs. The trench with overhead cover provided supplementary positions and a covered escape route. Strong points were located at both ends of this area at coordinates XT 629302 and XT 614276. The area across the creek from this area to the west contained many old houses, most of which were at least partially destroyed. However, these all contained protective shelters and small tunnels which showed signs of recent use by the VC.
                    </li>
                    <li>
                      Area III (Incl 3): Fortifications in the area consisted of a complex system of bunkers and underground rooms connected by tunnels and trenches. The complexes were well concealed in heavily wooded areas overlooking open clearings (Incl 9, 10 and 11). In all cases except one, the tunnels began in a bunker. Large underground rooms within the complex were capable of accommodating six to eight persons. Most of the bunkers were constructed with large rubber tree logs (6" - 10" dia) for the supports and overhead beams. Two to three feet of dirt covered each bunker, many of which were concrete reinforced, thus providing excellent protection from artillery fires. Some of the bunkers were eight feet deep with firing steps (Incl 12) connected to sleeping quarters and cooking rooms (Incl 13). New construction was observed in GS XT 6528.
                    </li>
                  </ol>
                </li>
                <li>
                  Terrain and weather. The terrain is generally flat with open areas south of the Boi Loi and south, central and north of the Ho Bo. Open areas to the south and north consisted of damp and wet rice paddies, some of which were cultivated. The central area of the Ho Bo consists of rubber trees and dense woods as depicted on the map. However, secondary growth throughout the area varies from  light to thick with the center being the lightest area. The dense woods and areas of thick undergrowth restricted movement of track vehicles. Foot movement through these areas was also slow and tedious. B52 bomb craters presented a definite obstacle to track vehicles due to the depth and density of the craters. Thick vegetation provided excellent concealment for the VC and limited friendly observation. The stream west of the Ho Bo was impassible to track vehicles north of XT 612280. Can Ca Bay Stream was negotiable from XT 580278 to XT 588255. Rice paddies adjacent to this portion of of the stream were damp to wet but trafficable to tracks. Weather conditions during the operation presented little or no problems. Low ceilings prevented some helicopter operations but had no effect on ground operations. Average weather conditions during the operation were mostly cloudy skies with .59 inches of precipitation per day;  temperatures ranged from a high of 91 degrees to a low of 71 degrees; winds were from the SW at 5-8 knots.
                </li>
                <li>
                  There were no Civil Affairs/Psy Ops activities conducted during the period.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">MISSION</span>: 1st Bn (Mech), 5th Inf moves 250630JUN66 to conduct independent search and destroy operations in the area of operations to locate and destroy VC units and base camps.
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">CONCEPT OF OPERATIONS</span>: 1/5th Mech moved in two echelons from base camp commencing 250630JUN66 and conducted deceptive operations along the southern edge of the Boi Loi Woods complex to cover search and destroy operations in the Ho Bo Woods on 26 June. Bn(-) moved at 0630 hours with Co A, Co B and Recon Platoon to saturate areas 1, 2, and 3, respectively, with ambushes. Co C departed base camp at 0800 hours along Axis GREEN in an attempt to flush the VC into the ambushes. Co C then established ambushes on Obj 4. To develop the cover plan, extensive aerial recons, artillery and mortar registrations, H&I fires, and limited air strikes were placed on Obj X on 25 June (Incl 14, Operation Overlay). On 260725JUN66 the Bn attacked to seize Obj A, B, and C. Co A and C moved along Axes RED and Blue, through Obj A and C, respectively. Co B moved along Axis WHITE to establish blocking position Z and, on order, seized Obj B. All companies then conducted detailed searches in their objective areas. During this phase of the operation a mech flame track was attached to Co A and Co B. Recon Platoon screened the battalion's west flank initially and was placed under Co B's OPCON during the detailed search (Incl 15, Opn Overlay).
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">EXECUTION</span>: The operation was conceived on 15 June 1966 and issued as OPORD 24-66 (Operation COCO PALMS) 171200JUN66.
              <ul>
                <li>
                  Dday (25 June 1966): The battalion moved as planned without incident until armed helicopters reported seeing 25-30 VC in a trench vic XT 539311. Five were estimated to have been killed after effective air and mortar fires were placed on the target. After completion of daylight deception activities, the battalion coiled into a night perimeter.
                  <ul>
                    <li>
                      Company A: The company departed base camp at 0640 hours and closed into Obj 1 at 0950 hours. No contact was made until 1545 hours when a VC was killed (BC) by an ambush vic XT 544310. A thorough search of the objective area produced clothing, ammunition and a large AT mine. The company closed into the battalion perimeter vic XT 530288 at 1830 hours and established two night ambushes; no contact was made.
                    </li>
                    <li>
                      Company B: The company departed base camp at 0630 hours and closed into Obj 2 at 0800 hours without contact. Light contact was made throughout the day resulting in two VC killed (BC) and one captured. At 1900 hours the company closed into the battalion perimeter  vic XT 530288 and established two ambushes; no contact was made.
                    </li>
                    <li>
                      Company C: The company departed base camp at 0830 hours and secured Obj 5 by 1028 hours. No contact was made and the company closed into the battalion perimeter at 1830 hours. Two ambushes were employed that night but none made contact.
                    </li>
                    <li>
                      Recon Platoon: The platoon departed base camp at 0650 hours and established blocking position 3 at 0910 hours. At 0940 hours two VC suspects were apprehended when they attempted to depart the area. The suspects were evacuated along with three other suspects apprehended by the command group vic XT 534285.
                    </li>
                  </ul>
                </li>
                <li>
                  D+1 (26 June 1966): The attack was scheduled for 0630 hours but was delayed by higher headquarters until 0725 hours. This delay was caused by a proposed air strike which was not conducted (see Para 7b(2) ). All companies secured and searched their objective areas and closed into a battalion perimeter for the night defense. Nine ambushes were employed during darkness but no contact was made.
                  <ul>
                    <li>
                      Company A: The company reached its objective area at 1030 hours making light contact enroute. Intense automatic weapon fire was received from a bunker vic XT 62252956 and the ensuing fire fight resulted in two VC killed and the discovery of an extensive bunker-tunnel complex (Incl 7). The assault on the bunker produced 12 rifles,  munitions and a mount for an SG-43 HMG. Several boobytraps, command detonated mines and explosives, to include four 25 lb frag bombs, were destroyed. The bunkers and tunnels were destroyed by demolitions and shape charges. Four VC were estimated to have been killed in the bunker-tunnel complex.
                    </li>
                    <li>
                      Company B: By 1000 hours the company had established its blocking position destroying two bunkers and capturing one VC enroute. Detailed search of the area produced several boxes of clothing, munitions, miscellaneous documents and equipment and a tunnel complex vic XT 616294. The met light resistance and destroyed 12 bunkers, 5,000 lbs of boobytrapped rice, and several grenades and CBU boobytraps.
                    </li>
                    <li>
                      Company C: The company's attack encountered boobytraps, AT mines and moderate small arms and rifle grenade fire from trenches and bunkers. By 1423 hours a large command bunker with an extensive tunnel complex was encountered vic XT 640301. By 1800 hours the company had searched out the objective area destroying two AT mines, twelve boobytraps, several bunker-tunnel complexes and captured one VCC with rifle, two Russian AT mines, claymore weapons and boobytraps. Three VC were estimated to have been killed in the bunker-tunnel complexes.
                    </li>
                    <li>
                      Recon Platoon: The platoon screened the battalion's west flank but made no enemy contact. While performing its screening mission, the platoon located and destroyed 2,000 lbs of boobytrapped rice, boobytrapped CBU bomblets, two bunkers and captured 1500 lbs of peanuts, one rifle and several documents.
                    </li>
                  </ul>
                </li>
                <li>
                  D+2 (27 June 1966): Co B, 2/27th Inf (Capt J.R. Paschall, commanding) was attached effective 270800JUN66 and the Battalion Task Force employed Co A vic XT 623297 (ALPHA),  Co B vic XT 655285 (QUEBEC), Co C vic XT 645302 (NOVEMBER), Co B, 2/27th Inf vic XT 635305 (CHARLIE), and the Recon Platoon vic XT 655273 (TANGO) on search and destroy operations. An LZ was secured vic XT 636296 for the Co B, 2/27th Inf helicopter landing, and all companies conducted S&D operations in their respective areas following artillery, mortar and air preparations. Throughout the day units met light to moderate resistance and closed into the battalion perimeter vic XT 630288 by dusk. Ten ambushes were employed during darkness without contact.
                  <ul>
                    <li>
                      Company A: The company departed the base at 0730 hours and encountered AT mines, rifle grenades and small arms fire from two bunkers on the edge of their objective area. The company overran the bunkers and estimated killing two VC. Two rifles and a 7.92mm ZB26 LMG were captured. A detailed search of the bunkers led into an extensive tunnel network which produced many documents, clothing, munitions and equipment. The bunker, tunnel and all munitions were destroyed.
                    </li>
                    <li>
                      Company B: The company conducted a detailed search of the area against light small arms fire, boobytraps, and AT mines. By the end of the day they had destroyed by demolitions 16 bunkers, two of which were concrete reinforced, a concrete reinforced room capable of seating 30 persons, 26 tunnels, 200-300 feet each, 12 CBU boobytraps and four AT mines.
                    </li>
                    <li>
                      Company C: The company arrived on the assigned objective area and met stiff resistance from several bunkers. The VC employed rifle grenades, automatic weapons, command detonated AT mines and claymore-type weapons from four different bunkers. Two VC kills were estimated in the ensuing bunker assaults which revealed a concrete reinforced bunker-tunnel complex. The company searched and destroyed these complexes and captured several grenades, claymore weapons, CBU  bomblets, boobytraps, clothing fresh food and large mines wired for command detonation (155mm, 175mm, 8" and 250 lb bombs), 225 rounds of 7.92 ammo, a Chicom carbine, three sets of field equipment and miscellaneous documents which filled two sand bags.
                    </li>
                    <li>
                      Co B, 2/27th Inf: The company landed on the LZ at 0830 hours and moved into their area following an artillery preparation. They discovered and destroyed 11 tunnels, 79 yards of white cloth, fresh food and a bicycle. They also captured seven medical jackets, a mask and cap and approximately four pounds of miscellaneous documents.
                    </li>
                    <li>
                      Recon Platoon: The platoon secured the woodline south of Obj CHARLIE and assisted the passage of Co B, 2/27th Inf. By 1106 hours the platoon occupied blocking position TANGO to prevent enemy departure from the AO. The platoon made no contact but found and destroyed a 30 lb claymore type weapon.
                    </li>
                  </ul>
                </li>
                <li>
                  D+3 (28 June 1966): The Tf continued S&D operations in the AO and employed Co A vic XT 616285 (GOLF), Co B vic XT 655285 (QUEBEC), Co C vic XT 655278 (UNIFORM), Co B, 2/27th Inf vic XT 652285 (OSCAR), and Recon Platoon along Axis SALLY (XT 638296 - XT 642305 - XT 633308 - XT 625304).  During the search the VC put up stiff resistance from within the tunnels and in some cases prevented complete searching prior to destruction of the tunnels. Attempts to flush the VC out by use of tear gas were ineffective. The VC continued to fire from within the tunnels. Charges were placed as close as possible to the VC and detonated, collapsing the tunnels. Each company employed stay-behind ambushes before returning to the battalion perimeter. Only the Co B ambush at XT 651281 made contact, killing one VC (BC).
                  <ul>
                    <li>
                      Company A: In searching their obj area the company encountered several elaborate bunker-tunnel complexes and by the end of the day had destroyed eight of these positions, three machinegun positions, a motar position, clothing, several boobytraps and dry batteries. Sleeping quarters in two of the large bunkers could comfortably accommodate four persons each. Rifle grenades were used by the VC in this area.
                    </li>
                    <li>
                      Company B: A thorough search of the area was continued throughout the day which resulted in the destruction of seven bunkers, an extensive tunnel complex, two AT mines and grenade boobytraps. The VC used rifle grenades, small arms and, from within the tunnel complex, an automatic weapon. Smoke was used to locate all entrances and the tunnel was destroyed.
                    </li>
                    <li>
                      Company C: Several tunnels were found in the company objective area. A ravine, 10-15 feet deep, 300 feet long and 12 feet wide was located vic XT 654280. Into the sides of the ravine were tunnels to provide shelter and storage areas. One of the tunnels located in the area consisted of several levels and eight passageways. An underground classroom with a seating capacity of twenty persons was also located and destroyed. By the end of the day the company destroyed two bunker-tunnel complexes, several boobytraps and munitions. New ammo pouches, web equipment, one carbine,  a medical kit and miscellaneous clothing and documents were captured.
                    </li>
                    <li>
                      Co B, 2/27th Inf: The company objective area contained no trace of use by VC. Two boobytraps were located and rifle grenade fire was received from the south of their objective area.
                    </li>
                    <li>
                      Recon Platoon: The platoon conducted its sweep along Axis SALLY and by 0905 hours encountered a complex bunker-tunnel system vic XT 642303. Small arms fire was received from within the tunnels. The platoon spent the rest of the day searching and destroying the tunnels and bunkers and by the end of the day had destroyed five bunker-tunnel complexes, two well concealed tunnels, seven hand grenade boobytraps, and five CBU boobytraps. Ten thousand lbs of rice and four bags of cement were captured. Efforts to flush the VC out of the tunnels failed and the tunnels were destroyed.
                    </li>
                  </ul>
                </li>
                <li>
                  D+4 (29 June 1966: The battalion task force continued S&D operations with light to moderate contact. The TF employed Co A on Obj HOTEL vic XT 655288; Co B returned to Obj QUEBEC; Co C on Obj ECHO vic XT 660260; Co B, 2/27th Inf on Obj FOXTROT vic XT 655274; Recon Platoon continued its sweep of Axis SALLY. All companies returned to the battalion perimeter at dusk and employed seven ambushes during the night, but no contact was made.
                  <ul>
                    <li>
                      Company A: The company conducted their search under constant harassing small arms and rifle grenade fire. The area was heavily boobytrapped and the bunker-tunnel complexes encountered were well constructed and reinforced. By the end of the day six tunnels, two bunker-tunnel complexes, munitions and several command detonated mines were destroyed. six hundred lbs of boobytrapped rice was also found and destroyed.
                    </li>
                    <li>
                      Company B: With the exception of one command detonated mine, the company made no contact during the day. After thoroughly searching the area,  22 bunkers (several of which were reinforced with steel or concrete), 17 tunnels (two of which were three level), suspended 81mm boobytraps, 31 grenades and 60mm boobytraps, and many other munitions were destroyed. One rifle and several rounds of ammunition (20mm, 7.62mm and 40mm) were captured.
                    </li>
                    <li>
                      Company C: The company met no resistance during their search but encountered several boobytraps. A large three-level tunnel complex was found vic XT 638266 which led to several bunkers. One of these bunkers was reinforced with steel beams and a steel top. This entire complex along with three sampans and a boat were destroyed.
                    </li>
                    <li>
                      Co B, 2/27th Inf: The company met no resistance in their search which produced an extensive bunker-tunnel complex. The tunnel led to 12 different exits/entrances and a thorough search of the area produced clothing, documents, ammunition, medical supplies, 3,000 lbs of rice, a VC gas mask, a Chinese or Russian gas mask, 55 gals of kerosene and eight boobytraps.
                    </li>
                    <li>
                      Recon Platoon: The platoon completed its sweep of Axis SALLY and in the process received two rifle grenade rounds and hit one AT mine. A large bunker-tunnel complex, reinforced with steel beams, was discovered. Inside the bunker were several benches, stools, a blackboard, rifle grenades, and 500 lbs of rice. With the exception of the rice, the entire complex was destroyed. By the end of the day, a total of 3,400 lbs of rice and 100 lbs of salt were captured.
                    </li>
                  </ul>
                </li>
                <li>
                  D+5 (30 June 1966): The battalion TF continued S&D operations to complete the detailed search of the area. The TF was employed with Co A returning to Obj HOTEL, Co B with the Recon Plat attached  returning to Obj QUEBEC, Co C to vic XT 595265 (KILO) and Co B, 2/27th Inf to Area LIMA, vic XT 625295 in order to saturate the area with daylight ambushes. Several AT and AP mines and boobytraps were encountered during the day while destroying extensive bunker-tunnel complexes and large reinforced bunkers in the AO. Co B, 2/27th Inf was released from battalion control at 1604 hours. All companies returned to the battalion base and employed seven ambushes but no contact was made.
                  <ul>
                    <li>
                      Company A: The company completed their search of the revine vic XT 653280 and also found several fortified bunkers in the area. Nine bunkers, four tunnels, six buildings and several boobytraps were destroyed. Five hundred lbs of rice was captured by the end of the day. The company then conducted a reconnaissance in force vic XT 650286; results were negative.
                    </li>
                    <li>
                      Company B: The company completed the search of their objective area encountering heavily boobytrapped areas and AT mines. Two tunnels and twelve bunker complexes were destroyed along with numerous boobytraps. Several 81mm, 105mm and 155mm rounds, all of which were wired for command detonation, were found and destroyed. Two carbines were also captured.
                    </li>
                    <li>
                      Company C: The company's search in the new objective area was hampered by several AT and AP mines and boobytraps. Twenty-one bunkers, varying in size from 15'x15' to small concrete reinforced bunkers were destroyed. The company also captured 900 lbs of rice, clothing and miscellaneous documents.
                    </li>
                    <li>
                      Co B, 2/27th Inf: The company saturated their area with ambushes but no contact was made. Extracation by helicopter commenced at 1430 hours and by 1604 hours the last element was airborne and released from battalion control.
                    </li>
                  </ul>
                </li>
                <li>
                  D+6  (1 July 1966): The battalion terminated the operation and commenced its return to base camp at 0700 hours. Co A was required to secure a portion of an LZ for the 3d Bn, 49th Inf Regt (ARVN) helicopter extraction vic XT 638273. They were also required to establish a blocking position vic XT 625268 and destroy some large bunkers vic XT 597264. Co B secured the remainder of the LZ, Co C was given the mission to secure the road from Trung Lap (XT 5819) to Hwy 1 (XT 5616) and protect the engineer clearing party along the road. The Recon Platoon escorted the CP group, Hvy Mort Plat and all disabled vehicles to vic Trung Lap and then escorted the artillery group from Trung Lap to the base camp. Due to reports of ground activity vic XT 590270, Co C was diverted to investigate and at 1300 hours Co A(-), 2/14th Inf  was airlifted into the AO to assist in securing the road from Trung Lap to Hwy 1. By 1935 all elements closed into the base camp, terminating Operation COCO PALMS.
                  <ul>
                    <li>
                      Company A: The company established its blocking position and secured its portion of the LZ by 0803 hours. Eleven large, well constructed bunkers (Incl4) were destroyed vic XT 596263. No contact was made during the day, except for the detonation of one AT mine vic XT 580229 which moderately damaged an APC.
                    </li>
                    <li>
                      Company B: The company secured their portion of the LZ by 0800 opposed by light and sporadic small arms fire. Upon completion of the helicopter extraction, the unit conducted a sweep through a suspected VC occupied area vic XT 604264; no contact was made and the company returned to base camp.
                    </li>
                    <li>
                      Company C: While enroute to secure the road from Trung Lap to Hwy 1, armed gunships reported receiving heavy ground fire from vic XT 590270. The company was diverted in an attempt to close with and destroy the enemy. No VC were found in the area and signs of VC occupancy were not evident. The company then resumed its original mission and returned to base camp at 1935 hours.
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">RESULTS</span>:
              <ol type="a">
                <li>
                  Friendly:
                  <ol>
                    <li>
                      634 personnel started the operation and 586 completed. The latter figure includes 39 WIA who remained with their units (Incl 16, casualty list).
                    </li>
                    <li>
                      Fourteen APC's, M113, were damaged by mines. Six were repaired in the field and continued the operation.
                    </li>
                  </ol>
                </li>
                <li>
                  Enemy:
                  <ol>
                    <li>
                      25 VC killed (6 BC), 3 VCC  and 6 VCS.
                    </li>
                    <li>
                      Material, equipment and facilities:
                      <ol type="a">
                        <li>
                          Captured:   2 M1 rifles; 13 Chicom carbines; 2 U.S. carbines; 1 U.S. M16 rifle; 1 German Mauser; 1 7.92mm LMG, 2B26 (BRND); 1 Springfield rifle (1903); 1 M72 LAW;  4 rifles, type unknown; 1 machinegun mount on wheeled carrier for 7.62mm HMG SG-43 (Goryunov); 1 carbine, type unknown; 10 combat packs; 1 cartridge belt; 2 pistol belts; 6 medical jackets; 1 medical cap; i medical mask; 1 medical kit; 31 ammo pouches; 4 bags (100 lb)    cement; 20,000 lbs rice; 1 gas mask, Russian or Chinese type; numerous documents; miscellaneous clothing; medical manuals.
                        </li>
                        <li>
                          Destroyed:   21 rifle grenades; 3 hand grenades (U.S.); 6 hand grenades (VC);  35 hand grenades (Chicom); 20 boobytraps (hand grenades, 81mm and 60mm type); 21 boobytraps (CBU bomb type); 3 boobytraps (2.75" rocket); 7 81mm boobytraps (suspended in trees); 1 boobytrapped antiaircraft rocket; 1 U.S. carbine (boobytrapped in a punji pit); 34 CBU bomblets; 35 AT mines; 1 AP mine; 3 81mm rds (rigged for cmd det); 4 105mm rds (rigged for cmd det); 7  155mm rds (rigged for cmd det); 2  8" rds (rigged for cmd det); 3  250 lb bombs (rigged for cmd det); 3  175mm rds (rigged for cmd det); 11 claymore weapons; 155 bunkers; 78 tunnels; 4 25 lb frag bombs (U.S.);  1 VC frag bomb; 1040 rds 7.62mm linked ammo; 40 rds Chicom 7.62 ammo; 300 rds 5.56mm ammo (U.S.); 50 rds 7.62mm (short); 725 rds 7.92mm ammo; 80 rds cal .30 ammo; 1 BAR magazine; 30 rds cal .32 ammo; 1 VC gas mask; 1 boat; 1 wagon; 7,600 lbs rice (boobytrapped); 11 M79 rds; 60 buildings; 6 sampans; 70 gals kerosene; 1 sugar cane processing machine; Miscellaneous clothing.
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">ADMINISTRATIVE MATTERS</span>:
              <ol type="a">
                <li>
                  Supplies: All resupply was accomplished by UH1D helicopters flying from base camp to the forward CP area. During the operation, 131 sorties delivered the following supplies:
                  <ol>
                    <li>Class I:  44,500 pounds.</li>
                    <li>Class II:  11,000 pounds.</li>
                    <li>Class III:  38,000 pounds.</li>
                    <li>Class IV:  3,600 pounds.</li>
                    <li>Class V:   24,300 pounds.</li>
                    <li>Miscellaneous: 34,280 pounds (includes 6,832 gallons of water).</li>
                    <li>Personnel: 14,000 pounds.</li>
                  </ol>
                  The battalion expended the following ammunition and demolitions during the operation:
                  <ul>
                    <li>Ctg 7.62mm ball  1,680 rds</li>
                    <li>Ctg 7.62mm 4+1   30,400 rds</li>
                    <li>Ctg 5.56mm ball           25,560 rds</li>
                    <li>Ctg 5.56mm tracer            1, 140 rds</li>
                    <li>Ctg cal .50 4+1           22,200 rds</li>
                    <li>Ctg 40mm, HE            1,296  rds</li>
                    <li>Ctg 81mm, HE       208  rds</li>
                    <li>Ctg 81mm, WP        6  rds</li>
                    <li>Ctg 4.2", HE   635 rds</li>
                    <li>Ctg 4.2", WP     37 rds</li>
                    <li>Grenade, frag   875 ea</li>
                    <li>Rocket, M66       7 ea</li>
                    <li>Mine, AP, M18A1    24 ea</li>
                    <li>Grenade, smoke, yellow   32 ea</li>
                    <li>Grenade, smoke, violet   96 ea</li>
                    <li>Grenade, smoke, HC               48 ea</li>
                    <li>Grenade, hand, CS  106 ea</li>
                    <li>Flare, trip     32 ea</li>
                    <li>Block, demo, C4, 2 1/2 lb 590 lbs</li>
                    <li>Block, demo, TNT, 1 lb        1,650 lbs</li>
                    <li>Cratering charge, 40 lb    43 ea</li>
                    <li>Cord, detonating           4,000 feet</li>
                    <li>Fuze, blasting, time           1,250 feet</li>
                    <li>Ignitor, fuze    170 ea</li>
                    <li>Blasting cap, non-electric  510 ea</li>
                  </ul>
                </li>
                <li>
                  Maintenance: The Bn started the operation short six (6) carriers, personnel, F.T., M113. The Recon Platoon was short three (3), the Medical Plat one (1), and Co A and Co C one (1) each. During the operation thirteen (13) carriers were damaged by AT mines and one (1) carrier was damaged by a large AP mine. Six (6) of  these vehicles were repaired in the field and continued the operation. The other eight were evacuated to base camp at the termination of the operation. Of the eight (8) that were evacuated to base camp, seven (7) had to be towed; one returned under its own power. Six (6) of the above eight (8) carriers have, since their return, been declared not economically repairable. Twenty (20) carriers became inoperable for mechanical failures during the operation; however, twelve (12) of these were repaired in the field and continued the operation. The remaining eight (8) were evacuated to base camp at the termination of the operation. Seven (7) of the eight (8) returned under their own power; however, they were short-tracked. The major mechanical failure experienced was the separation of the idler arm from the hull of the carrier. There were seven (7) of these failures and all seven (7) carriers had to be evacuated. Two of the carriers with this failure had been rebuilt eight (8) months ago and since that time they have traveled more than 2500 miles. The other five (5) tracks with this failure were over five (5) years old and have traveled over 5000 miles. Because this Bn was short five (5) Light Recovery Vehicles, it became a major problem to evacuate the eight vehicles that required towing. In order for this Bn to accomplish the task of extracting the eight downed vehicles, ten (10) additional combat vehicles were diverted to tow the downed tracks. Two (2) tracks were so badly damaged they required four other vehicles to tow them. If the five (5) Light Recovery Vehicles had been on hand, they could have accomplished the same task as the ten carriers, with less wear and tear.
                </li>
                <li>
                  Treatment of Casualties, Evacuation and Hospitalization:  The Bn Fwd Aid Station was staffed by one doctor and four medics. During the operation 156 patients were seen and treated, of which 73 were due to sickness or disease, 52 from wounds received in hostile action, and 31 non-battle injuries (sprains, cuts, bruises, ect.). Thirty-four of the 156 patients were evacuated by resupply helicopters. During the operation, 18 Dust Off helicopters were requested which evacuated a total of 43 casualties. These 43 patients were not processed through the Bn Aid Station, but evacuated to the 25th Med Bn.
                </li>
                <li>
                  Transportation: The Bn consumed a total of 8,837 gallons of MOGAS during the operation.
                </li>
                <li>
                  Communications:
                  <ol>
                    <li>
                      (1) The primary means of communication during Opn COCO PALMS was the FM radio. Wire nets were used at all times in the CP complex and to the companies whenever possible. During the periods of darkness the Bn command net maintained radio listening silence and used wire as the primary means of communications. The Bn maintained FM radio and RATT contact with Bde. There was no wire communication between the Bn and Bde. UHF air-ground communications were also available and used by the AF LO for air support missions.
                    </li>
                    <li>
                      (2) This Bn is equipped with the VRC-12 family of radios which is an excellent piece of equipment. It is believed that the intense heat (115 degrees) inside the carrier M113 has an adverse effect on the radio transmitters (RT524 and RT246). During the operation a total of eleven RT's either failed to transmit or receive or the fan (cooling system) ran continuously. This situation was partially corrected by periodically turning the sets off  and permitting them to cool. This procedure was especially true at night when less radio traffic was required and nets could be monitored with the auxiliary receiver (R442) without sacrificing communications efficiency.
                    </li>
                  </ol>
                </li>
                <li>
                  Medical Evaluation:  Access to the Bn Aid Station during the operation was good. Overall medical care of minor complaints and casualties was good. However, it was not advisable to evacuate all injuries through the aid station because of the terrain, time factors involved and the seriousness of the wounds. Of the 83 injuries that were treated at the aid station, 54 were returned to duty. This fact alone demonstrates the value and necessity of a forward aid station .
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              14. <span class="topicTitle">SPECIAL EQUIPMENT AND TECHNIQUES</span>:
              <ol type="a">
                <li>
                  Mechanized flame throwers. The flame throwers proved to be very effective during this operation due to the numerous bunkers encountered. The one major drawback was the wheel-mounted service unit which could not accompany the battalion over cross-country routes. Therefore, the flame throwers were of little value once their pressure was expended. Extensive use could be made possible by mounting the service unit to a full track carrier to provide the necessary cross-country mobility.
                </li>
                <li>
                  Tunnel destruction techniques. A technique has yet to be found which will adequately destroy a complex tunnel system. A special technique employing acetylene gas and detonator proved ineffective for many reasons, one of which was the depth of the tunnels encountered. This technique is stated to be very effective in depths of less than six feet; however, most of the tunnels in the area were well below six feet. Another technique applied which was quite successful was the use of several cratering charges placed at key levels and tunnel "T's," connected in parallel with detonating cord (Incl 10). When detonated, the parallel connection results in simultaneous detonation of all charges and the resulting blast completely caves in the tunnel. This method, however, would require a large amount of explosives for the extensive tunnel systems which were prevalent in the AO.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              15. <span class="topicTitle">COMMANDER ANALYSIS</span>:
              <ol type="a">
                <li>
                  The several contacts made the first day of the operation along the southern edge of the Boi Loi Woods indicated continued extensive use of this area by the VC. Their continuous and rather careless movement to and from the southern edge of these woods makes the area ideally suited for saturation ambushing.
                </li>
                <li>
                  It was until one hour after the attack on 26 June was to begin that the battalion found out that the B52 strike would not be made. Then our opening plan was hampered by not knowing whether the strike would be made or the time the strike was to be made.
                </li>
                <li>
                  After the first day's operation in the Ho Bo Woods, it became apparent that the extent of the bunker/tunnel systems was such as to require either an extended stay to accomplish the mission or additional troops. Hence, when an additional rifle company was offered, it was readily accepted.
                </li>
                <li>
                  The evidence of new construction in the Ho Bo Woods plus the extensive fortifications encountered indicate the VC plan to continue extensive use of this area. In spite of the 78 tunnels which were destroyed, it is felt that only a small percentage of the total tunnels in the area were located and destroyed. This opinion is based on the ease with which the VC eluded our continuous search and on the fact that very few tunnels with concealed entrances were located.
                </li>
                <li>
                  The construction of most of the bunkers found and destroyed was such that they could withstand a direct artillery hit. Thus, as long as they remained inside their bunkers, the VC were immune to artillery fire and immune to all but direct hits by bombs.
                </li>
                <li>
                  It is believed that the extensive bunker system found in grid squares XT 5925 and XT 5926 provided a haven, safe from artillery fire and air strikes, for a large force moving through the area. Since this system was only recently constructed, it might be assumed it was constructed to support the monsoon offensive in this area.
                </li>
                <li>
                  Neither the ARVN nor the U.S. advisors with the ARVN understood the use of the No Fire Line. The ARVN battalion actually moved troops across the NFL before making any formal request for a change.
                </li>
                <li>
                  There has been some discussion of late among medical corps personnel that battalion surgeons should not be in the field. The Battalion Aid Station and surgeon moved to the field with the CP group. The surgeon treated 83 patients for injuries (both battle and non-battle) and returned 54 to duty. He also treated 73 men for sickness or disease and returned 68 to duty. The value of the presence of the battalion surgeon in the field is obvious.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              16. <span class="topicTitle">RECOMMENDATIONS</span>:
              <ol type="a">
                <li>
                  Future operations employing saturation ambushes along the southern edge of the Boi Loi Woods should be conducted.
                </li>
                <li>
                  Periodic operations should be conducted into the Ho Bo Woods  area to prevent rebuilding of the extensive bunker complex and eventually to convince the VC of the futility of using this as a major base of operations.
                </li>
                <li>
                  Extensive use should be made of H&I fires in grid squares XT 5925 and XT 5926 to deny the VC the opportunity to rebuild the bunkers destroyed in that area.
                </li>
                <li>
                  Information on B52 strikes must be made available at the earliest possible time.
                </li>
                <li>
                  Careful coordination on the use of supporting fires, to include a thorough explanation of the No Fire Line, should be made with ARVN forces operating in the vicinity of U.S. forces.
                </li>
              </ol>
            </div>
            <div>
              FOR THE COMMANDER:<br>
              JAMES G. ANDRESS<br>
              Capt, Adjutant
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
              HEADQUARTERS<br>
              1ST BATTALION (MECH) 5TH INFANTRY<br>
              APO San Francisco 96225<br>
            </div>
            <div class="aarTopic">
              AVTLSBA-C 12 JUNE 1966
            </div>
            <div class="aarTopic">
              SUBJECT: Combat Operations After-Action Report (RCS:  MACV  J3-32)
            </div>
            <div class="aarTopic">
              TO:  Commanding Officer<br>
              2d Brigade, 25th Infantry Division<br>
              ATTN:  AVTLBDB-T<br>
              APO U. S. Forces 96225<br>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">Operation</span>: MAKIKI, search and destroy
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">Dates of Operation</span>: 3-8 June 1966
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">Location</span>: Xom Mia (XT 4416), Xom Bao Trau (XT 4711), Tan My (XT 5110), Duc Lap (XT 5560), Bao Tri subsector, Duc Hoa sector, Hau Nghia Province, Viet Nam
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">Control and Command Headquarters</span>: 1st Bn (Mech), 5th Infantry
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">Reporting Officer</span>: Lt. Col T. U. Greer
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">Task Organization</span>:
              <ul>
                <li>
                  1st Bn (Mech) 5th Inf: Lt Col T. U. Greer, commanding.
                </li>
                <li>
                  Co A: Capt J. A. Renner, commanding.
                </li>
                <li>
                  Recon Platoon: Lt J. McQuinn.
                </li>
                <li>
                  Co B: Capt E. B. Vickery, commanding.
                </li>
                <li>
                  Co C: Capt W. A. Blair, commanding.
                </li>
                <li>
                  Hvy Mort Plat: Lt. L. W. Phillips, Jr.
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">Supporting Forces</span>: One direct support Arty Bn supported the four battalion brigade. This proved to be adequate since none of the battalions were engaged at the same time. Tactical air support was available on request. Armed helicopters were also available on request. The artillery was planned to be used to seal off the escape routes until the units could physically occupy their blocking positions. During the first day's initial contact the artillery fired within 150-200 meters of one advancing unit, trapping a group of VC between its fire and the advancing Recon Platoon. The artillery fire was fast and accurate.
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">Intelligence</span>:
              <ol type="a">
                <li>
                  Intelligence prior to Operation. Prior to Operation MAKIKI it was known that the C120 Local Force Company was operating in the general area and that the 267th Bn of the Dong Thap II Regiment had been reported at XT 4215 (26 May 1966). The 269th Bn of that same regiment was reported to be in a position giving it the capability of  reinforcing VC units in the AO. The outpost at Duc Hue (XT 4307) had been hit by a reported reinforced VC Bn on 27 May 1966, resulting in the loss of weapons and ammunition to include 60mm and 81mm mortars and ammunition. The 1st Bn (Mech), 5th Inf had some prior knowledge of the area as a result of Operation HONOLULU conducted in the same vicinity during the period 14-19 March 1966. It was estimated that all Main Force units would have exfiltrated the AO and that all critical supplies would have been evacuated; enemy contact would be on the first and perhaps the fourth and fifth days; Caches would consist of rice, cloth, and possibly some medical supplies; the area would be heavily mined and boobytrapped.
                </li>
                <li>
                  Enemy Situation During the Operation. Enemy contact was made as soon as the Bn entered the AO when the Recon Platoon observed several people running into the high grass near position #9. As they entered the area several persons tried to run away. The platoon killed two VC as they ran across the wet paddy and ran over two more. A detailed search of the area revealed many VC hiding underwater of whom 12 were killed (BC) and 19 captured. There are five significant points to this action:
                  <ol>
                    <li>
                      The APC's were able to move through paddies covered by more than one foot of water without bogging down.
                    </li>
                    <li>
                      The rapid movement into the AO prevented the VC remaining force from escaping to the north.
                    </li>
                    <li>
                      A thorough and detailed search was required to dislodge the VC from their hiding places underwater.
                    </li>
                    <li>
                      M26 fragmentation grenades had no significant effect on the VC underwater. Concussion grenades, if available, would probably prove more useful in that endeavor.
                    </li>
                    <li>
                      The VC, when found, had no hesitation in pointing out the locations of other VC hiding in the same vicinity. Other enemy contact in the Bn sector brought the VC count for the first day of the operation to 13 KIA (BC); 1 KIA (est); 22VCC; 3 VCS. When compared to the cumulative count on the final day of the operation (18 VC KIA (BC); 4 KIA (est); 27 VCC; 11 VCS), these figures confirm the fact that in search and destroy operations the majority of enemy casualties occur the first day. Enemy contact throughout the remainder of the operation was light,  resulting in an additional five VC KIA (BC) and 5 VCC, mostly due to night ambush action. On 5 June 1966 a VCC who had been captured on 3 June was returned to the Bn to act as a guide to two VC meeting houses, a VC education center and trench complex. The VC meeting houses were located, but one was unoccupied and its use could not be confirmed. The other, in the village of Loc Thanh (XT 438168), was occupied by a woman, her daughter and a grandson. The woman admitted under interrogation that the house had been used as a meeting place by the VC from time to time. The VC also led the patrol to a trench complex (XT 446166),  including one bunker and an AA/AW position which was subsequently destroyed. These VC fortifications conformed to typical construction patterns as seen in most VC fortifications. The above, while not particularly significant discoveries, did serve to confirm the source's reliability. On 6 June the 2d Bde S2 sent a civilian to the Bn. He was to show the location of a rice cache. The cache was found, leading to the evacuation of 3400 lbs of rice. Also, on 6 June a friendly civilian in the area, upon questioning, provided information which eventually led the Bn to an area in which two VC stay-behind observers were known to operate. A patrol sent into the area arrived near EENT and the two VC escaped into the brush; however, interrogation of civilians in the area indicated that these were the two stay-behind observers in question. This source's reliability is also confirmed. On 7 June, Co C while conducting search operations in their sector, discovered a weapons and ammunition cache at coordinates XT 518109. The cache was on a lean-to stand positioned above the water, yet nestled in the canal saw grass. There was a six foot deep pool of water in front of the lean-to into which some items had apparently slipped accidentally. It was impossible to accurately determine how long the supplies had been in the cache. However, it is notable that the size of the lean-to support for the cache was of adequate size to contain twice as much material as was found. There were various markings such as twisted grass and sticks placed in the water but no pattern or relationship to the cache was discernable other than that the cache was surrounded by bits of grass twisted and tied to bushes, probably indicating no more than the general location of the cache. There are a few notable observations concerning the cache other than its significance in terms of critical material captured. The actual area of the cache and the approaches to it were not mined or boobytrapped. This is contrary to normal patterns. Most large caches found by the Bobcats have been well boobytraped. The cache was not defended. There was one "guard" who fled at our approach and did not appear to have had a weapon. This also is contrary to established patterns and to published intelligence estimates of probable enemy courses of action. Usually there is at least light enemy contact in the vicinity of the cache. There was no serious attempt at harassment in the bivouac area which was within 200 meters of the cache. Harassment consisted of one sniper who fired about five rounds from two different positions during the night. There was little harassment and no mining of the routes out of the area as the Bn moved away the next afternoon.
                      <ol>
                        <li>
                          Facts:
                          <ol type="a">
                            <li>
                              There was no enemy activity in the vicinity of the cache site.
                            </li>
                            <li>
                              The cache site was capable of sustaining a cache at least twice the size of the one found.
                            </li>
                            <li>
                              The cache site is near a reported VC supply route.
                            </li>
                            <li>
                              The cache site is in an area the nature of which supports land or sampan transportation of supplies.
                            </li>
                          </ol>
                        </li>
                        <li>
                          Assumptions:
                          <ol type="a">
                            <li>
                              That the VC did not lightly regard the importance of arms and ammunition, especially "Sudayev" SMG's, of which only a few have been captured in III CTZ.
                            </li>
                            <li>
                              The VC would not prepare a position designed for concealing supplies and make it any larger than absolutely necessary, since to do so would increase chances of detection.
                            </li>
                            <li>
                              That supplies would be stored or transferred on or near a supply route to provide for minimum transloading and transportation.
                            </li>
                          </ol>
                        </li>
                        <li>
                          Possible Explanations in Order of Probability:
                          <ol type="a">
                            <li>
                              The cache was actually a transfer point on a VC supply route. The Bn moved into the area between transfers and the VC were unable to evacuate the supplies and unable to mine or adequately defend the cache.
                            </li>
                            <li>
                              The cache was initially much larger than when found. The VC, presented with the U.S. Task Force operating in the area, attempted to extract as much of this critical material as possible, deciding to use all available resources in the extraction effort to the neglect of any defensive or harassment effort. They were simply not able to extract all the material by the time Co C arrived in the area. (NOTE: 2d Bde S2 reported four SLAR contacts along the general supply route on the night of 5 June 1966.)
                            </li>
                          </ol>
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
                <li>
                  Terrain and Weather.
                  <ol>
                    <li>
                      Climatic and Weather Conditions.  The June Climatic summary was not borne out by the weather conditions encountered during the operation. Heavy rains lasting about 45 minutes were expected each day during the late afternoon. There was, however, only one instance in which the weather bore out the estimate, and that rain lasted only 20 minutes. Rather than the deleterious effect expected, the weather actually aided operations, drying out soil wet from previous rain and improving trafficability. The phase of the moon so lighted the area that enemy night movement was made extremely hazardous.
                    </li>
                    <li>
                      Relief and Drainage Systems. Most problem areas can be found by analysis of the map. Water in the rice paddies presented little hindrance to movement provided the vehicles spread out and did not track each other. Admittedly the water had been in the paddies for only a short time and trafficability will probably decrease as the land remains underwater for longer periods.
                    </li>
                    <li>
                      Vegetation.  The map accurately depicts the vegetation in the AO, none of which is an obstacle to mechanized operations. However, some of the bamboo hedgerows around houses are stout enough to cause APC's to have to search for breaks. On two occasions snakes fell from the bamboo into the open cargo hatch of APC's, inflicting snake bite injuries which required medical evacuation of the victims.
                    </li>
                    <li>
                      Obstacles to Mechanized Operations.
                      <ol type="a">
                        <li>
                          Natural. Some areas are under water. Other than those areas actually shown as swamp on the map, none was an obstacle to mechanized movement, provided the basic rules involving movement under these conditions were followed. There is one canal or ditch from XT 476129 to XT 465125 to XT 458127 which is an obstacle to mechanized movement. However, the Bn was easily able to avoid this obstacle by moving around it to the west, and there were several breaks in the ditch.
                        </li>
                        <li>
                          Man-made. There were no man made obstacles to mechanized movement encountered. The dikes had the effect of slowing movement but not prohibiting it. No "minefields" were encountered. There were isolated AT mine incidents, none of which could be considered a coordinated minefields effort.
                        </li>
                      </ol>
                    </li>
                    <li>
                      Conclusions Pertaining to Terrain and Weather. As  the Southwest Monsoon becomes established and the paddies have been inundated for longer periods, trafficability for APC's may be reduced. Mechanized forces will continue to have the capability to operate in many portions of the AO but will be limited to areas removed from the Oriental River and from those sections shown as swamp.
                    </li>
                  </ol>
                </li>
                <li>
                  Fortifications. No significant fortifications were discovered during Operation MAKIKI. The fortification found at XT 446166 (see 4 b above) was a typical design and construction. There were drainage or irrigation ditches along most of the bamboo hedgerows, however, which could be used as defensive trenches. These were 2 - 2 1/2 feet deep, 2 - 3 feet wide, and extended the length of the hedgerow. Many houses had foxholes in their yards and all had protective bunkers on the inside. There were a few instances of defensive bunkers (no firing ports) in the hedgerows among the bamboo roots. These were all near houses and no attempt had been made to hide them.
                </li>
                <li>
                  CA/Psy Ops:  See Para 11.
                </li>
                <li>
                  Conclusions.
                  <ol>
                    <li>
                      The AO is acceptable for mechanized operations. Increasing rains will affect trafficability but will not prohibit use of mechanized forces.
                    </li>
                    <li>
                      Arms cache (see 4 b (3) above).
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">Mission</span>: 1/5th Mech attacks H-hour, 3 June 66 to seal escape routes in zone and occupy positions 1, 2, 3, 4, 8, 9, 10, 11, 12, and 13. Conducts search and destroy operations in assigned area of operations on order. Links up with air-landed battalions on order.
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">Concept of Operation</span>: The commanders concept visualized the battalion moving from base camp with track vehicles only so as to arrive in the area of operations by H-hour. The companies will move as rapidly as possible to occupy blocking positions in zone with Co C on the north (1, 2, and 3), Co B in the center (4, 8 and 9), and Co A on the south (10, 11, 12 and 13), to deny escape from AO. On order, companies move rapidly through respective areas, leaving a minimum of one squad at each blocking position, to attempt to locate and destroy sizable enemy forces or to drive enemy forces toward adjacent battalions. Once it has been determined that no sizable force exists, then, on order, companies were to conduct detailed search and destroy operations in zone. Prior to the hours of darkness, company bases would be established in zone with maximum use of ambushes (Incl 1, Operation Overlay #1).
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">Execution</span>: The battalion OPORD 21-66 was issued at 011530Jun66. H-hour was set at 1000 hours, then delayed until 1100 hours. The battalion commenced movement at 030700 hours and by 0925 hours lead elements were located vic XT 470127. At 1030 hours, Co A reported that the Recon Platoon had made contact with several VC vic XT 466155. The platoon initially shot and killed two VC and ran over two more as they drove through the water filled paddies. A detailed and systematic search of the area resulted in 12 VC killed (BC), one VC killed (est), and 19 VC captured. Some of the VC were submerged in holes, underwater, and breathing through reeds. By 1100 hours all blocking positions in the AO were occupied. At 1112 hours  Co B shot and killed a VC (BC) attempting to escape through the rice paddies vic XT 453165. Upon recovering the VC body, another VC was captured nearby, submerged in the flooded paddy. At 1200 hours Co C captured one VC armed with hand grenades vic XT 433178. Under interrogation he stated that his mission was to locate and report our positions. During the afternoon, all companies conducted sweeps through their respective areas but made no contact. Each company established a base and a total of 11 ambushes were employed in the Bn AO. Co C's ambush located vic XT 431181 shot and captured a VC at 1851 hours. However, due to a head wound, he died a few hours later. At 1950 hours the same ambush again made contact killing two VC (BC). Co B's ambush enroute to XT 464160 had a meeting engagement at 2005 hours. The VC immediately broke contact when fired upon, leaving behind one Thompson SMG. One VC kill was estimated. At 2400 the same ambush patrol killed one VC (BC)  who walked into the kill zone. Co A(-) departed the AO at 040730Jun to assist the 4/23d Inf by sweeping through their battalion AO. Co C(-) also departed the AO at 0730 to assist the 1/27th Inf by conducting a similar type sweep through the battalion's AO. Co B commenced the detailed search of the company AO and captured one VC vic XT 467157 at 1145 hours. Co A was returned to Bn control at 1226 hours and commenced the detailed search of the company AO. At 1315 hours one VC was captured vic XT 482135 by Co A. One of Co B's tracks received light damage from an AT mine vic XT 445160. Civilians in the area stated that VC were laying mines there 4-5 days ago. A search of the area produced two AT mines and 35 boobytraps. Co C returned to battalion control at 1500 hours and commenced the detailed search of the company AO. While sweeping the 1/27th Inf AO the company suffered three WIA and two damaged tracks from AT mines. The Bn S5 and surgeon conducted MEDCAP for 46 patients in Ap An Dinh (XT 4514) during the day. Villagers were very cooperative and friendly. Each company returned to its base prior to dark and a total of 12 ambushes were established in the Bn AO. At 2015 hours Co B observed five VC vic XT 448168 and adjusted motar fire on target. Two VC kills were estimated.At 050400JUN a special ambush was sent out to vic XT 449183 by Co C. One of Co A's tracks was damaged by an AT mine vic XT 471132 at 0648 but no casualties were sustained. Co A departed at 0730 hours to conduct search and destroy operations in VC controlled areas #1 (XT 454120), #2 (XT 471118), #3 (XT 489119), #4 (XT 493107) and #5 (XT 483097). Company B departed the AO at 0929 hours to assist the 2/27th Inf by sweeping through that battalion's AO. Recon Platoon suffered one WIA from a boobytrap vic XT 453127 at 1022 hours. Co A completed the search of all five objectives by 1203 hours and returned to the company AO. One track hit a mine enroute vic XT 465125, suffering 11 WIA, 10 of which were treated and returned to duty almost immediately. Co C suffered two WIA from a boobytrap vic XT 434155 at 1445 hours. Co B was released at 1553 hours and returned to the company AO. The Bn S5 and surgeon conducted MEDCAP for 52 patients in the village of Loc Giang (XT 430155). During the hours of darkness, 13 ambushes were employed in the battalion AO but no contact was made. On 6 June each company conducted maintenance, training and searches in zone. Sixteen boobytraps were destroyed vic XT 446180 and vic XT 473147 and 3100 pounds of rice from vic XT 465156 were evacuated to Bde. MEDCAP was conducted for 36 villagers at Ap An Dinh (XT 4514). The Bn commander received a Bde Frag Order extending the AO of the 1/5th Mech at 1835 hours (Incl #2, Opn Overlay #2). The Bn commander's concept was to move the three companies from their present bases commencing at 070630JUN66 and conduct a rapid SW-NE sweep through their respective sectors and establish blocking positions A (XT 524111), B (XT 594114), C (XT 539119), D (XT 548121), E (XT 572078) and F (XT 573089). Then each company would conduct a detailed search of objectives in sector moving NE-SW. Recon Platoon was designated to occupy five stay-behind ambushes at XT 431180, XT 434179, XT 440174, XT 464156 and XT 471147. Seventeen ambushes were established during darkness but none made contact. At 070630JUN Co C started its move to the new AO followed by Co B at 0650 hours and Co A at 0700 hours. Co A's lead vehicle hit a mine at XT 498092 resulting in four WIA, two of which were treated and remained for duty. By 1021 hours Co B established blocking positions E and F and commenced the detailed search of the sector. Co A established blocking positions C and D by 1128 hours, making light enemy contact enroute and capturing several suspects. Co C established blocking positions A and B by 1217 hours and commenced the detailed search. Co C received several rifle grenades enroute to their blocking positions and suffered two WIA vic XT 545085. During the detailed search, Co B destroyed five boobytraps vic XT 565081 and killed one VC at 1328 hours vic XT 542118. Recon Platoon's stay-behind ambush made no contact and at 1400 hours assembled vic XT 466155 and extracted 3400 lbs of captured rice discovered by one of the stay-behind ambushes. At 1538 hours Co C discovered an arms cache vic XT 518110 consisting of 116 weapons and several tons of munitions and explosives. By 1750 hours Co C effected link-up and coordination with the 49th ARVN Regt on the battalion's right (east) flank. In view of the size of the cache, Co A and Co C were both ordered to establish their night perimeters around the cache. Recon Platoon was attached to Co B in an established base at XT 560081. Ten ambushes were established during the hours of darkness, but no contact was made. Three 60mm motar rounds landed outside Co B's perimeter and several harassing small arms rounds were fired at Co A but none was effective. By 080730JUN each company continued its search. Co C was to continue the search of the cache area, Co A assumed the mission of searching the remainder of Co C's sector and Co B continued to search the assigned sector. At 1145 Co C shot and captured a VC vic XT 501117. By 1410 hours all units completed the search of their sectors and commenced movement to effect link-up with the 49th ARVN Regt. Link-up was effected by 1450 hours and the battalion was ordered to return to base camp at 1545 hours. By 1642 hours all elements closed into base camp.
            </div>
            <div>
              12. <span class="topicTitle">Results</span>:
              <ol type="a">
                <li>
                  Friendly.
                  <ol>
                    <li>
                      Personnel: 702 personnel started the operation and 692 completed, 14 of whom were WIA who were treated and remained for duty.
                      <ol type="a">
                        <li>
                          KIA: 0.
                        </li>
                        <li>
                          WIA: 24 (list attached - Incl #3) (14 returned to duty the day they were wounded).
                        </li>
                        <li>
                          MIA: 0.
                        </li>
                      </ol>
                    </li>
                    <li>
                      Equipment: 6 APC, M113, were damaged by AT mines. Three APC were repaired in the field and continued the operation.
                    </li>
                  </ol>
                </li>
                <li>
                  Enemy.
                  <ol>
                    <li>
                      Personnel.
                      <ol type="a">
                        <li>
                          VC killed: 22 (18 BC; 4 est).
                        </li>
                        <li>
                          VCC: 27.
                        </li>
                        <li>
                          VCS: 6.
                        </li>
                      </ol>
                    </li>
                    <li>
                      Equipment, Weapons, Ammunition: 77 Chicom carbines; 12 rifles (unk); 2 Chicom assault rifles; 27 Chicom SMG's;  1 Thompson SMG;  1 7.92mm bolt action rifle;  60 hand grenades (stick type); 7 Chicom hand grenades;  14 AT mines; 56 boobytraps; 3,539 rds 7.92mm ammo; 2,370 12.7mm rds; 28,500 7.62mm (long) rds; 20,000 9mm rds; 1,320 7.62mm (short) assault rds; 5 57mm rds; 55 75mm RR rds;  18 RPG-2 rds; 2,150 lbs TNT; 1 bunker; 3 pistol belts; 1 5gal container assorted medical supplies; 2 boxes assorted medical supplies (surgical instruments); 48 100lb bags of rice; 1 starlight device casing SN 11295; miscellaneous documents.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div>
              13. <span class="topicTitle">Administrative Matters</span>:
              <ol type="a">
                <li>
                  Supplies. Resupply was accomplished by helicopter from base camp. No major problems were encountered; however, the problems created due to diverting of all resupply helicopters for other missions still exist. At times, this action requires elements of the Bn to delay movement while awaiting helicopters to effect extraction and/or resupply of needed repair parts and ammo. If one helicopter could be maintained for resupply or extraction, the supply mission could be better accomplished. During the operation the following was airlifted into the area of operation: Class I - 31,200 pounds; Class II - 1,100 pounds; Class III - 20,500 pounds (2,548 gallons); Class V - 6,000 pounds; water - 4,753 gallons; and repair parts - 2,100 pounds. The Bn expended 640 rds of 5.56mm, 2,700 rds of 7.62mm, 1,110 rds of cal .50, 91 rds of 40mm HE, 183 rds of 81mm HE, 146 rds of 81mm smoke WP, 30 rds of 81mm illumination, 1 rd of 90mm Heat (RR), 75 rds of 4.2" HE, 34 rds of 4.2" WP, 3 rds of 4.2" illumination, 106 fragmentation grenades, 15 trip flares, 107 smoke grenades, 17 M18A1 mines, 250 lbs of TNT, 150 lbs of C4, and 1,000 ft of detonating cord.
                </li>
                <li>
                  Maintenance. The Bn started the operation with nine (9) carriers, M113, short (seven (7) due to shortage and two (2) in higher support maintenance). During the operation, six (6) carriers, M113, became inoperable due to hitting AT mines. Three (3) of these vehicles were repaired sufficiently in the field to continue operations. Three (3) carriers had to be evacuated to base camp. Other carriers became temporarily inoperable due to maintenance deficiencies; however, all were returned to duty during the operation except three (3).  The largest problem encountered was the evacuation of the disabled vehicles. The trafficability of the terrain in the area of operations restricted the use of VTR's. The Bn established a maintenance collection point at Bao Trai, and companies evacuated vehicles to this point. Due to the type damage to the mined vehicles and the trafficability of the terrain, the disabled vehicles continuously got stuck and caused the vehicles towing them to become stuck or overheated. The companies had to divert, in some instances, two (2) carriers per each mined track to effect evacuation. For two (2) companies, the evacuation of their disabled vehicles required four vehicles to be diverted from the companies' tactical operations for one complete day.
                </li>
                <li>
                  Transportation. The Bn consumed 5,529 gallons of MOGAS.
                </li>
              </ol>
            </div>
            <div>
              14. <span class="topicTitle">Special Equipment and Techniques</span>:  None.
            </div>
            <div>
              15. <span class="topicTitle">Commander's Analysis</span>:
              <ol type="a">
                <li>
                  VC are using the swampy, wet areas more and more to hide in.
                </li>
                <li>
                  Captured VC prisoners seem to habitually promise to lead you to caches of some sort, yet follow-ups generally prove to be fruitless. Apparently they think they must make themselves of value to you to save their own lives.
                </li>
                <li>
                  Civilians in the initial area of operations were extremely friendly.
                </li>
              </ol>
            </div>
            <div>
              16. <span class="topicTitle">Recommendations</span>:  None.
            </div>
            <div>
              <div>
                FOR THE COMMANDERS:<br>
                JAMES G. ANDRESS<br>
                Capt, Inf<br>
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">HHC</div>
              <div class="casUnitList">
                <div>TOVAR, Randy G.</div><div>PFC E3 91A10</div><div>WIA</div>
                <div>COLLINS, Raymond A.</div><div>SP5 E5 91B20</div><div>WIA</div>
                <div>SCHEMBRI, Ronald R.</div><div>PFC E3 91A10</div><div>WIA</div>
                <div>SNODGRASS, Dalio S</div><div>PFC E3 91A10</div><div>WIA</div>
                <div>JUSTICE, Ransom L.</div><div>SP4 E4 11D20</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co A</div>
              <div class="casUnitList">
                <div>TYSON, Dallas</div><div>SSG E6	11B40</div><div>WIA</div>
                <div>SURLES, Thomas B</div><div>2/Lt 1542</div><div>WIA</div>
                <div>WEEKES, Robert</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>MC GARRY, Robert J.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>FINNEY, Dale L.</div><div>SP4 E4	11B20</div><div>WIA</div>
                <div>DOYLE, James R.</div><div>SSG E6 11B40</div><div>WIA</div>
                <div>MAIDEN, Randolph E.</div><div>SGT E5 11B40</div><div>WIA</div>
                <div>KNOWLES, Michael A.</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>KEER, denton C.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>DAWSON, Elmer</div><div>SSG E6 11B40</div><div>WIA</div>
                <div>PAUL, Fred H.</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>PETERSON, Samuel</div><div>SP4 E4 11B20</div><div>WIA</div>
                <div>WALLER, Kenneth R.</div><div>PFC E3 11B10</div><div>WIA</div>
              </div>
              <div class="casUnitName">Co C</div>
              <div class="casUnitList">
                <div>VAN BEEK, Daniel L.</div><div>PFC E3	11B10</div><div>WIA</div>
                <div>SCHUTTER, Allan F.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>ROGERS, James B.</div><div>2/Lt 1542</div><div>WIA</div>
                <div>MASHBURN, James R.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>WANEK, Andrew K.</div><div>PFC E3 11B10</div><div>WIA</div>
                <div>SMITH, Ambrose</div><div>SP4 E4 63C20</div><div>WIA</div>
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
              HEADQUARTERS<br>
              1ST BATTALION (MECH) 5TH INFANTRY<br>
              APO San Francisco 96225
            </div>
            <div class="aarTopic">
              AVTLSBA-C 9 August 1966
            </div>
            <div class="aarTopic">
              <span class="topicTitle">SUBJECT</span>: Combat After-Action Report (RCS: MACV J3-32)
            </div>
            <div class="aarTopic">
              TO: Commanding Officer<br>
              2d Brigade<br>
              25th Infantry Division<br>
              APO U.S. Forces 96225<br>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">NAME OF OPERATION</span>: Operation MOKOLEIA.
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">DATES OF OPERATION</span>: 15-23 July 1966.
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">LOCATION</span>: Tan Phu Trung and vic (XT 6809), Filhol-Liocara-Balancie Plantations (XT 6720), Sa Nho and vic (XT 5626), Hau Nghia Province, Viet Nam.
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">CONTROL OR COMMAND HEADQUARTERS</span>: 1st Bn (Mech), 5th Infantry.
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">REPORTING OFFICER</span>: Lt Col Thomas U. Greer.
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">TASK ORGANIZATION</span>:
              <ul>
                <li>1st Bn (Mech)(-), 5th Inf, Lt Col T. U. Greer, Commanding</li>
                <li>Company A, Capt J. A. Renner, Commanding.</li>
                <li>Company B, Capt E. B. Vickery, Commanding.</li>
                <li>Bn Scout Platoon, Lt J. E. McQuinn.</li>
                <li>Hvy Mort Platoon, Lt L. Phillips.</li>
                <li>Co C was attached to the 4th Bn, 9th Inf on Opn KAHANA.</li>
              </ul>
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">SUPPORTING FORCES</span>:
              <ol type="a">
                <li>
                  a. Btry C, 1/8th Arty, DS.
                </li>
                <li>
                  b. 1/8th Arty (-), GS.
                </li>
                <li>
                  c. 25th Avn Bn provided helicopter support.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">INTELLIGENCE</span>: The intelligence will be divided into five (5) parts as follows:
              <ul>
                <li>
                  Tan Phu Trung - - 15 July 1966.
                </li>
                <li>
                  Tan Phu Trung - - 19 July 1966.
                </li>
                <li>
                  Reconnaissance in force to locate 16 U.S. Soldiers MIA - - 20 July 1966.
                </li>
                <li>
                  Reconnaissance Mission - - 21 July 1966.
                </li>
                <li>
                  Reconnaissance Mission - - 23 July 1966.
                </li>
              </ul>
              <br>
              <ol type="a">
                <li>
                  a. Tan Phu Trung - 15 July 1966:  The Bn S5, on a visit to the village chief of Ap Ben Do, was informed that 12 VC who normally hide in the daytime vic XT 685069 were at that time hiding in huts in the southern part of the village vic XT 684087. Co B was dispatched to the area and detained 35 civilians. The civilians were interrogated by the village chief and police and one VC and two suspects were identified and apprehended. While the village chief's information is usually reliable, this time it failed to develop. This portion of the village was once leveled and underbrush has since regrown. The rice paddies to the south are generally impassable. The only structures in this area are small temporary huts.
                </li>
                <li>
                  b. Tan Phu Trung - 19 July 1966: During the week prior to this operation, the Bn S5 was given information by the village chief concerning 12 VC operating in this area just south of Ap Ben Do. They hid in tunnels vic XT 684069 and had the mission of laying mines and sniping at aircraft in the Ap Ben Do area. They were armed with assorted rifles and one pistol. On the actual operation no resistance was met; however, there was no indication of foreknowledge of the operation. The chief also gave information concerning 24 VC operating to the north of Tan Phu Trung vic XT 700105. The mission of the VC was to collect taxes in the villages from XT 655134 to XT 705085. The village chief also furnished three guides to show exact locations of the VC tunnels which were well hidden. A sweep of the area met no resistance, but four VC were killed (BC) at XT 703107 when flushed from the tunnels pointed out by the guides. Documents found in the tunnels indicated the presence of a tax collecting unit. Twenty-two VC suspects were apprehended in the area, of which four were confirmed to be VC. As a result of the operation, two VC turned themselves into the village chief. The chief reported that 14 VC bodies were removed from the area by the VC that night and two VC were buried on the north side of town (both items unverified). An ambush patrol in the same area on 18 July 1966 netted one VC kill (BC). The terrain in this area provided good trafficability for APC's and foot movement. The area was once cleared by bulldozers but has since grown back with low scrub brush that is dense but passable in most areas.
                </li>
                <li>
                  c. Reconnaissance in Force to Locate 16 U.S. Soldiers MIA on 19 Jul 66 - 20 July 1966:  The enemy strength on 19 July was estimated at two VC companies located vic XT 575268 in a defensive position oriented south. It was expected that the VC had withdrawn north, into the Boi Loi Woods. The battle area vic XT 563266 had been completely policed and there were no signs of a battle having been fought there. At XT 575268 16 U.S. and four VC remains were found. One wounded VC was captured in a tunnel vic XT 577252 along with six carbines. This individual claimed to be a member of the 320th Bn(VC) which had withdrawn to the Boi Loi; however, documents found in the area indicated that the unit involved had been the 1st Bn, 165A Regt. Trafficability in this area was generally good; some rice paddies were obstacles to track movement.
                </li>
                <li>
                  d. Reconnaissance in the Filhol - Liocara - Balancie Plantations - 21 July 1966: The presence of the 7th Bn, 165A Regt in the plantation had been reported four times during the two previous weeks. A VC training area and base camp were reported to be in the vic of XT 660220 (25th Div G2). A check of the area by Co B failed to locate any sign of a training area or base camp. Approximately one VC squad was engaged vic XT 674215, but unit identification could not be made. Co A located a heavily boobytrapped and mined area vic Bao Cap (XT 634177) and several VC in a tunnel. The VC could not be extracted, but five weapons, five sets of web gear and five pairs of sandals were captured. All boobytraps, mines and the tunnel were destroyed. At the same location two firing positions for 60mm mortars were located and destroyed. Trafficability in the plantation was good with the generally thick undergrowth between the rubber trees. There are numerous trench systems in the area, all of which were known about in advance; however, the trenches failed to show any signs of recent use.
                </li>
                <li>
                  e. Reconnaissance Mission vic XT 570250 - 23 July 1966: The Bn returned to the area of 20 July 1966 to gather any information on VC locations, movements and activities in the area. All male personnel between the ages of 15 and 50 were detained and questioned. Agent reports indicated a possible VC build-up and attack on Trung Lap or Trang Bang. On the night of 19 July the ARVN post at Phuoc Hiep (XT 555174) was attacked. Interrogation of farmers in the area indicated that on 11 or 12 July at 2000 hours a unit of approximately 300 to 500 VC had moved north. These reports came from coordinates XT 544258 and XT 555250. It was also found that about 300 VC had moved north in two and three man groups, in the daylight, on 18 or 19 July 1966. Both groups of VC collected rice from the farmers along the route. The 1/5th Mech apprehended 55 VC suspects, of which 19 were confirmed to be VC and four were draft dodgers. It is noted that most of these men were working in the fields or walking on trails in the area. The terrain was found to be the same as on 20 July 1966.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">MISSION: 1st Bn (Mech), 5th Ifantry conducts local search and destroy operations in AO commencing 15 July 1966 and provides rapid reaction force for the 2d Brigade.
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">CONCEPT OF OPERATION</span>: The battalion would retrain and perform maintenance in conjunction with local company size operations, based on intelligence received concerning VC forces. During the period the battalion's operations would be planned and conducted in such a way as to be able to provide a rapid, mobile reaction force for the Brigade.
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">EXECUTION</span>
              <ul>
                <li>
                  <u>15 July 1966</u>: During the day, the battalion conducted maintenance and civil affairs activities in Tan Phu Trung (XT 6809). While talking to the village chief,  the Bn S5 learned that six VC of an intelligence squad were located vic XT 684069. Co B was immediately dispatched to the scene and encircled the area. After a detailed search and questioning of 35 civilians, one VC and two VC suspects were apprehended.
                </li>
                <li>
                  16 July 1966: The battalion (-) continued its maintenance throughout the day. A platoon ambush from Company B was positioned vic XT 68350710 at 0030 hours but made no contact. During the daylight hours the platoon conducted a detailed area search vic XT 685069 for a suspected VC base camp but none could be found. During the afternoon hours, the Scout Platoon escorted a convoy to Trang Bang (vic XT 4819) and the Bn S5 formed and conducted English classes at Tan Phu Trung (XT 6809).
                </li>
                <li>
                  17 July 1966: The battalion (-) conducted maintenance and civil affairs activities during the day. The village chief of Tan Phu Trung reported that two VC with a Russian rifle turned themselves in as a direct result of the battalion's operations in the area.
                </li>
                <li>
                  18 July 1966: Maintenance and civil affairs activities continued throughout the day. The Scout Platoon emplaced two ambushes (vic XT 689120 and XT 687116) at 0515 hours. At 1300 hours the first ambush shot and killed one VC (BC).
                </li>
                <li>
                  19 July 1966: The battalion (-) conducted S&D operations vic Ap Phu Loi (XT 702110) with Co A and the Scout Platoon. Co A conducted detailed search of the area killing four VC (BC) and destroying a boobytrapped house. The Scout Platoon screened the SE flank and apprehended two Vc and two suspects which were later confirmed to be VC. Co B was alerted and on "stand-to" to support the 1/27th Inf from 1504 hours through 1644 hours. All elements closed into the base camp by 2017 hours.
                </li>
                <li>
                  20 July 1966: The battalion (-) departed base camp at 0630 hours to conduct a reconnaissance in force vic XT 5626,  XT  5726,  XT 5627, and XT 5827 and attempted to locate 16 U.S. soldiers of the 1/27th Inf missing in action on 19 July 1966. By 0940 hours Co B discovered the remains of 16 U.S. and four VC soldiers vic XT 576268. One VC wounded by the 1/27th Inf on 19 July 1966 was captured in the area along with six rifles, 16 AT mines, miscellaneous documents, small arms ammunition and web equipment. While enroute to base camp, Co A and the Scout Platoon apprehended 18 VC suspects vic XT 528207 and XT 519205. By 1640 hours the battalion (-) closed into base camp.
                </li>
                <li>
                  21 July 1966: The battalion (-) conducted a reconnaissance in force into the Filhol - Liocara Plantation vic XT 6619 from 0900 hours until 2100 hours. English classes were held in Tan Phu Trung        and another VC turned himself in to the village chief.
                  <ul>
                    <li>
                      Company A: The company departed base camt at 0900 hours and by 0945 hours found and destroyed two freshly dug 60mm mortar positions vic XT 648177. At 1112 hours a heavily boobytrapped house and bunker-tunnel complex was discovered vic 634178 and a detailed search commenced. By 1600 hours the search was completed resulting in the destruction of the house and tunnel-bunker complex with an estimated five VC in the tunnel, five rifles and a pair of binoculars captured and over fifty boobytraps and three claymore type weapons found and destroyed. Co A was then sent to vic XT 647206 to reinforce and assist Co B.
                    </li>
                    <li>
                      Company B (Capt R. G. Vanneman assumed command): The company departed base camp at 0900 hours and by 1250 hours destroyed a bunker vic XT 661233. During the company's return trip, several VC were engaged vic XT 642217 but no enemy losses could be confirmed. Two APC's were severly damaged by AT mines resulting in seven KIA and four minor WIA.
                    </li>
                    <li>
                      Scout Platoon: The platoon conducted a reconnaissance to vic XT 680168 with negative contact. One APC was severely damaged by an AT mine vic XT 681166 but no casualties were sustained.
                    </li>
                  </ul>
                </li>
                <li>
                  22 July 1966: The Battalion (-) performed maintenance and conducted training in preparation for future operations.
                </li>
                <li>
                  23 July 1966: Throughout the day the battalion (-) conducted reconnaissance in force vic XT 545237, XT 555250, XT 577233, XT 567216, and XT 560197, to locate and destroy VC forces and to determine VC activities and movements. A total of 55 VC suspects were apprehended, of which 19 were confirmed to be VC four were draft dodgers. The battalion (-) returned to base camp at 1715 hours.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">RESULTS</span>:
              <ol type="a">
                <li>
                  Friendly losses:
                  <ol>
                    <li>
                      Incl 1, Casualty list.
                    </li>
                    <li>
                      One APC, M113 (destroyed).
                    </li>
                  </ol>
                </li>
                <li>
                  Enemy Losses:
                  <ol>
                    <li>
                      5 VC killed (BC).
                    </li>
                    <li>
                      25 VC captured.
                    </li>
                    <li>
                      4 draft dodgers apprehended.
                    </li>
                    <li>
                      11 rifles captured.
                    </li>
                    <li>
                      28 AT mines destroyed.
                    </li>
                    <li>
                      19 Arty rds rigged as boobytraps destroyed.
                    </li>
                    <li>
                      5,200 rds of SA ammo destroyed.
                    </li>
                    <li>
                      22 CBU bomblet boobytraps destroyed.
                    </li>
                    <li>
                      12 hand grenades destroyed.
                    </li>
                    <li>
                      18 rifle grenades destroyed.
                    </li>
                    <li>
                      3 claymore type weapons destroyed.
                    </li>
                    <li>
                      3 mortar round boobytraps destroyed.
                    </li>
                    <li>
                      1  250 lb bomb boobytrap destroyed.
                    </li>
                    <li>
                      5 tunnels destroyed.
                    </li>
                    <li>
                      2 bunkers destroyed.
                    </li>
                    <li>
                      2 mortar positions destroyed.
                    </li>
                    <li>
                      2 houses destroyed.
                    </li>
                    <li>
                      1 pair binoculars captured.
                    </li>
                    <li>
                      Miscellaneous clothing destroyed.
                    </li>
                    <li>
                      Numerous documents (captured).
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div>
              13. <span class="topicTitle">ADMINISTRATIVE MATTERS</span>:
              <ol type="a">
                <li>
                  Supplies: All resupply was accomplished by units returning to base camp in the evenings. The following supplies were used during the operation.
                  <ol>
                    <li>
                      Class I: 201 cases of "C" Rations.
                    </li>
                    <li>
                      Class III: 6670 gallons.
                    </li>
                    <li>
                      The battalion expended the following ammunition and demolitions during the operation:
                      <ol type="a">
                        <li>
                          Ctg, 5.56 ball  10,840 rds
                        </li>
                        <li>
                          Ctg, 5.56 tracer  1,140 rds
                        </li>
                        <li>
                          Ctg, 7.62 ball  10,920 rds
                        </li>
                        <li>
                          Ctg, 7.62 4+1, linked 11,200 rds
                        </li>
                        <li>
                          Ctg, 40mm, gren, HE 144 rds
                        </li>
                        <li>
                          Ctg, 81mm, smk, WP 87 rds
                        </li>
                        <li>
                          Ctg, 4.2", HE  33 rds
                        </li>
                        <li>
                          Ctg, 4.2", Ill  3 rds
                        </li>
                        <li>
                          Ctg, 4.2" smk, WP 13 rds
                        </li>
                        <li>
                          Gren, hand, frag   100 ea
                        </li>
                        <li>
                          Chg, demo blk, TNT, 1 lb 700 lbs
                        </li>
                        <li>
                          Cap, blasting, non-elect 150 ea
                        </li>
                        <li>
                          Cord, detonating  1,500 ft
                        </li>
                        <li>
                          Firing device, demo 90 ea
                        </li>
                        <li>
                          Fuze, blasting, time 200 ft
                        </li>
                      </ol>
                    </li>
                  </ol>
                </li>
                <li>
                  Maintenance: The battalion started the operation short fourteen (14) Carriers, Personnel, full-tracked, M113. The Scout Platoon was short four (4), Medical Platoon was short one (1), Co A was short two (2), Co B was short three (3), and Co C was short four (4) carriers. During the operation two (2) carriers were damaged by AT mines. One of the carriers was completely destroyed by the blast of the mine vic XT 642217 and could not be recovered. The other carrier, damaged vic XT 681168, was recovered to base came where it was declared not economically repairable. One carrier was hit by an AT weapon but was repaired after being returned to the base camp area. During the operation there were four (4) carriers that became inoperable for mechanical failures. These failures were corrected in the field and the carriers continued the operation. During the operation the Light Recovery Vehicle, M578, was used for the first time by this battalion. Two of these vehicles were sent on an operation and both experienced mechanical failures. One of the vehicles failed because of a lack of power. After investigation, the problem was found to be clogged fuel lines and fuel tank, believed to have been caused by the manufacturer's failure to purge the fuel tank after welding the seam of the tank. The other M578 failed because of overheating. This was caused by the terrain and the inexperience of the driver. The terrain was heavily wooded and the driver had the tendency to over-steer, causing the transmission to overheat. During the operation the battalion had one company attached to an Infantry battalion and one platoon attached to an Artillery battalion. It was found that both type battalions were unable to properly support the attached units with needed supplies, repair parts, POL, and maintenance assistance. This battalion was still required to furnish a majority of the above support even though the elements were from 25 to 80 miles from the parent unit. During the operation this unit received fourteen (14) each carriers, M113, in issue for vehicles that were short, so that at the end of the operation the battalion was short two (2) carriers, one each in Co B and the Scout Platoon.
                </li>
                <li>
                  Treatment of Casualties, Evacuation and Hospitalization: During this operation there was no battalion forward aid station. There were no evacuation problems, but there was difficulty identifying the remains of seven (7) men, who were mutilated when their track exploded. During the operation four men were treated for wounds, minor in nature, and returned to duty.
                </li>
                <li>
                  Transportation: The Bn consumed a total of 6,670 gallons of MOGAS while traveling 9,875 miles.
                </li>
                <li>
                  Communications.
                  <ol>
                    <li>
                      This unit utilized FM radios as the primary means of communications during the "daylight" hours. Wire nets were used during the hours of darkness, and FM radios maintained listening silence. The primary means of communications with 2d Brigade Headquarters was FM radio. The distance was too great to permit the use of wire, and this unit's AM (RATT) radio was inoperative because of failure of the transmitter T-195. UHF air-ground communications were also available. This radio was used by the battalion S3 to monitor the air strikes being conducted in the AO.
                    </li>
                    <li>
                      The AN/VRC 12 family of radios is currently on hand in this unit. The intense heat inside the M113 carrier does have an adverse effect on the RT 524 and Rt 246. It was found during this operation that if the call light is removed for short periods of time during transmissions, it permits the blower system to draw cool air into the radio and decreases the amount of "down time" experienced. A total of five radios were evacuated from the field location and two radios were fixed by organic radio repairmen.
                    </li>
                    <li>
                      The AN/PRC 25 radio was utilized to control the maneuver elements from a helicopter. This radio is adequate during local  search and destroy missions. However, the "shelf life" of the battery  (BA 386) is questionable, since experience has proven the adequate transmission life of the battery ranges from five (5) hours to twenty (20) hours.
                    </li>
                  </ol>
                </li>
                <li>
                  Medical Evaluation: A careful search for remains should be made if tactically possible whenever a body has been badly mutilated. This could assist in positive identification of the remains.
                </li>
              </ol>
            </div>
            <div>
              14. <span class="topicTitle">SPECIAL EQUIPMENT AND TECHNIQUES</span>:  None.
            </div>
            <div>
              15. <span class="topicTitle">COMMANDER ANALYSIS</span>
              <ol type="a">
                <li>
                  During the early weeks of July a concentrated effort was exerted to improve relations with the leaders of the village of Tan Phu Trung. The battalion S5 visited the village every day that combat operations permitted. The battalion commander participated in the 4th of July celebration held in the village. All members of the battalion staff visited the village to deliver supplies or assist in planning sessions. A rapport has been achieved which has paid dividends in hard intelligence. The Chu Hois who turn themselves in have been able to lead elements of the battalion to exact sites of tunnels in local areas. It is felt that immediate reaction to this intelligence is the key to success.
                </li>
                <li>
                  Operations conducted south of the Ho Bo Woods have proved that the mobility of this battalion is not hampered by the monsoon rains experienced to date. In this regard it is noted that rice fields inundated with water will sustain a tracked vehicle. A column moving over an apparently solid field will bog down when the ground crust is broken. Route selection and driver knowledge are the factors that will determine the ability of units to maneuver rapidly.
                </li>
                <li>
                  The planting season in Hau Nghia Province extends from June through August. In areas controlled by the VC it is apparent that the local guerrilla must put down his weapon and sow his fields during daylight hours. Seal and search operations are productive, especially when conducted in conjunction with sweeps during which all males found working in the fields are checked for appropriate ID's. The ratio of VC taken compared to U.S. losses makes this type of operation particularly effective.
                </li>
              </ol>
            </div>
            <div>
              16. <span class="topicTitle">RECOMMENDATIONS</span>: Inasmuch as the mechanized battalion can maneuver rapidly over large areas during the monsoon period, continued use of the battalion in the area south of the Boi Loi - Ho Bo Woods will serve several purposes:
              <ol type="a">
                <li>
                  Continuous sweeps conducted over the entire area will pick up the local guerrilla or drive him into the base areas. This action will deprive the hard core units of support necessary to conduct operations to the south. The continued presence of a U.S. unit will be necessary before an effective intelligence gathering program can be established.
                </li>
                <li>
                  From such a location the battalion can conduct spoiling attacks into known base areas, thus keeping the VC off-balance.
                </li>
                <li>
                  Positioning a mobile force astride VC withdrawal routes to known base areas would inhibit major operations against U.S./ARVN installations and convoys on Route 1.
                </li>
              </ol>
            </div>
            <div>
              <div>
                FOR THE COMMANDERS:<br>
                JAMES G. ANDRESS<br>
                Capt, Inf<br>
              </div>
            </div>
            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">HHC</div>
              <div class="casUnitList">
                <div>RILEY, William B.</div><div></div><div>WIA</div>
              </div>
              <div class="casUnitName">Co A</div>
              <div class="casUnitList">
                <div>JUNGKRUTH, Doyle W.</div><div></div><div>WIA</div>
              </div>
              <div class="casUnitName">Co B</div>
              <div class="casUnitList">
                <!-- IRVING, Earl E. Jr.	Co B	21 Jul 66	WIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Earl" && $one_casualty->last_name == "Irving Jr")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <div>CROWELL, Perry R.</div><div></div><div>WIA</div>
                <div>BURGARDT, Charles</div><div></div><div>WIA</div>
                <div>DIAZ, John</div><div></div><div>WIA</div>
                <div>WINN, Ronald E.</div><div></div><div>WIA</div>
                <div>SMITH, Claude</div><div></div><div>WIA</div>
                <!-- GILL, Richard	Co B	21 Jul 66 	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Richard" && $one_casualty->last_name == "Gill Jr")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <!-- HINTERLONG, Leo	Co B	21 Jul 66	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Leo" && $one_casualty->last_name == "Hinterlong")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <!-- BERRY, David	Co B	21 Jul 66 	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "David" && $one_casualty->last_name == "Berry")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <!-- SANCHEZ, Wilberto 	Co B	21 Jul 66	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Wilberto" && $one_casualty->last_name == "Sanchez")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <!-- GILCH, James X.	Co B	21 Jul 66	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "James" && $one_casualty->last_name == "Gilch")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <!-- VANCLIEF, Larry	Co B	21 Jul 66 	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Larry" && $one_casualty->last_name == "Van Clief")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <!-- HARRIS, Samuel	Co B 	21 Jul 66	KIA -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Samuel" && $one_casualty->last_name == "Harris")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div><div></div><div>KIA</div>
                <div>VANNEMAN, Robert</div><div></div><div>WIA</div>
                <div>JAGOSZ, Theodore</div><div></div><div>WIA</div>
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
              HEADQUARTERS</br>
              1ST BATTALION (MECH) 5TH INFANTRY</br>
              APO San Francisco 96225</br>
            </div>
            <div class="aarTopic">
              AVDCSBA-C 25 August 1966
            </div>
            <div class="aarTopic">
              SUBJECT: Combat After-Action Report (RCS:  MACV J3-32)
            </div>
            <div class="aarTopic">
              TO: Commanding Officer</br>
              2d Brigade</br>
              25th Infantry Division</br>
              ATTN:  AVDCSB-T</br>
              APO U.S. Forces 96225</br>
            </div>
            <div class="aarTopic">
              1. <span class="topicTitle">NAME OF OPERATION</span>: Operation KOKO HEAD
            </div>
            <div class="aarTopic">
              2. <span class="topicTitle">DATES OF OPERATION:</span> 240700JUL66 - 061640AUG66
            </div>
            <div class="aarTopic">
              3. <span class="topicTitle">LOCATION</span>: Liocara Plantation (XT 6422), Ho Bo Woods and vic (XT 6527 - XT 6424 - XT 6123) and Trung Lap and vic (XT 5021), Hau Nghia Province, Viet Nam
            </div>
            <div class="aarTopic">
              4. <span class="topicTitle">COMMAND HEADQUARTERS</span>: 1st Bn (Mech), 5th Inf.
            </div>
            <div class="aarTopic">
              5. <span class="topicTitle">REPORTING OFFICER</span>: Lt Col Victor F. Diaz
            </div>
            <div class="aarTopic">
              6. <span class="topicTitle">TASK ORGANIZATION</span>:
              <ul>
                <li>
                  1st Bn (Mech) (-) 5th Inf, Lt Col V. F. Diaz, Commanding
                </li>
                <li>
                  Recon Plat, Lt J. E. McQuinn
                </li>
                <li>
                  Hvy Mort Plat, Lt L. B. Wickman
                </li>
                <li>
                  Company A, Capt J. A. Renner, Commanding
                </li>
                <li>
                  Company B, Capt. R. C. Vanneman, Commanding
                </li>
                <li>
                  Company C, Capt W. A. Blair, Commanding (Attached to 4/9th Inf until 27 July 1966)
                </li>
                <li>
                  Six RVN National Policemen.
                </li>
              </ul>
            </div>
            <div class="aarTopic">
              7. <span class="topicTitle">SUPPORTING FORCES</span>:
              <ol type="a">
                <li>C Btry, 1/8th Arty: DS.</li>
                <li>1/8th Arty (-) and 3/13 Arty (-) : GS.</li>
              </ol>
            </div>
            <div class="aarTopic">
              8. <span class="topicTitle">INTELLIGENCE</span>:
              <ol type="a">
                <li>
                  a. 24 July 1966:  On 23 july 1966 the Bn S5 received information from the village chief  concerning two tunnels and approximately nine VC north of Ap Ben Do Hamlet (Tan Phu Trung). The chief also furnished two guides to point out the tunnels. The guides were a Popular Forces soldier and a Chieu Hoi and were picked up by Co A enroute to the area 24 July. It was determined that the VC were probably members of the tax collection unit operating in the area. The tunnels were located at XT 700110 and XT 702107.  Both were unoccupied and destroyed by Co A. A further search of the wooded area disclosed a well camouflaged house at XT 707101 which was also destroyed. A small VC base camp was found vic XT 702104 and four bunkers and a tunnel were destroyed  at XT 707103. A small amount of documents found in the tunnel were tax records. It is notable that this area was cleared by bulldozers at one time and vegetation has since regrown and is quite dense in many spots. The VC base camp consisted of six huts made with bamboo and tree trunks that were knocked down into a horizontal position. The horizontal limbs were used for the roof. Undergrowth was placed against the limbs. This formed a very well camouflaged shelter underneath. Trafficability in the area was good. As in the past, close cooperation between the village chief and the Bn S5 resulted in the specific location of VC installations in the Tan Phu Trung area.
                </li>
                <li>
                  b. 27 to 30 July 1966: Intelligence received from HQ, 2d Bde indicated a possible build up for an attack on Trung Lap or Trang Bang in the near future. There was also a suspected supply and infiltration route (nortn/south) somewhere in the area. Many reports had been received indicating that elements of the VC 271st and 273rd Regt's were located in the Boi Loi Woods along the north edge of the AO. The Boi Loi is also known to be the base area for the 320th VC Bn. In the two week period prior to the operation, elements of the 1st Bn, 165A Regt were also active in the AO. A thorough search of the area was made with the following results: Two VC armed with carbines were killed by an ambush at XT 516309; a total of 43 VCS were evacuated, most of which were found working in the fields. Information had been received that the village of Loc Bung (XT 516264) was a VC hideout. Coordination was made with an RF outpost at XT 508260 and 20 RF troops aided in the search. Once the village was surrounded, all male suspects were screened by the RF soldiers and 13 were evacuated as VCS. The terrain in this area was trafficable, but many rice paddies were too soft for APC's to cross. The AO is characterized generally by wet paddies with scattered clumps of woods and brush.
                </li>
                <li>
                  c. In the two weeks prior to the operation, intelligence reports from HQ, 2d Bde and other divisional units indicated that elements of the 1st Bn, 165A Regt had been seen frequently in the AO vic XT 6229 and XT 6226. Elements of the 7th Bn, 165A Regt were reported in the Filhol Plantation vic XT 6622. A VC weapons training center was reported to be located vic XT 5928. Past operations and reports indicated that habitual VC base and rest areas were located vic XT 588264, XT 575247, XT 575234, XT 600245 and XT 645237. A new Vc company was reported to be located vic XT 5926. During the actual operation no VC units of any size were encountered. All actions involved not more than a VC squad and usually consisted of the three  - to five - man cells operating within and covering mined and /or boobytrapped areas.
                </li>
                <li>
                  d. Significant Intelligence Gained:
                  <ol>
                    <li>
                      (1) XT 643247. A base camp was found with a cache of 2000 pounds of rice, several maps of the Saigon-Cholon area showing detailed locations of  U. S. and ARVN petroleum storage areas, numerous sketches of ARVN outposts and friendly hamlets, and a sketch map of the Cu Chi base camp. This area was heavily mined and booby trapped.
                    </li>
                    <li>
                      (2) XT 651237. This area was heavily mined and boobytrapped and defended by a three to five-man cell. The VC were pursued into a tunnel. Tunnel runners located an 81 or 82mm mortar sight and some documents concerning a VC mortar company (a company roster was found, also a document stating the unit had five 81mm mortars). The unit was later identified as a weapons company of the 7th Bn, 165A Regt. After the documents and mortar sight were recovered, a fire fight developed in the tunnel and the VC moved the remainder of the mortar further back into the tunnel. A "Mighty Mite" was used and  a second tunnel entrance was located some 100 meters away (due to visibility limitations in the heavy underbrush a helicopter was called to the area and located the second tunnel entrance, marked by escaping smoke). Two air holes were also located and blocked. After six hours of attempting to remove the VC from the tunnel, both entrances and the two air vents were blown. The result was a collapse of the tunnel (traceable on the surface).
                    </li>
                    <li>
                      (3)  XT 646236 to XT 647234. Indications of a VC base camp were found with several hidden houses, one small concrete anti-aircraft bunker, several new bunkers, camouflaged huts and building materials. At this location two VC were killed. Several pounds of documents, training manuals and three weapons were captured. All installations were destroyed.
                    </li>
                    <li>
                      (4) XT 639240. Three VC were engaged. Two escaped and one was captured. The captured VC spoke good English and was armed with a Chicom (type 56) assault rifle. It was found that he was a member of the 2nd Squad, 1st Platoon, C20 Section, H2 HQ. This is a reconnaissance and intelligence unit subordinate to the Saigon-Gia Dinh Military Region. The unit's mission is reporting friendly unit dispositions throughout thePhu Hoa District and Binh Duong Province, including the Ho Bo Woods and Filhol Plantation. He also indicated that the 1st Bn, 165A Regt coordinated with Arty elements from COSVN during the 26-27 July mortar attack on the Cu Chi base camp. He gave his unit HQ location as XT 637232. An immediate check of the location was made by the 2/27th Inf and a concrete tunnel complex was destroyed.
                    </li>
                    <li>
                      (5) XT 640229. Three bombs from the 1 August 1966 B52 strike had created large craters in a heavily mined and boobytrapped area. These items were unearthed, uncovered or dislodged. Electrical wires to command detonated mines had been severed. A bunker and tunnel complex was also destroyed by the bombs. It is noteworthy that a bunker and three-level tunnel found at this location had an M113 cargo hatch as the bunker top and an M113 commander's hatch as a trap door between levels. On 4 August 1966 a VC rallier stated that his unit (4th Squad, 2nd Platoon, 1st Company, 7th Bn, 165A Regt) had been under direct attack by B52's at Xom Bung (XT 645230) and were ordered to break up immediately into small groups and move out of the area.
                    </li>
                    <li>
                      (6) XT 643217.  B/1/5th Mech located and destroyed an extensive bunker system with two three-level tunnels that contained 30,000 rounds of .30 cal armor piercing ammunition (Chicom) and large quantities of mines and grenades. At this same location a week prior, Co B had an APC destroyed by a command detonated mine with seven U.S. KIA. On that date the time schedule prevented a thorough search of the area. On returning to the area it was found that the APC wreckage was untouched and still had many 40mm grenade rounds (damaged) scattered in the vicinity.
                    </li>
                    <li>
                      (7) XT 645234 to XT 646235. Two concrete bunkers, four dirt and log bunkers and one three level tunnel were destroyed. Assorted medical supplies and propaganda material were captured.
                    </li>
                    <li>
                      (8) XT 615268. Four rows of barbed wire, approximately 30 feet long with each row constructed in a different manner, were located. This indicated some type of training area.
                    </li>
                    <li>
                      (9) XT 653274. Two bombs from the B52 strike had destroyed a VC company CP. A trench, bunker, tunnel and several huts were destroyed. There were two dead VC, a company roster for H1B Company listing one captain and four lieutenants, 60 black uniforms, three bolts of black cloth, one U.S. carbine, one Chicom "56" assault rifle and miscellaneous documents.
                    </li>
                    <li>
                      (10) XT 653282. A rice cache of 900 pounds was found in a hut.
                    </li>
                    <li>
                      (11) XT 646236. A rice cache was found buried in a 55 gallon drum with 2000 rounds of small arms ammunition.
                    </li>
                    <li>
                      (12) XT  621256 and XT 648249. Many recently traveled trails were found. At the later coordinates were indications (ie, water containers with soap, food scraps, several fires - some of which were still warm - and cooking utensils) that a large (possible company size) VC force had spent the night.
                    </li>
                    <li>
                      (13) XT 623256.  A large bunker complex with many boobytraps were destroyed.
                    </li>
                    <li>
                      (14) XT 620224.  Five steel reinforced bunkers and a thirty meter tunnel were destroyed. Equipment for making grenades and 25-30 pounds of lead (in rods) was captured. This area had many boobytraps.
                    </li>
                    <li>
                      (15) XT 675281. The area was heavily mined and boobytrapped, with many huts. Two bunkers with interconnecting tunnel were destroyed, two weapons were recovered and two VC were presumed killed when the tunnel was destroyed.
                    </li>
                    <li>
                      (16) XT 648242. In a large hole (similar to a well) 400 pounds of explosives in 1/4 pound blocks, one Chicom claymore, one flare pistol and miscellaneous equipment were found.
                    </li>
                    <li>
                      (17)  Ambush patrols were utilized each night during the operation. On some nights as many as eight were used. No contact was made, nor any VC movement observed.
                    </li>
                  </ol>
                </li>
                <li>
                  e. The B52 strike seemed most effective when the bombs created a large crater. Bunkers and tunnels were physically affected only when directly hit (ie, in one instance a bunker located 15 feet from a crater measuring approximately 40 feet in diameter by 20 feet deep was unaffected). In two areas many mines and boobytraps were uncovered or dislodged. Wiring used for detonating mines was severed.
                </li>
                <li>
                  f. Terrain:  The ground in the wooded areas was firm and provided excellent trafficability. Movement in rice paddies was generally good, with some exceptions. All wooded areas had a large amount of undergrowth that limited visibility but not trafficability.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              9. <span class="topicTitle">MISSION</span>: 1st Bn (mech) (-), 5th Inf conducts S&D operations in 2d Bde AO on order; provides mechanized reaction force on order.
            </div>
            <div class="aarTopic">
              10. <span class="topicTitle">CONCEPT OF OPERATION</span>: The 1st Bn (Mech)(-), 5th Inf based at Cu Chi conducts local S&D operations, civil affairs activities, maintenance and retraining; is prepared for employment as base reaction force on order.
            </div>
            <div class="aarTopic">
              11. <span class="topicTitle">EXECUTION</span>:
                <div>
                  <u>24 July 1966</u>: The village chief of Tan Phu Trung (XT 6809) offered the assistance of a Popular Forces soldier and a Chieu Hoi to locate tunnels vic XT 700110 which were being used by the VC. Co A and Recon Plat were dispatched to the area. After a thorough search, four well camouflaged huts, bunkers and tunnels were located and destroyed. Several documents, one Chicom carbine and two VC suspects were also captured.
                </div>
                <div>
                  <u>25 July 1966</u>: The battalion (-) conducted retraining and maintenance.
                </div>
                <div>
                  <u>26 July 1966</u>: The battalion (-) conducted retraining, maintenance and convoy security missions to Bao Tri (XT 5204). Co B was attached to the 2/27th Inf.
                </div>
                <div>
                  <u>27 July 1966</u>: Eight daylight ambushes were established. One made contact vic XT 516309 at 1455 hours, resulting in two VC killed (BC) and one U.S. carbine, one Chicom carbine, three hand grenades, 50 rounds small arms ammunition and miscellaneous documents captured. The battalion (-) departed at 0800 hours to conduct S&D operations south of the Boi Loi Woods vic XT 5130 (Incl 1, Operation Overlay). Company A operated in Obj SAM and Obj HARRY apprehending eight VC suspects. Co B was relieved from the 2/27th Inf and joined the battalion (-) enroute to the AO. They then operated in Obj JOE, Obj BILL and Obj TOM. Several ambushes were set along the southern edge of the Boi Loi and at 1455 hours two VC were killed (BC) and two rifles captured. The Recon Platoon initially blocked for Co B on Obj JOE then conducted operations vic XT 480297 where 15 VC suspects were apprehended. (Eight of the suspects apprehended were confirmed as VC by the 25th Div IPW team.) The battalion (-) established a fire support base vic XT 479271 and Btry C (-), 1/8th Arty (105mm How) was airlifted in to support the battalion (-). Co C returned to the rear basecamp at 1830 hours terminating their attachment to the 4/9th Inf.
                </div>
                <div>
                  <u>28 July 1966</u>: Eight ambushes were established during darkness 27-28 July. None made contact and all returned at first light. The battalion (-), assisted by the local RF platoon, encircled the village of Loc Hung (XT 5226) and apprehended 19 VC suspects, of which five were confirmed to be Viet Cong.
                </div>
                <div>
                  <u>29 July 1966</u>: Seven ambushes were established during darkness 28-29 July. One made contact at 2030 hours vic XT 482295. Two WIA were sustained; enemy casualties were unknown. The ambush returned to Bn base. All other ambushes returned at first light. The battalion (-) continued operations in the AO (Incl 2, Operation Overlay) which netted one VC and 15 suspects. The battalion CP remained in position to secure the LZ for extraction of the Arty battery. By 1830 hours the battalion had returned to base camp.
                </div>
                <div>
                  <u>30 July 1966</u>: Battalion activities included maintenance, conduct of civil affairs operations at Tan Phu Trung (XT 6809) and escort of an Artillery convoy from Duc Hue (XT 4405) to base camp.
                </div>
                <div>
                  <u>31 July 1966</u>: Lt Col Victor F. Diaz assumed command of the 1st Bn (Mech), 5th Infantry vice Lt Col T. U. Greer. The battalion conducted maintenance and prepared for future operations.
                </div>
                <div>
                  <u>1 August 1966</u>: The battalion departed base camp at 0725 hours on a mission of exploiting and determining the effectiveness of a B52 bomb strike vic XT 640225 - XT 665240. In conjunction with this mission the battalion conducted S&D operations in the AO (Incl 3, Operation Overlay).</br>
                  <b>Company A</b>: The company, with Recon Platoon attached, established blocking position X-RAY, then exploited the bomb strike on Obj 2. With the exception of three AT mines, the company had no enemy contact. An extensive bunker-tunnel complex was discovered vic XT 640229. Another tunnel complex was found vic XT 645227. There was little or no evidence of the B52 strike in the objective area.</br>
                  <b>Company B</b>: The company moved to clear and hold Obj 1 until passage of Company A, then conducted a detailed search vic XT 646215. A bunker-tunnel complex was discovered vic XT 643217 which contained an ammo cache of small arms ammo, grenades and AT mines. After completing the search the company moved to Obj 13. At 1650 hours two houses were found vic XT 624243 containing a rifle, 15 artillery rounds, 2 AT mines, documents and medicine.</br>
                  <b>Company C</b>: The company departed base camp at 0725 hours moving through OP Ann Margaret along Axis WHITE to conduct S&D operations to Obj 3, XT 622231. The company arrived in the AO at 0908 hours and between 0917 hours and 0956 hours found and destroyed five bunkers vic XT 621230. Ineffective small arms fire was received throughout the morning but no casualties were sustained. Found and destroyed vic XT 623227 were an extensive tunnel complex with new punji pits around the entrance. Found inside the complex were fresh food on a table and recent signs of much activity. At 1305 hours an element found a letter containing North Vietnamese money vic XT 623277. Also found in the same area were one canteen, a holster and miscellaneous small arms ammunition. At the same time elements vic XT 619233 destroyed one 105mm dud and one 155mm dud, both rigged for command detonation and boobytrapped in a tunnel in the area. Three VC were located in a bunker-tunnel complex vic XT 619233 at 1338 hours. In the maneuver against the bunker two WIA were sustained resulting from a command detonated mine at 1351 hours. Another WIA was sustained at 1405 hours from another command detonated mine in the same area. All attempts to force the VC from the complex failed and the complex was destroyed with demolitions. Found vic XT 623277 at 1405 hours was one U.S. 1917 Eddystone rifle. Found vic XT 619233 at 1600 hours were eight homemade hand grenades and miscellaneous field equipment. At 1600 hours the company removed the top from a bunker in the area and found six hand grenades and miscellaneous small arms ammunition. At 1700 hours the company departed enroute to the battalion perimeter.
                </div>
                <div>
                  <u>2 August 1966</u>: The battalion established ten ambushes during darkness 1-2 August. No contact was made and all returned at first light. The battalion received the mission of exploiting the northern half of the 2/27th Inf objective area and departed at 0715 hours. Co A maintained its blocking position until 1140 hours then joined the battalion vic XT 646236. Co B conducted its operation vic XT 650257. Several new tunnels, bunkers and spider holes were found and destroyed vic XT 646239. Co C was diverted to vic XT 639240 after receiving small arms fire from a house. The area was thoroughly searched and one VC captured. Several maps and documents were also found in this boobytrapped area. The 2/27th Inf was relieved of its mission and at 1455 hours Co C was dispatched to assist in their move to Trung Lap. The 1/5th Mech then assumed responsibility for the entire AO.
                </div>
                <div>
                  <u>3 August 1966</u>: Eight ambushes were established during darkness 2-3 August, none of which made contact and all of which returned at first light. The battalion conducted an extensive search in the objective area (Incl 4, Operation Overlay), which showed several indications of recent use by the VC. Co A killed two VC in a tunnel and dragged their bodies out; a third VC refused to come out and the tunnel was destroyed. Co B found extensive tunnel-bunker systems in their objective area along with ammunition, medical supplies and large amounts of propaganda material. 60mm mortar firing positions and containers were also found in the area. Co C also discovered an extensive tunnel-bunker system in its area which was ringed with CBU bomblet booby traps. Uniforms and gas masks were found in the tunnel. The Recon Platoon encountered an extensively booby trapped area which was defended with command detonated mines. Two VC were encountered in a tunnel, one of which was killed and extracted. The other was buried when the tunnel was destroyed.
                </div>
                <div>
                  <u>4 August 1966</u>: The battalion established nine ambushes during the hours of darkness 3-4 August. None made contact and all returned at first light. Throughout the day the battalion conducted post-strike analysis in the AO immediately after the 040715AUG66 B-52 strike (Incl 5, Operation Overlay).</br>
                  <b>Company A</b>: The company departed the battalion perimeter at 0715 hours enroute to the AO. By 0827 hours the company had arrived in the AO and at 0909 hours elements found one VC claymore, miscellaneous small arms ammunition and several miscellaneous documents, including a company roster (possible unit designation: H-1B) vic XT 653274. At 1045 hours a cache containing approximately 60 black uniforms and several bolts of cloth was found vic XT  651281. Four slight WIA were sustained and an APC was damaged extensively when the vehicle hit an AT mine vic XT 655275 at 1210 hours. Found in the same area were two VC bodies - an apparent result of the morning's B-52 strike. Recovered with the bodies were one U.S. carbine and one Russian assault rifle. Continued search of the AO revealed a heavily booby trapped and mined area containing several houses vic XT 675281. After completion of S&D operations the company returned to the battalion perimeter.</br>
                  <b>Company B</b>: The company departed the battalion perimeter for the AO at 0715 hours, arriving at 0920 hours, and began its S&D operations. At 0925 hours 900 pounds of loose rice was found vic XT 653282. Two command detonated mines were set off and small arms fire was received vic XT 654282 at 1000 hours. There were no casualties. An old carbine, in unusable condition, was found in a hole vic XT 657281. At 1100 hours two VC with one weapon were trapped in a bunker-tunnel complex vic XT 657281. The weapon, a Chicom carbine, was captured, but all attempts to coax the VC from the tunnel were unsuccessful and the VC were killed (est) when the complex was destroyed with demolitions. At 1520 hours one APC hit an AT mine vic XT 657282. There were no casualties. At 1533 hours another APC hit an AT mine in the same location. One minor WIA was sustained. At 1700 hours the company completed its S&D operations and returned to the battalion perimeter.</br>
                  <b>Company C</b>: The company departed the battalion perimeter at 0715 hours and while enroute to the AO several recently traveled, heavily used trails were found vic XT 621256 and XT 648249. Two bunkers were destroyed at 1008 hours vic XT 648249. At 1036 hours automatic weapons and small arms fire was received from vic XT 660257. Mortar fire was called in and the VC broke contact. There were no casualties. At 1101 hours one friendly KIA and one serious WIA resulted from an exploding booby trap vic XT 658259. At 1132 hours one KIA and three WIA were sustained during the investigation of a booby trapped bunker vic XT 658259. All casualties were evacuated. At 1514 hours a blood trail, as well as a pair of sandals with bits of flesh in them and a bandoleer of 7.92mm ammo, were found near a sampan vic XT 667261. The sampan was sunk in the river where the blood trail ended. The company finished its S&D operations at 1700 hours and returned to the battalion perimeter.</br>
                  <b>Recon Platoon</b>: At 0745 the platoon departed for Trung Lap, escorting the battalion's downed vehicles. The escort mission was completed at 0900 hours, at which time the platoon started its return movement to the AO. Between 1425 hours and 1552 hours the platoon screened the northwest flank of the objective area. After the completion of the mission the platoon returned to the battalion perimeter.
                </div>
                <div>
                  <u>5 August 1966</u>: The battalion established eight ambushes during the hours of darkness 4-5 August. None made contact and all returned at first light. The battalion conducted maintenance during the early morning. At 0932 hours the battalion commenced a reconnaissance in force in areas DOVE and RAVEN (Incl 6, Operation Overlay). The battalion CP was moved to vic XT 569241.</br>
                  <b>Company A</b>: At 0934 the company began its movement to Area RAVEN (Obj 6), searching along Axis JAN in areas 3, 7 and 2. Ineffective small arms fire was received at 1040 hours from vic XT 594265. A heavy volume of automatic weapons fire was returned and the VC broke contact. Ten VC were spotted in a woodline vic XT 573287 at 1140 hours. The VC were pursued but all attempts to make contact were unsuccessful. At 1500 hours the company arrived at the battalion CP.</br>
                  <b>Company B</b>: The company began its movement at 1023 hours moving to Obj 10, searching along Axis PEG in areas 8 and 1. One 250 pound bomb and a house were destroyed vic XT 613266 at 1106 hours. Another house and two boobytraps were destroyed vic XT 614247. There was a warm fire site in the area. One male VCS was apprehended vic XT 614222 at 1614 hours. The suspect was seen in the company of a VC with a rifle; however, the VC escaped. At 1700 all elements returned to the Bn CP.</br>
                  <b>Company C</b>: At 0938 hours Co C began its movement to Area RAVEN (Obj 6) searching along Axis LISA to areas 5, 12, 13 and 4. Enroute, at 1013 hours, an element found a 55 gallon drum of motor oil, civilian manufactured ("Shell"), in a U.S. type drum marked "Gasoline" vic XT 622268. Also found in the area were a trail with fresh footprints and one booby trapped CBU bomb. A squad size assembly area was found and destroyed vic XT 623260 (1128 hours). The area appeared to have been used three days prior. At 1239 hours a large bunker-tunnel complex was found and destroyed in a heavily booby trapped area vic XT623256. After the completion of its mission the company returned to the battalion CP (1800 hours).</br>
                  <b>Recon Platoon</b>: The platoon departed the battalion CP at 0932 hours and moved to Area RAVEN (Obj 6). At 1105 hours two bunkers (one steel reinforced) were found and destroyed vic XT 620274. Also destroyed were a 30 meter tunnel and one 250 pound bomb. The area was found to be heavily booby trapped and miscellaneous hand grenade parts, 20-30 pounds of lead rods and 200 pounds of polished rice were found in the vicinity. At 1203, in the same area, the platoon destroyed five hand grenades, two bunkers. During this period seven rifle grenades were fired into the area. There were no casualties. The search continued with the platoon destroying three more steel and log reinforced bunkers and eight hand grenades. 300 pounds of polished rice was also found. At 1638 hours the platoon returned to the battalion perimeter.
                </div>
                <div>
                  <u>6 August 1966</u>: No ambushes were established. The battalion, participating in a 2d Bde "seal and search" operation, established blocking positions vicinity grid squares XT 5821, 5921, 5820, 5920, 5819 and 5919. The operation was completed at 1540 hours. All units closed Cu Chi base camp at 1753 hours.</br>
                  <b>Company A</b>: The company departed the battalion perimeter at 0500 hours and moved to vic XT 594212 into blocking positions. S&D operations were conducted in the immediate area. The blocks remained in position until 1540 hours, at which time the company began the extraction of downed vehicles and returned to base camp at Cu Chi.</br>
                  <b>Company B</b>: Departing the battalion perimeter at 0500 hours, the company moved to vic XT 594220 and established blocking positions. The company then conducted S&D operations in the immediate area. Throughout the day numerous civilians were questioned and released. At 1540 hours the company consolidated and returned to Cu Chi base camp.</br>
                  <b>Company C</b>: The company departed the battalion perimeter at 0500 hours and moved to vic XT  585119, established blocking positions and conducted S&D operations in the area. Several civilians were detained and questioned; however, all were released. At 1540 hours the company departed the area and returned to base camp.</br>
                  <b>Recon Platoon</b>: The platoon established a POW Collecting Point vic XT 591210. Throughout the day several civilians that were detained were questioned and released. At 1540 hours the platoon departed, escorting the battalion CP and all downed APC's to Cu Chi.</br>
                  <b>Battalion Command Group</b>: The battalion command group departed the area at 0500 hours following the major elements displacing to XT 595203. Enroute, at 0545 hours, the battalion operations APC hit an AT mine vic XT 573232. The vehicle was damaged beyond repair and later destroyed by demolitions. Three WIA were sustained, of which two were treated and returned to duty and one was evacuated. At 1410 hours the battalion C&C helicopter was knocked to the ground by a mine as it lifted over a bamboo hedgerow approximately 15 feet in the air (XT 577231). The aircraft was extensively damaged and later extracted. In the crash the Battalion Commander, Battalion S3 and the pilot were wounded. The Battalion Commander was evacuated and the Battalion S# and the pilot were treated and returned to duty. The Hvy Mort Plat traveled with the battalion command group and had one APC that hit an AT mine vic XT 575228 at 1205 hours. The vehicle was extensively damaged and four WIA were sustained. Three were evacuated; one was treated and returned to duty.
                </div>
            </div>
            <div class="aarTopic">
              12. <span class="topicTitle">RESULTS</span>:
              <ol type="a">
                <li>
                  a. Friendly: 610 personnel started the operation and 582 completed, of which 39 were WIA returned to duty (Incl 7, Casualty List). Nine carriers, M113; one carrier, CP M577; and one mortar carrier, M106,  were damaged by AT mines. Five carriers were repaired in the field and continued the operation. The M577 was unrecoverable and destroyed in place. All others were evacuated to base camp. One helicopter, OH 23, was severly damaged by a mine blast and also evacuated to base camp.
                </li>
                <li>
                  b. Enemy
                  <ol>
                    <li>
                      (1) Killed: 6 VC (4 BC, 2 est).
                    </li>
                    <li>
                      (2) Captured: 13 VC; 4 Chicom carbines; 1 U.S. rifle; 1 U.S. SMG; 1 French SMG; 2 Russian assault rifles; 1 rifle (Mauser); 30,000 rounds cal .30 Chicom Ammunition; 1 82mm mortar sight; 1 flare pistol; 3 VC gas masks; 275 tons of rice; 5 bolts cloth; 55 gallons engine oil; Miscellaneous medical supplies; Miscellaneous maps and documents; Training manuals.
                    </li>
                    <li>
                      (3) Destroyed: 1 rifle; 6 AT mines; 69 hand grenades; 11 CBU bomblets (booby trapped); 17 rifle grenades; 5 AP mines; 1 claymore weapon;  18 105mm rounds rigged for command detonation; 2 105mm rounds (booby trapped); 1 155mm round (booby trapped); 7 WP grenades;  2 250 pound bombs (booby trapped); 6 81mm rounds; 2073 rounds small arms ammunition; 500 rounds 7.62mm ammunition; 2 base camps; 43 bunkers; 17 tunnels; 8 houses; 64 VC uniforms; 1 sampan; 400 pounds explosives; Miscellaneous VC field equipment.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              13. <span class="topicTitle">ADMINISTRATIVE MATTERS</span>:
              <div>
                <ol type="a">
                  <li>
                    a. Supplies: All resupply was accomplished by UH1D helicopters flying from base camp at Cu Chi to the forward CP area.
                  </li>
                  <li>
                    b. Maintenance: The battalion started the operation at full strength on track vehicles. During the operation, nine (9) carriers, M113, were damaged by AT mines. Five of these vehicles were repaired in the field and continued the operation. The other four (4) carriers were towed back to base camp where they were declared not economically repairable. The location of the mines were as follows: XT 707103, XT 642228, XT 642229 and XT 654281. Twenty carriers, M113, became inoperable due to mechanical failures. Twelve (12) were repaired in the field and continued the operation. The other eight (8) were evacuated to base camp for repairs. Seven of these vehicles were repaired and returned to the battalion before the termination of the operation. Seven of the mechanical failures were due to the separation of the idler arm from the hull of the vehicle, the repir of which was accomplished by the Bn Maint Plat. One (1) M577, command post carrier, was damaged bt an AT mine at XT 591312. This vehicle was so badly damaged that it was destroyed in place. Three other M577's had mechanical failures, Two of which were repaired in the field. One was returned to base camp where it was repaired and joined the battalion before the termination of the operation. One M106, mortar carrier, was damaged by an AT mine at XT 575228. It was later declared not economically repairable. Two M106's had mechanical failures; however, they were repaired in the field and completed the operation.
                  </li>
                  <li>
                    c. Treatment of Casualties, Evacuation and Hospitalization: A total of 101 patients were seen and treated in the battalion forward aid station during the operation. Of the 101, 53 were due to disease-induced sickness, of which two were evacuated; 27 were injured as a result of hostile action, and 21 received non-battle injuries. Of those injured, 15 were evacuated and 33 were returned to duty. Evacuation of the wounded was good throughout the operation, but in one case a patient was evacuated on an urgent basis when it could have been considered priority. Because of the difficulty in finding suitable landing zones, two seriously wounded patients had to be evacuated to the forward aid station.
                  </li>
                  <li>
                    d. Transportation: The battalion consumed a total of 10,410 gallons of MOGAS during the operation.
                  </li>
                  <li>
                    e. Communications: During Operation KOKO HEAD, 23 July 1966 through 6 August 1966, the primary means of communications used by this unit was FM radio. Wire nets were used at all times in the CP area and when the companies were in defensive posture during hours of darkness. At this time, FM radios remained on listening silence. The battalion maintained FM contact with brigade. The battalion RATT radio was damaged enroute to the objective area and could no be repaired at the field locations. There was no wire communication between battalion and brigade because of the distance involved.
                  </li>
                </ol>
              </div>
            </div>
            <div class="aarTopic">
              14. <span class="topicTitle">SPECIAL EQUIPMENT AND TECHNIQUES</span>: None
            </div>
            <div class="aarTopic">
              15. <span class="topicTitle">COMMANDER ANALYSIS</span>:
              <ol type="a">
                <li>
                  a. Mechanized battalions can move at will throughout the VC controlled areas opposed by only minor harassment by the VC.
                </li>
                <li>
                  Some of the assets (ie, shock action, mobility, ect.) of a mechanized battalion are dissipated when the battalion is employed in a purely dismounted operations such as detailed searching of tunnels, bunkers and trench systems.
                </li>
              </ol>
            </div>
            <div class="aarTopic">
              16. <span class="topicTitle">RECOMMENDATIONS</span>:
              <ol type="a">
                <li>
                  A rifle company should be attached to a mechanized battalion to perform purely dismounted tasks and/or:
                </li>
                <li>
                  An infantry battalion be given the mission to follow and support the mechanized battalion, thereby allowing exploitation of the mechanized advantages and strengths.
                </li>
              </ol>
              <div>
                FOR THE COMMANDER:<br>
                JAMES G. ANDRESS<br>
                Capt, Inf
              </div>
            </div>

            <div class="casSegment">
              <div class="casListTitle">
                CASUALTIES SUSTAINED DURING OPERATION <!-- CLEAN SWEEP -->
              </div>
              <div class="casUnitList columnNames">
                <div>NAME</div><div>RANK & MOS</div><div>TYPE</div>
              </div>
              <div class="casUnitName">Co A</div>
              <div class="casUnitList">
                <div>GOMES, George</div>
                <div></div>
                <div>WIA</div>
                <div>JONES, Joe</div>
                <div></div>
                <div>WIA</div>
                <div>JEROLDS, James P</div>
                <div></div>
                <div>WIA</div>
                <div>CAGNASSO, Fred</div>
                <div></div>
                <div>WIA</div>
                <div>MCNATT, Roy N</div>
                <div></div>
                <div>WIA</div>
                <div>QUINN, Joseph B</div>
                <div></div>
                <div>WIA</div>
                <div>SNODGRASS, Delio S</div>
                <div></div>
                <div>WIA</div>
                <div>ARNOLD, Jerry V</div>
                <div></div>
                <div>WIA</div>
                <div>JUNGKURTH, Doyle W</div>
                <div></div>
                <div>WIA</div>
                <div>MILLER, Wayne K</div>
                <div></div>
                <div>WIA</div>
                <div>BARTA, Thomas J</div>
                <div></div>
                <div>WIA</div>
                <div>STEPHEN, Harold</div>
                <div></div>
                <div>WIA</div>
                <div>STEVENSON, Jasper D</div>
                <div></div>
                <div>WIA</div>
                <div>ALEXANDER, George W Jr</div>
                <div></div>
                <div>WIA</div>
                <div>BRANCH, Walter A</div>
                <div></div>
                <div>WIA</div>
                <div>MICKENS, Joseph B</div>
                <div></div>
                <div>WIA</div>
                <div>GARCES-MORALES, Rafael</div>
                <div></div>
                <div>WIA</div>
                <div>DICKIE, James A</div>
                <div></div>
                <div>WIA</div>
                <div>GREER, Barry J</div>
                <div></div>
                <div>WIA</div>
                <div>DIXON, Claude Jr</div>
                <div></div>
                <div>WIA</div>
                <div>SLOAN, Joseph A</div>
                <div></div>
                <div>WIA</div>
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Charlie" && $one_casualty->last_name == "Gray")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div></div>
                <div>KIA</div>
                <!-- GRAY, Charlie	Co A 	KIA -->
                <div>OWENS, Johnny</div>
                <div></div>
                <div>WIA</div>
              </div>
              <div class="casUnitName">Co B</div>
              <div class="casUnitList">
                <div>BALLWIN, Donald R</div>
                <div></div>
                <div>WIA</div>
                <div>JAGOSZ, Theodore</div>
                <div></div>
                <div>WIA</div>
                <div>LOVE, Roy E</div>
                <div></div>
                <div>WIA</div>
                <div>LAMONTAGNE, Roland G</div>
                <div></div>
                <div>WIA</div>
                <div>JACKSON, David</div>
                <div></div>
                <div>WIA</div>
                <div>FAYNE, Ronald</div>
                <div></div>
                <div>WIA</div>
                <div>WINE, James</div>
                <div></div>
                <div>WIA</div>
              </div>
              <div class="casUnitName">Co C</div>
              <div class="casUnitList">
                <div>ARCHULETTA, Loy E</div>
                <div></div>
                <div>WIA</div>
                <div>MILLER, Ronald</div>
                <div></div>
                <div>WIA</div>
                <div>KERR, KELSEY J</div>
                <div></div>
                <div>WIA</div>
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Joe" && $one_casualty->last_name == "Hill")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div></div>
                <div>KIA</div>
                <!-- HILL, Joe L	Co C	DOW -->
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Rodney" && $one_casualty->last_name == "Casselman")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div></div>
                <div>KIA</div>
                <!-- CASSELMAN, Rodney W	Co C	KIA -->
                <div>GENTLE, John C</div>
                <div></div>
                <div>WIA</div>
                <div>TURNER, Curtis C</div>
                <div></div>
                <div>WIA</div>
                <div>REEVES, Don D</div>
                <div></div>
                <div>WIA</div>
                <div>WALKER, Louis E</div>
                <div></div>
                <div>WIA</div>
                <div>PRITCHARD, Larry</div>
                <div></div>
                <div>WIA</div>
                <div>SAUNDERS, David</div>
                <div></div>
                <div>WIA</div>
              </div>
              <div class="casUnitName">Co HHC</div>
              <div class="casUnitList">
                <div>POWELL, Jackie A</div>
                <div></div>
                <div>WIA</div>
                <div>AKERS, Harvey B</div>
                <div></div>
                <div>WIA</div>
                <div>GERARD, Jacques</div>
                <div></div>
                <div>WIA</div>
                <div>CALDWELL, Bobby J</div>
                <div></div>
                <div>WIA</div>
                <div>ASHMORE, James C</div>
                <div></div>
                <div>WIA</div>
                <div>MCQUINN, James E</div>
                <div></div>
                <div>WIA</div>
                <div>BIEVINS, Bill H</div>
                <div></div>
                <div>WIA</div>
                <div>HARVEY, Raymond S</div>
                <div></div>
                <div>WIA</div>
                <div>GOODE, Harvy A</div>
                <div></div>
                <div>WIA</div>
                <div>MORGAN, Thomas</div>
                <div></div>
                <div>WIA</div>
                <div>PAYAN, Alexander</div>
                <div></div>
                <div>WIA</div>
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Richard" && $one_casualty->last_name == "Willett")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div></div>
                <div>KIA</div>
                <!-- WILLETT, Richard J 	HHC	DOW -->
                <div>JONES, Milton Y</div>
                <div></div>
                <div>WIA</div>
                <div>PARKER, Robert F</div>
                <div></div>
                <div>WIA</div>
                <div>ATWOOD, Terrence W</div>
                <div></div>
                <div>WIA</div>
                <div>
                  @foreach ($all_casualties as $one_casualty)
                    @if ($one_casualty->first_name == "Robbin" && $one_casualty->last_name == "Goodwin")
                      <a href="{{ url('/memorials/casualties?id='.$one_casualty->id) }}">{{ strtoupper($one_casualty->last_name) }}, {{ $one_casualty->first_name }}</a>
                    @endif
                  @endforeach
                </div>
                <div></div>
                <div>KIA</div>
                <!-- GOODWIN, Robbin	HHC 	KIA -->
                <div>PELT, Malcom D</div>
                <div></div>
                <div>WIA</div>
                <div>DIAZ, Victor F</div>
                <div></div>
                <div>WIA</div>
                <div>JORDAN, Herman</div>
                <div></div>
                <div>WIA</div>
                <div>GRAHEK, David J</div>
                <div></div>
                <div>WIA</div>
                <div>DUBUQUE, Harry S</div>
                <div></div>
                <div>WIA</div>
                <div>BERGLUND, Warren</div>
                <div></div>
                <div>WIA</div>
                <div>WALTON, Richard</div>
                <div></div>
                <div>WIA</div>
                <div>ROMAN, William S</div>
                <div></div>
                <div>WIA</div>
                <div>MCCARTNEY, Samuel</div>
                <div></div>
                <div>WIA</div>
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
