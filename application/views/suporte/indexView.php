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
<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
<style>
.jumbotron{
  background-color:  #F2F2F2 !important;
}

body {
			background-image: url("assets/img/fundo.svg");
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: #F2F2F2;
		}

.admin{
  background-color:white !important;
  border-radius: 10px !important;
}
h1{
  color: #EDB347;
  font-family: "Oswald";
  font-weight: bold;
}
.container{
  margin-top:5% !important;
}

.tabela1{
  background-color:white;
  border-radius: 10px !important;
}
  
</style>
</head>
<body>


    <?php
		$this->load->view('common/navBaradmin');
    ?>
	<div id="container">
		<div class="jumbotron">
    <div class="container">
		<h1>Suporte</h1><br><br><br>

    </div>
	</div>
</div>


    
</body>
</html>