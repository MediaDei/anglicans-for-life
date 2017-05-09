<?php get_header(); ?>

<section class="get-involved">
	<h1 class="page-title">Get Involved</h1>

	<p class="top-p">
		<span class="simple-dropcaps">W</span>
		<span class="smallcaps">e believe</span> that every person in every church doing one thing every day to uphold the sacredness of Life can make a difference—and every person means you!  No matter your age, experience, or talents, there are things you can do to celebrate, protect, and honor Life.  We’ve provided some resources, examples, and guides to help you in this ministry.  Will you join with us?
	</p>

	<script type="text/javascript">
		var $ = jQuery.noConflict();
		$(function() {
			$(".priests-pastors-link").click(function() {
				$('html, body').animate({scrollTop: $("#priests-pastors-section").offset().top}, 500);
			});
		});
	</script>

	<a href="#priests-pastors-section" class="priests-pastors-link">
		Special section for Priests and Pastors below &darr;
	</a>


	<?php include(TEMPLATEPATH."/global-parts/pray-for-life-subscription.php"); ?>
	
	<div class="grid">
		<div class="grid-1-3">
			<a class="bubble" href="http://vps27450.inmotionhosting.com/~anglicansforlife/category/find-a-leader/">
				<div class="bubble bubble-1"></div>
			</a>
			<h3 class="bubble-title life-affirming">
				<span class="arrow">&rarr;</span> <a href="http://vps27450.inmotionhosting.com/~anglicansforlife/category/find-a-leader/">Life-Affirming Leaders</a><br>
				<span class="arrow">&rarr;</span> <a href="http://vps27450.inmotionhosting.com/~anglicansforlife/category/find-life-affirming-churches/">Life-Affirming Churches</a>
			</h3>
			<p class="bubble-text">
				Find those who affirm life.
			</p>
		</div>

		<div class="grid-1-3">
			<a class="bubble" href="<?php echo get_site_url() ?>/lead-life-ministry/">
				<div class="bubble bubble-2"></div>
			</a>
			<h3 class="bubble-title">
				<a href="<?php echo get_site_url() ?>/lead-life-ministry/">Lead Life Ministry</a>
			</h3>
			<p class="bubble-text">
				Educate & advocate in your churches and communities.
			</p>
		</div>

		<div class="grid-1-3">
			<a class="bubble" href="<?php echo get_site_url() ?>/take-action/">
				<div class="bubble bubble-3"></div>
			</a>
			<h3 class="bubble-title">
				<a href="<?php echo get_site_url() ?>/take-action/">Take Action for Life</a>
			</h3>
			<p class="bubble-text">
				Not sure how to get started? We have suggestions!
			</p>
		</div>
	</div>

	<div class="colored-section-break"></div>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
	<div class="colored-section-break"></div>

	<div id="priests-pastors-section">
		<h2>Priests & Pastors</h2>
		<div class="grid lower-grid">
			<div class="grid-1-2">
				<a href="<?php echo get_site_url() ?>/pastoral-resources/" class="bubble">
					<div class="bubble bubble-4"></div>
				</a>
				<h3 class="bubble-title">
					<a href="<?php echo get_site_url() ?>/pastoral-resources/">Pastoral Resources</a>
				</h3>
				<p class="bubble-text">
					Helpful guides for ministering to others facing life issues.
				</p>

			</div>
			<div class="grid-1-2">
				<a href="<?php echo get_site_url() ?>/teaching-resources/#audio-track-1" class="bubble">
					<div class="bubble bubble-5"></div>
				</a>
				<h3 class="bubble-title">
					<a href="<?php echo get_site_url() ?>/teaching-resources/#audio-track-1">Teaching Resources</a>
				</h3>
				<p class="bubble-text">
					Useful tools for educating your church about life issues.
				</p>
			</div>
		</div>
	</div>


	<?php include(TEMPLATEPATH."/global-parts/donate-section-divider.php"); ?>
</section>

<?php get_footer(); ?>