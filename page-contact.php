<?php get_header(); ?>

<section class="contact">
	<h1 class="page-title">Contact</h1>
	<span class="page-title-subtext">Anglicans for Life</span>

	<?php 
	$loop = new WP_Query( array( 'post_type' => 'wpcf7_contact_form') );
	$loop->the_post();
	    echo do_shortcode('[contact-form-7 id="' . get_the_ID() . '" title="Contact form"]');
	wp_reset_query(); 
	?>

	<p><span class="smallcaps">We value your privacy.</span><br>
	<a class="italic" href="/terms-privacy/">Read our Privacy Policy &rarr;</a></p>
</section>

<?php get_footer(); ?>