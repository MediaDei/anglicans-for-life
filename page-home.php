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
					<div class="social-buttons">
						<a href="https://www.facebook.com/AnglicansforLife/"><div class="icon facebook fa fa-facebook"></div></a>
						<a href="https://twitter.com/Anglicans4Life"><div class="icon fa fa-twitter"></div></a>
					</div>
					<h1><?php the_title(); ?></h1>
					<time class="pub-date"><?php echo 'Published ' . get_the_date('F j, Y'); ?></time>
					<p><?php the_excerpt('Read More'); ?></p>
				</div>
			</article>
			<?php
		}
		?>
		<a class="smallcaps older-posts" href="/archives">older posts &rarr;</a>
		<?php
	}
	?>
	<div class="donate">
		<div class="content-wrapper">
			<p>Partner with AFL’s life-affirming ministry today:</p>
			<a class="button" href="">
				<div class="button">Donate</div>
			</a>
		</div>
	</div>
	<div class="qa-twitter">
		<div class="grid">
			<div class="grid-2-3 ask">
				<h2><span class="italic">Ask:</span></h2>
				<p class="question">
					<span class="italic">“There is a lot of recent pro-euthanasia legislation all over the country. I don’t think it’s right, but I don’t have a lot of answers either. Can you help?” -Anne</span>
				</p>
				<a href="#" class="answer-link"><span class="italic">read & respond</span> &rarr;</a>
			</div>
			<div class="grid-1-3">
				<h2>Recent Tweets</h2>
				<ul>
					<li>Tweet</li>
					<li>Tweet</li>
					<li>Tweet</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="img-header-section">
		<h2 class="smallcaps">get involved</h2>
		<div class="line"></div>
		<p>Lorem ipsum dolor sit amet arma virumque cano.</p>
	</div>
	<div class="subscribe">
		<p>Sign up for <span class="italic">Carpe Diem</span>, AFL’s quarterly newsletter:</p>
	</div>
</section>

<?php get_footer(); ?>
