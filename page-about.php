<?php get_header(); ?>

<section class="about">
	<h1 class="page-title">Anglicans for Life</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span><span class="smallcaps">s ministry based in</span> the Anglican tradition, AFL helps the Church apply the Biblical principles to the human Life issues that challenge people in local congregations and communities.
	</p>
	
	<h2 class="italic">AFL Positions</h2>

	<div class="grid">
		<div class="grid-1-2">
			<div class="position-icon abortion"></div>
			<h3 class="italic">Abortion</h3>
			<p>
				Anglicans for Life believes that human beings are created in the image of God and that life begins at conception. Therefore, Anglicans for Life rejects abortion. 
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon contraception"></div>
			<h3 class="italic">Contraception</h3>
			<p>
				Anglicans for Life does not have an official position on the issue of contraception. We encourage women and couples to prayerfully research and employ healthy and safe family planning methods.
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon euthanasia"></div>
			<h3 class="italic">Euthanasia</h3>
			<p>
				As the Creator of Life, God not only forms each person in the womb, but He decrees the number of days we will live. Therefore, AFL believes it is always wrong to hasten death via euthanasia or assisted suicide. We believe that death must happen naturally, neither artificially prolonging nor ending it.
			</p>
		</div>
		<div class="grid-1-2">
				<div class="position-icon stem-cells"></div>
				<h3 class="italic">Stem-Cells</h3>
				<p>
					Anglicans for Life is in favor of research using non-embryonic stem cells because, while it is important to advance medical science, embryonic stem cell research kills living embryos.
				</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon partial-birth-abortion"></div>
			<h3 class="italic">Partial-Birth Abortion</h3>
			<p>
				Anglicans for Life strongly opposes partial birth abortion, as it not only ends a helpless life, but does so in a particularly cruel, disgusting, and violent way. 
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon post-abortion-aftercare"></div>
			<h3 class="italic">Post-Abortion Aftercare</h3>
			<p>
				Healing and forgiveness are available through Jesus Christ for ALL sins, including abortion. Studies indicate that women who have had abortions, as well as their families, can suffer from physical, psychological, and spiritual trauma and desperately need to experience the grace of Jesus Christ in their lives.
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon death-penalty"></div>
			<h3 class="italic">Death Penalty</h3>
			<p>
				Anglicans for Life does not have an official position on the issue of the Capital Punishment. We mourn with families who have suffered, ask God to comfort those who are employed to enforce the death penalty, and turn to God to redeem the souls of those waiting punishment.
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon adoption"></div>
			<h3 class="italic">Adoption</h3>
			<p>
				As children of God, we come into God s family through adoption. Therefore, as we have been adopted into Christ, AFL supports and affirms adopted children, adoptive parents, and birth parents.  
			</p>
		</div>
	</div>



	<div class="stand-with-us">
		<h3 class="italic">Stand With Us</h3>
		<div class="stand-with-us-slider">
			<?php 
			if ( function_exists( 'soliloquy' ) ) { soliloquy( 'stand-with-us-slider', 'slug' ); }
			?>
		</div>
	</div>



	<h3 class="italic">Our History</span>
	</h3>
	<p class="history">
		<span class="simple-dropcaps">A</span>
		<span class="smallcaps">fl's ministry</span> to help the Church uphold the sacredness of life began informally in 1966 and was officially incorporated in 1983, as the National Organization of Episcopalians for Life Research and Education Foundation (<span class="italic" style="letter-spacing:1px">NOEL</span>) with Church Chapters formed nationwide.
	</p>
	<p class="history">
		<span class="smallcaps">In 2003, in partnership</span> with Priests for Life, NOEL launched the Silent No More Awareness Campaign, an international Campaign to educate the public that abortion physically, emotionally, and spiritually hurts women, men, and others who are involved. In 2005, the NOEL Board of Directors adopted a <span class="italic">Declaration of Life</span> Statement, which later served as the basis for the ACNA s Title II, Canon 8, Section 3 Statement on the sanctity of life.  In 2006, the ministry’s name was changed to <span class="italic">Anglicans for Life</span> as our outreach expanded to the worldwide Anglican Communion.
	</p>
	<p class="history">
		<span class="smallcaps">Anglicans for Life</span> is headquartered in Sewickley, PA and has earned the GuideStar Exchange Seal, demonstrating its commitment to financial transparency. Anglicans for Life has also been designated an eligible charity for the Combined Federal Campaign (Agency #22932) for government employees.
	</p>

	<div class="bottom-history-row">
		<p class="history-bottom">
			<span class="simple-dropcaps">W</span>
			<span class="smallcaps">e helped start</span>
			the Silent No More Campaign.
	    Vestibulum rutrum quam vitae fringilla tincidunt. Suspendisse nec tortor urna. Ut laoreet sodales nisi, quis iaculis nulla iaculis vitae.
		</p>
		<div class="gold-frame silent-img"></div>
	</div>

	<div class="our-staff new-section-bg">
		<h2>Our Staff</h2>

		<?php //get page contents
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				the_content();
			} // end while
		} // end if
		?>
	</div>
	<div class="more-staff">
		<div class="board-of-directors">
			<h3>Board of Directors</h3>
			<div class="members">
				<div class="board-member">
					<p class="name">Lorem Ipsum</p>
					<p class="title">Dolor sit amet arma virumque cano</p>
				</div>

				<div class="board-member">
					<p class="name">Lorem Ipsum</p>
					<p class="title">Dolor sit amet arma virumque cano</p>
				</div>

				<div class="board-member">
					<p class="name">Lorem Ipsum</p>
					<p class="title">Dolor sit amet arma virumque cano</p>
				</div>

				<div class="board-member">
					<p class="name">Lorem Ipsum</p>
					<p class="title">Dolor sit amet arma virumque cano</p>
				</div>

				<div class="board-member">
					<p class="name">Lorem Ipsum</p>
					<p class="title">Dolor sit amet arma virumque cano</p>
				</div>

				<div class="board-member">
					<p class="name">Lorem Ipsum</p>
					<p class="title">Dolor sit amet arma virumque cano</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>