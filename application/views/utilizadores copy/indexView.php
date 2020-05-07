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
  background-color: #13616D;
}

.admin{
  background-color:#f2f2f2 !important;
  border-radius: 10px !important; 
}
.container{
  margin-top:5% !important;
}

body{
  background-color:#B1E7EE !important;
}

.tabela1{
  background-color:white;
  border-radius: 10px !important;
}
</style>
</head>
<body>


    <?php
		$this->load->view('common/navBar');
    ?>
	<div id="container">
		<div class="jumbotron">
		<h1>Gerir Alunos</h1> <br>
    <div class="container">
      
      <table class="table admin">
           <tr class="tabela1">
           <th width="200"> Nome do Aluno </th>
           <th> Contacto </th>
           <th> Morada </th>
           <th> Turma </th>
           <th width="70"></th>
           <th width="70"><a class="btn btn-sm btn-primary" href="utilizadores/novoutilizador">Novo</a></th></tr>
         <?php
            foreach ($utilizadores as $key => $value) {
                echo '<tr><td>' . $value->NomeAluno . "</td>";
                echo '<td>' . $value->ContactoAluno . "</td>";
                echo '<td>' . $value->MoradaAluno . "</td>";
                echo '<td>' . $value->Ano . $value->LetraTurma . "</td>";
                echo '<td><a href="' . base_url(). 'index.php/utilizadores/uptade/' . $value->ID_User . '" class="btn btn-sm btn-warning">Editar</a></td>';
                echo '<td><a href="' . base_url(). 'index.php/utilizadores/delete/' . $value->ID_User . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
            }
         ?>
      </table>
  </div><br><br>
  <h1>Gerir Professores</h1> <br>
  <div class="container">
      
      <table class="table admin">
           <tr class="tabela1">
           <th width="250"> Nome do Professor </th>
           <th width="250"> Contacto </th>
           <th> Morada </th>
           <th width="70"></th>
           <th width="70"><a class="btn btn-sm btn-primary" href="utilizadores/novoutilizador">Novo</a></th></tr>
         <?php
            foreach ($utilizadores as $key => $value) {
                echo '<tr><td>' . $value->NomeProfessor . "</td>";
                echo '<td>' . $value->ContactoProfessor . '</td>';
                echo '<td>' . $value->MoradaProfessor . "</td>";
                echo '<td><a href="' . base_url(). 'index.php/utilizadores/uptade/' . $value->ID_User . '" class="btn btn-sm btn-warning">Editar</a></td>';
                echo '<td><a href="' . base_url(). 'index.php/utilizadores/delete/' . $value->ID_User . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
            }
         ?>
      </table>
	</div><br><br>
  <h1>Gerir Encarregados</h1> <br>
  <div class="container">
      
      <table class="table admin">
           <tr class="tabela1">
           <th width="250"> Nome </th>
           <th> Contacto </th>
           <th> Morada </th>
           <th> Educando </th>
           <th width="70"></th>
           <th width="70"><a class="btn btn-sm btn-primary" href="utilizadores/novoutilizador">Novo</a></th></tr>
         <?php
            foreach ($utilizadores as $key => $value) {
                echo '<tr><td>' . $value->NomeEncarregado . "</td>";
                echo '<td>' . $value->ContactoEncarregado . '</td>';
                echo '<td>' . $value->MoradaEncarregado . '</td>';
                echo '<td>' . $value->NomeAluno . '</td>';
                echo '<td><a href="' . base_url(). 'index.php/utilizadores/uptade/' . $value->ID_User . '" class="btn btn-sm btn-warning">Editar</a></td>';
                echo '<td><a href="' . base_url(). 'index.php/utilizadores/delete/' . $value->ID_User . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
            }
         ?>
      </table>
	</div>
	</div>
</div>


</body>
</html>