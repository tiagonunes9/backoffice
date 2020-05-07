<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
  <?php
  $this->load->view('common/headLibraries');
  ?>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <style>
    .jumbotron {
      background-color: #13616D;
    }

    .container {
      margin-top: 5% !important;
    }

    .admin {
      background-color: #f2f2f2 !important;
      border-radius: 10px !important;
    }

    h1 {
      color: #fff;
    }

    body {
      background-image: url("assets/img/fundo.svg");
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: #13616D;
    }

    .tabela1 {
      background-color: white;
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
      
      <div class="container">
      <h1>Gerir Alunos</h1> <br> <br>
      <div class="form-group input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
      <input name="consulta" id="txt_consulta" placeholder="Pesquisar..." type="text" class="form-control">
      </div>

        <table id="tabela" class="table admin">
        <thead>
          <tr class="tabela1">
            <th width="200"> Nome do Aluno </th>
            <th> Contacto </th>
            <th> Morada </th>
            <th> Nome Encarregado </th>
            <th> Turma </th>
            <th width="70"></th>
            <th width="70"><a class="btn btn-sm btn-primary" href="alunos/novoaluno">Novo</a></th>
          </tr>
        </thead>
          <?php
          foreach ($alunos as $key => $value) {
            echo '<tr><td>' . $value->NomeAluno . "</td>";
            echo '<td>' . $value->ContactoAluno . "</td>";
            echo '<td>' . $value->MoradaAluno . "</td>";
            echo '<td>' . $value->NomeEncarregado . "</td>";
            echo '<td>' . $value->Ano . $value->LetraTurma . "</td>";
            echo '<td><a href="' . base_url() . 'index.php/alunos/uptade/' . $value->ID_Aluno . '" class="btn btn-sm btn-warning">Editar</a></td>';
            echo '<td><a href="' . base_url() . 'index.php/alunos/delete/' . $value->ID_Aluno . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
          }
          ?>
        </table>
      </div><br><br>

    </div>
  </div>
  <script>
  $('input#txt_consulta').quicksearch('table#tabela tbody tr');
 </script>

</body>

</html>