<?php 
if(is_page('lead-life-ministry')){
	?>
	<div class="raised-button-widget purple-box">
		<p class="box-title">
			I would like to get involved in leading Life Ministry in my church:
		</p>
		<!--
		<p class="button-title">
			Contact:
		</p>
		-->
		<div class="raised-button-container lead-life-ministry">
			<div class="raised-button-container-contents">
				<a href="<?php echo get_site_url() ?>/contact/" class="button raised-button">
					<div class="button raised-button fa fa-envelope-o"></div>
				</a>
				<div class="links">
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var ee = "info"; // replace with your email username
							var tt = "anglicansforlife"; // replace with your email provider
							var nn = ".org"; // replace with your email provider TLD
							var rr = "mailto:" + ee + '@' + tt + nn; //href
							$('#hidden-email-1').attr('href',rr).html(ee + '@'+tt+nn);
						});
					</script>
					<a id="hidden-email-1" href="#">
						Please enable Javascript to view
					</a>
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var a = "1"; // extension
							var e = "(412)"; // area code
							var t = "749"; // next 3 digits
							var n = "0455"; // final 4 digits
							var r = "tel:" + e + t + n; //href
							$('#hidden-phone').attr('href',r).html(e + ' ' + t + '–' + n);
						});
					</script>
					<a id="hidden-phone" href="#">
						Please enable Javascript to view
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
} 
?>

<?php 
if(is_page('need-help')){
	?>
	<div class="raised-button-widget">
		<p class="button-title">
			Contact:
		</p>

		<div class="raised-button-container need-help">
			<div class="raised-button-container-contents">
				<a href="<?php echo get_site_url() ?>/contact/" class="button raised-button">
					<div class="button raised-button fa fa-envelope-o"></div>
				</a>
				<div class="links">
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
					<a id="hidden-email" href="#">
						Please enable Javascript to view
					</a>
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var a = "1"; // extension
							var e = "(800)"; // area code
							var t = "707"; // next 3 digits
							var n = "6635"; // final 4 digits
							var r = "tel:" + e + t + n; //href
							$('#hidden-phone').attr('href',r).html(e + ' ' + t + '–' + n);
						});
					</script>
					<a id="hidden-phone" href="#">
						Please enable Javascript to view
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
} 
?>

<?php 

if(is_page('pregnant')){


	if ($phoneform) {

	?>
	<div class="raised-button-widget">
		<p class="button-title pregnant smallcaps">
			please call:
		</p>

		<div class="raised-button-container pregnant">
			<div class="raised-button-container-contents">
				<a href="<?php echo get_site_url() ?>/contact/" class="button raised-button">
					<div class="button raised-button fa fa-phone"></div>
				</a>
				<div class="links">
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var a = "1"; // extension
							var e = "(800)"; // area code
							var t = "712"; // next 3 digits
							var n = "4357"; // final 4 digits
							var r = "tel:" + e + t + n; //href
							$('#hidden-phone').attr('href',r).html(e + ' ' + t + '–' + n);
						});
					</script>
					<a id="hidden-phone" href="#">
						Please enable Javascript to view
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	$phoneform = false;
	}

	else {
	?>
	<div class="raised-button-widget">

		<div class="raised-button-container need-help">
			<div class="raised-button-container-contents">
				<a href="<?php echo get_site_url() ?>/contact/" class="button raised-button">
					<div class="button raised-button fa fa-envelope-o"></div>
				</a>
				<div class="links">
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var e = "georgette"; // replace with your email username
							var t = "anglicansforlife"; // replace with your email provider
							var n = ".org"; // replace with your email provider TLD
							var r = "mailto:" + e + '@' + t + n; //href
							$('#hidden-email2').attr('href',r).html(e + '@'+t+n);
						});
					</script>
					<a id="hidden-email2" href="#">
						Please enable Javascript to view
					</a>
					<script type="text/javascript">
						var $ = jQuery.noConflict();
						$(document).ready(function() {
							var a = "1"; // extension
							var e = "(412)"; // area code
							var t = "749"; // next 3 digits
							var n = "0455"; // final 4 digits
							var r = "tel:" + e + t + n; //href
							$('#hidden-phone2').attr('href',r).html(e + ' ' + t + '–' + n);
						});
					</script>
					<a id="hidden-phone2" href="#">
						Please enable Javascript to view
					</a>
				</div>
			</div>
		</div>
	</div>
	<?php
	}
} 
?>