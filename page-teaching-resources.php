<?php get_header(); ?>

<section class="teaching-resources">
	<h1 class="page-title">Teaching Resources</h1>
	<p class="top-p">
		<span class="simple-dropcaps">M</span><span class="smallcaps">auris non tempor quam,</span> et lacinia sapien. Mauris accumsan eros eget libero posuere vulputate. Etiam elit elit, elementum sed varius at, adipiscing vitae est. Sed nec felis pellentesque, lacinia dui sed, ultricies sapien.
	</p>
	
	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>
<!--
	<div class="audio-player">
	  <span class="anchor" id="audio-track-1"></span>
		<div class="audio-track">
			<p class="audio-title"><a href="#audio-track-1">Magnificat Chant Instructions</a></p>
			<p class="audio-author">RES Cathedral Musician</p>
			<div class="line"></div>
			<p class="audio-description">An instructional track about how to chant the Magnificat for Evensong</p>
			<audio controls>
			  <source src="http://anglicans-for-life.phasstw/wp-content/uploads/2016/08/Magnificat-demo.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio> 
		</div>

	  <span class="anchor" id="audio-track-2"></span>
		<div class="audio-track">
			<p class="audio-title"><a href="#audio-track-2">Magnificat Chant Instructions</a></p>
			<p class="audio-author">RES Cathedral Musician</p>
			<div class="line"></div>
			<p class="audio-description">An instructional track about how to chant the Magnificat for Evensong</p>
			<audio controls>
			  <source src="http://anglicans-for-life.phasstw/wp-content/uploads/2016/08/Magnificat-demo.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio> 
		</div>

	  <span class="anchor" id="audio-track-3"></span>
		<div class="audio-track">		
			<p class="audio-title"><a href="#audio-track-3">Magnificat Chant Instructions</a></p>
			<p class="audio-author">RES Cathedral Musician</p>
			<div class="line"></div>
			<p class="audio-description">An instructional track about how to chant the Magnificat for Evensong</p>
			<audio controls>
			  <source src="http://anglicans-for-life.phasstw/wp-content/uploads/2016/08/Magnificat-demo.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
			</audio> 
		</div>
	</div>
	-->
</section>

<?php get_footer(); ?>