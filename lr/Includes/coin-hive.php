

<div Href="coin-hive" >
<form action="?" method="post">
	<!-- other form fields -->

	<script src="https://coin-hive.com/lib/captcha.min.js" async></script>
	<script>
		function myCaptchaCallback(token) {
			alert('Hashes reached. Token is: ' + token);
		}
	</script>
	<div class="coinhive-captcha" 
		data-hashes="1024" 
		data-key="LUSfjlVVZxiqh5tOSA5J3E2llNpDXw6z" 
		data-autostart="false"
		data-disable-elements="input[type=submit]"
		data-callback="myCaptchaCallback"
	></div>

	<!-- submit button will be automatically disabled and later enabled
		again when the captcha is solved -->
	<input type="submit" value="Submit"/>
</form>
</div>


