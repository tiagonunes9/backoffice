<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php
	$this->load->view('common/headLibraries');
	?>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">  
	<style>
		.jumbotron {
			background-color: #F2F2F2 !important;
		}

		h1 {
			color: #EDB347;
			font-family: "Oswald";
			font-weight: bold;
		}

		.flex-container {
			display: flex;
			flex-flow: row wrap;
			padding: 0;
			margin: 0;
			list-style: none;
		}

		.flex-x {
			line-height: 150px;
			color: white;
			font-weight: bold;
			font-size: 3em;
			text-align: center;
			flex-grow: 1;
			width: 50vw;
			height: 100vh;
		}

		.direito {
			flex-basis: auto;
			background-color: white;
			margin-left: 0px;
			flex-grow: 50;
		}

		.formulario {
			background-color: #EEC94C;
			width: 100%;
			height: 100%;
		}

		label {
			color: white;
			font-family: "Oswald";
			font-weight: bold;
			font-size: 45%;
		}

		.outra {
			color: white;
			font-family: "Oswald";
			font-weight: bold;
			font-size: 35%;
		}

		.geral {
			background-color: #E47A3F;
			color: white;
			font-family: "Oswald";
			font-weight: bold;
			width: 100%;
			margin-top:-50%
		}

		.imagem {
			width: 70%;
			margin-top: 55%;
			margin-bottom: 35%;
			margin-left: 40%;
			margin-right: 60%;
		}

		form {
			margin-left: 35%;
		}
	</style>
</head>

<body>


	<ul class="flex-container">
		<li class="flex-item direito">
			<div class="col-sm-8 branco">
				<img src="assets/img/logo.svg" class="imagem" />
			</div>
		<li class="flex-x">
			<ul class="flex-container formulario">

				<?php echo form_open(base_url() . 'index.php/auth/signIn'); ?>
				<form>
					<label>Email</label>
					<input type="text" name="email" class="form-control barra">
					<label>Password</label>
					<input type="password" name="password" class="form-control barra">
					<!--<a class="outra" href="<?php echo base_url(); ?>index.php/resetpassword">Esqueci-me da password</a>-->
					<button type="submit" class="btn btn-default geral">LOGIN</button>
				</form>
			</ul>
		</li>
	</ul>


</body>

</html>