<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Adicionar Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
		$this->load->view('common/headLibraries');
	?>
<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">

<style>
body{
  background-color:#B1E7EE !important;
}

.jumbotron{
    background-color:#B1E7EE !important;
}

.formadmin{
    background-color:white !important;
    border-radius: 10px;
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
		<h1>Adicionar Utilizador</h1><br><br><br>



	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/utilizadores/novoutilizador/'); ?>

<div class="form-group col-md-6 offset-md-3 formadmin">
    <br>
    <label>Tipo de Utilizador:</label>
    <input type="text" name="TipoUser" value="" class="form-control" >
    <label>Numero Escolar:</label>
    <input type="text" name="NumeroEscolar" value="" class="form-control" >
    <label>Password:</label>
    <input type="password" name="Password" value="" class="form-control" >
    <br>
    <div class="col-md-6 offset-md-3 formadmin">
    <button type="submit" class="btn btn-default btnadmin">Adicionar</button><br><br>
</div>
</div>


</form>
	</div>
    </div>
    </div>
</body>
</html>