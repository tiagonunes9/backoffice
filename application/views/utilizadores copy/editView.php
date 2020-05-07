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
    background-color:#B1E7EE !important;
}
body{
    background-color: #B1E7EE !important;
}

.tabela2{
    background-color: white !important;
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
		<h1>Editar Utilizadores</h1><br><br><br>
        <div class="container">
      
<?php echo form_open(base_url() . 'index.php/utilizadores/update/'. $utilizadores[0]->ID_User); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
    <br><label>Tipo de Utilizador:</label>
    <input type="text" name="TipoUser" value="<?php echo $utilizadores[0]->TipoUser; ?>" class="form-control" >
    <label>Numero Escolar:</label>
    <input type="text" name="NumeroEscolar" value="<?php echo $utilizadores[0]->NumeroEscolar; ?>" class="form-control">
    <label>Password:</label>
    <input type="password" name="Password" value="<?php echo $utilizadores[0]->PassWord; ?>" class="form-control">
    <br>
    <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-default btnadmin">Guardar</button><br><br>
</div>
</div>


</form>
	</div>
	</div>
</div>

	

</body>
</html>