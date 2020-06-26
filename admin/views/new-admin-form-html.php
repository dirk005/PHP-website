<?php

if (isset($adminFormMessage) === false) {
    $adminFormMessage = "";
}
?>

<form method='post' action='admin.php?page=users'>

	<div class='row'>
		<div class='col-sm-3 text-center'>
			<h4 class='section-heading'>Create new admin user</h4>
		</div>
	</div>

	
		<div class="container"></div>
		
	<div class='row'>
		
		<div class='col-lg-2'>
			<div class='form-group'>
				<input type='email' class='form-control' placeholder='e-Mail' name='email' required data-validation-required-message='Please enter your e-mail address.'>
			</div>
		</div>
		<div class='col-md-6'>
			<div class='form-group'>
				<input type='password' class='form-control' placeholder='Password' name='password' required data-validation-password-message='Please enter your Password.'>
			</div>
		</div>
	</div>
	<div class='row '>
		<div class='col-sm-8 text-left'>
			<button type='submit' class='btn btn-sm' value='create user'  name='new-admin' style='float:right;'>
				Create
			</button>
		</div>
	</div>
	<p id='admin-form-message'>
	    <?php
		 echo $adminFormMessage
		?>
	</p>
</form>

