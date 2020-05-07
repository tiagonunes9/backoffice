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

.btnadmin{
    background-color:#3990D7;
    color:white;
    width:100%;
}
h1{
  color: #fff;
}

</style>
</head>
<body>

    <?php
		$this->load->view('common/navBar');
    ?>
    
	<div id="container">
		<div class="jumbotron">
		<h1>Editar Aluno</h1><br><br><br>
        <div class="container">
      
<?php echo form_open(base_url() . 'index.php/alunos/update/'. $alunos[0]->ID_Aluno); ?>

<div class="form-group col-md-6 offset-md-3 tabela2">
    <br><label>Tipo de Utilizador:</label>
    <input type="text" name="ID_User" value="<?php echo $alunos[0]->ID_User; ?>" class="form-control" >
    <label>Nome Aluno:</label>
    <input type="text" name="NomeAluno" value="<?php echo $alunos[0]->NomeAluno; ?>" class="form-control">
    <label>Numero Escolar:</label>
    <input type="text" name="NumeroEscolar" value="<?php echo $alunos[0]->NumeroEscolar; ?>" class="form-control">
    <label>Contacto</label>
    <input type="text" name="ContactoAluno" value="<?php echo $alunos[0]->ContactoAluno; ?>" class="form-control">
    <label>Morada:</label>
    <input type="text" name="MoradaAluno" value="<?php echo $alunos[0]->MoradaAluno; ?>" class="form-control">
    <label>ID do Encarregado:</label>
    <input type="text" name="ID_Encarregado" value="<?php echo $alunos[0]->ID_Encarregado; ?>" class="form-control">
    <label>ID da Turma:</label>
    <input type="text" name="ID_Turma" value="<?php echo $alunos[0]->ID_Turma; ?>" class="form-control">
    <label>Password:</label>
    <input type="password" name="password" value="" class="form-control">
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