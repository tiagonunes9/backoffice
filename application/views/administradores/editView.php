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
    background-color: #13616D !important;
}
body {
			background-image: url("assets/img/fundo.svg");
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: #13616D;
		}

.tabela2{
    background-color: white !important;
    border-radius: 10px;
}
h1{
  color: #fff;
}

.btnadmin{
    background-color:#3990D7;
    color:white;
    width:100%;
}

</style>
</head>
<body>


    <?php
		$this->load->view('common/navBar');
    ?>
    
	<div id="container">
		<div class="jumbotron">
		<h1>Editar Administradores</h1>
	</div>
</div>

	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/administradores/update/'. $administradores[0]->id_admin); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
<br><label>Username:</label>
    <input type="text" name="UsernameAdmin" value="<?php echo $administradores[0]->UsernameAdmin; ?>" class="form-control" > 
    <label>Email:</label>
    <input type="text" name="EmailAdmin" value="<?php echo $administradores[0]->EmailAdmin; ?>" class="form-control" >
    <label>Password:</label>
    <input type="text" name="passwordAdmin" class="form-control" >
    
    <br><br>
    
    <br>
    <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-default btnadmin">Guardar</button><br><br><br>
</div>
</div>


</form>
	</div>

</body>
</html>
