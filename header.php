<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta property="og:url"           content="<?php echo get_the_permalink(); ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo the_title_attribute(); ?>" />
	<meta property="og:description"   content="Anglicans For Life" />
	<meta property="og:image"         content="<?php echo the_post_thumbnail_url( 'large'); ?>" />

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width">

	<title>
		<?php 
			if(is_home()) { 
				echo " Blog | ";
				echo bloginfo("name");
			} 
			else { 
				echo wp_title(" | ", false, 'right');
				echo bloginfo("name");
			} 
		?>
	</title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">
		<header>
			<span class="anchor" id="menu"></span><!--used to close/opon nav menu and show/hide menu buttons-->

			<nav class="grid">
				<a href="<?php echo get_site_url() ?>/need-help/" class="ribbon">
					<div class="top-ribbon">
						<p>Need Help?</p>
					</div>
					<div class="bottom-ribbon"></div>
					<div class="ribbon-shadow"></div>
				</a>
				<div class="buttons-left">
					<a href="<?php echo get_site_url() ?>/pregnant/">
						<div class="button">Pregnant?</div>
					</a>
				</div>
				<a href="<?php echo get_site_url() ?>/" class="logo">
					<h1 class="smallcaps">Anglicans</h1>
					<h1 class="smallcaps">for life</h1>
				</a>
				<div class="buttons-right">
					<a href="<?php echo get_site_url() ?>/contact/">
						<div class="button fa fa-envelope-o"></div>
					</a>
					<a href="<?php echo get_site_url() ?>/take-action/">
						<div class="button">Take Action</div>
					</a>
					<a href="https://connect.egiving.com/general-fund61/anglicans-for-life-inc">
						<div class="button">Donate</div>
					</a>
					<a class="menu open" href="#menu">
						<div class="button fa fa-bars"></div>
					</a>
					<a class="menu close" href="#">
						<div class="button fa fa-bars"></div>
					</a>
				</div>
			</nav>


			<?php 
			//get hero for index.php and also apply it to archive.php
			if(is_home() || is_archive()) { 
				$page_for_posts = get_option( 'page_for_posts' );
				echo '<div class="hero-img" role="image">';
				include(TEMPLATEPATH."/global-parts/navigation-menu.php");
				get_the_post_thumbnail($page_for_posts, 'large');
				echo '</div>';
			}
			//get hero for all pages except index.php, archive.php, and single.php
			if ( has_post_thumbnail() && !is_single()) {
				echo '<div class="hero-img" role="image">';
				include(TEMPLATEPATH."/global-parts/navigation-menu.php");
				if(is_page('home')){
					the_post();
					echo '
					<div class="trending-wrapper">
					<div class="trending-issues">
						<h2>Trending issues:</h2>
						' . get_the_content() . '
						<a href="/issues/" class="smallcaps all-issues">all issues &rarr;</a>
					</div>
					</div>';
				}
				the_post_thumbnail();
				echo '</div>';
				
			}
			if(is_single()){
				echo '<div class="hero-img single-post" role="image">';
					include(TEMPLATEPATH."/global-parts/navigation-menu.php");
					the_post_thumbnail();
				echo '</div>';
			}	
			?>
		</header>
	