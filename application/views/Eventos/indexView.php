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

    body {
      background-color: #F2F2F2 !important;
    }

    h1 {
      color: #EDB347;
      font-family: "Oswald";
      font-weight: bold;
    }

    .flex-container {
      display: flex;
      flex-flow: row wrap;
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .flex-item {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 0;
      width: 20vw;
    }


    .flex-x {
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      text-align: center;
      flex-grow: 5;
      width: 50vw;
    }

    .nav {
      flex-basis: auto;
      background-color: #333333;
      margin-left: 0px;
    }
  </style>
</head>

<body>


  <ul class="flex-container">
    <li class="flex-item nav">
      <?php
      $this->load->view('common/navBaradmin');
      ?></li>
    <li class="flex-x">
      <ul class="flex-container">
            <h1>Eventos</h1> <br>


            <table class="table admin">
              <tr class="tabela1">
                <th width="250"> Nome </th>
                <th width="250"> Descricao </th>
                <th width="70"></th>
                <th width="70"><a class="btn btn-sm btn-primary" href="eventos/novoevento">Novo</a></th>
              </tr>
              <?php
              foreach ($eventos as $key => $value) {
                echo '<tr><td>' . $value->nome . "</td>";
                echo '<td>' . $value->descricao . '</td>';
                echo '<td><a href="' . base_url() . 'index.php/noticias/uptade/' . $value->id_evento . '" class="btn btn-sm btn-warning">Editar</a></td>';
                echo '<td><a href="' . base_url() . 'index.php/noticias/delete/' . $value->id_evento . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
              }
              ?>
            </table>

      </ul>
    </li>
  </ul>


</body>

</html>