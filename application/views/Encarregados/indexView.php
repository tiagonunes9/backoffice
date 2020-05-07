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
      background-color: #13616D;
    }

    .admin {
      background-color: #f2f2f2 !important;
      border-radius: 10px !important;
    }

    body {
      background-image: url("assets/img/fundo.svg");
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: #13616D;
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
        <h1>Gerir Encarregados</h1> <br>


        <table class="table admin">
          <tr class="tabela1">
            <th width="250"> ID_Encarregado </th>
            <th> Nome </th>
            <th> Contacto </th>
            <th> Morada </th>
            <th width="70"></th>
            <th width="70"><a class="btn btn-sm btn-primary" href="encarregados/novoencarregado">Novo</a></th>
          </tr>
          <?php
          foreach ($encarregados as $key => $value) {
            echo '<tr><td>' . $value->ID_Encarregado . "</td>";
            echo '<td>' . $value->NomeEncarregado . "</td>";
            echo '<td>' . $value->ContactoEncarregado . '</td>';
            echo '<td>' . $value->MoradaEncarregado . '</td>';
            echo '<td><a href="' . base_url() . 'index.php/encarregados/uptade/' . $value->ID_Encarregado . '" class="btn btn-sm btn-warning">Editar</a></td>';
            echo '<td><a href="' . base_url() . 'index.php/encarregados/delete/' . $value->ID_Encarregado . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
          }
          ?>
        </table>
      </div>
    </div>
  </div>


</body>

</html>