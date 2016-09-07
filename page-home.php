<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section class="home">
	<?php include(TEMPLATEPATH."/global-parts/posts-loop.php"); ?>
	<?php include(TEMPLATEPATH."/global-parts/donate-section-divider.php"); ?>
	
	<div class="qa-twitter">
		<div class="grid">
			<div class="grid-2-3 ask">
				<h2 class="italic">Ask:</h2>
				<p class="question italic">

				<?php 
					$query = new WP_Query("cat=2");
					$query->the_post(); 
					echo get_the_content();
				?>

				</p>
				<div class="line"></div>
				<a href="<?php the_permalink(); ?>" class="answer-link italic">read & respond &rarr;</a>
			</div>
			<div class="twitter grid-1-3">
				<h2><span class="italic">Recent Tweets</span></h2>
				<a class="twitter-follow-button"
  				 href="https://twitter.com/Anglicans4Life"
  				 data-show-count="false">
						Follow @AFL
				</a>
				<div class="tweets">
					<a 
					class="twitter-timeline" 
					href="https://twitter.com/Anglicans4Life"
					data-show-replys="false"
					data-link-color="#2C80FF"
					data-chrome="transparent noheader nofooter noborders">
					</a>
					<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
		</div>
	</div>
	<?php include(TEMPLATEPATH."/global-parts/img-heading-section.php"); ?>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>

<?php get_footer(); ?>
