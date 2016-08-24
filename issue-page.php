<?php
/*
Template Name: Issue Page
*/
?>

<?php get_header(); ?>

<section class="issue">

	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>

	<?php include(TEMPLATEPATH."/global-parts/issue-get-involved.php"); ?>

	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>

<?php get_footer(); ?>