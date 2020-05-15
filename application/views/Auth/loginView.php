<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>MY VIRIATO ADMINISTRADOR</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">

	<?php
	$this->load->view('common/headLibraries');
	?>
	<style>
		body {
			background-image: url("assets/img/fundo.svg");
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: #F2F2F2;
		}

		.login-container {
			margin-top: auto;
			margin-bottom: auto;



		}

		.login-form-1 {
			padding: 4%;
			box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.07), 0 9px 26px 0 rgba(0, 0, 0, 0.12);
			background-color: #6CA39A
		}

		.login-form-1 h3 {
			margin-bottom: 10%;
		}

		form {
			align-content: middle !important;
		}

		.btn-primary {
			width: 100% !important;
		}

		h1 {
			font-size: 200% !important;
		}

		h3 {
			color: #D4BC4F;
		}

		.container {
			margin-top: 10% !important;
		}

		.teste {
			align-content: right;
		}
	</style>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
</head>

<body>

	<div class="container login-container">


		<div class="row">
			<div class="col-4 col-xs-3">
			</div>
			<div class="col-4 login-form-1">

				<img src="assets/img/logo.svg" height="100px">


				<h3> MY VIRIATO </h3>

				<div class="container">
					<div class="row">
					</div>
					<div class="row">

						<?php
						if (validation_errors() != false) {
							echo '<div class="alert alert-warning">' . validation_errors() . '</div>';
						}
						?>
					</div>
					<div class="row">

						<?php echo form_open(base_url() . 'index.php/auth/signIn'); ?>

						<div class="form-group">
							<input type="text" placeholder="Email" name="email" class="form-control">
						</div>
						<div class="form-group">

							<input type="password" placeholder="Password" name="password" class="form-control">
						</div>

						<button type="submit" class="btn btn-default">Login</button>



					</div>
				</div>

				<div class="col-4 col-xs-3">
				</div>
			</div>
		</div>
	</div>

</body>

</html>

<?php
$this->load->view('common/footLibraries');
?>