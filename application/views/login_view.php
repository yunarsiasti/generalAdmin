<?php
//echo form_open('Login/login');
?>
<form class="form-signin" action="<?php echo base_url();?>index.php/Login/login" method="POST">
	</br></br>
	<img class="mb-4" src="<?php echo base_url();?>assets/images/xlinkLogo.png" alt="" width="92" height="92">
	<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
	<label for="inputEmail" class="sr-only">Email address</label>
	<input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
	</br>
	<label for="inputPassword" class="sr-only">Password</label>
	<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	</br>
	<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
	<p class="mt-5 mb-3 text-muted">&copy; yunarsiasti-2018</p>
</form>