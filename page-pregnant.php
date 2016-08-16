<?php get_header(); ?>

<section class="pregnant">
	<h1 class="page-title">Pregnant?</h1>
	<h2 class="msg">A message from Georgette:</h2>
	<p class="msg-p">
		<span class="simple-dropcaps">I</span>
		<span class="smallcaps">f you've recently found</span>
		out that you are pregnant you may be happy and excited or shocked and scared or both. Pregnancy should be a time of celebration, but for you it may feel more like a problem that you wish would just go away. You may be hurt that those who care about you aren’t excited and supportive. If you are feeling alone, scared, or needing help to deal with your problem,
	</p>

	<?php include(TEMPLATEPATH."/global-parts/raised-button.php"); ?>
	
	<div class="development-slider">
		<div class="top">
			<div class="slider-icon"></div>
			<h2>Stages of fetal development:</h2>
		</div>
	</div>

	<div class="considering-abortion">
		<h2 class="sub-section-title">Considering Abortion?</h2>
		<div class="grid">
			<div class="grid-1-2">
				<a href="http://youroptions.com" class="considering-button">
					<div class="considering-button options">
						<div class="text">
							<p class="top">
								Your options
							</p>
							<p class="bottom">
								www.youroptions.com
							</p>
						</div>
					</div>
				</a>
			</div>
			<div class="grid-1-2">
				<a href="http://abortiontestimonies.com" class="considering-button">
					<div class="considering-button voices">
						<div class="text">
							<p class="top">
								Women voices
							</p>
							<p class="bottom">
								www.abortiontestimonies.com
							</p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<p class="contact-text">Or contact Georgette:</p>
		<a href="#" class="considering-button">
			<div class="considering-button contact">
				<div class="text grid contact">
					<p class="left">
						She had an abortion at age 16 — she is happy to talk with you.
					</p>
					<div class="fa fa-envelope-o"></div>
					<p class="right">
						<!--
						<script type="text/javascript">
							var $ = jQuery.noConflict();
							$(document).ready(function() {
								var e = "info"; // replace with your email username
								var t = "anglicansforlife"; // replace with your email provider
								var n = ".org"; // replace with your email provider TLD
								var r = "mailto:" + e + '@' + t + n; //href
								$('#hidden-email').attr('href',r).html(e + '@'+t+n);
							});
						</script>
						<a class="underline" id="hidden-email" href="#">Please enable Javascript to view</a>
						<script type="text/javascript">
							var $ = jQuery.noConflict();
							$(document).ready(function() {
								var a = "1"; // extension
								var e = "(412)"; // area code
								var t = "749"; // next 3 digits
								var n = "0445"; // final 4 digits
								var r = "tel:" + e + t + n; //href
								$('#hidden-phone').attr('href',r).html(e + ' ' + t + ' ' + n);
							});
						</script>
						<a class="underline" id="hidden-phone" href="#">Please enable Javascript to view</a>
						-->
					</p>
				</div>
			</div>
		</a>
	</div>
	<div class="colored-section-break"></div>
	<?php include(TEMPLATEPATH."/global-parts/subscribe-section-divider.php"); ?>
</section>

<?php get_footer(); ?>