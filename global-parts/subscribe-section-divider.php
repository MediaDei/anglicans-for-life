<div class="subscribe">
	<p>Sign up for <span class="italic">Carpe Diem</span>, AFL’s quarterly newsletter:</p>
	<form class="grid">
	  <script>
			$(document).ready(function() {
				var $ = jQuery.noConflict();
				var $email = $("#mailchimp-email");
				$("#sub-email").keyup(function() {
				    $email.val( this.value );
				});
			});
		</script>
	  <input type="email" id="sub-email" name="sub-email" placeholder="Email Address"/>
	  <a href="#subscribe" class="button"><div class="button">Sign Up</div></a>
	  <div class="social-buttons mailchimp">
	  	<a class="icon" href="https://www.facebook.com/AnglicansforLife/"><div class="icon facebook fa fa-facebook"></div></a>
			<a class="icon" href="https://twitter.com/Anglicans4Life"><div class="icon fa fa-twitter"></div></a>
			<a class="icon" href="#"><div class="icon fa fa-pinterest"></div></a>
	  </div>
	</form>
</div>