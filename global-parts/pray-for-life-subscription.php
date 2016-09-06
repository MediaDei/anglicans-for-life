<div class="pray-for-life">
	<h2>Pray for life</h2>
	<p>Join our prayer team:</p>
	<form class="grid">
		<script>
			$(document).ready(function() {
				var $ = jQuery.noConflict();
				var $email = $("#mailchimp-email");
				$("#pray-email").keyup(function() {
				    $email.val( this.value );
				});
			});
		</script>
	  <input type="email" id="pray-email" name="pray-email" placeholder="Email Address"/>
	  <a href="#subscribe" class="button"><div class="button">OK</div></a>
	</form>
</div>