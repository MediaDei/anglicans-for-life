<div class="pray-for-life">
	<h2>Pray for life</h2>
	<p>Join our prayer team:</p>
	<form class="grid">
		<script type="text/javascript">
			var $ = jQuery.noConflict();
			$(document).ready(function() {
				var $email = $("#mailchimp-email");
				$("#pray-email").keyup(function() {
				    $email.val( this.value );
				    $(".prayer").prop( 'checked', true );
				});
			});
		</script>
	  <input type="email" id="pray-email" name="pray-email" placeholder="Email Address"/>
	  <a href="#subscribe" class="button"><div class="button">OK</div></a>
	</form>
</div>