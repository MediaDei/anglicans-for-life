<?php get_header(); ?>

<section class="get-involved">
	<h1 class="page-title">Get Involved</h1>

	<p class="top-p">
		<span class="simple-dropcaps">M</span>
		<span class="smallcaps">auris non tempor</span> quam, et lacinia sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
	</p>
	<a href="#priests-pastors-section" class="priests-pastors-link">
		Special section for Priests and Pastors below &darr;
	</a>

	<?php include(TEMPLATEPATH."/global-parts/pray-for-life-subscription.php"); ?>
	
	<div class="grid">
		<div class="grid-1-3">
			<a class="bubble" href="#">
				<div class="bubble bubble-1"></div>
			</a>
			<h3 class="bubble-title">
				Find a Life-Affirming Church or Leader
			</h3>
				<p class="bubble-text">
					Arma virumque cano.
			</p>
		</div>

		<div class="grid-1-3">
			<a class="bubble" href="<?php echo get_site_url() ?>/lead-life-ministry/">
				<div class="bubble bubble-2"></div>
			</a>
			<h3 class="bubble-title">
				Lead Life Ministry
			</h3>
			<p class="bubble-text">
				Help your church establish a life witness. Lorem ipsum sit.
			</p>
		</div>

		<div class="grid-1-3">
			<a class="bubble" href="<?php echo get_site_url() ?>/take-action/">
				<div class="bubble bubble-3"></div>
			</a>
			<h3 class="bubble-title">
				Take Action for Life
			</h3>
			<p class="bubble-text">
				Help people defend life and promote Christian values.
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
					<div class="bubble bubble-4">
						
					</div>
				</a>
				<h3 class="bubble-title">Pastoral Resources</h3>
			</div>
			<div class="grid-1-2">
				<a href="<?php echo get_site_url() ?>/teaching-resources/#audio-track-1" class="bubble">
					<div class="bubble bubble-5">
						
					</div>
				</a>
				<h3 class="bubble-title">Teaching Resources</h3>
			</div>
		</div>
	</div>


	<?php include(TEMPLATEPATH."/global-parts/donate-section-divider.php"); ?>
</section>

<?php get_footer(); ?>