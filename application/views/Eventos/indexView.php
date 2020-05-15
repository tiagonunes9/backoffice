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
    .jumbotron {
      background-color: #F2F2F2 !important;
    }

    .container {
      margin-top: 5% !important;
    }

    h1{
  color: #EDB347;
  font-family: "Oswald";
  font-weight: bold;
}

    body {
      background-image: url("assets/img/fundo.svg");
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: #F2F2F2;
    }

    .admin {
      background-color: white !important;
      border-radius: 10px !important;
    }

    .tabela1 {
      background-color: white;
      border-radius: 10px !important;
    }
  </style>
</head>

<body>


  <?php
  $this->load->view('common/navBaradmin');
  ?>
  <div id="container">
    <div class="jumbotron">
    <div class="container">
      <h1>Gerir Eventos</h1><br><br><br>

      <table class="table admin">
        <tr class="tabela1">
          <th width="200"> Nome do Evento </th>
          <th width="30"> Descricao </th>
          <th> Data </th>
          <th> ID_Clube </th>
          <th width="70"></th>
          <th width="70"><a class="btn btn-sm btn-primary" href="eventos/novoEvento">Novo</a></th>
        </tr>
        <?php
        foreach ($eventos as $key => $value) {
          echo '<tr><td>' . $value->NomeEvento . "</td>";
          echo '<td>' . $value->Descricao . "</td>";
          echo '<td>' . $value->Data . '</td>';
          echo '<td>' . $value->ID_Clube . '</td>';

          echo '<td><a href="' . base_url() . 'index.php/eventos/uptade/' . $value->ID_Evento . '" class="btn btn-sm btn-warning">Editar</a></td>';
          echo '<td><a href="' . base_url() . 'index.php/eventos/delete/' . $value->ID_Evento . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
        }
        ?>
      </table>
      </div>
    </div>
  </div>



</body>

</html>