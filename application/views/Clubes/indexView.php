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
      background-color: #13616D !important;
    }

    body {
      background-image: url("assets/img/fundo.svg");
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: #13616D;
    }

    .admin {
      background-color: white !important;
      border-radius: 10px !important;
    }

    h1 {
      color: #fff;
    }

    .container {
      margin-top: 5% !important;
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
        <h1>Gerir Clubes</h1><br><br>
        <div class="form-group input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
      <input name="consulta" id="txt_consulta" placeholder="Pesquisar..." type="text" class="form-control">
      </div>
        
        <table id="tabela" class="table admin">
        <thead>
          <tr class="tabela1">
            <th width="170"> Nome do Clube </th>
            <th width="200"> Descricao </th>
            <th width="200"> Professor </th>
            <th> Horario </th>
            <th width="70"></th>
            <th width="70"><a class="btn btn-sm btn-primary" href="clubes/novoClube">Novo</a></th>
          </tr>
  </thead>
          <?php
          foreach ($clubes as $key => $value) {
            echo '<tr><td>' . $value->NomeClube . "</td>";
            echo '<td>' . $value->Descricao . "</td>";
            echo '<td>' . $value->NomeProfessor . '</td>';
            echo '<td>' . $value->Horario . '</td>';

            echo '<td><a href="' . base_url() . 'index.php/clubes/uptade/' . $value->ID_Clube . '" class="btn btn-sm btn-warning">Editar</a></td>';
            echo '<td><a href="' . base_url() . 'index.php/clubes/delete/' . $value->ID_Clube . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
          }
          ?>
        </table>
      </div>
    </div>
  </div>

  <script>
  $('input#txt_consulta').quicksearch('table#tabela tbody tr');
 </script>

</body>

</html>