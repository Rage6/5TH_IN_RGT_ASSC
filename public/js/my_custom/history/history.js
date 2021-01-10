console.log("The history page's JS is working");
$(() => {
  console.log("jQuery worked");
  $("[data-button]").click(()=>{
    let section = "[data-section=" + event.target.dataset.button + "]";
    let menuHeight = null;
    if (window.innerWidth <= 768) {
      menuHeight = $(".mainMenuTopBttn").outerHeight() + $(".timelineBox").outerHeight();
    } else {
      menuHeight = $(".mainMenuTopBttn").outerHeight();
    };
    let totalTop = $(section).offset().top - menuHeight;
    $("html,body").animate({
      scrollTop: totalTop
    }, 800);
  });

  let originalText = `
</span><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Now, in your position as
project manager for the M-16, were you charged with the responsibility
of purchasing ammunition, too?
<br>&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style3"> Colonel Yount:</span><span class="style2"> I was, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> For the Air Force, also?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Yes, sir.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What did you do when you
received that information?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> This was coordinated
through our four services' technical coordinating committee, </span>
<span class="style3">and we
agreed to go ahead and buy this for the Air Force</span><span class="style2">,
</span> <u><span class="style2">and subsequently
have it thoroughly tested</span></u><span class="style2">, and make a determination if we were going
to standardize it as part of our technical data package for the ammunition.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Did you have some reservations
about buying it and using it in 5.56 ammunition?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Reservations only to
the effect, sir, </span><span class="style3">we didn't have the test experience data and not because
we had any reservations it would be unsatisfactory. ........</span><span class="style2">
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> You did know that it would
speed up the cyclic rate?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style3">We did not. There
had never been any indication prior to the M-16 rifle, that this would
result in an increase in cyclic rate in a weapon.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Where was Mr. Stoner at
this time, the inventor of the weapon? Were you in contact with him?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: </span>
<span class="style2">Yes, indeed, right from
the beginning of the program.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span> <u>
<span class="style3">Did you talk to him
about the conversion and the use of ball propellant ammunition, in the
M-16?</span></u> <span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style4">No, not until
after it had actually been put into operation.</span> <span class="style2">
<br>............................
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Are you telling this committee
that you do not feel that the ball propellant has had any adverse effect
upon the operation of the M-16 rifle?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style3">I am telling the
committee that I had no evidence it has had any adverse effect</span><span class="style2">.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> You have had no evidence,
after being project manager from March of 1963 to June of 1967, that the
use of ball propellant ammunition is a part of your problem?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> It was a part of the
problem as far as cyclic rate is concerned.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> You said you had never
talked to Mr. Stoner, the inventor of the rifle.
<br>What would you say if I told you that, if you had checked with him,
he would have been greatly opposed to the change from IMR to ball propellants?
Would you think that would be a serious mistake, the inventor of the rifle,
one who obviously knows more about the rifle than anyone else?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> This would depend upon
his reasons, sir, for not wanting the ball propellant in the weapon.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What if I told you I ascertained
from Mr. Stoner, and he said ball propellant burns dirty, it leaves more
debris, it speeds up the cyclic rate of the weapon, and would increase
malfunctions?
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I would agree with him.
</span>
<b><span class="style2">However,
I want to qualify the statement there that this increase in malfunctions&nbsp;
would be primarily due, with all the evidence that we had, due</span><u><span class="style2"> to an
increase in cyclic rate; we have satisfied this requirement with the new
buffer. </span> </u></b><span class="style2">Therefore ---
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> You think you have satisfied
the requirement with a new buffer, anyway; is that correct?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That is correct.
</span><u><span class="style3">We
have no test evidence that would indicate otherwise</span></u><span class="style2">, sir.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> You don't think, the, Colonel,
the tests that are going on in Vietnam, are any evidence?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Oh, it definitely is
evidence; this is true. However, the type of controls there are much less
than the type we could maintain here in the United States.
<br>&nbsp;&nbsp;&nbsp;&nbsp; Mr. Ichord: Now, Colonel, you do have a considerable
number of guns in Vietnam with the new buffer, do you not?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Yes, sir.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Have you had any reports
of malfunctions, failures to extract when the new buffer has been used?
<br></span><b><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; Colonel Yount:
</span> <u><span class="style2">Not if the chamber has
been kept in proper serviceable condition</span></u><span class="style2">;</span></b><span class="style2"> no.
</span>
<p class="style2">..................
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> How many times did you go
to Vietnam as project manager of the M-16?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> One time in November
1966, sir.
<br>....
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> First of all, what was
the occasion for your going to South Vietnam in November 1966?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I had already dispatched
a team to Vietnam as a result of their request to assist ---
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Why did they request you
to go to South Vietnam?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp;&nbsp; Colonel Yount:</span>
<span class="style3">They said they were
having an undue rash of malfunctions</span><span class="style2">, and I volunteered at that time
to send a team of experts over there to help them ascertain the problems,
and put the weapons back into condition, if they would simply request that
I do so. ...............
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">You were head of the team?
<br>&nbsp;&nbsp;&nbsp;&nbsp; Colonel Yount: No, sir. Colonel Underwood
of my office was the head of the team.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> That was in ---
<br>&nbsp;&nbsp;&nbsp;&nbsp; Colonel Yount: He went over in October of
1966.&nbsp;
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> I see. Then you came later?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Right. He called me
on the telephone and told me that he would advise me to </span>
<span class="style3">come over here
and see this for myself, because when he came home he didn't think he would
be able to convince me of the conditions, </span><span class="style2">of the various things that
we would have to do in order to correct the situation.
</span>
<p class="style2">......................
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> So I did see a number
of weapons over in Vietnam. I talked with the various commanders, there,
including General Westmoreland, and was trying to get a feel on what was
happening over there. And it appeared at that time that the majority of
the trouble appeared to be </span><span class="style3">at least a lack of proper maintenance and
cleaning</span><span class="style2">. However, there were some product improvements that might
be made</span><span class="style3"> that would assist the soldiers in the field</span><span class="style2"> so that it would
not be so difficult to maintain.
</span>
<p><span class="style2">...............
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What units did you visit?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: It was Field Force II Headquarters</span><span class="style2">,
I believe Field Force II Headquarters, </span><span class="style3">the commander of the 25th Division</span><span class="style2">.
The commanding general of the aviation brigade; the 1st. Cav Division.
The 1st Infantry Division. And General Walt with the Marine Corps.
<br>.................
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Now, what recommendations
did you make?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> We had a considerable
number of investigations initiated. One, </span><span class="style3">looking into the finish of
the weapon. Two, looking into the chrome plating of the chambers</span><span class="style2">. I
started immediately on the repair parts situation, to emphasize advance
shipments in getting ready for the big push - we knew there was a big push
going to come as </span><span class="style3">a result of the maintenance emphasis in Vietnam
</span><span class="style2">-
cleaning materials, cleaning rods, </span><span class="style3">bayonets</span><span class="style2"> and all the repair parts.
We immediately ascertained their stock status, to get the jump on the demands
before they came in.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> You found a shortage of
cleaning materials, did you not, while you were there?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> While I was there, yes,
sir.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Go ahead with any statement
you wish to make.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That more or less covers
the major recommendations, sir.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> You didn't make any recommendations
- perhaps I don't understand you - you didn't make any recommendations
as to the change in the buffer at that time?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Not at that time, no,
sir. You see we had already picked up as a result of the SAWS program,
something that had caused an increased amount of malfunctions and we were
trying to determine the cause of the problem, </span><span class="style3">which resulted in the
change in the buffer</span><span class="style2">. It was not a result of the trip to Vietnam at
all.
<br>..................
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What is the most prevalent
malfunction that you will get because of the higher cyclic rate?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> The higher cyclic rate
results in a failure to feed, would be one, and, of course, this failure
of the bolt to stay to the rear after firing the last round is another.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">How about failure to
extract?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: I know of no significant
relationship between the two.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">No significant relationship
between the higher cyclic rate and the failure to extract?</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style3">That is correct.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Mr. Long, I think you had
a question?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> At this point I would like
to ask this: After the change was made from IMR propellant to the ball
propellant, did you have a conversation with Mr. Stoner in regard to the
change in the propellant? You indicated earlier that you didn't prior to
the change, but after the change.
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> After the change I had
discussed the ammunition with Mr. Stoner, but it was in regard to the applications
in the Stoner, rather than in the rifle, in his machinegun, and other Stoner
weapons, rather than in the M-16.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> You didn't discuss it with
him, with regard to the M-16?&nbsp;
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span> <b><span class="style2">Colonel Yount: I probably did there also,
</span>
<u><span class="style2">but
I don't recall the conversation.</span></u></b>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">You don't recall the reaction
he had?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I do not.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Is there any knowledge
of anyone in your command, or anyone in the Army talking to Mr. Stoner
about the conversion to ball propellant before the conversion was made?
<br>Colonel Yount: Not to my knowledge, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Would you state that the M-16 was
designed to use the IMR propellant, rather than the ball propellant?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I would say this: When the
weapon was designed, Mr. Stoner went to Remington Arms, and asked them
to manufacture ammunition for him. They utilized the propellant which was
designed to be used in the 7.62; namely, the IMR-4475, and that was used
in his weapon at the time.
<br></span><span class="style3">I do not believe there is a complete correlation that the weapon
was specifically designed to be utilized with that particular propellant.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> You don't think, then, possibly
he might have had in mind, or Remington might have had in mind, the fact
of the cyclic rate?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> The cyclic rate, yes.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> When they used the IMR propellant?
<br>Colonel Yount: No, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Did the Army stock ball propellant
solely on the basis of the Air Force test?
<br>Colonel Yount: No, sir; </span><span class="style3">we conducted extensive tests on our own,
after we had ammunition loaded with ball propellant, </span><u>
<span class="style2">and then finally
did approve it as an alternate propellant </span> </u><span class="style2">that could be used by the
contractor in any procurement.
</span>
<p class="style2">..................
<p><span class="style2">&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> Then in the change of powder
for the M-16, if you made any material changes in powder, you would also
need to consider the size of the gas ports, wouldn't you?
<br>Colonel Yount: Yes, sir. We did.
<br>.....
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray: </span>
<span class="style2">There is no doubt in your mind,
is
there, that for the same size port that you get a higher cyclic rate of
fire, for example, everything else being equal, with the ball than you
did the IMR?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That is tru
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">Now the modification for the new
buffer, et cetera, could you go back to the IMR?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Not at all. It has no relationship,
sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> You couldn't go back to it at all,
even if you had it?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> You are talking about going
back to the old 4475?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> That which was originally used
in the M-16.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That is correct. We have no
reason ever to go back to that old IMR-4475, sir.
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Could you go back?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Could we, and meet the velocity-pressure
relationships?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> With the new buffer?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> No, sir. The buffer has no
bearing on the velocity-pressure relationship, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> You couldn't use it now if you
had it, since you put in the new buffer?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That is not the point, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">If the gentleman will yield,
let me ask you a clarifying question there.
<br>I believe you didn't understand the question put to you by Mr. Long.
You slowed down the cyclic rate by approximately 100 with the buffer. We
have established in the record that IMR is not as fast as ball propellant.
Would you not say if you put in IMR, would you not slow it down approximately
another 100, or how does that work?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That would depend on the type
of IMR you are using. We have IMR propellants being utilized today, the
latest propellant, the 8208 ---
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: Do you have that in use now in Vietnam?
The committee has been advised there is no IMR propellant in Vietnam; somewhere
along the line I think we have that in the record that only ball propellant
is being used in Vietnam.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: I believe, sir, there has been
ammunition loaded with 8208M propellant, sent to Vietnam and I can verify
that with a gentleman in the audience, if I may.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> 5.56 ammunition?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> 5.56 ammunition.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">I would like for you to verify
it. It contradicts what information we have.</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> Mr. Spaulding, has the 8208
been shipped to Vietnam?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Spaulding:</span><span class="style2"> I believe the answer is the
ammunition has been in production about 6 months. The exact status in the
supply chain is difficult to establish on individual lots, but we would
presume in view of the shipping rate it has reached the theater.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span>
<span class="style3">Over 200 million rounds
have been produced to date.&nbsp;</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> That is in this 5.56 ammunition?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: </span>
<span class="style2">Yes, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> I thought you said IMR wasn't as
good? I withdraw that.
<br>What did you say? I thought you spoke very highly of ball propellant.
You did, didn't you?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span>
<span class="style3">It meets our specifications
better than any propellant we have at the present time.</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> Then if that is true,
</span> <u><span class="style2">why did
you send the 200 million IMR over there?</span></u>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: </span>
<span class="style2">It is also meeting the specifications,
sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> I must be confused. I must have
misunderstood you. Will this IMR lower or increase the cyclic rate over
the ball?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span>
<span class="style3">It will probably lower
the cyclic rate somewhere between 30 and 100 rounds per minute, sir.</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Miley:</span><span class="style2"> I wonder if I could help out
a little bit here?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray: I hope somebody does.</span><span class="style2">
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; General Miley:</span><span class="style2"> The older version of IMR and
the new version of IMR are the difficulty. I am not an expert, but I have
been doing a monthly report for the Chief of Staff. Let me explain as I
understand it. We would like to help you here. </span><span class="style3">The old IMR could not
be produced by Du Pont in the quantities required and meet the pressure-velocity
requirements of our specification on powder. Consequently, the Army shifted
to ball powder which could consistently and in large quantity meet the
ballistic requirements.</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray: </span>
<span class="style2">All right; fine. What is the difference
between it? It has nitrocellulose; is that correct?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Miley:</span><span class="style2"> Sir, you have lost me there
immediately.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray: I want somebody that knows more about
this than I do. I do know a little.</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Miley: </span>
<span class="style2">We will get a powder expert
up here. Let me finish. Then I will get out of here.
<br>Then Du Pont continued to persist in the development of IMR powder
and finally has produced </span> <b><span class="style2">not a new kind of powder, but a different IMR
powder with different characteristics </span> <u><span class="style2">which by and large with few exceptions
meets the specification</span></u></b><u><span class="style2">.</span></u><span class="style2"> So the Army buys the ammunition
for the 5.56 rifle and specifies the ballistic characteristics of the powder.
They don't care what kind of powder it is, as long as it meets the ballistics
specifications.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> There is a little more than ballistics;
isn't there something like carbon?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Miley: </span>
<span class="style2">Yes, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> What I don't understand is, we
established ball propellant increases the cyclic rate and the </span>
<span class="style3">fact that
it increases the cyclic rate does give you a problem.</span><span class="style2"> We have established
the fact that ball propellant burns dirtier, but still you say it is a
fine powder because it meets your specs. That is certainly coming down
from the top.
<br>You need good powder.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Miley</span><span class="style2">: Yes, sir.</span><span class="style3"> But</span><span class="style2"> the only</span><span class="style3">
powder in time</span><span class="style2"> of war that consistently met our requirement, the specification
was the ball powder. And as I say, Du Pont continued to perfect, to experiment
with their IMR powders, and finally came up with an IMR powder that also
meets the specification. </span><span class="style3">So now we have two powders that would</span><span class="style2">,
with some exceptions,</span><span class="style3"> meet the specification</span><span class="style2"> for the 5.56 bullet,
the 5.56 round.
<br>............
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Now, all the buffers haven't been
changed in all the weapons in Vietnam, have they?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> They have not, not all of
them.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> General, IMR is a little more expensive
than ball propellant, isn't it?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Originally the IMR was a little
more expensive because of the method of manufacture of the ball propellant
being one that you could utilize and reconstitute scrapped propellant.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> That is something I asked earlier.
you had a lot of older powder that was heavy in nitrocellulose, didn't
you?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> The theory here is, sir ---
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> Did you have it?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: </span>
<span class="style2">Yes, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> OK; fine. Then you could use that
cheaper. It was cheaper because there was a surplus that was of no value
unless it was changed, isn't that true?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount</span><span class="style2">: This is true, yes, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span>
<span class="style3">Isn't that really the reason
you stopped the IMR and went to this new ball propellant, because you -
I am not saying "you" personally - but that you could use the nitrocellulose
that they had in surplus? That is the reason they went to the ball propellant?</span><span class="style2">
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> I would like to ask Mr. Spaulding
of the Munitions Command who is an expert in propellants to answer that
question if he may.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What is the name, sir?&nbsp;
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Spaulding:</span><span class="style2"> Scott W. Spaulding. I am a
munitions engineer at the Headquarters of the U.S. Army Munitions Command.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Proceed.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Spaulding:</span><span class="style2"> I will try to answer the question
in this way:</span><span class="style3"> Large stocks of excess cannon propellants, which have been
used in the manufacture of ball propellants for many years, since the end
of the Second World War, have gone into ball propellants for use in the
caliber .30 carbine ammunition, the caliber .30 ammunition for the M-1
rifle and the Browning machineguns, into the 7.62 millimeter ammunition
for the M-14 rifle, the M-60 machinegun and the M-73. Large quantities
have gone into the 20 - millimeter ammunition for use in the Air Force
20-millimeter cannon, the Vulcan.</span> <span class="style2">
<br></span><span class="style3">The requirements in total which the addition of 5.56 propellants
added on top of the other cartridges I have named would have been - I can't
give you the precise figures, but it would have been relatively small,
looked at over the number of years.</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> You did go into it, though, didn't
you?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Spaulding:</span><span class="style2"> It goes into all ball propellants,
sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray: </span>
<span class="style2">But did not go into the IMR?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Spaulding:</span><span class="style2"> Du Pont has never been able
to use these stocks of obsolete propellant in the manufacture of IMR propellant.
Olin&nbsp; has been successful in using them, so they have gone into ball
propellants.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> And that is much cheaper, because
they have, you said, an obsolete&nbsp;&nbsp;&nbsp; stockpile of that. So
you do save money.
<br>I am not a Scotchman, I am not against saving money, but you do save
money by using that, don't you?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Spaulding:</span><span class="style2"> Yes, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> That is all.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> I want to get back to this buffer
modification.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> Yes, sir, Mr. Chairman. The
buffer actually fulfills several purposes. If I may, I have Mr. William
C. Davis here with me, the Chief of my Technical Division. I would like
for him to respond to this, if he may.
<br>&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Yes.
<br>&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> I am Davis, from Colonel Yount's technical
staff, sir. I think you could summarize the </span><span class="style3">buffer requirements</span><span class="style2">
in terms of four things; (1) it does slow the cyclic rate down as Colonel
Yount has mentioned.
<br>Second, it controls carrier rebound.
<br>Third, it avoids the failure of the ring springs.
<br>Fourth, it cushions the rear impact to prevent the premature engagement
of the bolt catch.
<br>.............
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Will this buffer be more apt
to slow your cyclic rate down on a forward motion, more so than the backward
motion?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Davis: </span>
<span class="style2">No, sir. The percentage of reduction
would be about the same in the recoil, or rearward motion as in the counter
recoil, or forward motion.
<br></span><span class="style3">In terms of absolute time, the effect is less on the recoil because
the recoil</span><span class="style2"> is at a more rapid rate.</span><span class="style3">
</span><span class="style2">In other words, the recoil
part of the cycle requires less total time.
</span>
<p><span class="style2">................
<br></span><span class="style3">&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> You could have slowed down the cyclic
rate by reducing the size of the gas port. Did you consider this as a possible
modification?
<br></span><span class="style3">&nbsp;&nbsp; Mr. Davis: </span>
<span class="style2">Yes, sir; that was considered, and it
would slow the cyclic rate. However, in general it is more advantageous
to reduce the rate by increasing the weight of the parts, than to subtract
energy from the system.
<br>Two&nbsp; basic ways to reduce the cyclic rate, subtract operating
energy from the cycle which may reduce reliability in adverse conditions;
or to increase the weight of the parts.
<br>&nbsp;&nbsp;&nbsp; ..............
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span> <b>
<span class="style2">Colonel, if you will keep
your seat there, sir, you </span> <u><span class="style2">encountered considerable extraction problems,
a lot of extraction problems </span> </u><span class="style2">were reported to you when you were in
South Vietnam, were there not?</span></b>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: That is correct, sir.</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> I would like to ask you, sir,</span><span class="style3">
how is this buffer going to help alleviate any of your extraction problems?</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span> <u>
<span class="style2">I don't think the change
in the buffer will have an appreciable effect on the extraction problem,
sir.</span></u><span class="style2"> I think there are two categories of malfunction,
</span> <u><span class="style2">one associated
with the condition of the chamber, the other associated with the cyclic
rate.</span></u>
<span class="style2">
<br>The remedies are different, of course. </span><span class="style3">THE EXTRACTION PROBLEM HAS
TO BE ATTACKED FROM THE STANDPOINT OF THE CHAMBER</span><span class="style2">. The cyclic rate
problems have to be attacked</span><span class="style3"> in some other way.&nbsp;</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">I don't know who I should ask
this: </span><span class="style3">HAVE YOU ATTACKED THE EXTRACTION PROBLEM, COLONEL?</span>
<span class="style2">
<br>Colonel Yount: We have asked Colt TO LOOK INTO THE FEASIBILITY&nbsp;
of chrome plating the chamber.&nbsp;
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Explain to the committee why
chrome plating the chamber will help improve it?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> The M-14 rifle does have a
chrome plated chamber, as well as a bore, and in this particular rifle
[M-16] it has a chrome-molyvanadium barrel, the best machinegun type barrel
steel there is. It does not have a plated chamber or bore.
<br>Initially in the program we did not feel that chrome plating was necessary
because of the good steel that was in his particular barrel. It was considered
as gold-plating, actually, at the time.
<br></span><span class="style3">However, since that time</span><span class="style2"> we feel that the corrosion resistance
of chromium plating within this chamber is a thing that is necessary </span>
<span class="style3">to
help us lick this extraction problem</span><span class="style2">, inasmuch as a chrome plated chamber
will not corrode, such as a plain chrome-moly-vanadium chamber would do.
<br>The contract modification has been made with the Colt Co. and the initial
production of barrels with chrome plated chambers is scheduled for the
month of August. However, the strike may have an effect on this.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Do we have any test rifles with
chrome chambers in them out in South Vietnam at the present time?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> There are a few; yes, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Were they there before you left
your duties as project manager?
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> They were; yes, sir. We received
no written reports on them. However, we did receive reports back that all
of those that were examined, they could find nothing wrong with the chambers,
and they were standing up excellently. And we have also conducted some
tests. The Air Force also has conducted tests on chrome plated chambers.
<br>............
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> It would assist in the extraction
problem, would it not, by using the gas that is remaining in the barrel?
Wouldn't that help you use some of the gas?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis: </span>
<span class="style2">I think it would probably not
give us any appreciable help in our extraction problem, </span>
<span class="style3">WHICH ARISES
FROM CORRODED OR RUSTY CHAMBERS.</span><span class="style2"> The cartridge remains tightly stuck
in many of these cases long after the gas pressure has subsided.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Mr. Davis, that is why we are
so much concerned about this dirty burning ammunition, ball propellant,
with ball propellant powder.
<br>.................
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span>
<span class="style3">You are sure that the chrome
plating is the way to get the extraction problem solved?</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Davis: Yes, sir. I think it is the most advantageous
course we have devised so far, .......</span> <span class="style2">
<br>...............
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Now the conversion was made from
IMR to ball propellant about 1963 - or do we have that date in our records?
We do, don't we, counsel?
<br>Mr. Morgan: We are not sure, Mr. Chairman. It was testified either
1963 or 1964.
<br>Do you know, Colonel Yount?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: </span>
<span class="style2">1964, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray: </span>
<span class="style2">Colonel, when did they make the
decision to go back to IMR, this new IMR that you mentioned, which I was
not aware of, because we did not find any in the theater when we were there.
Do you know what the time decision is on that?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style3">We have tried to keep two
different types of propellants authorized at all times for competitive
purposes, </span><span class="style2">whether it be IMR or ball propellant</span><span class="style3">.</span><span class="style2"> We have had
a series of propellants over the period of years trying to keep competition
alive. </span><span class="style3">The actual time, it was in February 1965, was it not, when we
went back out - I believe it was in February 1965 when we went back out,
then, to the field, when we found out this CR8136 was no longer satisfactory.</span>
<span class="style2">
<br></span><span class="style3">We then asked the propellant industry, Hercules, Olin Mathieson,
and Du Pont, to recommend to us their best approach to A NEW PROPELLANT
FOR THE M-16 SYSTEM.</span> <span class="style2">
<br>Out of this came Hercules submitting their HPC-11, and Olin Mathieson
had said they could not improve upon their WC-846.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> That was the original IMR?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That was the original ball
for 5.56 ammunition.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> The original ball?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That is correct. Du Pont then
submitted the 8208-M. In this test of course, we used the Wc-846 as a control.
It was not submitted as a new propellant. And the 8208-M did pass our ballistic
test and was authorized in the technical data package</span><span class="style3"> as an alternate
propellant, </span><span class="style2">and has been put into use since that time.
</span>
<p><span class="style3">The record shows here that we have produced almost 200 million rounds
to date, WHICH HAVE BEEN LOADED WITH THIS NEW IMR PROPELLANT.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Bray: </span>
<span class="style2">I hope it gets over to Vietnam;
it probably is by now.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">Right there at that point, now
- but that is designed for the new buffer; is it not?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style3">No, sir. It was not designed
for any new buffer. It was simply a propellant submitted by the propellant
industry for use in the weapon. They did not know anything about the buffer.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">Would it have any effect whether
it was used in the old buffer or the new buffer?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Yes; it would.
</span><span class="style3">The cyclic
rate would be different.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">Would it have an adverse effect
if placed in a weapon in Vietnam with the old buffer?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I don't feel that it would.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> You don't think it would cause
any more malfunctioning?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> No; I don't.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">It would affect the cyclic rate,
as Mr Davis pointed out.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> It will reduce the cyclic
rate about 30 to 100 rounds a minute when compared with the ball propellant,
and it has been thoroughly tested with both buffers.
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Long:</span><span class="style2"> It has been tested with both buffers?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: </span>
<span class="style2">With both buffers; yes, sir.
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Ichord:</span><span class="style2"> You definitely are going to have
a slower cyclic rate, aren't you, Colonel?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Yes, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Will you have an erratic situation.&nbsp;
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> You will have an erratic situation,
</span><span class="style3">but
it will not be perceptible to the firer.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> The marine can pick up a box, put
them in the magazine, and not have any worries, have complete confidence
that the gun will refire?
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Colonel Yount: THE PROBLEM IS THE USE OF THAT
PROPELLANT COUPLED WITH THE OLD BUFFER, WHERE HE MAY GET EXCESSIVE CYCLIC
RATES AND GET MALFUNCTIONS AS A RESULT OF THE HIGHER CYCLIC RATES.</span>
<span class="style2">
<br></span><span class="style3">..........</span> <span class="style2">
<br>(COMMITTEE TOOK A SHORT RECESS)
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> The committee will come to order.
<br></span><span class="style3">Gentlemen, I am very happy that we have established that we now
have IMR at least on its way to Vietnam, and, Mr. Counsel, I want you to
direct an inquiry to the proper people, and lets see where that IMR is
in South Vietnam.</span> <span class="style2">
<br>Here has been our problem, Colonel, as a committee: The M-16 was tested
and developed with IMR powder used in the 5.56 ammunition. It tested very
well. It showed up very well.
<br>Then, as you stated i</span><span class="style3">n October 1966, a cry went up from Vietnam
that they were having problems, very severe problems, with the rifle.</span><span class="style2">
</span>
<p><span class="style2">You sent your weapons team over there headed up by Colonel Underwood.
The situation was so bad, to paraphrase you, that he wanted you to come
over and take a look at what he saw, so you would understand the recommendations
that he made. </span><span class="style3">That was in October of 1966.</span>
<span class="style2">
<br>Then, when did the committee start getting the complaints, Mr. Counsel
-</span><span class="style3"> in April or May [1967]?</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> In April and May. [1967].
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> In April we started getting complaints
about excessive malfunctioning, and this time from the Marines, not from
the Army, but from the Marines.
<br></span><span class="style3">We have evidence and are advised by our experts to the effect that
THIS BALL PROPELLANT, which you apparently speak so highly of, does have
an adverse effect upon the operation of the M-16 rifle. It speeded up the
cyclic rate. It is dirtier burning.</span> <span class="style2">
<br></span><span class="style3">We found out that we only had ball propellant ammunition and naturally
we would be concerned about the conversion, and particularly so when we
are also advised THAT THE ARMY WAS CAUTIONED AGAINST MAKING THIS CHANGE
FROM IMR TO BALL PROPELLANT BECAUSE IT WOULD HAVE AN ADVERSE EFFECT ON
THE M-16 RIFLE.</span> <span class="style2">
<br>Naturally, we would be quite concerned.
<br>APPARENTLY YOU AREN'T SO CONCERNED. I don't understand your explanation.
I just haven't been able to understand you - but perhaps you haven't offered
the information in words that I can understand.
<br>Would you care to say something?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Could I ask a question right there,
Mr. Chairman?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Yes.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">I have just one question. Mr. Davis,
or Colonel Yount, the cyclic rate - doesn't the cyclic rate have any bearing
whatsoever on the extraction?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> No, sir. I should say there is
</span><span class="style3">no
significant</span><span class="style2"> relationship between cyclic rate and failures to extract.
They are separate problems.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long: </span>
<span class="style2">How about double feeding?
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Davis:</span><span class="style2"> Malfeeds of one kind and another
are related to cyclic rate, often related to cyclic rate; yes, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Absolutely no correlation between
the failure to extract and a high cyclic rate?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis: </span>
<span class="style2">That is correct, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Once again, just for the record,
why the buffer change, other than that pointed out by the colonel earlier?
I believe the colonel gave two reasons. One was to slow down the cyclic
rate, and the other was to have an increased buffer. Is that right, Colonel?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> That is correct. It does more
than that.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Long: </span>
<span class="style2">Why do you want to slow down the
cyclic rate?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: BECAUSE WE KNEW WHEN YOU FIRE
THE WEAPON IN EXCESS OF APPROXIMATELY 850 ROUNDS A MINUTE THAT WE DO RUN
INTO MALFUNCTIONS.&nbsp;</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Long:</span><span class="style2"> What are those malfunctions?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Usually the type that are
failure to feed properly, as Mr. Davis just mentioned, and also the failure
of the bolt to remain to the rear on the last round.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Go ahead, Mr. Chairman.
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Let me ask this question of Mr.
Davis. This is a question that I have put to one of our experts. Then the
new buffer would just be compensating for the increased cyclic rate caused
by the ball propellant powder?
<br>Reply: "Right; for the cyclic rate. It would help compensate on the
cyclic rate overall. But now if you don't change anything else your opening
cycle - in other words, the amount of time it takes to open the weapon
- will remain constant. In other words, the first part of the cycle, where
the bolt opens which is critical on the extraction of the weapon."
<br>That sounds very logical to me, Mr. Davis, that the opening cycle is
critical in extracting the cartridge from the chamber.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> Yes, sir. I agree that the initial
part of the recoil cycle </span><span class="style3">may</span><span class="style2"> be critical to failures to extract.
Is this question to address the relationship?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Yes.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span>
<span class="style3">If the problem is timing with
the weapon, that is, if it is opening too soon while the gas pressure is
still too high and for this reason and this reason only the cartridge fails
to extract, then this has a significant effect.</span> <span class="style2">
<br>However, if the cartridge case sticks in the chamber because the chamber
</span><span class="style3">IS
PITTED OR CORRODED</span><span class="style2">, remember that it continues to stick, even after
the rim has been sheared through and you have to take a cleaning rod to
knock it out.
<br>A matter of a fraction of a millisecond delay one way or another </span>
<span class="style3">will
not materially assist failures to extract which come from</span>
<span class="style3">RUSTY
OR CORRODED CHAMBERS</span><span class="style2">.&nbsp;
<br>In the particular instance of the M-16 rifle our analysis of the cause
of failures to extract is such that I think we would not gain very much
in that particular remedy by reducing the cyclic rate.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Of course now the ball propellant
does give you increased debris which will clog up the chamber and make
the cartridge difficult to extract, will it not?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span>
<span class="style3">WELL, OUR TESTS HAVE NOT REALLY
CONFIRMED THAT THIS IS TRUE. WE HAVE HAD A HIGHER MALFUNCTION RATE IN EXPERIMENTS
WITH BALL PROPELLANT, USUALLY, PERHAPS ALWAYS ASSOCIATED WITH THE HIGHER
CYCLIC RATE</span><span class="style2">. But the increased amount of visible fouling from ball
propellant, I must say we cannot correlate with any increase in the gun
malfunction rate.
<br>Mr. Ichord: Apparently we have some disagreement among experts. </span>
<span class="style3">The
only thing this committee wants, the only thing the full committee wants,
the only thing this Congress wants, and the only thing the American people
want is some way that we can correct these excessive malfunctions. They
cannot be tolerated, period. I don't care what you do to the gun.</span>
<span class="style2">
<br></span><span class="style3">AND I CANNOT BUY SOME OF THESE REPORTS THAT I HAVE SEEN THAT IT
IS ENTIRELY THE FAULT OF THE MEN OUT THERE IN THE FIELD NOT CLEANING THEIR
WEAPONS.</span> <span class="style2">
<br>You can't be wet nursing a weapon. You can't be turning around cleaning
that weapon when a Vietcong comes towards you. </span><span class="style3">And I know a man - when
his life depends on it - is not going to fail to clean his rifle. </span>
<span class="style2">He
should have gotten sufficient training to be able to clean his weapon.
The difficulties are not caused by insufficient cleaning and maintenance
of the weapon, alone.&nbsp;
</span>
<p class="style2">...................
<p class="style2">skip to page 4638:
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:
</span><span class="style2">Mr. Davis, I am getting back to
the failure to extract. Do you believe chroming the chamber will solve
the problem?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis: </span>
<span class="style2">Yes, sir. I think that will be
a very effective remedy.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span><span class="style2"> Do you think it is within our national
interest to solve this problem of failure to extract?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> Yes, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span>
<span class="style3">Where are you going to get these
chrome chambers?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span>
<span class="style3">From Colt, according to our
present contract.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Long:</span>
<span class="style3">Colt is on strike. You can't
get any there.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr Davis:</span>
<span class="style3">Yes, sir. I am afraid I am not
qualified to comment on that.</span> <span class="style2">
<br>..................
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> Mr. Davis, when was it first recommended
that you chrome plate the chamber?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> I don't have that date from memory,
sir, but I may have it in notes.
<br>Sir, my notes indicate that in November - October-November of 1966
reports from the WECOM maintenance team </span><span class="style3">were indicating a lack of maintenance
in the chamber </span><span class="style2">area which required some remedy if we could provide
it from the technical standpoint.
<br>In December of 1966 Colt did some in-house evaluation of chrome plated
chambers. I suppose that you could use the date November 1966 as the first
suggestion that the chrome-plated chamber should be </span><span class="style3">pursued.&nbsp;</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan: </span>
<span class="style2">When was it proposed as an RTA?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> I don't have that point in my
chronology, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> The information that I have is
that it was submitted by Colt on </span><span class="style3">April 17, 1967.</span><span class="style2"> When was it approved?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> The contract modification was
made on </span><span class="style3">May 26, 1967</span><span class="style2">, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> The testimony has been today
that the chrome-plated chambers are not scheduled to be in the production
rifles until some time in August, late August. Is that correct? Provided
they go back to work by then.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:</span><span class="style2"> Yes, sir.
</span>
<p class="style2">................
<br>skip to page 4641
<p><span class="style2">&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Ichord:
</span><span class="style2">Colonel Yount, you stated earlier
in response to a question of mine that you did not know, or I think you
said "We did not know that ball propellant -" I am back to ball propellant
again - "would cause a speedup in the M-16 cyclic rate at the time the
conversion was made."&nbsp;
<br>When did you first ascertain, or when did it first come to your knowledge
that the ball propellant would have that effect?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I do know in the qualification
at the time the propellants were qualified this increase in cyclic rate
</span><span class="style3">did
not appear as part of the test report</span><span class="style2">s.&nbsp; For that reason we did
not know it caused - in fact, it did not cause, according to the test reports,
an increase in this cyclic rate. When I actually became completely aware
of it I cannot pin down at the present time.
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Now, who is responsible for the
operation of the Frankford Arsenal?
<br>&nbsp;&nbsp;&nbsp; BMunitions Command, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> I am bringing to your attention
a report, </span><span class="style3">a test report of the Frankford Arsenal
</span><span class="style2">dated May 15, 1964.
This is the thing that concerns me in this whole investigation - sometimes
the left hand does not know what the right hand id doing.
<br></span><b><span class="style2">THIS REPORT ADVISED THAT A NEW EXTRUDED POWDER CALLED CR-8136 AND
WC-846 - THAT IS BALL TYPE - WENT OUT, ON PAGE 13, THAT THERE WAS NO SOUND
PORT PRESSURE CRITERIA FOR THE AR-15, THE M-16 RIFLE;&nbsp; THAT THE SLOWER
BURNING PROPELLANTS, CR-8136 AND WC-846, </span> <u><span class="style2">WOULD RESULT IN A SLIGHTLY
HIGHER PORT PRESSURE LEVEL</span></u><span class="style2"> THAN THAT OF IMR-4485.</span></b>
<span class="style2">
<br></span><span class="style3">THAT WAS MAY 15, 1964.</span>
<span class="style2">
<br>&nbsp;&nbsp; Did you have access to those reports as project manager,
or do they tell you what is going on at Frankford Arsenal?
<br>&nbsp;&nbsp;&nbsp; Yes, sir; I had access to these reports.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> I have another report, February
1966, Mr. Counsel. What report is this? Is it the information that I have,
dated </span><span class="style3">February 1966</span><span class="style2">, but it does not identify the report.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> That is another Frankford Arsenal
report, Mr. Chairman.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">I am sure that it is, because
most of this information is connected with the Frankford Arsenal.
<br>Now, you stated, Colonel, as I understand you, that this ball propellant
is fine. This is </span><span class="style3">February 5, 1966</span><span class="style2">. This is what the report says:
</span><span class="style3">ON
TEST OF THE 5.56 MILLIMETER CARTRIDGES IT WAS CONCLUDED THAT THE BALL PROPELLANT
GAVE HIGHER CYCLIC RATE, A GREATER AMOUNT OF MALFUNCTION RATE, GREATER
FOULING, MORE VARIATION IN VELOCITY DUE TO VARIATIONS IN HANDLING THAN
DID THE CR-8136 EXTRUDED POWDER.</span> <span class="style2">
<br>That is a comparative study.
<br>What about this new extruded powder that went to Vietnam? What is it?
Is it the old IMR-4475, or is it CR-8136?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Neither one, sir. They have
both gone by the board. It is a new 8208-M.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> 8208-M. Was that report brought
to your attention, and if so, when?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> I am sure that it was, because
I receive copies of all the memorandum reports from Frankford shortly after
they are written, sir.
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Ichord:</span>
<span class="style3">Did you take an action, or
did anyone in the Army take any action regarding ball propellant as a result
of this report? Is this perhaps why we now have the IMR going to Vietnam?</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Not because of that particular
report; no, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> I have other information here.
<br>Springfield Armory report on the test of the new buffer for M-16 rifles,
processed </span><span class="style3">April 6 to May 13, 1966, WHICH CONCLUDED THAT THE RIFLE PERFORMANCE
USING PROPOSED BUFFER AND BALL PROPELLANT IS NOT AS GOOD AS THE PAST PERFORMANCE
OF THE M-16 RIFLES USING STANDARD BUFFER AND IMR-8136 PROPELLANTS.</span>
<span class="style2">
<br>Again, this is why I question whether the buffer is really going to
get at the problem.
</span>
<p class="style2">I am not satisfied with your statement that this ball propellant is
so good. The only thing I got out of your statement was that it came out
in the specs&nbsp;&nbsp;&nbsp;&nbsp; and it meets the specs, someone up
above says "Lets meet the specs." That is what you do.
<p class="style2">.................
<p class="style2">Wednesday, July 26, 1967
<br>.............
<br>page 4664
<br>&nbsp;
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Vee:</span><span class="style2"> The WC-846 was made by only one company,
Olin Mathieson, at their East Alton plant. I am talking about the propellant,
not the ammunition. </span>
<p class="style2">....................
<br>page 4666
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">When the committee was in South
Vietnam we picked up about five cartons of ammunition - about how many
to the case?</span> <span class="style2">
<br>&nbsp;&nbsp;</span><span class="style3">&nbsp; Colonel Crossman:</span><span class="style2"> Twenty in a cardboard carton.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Twenty in a cardboard carton,
from five different manufacturers, of 5.56 millimeter ammunition.
<br>I did not observe at the time, nor have I seen the containers and the
cartridges since. Does that have on it what kind of propellant, or is there
any definition?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Vee: You will have a lot number.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Miley:</span><span class="style2"> a lot number will identify
it.&nbsp;
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Vee:</span>
<span class="style3">By history you can go back and
check, but the individual won't know</span><span class="style2">.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Have you finished your recitation
of the history, sir?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Vee:</span><span class="style2"> On
</span><span class="style3">December 17, 1966</span><span class="style2">, the
Army addressed a memorandum to the Secretary of Defense which was entitled
"The Army Rifle Program," in which they made certain statements, certain
objectives,</span><span class="style3"> that they wanted to undertake in their rifle program.</span>
<span class="style2">
<br></span>I<span class="style3">n their letter they stated that as a result of the SAWS study and
the analysis of that study by the Army staff, there might be a possibility
of some minor changes being made in the rifle, or the rifle system, as
they called it. This is the first item.</span> <span class="style2">
<br></span><span class="style3">Then they identified it. It says:</span><span class="style2">
</span>
<p><span class="style3">THERE IS A POSSIBILITY OF THE USE OF A DIFFERENT POWDER GRAIN.</span><span class="style2">
</span>
<p class="style2">This is the first official notice by the service to Sec-Def&nbsp; about
the question of a powder grain or propellant.
<p class="style2">.................
<p class="style2">page&nbsp;&nbsp; 4802
<br>.................
<br>&nbsp;
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> Then do you have an opinion&nbsp;&nbsp;
as to whether the ball powder is a proper powder to use with the M-16 rifle?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Macdonald:</span><span class="style2"> My only comment is if the
IMR powder worked and it was all tested under the IMR powder, and nobody
ever complained about the IMR powder, what is the sense of going to some
other powder?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> You have heard adverse reports
as to the use of these ball propellants?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Macdonald: </span>
<span class="style2">Only what I read in the newspapers.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray: </span>
<span class="style2">In your experience with the IMR
powder, would you say that the functioning of the M-16 rifle was good?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Macdonald:</span><span class="style2"> It was perfect. I can't think
of anything, any malfunction, nothing, never.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Bray:</span><span class="style2"> Would extra carbonization, and
marked increase in the cyclic rate of fire, cause malfunctions in this
rifle?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Macdonald:</span><span class="style2"> Yes, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Bray:</span><span class="style2"> That is all.
</span>
<p class="style2">................
<br>page 4933 - 4934
<br>&nbsp;
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> I hope to be able to conclude
these hearings with this meeting. However, the chairman and the committee
do want to review the record that we have, and we may have - we will reserve,
of course, the right to convene possibly next week, and particularly I
want to review the record in regard to the conversion from IMR to ball
propellant.
<br>(The following information was received for the record)
</span>
<p class="style2">Combat Consumption of Ball and IMR Propellants in SVN
<p><span class="style2">A question of major concern to the Special House Subcommittee investigating
the M-16 rifle is the extent to which the use of 5.56 mm ammunition loaded
with ball powder propellant has contributed directly to the excessive malfunctions
of the rifle reported from combat areas in SVN.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</span><span class="style3">Excessive malfunctions of the rifle began to be reported by Army troops
in OCTOBER 1966 AND CONTINUED APPROXIMATELY THROUGH DECEMBER 1966. Since
then reports of excessive malfunctions from Army sources have been relatively
less frequent.&nbsp;</span> <span class="style2">
<br>The M-16 rifle was introduced into SVN with the first Army troops to
deploy (the 173d Airborne Brigade) in March 1965. Thereafter there was
a steady build-up of combat units equipped with the M-16 until in September
1966 there were approximately 45,000 troops equipped with the rifle in
SVN. </span><u><span class="style3">During this entire period there were no known reports of excessive
malfunctions. [????????]</span></u><span class="style2"> </span>
<p><span class="style2">During the same period </span><span class="style3">(March 1965 - September 1966)
</span><span class="style2">99 million
rounds of 5.56mm ammunition were consumed in combat in SVN. At least 89
million rounds of this total were loaded with ball propellant (WC 846).
Only 10 million rounds loaded with IMR (CR 8136) were ever sent to SVN.
These were produced prior to December 1964, and it is assumed that they
were all consumed prior to September 1966 since supply procedures dictate
a first received - first issued policy as regards stockage and issue.
<br>Since 89 million rounds of 5.56mm ammunition loaded with ball propellant
were shot in combat in SVN </span><span class="style3">WITHOUT PRODUCING ANY KNOWN REPORTS OF EXCESSIVEMALFUNCTIONS</span><span class="style2">,
it must be concluded that such reports when they did appear in</span><span class="style3"> October
1966 could not have resulted from the inherent characteristicsof ball powder
as a propellant</span><span class="style2">.
<br></span><span class="style3">IT IS MUCH MORE PROBABLE THAT THE EXCESSIVE MALFUNCTION REPORTS
ARISE FROM THE TEMPORARY DIFFICULTIES IN CARE AND CLEANING OF THE RIFLE</span><span class="style2">
experienced when substantial numbers of troops previously equipped with
the M-14 rifle were converted at that time to the M-16. This was confirmed
by </span><span class="style3">direct observation </span><span class="style2">of the field assistance teams in SVN during
the period October - December 1966.
<br>Subsequent follow-up visits to SVN by Department of the Army field
assistance teams, the last being in </span><span class="style3">April - May 1967</span><span class="style2">, report marked
reduction in malfunctioning as a result of </span><span class="style3">strict adherence to published
mandatory individual care and cleaning practices.</span> <span class="style2">
<br>&nbsp;
<br>&nbsp;
</span>
<p><span class="style3">Tuesday, August 22, 1967. The subcommittee met at 10 o'clock a.m.&nbsp;</span>
<span class="style2">
<br>......
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> Thank you.
<br>As you said, Mr. Ichord, I am director of research and development
for the explosives department of E.I. du Pont de Nemours &amp; Company.
I am responsible for the administration of exploratory research, product
and process development, and technical assistance to the sales and manufacturing
functions of the explosives department. In carrying out this responsibility
I direct the activities of five laboratories, one of which includes a ballistic
section devoted to the development and testing of smokeless powder&nbsp;
for both sporting and military ammunition.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; I have a good working knowledge of gun propellant
problems because I was chief ballistic engineer of Du Pont's propellant
laboratory during World War II at a time when all of its efforts were devoted
to military problems.</span> <span class="style2">
<br>In prefacing my remarks on the history of the development of propellant
for the 5.56 mm. cartridge for the M-16 gun system, it should be understood
that the Du Pont Co. was never directly involved in the design or manufacture
of guns and ammunition. Our sole role in this area has been to develop
and produce propellants.
<br>It is pertinent to report that the powder being supplied by the Du
Pont Co. for this round, a Du Pont IMR powder, is the same, except for
minor modifications, as the propellants Du Pont has supplied for military
small arms loading since the early 1920's and was the type used in practically
all of the United States and most of the British rifle and machinegun ammunition
from caliber .30 through 20 mm in World War II. Approximately a billion
pounds of this powder was produced in Government-owned, contractor-operated
plants during that war.
<br>In this service the ammunition loaded with Du Pont IMR powder has been
subjected to every conceivable field situation. The propellant has proven
to be very effective and reliable.
</span>
<p><span class="style2">As to the 5.56 mm. ammunition development, it is my understanding that
the Remington Arms Co., working with the developers of the AR-15 gun system,
started with a sporting cartridge, the 223, which translates in the metric
system to a 5.56 mm. caliber. There are eight or ten grades of IMR powder
which cover the range of ballistic requirements of most small arms cartridges,
and Remington, in </span><span class="style3">1962</span><span class="style2">, selected IMR 4475 from its stock of such
powders as the one giving the desired ballistics in the new round. IMR
4475 is a grade of rifle powder first introduced by the Du Pont Co. in
</span><span class="style3">1936</span><span class="style2">,
and is a single base, dinitrotoluene (DNT) coated powder, granulated 0.046
- 0.015 x 1/22. The granulation code describes a single perforated cylindrical
grain, the first number representing the diameter of the die in inches,
the second the size of the pin which makes the center perforation, and
the third the number of cuts per inch. For commercial loading IMR 4475
was purchased by Remington on the basis of ballistic tests made at our
plant. Each new lot is tested in comparison with a standard lot to satisfy
ourselves and the user that it is truly representative of its type.&nbsp;
<br>IMR 4475 was loaded to a pressure specification of 52,000 p.s.i. which
is considered to be acceptable for commercial cartridges of this type.
It was a tight fit, however. That is, to get enough powder in the case
to make the specification velocity (3,250 f/s), it had to be so fast burning
that the pressures were pushing the limit all the time. Nevertheless, some
19 million rounds were loaded with IMR 4475 with good reports as to their
functioning.
<br>When the Army adopted the 5.56 mm. as an ordnance item, 52,000 p.s.i.
was set as the top limit of maximum average pressure for the ammunition.
This meant that they wanted a powder that would give the service velocity
with about 50,000 p.s.i. or less in the ammunition, </span><span class="style3">so they set a 50,000
p.s.i. top on the powdermaker.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Is that chamber pressure, that
50,000 you were referring to?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> Chamber pressure.
<br>We were running 49,500 - plus on the occasion - just too close to the
top for comfort, with a full case, about 25.5 grains.
<br>When the ammunition loaders tried Olin Ball, WC-846, they had more
leeway because the ball powder has a higher apparent density, permitting
more powder in the case. Ball powder could be slowed down until it took
a charge of 28 grains to give service velocity and still stay within pressure
specifications comfortably. Based on our limited experience firing reference
ammunition loaded with WC-846, the slower powder gives somewhat more residue
and more noticeable flash, which is what one would expect.
<br>We had been in this situation before, i.e., a tight pressure specification
and limited case volume. One answer was to change coating. We switched
from DNT, that is the dinitrotoluene, to Centralite and modified the granulation
of the powder to get the best fit. The outcome of this was CR 8136, a 0.041
- .010x1/32 granulation.
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Mr. Ichord:</span><span class="style2"> Let me interrupt to be sure I
understand what you are talking about.
<br>Is this coating to which you refer, DNT - you switched from that to
Centralite - is it the coating that controls the rate of burning in the
powder?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> The coating controls the initial
rate of burning in the powder, because it is an exterior treatment which
influences only a fraction of the thickness of the powder.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What do you mean by the "initial
rate of burning?"
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson: </span>
<span class="style2">When the powder burns, it burns
essentially on the surface, from the surface in, like logs in a fireplace.
In order to slow down the initial rate of gas production to keep the maximum
pressure in the barrel, in the chamber, below the desired limit, the burning
rate of the outer layers of propellant is deterred in all rifle powders
by some material or other.
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> And the initial rate of burning
is the thing that has the greatest effect upon the chamber pressure?
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Dr. Jackson: </span>
<span class="style2">It has the greatest effect on
the chamber pressure at a given velocity. You can modify the amount and
character of the coating and influence the velocity - pressure relationship.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What is the relationship between
the chamber pressure and the velocity with which the bullet leaves the
gun? There is a direct relationship, is there not?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> It is a variable relationship,
depending on the characteristic of the powder. And devising the proper
powder granulation, composition and coating to obtain a preferred velocity
- pressure relationship is the problem of the ballistician.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Anyway, you slowed down the initial
rate of burning by the change from DNT to Centralite, and this, you say,
permitted you to more easily stay within the chamber pressure specifications?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> That is correct.
<br>CR-8136 was given a thorough testing by the Army and qualified for
loading in 5.56 ammunition on April 29, 1964. The pressure-velocity relationship
was more favorable on the average for CR-8136 than for IMR-4475 so there
was less difficulty in meeting the 50,000 pounds per square inch maximum,
but the Centralite coating is inherently harder to ignite, so the variations
from round to round were greater. There is a 58,000 pounds per square inch
limit on P maximum plus three times the standard deviation for ammunition
acceptance. That is a requirement placed upon the ammunition supplier that
he must meet.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> 58,00 maximum, but an average
of 52,000?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> Average of 52,000, but the maximum
pressure observed in any lot of ammunition plus three time the standard
deviation in pressure as observed in firing a series of rounds must not
exceed 58,000 pounds per square inch, and this is the difficulty that loading
people got into with CR-8136. All of the lots produced (approximately 300,000
pounds) were loaded by Remington at Bridgeport, but there were complaints
about P maximum plus three times standard deviation exceeding 58,000 pounds
per square inch, so obviously we had not yet obtained a completely satisfactory
solution to this problem.
<br>The current answer to the 5.56 millimeter loading problem came as a
result of a research program carried out under contract with Picatinny
Arsenal to find a propellant with greater ballistic stability over a wide
temperature range (contract DA-36-034-ORD-3742A, </span><span class="style3">completed May 30, 1965</span><span class="style2">.)
Many variations of the extruded single-base powders were tried. Incidentally,
that contract was limited to extruded single-base type, and a modification
of IMR was found bearing a new coating material which not only has improved
temperature stability but a better velocity-pressure relationship as well.
The work under the contract was done mainly with </span><span class="style3">7.62 millimeter</span><span class="style2">
ammunition and the powder resulting was designated IMR 8138-M. Although
this powder would be ballistically satisfactory in the 5.56 millimeter
round, the grain configuration prevented uniform machine loading.
</span>
<p><span class="style2">When this formulation, involving the new coating material and procedure,
was applied to the 5.56 millimeter problem the result was IMR 8208-M with
a granulation .041 - .010x1/32, the same CR-8136. The gravimetric density
was higher, the velocity-pressure relationship was more favorable, and
the charge was still about 25.5 grains. The maximum average pressures were
well under the specification of 50,000 and the variations were such that
there was little trouble with the P maximum plus three times standard deviation
meeting the 58,000 pounds per square inch limit. IMR-8208 was submitted
to the Army for qualification tests and after passing all phases of the
trials, was reported to be accepted in</span><span class="style3"> May 1966
</span><span class="style2">for loading in 5.56
millimeter ball and tracer ammunition. The qualification tests consisted
of chamber and port pressure, velocity and tracer ignition tests at +70,
-65, +125, +160, and -80 degrees F.; action time and climatic storage tests;
smoke, flash, fouling, cyclic rate, and barrel erosion tests.&nbsp;
<br>To appraise you of production experience we have shipped 42 lots of
powder representing 1.3 million pounds. this production covers the period
</span><span class="style3">October
1966 through July 1967</span><span class="style2">. The material has been loaded in ball and tracer
cartridges at Lake City and Twin Cities Army ammunition plants. Reports
from Lake City concerning the quality of the ammunition containing this
powder have been uniformly satisfactory.
<br>As the procurement agencies are aware, only limited quantities of IMR
8208-M can be supplied from the Carney's Point Works of Du Pont, which
is our only powder making facility. We are currently supplying to the limit
of the plant capacity on this item. </span><span class="style3">At the request of the government</span><span class="style2">,
Du Pont has instructed personnel in the coating procedure required for
IMR 8138-M and 8208-M at the Radford Army ammunition plant.&nbsp;
</span>
<p class="style2">..............
<br>page 4949
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:
</span><span class="style2">Now for the record I would like
to say that we have three types of propellant, for rifle ammunition in
the United States, that have been used for the past 25 years, three basic
types.
<br>The first is IMR, which is the propellant Du Pont has been making,
single base extruded. This gets its energy, in the main, from nitrocellulose.
<br>Then we have HPC, which is a double base extruded, that is, shaped
like IMR but depends on the nitroglycerin as well as nitrocellulose.
<br>Then we have the ball, a double base spherical grain, energized both
by nitrocellulose and nitroglycerin.
<br>Is it possible to convert surplus or scrapped powder into extruded
IMR powder?
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> It is not, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> But that is not true in the case
of ball propellant, is it possible to make ball propellant out of surplus
powder?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> By the nature of the process;
yes.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Is it your further understanding
that scrap powder, surplus powder, is now being worked into ball propellant?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> That is my understanding.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Do you know who is doing this?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson: </span>
<span class="style2">The process was developed by
Olin, and I believe it is done by Olin, perhaps also at the Army Ordnance
plants.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">I believe the record will show
this scrap powder is provided to the propellant producer as Government-furnished
equipment.
<br>..........
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">I would ask you this question,
Dr. Jackson: For ballistic acceptance which is more reliable, a reference
powder or a reference ammunition?
<br>&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> For ballistic acceptance a reference
powder is more reliable.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Why?
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson: Because comparison of the lot under
test is being made directly with the same type material that is being acquired
and is not - there is no opportunity for confusing differences in metal
components and their influence on ballistics, which always has the opportunity
to creep in when reference ammunition is used as a powder acceptance tool.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What does the government now
use?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span>
<span class="style3">Reference ammunition, at
its pleasure.</span><span class="style2"> </span>
<p><span class="style2">..................
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">All the experts have advised
this committee that ball propellant causes increased fouling, and also
a speedup in the cyclic rate, at least of the M-16 weapon. What is the
character or nature of the ball propellant which results in increased fouling?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> If it does in fact do so - as
I say, we have had only direct observation in the firing of reference ammunition
which contained ball propellant, and observed slightly more deposits in
the barrels.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> You have observed that?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> We have observed this. We would
ascribe this to the fact it is characteristic of a slower powder in any
given weapon. If you have two powders, a slow and a fast one, the slower
burning powder which burns further down the barrel is more likely to leave
residue in the barrel in the bolt area.
</span>
<p class="style2">.........................
<p><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">In order to establish our hypothesis,
at this point I want to read into the record the result of tests of the
SAWS study:
<br>Field experiment conducted at Fort Ord, California: Section V, Material
Reliability Results.
</span>
<p class="style2">2. Major causes in malfunctions in 5.56mm weapons.
<br>Major causes of most malfunctions in the 5.56 mm. weapons are attributed
to an interaction of ammunition (and belt link) deficiencies:
<br>1. Weapon fouling, judged to be caused primarily by qualities of the
propellant used in the standard ball 5.56 mm. cartridge.
<br>2. Cycling of weapons in excess of design rates, judged to be caused
by combinations of:
<br>(a) Pressure characteristics of the propellant used in the standard
ball 5.56 mm. cartridge.
<br>(b) Factory calibration of M-16E1 rifles for a propellant with different
pressure characteristics than that in the standard ball 5.56 mm. cartridge.
<br>(c) Mismatch in internal ballistic (pressure) characteristics between
the standard 5.56 mm. ball and tracer cartridges.
<br>.................
<p class="style2">(a) fouling
<p><span class="style2">Fouling in the 5.56 mm. weapons occurred throughout the experiment.
Dirty chambers resulting from rapid carbon buildup caused most of the failures
to extract and some of the failures to chamber.&nbsp; Fouling remained
a problem throughout the experiment, although cleaning and inspection of
weapons were considered more stringent than would be possible during combat.
<br>Inquiry to AMC determined that the propellant adopted for the standard
5.56 mm. ball cartridge is different from the original propellant used
during the development and service testing of the M-16E1 rifle and during
the development of the Stoner weapons. A USACDCEC test of samples from
the lot of standard ammunition used in the experiment showed more fouling
than an AMC provided sample containing the original propellant. This supplemental
fouling test was conducted using ammunition lots WCC-6098 and RA-5074.
This limited test firing of 12,620 rounds indicated a malfunction rate
of 5.6 per 1,000 rounds for the cartridge loaded with ball propellant as
opposed to 0.91 for IMR propellant loaded cartridges.
<br>(b) Excessive cyclic rate
<br>Excessive cyclic rates were noted early in the experiment. In addition,
surging (uneven firing) was noted when ball and tracer were fired together.
There was also an increasing incidence of malfunctions attributed to ammunition
cycling the weapons beyond their design rates. The cyclic rates were higher
than the design cyclic rates, particularly with the M-16E1 rifle and Stoner
machinegun. </span><span class="style3">It is concluded that this excessive cyclic rate caused,
complicated, and multiplied such malfunctions as failure of the bolt to
remain to the rear after the last round was fired from the magazine, FAILURES
TO EJECT, and magazine feeding problems.</span> <span class="style2">
<br>A concurrent propellant investigation by Frankford Arsenal showed that
the propellant currently used in the 5.56 mm. ball cartridge </span>
<span class="style3">cycles
weapons faster than the original propellant.</span> <span class="style2">
<br>Inquiry to AMC determined that,</span><span class="style3"> to meet a government acceptance
requirement</span><span class="style2">, M16E1 rifles are calibrated at the factory for the gas
port pressure of the original propellant rather than that of the propellant
currently used in standard ball 5.56 mm. cartridges. Interaction of the
higher gas port pressure of the current propellant and the sizing of the
gas port for a propellant with a lower gas port pressure is considered
the reason for the excessive cyclic rate in the M16E1 rifle.
</span>
<p class="style2">.......................
<p><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: When was the result of this study
first brought to your attention, Colonel?</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span>
<span class="style3">November or early December
1965.</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> When was this experiment performed?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: </span>
<span class="style2">As I recall, between October
and November</span><span class="style3"> 1965.</span> <span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> I am sure Dr. Jackson has other
business.</span><span class="style3"> I will explore this with you later, Colonel Yount.</span>
<span class="style2">
<br>You were producing IMR-4475 up until what date, doctor, for military
purposes?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> I think it was 1964. I can't
remember exactly when in 1964.
</span>
<p><span class="style2">IMR-4475 as far as I know was never submitted to the qualification test
for the 5.56, that the CR powders and 8208 powders were submitted to. It
was a powder purchased by the ammunition loader on commercial specification
and submitted by him to the military as meeting the ammunition specification
of the military. The powder was on a commercial purchase.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">I know the Army purchased a great
many rounds of IMR.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> But the powder has not been
submitted to the qualification test required if the powder is to be purchased
by the military as such.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> You said you had difficulty meeting
pressure limits in the specification. Was that because of producing it
in larger quantities, or what was the reason for that?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson:</span><span class="style2"> No, the powder was never designed
to meet the pressure specification that was imposed on it by the Army specification.
It would not have made any difference whether we were producing it in large
or small quantity, we couldn't meet that pressure specification on a continuing
basis.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">After you failed to meet the
specification, you changed to 8136?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Jackson: </span>
<span class="style2">Right.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Remington loaded 8136 for quite
a period of time, did it not?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> Several months; approximately
one-third of a million pounds of powder.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Why did Remington stop loading
8136?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> Because they were having trouble
with the specification on the ammunition that required that maximum pressure
plus three times standard deviation in pressure must not exceed 58,000
pounds per square inch, and about every four or five lots they would slip
out on that one, and finally said, "We can't do it."&nbsp;
<br>The problem was, there we had less margin in pressure than was comfortable
for the ammunition companies, plus a somewhat greater variation in pressure
during a series of pressure tests, such as that the standard deviations,
when multiplied by 3 and added to the maximum pressure, exceeded the 58,000
pound limit. You couldn't tell this from a powder test, but once the ammunition
was loaded in a regular ammunition plant loading the variations piled up
and the standard deviation exceeded the permissible limit.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Again, as in the case of IMR-4475,
it wasn't a case of inability to mass produce it?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Jackson:</span><span class="style2"> No. We were having very little
difficulty in getting reproducible lots. But we had made an improvement,
but just hadn't gone far enough to get out of the pressure trouble.
</span>
<p><span class="style2">.............
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Colonel Yount, will you please
come forward and be seated, sir?
<br>Continuing with the reference to the SAWS study, dated May 1966, you
say this SAWS study was made in about October 1965?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> To the best of my recollection.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">And the results of the study
were made available to you in December 1965?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> November or December. It was
not the completed test report, but simple oral results of the test.
<br>&nbsp;&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Is that oral or written?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> Oral.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Did somebody connected with the
SAWS study call you, come to see you, or what happened?
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:
</span><span class="style2">We kept in touch with the various
locations of the SAWS study, I don't know just who informed me. </span>
<span class="style3">But
we knew of the problem.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Through what means? How were
you kept informed?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> Liaison to the test sites,
and telephone calls from the test sites.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> Did you not have a liaison or
tech representative at each of the centers conducting the tests?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> For the maintenance problems,
yes.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> I suppose you were quite concerned
when you heard this?
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Colonel Yount:</span><span class="style2"> I certainly was.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What did you do?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span>
<span class="style3">We wanted a more controlled
test, to confirm that the actual malfunctions were caused by the ball propellant,
so we had some of the suspected lot of the propellant sent to Frankford
Arsenal and had a special confirmatory test conducted by Frankford Arsenal
in December 1965. That test confirmed the results of the SAWS test, that
additional malfunctions were truly associated with the higher cyclic rate.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: When was that?</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: DECEMBER 1965. THE RESULTS OF
THE TEST WERE PUBLISHED IN EARLY JANUARY, I BELIEVE, 1966, AND THIS CONFIRMED
THE CORRELATION OF HIGH CYCLING RATE WITH THE MALFUNCTION RATE.</span>
<span class="style2">
<br></span><span class="style3">Mr. Ichord: YOU HAD NOT YET HAD TESTS FROM VIETNAM, I MEAN REPORTS
FROM VIETNAM, AS TO EXCESSIVE MALFUNCTIONING?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount: </span>
<span class="style2">That is correct.
</span>
<p class="style2">.................
<p class="style2">page 4977
<br>&nbsp;
<p><span class="style2">&nbsp;&nbsp;</span><span class="style3">&nbsp; Mr. Ichord:</span><span class="style2"> When did it first come to your
attention, Dr. Payne, that ball powder was causing excessive fouling, higher
cyclic rates, and thus increased malfunctions and parts breakage?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span><span class="style2"> The fall of 1965; during the SAWS
study.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What action did you take upon
learning of this study?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne: </span>
<span class="style2">I recorded the reports I gathered
on the trip, in the form of a memorandum, transmitted this to my official
point of contact in the Office, Chief of Staff, which at the same time
was the Systems Analysis Division of the Office of the Director of Coordination
and Analysis.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Who was that?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span><span class="style2"> The Division Chief was Colonel
Newman. My Memorandum was addressed to Lt. Col. William Jank.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: What was the date?</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span>
<span class="style3">Early November 1965.</span> <span class="style2">
<br>.................
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; Dr. Payne:</span><span class="style2"> Yes, sir. I discussed the report,
after I wrote it, with an officer who was about to visit Vietnam. I told
him the nature of the problems being found in the SAWS, and asked that
he check with people he met there as to whether any similar problems were
occurring in Vietnam.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Who was that officer?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span><span class="style2"> Colonel Blanchard. He was then
executive officer for the Secretary of the Army.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What action was taken as a result
of your report?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span><span class="style2"> For this, sir, I have only verbal
reports back. After some period, Colonel Jank informed me that the same
information that was available in my memorandum </span><span class="style3">about fouling and malfunctions</span><span class="style2">
had already been reported to AMC by the Combat Developments Command, that
certain confirmatory tests were then underway.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Was that the extent of your followup?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span>
<span class="style3">Colonel Blanchard returned
from Vietnam and reported he had talked to seven or eight battalion commanders;
none of them were experiencing any similar troubles.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">WHEN DID YOU GET THE REPORTS
THAT
THEY WERE EXPERIENCING TROUBLES?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span>
<span class="style3">IN VIETNAM?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">YES.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> Dr. Payne:</span>
<span class="style3">NEARLY A YEAR LATER.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> THAT WAS IN OCTOBER 1966, I PRESUME?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne: IN MY CASE, I THINK IT WAS PROBABLY
DECEMBER.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Did you make any recommendations
at the time you did hear from South Vietnam that they were having trouble?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span><span class="style2"> No, sir. By that time, we were
involved in the review of the SAWS report itself, on the basis of which
recommendations </span><span class="style3">were made for an extensive investigation.</span>
<span class="style2">
<br>I thought the people in the Office, Chief of Staff, doing it at that
time knew everything that I knew, we agreed on the points of fact and the
problems and what needed to be done. I took no action other than to review
what they had done.
</span>
<p class="style2">................
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> In view of your conclusions or
views on the malfunctions caused by the ball propellant during the SAWS
test, did you take any action when you learned of the excessive amount
of malfunctions being experienced in Vietnam?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span>
<span class="style3">Yes, sir. I tried my best to
find out whether they were from the same cause.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan: Do you think they are partly from
the same cause?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span>
<span class="style3">It is possible they are partly
from the same cause, but not predominantly</span><span class="style2">.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> Has an effort been made to take
samplings of the ammunition in Vietnam for purpose of testing to see if
there is any relationship?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Dr. Payne:</span><span class="style2"> No, sir - not to my knowledge.
<br>The tests that we conducted in this country are conducted with essentially
similar ammunition.
</span>
<p class="style2">.................
<p class="style2">page 4998
<br>&nbsp;
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> General Anderson, do you have
anything you want to add to the testimony given on the problem of ammunition
in relationship to the malfunctions of the M-16?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> No, Mr. Counsel. I might
in a way summarize</span><span class="style3"> what I think our position is.</span>
<span class="style2">
<br></span><span class="style3">At the time we moved into the ball propellant for the 5.56 we had
no reason to believe we would have any difficulties from it</span><span class="style2">, because
we had found that by controlling the port pressure in other weapons, both
U.S. and foreign designs, that this produced acceptable results.
<br>We conducted tests,</span><span class="style3"> not as extensive perhaps as we might have liked</span><span class="style2">,
but the tests we conducted at that time gave us no indication that our
supposition,</span><span class="style3"> that it was a low risk matter, was anything to worry about</span><span class="style2">.
These original tests showed no malfunctions, as you recall.
<br></span><span class="style3">However</span><span class="style2">, as we went down the road we found that indeed there
were </span><span class="style3">malfunctions associated with the cyclic rate.</span><span class="style2"> This was discovered,
I think, first in the initial </span><span class="style3">SAWS</span><span class="style2"> report Dr. Payne mentioned, and
that we knew about in </span><span class="style3">the fall of 1965</span><span class="style2">.
<br>Once we discovered it and confirmed it with the Frankford Arsenal tests
where we </span><span class="style3">first</span><span class="style2"> correlated malfunctions as related to high cyclic
rate, we set about correcting this. This, of course, took the form of the
new buffer.</span><span class="style3"> The new buffer</span><span class="style2"> was under development for other reasons,
and </span><span class="style3">it was fortunate we could put this in with it</span><span class="style2">.
</span><span class="style3">Our tests
thus far with the new buffer</span><span class="style2">, with both ball and the latest IMR, show</span><span class="style3">
very acceptable results in lowering the cyclic rate</span><span class="style2">.&nbsp;
<br>Now, the malfunctions that occurred in Vietnam in the period culminating
in the October - September-October investigations by the Army, </span>
<span class="style3">undoubtedly
were PARTIALLY ATTRIBUTABLE TO THE BALL POWDER INCREASED CYCLIC RATE.</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> How about the fouling?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> Let me come back to that
in just a moment, Mr. Chairman.
<br></span><b><span class="style2">However, WE HAVE CONCLUDED, BASED ON THE INFORMATION THAT WE HAVE,
THAT THE CARE AND MAINTENANCE AND PRESERVATION PROBLEMS SO OVER-SHADOWED
THE MALFUNCTIONS THAT MIGHT HAVE BEEN CAUSED BY THE USE OF BALL POWDER,
</span>
<u><span class="style2">THAT
THE PRIMARY PROBLEM IN VIETNAM WITH RESPECT TO THE MALFUNCTIONS WAS RELATED
PRIMARILY TO THE CARE AND CLEANING PROBLEM</span></u><span class="style2">. AND THIS INDIVIDUAL MAINTENANCE</span></b>
<span class="style3">so overshadowed the malfunctions that undoubtedly would have occurred
because of the high rate of fire, this was the causative factor.</span>
<span class="style2">
<br>Now, once we got upon this, with the teams that went over there in
October, and the actions that the Vietnamese Army Headquarters took, </span>
<span class="style3">we
have had a rather dramatic dropoff in the malfunction rate</span><span class="style2">. Our latest
report on that in writing was in. I think, April 1967 when a report from
Vietnam noted that the malfunction rate was way down </span>
<span class="style3">AND COMPLETELY
UNDER CONTROL.&nbsp;</span> <span class="style2">
<br>Now, to get back to your question on fouling. </span><span class="style3">We are still conducting
tests on the relationship of fouling to malfunctions. I would like to stand
corrected here, if my interpretation is not right. THUS FAR WE HAVE NOT
BEEN ABLE TO RELATE INCREASE IN MALFUNCTIONS TO INCREASE IN FOULING.&nbsp;</span>
<span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> What about cyclic rate?
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span>
<span class="style3">Yes, sir.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span>
<span class="style3">You have been able to relate
that?</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span>
<span class="style3">YES,SIR; WITHOUT QUESTION.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Cleaning is not going to affect
the cyclic rate. In adopting the new buffer you have slowed down the cyclic
rate by the new buffer?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson: </span>
<span class="style2">Yes. </span><span class="style3">But </span>
<span class="style2">we have
definitely correlated the higher cyclic rate to a greater incidence of
malfunctions. However, we have not been able in tests conducted thus far
to establish a </span><span class="style3">direct relationship</span><span class="style2"> of the increased fouling to additional
malfunctions. Is this correct?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis: </span>
<span class="style2">That is correct.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">You mean you are, then, disagreeing
with the </span><span class="style3">SAWS</span><span class="style2"> study here?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Anderson:</span><span class="style2"> No, sir. I am agreeing
with the </span><span class="style3">SAWS</span><span class="style2"> study.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> I thought the SAWS study did
say that fouling contributed to the malfunctioning.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Anderson:</span><span class="style2"> The high cyclic rate. I
think the </span><span class="style3">SAWS</span><span class="style2"> study may have.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span>
<span class="style3">(reading)</span> <span class="style2">
<br>Major causes of most malfunctions in the 5.56 millimeter weapons are
attributed to an interaction of ammunition and belt link deficiencies:
<br>(1) Weapon function, judged to be caused primarily in the</span><span class="style3"> quality
of propellant used </span><span class="style2">in the standard ball propellant 5.56 millimeter
cartridge.
<br>(4) a. Fouling:
<br>Fouling in the 5.56 mm weapons occurred throughout the experiment.
Dirty chambers resulting from rapid carbon buildup</span><span class="style3"> CAUSED MOST OF THE
FAILURES TO EXTRACT</span><span class="style2">. Fouling remained a problem throughout the experiment,
although cleaning and inspection of weapons were considered</span><span class="style3"> more stringent
than would be possible during combat.</span> <span class="style2">
<br>Perhaps I read that wrong.
<br>&nbsp;&nbsp;&nbsp;</span><span class="style3"> General Anderson: </span>
<span class="style2">I cannot say whether they
were correctly relating the fouling and the malfunction. The high rate
we have correlated, yes. But we are still conducting tests on the fouling
to see if it does induce additional malfunctioning.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Well, General Anderson, this
is the thing that has concerned me greatly, and I think </span>
<span class="style3">we have been
discussing the crux&nbsp; of the whole M-16 problem and the M-16 controversy
in our discussion of IMR and ball propellant ammunition. I think this is
pretty well summed up by the Army in this supplement to a July 27, 1967,
statement. I read from the statement:</span> <span class="style2">
<br></span><span class="style3">From the vantage point of retrospect, it has sometimes been suggested
that the peculiar behavior of ball propellant in the M-16 system should
have been predicted. There was, in fact, no evidence in 1963 that the cyclic
rate of the M-16 would be greatly affected by the choice of propellant,
PROVIDED THAT PORT PRESSURES WERE CONTROLLED as they had been in the M14
and other 7.62 millimeter systems which accommodate both ball and extruded
propellants. Furthermore, there was no evidence at the time to indicate
that an increase of 10 percent to 15 percent in cyclic rate of fire would
cause a serious increase in frequency of malfunctions.</span><span class="style2">
</span>
<p><b><span class="style2">Had the Army anticipated these developments, it is most likely that
the course chosen in </span> <u><span class="style2">January, 1964</span></u><span class="style2">, would have been the same. A
decision to reduce the velocity requirement, and continue loading IMR 4475
propellant would probably have been made instead, and the development of
alternate propellants could have been pursued more deliberately.</span></b><span class="style2">
</span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> Yes.
<br>Mr. Ichord: The fact that these things arose as such does not concern
me. The thing that does concern me has developed in these hearings, General
Anderson.
<br>This committee was established for the purpose of reviewing the development,
the acquisition, and the functioning of the M-16 rifle and to make a report
to the full committee. We did not know of this crux which you have summarized
here until we went to Vietnam. And I don't know - I don't think there was
anything in the record - was there, in regard to the effect of propellants?
<br>We are asking the Army to give us the facts on this matter, the full
facts, so that we can make a report. </span><span class="style3">And I doubt very much that if the
committee did not receive a tip in Vietnam to look into this ammunition
</span><span class="style2">that
we would ever have explored it and have developed the whole record.
</span><span class="style3">I
THINK THE RECORD WITHOUT DOUBT SUSTAINS THE FACT THAT THE CRUX OF THE PROBLEM
- YOU HAD OTHER PROBLEMS, SURELY - STARTED WITH THIS CONVERSION TO BALL
PROPELLANT</span><span class="style2">. That is the thing that concerns me more than a mistake
or mistakes which may have been made. </span><span class="style3">Mistakes don't concern me, as
such. I make too many of them to be concerned.&nbsp;</span> <span class="style2">
<br>General Anderson: Mr. Chairman, I don't know quite how else to respond.
There is nothing that I know of that we have withheld from the committee.
There is nothing on this subject that I know of that throws any additional
light on the controversial switch, so to speak, to ball powder. I know
of nothing else that I can add to what has been said already and put in
the record.
<br>It is true, had we known at the time - but as I said, our experience
and limited tests gave us no reason to question the change. In retrospect,
I believe we would definitely have considered a drop in the muzzle velocity
of perhaps 50 feet per second in order to accommodate the high pressure,
or uncomfortable closeness to this limiting pressure, </span>
<span class="style3">had we known we
would run into all this other trouble</span><span class="style2">. We have freely admitted that
in the record.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Yes.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Morgan: </span>
<span class="style2">Do you contemplate making any
changes to the ball propellant to clean it up or have less adverse effect
on the rifle?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Anderson:</span><span class="style2"> Well, yes.
<br>Mr. Morgan, we have under study a rather sophisticated study to get
all the aspects of propellants, coatings, grain size, what have you, hopefully
to come up with a conglomerate specification that would have all the good
things of a rifle propellant and eliminate all the bad things, without
tying ourselves to a proprietary product of one or another manufacturer.
This is being done at Frankford, isn't it, this propellant study?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Davis: </span>
<span class="style2">Yes, sir; and BRL.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Anderson: </span>
<span class="style2">And BRL. So, you ask are
we contemplating a change. </span><span class="style3">Well, in a long-range way we are studying
these various things.</span> <span class="style2">
<br>On ball powder itself, as it now exists, </span><span class="style3">I don't know whether any
particular study is going on on this.</span><span class="style2"> </span>
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Davis:
</span><span class="style2">No, sir. </span><span class="style3">OUR RECORDS FROM THE
MOST EXTENSIVE DATA WE HAVE AT THE PRESENT TIME INDICATE SO LONG AS THE
CYCLIC RATE IS CONTROLLED WITHIN AN ADEQUATE RANGE THE PERFORMANCE OF THE
BALL PROPELLANT IS NOT LESS RELIABLE THAN PERFORMANCE FROM ANY IMR.</span>
<span class="style2">
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; General Anderson: </span>
<span class="style2">On the other hand, Mr.
Chairman, I don't think increased fouling helps matters any.
<br></span><span class="style3">&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> I hoped you would say that.
<br>General Anderson: Yes.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Then we seem to get down to the
question - perhaps I am being a little derogatory - how much can we wet
nurse a rifle by extensive cleaning under combat conditions?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> Well, you have to clean
the rifle no matter what kind of powder. Whether it would be more difficult
to clean it with the ball powder, or with the IMR, I am not sure at all.
<br>Mr. Ichord: One of the generals, the one who returned from Vietnam,
has stated - of course, we have statements all over the lot on it. Some
say it is no more difficult to clean than any other weapon, and I think
we have statements by high authority that more care and maintenance has
to be directed to it --
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> There is more visible residue
on the ball powder than on the other.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> Yes.</span><span class="style3"> I THINK THOSE STATEMENTS
THAT THE M-16 REQUIRES MORE CARE AND MAINTENANCE SHOULD BE DIRECTED TO
THE BALL PROPELLANT RATHER THAN TO THE RIFLE ITSELF.</span> <span class="style2">
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson: </span>
<span class="style2">We would like to cut down
the so-called dirty rifle with either. But with ball powder leaving more
visible residue, there is some speculation as to whether it takes longer
to clean it. I am not sure of that at all. I don't know.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> I am going to ask if anybody
else wants to add anything to the record today. I am not going to adjourn
the subcommittee sine die. I had hoped to be able to do so. But I want
to give you the chance to clarify the record, straighten up any inconsistency
that might result, before I adjourn today.
<br>&nbsp;Mr. Counsel.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan: </span>
<span class="style2">Mr. Chairman, could we ask the
Army to give us information on the distribution of the 8208 IMR ammunition
that has been sent to Vietnam? Have they established a ratio for distributing
the IMR versus the ball propellant to the users in Vietnam?
<br>General Anderson: No.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> Is there any priority for distribution
of the IMR over the ball propellant, or is it first in, first out?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> You are right; generally
it is first in, first out. </span><span class="style3">As we said earlier to Mr. Bray, there is
no identification on the boxes as to which is ball and which is IMR</span><span class="style2">.
We do not do that. By the lot numbers we know. We do know which ones they
are. But we do not as a normal practice transmit that to the field, have
not been. </span><span class="style3">So they do not know which one is which.&nbsp;</span>
<span class="style2">
<br>You said any kind of program distribution. There is no programmed distribution
of ball versus IMR in Vietnam.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> Can we determine what amount
of that shipped since </span><span class="style3">April [1967] </span>
<span class="style2">has been distributed to the troops
and what amount is in the warehouses at the various supply depots?
<br>General Anderson: Mr. Morgan, we can try. My estimate is that it would
be very difficult to do that. We will try to find out.
<br>(The following information was received for the record)
</span>
<p class="style2">The Army is unable to state how much of the IMR 8208 propellant ammunition
shipped to SEA since April 1967 has been issued to troops and how much
is in depot.
<br>Rifle ammunition is loaded and packed by the commercial contractor
and identified by Lot Number. the package displays the Lot Number as do
shipping documents but there is no way to identify the propellant used
to fill the cartridges in a particular Lot. Consequently, the issuing depot
has no knowledge of the propellant used in the ammunition that has been
issued or that remains on hand.
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Morgan:</span><span class="style2"> General Anderson, or Colonel Yount,
in the Tech Coordinating Committee meeting of March 2 this year it was
indicated that 16 chrome-plated chambers, or 16 barrels with chrome plated
chambers, were shipped to Vietnam for evaluation, under the control of
the Army concept team in Vietnam. A report from this team was scheduled
for April 1967. Was such report received?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount</span><span class="style2">: It was not. We do not expect
one. We have been in contact with the Army concept team. </span>
<span class="style3">They have had
other projects of greater priority.</span><span class="style2"> They distributed the barrels to
the field. Major Podurgal personally contacted two or three people who
had these weapons with these barrels on them. They were happy with them.
As far as controlled tests on these barrels,</span><span class="style3"> it is of little value.</span><span class="style2">
</span>
<p class="style2">.................
<p><span class="style2">&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> General Anderson, back to your
statement that the Army has not conclusively determined that excessive
malfunctions have been attributable to fouling, and also the position of
the Army that it had no way of knowing that the ball propellant would produce
the effects it did. Would it be fair to say you did not, however, have
a proper basis of comparison, in that the M-14, where you had your experience
with ball propellant, had not only a chrome chamber but also a chrome plated
bore?
<br>The recommended change - and I want to ask what has been going on in
regard to the chrome plating of the chamber. You think, perhaps, the chrome
plating will compensate for the increased fouling?&nbsp;
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> Yes, sir.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">At least it makes it a little
easier to clean, it is a little harder, and it would work to eliminate
excessive pitting.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">General Anderson:</span><span class="style2"> That is right. It is less
likely to erode, it is easier to clean. The coefficient of friction, for
example, between chrome and brass is less, so it would extract easier under
any conditions, in that case. Yes. That is being done, as you know.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> How do we stand now that Colt
has gone back to work?
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Colonel Yount:</span><span class="style2"> The first 5,000 production
weapons with the chrome-plated chamber are scheduled to be received in
the month of September.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord:</span><span class="style2"> They backed up? They had an earlier
schedule on that, of August, didn't they? And the strike delayed that a
month?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> The strike delayed it. During
September we expect to get 4,000 replacement barrels that will have the
chrome-plated chamber. Each month thereafter the total production of weapons,
as well as repair barrels, will have the chrome-plated chamber.
<br>&nbsp;&nbsp;&nbsp; </span><span class="style3">Mr. Ichord: </span>
<span class="style2">Have you concluded, Mr. Counsel?
</span>
<p><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Morgan:</span><span class="style2"> Yes, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Colonel, how about those monthly
reports you made on M-16 reliability to the Army Chief of Staff? Do you
have those with you today?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: </span>
<span class="style2">No, sir. Which ones, sir,
the most recent ones, or the initial ones, sir?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">I think perhaps we need to review
that, particularly since October 1966. That is your monthly reports on
reliability and product improvement. You don't have those with you?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> No, sir.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Can you make those available
to the committee?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> Again, sir, I am not sure
which reports you are referring to.
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: </span>
<span class="style2">Don't you make a monthly report
to the Army Chief of Staff or the Deputy Chief?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> At the present time?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> Well --
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount:</span><span class="style2"> Or initially? When we started
the program I had a set of reports going to the Department of Army. Then,
as a result of the SAWS, I submitted reports which went into DCSLOG which
eventually are received by the Chief of Staff. I am not sure which reports
you are referring to, sir?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord: How about giving us all of them</span><span class="style2">,
to make sure we have them? How about giving us all your monthly reports?
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Colonel Yount: </span>
<span class="style2">Yes, sir.
<br>(The information requested is in the files of the committee.)&nbsp;
<br></span><span class="style3">&nbsp;&nbsp;&nbsp; Mr. Ichord:</span><span class="style2"> There being no further questions,
the committee will adjourn subject to the call of the Chair.
<br>(Whereupon, at 4:50 p.m. the subcommittee adjourned.)
  `;
  // console.log(originalText);
  let newText = ``;
  // To remove style2
  // let element = '<br>&nbsp;&nbsp;&nbsp;&nbsp;';
  // let startCharacter = 0;
  // let endCharacter = startCharacter + element.length;

  const removeFromOld = (element) => {
    newText = originalText.split(element).join('');
    originalText = newText;
  };

  const replaceOnOld = (oldElement,newElement) => {
    newText = originalText.replace(oldElement,newElement);
    originalText = newText;
  };

  removeFromOld('<br>&nbsp;&nbsp;&nbsp;&nbsp;');
  removeFromOld('<span class="style2">');
  replaceOnOld(/<\/span><span class="style3">/gi,'</p><p><span>');
  removeFromOld('<br>&nbsp;&nbsp;&nbsp;');
  removeFromOld('<br> &nbsp;&nbsp;&nbsp;');
  removeFromOld('<p> &nbsp;&nbsp;&nbsp;</p>');
  removeFromOld('&nbsp;&nbsp;&nbsp;');

  console.log(newText);

  // startCharacter = 0;
  // endCharacter = startCharacter + element.length;
  // for (let num = endCharacter; num < newText.length; num++) {
  //   let characters = newText.substr(startCharacter,endCharacter);
  //   if (characters == element) {
  //     console.log(characters + " was found!");
  //   };
  //   startCharacter++;
  // };
});
