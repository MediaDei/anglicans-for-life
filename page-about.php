<?php get_header(); ?>

<section class="about">
	<h1 class="page-title">Anglicans for Life</h1>
	<p class="top-p">
		<span class="simple-dropcaps">A</span><span class="smallcaps">nglicans for Life </span> is a Christ-centered ministry that provides educational and pastoral resources to churches in the Anglican Communion, to help them bear witness to the sanctity of life.
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
				Because God alone numbers our days, AFL believes it’s always wrong to hasten death via euthanasia or assisted suicide.  Death should happen naturally & be neither artificially prolonged nor ended. 
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
			<h3 class="italic">Post-Abortion Care</h3>
			<p>
				Healing and forgiveness comes through Jesus Christ for all sins, including abortion. People suffering from physical, emotional, and spiritual trauma after abortion can experience God’s grace in their lives.
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon death-penalty"></div>
			<h3 class="italic">Death Penalty</h3>
			<p>
				AFL does not have an official position on the issue of the Capital Punishment. We mourn with families who have suffered and turn to God to redeem the souls of those waiting punishment.
			</p>
		</div>
		<div class="grid-1-2">
			<div class="position-icon adoption"></div>
			<h3 class="italic">Adoption</h3>
			<p>
				As children of God, we come into God’s family through adoption. Therefore, as God’s adopted children, AFL supports and affirms adopted children, adoptive parents, and birth parents. 
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
		<span class="gold-frame silent-img"></span>

		<span class="smallcaps">In 2003, in partnership</span> with Priests for Life, NOEL launched the Silent No More Awareness Campaign, an international Campaign to educate the public that abortion physically, emotionally, and spiritually hurts women, men, and others who are involved.
	</p>

	<p class="history">
		<span class="smallcaps">In 2005, the</span> NOEL Board of Directors adopted a <span class="italic">Declaration of Life</span> Statement, which later served as the basis for the ACNA s Title II, Canon 8, Section 3 Statement on the sanctity of life.  In 2006, the ministry’s name was changed to <span class="italic">Anglicans for Life</span> as our outreach expanded to the worldwide Anglican Communion.
	</p>

	<p class="history">
		<span class="smallcaps">Anglicans for Life</span> is headquartered in Sewickley, PA and has earned the GuideStar Exchange Seal, demonstrating its commitment to financial transparency. Anglicans for Life has also been designated an eligible charity for the Combined Federal Campaign (Agency #22932) for government employees.
	</p>

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
                    <p class="name">Mr. Greg Plizga</p>
                    <p class="title">Chair</p>
                </div>

                <div class="board-member">
                    <p class="name">Rev. David R. Bickel</p>
                    <p class="title">Vice Chair</p>
                </div>

                <div class="board-member">
                    <p class="name">Mrs. Marianne Finnie</p>
                    <p class="title">Secretary</p>
                </div>

                <div class="board-member">
                    <p class="name">The Rev. Ron McKeon</p>
                    <p class="title">Treasurer</p>
                </div>

                <div class="board-member">
                    <p class="name">Very Rev. Robert Munday</p>
                </div>

                <div class="board-member">
                    <p class="name">Mrs. Carrie Boren-Headington</p>
                </div>

                <div class="board-member">
                    <p class="name">Rev. W. Ross Blackburn, PhD</p>
                </div>

                <div class="board-member">
                    <p class="name">Mrs. Kathleen Sweet</p>
                </div>

                <div class="board-member">
                    <p class="name">Rt. Rev. Derek Jones</p>
                </div>

                <div class="board-member">
                    <p class="name">Ms. Mary Ailes</p>
                </div>

                <div class="board-member">
                    <p class="name">The Rev. Cathie Young</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>