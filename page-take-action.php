<?php get_header(); ?>

<section class="take-action">
	<h1 class="page-title">Take Action</h1>

	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>

	<?php include(TEMPLATEPATH."/global-parts/pray-for-life-subscription.php"); ?>

	<div class="what-can-i-do border-top">
		<h2 class="sub-section-title">What Can I Do?</h2>
		<div class="grid">
			<div class="grid-1-3">
				<p class="box-title">Step 1: Pray</p>
				<div class="box pray"></div>
			</div>
			<div class="grid-1-3">
				<p class="box-title">Step 2: Interest</p>
				<div class="box interest">
					<label>
						<input type="radio" name="interest" id="1">
						Abortion
					</label>

					<label>
						<input type="radio" name="interest" id="2">
						Abstinence
					</label>

					<label>
						<input type="radio" name="interest" id="3">
						Adoption
					</label>

					<label>
						<input type="radio" name="interest" id="4">
						Euthanasia
					</label>

					<label>
						<input type="radio" name="interest" id="5">
						Biotech
					</label>

					<label>
						<input type="radio" name="interest" id="6">
						Life Witness
					</label>
				</div>
			</div>
			<div class="grid-1-3">
				<p class="box-title">Step 3: Activity</p>
				<div class="box activity">
					
					<label>
						<input type="radio" name="activity" id="1">
						Education
					</label>
					<br>

					
					<label>
						<input type="radio" name="activity" id="2">
						Ministry
					</label>
					<br>

					
					<label>
						<input type="radio" name="activity" id="3">
						Advocacy
					</label>
					<br>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var $ = jQuery.noConflict();
		$(function() {

			$interest=0;
			$activity=0;

			$("input[name=interest]:radio").change(function() {
				$interest = $(this).prop('id');
				if ($activity > 0) 
					runMatrix($interest, $activity);
			});

			$("input[name=activity]:radio").change(function() {
				$activity = $(this).prop('id');
				if ($interest > 0) 
					runMatrix($interest, $activity);
			});


			function runMatrix($va1, $val2) {
				$(".you-can .choice").css('display', 'none');
				$(".you-can .choice." + $interest + "-" + $activity).css('display', 'block');
				//console.log('trying to set ' + ".you-can .choice." + $interest + "-" + $activity);
			}
		});
	</script>


	<div class="you-can">
		<h3 class="sub-section-title">You can:</h3>
		<ul class="choice initial">
			Make a selection above!
		</ul>

		<?php 
			/*function console( $data ) {
			    if ( is_array( $data ) )
			        $output = "<script>console.log( '" . implode( ',', $data) . "' );</script>";
			    else
			        $output = "<script>console.log( '" . $data . "' );</script>";

			    echo $output;
			}*/

			$choice_array = array();

			function newItem($entries = array("","","","","","","","","","")) {
				 global $choice_array;
				 $choice_array[] = $entries;
			}


			//==========================================================
			// Execution:

			newItem(array(
				"PRAY—Join Anglicans for Life Prayer Team. Every quarter you will receive a calendar filled with topics to pray for such as women who are considering abortion, those who have had abortions, the elderly, handicapped, teens, families and the Anglican Church.", 
				"x", "x", "x", "x", "x", "x", 
				"", "", "x"));
			newItem(array(
				"Check out <em>www.AnglicansforLife.org</em> for cutting-edge info, articles, publications and DVDs&mdash;visit us often. Link to our web site.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Always carry the number of the local Crisis Pregnancy Center with you or 800-712-HELP or OptionLine.org", "x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Order life-affirming checks.", "", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Speak-up for the Biblical value of life at all times, in all situations.", 
				"x", "x", "x", "x", "x", "x", "", "", "x"));
			newItem(array(
				"Ask your pastor/priest to preach on the sacredness of life. See sample sermons at AFL website.", 
				"", "", "", "", "", "x", "x", "", "x"));
			newItem(array(
				"Invite someone from the Silent No More Awareness Campaign to share their abortion testimony at your church or home group.", 
				"x", "", "", "", "", "", "x", "", ""));
			newItem(array(
				"Put life-affirming bumper stickers on your car or order choose-life license plates if available in your state (choose-life.org).", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Send  Christmas cards that share a life-affirming message and benefit life ministry.", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Set up a bassinet or basket at church to collect children’s and maternity clothing for needy families or a pregnancy center.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Communicate with your doctors about abortion and euthanasia, sharing your value for life and asking them where they stand.", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Send your pastor or Bishop life resources, ask them to declare the diocese or church to be LIFE-AFFIRMING and have on-going ministry and outreach that respects and protects life.", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Donate life-affirming books to local libraries.", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Distribute life-affirming literature in public places and at your church. Post info about Life events at the Grocery Store Bulletin Board.", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Become informed about Planned Parenthood and share info with others. <em>(www.STOPP.org)</em>", 
				"x", "x", "", "", "", "", "x", "", ""));
			newItem(array(
				"Invite friends & priests to hear speakers discussing life issues.", 
				"x", "x", "x", "x", "x", "x", "", "x", "x"));
			newItem(array(
				"Call in to  radio talk shows or TV Shows and share facts about life or ask questions to the pro-life guest to give them more air time.", 
				"x", "x", "x", "x", "x", "x", "", "", "x"));
			newItem(array(
				"Request that pro-life prayers be included in church services, offer to write them and get them from AFL.", 
				"x", "x", "x", "x", "x", "x", "", "x", "x"));
			newItem(array(
				"Invite your church leaders to join you at local or regional programs, events or activities.", 
				"x", "x", "x", "x", "x", "x", "", "x", "x"));
			newItem(array(
				"Provide positive life books and videos in your church library or day care/Sunday school area.", 
				"x", "x", "x", "x", "x", "x", "x", "", "x"));
			newItem(array(
				"Donate regularly to Anglicans for Life!", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Learn about efforts that marginalize the terminally ill and disabled and learn arguments to defend and protect them.", 
				"", "", "", "x", "x", "", "x", "x", "x"));
			newItem(array(
				"Learn more about adoption services available in your area, to encourage and promote adoption.", 
				"", "", "x", "", "", "", "x", "x", ""));
			newItem(array(
				"Become an AFL Life Liaison and receive our monthly NewsBriefs in bulk for your church’s literature rack.", 
				"x", "x", "x", "x", "x", "x", "x", "", "x"));
			newItem(array(
				"Offer practical support for single parents or parents of a handicapped child, such as babysitting or relief care.", 
				"", "", "", "", "", "x", "", "x", ""));
			newItem(array(
				"Pray specifically and regularly for abortionists, and those involved in promoting the pro-abortion viewpoint.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Make up ‘Surprise Satchels’ for new moms, filled with baby items, diapers, booties, blankets & bottles.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Keep a few extra copies of <em>You\'re Not Alone</em> by Jennifer O\'Neill to share with friends who have had abortion.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Send letters to hospitals that perform abortions, expressing concern for both the woman and child’s pain. ", 
				"x", "", "", "", "", "", "", "", "x"));
			newItem(array(
				"Educate yourself and others on pro-life issues such as abortifacient birth control, the dangers of “Living Wills”, using the Anglicans for Life Newsletter and other pro-life publications.", 
				"x", "", "", "x", "", "", "x", "", ""));
			newItem(array(
				"Visit a nursing home; start a program there that reaches out to the elderly, sick, or lonely in your neighborhood or parish.", 
				"", "", "", "x", "", "", "x", "", ""));
			newItem(array(
				"Share pro-life materials and resources with teens and college students. ", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Sponsor pro-life ads in your newspapers promoting pregnancy resource centers or outreach events.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Maintain a file of pro-life literature to pass on to friends and family.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Write to corporations, foundations, and organizations that support Planned Parenthood expressing your disappointment and the negative impact their action has on future consumers and economics.", 
				"x", "x", "x", "x", "x", "x", "", "", "x"));
			newItem(array(
				"Write letters to editors and news-producers in the media encouraging them to report abortion related stories accurately with both sides represented; provide them with useful facts.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Collect pro-life books, videos, tapes, magazines, and other materials for a lending library. Provide appropriate materials for your church youth groups and for Christian Education.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Volunteer to work with local, state, and national pro-life organizations on events or projects of mutual interest.", 
				"x", "x", "x", "x", "x", "x", "", "", "x"));
			newItem(array(
				"Encourage people to choose Advanced Directives to address the issues of euthanasia, assisted suicide and futile care. AFL recom­mends <em>\'Life-Protecting Power of Attorney for Personal Care\'</em>, which can be obtained at 877-439-3348.", 
				"", "", "", "x", "", "", "x", "", ""));
			newItem(array(
				"Use the Internet (YouTube, email, FaceBook, Twitter, etc) to spread the life message, link to life affirming websites and videos.", 
				"x", "x", "x", "x", "", "x", "x", "", ""));
			newItem(array(
				"Wear the “Precious Feet” pin that shows the baby’s feet at 10 weeks after conception, order at Heritage House 800-858-3040.", 
				"x", "", "", "", "", "", "x", "", ""));
			newItem(array(
				"Start an Anglicans for Life Chapter at your church, Diocese or Convocation.", 
				"", "", "", "", "", "x", "x", "x", "x"));
			newItem(array(
				"Raise awareness about abortion’s affect on women and men and the healing that is available (see information on the Silent No More Awareness Campaign).", 
				"x", "", "", "", "", "", "x", "", ""));
			newItem(array(
				"Help an existing, or start a new, Students for Life group at your local or alumni college. (www.StudentsforLife.org)", 
				"", "", "", "", "", "x", "x", "", ""));
			newItem(array(
				"Develop a Mentoring Moms Ministry with new/experienced moms.", 
				"", "", "", "", "", "x", "", "x", ""));
			newItem(array(
				"Develop AFL’s Anglican Angel Ministry at your church.", 
				"x", "x", "x", "", "", "", "", "x", ""));
			newItem(array(
				"Learn how to Sidewalk counsel women before they enter an abortion clinic.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Participate in prayer outside of an abortion facility.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Set up pro-life prayer group.", 
				"", "", "", "", "", "x", "", "x", ""));
			newItem(array(
				"Get trained to present a message of chastity and abstinence to youth at their Sunday School program.", 
				"", "x", "", "", "", "", "x", "", ""));
			newItem(array(
				"Educate yourself. Learn about life issues; abortion, stem cell research, euthanasia, post-abortion healing, chastity, etc. using Anglicans for Life new PROJECT LIFE curriculum.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Volunteer to  Lead AFL’s new PROJECT LIFE Sunday School Curriculum for your church for adults and teens.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Contact other churches in the area and offer pro-life speakers and materials or host workshops, especially during January (Sanctity of Life month), May (Mother’s Day), June (Father’s Day), October (Respect Life month), and November (Adoption Awareness month). Invite the public to any programs you sponsor. Identify like-minded church members and sympathetic clergy in your area.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Encourage your church to become active in the sheltering movement for new or pregnant mothers. Collect clothes and other needed articles for mothers and their babies. Begin “play groups” for mothers and babies. Set up a baby-sitting service. Start a list of families who will host a new or pregnant mother for a short time. Contact the national office for help.", 
				"x", "x", "x", "x", "x", "x", "", "x", ""));
			newItem(array(
				"Find out how to start a perinatal hospice in your community to support and encourage parents who have received a hard diagnosis regarding their unborn child. <em>(www.TheHavenNetwork.org or call 815-877-4931)</em>", 
				"", "", "", "", "", "x", "", "x", ""));
			newItem(array(
				"Start an abortion recovery  program at a Pregnancy Center or in your church & invite the leader to speak at your church.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Get pro-life DVDs and television programs showing on your local cable stations.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Hold a fundraising event to benefit a pro-life organization.", 
				"", "", "", "", "", "x", "x", "", ""));
			newItem(array(
				"Establish a memorial stone/statue to the pre-born in a local cemetery or on Church grounds.", 
				"x", "", "", "", "", "", "", "x", "x"));
			newItem(array(
				"Volunteer at a Pregnancy Resource Center.", 
				"x", "x", "x", "", "", "", "", "x", "x"));
			newItem(array(
				"Sponsor a baby shower for a local Pregnancy Resource Center.", 
				"x", "x", "x", "", "", "", "", "x", "x"));
			newItem(array(
				"Sponsor a life-affirming billboard in your area (consider a Silent No More Awareness billboard which says, “I regret my abortion,” or another which says, “We regret our abortions”. Both include a hotline and web site for help).", 
				"x", "x", "x", "x", "x", "x", "x", "", "x"));
			newItem(array(
				"Participate in a March for Life; organize a bus load of parishioners to attend on January 22 either at the state or national level.", 
				"x", "", "", "", "", "x", "x", "", ""));
			newItem(array(
				"Give a pro-life presentation at your church’s adult Sunday school class.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Set up a pro-life booth at your Community Fair or Diocesan Convention/Convocation using Anglicans for Life pamphlets, brochures and booklets.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Organize a “walk-a-thon” for a pregnancy resource center or pro-life ministry.", 
				"x", "", "", "", "", "", "", "", "x"));
			newItem(array(
				"Participate in the Spring or Fall 40 Days for Life Campaign, featuring fasting and prayer vigils outside an abortion clinic.", 
				"x", "", "", "", "", "", "x", "x", "x"));
			newItem(array(
				"Hold a rummage sale to raise funds for a Pregnancy Resource Center or life ministry such as AFL.", 
				"", "", "", "", "", "x", "", "", "x"));
			newItem(array(
				"Invite a pro-life speaker to speak in your area or to your church’s adult Sunday school class.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Host a booth at a community fair and pass out life-affirming literature.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Ask a church group to host a fix-it jobs day for a local pregnancy center, single moms or elderly people.", 
				"x", "", "", "", "", "", "", "x", ""));
			newItem(array(
				"Attend an pro-life conference or sponsor a student to attend.", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));
			newItem(array(
				"Lead or participate in the “Life Chain” held the first Sunday in October, 530-671-5500.", 
				"x", "", "", "", "", "", "", "", "x"));
			newItem(array(
				"Give roses or carnations on Mother’s Day, with a note attached thanking her for giving life.", 
				"x", "", "", "", "", "", "", "x", "x"));
			newItem(array(
				" Sponsor a chastity/abstinence program, such as “True Love Waits,” with your youth minister.", 
				"", "x", "", "", "", "", "x", "", "x"));
			newItem(array(
				"Encourage friends and family to get involved in life-affirming outreach ", 
				"x", "x", "x", "x", "x", "x", "x", "", ""));

			$size = count($choice_array);
			/*console("Size: $size");
			foreach ($choice_array as $row) {
				console($row);
			}*/

			$interests = 6;

			for ($i=1; $i<=$interests; $i++){
				echo("<ul class='choice $i-1'>");
				for($j=0; $j<$size; $j++) {
					if(($choice_array[$j][$i] == "x") && ($choice_array[$j][7] == "x")) {
						echo("<li>" . $choice_array[$j][0] . "</li>");
					}
				}
				echo("</ul>");

				echo("<ul class='choice $i-2'>");
				for($j=0; $j<$size; $j++) {
					if(($choice_array[$j][$i] == "x") && ($choice_array[$j][8] == "x")) {
						echo("<li>" . $choice_array[$j][0] . "</li>");
					}
				}
				echo("</ul>");

				echo("<ul class='choice $i-3'>");
				for($j=0; $j<$size; $j++) {
					if(($choice_array[$j][$i] == "x") && ($choice_array[$j][9] == "x")) {
						echo("<li>" . $choice_array[$j][0] . "</li>");
					}
				}
				echo("</ul>");
			}
		?>


	</div>
	<?php include(TEMPLATEPATH."/global-parts/img-heading-section.php"); ?>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>

<?php get_footer(); ?>