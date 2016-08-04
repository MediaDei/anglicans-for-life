<?php get_header(); ?>

<section>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<time class="circle">
			<div class="top"><?php echo get_the_date('M'); ?></div>
			<div class="bottom"><?php echo get_the_date('d'); ?></div>
		</time>
		<div class="social-buttons">
			<a href="https://www.facebook.com/AnglicansforLife/"><div class="icon facebook fa fa-facebook"></div></a>
			<a href="https://twitter.com/Anglicans4Life"><div class="icon fa fa-twitter"></div></a>
		</div>
		<h1 class="title"><?php the_title(); ?></h1>
		<time class="pub-date"><span class="italic"><?php echo 'Published ' . get_the_date('F j, Y'); ?></span></time>
		<?php the_content(); ?>
		<div class="line"></div>
	</div>	
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>