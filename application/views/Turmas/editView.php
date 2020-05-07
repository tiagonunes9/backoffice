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
		<h1>Editar Turmas</h1>
	</div>
</div>

	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/turmas/update/'. $turmas[0]->ID_Turma); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
<br><label>Ano:</label>
    <input type="text" name="Ano" value="<?php echo $turmas[0]->Ano; ?>" class="form-control" required> 
    <label>Letra Turma:</label>
    <input type="text" name="LetraTurma" value="<?php echo $turmas[0]->LetraTurma; ?>" class="form-control" required>
    <label>ID do Professor:</label>
    <input type="text" name="ID_Professor" value="<?php echo $turmas[0]->ID_Professor; ?>" class="form-control" required>
    <label>AnoLetivo:</label>
    <input type="text" name="AnoLetivo" value="<?php echo $turmas[0]->AnoLetivo; ?>" class="form-control" required>
    
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
