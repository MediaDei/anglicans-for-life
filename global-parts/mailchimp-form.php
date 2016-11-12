<span class="anchor" id="close-sub"></span>
<div id="subscribe">

	<?php 
	$loop = new WP_Query( array( 'post_type' => 'mc4wp_form') );
	$loop->the_post();
		echo do_shortcode('[mc4wp_form id="' . get_the_ID() . '" title="MailChimp form"]');
	wp_reset_query(); 
	?>

</div>