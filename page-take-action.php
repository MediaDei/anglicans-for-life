<?php get_header(); ?>

<section class="take-action">
	<h1 class="page-title">Take Action</h1>
	<p class="top-p">
		<span class="simple-dropcaps">C</span><span class="smallcaps">urbabitur lobortis id lorem</span>
		Quisque volutpat augue enim, pulvinar lobortis nibh lacinia at. Vestibu-lum nec erat ut mi sollicitudin porttitor id sit amet risus. Nam tempus vel odio vitae aliquam. In imperdiet eros id lacus vestibulum vestibulum. Suspendisse fermentum sem sagittis ante venenatis egestas quis vel justo. Maecenas semper suscipit nunc, sed aliquam sapien convallis eu.
	</p>
	<div class="grid">
		<div class="grid-1-2">
			<p class="box-title left">Action ideas:</p>
			<div class="box left"></div>
		</div>
		<div class="grid-1-2">
			<p class="box-title right">Resources:</p>
			<div class="box right"></div>
		</div>
	</div>
	
	<?php include(TEMPLATEPATH."/global-parts/pray-for-life-subscription.php"); ?>

	<div class="what-can-i-do border-top">
		<h2 class="sub-section-title">What Can I Do?</h2>
		<div class="grid">
			<div class="grid-1-3">
				<p class="box-title">Step 1: Pray</p>
				<div class="box pray"></div>
			</div>
			<div class="grid-1-3">
				<p class="box-title">Step 2: Interest</p>
				<div class="box interest">
					<label>
						<input type="radio" name="interest">
						Abortion
					</label>

					<label>
						<input type="radio" name="interest">
						Abstinence
					</label>

					<label>
						<input type="radio" name="interest">
						Adoption
					</label>

					<label>
						<input type="radio" name="interest">
						Euthanasia
					</label>

					<label>
						<input type="radio" name="interest">
						Biotech
					</label>

					<label>
						<input type="radio" name="interest">
						Life Witness
					</label>
				</div>
			</div>
			<div class="grid-1-3">
				<p class="box-title">Step 3: Activity</p>
				<div class="box activity">
					
					<label>
						<input type="radio" name="activity">
						Education
					</label>
					<br>

					
					<label>
						<input type="radio" name="activity">
						Ministry
					</label>
					<br>

					
					<label>
						<input type="radio" name="activity">
						Advocacy
					</label>
					<br>

				</div>
			</div>
		</div>
	</div>
	<div class="you-can">
		<h3 class="sub-section-title">You can:</h3>
		<ul>
			<li>
				Donec facilisis tortor ut augue lacinia, at viverra est semper. Sed sapien metus, scelerisque nec pharetra id, tempor a tortor. Pellentesque non dignissim neque.
			</li>
			<li>
				Ut porta viverra est, ut dignissim elit elementum ut. Nunc vel rhoncus nibh, ut tincidunt turpis. 
			</li>
			<li>
				Integer ac enim pellentesque, adipiscing metus id, pharetra odio. Donec bibendum nunc sit amet tortor scelerisque luctus et sit amet mauris. 
			</li>
			<li>
				Suspendisse felis sem, condimentum ullamcorper est sit amet, mol- lis nulla. Etiam lorem orci, consequat ac magna quis, facilisis vehicula neque.</li>
		</ul>
	</div>
	<?php include(TEMPLATEPATH."/global-parts/img-heading-section.php"); ?>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>

<?php get_footer(); ?>