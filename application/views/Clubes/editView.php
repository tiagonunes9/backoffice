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
		<h1>Editar Clubes</h1>
	</div>
</div>

	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/clubes/update/'. $clubes[0]->ID_Clube); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
<br><label>Nome do Clube:</label>
    <input type="text" name="NomeClube" value="<?php echo $clubes[0]->NomeClube; ?>" class="form-control" > 
    <label>Descricão:</label>
    <input type="text" name="Descricao" value="<?php echo $clubes[0]->Descricao; ?>" class="form-control" >
    <label>Professor:</label>
    <input type="text" name="ID_Professor" value="<?php echo $clubes[0]->ID_Professor; ?>" class="form-control" >
    <label>Horario:</label>
    <input type="text" name="Horario" value="<?php echo $clubes[0]->Horario; ?>" class="form-control" >
    
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
