<?php get_header(); ?>

<section class="single-post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">

		<time class="circle">
			<div class="top"><?php echo get_the_date('M'); ?></div>
			<div class="bottom"><?php echo get_the_date('d'); ?></div>
		</time>
		<div class="social-buttons">
			<a class="icon" href="https://www.facebook.com/AnglicansforLife/"><div class="icon small facebook fa fa-facebook"></div></a>
			<a class="icon" href="https://twitter.com/Anglicans4Life"><div class="icon small fa fa-twitter"></div></a>
		</div>
		<h1 class="title"><?php the_title(); ?></h1>
		<time class="pub-date"><span class="italic"><?php echo 'Published ' . get_the_date('F j, Y'); ?></span></time>
		<div class="line"></div>
		<?php the_content(); ?>
		<time class="pub-date bottom"><span class="italic"><?php echo 'Published ' . get_the_date('F j, Y'); ?></span></time>
		<div class="line bottom"></div>
	</div>	
	<?php endwhile; endif; ?>
</section>

<section class="qa-posts border-top border-bottom">
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
			</article>

	<?php endwhile; ?>

</section>
<section>
</section>

<?php get_footer(); ?>