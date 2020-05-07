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
h1{
  color: #fff;
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
		<h1>Editar Eventos</h1>
	</div>
</div>

	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/eventos/update/'. $eventos[0]->ID_Evento); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
<br><label>Nome do Evento:</label>
    <input type="text" name="NomeEvento" value="<?php echo $eventos[0]->NomeEvento; ?>" class="form-control" required> 
    <label>Descricão:</label>
    <input type="text" name="Descricao" value="<?php echo $eventos[0]->Descricao; ?>" class="form-control" required>
    <label>Data:</label>
    <input type="data" name="Data" value="<?php echo $eventos[0]->Data; ?>" class="form-control" required>
    <label>Clube:</label>
    <input type="text" name="ID_Clube" value="<?php echo $eventos[0]->ID_Clube; ?>" class="form-control" >
    <label>Professor:</label>
    <input type="text" name="ID_Professor" value="<?php echo $eventos[0]->ID_Professor; ?>" class="form-control" >
    
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
