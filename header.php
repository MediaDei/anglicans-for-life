<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		
		<?php 
			if(is_home()) { 
				echo " Blog | ";
				echo bloginfo("name");
			} 
			else { 
				echo wp_title(" | ", false, right);
				echo bloginfo("name");
			} 
		?>

	</title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">
		<header>
			<nav>
				<!--<div class="ribbon">
					<p>Need Help?</p>
				</div>-->
				<div class="buttons-left">
					<a href="#">
						<div class="button">
							Pregnant?
						</div>
					</a>
				</div>
				<a href="/" class="logo">
					<h1 class="smallcaps">Anglicans</h1>
					<h1 class="smallcaps">for life</h1>
				</a>
				<div class="buttons-right">
					<a href="#">
						<div class="button fa fa-envelope-o">
						</div>
					</a>
					<a href="#">
						<div class="button">
							Take Action
						</div>
					</a>
					<a href="#">
						<div class="button">
							Donate
						</div>
					</a>
					<a href="#">
						<div class="button fa fa-bars">
						</div>
					</a>
				</div>
			</nav>

			<?php 
			//get hero for index.php and also apply it to archive.php
			if(is_home() || is_archive()) { 
			  $page_for_posts = get_option( 'page_for_posts' );
        echo '<div class="hero-img" role="image">'.get_the_post_thumbnail($page_for_posts, 'large').'</div>';
			}
			//get hero for all pages except index.php, archive.php, and single.php
			if ( has_post_thumbnail() && !is_single()) {
				echo '<div class="hero-img" role="image">';
				the_post_thumbnail();
				echo '</div>';
				
			}
			if(is_single()){
				echo '<div class="hero-img single-post" role="image">';
				the_post_thumbnail();
				echo '</div>';
			}
			?>
			<div class="logo"></div>
		</header>

	