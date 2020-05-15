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
  background-color:#F2F2F2 !important;
}

body{
  background-color:#F2F2F2 !important;
}
h1{
  color: #EDB347;
  font-family: "Oswald";
  font-weight: bold;
}
</style>
</head>
<body>


    <?php
		$this->load->view('common/navBaradmin');
    ?>
	<div id="container">
		<div class="jumbotron">
		<h1>Dashboard</h1>
	</div>
</div>


    
</body>
</html>