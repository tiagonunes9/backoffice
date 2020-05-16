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
		.branco {
			background-color: white;
			height: max-content;
		}

		.amarelo {
			background-color: #EEC94C;
			height: 100%;
		}

		p{
			color:white;
			font-family: "Oswald";
			font-weight: bold;
			font-size:25px;
		}

		.geral{
			background-color: #E47A3F;
			color:white;
			font-family: "Oswald";
			font-weight: bold;
			font-size:25px;
			height:150%;
		}

		.outra{
			color:white;
			font-family: "Oswald";
			font-weight: bold;
			font-size:15px;
		}

		.formulario{
			margin-left: auto;
  			margin-right: auto;
			float: right;
		}
	</style>
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
</head>

<body>
	<div class="container">
		<div class="row">

			<?php
			if (validation_errors() != false) {
				echo '<div class="alert alert-warning">' . validation_errors() . '</div>';
			}
			?>
		</div>
		<div class="row">
			<div class="col-sm-8 branco">
				<img src="assets/img/logo.svg" height="100px">
			</div>
			<div class="col-sm-4 amarelo">
				<div class="formulario">
				<?php echo form_open(base_url() . 'index.php/auth/signIn'); ?>

				<div class="form-group">
					<p>Email</p>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<p>Password</p>
					<input type="password" name="password" class="form-control">
				</div>
					<p class="outra">Recuperar password</p>
				<button type="submit" class="btn btn-default geral">LOGIN</button>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<?php
$this->load->view('common/footLibraries');
?>