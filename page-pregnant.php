<?php get_header(); ?>

<section class="pregnant">
	<h1 class="page-title">Pregnant?</h1>
	<h2 class="msg">A message from Georgette:</h2>
	<p class="msg-p">
		<span class="simple-dropcaps">I</span>
		<span class="smallcaps">f you've recently found</span>
		out that you are pregnant you may be happy and excited or shocked and scared or both. Pregnancy should be a time of celebration, but for you it may feel more like a problem that you wish would just go away. You may be hurt that those who care about you aren’t excited and supportive. If you are feeling alone, scared, or needing help to deal with your problem,
	</p>

	<?php 
		$phoneform = true;
		include(TEMPLATEPATH."/global-parts/raised-button.php"); 
	?>
	
	<div class="development-slider">
		<div class="top">
			<div class="slider-icon"></div>
			<h2>Stages of fetal<br>development:</h2>

		</div>
		<div class="inner-content">
			<?php
			if ( function_exists( 'soliloquy' ) ) { soliloquy( 'fetal-development-slider', 'slug' ); } 
			?>
		</div>
	</div>

	<div class="considering-abortion">
		<h2 class="sub-section-title">Considering Abortion?</h2>
		<div class="grid">
			<div class="grid-1-2">
				<a href="http://youroptions.com" class="considering-button">
					<div class="considering-button options">
						<div class="text">
							<p class="top">
								Your options
							</p>
							<p class="bottom">
								www.youroptions.com
							</p>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-1-2">
				<a href="http://abortiontestimonies.com" class="considering-button">
					<div class="considering-button voices">
						<div class="text">
							<p class="top">
								Women voices
							</p>
							<p class="bottom">
								www.abortiontestimonies.com
							</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<p class="contact-text title italic">Or contact Georgette:</p>

		<p class="contact-text">She had an abortion at age 16 — she is happy to talk with you.</p>
		<br>

		<?php 
			$phoneform = false;
			include(TEMPLATEPATH."/global-parts/raised-button.php"); 
		?>
	</div>

	<div class="colored-section-break"></div>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>

<?php get_footer(); ?>