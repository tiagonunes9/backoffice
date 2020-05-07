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
body {
			background-image: url("assets/img/fundo.svg");
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: #13616D;
		}

.jumbotron{
    background-color: #13616D !important;
}
h1{
  color: #fff;
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
		<h1>Adicionar Aluno</h1><br><br><br>



	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/alunos/novoaluno/'); ?>

<div class="form-group col-md-6 offset-md-3 formadmin">
    <br>
    <label>Tipo de Utilizador:</label>
    <input type="text" name="ID_User" value="" class="form-control" placeholder="Tem de ser 1!">
    <label>Nome:</label>
    <input type="text" name="NomeAluno" value="" class="form-control">
    <label>Numero Escolar:</label>
    <input type="text" name="NumeroEscolar" value="" class="form-control">
    <label>Contacto:</label>
    <input type="text" name="ContactoAluno" value="" class="form-control">
    <label>Morada:</label>
    <input type="text" name="MoradaAluno" value="" class="form-control">
    <label>ID do Encarregado:</label>
    <input type="text" name="ID_Encarregado" value="" class="form-control">
    <label>ID da Turma:</label>
    <input type="text" name="ID_Turma" value="" class="form-control">
    <label>Password:</label>
    <input type="password" name="password" value="" class="form-control" >
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