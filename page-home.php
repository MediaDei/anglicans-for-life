<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<section>
	<?php
	$args = array(
		'posts_per_page'	=> '3'
	);
	$query = new WP_Query($args);
	if($query->have_posts()){
		while($query->have_posts()){
			$query->the_post();
			?>
			<article>
				<time class="circle">
					<div class="top"><?php echo get_the_date('M'); ?></div>
					<div class="bottom"><?php echo get_the_date('d'); ?></div>
				</time>
				<?php if(has_post_thumbnail()){
					?>
					<figure><?php the_post_thumbnail(); ?></figure>
					<?php
				}
				else{
					?>
					<figure>placeholder</figure>
					<?php
				}
				?>
				<div class="title-content">
					<h1><?php the_title(); ?></h1>
					<time class="pub-date"><?php echo 'Published ' . get_the_date('F j,Y'); ?></time>
					<p><?php the_excerpt('Read More'); ?></p>
				</div>
			</article>
			<?php
		}
	}
	?>
</section>

<?php get_footer(); ?>
