<?php get_header(); ?>

<section class="need-help">
	<h1 class="page-title">Need Help?</h1>
	<div class="help-wrapper">
		<p class="next-to-button"><span class="italic">Click here if you need help with pregnacy:</span></p>
		<a href="" class="button">
			<div class="button">Pregnant?</div>
		</a>
	</div>

	<article class="width-fix">
			<figure><img src="<?php echo TEMPLATEPATH ?>/images/need-help-list.jpg"/></figure>
			<div class="title-content">
				<ul>
					<li><span class="italic">Hurting after an abortion yesterday or years ago?</span></li>
					<li><span class="italic">Have an elderly parent or terminally ill friend who thinks assisted suicide is the answer to their suffering?</span></li>
					<li><span class="italic">Is your teen daughter or son facing an unplanned pregnancy?</span></li>
				</ul>
			</div>
		</article>

		<p>
			Sometimes we can use help finding help! Anglicans for Life wants to connect you or your loved one to the right resources that can help them navigate life’s challenges.
		</p>

		<p>
			Please use the contact form to share your needs, and we will connect you to the best resources available.
		</p>

		<p class="small-caps button-title">
			contact:
		</p>
		<div class="raised-button-container">
			<a href="" class="button raised-button">
				<div class="button raised-button fa fa-envelope-o">
					
				</div>
				<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var e = "mail"; // replace with your email username
							var t = "anglicansforlife"; // replace with your email provider
							var n = ".org"; // replace with your email provider TLD
							var r = "mailto:" + e + '@' + t + n; //href
							$('#hidden-email').attr('href',r).html(e + '@'+t+n);
						});
					</script>
					<a id="hidden-email" href="#">Please enable Javascript to view</a>
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var a = "1"; // extension
							var e = "(800)"; // area code
							var t = "707"; // next 3 digits
							var n = "6635"; // final 4 digits
							var r = "tel:" + e + t + n; //href
							$('#hidden-phone').attr('href',r).html(e + ' ' + t + ' ' + n);
						});
					</script>
					<a id="hidden-phone" href="#">Please enable Javascript to view</a>
			</a>
		</div>
</section>

<?php get_footer(); ?>

