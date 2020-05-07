<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Adicionar Pergunta</title>
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
.btnadmin{
    background-color:#3990D7;
    color:white;
    width:100%;
}

h1{
  color: #fff;
}
.formadmin{
    background-color:white !important;
    border-radius: 10px;

}


</style>
</head>
<body>

<?php
		$this->load->view('common/navBar');
    ?>
    
	<div id="container">
		<div class="jumbotron">
		<h1>Adicionar Turma</h1><br><br><br>


	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/administrador/novoadmin/'); ?>

<div class="form-group col-md-6 offset-md-3 formadmin"><br>
    <label>Username:</label>
    <input type ="text" class="form-control" name="UsernameAdmin" >
    <label>Email:</label>
    <input type="text" name="EmailAdmin" value="" class="form-control" >
    <label>Password:</label>
    <input type="password" name="passwordAdmin" value="" class="form-control" >
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