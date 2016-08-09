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
		<p>
			<span class="italic">Life Ministry is needed in your church!</span>
		</p>
	</div>
	<p class="top-p">
		<span class="simple-dropcaps">O</span>
		<span class="smallcaps">ver and over in scripture,</span>
		human life is described as sacred. We are made in God’s own image! But the culture around us celebrates death over life. The Church, therefore, needs to be zealous in its effort to celebrate, protect, and honor life. The Church needs people like you to step up to the challenge and begin life ministry today. Will you join us?
	</p>
	<div class="colored-section-break"></div>
	
	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>


	<div class="colored-section-break"></div>

	<h2>Take the next step:</h2>
</section>

<?php get_footer(); ?>