<section id="login">
	<div class="container-fluid">
		<br>
		<br>
		<br>
		<div class='row'>
			<div class='col-sm-3 text-center'>
				<h4 class='section-heading'>Login to access restricted area</h4>
			</div>
		</div>
		<form method='post' action='admin.php'>
			<div class='row'>
				<div class='col-lg-2'>
					<div class='form-group'>
						<input type='email' class='form-control' placeholder='Your e-mail' name='email' required data-validation-required-message='Please enter your e-mail address.'>
					</div>
				</div>
				<div class='col-md-6'>
					<div class='form-group'>
						<input type='password' class='form-control' placeholder='password' name='password' required data-validation-required-message='Please enter your Password.'>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-sm-8 text-left'>
					<button type='submit' class='btn btn-sm' value='login'  name='log-in' style='float:right;'>
						Log In
					</button>
				</div>
			</div>
		</form>
	</div>
</section>

