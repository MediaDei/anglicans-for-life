<?php get_header(); ?>

<section class="lead-life-ministry">
	<h1 class="page-title has-subtitle">Life Ministry</h1>
	<span class="page-title-subtext">in your church</span>
	</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span>
		<span class="smallcaps">nglicans for life is looking</span>
		for people who are passionate about preserving the sanctity of life! We have two opportunities to lead life ministry in your church: <em>Life Leaders</em> and <em>AFL Chapters.</em> Both seek to help clergy and laity ed-ucate, provide ministry, and advocate for life.
	</p>
	<div class="divider">
		<p class="italic">Life Ministry is needed in your church!</p>
	</div>
	<p class="top-p">
		<span class="simple-dropcaps">O</span>
		<span class="smallcaps">ver and over in scripture,</span>
		human life is described as sacred. We are made in God’s own image! But the culture around us celebrates death over life. The Church, therefore, needs to be zealous in its effort to celebrate, protect, and honor life. The Church needs people like you to step up to the challenge and begin life ministry today. Will you join us?
	</p>
</section>

<section class="lead-life-ministry border-top border-bottom">
	<div class="leaders">
		<h2>
			Life Leaders
			<div class="header-img life-leaders"></div>
		</h2>

		<?php echo do_shortcode('[accordion]
		[accordion_button]What is a Life Leader?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]L[/simple_dropcaps][smallcaps]orem ipsum dolor sit amet,[/smallcaps] consectetur adipisicing elit. Vero quo, dolorum aspernatur harum ducimus veritatis illo eaque. Id natus quisquam repudiandae error rem voluptatibus est, rerum minima quis hic. Voluptate.
		[/accordion_hidden_content]
		[/accordion]');

		echo do_shortcode('[accordion]
		[accordion_button]What does a Life Leader do?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]L[/simple_dropcaps][smallcaps]orem ipsum dolor sit amet,[/smallcaps] consectetur adipisicing elit. Vero quo, dolorum aspernatur harum ducimus veritatis illo eaque. Id natus quisquam repudiandae error rem voluptatibus est, rerum minima quis hic. Voluptate.
		[/accordion_hidden_content]
		[/accordion]'); 

		echo do_shortcode('[accordion]
		[accordion_button]I am interested. Where do I start?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]L[/simple_dropcaps][smallcaps]orem ipsum dolor sit amet,[/smallcaps] consectetur adipisicing elit. Vero quo, dolorum aspernatur harum ducimus veritatis illo eaque. Id natus quisquam repudiandae error rem voluptatibus est, rerum minima quis hic. Voluptate.
		[/accordion_hidden_content]
		[/accordion]'); ?>



		<h2>
			AFL Chapters
			<div class="header-img chapter-leaders"></div>
		</h2>

		<?php echo do_shortcode('[accordion]
		[accordion_button]What is a Chapter?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]L[/simple_dropcaps][smallcaps]orem ipsum dolor sit amet,[/smallcaps] consectetur adipisicing elit. Vero quo, dolorum aspernatur harum ducimus veritatis illo eaque. Id natus quisquam repudiandae error rem voluptatibus est, rerum minima quis hic. Voluptate.
		[/accordion_hidden_content]
		[/accordion]');

		echo do_shortcode('[accordion]
		[accordion_button]What does a Chapter Leader do?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]L[/simple_dropcaps][smallcaps]orem ipsum dolor sit amet,[/smallcaps] consectetur adipisicing elit. Vero quo, dolorum aspernatur harum ducimus veritatis illo eaque. Id natus quisquam repudiandae error rem voluptatibus est, rerum minima quis hic. Voluptate.
		[/accordion_hidden_content]
		[/accordion]'); 

		echo do_shortcode('[accordion]
		[accordion_button]I am interested. Where do I start?[/accordion_button]
		[accordion_hidden_content for_button="true"]
		[simple_dropcaps]L[/simple_dropcaps][smallcaps]orem ipsum dolor sit amet,[/smallcaps] consectetur adipisicing elit. Vero quo, dolorum aspernatur harum ducimus veritatis illo eaque. Id natus quisquam repudiandae error rem voluptatibus est, rerum minima quis hic. Voluptate.
		[/accordion_hidden_content]
		[/accordion]'); ?>

	</div>
</section>

<section class="lead-life-ministry">

	<h2 class="sub-section-title">Take the next step:</h2>
	
	<?php include(TEMPLATEPATH."/global-parts/raised-button.php"); ?>
</section>

<?php get_footer(); ?>