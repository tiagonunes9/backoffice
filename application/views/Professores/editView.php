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
		<h1>Editar Professores</h1><br><br><br>
        <div class="container">
      
<?php echo form_open(base_url() . 'index.php/professores/update/'. $professores[0]->ID_Professor); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
    <br><label>Tipo de Utilizador:</label>
    <input type="text" name="ID_User" value="<?php echo $professores[0]->ID_User; ?>" class="form-control" placeholder="Tem de ser 2!">
    <label>Nome:</label>
    <input type="text" name="NomeProfessor" value="<?php echo $professores[0]->NomeProfessor; ?>" class="form-control">
    <label>Morada:</label>
    <input type="text" name="MoradaProfessor" value="<?php echo $professores[0]->MoradaProfessor; ?>" class="form-control">
    <label>Contacto:</label>
    <input type="text" name="ContactoProfessor" value="<?php echo $professores[0]->ContactoProfessor; ?>" class="form-control">
    <label>Numero Escolar:</label>
    <input type="text" name="NumeroEscolar" value="<?php echo $professores[0]->NumeroEscolar; ?>" class="form-control">
    <label>Password:</label>
    <input type="password" name="password" value="<?php echo $professores[0]->password; ?>" class="form-control">
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