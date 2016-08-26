<?php
if(is_page('archives')){
	// set the "paged" parameter (use 'page' if the query is on a static front page)
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$args = array(
		'offset'					=> '3',
		//'posts_per_page'		=> '5',
		'paged'						=> $paged
	);
}
else{
	$args = array(
		'posts_per_page'	=> '3'
	);
}
$query = new WP_Query($args);
if($query->have_posts()){
	if(is_page('archives')){
		echo '<h1 class="page-title">Archive</h1>';
	}
	

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
				<div class="social-buttons">
					<a class="icon" href="https://www.facebook.com/AnglicansforLife/"><div class="icon has-fade facebook fa fa-facebook"></div></a>
					<a class="icon" href="https://twitter.com/Anglicans4Life"><div class="icon has-fade fa fa-twitter"></div></a>
					<a class="icon" href="#"><div class="icon has-fade fa fa-pinterest"></div></a>
				</div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<time class="pub-date"><?php echo 'Published ' . get_the_date('F j, Y'); ?></time>
				<p><?php the_excerpt('Read More'); ?></p>
			</div>
		</article>
		<?php
	}
	if(is_page('archives')){
	?>
		<div class="pagination">
			<?php echo paginate_links( $args ); ?>
		 </div>
	<?php
	}
	elseif(is_page('home')){
		echo '<a class="older-posts" href="/archives">older posts &rarr;</a>';
	}
	else{
		echo '<a class="older-posts" href="/archives"><span>all posts</span> &rarr;</a>';
	}
}
// clean up after wp_query
wp_reset_postdata(); 
?>
