<?php
if(is_page('blog')){	
	$args = array(
		'posts_per_page'	=> '-1', // unlimited per page
		'cat'				=> '-2'  // skip Q&A posts
	);
}
else{
	$args = array(
		'posts_per_page'	=> '3',  // 3 per page
		'cat'				=> '-2'  // skip Q&A posts
	);
}


if(is_category('')) {
	echo 'THIS IS CATEGORY';
}



$query = new WP_Query($args);
if($query->have_posts()){

	if(is_page('blog')){
		echo '<h1 class="page-title">Blog</h1>';
	}

	while($query->have_posts()): ?>
		<?php $query->the_post(); ?>

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
				<?php the_excerpt('Read More'); ?>
			</div>
		</article>
	
	<?php endwhile; 
	
	if(is_page('blog')){
	?>
		<div class="pagination">
			<?php echo paginate_links( $args ); ?>
		 </div>
	<?php
	}
	elseif(is_page('home')){
		echo '<a class="older-posts" href="/blog/">older posts &rarr;</a>';
	}
	else{
		echo '<a class="older-posts" href="/blog/"><span>all posts</span> &rarr;</a>';
	}
}
// clean up after wp_query
wp_reset_postdata(); 
?>
