<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<section class="archives">
	

	<?php

	if ( have_posts() ) : ?>

	<h1 class="page-title">Tag: <?php single_tag_title(); ?></h1>

	<?php while( have_posts() ) : the_post(); ?>

		<article>
			<time class="circle">
				<div class="top"><?php echo get_the_date('M'); ?></div>
				<div class="bottom"><?php echo get_the_date('d'); ?></div>
			</time>

			<?php if(has_post_thumbnail()): ?>
				<figure><?php the_post_thumbnail(); ?></figure>
			<?php else: ?>
				<figure>placeholder</figure>
			<?php endif; ?>

			<div class="title-content">
				<div class="social-buttons">
					<a class="icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>=" target="_blank" title="Share on Facebook"><div class="icon has-fade facebook fa fa-facebook"></div></a>
					<a class="icon" href="https://twitter.com/intent/tweet?text=<?php echo 'New article: ' . get_the_permalink(); ?>" target="_blank" title="Share on Twitter"><div class="icon has-fade fa fa-twitter"></div></a>
					<a class="icon" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>" target="_blank" title="Share on Pinterest"><div class="icon has-fade fa fa-pinterest"></div></a>
				</div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<time class="pub-date"><?php echo 'Published ' . get_the_date('F j, Y'); ?></time>
				<p><?php the_excerpt('Read More'); ?></p>
			</div>
		</article>
	
	<?php endwhile; 
		
	else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

	<a class="older-posts" href="/blog/"><span>all posts</span> &rarr;</a>

</section>

<?php get_footer(); ?>