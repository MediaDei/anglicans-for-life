
<?php get_header(); ?>

<section class="pastoral-resources">
	<h1 class="page-title">Pastoral Resources</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span><span class="smallcaps">t the heart</span> of AFL’s ministry is our effort to come alongside the Anglican Church. We know that church leaders have their hands full, so we want to make Life-Affirming Ministry as easy as possible. We’re always compiling information, articles, news updates, statistics, curriculums, and more, so that it’s simple and useful for the church to utilize.
	</p>

	<?php //get page contents
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); 
			the_content();
		} // end while
	} // end if
	?>


<!--
	<div class="accordion">
		<?php $accordionCount++ ?>
		<span class="anchor" id="accordion-button-<?php echo $accordionCount; ?>"></span>
		<a class="accordion-button-anchor anchor-button" href="#accordion-button-<?php echo $accordionCount; ?>">
			<div class="accordion-button" role="button">
				<p class="button-text">
					Teaching students the abstinence message
				</p>
			</div>
		</a>
		<div class="accordion-button-<?php echo $accordionCount; ?> accordion-button-hidden hidden-content">
			<p class="hidden-text">
				<span class="simple-dropcaps">L</span><span class="smallcaps">orem ipsum dolor sit amet,</span> consectetur adipisicing elit. Provident libero eum officiis ipsam quasi, beatae natus praesentium fuga iste unde sapiente velit doloremque, fugit, laudantium, minus dicta? Natus, odit, magnam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quas expedita, explicabo autem, aspernatur molestias iste enim necessitatibus commodi. Rerum cumque veniam quam debitis eveniet a delectus ullam excepturi aperiam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil accusamus eos consectetur dicta at, tempore optio odit similique modi minus, ut necessitatibus maiores sequi molestiae possimus delectus hic alias eligendi.
			</p>
		</div>
		<style>
		/* reveal when targeted */
			.anchor:target + .anchor-button + .accordion-button-<?php echo $accordionCount; ?>{
				height: auto;
				padding: 30px 30px 15px;
				position: relative;
				top: -10px;
				z-index: -1;
				opacity: 1;
			}
		</style>
	</div>
-->


<!--
	<div class="doc-list">
		<h2 class="doc-cat">Liturgies</h2>
		<ul>
			<li>Memorial for the unborn  <a href="#" class="pdf"></a><a href="#" class="docx"></a></li>
			<li>Holy Communion for mothers & unborn children  <a href="#" class="pdf"></a><a href="#" class="docx"></a></li>
			<li>Summit 2016 liturgy  <a href="#" class="pdf"></a><a href="#" class="docx"></a></li>
			<li>lorem ipsum <a href="#" class="pdf"></a></li>
			<li>lorem ipsum dolor <a href="#" class="docx"></a></li>
			<li>lorem ipsum dolor sit <a href="#" class="docx"></a></li>
		</ul>
	</div>

	<div class="doc-list">
		<h2 class="doc-cat">Litanies</h2>
		<ul>
			<li>Memorial for the unborn  <a href="#" class="pdf"></a><a href="#" class="docx"></a></li>
			<li>Holy Communion for mothers & unborn children  <a href="#" class="pdf"></a><a href="#" class="docx"></a></li>
			<li>Summit 2016 liturgy <a href="#" class="pdf"></a></li>
			<li>lorem ipsum <a href="#" class="pdf"></a></li>
			<li>lorem ipsum dolor <a href="#" class="docx"></a></li>
			<li>lorem ipsum dolor sit <a href="#" class="docx"></a></li>
		</ul>
	</div>
-->
</section>

<?php get_footer(); ?>