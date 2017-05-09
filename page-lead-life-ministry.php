<?php get_header(); ?>

<section class="lead-life-ministry">
	<h1 class="page-title has-subtitle">Lead Life Ministry</h1>
	<span class="page-title-subtext">In Your Church</span>
	</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span>
		<span class="smallcaps">nglicans for life</span>
		invites people who are passionate about protecting life to become Life Leaders or Chapter Leaders. Every Church can and should have a Life Ministry to educate, advocate, and provide ministry to people who are struggling with life issues. Whether it is an unplanned pregnancy, the adoption process, aging parents or infertility, people in your parish need resources and help you can provide.
	</p>
	<div class="divider">
		<p class="italic">Why should I lead life ministry in my church?</p>
	</div>
	<p class="top-p">
		<span class="simple-dropcaps">O</span>
		<span class="smallcaps">ver and over in scripture,</span>
		human life is described as sacred. Every Human is made in God’s own image while popular culture promotes sees life as a throw away commodity. Therefore the Church must be a witness to the sanctity of life. The Church needs people like you to serve God in life ministry and begin celebrating, protecting, and honoring life today. Will you join us?
	</p>
</section>

<section class="lead-life-ministry border-top border-bottom">
	<div class="leaders">
		<h2>
			Life Leaders
			<div class="header-img life-leaders"></div>
		</h2>

		<?php echo do_shortcode('[accordion]
		[acc_button]What is a Life Leader?[/acc_button]
		[acc_content for_button="true"]
		[dropcaps]A[/dropcaps][smallcaps] life leader[/smallcaps] is a person, ordained or lay, who serves as a conduit between Anglicans for Life and their church. He or she must have a passion for upholding the sacredness of life and a willingness to be a leader.

		[/acc_content]
		[/accordion]');

		echo do_shortcode('[accordion]
		[acc_button]What does a Life Leader do?[/acc_button]
		[acc_content for_button="true"]
		[dropcaps]S[/dropcaps][smallcaps]tarting with the simple step[/smallcaps] of distributing AFL’s quarterly newsletter, Carpe Diem in your church to holding one life-affirming activity every year, Life Leaders use the resources and tools provided by Anglicans for Life to educate, inspire, and motivate others. AFL strives to provide hundreds of ideas and dozens of resources to help and guide the efforts of Life Leaders.
		[/acc_content]
		[/accordion]'); 

		echo do_shortcode('[accordion]
		[acc_button]I am interested. Where do I start?[/acc_button]
		[acc_content for_button="true"]
		[dropcaps]W[/dropcaps][smallcaps]e encourage you to start[/smallcaps] with Prayer and Self-Evaluation. Pray for God’s guidance and discernment, seeking to understand the Lord’s call on your life. Ask yourself questions like: <em>How strong is my walk with the Lord? Do I feel called by God to this ministry? How are my leadership skills? Do I have time for this commitment?</em> You also need approval from your priest, or Vestry.

			<br><br>
			To apply to be a Life Leader, use our <a href="' . get_site_url() . '/contact/">contact form</a> or reach out to our office directly at 412-749-0455.
		[/acc_content]
		[/accordion]'); ?>


		<h2>
			AFL Chapters
			<div class="header-img chapter-leaders"></div>
		</h2>

		<?php echo do_shortcode('[accordion]
		[acc_button]What is a Chapter?[/acc_button]
		[acc_content for_button="true"]
		[dropcaps]A[/dropcaps][smallcaps]chapter[/smallcaps] is formed when a church has several people who are actively committed to promoting Life through ministry, education, and advocacy. Chapters are encouraged to establish an Action Plan and see themselves as a mission outreach opportunity for their Church. Chapters have a Chapter Leader, who serves as the link between the Chapter members and AFL.
		[/acc_content]
		[/accordion]');

		echo do_shortcode('[accordion]
		[acc_button]What does a Chapter Leader do?[/acc_button]
		[acc_content for_button="true"]
		[dropcaps]A[/dropcaps][smallcaps]chapter leader[/smallcaps] plans and organizes one chapter event quarterly and regularly communicates with Chapter members and distributes AFL’s quarterly newsletter, <em>Carpe Diem</em> in the church.
		[/acc_content]
		[/accordion]'); 

		echo do_shortcode('[accordion]
		[acc_button]I am interested. Where do I start?[/acc_button]
		[acc_content for_button="true"]
		[dropcaps]W[/dropcaps][smallcaps]e encourage you to start[/smallcaps] with Prayer and Self-Evaluation. Pray for God’s guidance and discernment, seeking to understand the Lord’s call on your life. Ask yourself questions like: <em>How strong is my walk with the Lord? Do I feel called by God to this ministry? How are my leadership skills? Do I have time for this commitment?</em> You also need approval from your priest, or Vestry.

			<br><br>
			The first step to becoming a Chapter Leader is to contact Anglicans for Life to request a Chapter Formation Packet. Use our <a href="' . get_site_url() . '/contact/">contact form</a> or reach out to our office directly at 412-749-0455.
		[/acc_content]
		[/accordion]'); ?>


		<script type="text/javascript">
			var $ = jQuery.noConflict();
			$(document).ready(function() {
				var e = "info"; // replace with your email username
				var t = "anglicansforlife"; // replace with your email provider
				var n = ".org"; // replace with your email provider TLD
				var r = "mailto:" + e + '@' + t + n; //href
				$('#hidden-email').attr('href',r).html(e + '@'+t+n);
			});
		</script>


	</div>
</section>

<section class="lead-life-ministry">

	<h2 class="sub-section-title">Take the next step:</h2>
	
	<?php include(TEMPLATEPATH."/global-parts/raised-button.php"); ?>
</section>

<?php get_footer(); ?>