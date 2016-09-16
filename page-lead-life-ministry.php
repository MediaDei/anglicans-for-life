<?php get_header(); ?>

<section class="lead-life-ministry">
	<h1 class="page-title has-subtitle">Life Ministry</h1>
	<span class="page-title-subtext">in your church</span>
	</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span>
		<span class="smallcaps">nglicans for life is looking</span>
		for people who are passionate about preserving the sanctity of life! We have two opportunities to lead life ministry in your church: <em>Life Leaders</em> and <em>AFL Chapters.</em> Both seek to help clergy and laity ed-ucate, provide ministry, and advocate for life.
	</p>
	<div class="divider">
		<p class="italic">Life Ministry is needed in your church!</p>
	</div>
	<p class="top-p">
		<span class="simple-dropcaps">O</span>
		<span class="smallcaps">ver and over in scripture,</span>
		human life is described as sacred. We are made in God’s own image! But the culture around us celebrates death over life. The Church, therefore, needs to be zealous in its effort to celebrate, protect, and honor life. The Church needs people like you to step up to the challenge and begin life ministry today. Will you join us?
	</p>
</section>

<section class="lead-life-ministry border-top border-bottom">
	<div class="leaders">
		<h2>
			Life Leaders
			<div class="header-img life-leaders"></div>
		</h2>

		<?php echo do_shortcode('[accordion]
		[accordion_button]What is a Life Leader?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]A[/simple_dropcaps][smallcaps] life leader[/smallcaps] is a person who works in partnership with Anglicans for Life within their church. He or she may be ordained or laity but must have a passion for upholding the sanctity of life.

		[/accordion_hidden_content]
		[/accordion]');

		echo do_shortcode('[accordion]
		[accordion_button]What does a Life Leader do?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]A[/simple_dropcaps][smallcaps]s a life leader[/smallcaps], you will be expected to uphold the sanctity of life by talking about life issues, promoting volunteer opportunities, and using tools provided by Anglicans for Life to educate others. The minimum responsibilities for Life Leaders are to educate others in your church about life issues by distributing AFL’s Carpe Diem newsletters quarterly and to hold one life-affirming service (such as Sanctity of Life Sunday) or offering per year. Life Leaders are also asked to join the AFL online community for ideas, encouragement, prayer, and friendship as we strive together to make a difference for Life. There are many additional ways in which Life Leaders can impact their churches and communities. AFL strives to provide hundreds of ideas and dozens of resources to help and guide the efforts of Life Leaders.
		[/accordion_hidden_content]
		[/accordion]'); 

		echo do_shortcode('[accordion]
		[accordion_button]I am interested. Where do I start?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]B[/simple_dropcaps][smallcaps]efore registering[/smallcaps] to be a Life Leader, we encourage you to start with Prayer and Self-Evaluation. Pray for God’s guidance and discernment, seeking to understand the Lord’s call on your life. Ask yourself questions like: <em>How strong is my relationship with the Lord? Do I feel called by God to this ministry? How are my leadership skills? Do I have time and emotional and spiritual energy for this commitment?</em>

			<br><br>
			To apply to be a Life Leader, you can provide some basic contact info on our <a href="' . get_site_url() . '/contact/">contact form</a> or reach out to our office directly at <a id="hidden-email" href="#">Info@AnglicansForLife.org</a>.
		[/accordion_hidden_content]
		[/accordion]'); ?>


		<h2>
			AFL Chapters
			<div class="header-img chapter-leaders"></div>
		</h2>

		<?php echo do_shortcode('[accordion]
		[accordion_button]What is a Chapter?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]A[/simple_dropcaps][smallcaps]Chapter[/smallcaps] is formed when a church has several people who are actively committed to promoting Life through ministry, education, and advocacy. A Chapter has a Chapter Leader, who serves as the link between the Chapter members and AFL.
		[/accordion_hidden_content]
		[/accordion]');

		echo do_shortcode('[accordion]
		[accordion_button]What does a Chapter Leader do?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]A[/simple_dropcaps][smallcaps]chapter leader[/smallcaps] has the same minimum responsibilities as a Life Leader, but also holds one chapter event or gathering quarterly and regularly communicates with Chapter members.
		[/accordion_hidden_content]
		[/accordion]'); 

		echo do_shortcode('[accordion]
		[accordion_button]I am interested. Where do I start?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]B[/simple_dropcaps][smallcaps]efore registering[/smallcaps] to be a Chapter Leader, we encourage you to start with Prayer and Self-Evaluation. Pray for God’s guidance and discernment, seeking to understand the Lord’s call on your life. Ask yourself questions like: <em>How strong is my relationship with the Lord? Do I feel called by God to this ministry? How are my leadership skills? Do I have the time and emotional and spiritual energy for this commitment?</em>

			<br><br>
			To become a Chapter Leader, you must first recruit a few potential Chapter members. When you have several people ready to join you in forming a Chapter in your church, you can start the process of forming a chapter by providing some basic contact info on our <a href="' . get_site_url() . '/contact/">contact form</a> or reaching out to our office directly at <a id="hidden-email" href="#">Info@AnglicansForLife.org</a>.
		[/accordion_hidden_content]
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