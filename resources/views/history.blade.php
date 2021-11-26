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

@section('history_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar">
        <div data-button="warOf1812">
          <div data-button="warOf1812">War of 1812</div>
        </div>
        <div data-button="mexicanWar">
          <div data-button="mexicanWar">Mexican War</div>
        </div>
        <div data-button="civilWar">
          <div data-button="civilWar">Civil War</div>
        </div>
        <div data-button="indianWars">
          <div data-button="indianWars">Indian Wars</div>
        </div>
        <div data-button="territorialOccupation">
          <div data-button="territorialOccupation">Territorial Occupation</div>
        </div>
        <div data-button="WWIandDepression">
          <div data-button="WWIandDepression">WWI & Great Depression</div>
        </div>
        <div data-button="WWII">
          <div data-button="WWII">World War II</div>
        </div>
        <div data-button="koreanWar">
          <div data-button="koreanWar">Korean War</div>
        </div>
        <div data-button="1954to1966">
          <div data-button="1954to1966">1954 to 1966</div>
        </div>
        <div data-button="vietnamWar">
          <div data-button="vietnamWar">Vietnam War</div>
        </div>
        <div data-button="1975to2001">
          <div data-button="1975to2001">1975 to 2001</div>
        </div>
        <div data-button="warOnTerror">
          <div data-button="warOnTerror">Global War On Terrorism</div>
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
      <div class="timeSegment firstTimeSegment warOf1812Segment" data-section="warOf1812">
        <div class="segmentTitle"><u>War of 1812</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <div class="segmentImg imgLeft imgSmall" style="background-image:url('../../../images/history/BattleofLundysLane.jpg')">
            </div>
            <p>
              At the onset of the War of 1812, the 5th Infantry was assigned to Winder’s Brigade, U.S. Army of the South.  In the spring of 1813, Winder’s troops marched north to Ontario, Canada to exploit the British defeat at Fort George.  British regulars executed a daring nighttime attack on the brigade forcing it to withdraw to Fort George.  The 5th Infantry participated in the successful defense of Plattsburgh, New York in September, 1814 and then marched north to the Niagara frontier.  The regiment’s victorious assault at Cook’s Mills, on 19 October, 1814 was the last encounter between regular forces in Canada.
            </p>
            <p>
              On July 25, 1814, at the Battle of Lundy’s Lane, Colonel James Miller, commander of the 21st Infantry Regiment, was tasked with the near-suicidal mission of assaulting a British battery of seven cannons which were dominating the battlefield.  In response to his orders, Miller replied, “I’ll try, sir!” When they reached the top of the hill, the Americans delivered a volley that swept away every member of the gun crews and then held the hill against four vicious counterattacks by the British.  The Battle of Lundy’s Lane was the first major American victory against British regulars in that war. Three years later, the men and honors of the 21st Infantry were absorbed by the 5th Infantry, James Miller assumed command of the regiment, and his response of “I’ll try, sir” became the regimental motto.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="http://bobcat.ws/lundys-lane-history.html">
                  <li>The Battle of Lundy's Lane</li>
                </a>
                <a href="http://bobcat.ws/lundys-lane-july-25-1814---2014.html">
                  <li>200 Year Celebration at Lundy's Lane</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://en.wikipedia.org/wiki/James_Miller_(general)" target="_blank">
                  <li>Colonel James Miller</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment mexicanWarSegment" data-section="mexicanWar">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Mexican War</u></div>
          <div class="segmentWords">
            <div class="segmentImg imgRight imgSmall" style="background-image:url('../../../images/history/Palo_Alto_nebel.jpg')">
            </div>
            <p>
              After the war, the Fifth Infantry was sent to the northwest frontier to help explore and protect the massive new territory acquired before and after the War of 1812.  It built Fort Snelling, participated in the Black Hawk War and suffered through the cold of twenty-six Michigan winters.  In 1845, the regiment was ordered to march south to Corpus Christi, Texas to join Zachary Taylor’s “Army of Observation.”
            </p>
            <p>
              On April 24, 1846, Taylor’s Army crossed the Rio Grande and pushed the Mexican Army deep into Mexico.  The 5th Infantry earned battle streamers for Palo Alto, Resaca De La Palma and Monterey with Taylor. In January 1847, the regiment was transferred to Winfield Scott’s Army and participated in the amphibious attack on Vera Cruz. From there, they advanced and captured Churubusco, Molino del Rey, Chapultepec and finally, Mexico City.
            </p>
            <p>
              Following the Mexican War, the Fifth Infantry Regiment returned to the frontier.  It was involved in exploration of the southwest and the protection of settlements and travelers in the territories that would become Oklahoma, Arkansas, Texas and New Mexico.  In 1857, the 5th was ordered to Florida to coax the Seminoles out of their swampy stronghold.  That mission was diverted when the regiment was ordered to proceed to Utah to deal with the Mormons, who were accused of denying the sovereignty of the United States and inciting Indian attacks on travelers.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment civilWarSegment" data-section="civilWar">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Civil War</u></div>
          <div class="segmentWords">
            <div class="segmentImg imgLeft imgExtraSmall" style="background-image:url('../../../images/history/Burning-of-Wagon-Train-at-Apache-Canyon.jpg')">
            </div>
            <p>
              When the Civil War began in 1861, the 5th Infantry was distributed among several posts in New Mexico.  Twenty-two officers of the regiment went east to serve in the Union Army and nine officers of the regiment resigned their commissions and joined the Confederates.  The remaining officers and men remained in New Mexico under the overall command of Brigadier General Edward Canby.
            </p>
            <p>
              In February, 1862, a column of Texas volunteers commanded by General Henry Sibley, invaded New Mexico.  Sibley’s plan was to capture California and divert its gold to the Confederate treasury.  The 5th Infantry and other units from the Department of New Mexico clashed with Sibley’s column at Valverde, Glorieta Pass and Peralta.  Defeated, the Texans withdrew to San Antonio.  The 5th Infantry remained quietly on the frontier, its boredom broken periodically by expeditions against bands of marauding Navajo Indians.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://en.wikipedia.org/wiki/New_Mexico_Campaign" target="_blank">
                  <li>New Mexico Campaign</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment indianWarSegment" data-section="indianWars">
        <div class="segmentTitle"><u>Indian Wars</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              In October, 1868, 5th Infantry Headquarters was established at Ft. Riley, Kansas.  The companies were scattered among several Kansas posts.  The following March, Colonel Nelson Miles assumed command of the regiment.
            </p>
            <div class="segmentImg imgRight imgSmall" style="background-image:url('../../../images/history/Montana_1879.jpg')">
            </div>
            <p>
              The Indian tribes in the southwest had become bolder and stronger while the U.S. government had been preoccupied with the Civil War. Following a number of hostile actions by Kiowa and Southern Cheyenne warriors, Miles’ 5th Infantry, accompanied by the 10th and 14th Cavalry Regiments, skirmished with the hostile Indians in the Texas Panhandle.  Both tribes surrendered in early 1875.
            </p>
            <p>
              In 1876, the 5th Infantry was dispatched to Southeastern Montana in the wake of Custer’s defeat at the Little Big Horn River.  The regiment built Ft. Keogh near the confluence of the Yellowstone and Tongue Rivers and proceeded to wage year-round campaigns against the local Indians, primarily Sioux and Northern Cheyenne, who were enraged by white prospectors who had violated a treaty and trespassed on their sacred lands.  The regiment prevailed in battles at Cedar Creek, Muddy Creek and the Wolf Mountains and brought an end to the Sioux War.
            </p>
            <p>
              In September 1877, Chief Joseph and his Nez Perce people from the Pacific Northwest tried to escape to Canada to avoid being deported to Oklahoma.  The 5th Infantry caught up with the Nez Perce about thirty miles south of the Canadian border in the Bear Paw Mountains.  After a very bloody battle, Chief Joseph surrendered to Colonel Miles.  When Chief Sitting Bull surrendered at Fort Buford in 1881, hostilities virtually ceased in Montana. The 5th Infantry remained at Fort Keogh until it was transferred to the Texas border in May, 1888.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="http://www.pbs.org/weta/thewest/people/a_c/chiefjoseph.htm" target="_blank">
                  <li>Chief Joseph</li>
                </a>
                <a href="https://en.wikipedia.org/wiki/Battle_of_Bear_Paw" target="_blank">
                  <li>Battle of Bear Paw Mountain</li>
                </a>
                <a href="http://www.pbs.org/weta/thewest/people/a_c/crazyhorse.htm" target="_blank">
                  <li>Chief Crazy Horse</li>
                </a>
                <a href="https://en.wikipedia.org/wiki/Battle_of_Cedar_Creek_(1876)" target="_blank">
                  <li>Battle of Cedar Creek</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment occupationSegment" data-section="territorialOccupation">
        <div class="segmentTitle"><u>Territorial Occupation</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              In 1891, most of the regiment was shifted from Texas to posts in Florida and Alabama.  They were there on February 15, 1898 when the battleship USS Maine blew up in the harbor at Havana, Cuba.  Congress, assuming that the destruction of the Maine had been an act of sabotage, declared war against Spain on April 25. Many of the 5th Infantry officers who had led the regiment during the Indian Wars were promoted and assumed commands of state volunteer units that joined in the invasion of Cuba.  The four-month-long fight was over, however, before the 5th Infantry reached Havana.  It was deployed there as an occupation force for nearly two years.
            </p>
            <p>
              The United States acquired Guam, Puerto Rico and the Philippines as a result of the Spanish-American War.  Filipino nationalists, who had been fighting against Spain for their independence felt that the war had resulted in no more than a change in colonial masters, so they turned their guns on the U.S troops that had been sent to occupy the islands.  The 5th Infantry arrived in the Philippines in September, 1900 to help pacify the insurrectionists.  It was assigned to Abra Province in Northern Luzon.
            </p>
            <p>
              During three years of campaigning in the Philippines, the 5th Infantry was involved in 38 minor engagements while marching an estimated distance of 15,426 miles.  Eighty-six enlisted men perished, six in battle and most of the rest from cholera.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment ww1Segment" data-section="WWIandDepression">
        <div class="segmentTitle"><u>World War I & Great Depression</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <div class="segmentImg imgRight imgExtraSmall" style="background-image:url('../../../images/history/PanamaCanal.jpg')">
            </div>
            <p>
              The outbreak of World War I in 1914 caused so much apprehension over the security of the newly-opened Panama Canal that the Panama garrison was heavily augmented.   The 5th Infantry arrived there in November, 1914.  The regiment returned home in the summer of 1918 to prepare for shipment to France, a deployment that was delayed until the fall of 1919, months after the armistice had been signed in Western Europe.  The 5th Infantry was garrisoned near Andernach in western Germany until re-deployment to Portland, Maine in March, 1922.
            </p>
            <p>
              During the Great Depression of the 1930’s, the 5th Infantry and other army units were called upon to organize, equip and lead the Civilian Conservation Corps, an economic stimulus program that maintained and improved many of the nation’s parks.  The pay of the officers and men was reduced by 10% to help balance the national budget.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment ww2Segment" data-section="WWII">
        <div class="segmentTitle"><u>World War II</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/Hist_5th_INFANTRY_REGIMENT.png')">
            </div>
            <p>
              The German invasion of Poland in 1939 focused attention upon America’s defenses, particularly in the Caribbean area.  On September 8, 1939, the 5th Infantry was once more ordered to return to the Canal Zone. The regiment served there until early 1943, then was garrisoned temporarily at Camp Van Dorn, Mississippi, and finally departed from there that June, to help form the 71st Infantry Division at Fort Carson, Colorado.
            </p>
            <p>
              The 71st Division commenced combat operations in the Vosges Mountains in Alsace-Lorraine on March 11, 1945.  Attacking eastward into Germany, they breached the Siegfried Line, crossed the Rhine at Worms, and drove as far northeast as the town of Fulda.  On April 1, the 71st Division was shifted to Patton’s 3rd Army. During much of April, riflemen from the 5th engaged in fire fights with elements of Germany’s 6th SS Mountain Division.
            </p>
            <p>
              On May 2, the 5th Infantry crossed the Inn River into Austria and attacked due east with the rest of XII U.S. Army Corps.  Three days later, the regiment stumbled upon Gunskirchen Lager, a concentration camp for 18,000 prisoners of the Nazis.  Companies K and M remained at the camp to supervise the feeding, hospitalization and burial of the inmates, while most of the 5th Infantry pushed on toward Steyer to link-up with the Russians.  When the war ended on May 7, the 5th had completed its 775-mile push through Western Europe and was farther east than any other Allied unit.
            </p>
            <p>
              Following the German surrender, the 5th Infantry was shifted to Augsberg, Germany and became part of the Army of Occupation.  The regiment was de-activated on November 16, 1946.  Depending upon their rotation point totals, the men were either transferred to the 16th Infantry or shipped home to Fort Dix for discharge.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="{{ url('/history/album/ww2') }}">
                  <li>Photo Album</li>
                </a>
                <a href="http://bobcat.ws/ww2history.htm">
                  <li>History of Company C</li>
                </a>
                <a href="http://bobcat.ws/recollections-by-ponder.html">
                  <li>Recollections by Lew Ponder</li>
                </a>
                <a href="http://bobcat.ws/5th-infantry-chorus.html">
                  <li>5th Infantry Soldier Chorus</li>
                </a>
                <a href="http://bobcat.ws/The%20Soldier%20Chorus.PDF">
                  <li>"The Soldier Chorus" by Robert Peck</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://www.worldcat.org/title/riding-point-for-patton-the-fifth-infantry-regiment-in-world-war-ii/oclc/16635072" target="_blank">
                  <li>BOOK: "Riding Point For Patton" by Gerald McMahon</li>
                </a>
                <a href="https://www.worldcat.org/title/my-brother-hail-and-farewell/oclc/260222720&referer=brief_results" target="_blank">
                  <li>BOOK: "My Brother, Hail And Fairwell" by Edward Zebrowski</li>
                </a>
                <a href="http://lylestorey.tripod.com/index.html" target="_blank">
                  <li>71st Infantry Division</li>
                </a>
                <a href="https://remember.org/full_version.html" target="_blank">
                  <li>"The 71st Came to Gunskirchen Lager"</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment koreanSegment" data-section="koreanWar">
        <div class="segmentTitle"><u>Korean War</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              After the defeat of Japan, the Korean Peninsula was divided at the 38th Parallel for the purpose of processing Japanese prisoners of war.  The Soviet Union was responsible for those prisoners north of the parallel and the United States assumed responsibility for those in the southern half of the country.  The intent, on the part of the United States, was not to divide Korea into two hostile camps.  The Soviets, however, took advantage of the situation, formed a North Korean Army and dragged North Korea into the Communist fold.  President Truman reacted by ordering the U.S. Army to form a small South Korean defense force and to leave a token American garrison to train and assist the South Koreans.  The 5thRegimental Combat Team was activated on January 1, 1949 for that purpose.  This re-incarnation of the 5th Infantry Regiment was composed of personnel and equipment transferred from the 7th Infantry Division.
            </p>
            <div class="segmentImg imgRight imgBig" style="background-image:url('../../../images/history/mortar_korea.jpg')">
            </div>
            <p>
              The severely under-strength 5th RCT was transferred to Schofield Barracks, Hawaii in June, 1949, where they spent the next year absorbing and training replacements.  On Saturday, June 24, 1950, the men were enjoying an evening in Honolulu when they were suddenly ordered to return to the base.  The North Korean Peoples’ Army had invaded South Korea.  The combat team was alerted for shipment to Korea.
            </p>
            <p>
              On August 1, the 5th RCT was the first reinforcing unit to reach Korea from an area outside of Japan.  The three under-strength infantry divisions that had been rushed from Japan had already suffered 6000 casualties.  An enemy drive on Pusan at the southern end of the Pusan Perimeter, compelled Eighth Army Commander, General Walton Walker to assign the combat team to that critical area.  Third Battalion, 5th Infantry, received a Presidential Unit Citation, when it helped blunt an enemy  attack proceeding west along the Chinju-Masan corridor.
            </p>
            <p>
              On 18 September, the 5th RCT was assigned to the 24th Infantry Division to replace the 34th Infantry.  The 34th had gone into action in July with 2000 men.  Two months later, its 184 survivors were parceled out to the 24th ID’s remaining regiments, the 19th and the 21st.
            </p>
            <p>
              Following the amphibious landing of the 7th Infantry Division and the Marines at Inchon, the 5th RCT captured the city of Waegwan, crossed the Naktong River and pushed north as part of a general breakout from the Pusan Perimeter.  The combat team crossed into North Korea on 17 October.  When they reached Sinanju near the North Korean-Manchurian border, they met no resistance.  Many soldiers thought that the war was over but, by November 1, thousands of Chinese troops had entered the conflict.  Nevertheless, General MacArthur told the 8th Army to continue attacking until it reached the Yalu River.  The Communist Chinese Forces launched a counter-offensive on November 25 and a battered Eighth Army commenced the longest retreat in the history of the United States Army.  The 5th RCT finally halted and dug in at Changhowan-ni.  At that point, the regiment had withdrawn 300 miles.
            </p>
            <p>
              On 29 January, the Eighth Army resumed the attack northward.  The 5th RCT crossed the Han River, bypassed Seoul and reached Line Utah on April 20.  They were preparing to attack north to Kumwha on the following day, when the Chinese unleashed another offensive.  As the combat team withdrew, it was flanked, on both sides, by the CCF 60th Division and suffered heavy losses.  Despite this victory at Pisi-gol, the morale of the Chinese Army cracked by the end of April.  Seventy thousand Chinese soldiers were killed or wounded during their 1951 offensive.
            </p>
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/rifle_PLT_korea.jpg')">
            </div>
            <p>
              In June, 1951, the 5th RCT relieved the 32nd Infantry on Line Wyoming, near the 38th Parallel and conducted close-in and security patrolling.  In October, the combat team moved forward, wresting the high ground south of Kumsong from five Chinese battalions and dug in on Line Missouri.  In January, 1952, the 5th RCT was released from the 24th Infantry Division and passed to the control of the 40th Infantry Division, California National Guard. First and Second Battalions were sent to help quell the riots at the POW camp on the island of Koje Do and Third Battalion was sent to Sangdong to provide security for the tungsten mines.
            </p>
            <p>
              On June 19, 1952, the 5th RCT returned to combat when it rejoined the 25th Infantry Division and relieved the 14th Infantry on the northern lip of the Punch Bowl, a portion of Line Minnesota in eastern Korea.  It devoted the next ten months to the nightly reconnaissance and ambush patrols that characterized the trench-warfare half of the Korean War.
            </p>
            <p>
              On April 19, 1953, the 5th RCT was released from operational control of the 45th Infantry Division, Oklahoma National Guard, and convoyed 120 miles to the west to join forces with the 3rd Infantry Division on Line Missouri near the village of Songnae-dong. They were placed on the line directly behind Outpost Harry, a critical hill coveted by the Chinese.
            </p>
            <p>
              On the night of June 12-13, three rifle platoons from Able Company and a machine gun section from Dog Company, were assigned to the observation post.  They held off repeated attacks by a reinforced regiment of Chinese.  The skill and bravery of these elements of 1st Battalion and the Forward Observer Team from the 555th FAB was recognized by the award of a second Presidential Unit Citation for the 5th Infantry.
            </p>
            <p>
              The 5th Infantry Regiment returned to eastern Korea and went into position on the left flank of the 45th Division on a ridgeline east of the Puk-han Valley.  The combat team was there when the armistice went into effect at 2030 hours on 27 July 1953.  The 5th Infantry and the 555th FAB pulled back to Chipo-ri, leaving the 72nd Combat Engineers behind to destroy the bunkers.
            </p>
          </div>
          <div class="segmentLinks">
            <div class="linkBox">
              <div class="linkTitle learnMore">LEARN MORE</div>
              <ul class="linkContent">
                <a href="{{ url('/history/album/korea') }}">
                  <li>Photo Album</li>
                </a>
                <a href="http://bobcat.ws/stuffelbeam.htm">
                  <li>Myron Stuffelbeam - 50th Year Recognition</li>
                </a>
                <a href="http://bobcat.ws/Co%20A%20Dist.%20Unit%20Cit.%20Korea.pdf">
                  <li>Distinguished Unit Citation</li>
                </a>
                <a href="http://bobcat.ws/million-dollar-hill.html">
                  <li>"Million Dollar Hill"</li>
                </a>
              </ul>
            </div>
            <div class="linkBox">
              <div class="linkTitle externalLink">EXTERNAL LINKS</div>
              <ul class="linkContent">
                <a href="https://www.amazon.com/exec/obidos/ASIN/1563115883/qid%3D975025740/104-0489905-1741534" target="_blank">
                  <li>BOOK: "Hills of Sacrifice: The 5th RCT in Korea" by Michael P. Slater</li>
                </a>
                <a href="https://heritagebooks.com/products/101-k3487" target="_blank">
                  <li>BOOK: "Thirty-Six Points: A Novel of the Korean War" by Samuel P. Kier</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="timeSegment preVietnamSegment" data-section="1954to1966">
        <div class="segmentTitle"><u>1954 to 1966</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              Between October and early December, 1954, the 5th RCT redeployed, in segments, to Ft. Lewis, Washington.  The 5th Infantry was re-assigned to the 71st Infantry Division, its World War II parent organization.  It prepared for its next confrontation with a Communist enemy, presumably the Soviet Union.
            </p>
            <p>
              In August, 1956, the 5th Infantry was released from the 71st Infantry Division and the personnel and equipment at Fort Lewis were used to re-activate the 22nd Infantry Regiment.  The 61st Infantry Regiment at Fort Carson was re-designated the 5th Infantry Regiment.  This incarnation of the 5th soon exchanged stations with the 39th Infantry of the 9th Infantry Division in Germany.
            </p>
            <p>
              In September, 1956, the Army proceeded to re-organize its divisions pentomically, replacing the basic three infantry regiments with five battle groups.  First Battalion, 5th Infantry and a company from 2nd Battalion, 5th Infantry were combined to form 1st Battle Group, 5th Infantry, 8th Infantry Division.  This battle group shipped home from Germany to Fort Riley, Kansas, in September, 1958 to become part of the 1st Infantry Division.
            </p>
            <p>
              In the early 60’s, as the army began to be drawn into the troubles in Vietnam, the pentomic organization was dropped in favor of returning to a modified triangular division of three brigades of three infantry battalions each.  The 1st Battle Group, 5th Infantry was released from the 1st Infantry Division on February 1, 1963, re-designated 1st Battalion, 5th Infantry, and assigned to the 2nd Brigade, 25th Infantry Division at Schofield Barracks in Hawaii.
            </p>
            <p>
              At the time of re-organization, the battalion received sixty-eight M-113 armored personnel carriers from the motor pool.  The new mechanized battalion was comprised of three rifle companies and a headquarters company that included a headquarters contingent plus reconnaissance and medical platoons.
            </p>
          </div>

        </div>
      </div>
      <div class="timeSegment vietnameSegment" data-section="vietnamWar">
        <div class="segmentTitle"><u>Vietnam War</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              When 1st Battalion, 5th Infantry was sent to Vietnam in January, 1966, it became one of the few mechanized units to serve in the war.  During the next three months, the 2nd Brigade, 25th Infantry Division, including 1st Battalion, 5th Infantry, was engaged in continuous ground combat against the Viet Cong to secure a base of operations for itself and the rest of the 25th Infantry Division near Tan An Hoi in the Cu Chi District of Vietnam.  During that period, the brigade, through reconnaissance in force,   ambush, counter-ambush and reaction missions, killed 449 Viet Cong, severely disrupted    insurgent activities and discredited the Viet Cong in the eyes of the local populace.  The 2nd Brigade, including the 1st Battalion, 5th Infantry, received a Valorous Unit Award for the Battle for Cu Chi.
            </p>
            <p>
              In January, 1967, the battalion shifted operations from Cu Chi to Tay Ninh Province, some 48 kilometers to the northwest.  Tay Ninh was an exit point for the Ho Chi Minh Trail which was used by the enemy to transport troops, weapons, and military equipment from North Vietnam through Laos and Cambodia and from there to points further south.  The 25thDivision was placed there to plug the hole.  The 5th Infantry participated in daily search and destroy operations in an effort to interdict the movement of supplies to the Saigon area.  When the Viet Cong celebrated Tet 1968 by increasing offensive operations around Saigon, the battalion was shifted south to deal with troubles in the Boi Loi, Ho Bo Woods and Filhol Plantation area.
            </p>
            <div class="segmentImg imgRight imgBig" style="background-image:url('../../../images/history/ben_cui.jpg')">
            </div>
            <p>
              In early August, 1968, 1st Battalion, 5th Infantry moved north and joined the rest of the 2nd Brigade at Dau Tieng.  On the morning of August 21, Charlie Company, flanked by Recon Platoon, departed Dau Tieng to reconnoiter the Ben Cui Rubber Plantation.  Shortly after 11:00 A.M, the two lead platoons came under heavy mortar, rocket-propelled grenade, machine gun and automatic weapons fire.  Company C had run into 4th Battalion of the Phu Loi (VC) Regiment. Gunship support was requested.
            </p>
            <p>
              As they waited for air support, the men of Charlie Company held off the numerically superior enemy force with small arms, LAW anti-tank weapons and their APC-mounted .50 caliber machine guns.  A light fire (helicopter) team did not arrive until 12:01.  Meanwhile, Charlie Company had killed one hundred and eighty-two Viet Cong at a cost of 17 dead and twenty-one wounded Bobcats.  The 1st   Battalion, 5th Infantry received a Presidential Unit Citation for the period 18 August through 20 September, 1968, the third such award in the history of the regiment.
            </p>
            <p>
              In November, 1968, the battalion returned to the Boi Loi Woods area and for the next ten months was engaged in stiff fighting near the VC controlled village of Trung Lap.  At this point in the war, encounters with North Vietnamese Army troops increased.
            </p>
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/vietnam_2.jpeg')">
            </div>
            <p>
              North Vietnamese and Viet Cong units had maintained base areas in eastern Cambodia, a self-proclaimed neutral country, since the mid-1960s.  In April, 1970, President Nixon approved a limited incursion into Cambodia.  First Brigade of the 25th Infantry Division, including 1st Battalion, 5th Infantry, crossed the river into Cambodia on May 7.  The thirty-day incursion into Cambodia, code-named Operation Bold Lancer, resulted in the killing of 11, 349 Communist troops and the capture of 600 supply caches.  The battalion suffered 19 killed and 93 wounded.  The 5th Infantry completed its combat mission in Vietnam near Xuan Loc, the provincial capital of Long Khanh Province, and began re-deployment to Hawaii on April 30, 1971.
            </p>
            <p>
              While the 1st Battalion, 5th Infantry was battling Communist forces near Tay Ninh, Vietnam, in June, 1968, the 3rdBattalion, 5th Infantry was re-activated at Fort Kobbe in the Panama Canal Zone to replace the 3rd Battalion, 508th Airborne Infantry.  Third Battalion was composed of one company of airborne infantry, two regular rifle companies, and a combat support company.  Third battalion folded its flag in 1987 when the 508th Infantry was reactivated just in time for Operation Just Cause, the 1989 invasion of Panama.
            </p>
            <p>
              Following the Vietnam War, the Secretary of the Army directed that the 25th Division’s two brigades be brought up to full strength to increase its capability as a strategic reserve for the Pacific area.  First Battalion, 5th Infantry became part of 1st Brigade, 25th Infantry Division at Schofield Barracks.
            </p>
          </div>
        </div>
        <div class="segmentLinks">
          <div class="linkBox">
            <div class="linkTitle learnMore">LEARN MORE</div>
            <ul class="linkContent">
              <a href="http://bobcat.ws/after-action-reports.html">
                <li>After Action Reports (AAR)</li>
              </a>
              <li>"In The Vietnam War 1966 - 1971" by Larry Hadzim</li>
              <div class="subChapters">
                <a href="{{ url('/history/vietnam-history/preface') }}">
                  <div>+ Preface</div>
                </a>
                <a href="{{ url('/history/vietnam-history/1966') }}">
                  <div>+ 1966</div>
                </a>
                <div>+ 1967</div>
                <div>+ 1968</div>
                <div>+ 1969</div>
                <div>+ 1970</div>
                <div>+ Maps</div>
                <div>+ Glossary</div>
              </div>
              <a href="{{ url('/history/topic/ben-cui-battle') }}">
                <li>Ben Cui Battle</li>
              </a>
              <a href="{{ url('/history/topic/michelin-rubber-plant-battle') }}">
                <li>Michelin Rubber Plant Battle</li>
              </a>
              <a href="{{ url('/history/topic/the-rifle-and-the-myth') }}">
                <li>The Rifle And The Myth</li>
              </a>
              <!-- <a href="{{ url('/history/album/vietnam') }}">
                <li>Photo Album</li>
              </a> -->
            </ul>
          </div>
          <div class="linkBox">
            <div class="linkTitle externalLink">EXTERNAL LINKS</div>
            <ul class="linkContent">
              <a href="https://www.scribd.com/document/422797331/bbc-andrew-h-anderson-2?secret_password=AjFxkwUDjtyACCV89zZ4#from_embed" target="_blank">
                <li>"The Human Toll of the Battle of Ben Cui” by MG-R Andrew H. Anderson</li>
              </a>
              <a href="https://www.scribd.com/document/422800015/ben-cui-1?secret_password=vY8QsdJxa70BgjM0yA3i#from_embed" target="_blank">
                <li>"Bobcats in the Ben Cui" by MAJ-R Bob Wright</li>
              </a>
            </ul>
          </div>
        </div>
      </div>
      <div class="timeSegment southKoreaSegment" data-section="1975to2001">
        <div class="segmentTitle"><u>1975 to 2001</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              By April of 1975, over 100,000 refugees had fled South Vietnam as the Communist takeover became more imminent. The 5th Infantry was sent to Orote Point, Guam to participate in Operation New Life.  There they joined forces with Army logistical and medical units and Navy Seabees to erect and operate a refugee reception camp. During its sixty days on Guam, the task force erected tent cities, provided camp security, administered immunizations, and guided refugees through the registration process.
            </p>
            <p>
              The mission of 1st Battalion, 5th Infantry Regiment, for the next 29 years was to maintain the highest possible level of combat readiness for deployment anywhere in the Pacific region.  The battalion was air-lifted to South Korea annually, between 1976 and 1993, to participate in Operation Team Spirit, rehearsing a quick reaction to possible threat from North Korea.  The Bobcats continue to travel to Australia to collaborate with the Aussies and to the Philippines for Balikatan, an annual exercise with the Philippine Army.
            </p>
            <p>
              Between 1985 and 1987, the Army declared the 6th  Infantry, 10th Mountain, and 25th Infantry Divisions “light” infantry divisions.  As a consequence, on 16 January 1986, the 1st Battalion, 5th Infantry became the 3rd Battalion, 21stInfantry.  There would be no active element of the 5th Infantry for the next sixteen months.
            </p>
            <p>
              Tensions continued on the Korean Peninsula.  By 1987, ninety U.S. soldiers had died in combat in Korea since the implementation of the 1953 truce accord.  On 24 April 1987, the 1st Battalion, 5th Infantry reappeared when the 1st Battalion, 31st Infantry was re-flagged.  The battalion, part of the 3rd Brigade, 2nd Infantry Division was initially garrisoned at Camp Howze, forty miles north of Seoul.  The new Bobcats were, once again, equipped with M-113A3 personnel carriers.  When the 2nd Division moved further north to Camp Hovey in 1990, the battalion turned in its “tracks” for Bradley Fighting Vehicles.
            </p>
            <p>
              In August, 1995, the 1st Battalion, 9th Infantry at Ft. Lewis, Washington exchanged flags with the 1st Battalion, 5th Infantry at Camp Howze.  That same month, the 2nd Battalion, 5th Infantry was re-activated at Schofield Barracks.  The two 5th Infantry battalions were assigned to the 1st and 3rd Brigades of the 25th Infantry Division, respectively.  In 1997, 1stBattalion was involved in training exercises to test the new digital communications equipment that is currently used by the U.S. Army.  The battalion received the Army Superior Unit Award for its contribution to the modernization of light infantry capabilities.  First Battalion subsequently served as peacekeepers on the Sinai Peninsula from January through June of 2000.
            </p>
          </div>
        </div>
      </div>
      <div class="timeSegment gwotSegment" data-section="warOnTerror">
        <div class="segmentTitle"><u>Global War On Terrorism</u></div>
        <div class="segmentContent">
          <div class="segmentWords">
            <p>
              World peace was shattered, however, on September 11, 2001, when Saudi terrorists, linked to Osama bin Laden’s al Qaeda terrorist network, hijacked four American airliners and killed more than three thousand Americans.  On the 28th of November, soldiers from the 10th Mountain Division moved into Afghanistan with the intent of destroying terrorist camps and infrastructure, capture al Qaeda leaders, and overthrow the Taliban regime. The 10th Mountain was soon joined by elements of the 101st Airborne and the 75th Rangers.
            </p>
            <p>
              The active battalions of the 5th Infantry at Fort Lewis and Schofield Barracks began preparing for deployment. Starting in the spring of 2002, the three infantry brigades of the 25th Infantry Division began converting from light infantry brigades to Stryker brigades, using the new wheeled vehicle that serves as the army’s primary weapons platform.
            </p>
            <p>
              Third Brigade, 25th Infantry Division, including the 2nd Battalion, 5th Infantry, was deployed to Afghanistan in April, 2004.  Its mission was to deny sanctuary to the terrorists and to create the conditions for security, stability and reconstruction in the war-torn land.  The battalion began its tour of duty in Ghazni Province but soon moved to Tirin Kot in Oruzgan Province.  As in Vietnam, the components of battalion were usually dispersed.
            </p>
            <div class="segmentImg imgRight imgBig" style="background-image:url('../../../images/history/afghanistan105.jpg')">
            </div>
            <p>
              The first major task was to curtail efforts by the Taliban and other anti-coalition militia to disrupt the Afghan presidential election scheduled for October 9, 2004.  Once the election was over, the operational emphasis was shifted to furnishing support for Afghan reconstruction and the training of Afghan security forces.  There were also plenty of natural disasters in the mountainous country to keep the men of the battalion busy.  Following Second Battalion’s return to Schofield Barracks in the spring of 2005, it was awarded the Meritorious Unit Commendation for its exemplary service in Afghanistan. Second Battalion folded its flag on 16 November 2005 when it became 3rd Squadron, 4th  Cavalry Regiment.
            </p>
            <p>
              Six months before the 2nd Battalion returned from Afghanistan, the 1st Battalion departed Ft. Lewis for Iraq.  It relieved 1st Battalion, 23rd Infantry at Camp Taji, northwest of Baghdad just in time to participate in the second battle for Fallujah.
            </p>
            <p>
              On 11 November, the battalion was ordered to move north to Mosul, Iraq’s second largest city to deal with increased insurgent activity.  The Bobcats were assigned responsibility for a wide area that extended to the outlying villages and hamlets to the south and west of the city.
            </p>
            <p>
              The search for information about the local insurgents was the first crucial challenge faced by the battalion.  It initially relied on mass arrests, random traffic stops, and intelligence gathered from Iraqis who frequently wanted revenge for the murder of a family member.  An Information Operations Team spread word of the battalion’s successes, emphasized the damage created by the terrorists and sought to mitigate any damage done by the coalition forces.  A Civil Affairs Team went from village to village talking to the tribal and religious leaders, determining their major needs and drafting projects to be completed with U.S. funds.
            </p>
            <div class="segmentImg imgLeft imgBig" style="background-image:url('../../../images/history/iraq_MAR2005.jpeg')">
            </div>
            <p>
              Throughout January, 2005, the battalion interdicted insurgents attempting to enter or leave the city as it prepared for the Iraqi national elections.  Election Day, in late January, ended without a major incident.  Iraqis had been able to vote for the first time in 50 years and they began to demonstrate a change in sentiment.  An increased number of citizens began pointing out the homes and safe houses of enemy combatants.
            </p>
            <p>
              Following the election, there was a shift in focus as the battalion dedicated the bulk of its time to making the Iraqi security forces more successful.  Given the high degree of enemy threat in Mosul, most of the training had to be on-the-job, conducted during combat patrols.  These patrols discovered many large weapons caches and many types of IED’s.  These daily encounters continued right up until September 11, when the Bobcats yielded control of their area of operations to the 4th Battalion, 23rd Infantry Tomahawks.
            </p>
            <p>
              First Brigade, 25th Infantry Division, including 1st Battalion, 5th Infantry received the Valorous Unit Award for its fight to secure Mosul. On June 1, 2006, the 1st Brigade, 25th Infantry Division was de-activated.  First Battalion, 5th Infantry became 1st Squadron, 2nd Cavalry.
            </p>
            <p>
              In early December, 2006, the 172nd Stryker Brigade, another recipient of the Valorous Unit Award, returned to Fort Wainwright, Alaska after an extended tour in Iraq.  Ten days later, the brigade’s 1st Battalion was re-flagged 1st Battalion, 5th Infantry, 1st Stryker Brigade, 25th Infantry Division.  The battalion immediately tackled the job of repairing and retrofitting the unit’s 289 Stryker vehicles that had survived sixteen months of combat in Iraq.  While training for its next deployment to the Middle East, the 5th Infantry devoted some time to its continuing obligation to provide security for the Pacific region.  It participated in exercises held in Australia and the Philippines.
            </p>
            <p>
              In September, 2008, 1st Battalion was given a brief indoctrination to desert warfare at Fort Irwin, California and then proceeded to Iraq.  It relieved the 2nd Cavalry Regiment in Diyala Province, a farming area northeast of Baghdad.  The battalion was tasked with clearing and stabilizing Baqubah, the provincial capital.  The Bobcats discovered many caches of arms and munitions, eliminated a significant number of insurgents and accomplished its objectives during the first forty-five days of the operation.
            </p>
            <p>
              On August 16, 2009, 2nd Battalion, 5th Infantry was re-activated at Fort Bliss, Texas.  The battalion is part of the 3rd Infantry Brigade, 1st Armored Division.  Following more than a year of training in the mountainous terrain of New Mexico and West Texas, 2nd Battalion is combat ready and destined to earn further honors for America’s third oldest active infantry regiment.
            </p>
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
      <div class="author">
        <div>
          Author: Sam Kier
        </div>
        <div>
          Date: Veteran’s Day, 2010
        </div>
      </div>
    </div>
  </div>
  @include ('footer.content')
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
        <div>
          <div>1967</div>
        </div>
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

        <!-- <div data-button="jan">
          <div data-button="jan">January</div>
        </div>
        <div data-button="feb">
          <div data-button="feb">February</div>
        </div>
        <div data-button="mar">
          <div data-button="mar">March</div>
        </div>
        <div data-button="apr">
          <div data-button="apr">April</div>
        </div>
        <div data-button="may">
          <div data-button="may">May</div>
        </div>
        <div data-button="jun">
          <div data-button="jun">June</div>
        </div>
        <div data-button="jul">
          <div data-button="jul">July</div>
        </div>
        <div data-button="aug">
          <div data-button="aug">August</div>
        </div>
        <div data-button="sep">
          <div data-button="sep">September</div>
        </div>
        <div data-button="oct">
          <div data-button="oct">October</div>
        </div>
        <div data-button="nov">
          <div data-button="nov">November</div>
        </div>
        <div data-button="dec">
          <div data-button="dec">December</div>
        </div> -->
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
        <!-- <a href="{{ url('/history/vietnam-history/preface') }}">
          <div>
            <div>Preface</div>
          </div>
        </a>
        <a href="{{ url('/history/vietnam-history/1966') }}">
          <div>
            <div>1966</div>
          </div>
        </a>
        <div>
          <div>1967</div>
        </div>
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
        </div> -->

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
          <div class="segmentTitle"><u>1966</u></div>
          <div class="segmentWords">
            <div class="oneMonth" data-section="jan">JANUARY</div>
            <p>
              During the latter part of 1965, the 25th Infantry Division was alerted to deploy to Viet Nam. On December 24, 1965, the advance party for the 25th Division arrived in the Republic of South Viet Nam. It was decided that the 25th Division's 3rd Brigade would be deployed to Pleiku in the central part of South Viet Nam. The 2nd Brigade and the remainder of the division were to be deployed to Cu Chi District of Hau Nghia Province, located between the City of Saigon and the Cambodian Border.
            </p>
            <p>
              The main body of the 2nd Brigade Task Force, 25th Infantry Division, arrived at Vung Tau, South Viet Nam on January 18, 1966. The 2nd Brigade Command Post was initially located in the area of Saigon University. Company B, 1st Bn 503 Bde, 173rd Abn Div was under the operational control of the 2nd Brigade Task Force and supplied the perimeter security for the Task Force. The 2nd Bn 27th Infantry supplied 9 rifle squads to Co B, 1/503rd Inf to reinforce the perimeter security of the staging area. The 1st Bn 27th Infantry and the 1st Bn (M) 5th Infantry were on standby to furnish 3 rifle squads each to Co B, 1/503 rd Infantry, should they be needed. Controlled issue of ammunition for the 2nd Brigade Task Force was to be maintained. Only those personnel occupying perimeter defensive positions and ambush sites were supposed to be issued ammunition.
            </p>
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
              During January 1966, two Bobcats died in Viet Nam. They were: Armando Tesillo and Dan R Shearin . They were the second and third Bobcats to die in Vietnam. The first was Jerry W. Osborn who was killed on April 1, 1965 while TDY from the 1st Bn(M) 5th Infantry as a helicopter door gunner.
            </p>
            <b>Map 2 and Map 3, 1966 Operations Maps.</b>
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
            <b>Map 4 Cu Chi Base Camp and the "Filhol."</b>
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
            <b>
              The Rifle and the Myth: Congressional Sub-Committee held hearings on the problem in 1967</br>
              Map 5    Northern Ho Bo Woods and Southern Ho Bo</br>
              Map 6    Northern Filhol and Southern Ho Bo.
            </b>
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
                <li>ONE whose name is unknown to us who are writing this work.</li>
              </ul>
            </p>
            <b>
              1. Donald Ray Johnson</br>
              2.  John Parnella</br>
              Map 7    Trang Bang and Go Dau Ha.</br>
              Map 8    Trang Bang north to Suoi Cao.</br>
            </b>
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
            <b>
              Map 9 Bao Trai area.
            </b>
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
              During July 1966, eight Bobcats died in Viet Nam. They were: David L. Berry; James X. Gilch ; Richard D. Gill Jr. ; Samuel G. Harris; Leo E. Hinterlong ; Wilberto C. Sanchez; Larry Van Clief ; and Charlie Gray.
            </p>
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
            <b>Map 10  Dong Hoa area.</b>
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
              During August 1966, six Bobcats died in Viet Nam. They were: Robbin A. Goodwin; Rodney W. Casselman; Joe L. Hill; Richard J. Willett; Steve W. Harris ; and Robert A. Schmid.
            </p>
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
              During September 1966, seventeen Bobcats died in Viet Nam. They were: Earl E. Irving Jr.; Rolando L. Soliz; Billy J. Dailey ; James E. Miller; Gary A. Barnard; Gary R. Dopp; Roy D. Hutting; Ernest R. Martie; Terry L. Pundsack; Robert M. Waters; Walter Williams Jr.; Charles M. Centeno; Thomas A. Lowden;Thomas J. Ontiveros; Ralph G. Till ; Terry L. Snyder and ONE whose name is unknown to us writing this report.
            </p>
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
            <b>Map 11 Tan Phu Trung.</b>
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
              <li>TWO whose names are unknown to us who are writing this work</li>
            </ul>
            <b>1. Thomas William London</b></br>
            <b>2. Jimmy Doyle Phipps</b></br>
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
            <b>Map 12    Katum area.</b>
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
@stop

@section('vietnam_1967_content')
  <div class="mainBody">
    <div class="timelineBox">
      <div class="timelineBar">
        <div>
          <div>Preface</div>
        </div>
        <a href="{{ url('/history/vietnam-history/1966') }}">
          <div>
            <div>1966</div>
          </div>
        </a>
        <div>
          <div>1967</div>
        </div>
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
    <div class="allSegments">
      <div class="timeSegment vietnamLogSegment" data-section="civilWar">
        <div class="segmentContent">
          <div class="segmentTitle"><u>Civil War</u></div>
          <div class="segmentWords">

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
