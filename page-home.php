<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section>
	<?php include(TEMPLATEPATH."/global-parts/posts-loop.php"); ?>
	<?php include(TEMPLATEPATH."/global-parts/donate-section-divider.php"); ?>
	<div class="qa-twitter">
		<div class="grid">
			<div class="grid-2-3 ask">
				<h2><span class="italic">Ask:</span></h2>
				<p class="question">
					<span class="italic">“There is a lot of recent pro-euthanasia legislation all over the country. I don’t think it’s right, but I don’t have a lot of answers either. Can you help?” -Anne</span>
				</p>
				<div class="line"></div>
				<a href="#" class="answer-link"><span class="italic">read & respond</span> &rarr;</a>
			</div>
			<div class="twitter grid-1-3">
				<h2><span class="italic">Recent Tweets</span></h2>
				<a class="twitter-follow-button"
  				 href="https://twitter.com/Anglicans4Life"
  				 data-show-count="false">
						Follow @AFL       </a>
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
