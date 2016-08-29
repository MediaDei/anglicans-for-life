<?php get_header(); ?>

<section class="terms-privacy">
	<h1 class="page-title">Terms & Privacy</h1>
	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>
	<?php include(TEMPLATEPATH."/global-parts/donate-section-divider.php"); ?>
</section>

<?php get_footer(); ?>