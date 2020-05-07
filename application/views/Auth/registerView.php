<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <?php
		$this->load->view('common/headLibraries');
	?>


</head>
<body>


    <?php
		$this->load->view('common/navBar');
	?>

	<div id="container">
		<div class="jumbotron">
		<h1>Login page!!!</h1>


		<p>Here you can login</p>
	</div>
</div>

	<div class="container">
	  <div class="row">

<?php echo validation_errors(); ?>

<?php echo form_open('auth/register'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

	  </div>
	</div>
	<div id="section">

</body>
</html>

    <?php
		$this->load->view('common/footLibraries');
	?>