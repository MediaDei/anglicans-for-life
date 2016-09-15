<?php get_header(); ?>

<?php echo '
<section class="single-post'; if(in_category('qa')) echo ' qa'; echo '">'; ?>

	<?php the_post(); ?>
	<div class="post">
		<time class="circle">
			<div class="top"><?php echo get_the_date('M'); ?></div>
			<div class="bottom"><?php echo get_the_date('d'); ?></div>
		</time>
		<div class="social-buttons">
			<a class="icon" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" title="Share on Facebook"><div class="icon small facebook fa fa-facebook"></div></a>
			<a class="icon" href="https://twitter.com/intent/tweet?text=<?php echo 'New article: ' . get_the_permalink(); ?>" target="_blank" title="Share on Twitter"><div class="icon small fa fa-twitter"></div></a>
			<a class="icon" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>" target="_blank" title="Share on Pinterest"><div class="icon small fa fa-pinterest"></div></a>
		</div>
		<h1 class="title"><?php the_title(); ?></h1>
		<time class="pub-date"><span class="italic"><?php echo 'Published ' . get_the_date('F j, Y'); ?></span></time>
		<div class="line"></div>
		<div class="content"><?php the_content(); ?></div>
		<time class="pub-date bottom"><span class="italic"><?php echo 'Published ' . get_the_date('F j, Y'); ?></span></time>
		<div class="line bottom"></div>
	</div>

	<div class="colored-section-break"></div>
</section>

<?php 
	if(in_category('qa')) { ?>

		<section class="qa-posts border-bottom">
			<h3 class="title italic">Other Q&A entries:</h3>
			<?php 
				$args = array(
					'posts_per_page'	=> '10',
					'cat'				=> '2' // Q&A
				);

				$query = new WP_Query($args);
				while($query->have_posts()) : $query->the_post(); ?>

					<article class="qa">
						<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<time><?php the_date('F j, Y'); ?></time>
						<p class="italic"><?php echo get_the_content(); ?></p>
						<p><a href="<?php the_permalink(); ?>">Read answer →</a></p>
					</article>

			<?php endwhile; ?>

		</section>
	<?php }
	else { ?>

		<section class="latest-posts border-bottom">
			<?php include(TEMPLATEPATH."/global-parts/posts-loop.php"); ?>
		</section>

	<?php } ?>

	<section>
	</section>


<?php get_footer(); ?>