<?php get_header(); ?>

<section class="teaching-resources">
	<h1 class="page-title">Teaching Resources</h1>
	<p class="top-p">
		<span class="simple-dropcaps">W</span><span class="smallcaps">ith all</span> the other responsibilities that come from working in a church or diocese, being an advocate for Life can sometimes feel more like an additional burden than a calling.  We understand how busy our priests and pastors can be, so we developed a resource page with life-affirming sermons, lectionary teachings, curriculums, and bulletin inserts&mdash;much of which have been written and created by your fellow clergy members&mdash;to help you in educating your Church or diocese about life issues.
	</p>
	
	<?php //phpinfo(); ?>

	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>
</section>

<?php get_footer(); ?>