<?php get_header(); ?>
<section class="issues">
	<h1 class="page-title">Issues</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span><span class="smallcaps">nglicans for Life</span> is a life-affirming ministry. We celebrate, honor, and protect life from conception to natural death and every stage in between because we believe that life is a sacred gift given to us by God! 
		<br>
		<br>
		In our culture there are sadly many ways to cause harm to or end the lives of the unborn, the elderly, and the vulnerable.  But it is our duty and privilege to educate and engage the Church in protecting these people and changing our culture to one that values Life at all stages.
		<br>
		<br>
		Lean more about the issues we address and what you can do to help!
	</p>

	<div class="bubbles grid">
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/abortion/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'abortion', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">Abortion</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/bioethics/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'bioethics', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">Bioethics</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/after-abortion/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'after-abortion', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">After-abortion</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/abstinence/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'abstinence', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">Abstinence</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/pregnancy/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'pregnancy', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">Pregnancy</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/adoption/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'adoption', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">Adoption</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/end-of-life/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'end-of-life', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">End of Life</p>
		</div>
		<div class="grid-1-3">
			<a href="<?php echo get_site_url() ?>/issues/social-justice/" class="bubble-link">
				<div class="bubble">
				<?php $my_posts = get_posts($args = array(
					  'name'        => 'social-justice', 'post_type'   => 'page',
					  'post_status' => 'publish'
				));
				foreach ($my_posts as $post) :
					echo get_the_post_thumbnail($post->the_ID, 'thumbnail');
				endforeach; ?>
				</div>
			</a>
			<p class="bubble-title">Social Justice</p>
		</div>
	</div>
	<div class="colored-section-break"></div>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>
<?php get_footer(); ?>