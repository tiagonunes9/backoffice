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
      width: 15vw;
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

    .adicionar {
      color: #2F898D;
      font-family: "Oswald";
      font-weight: normal;
      font-size: 50%;
    }

    .adicionar:hover {
      color: #2F898D;
      font-family: "Oswald";
      font-weight: normal;
      font-size: 50%;
      text-decoration: none;
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
        <h1>Noticias</h1>
        <hr><br>


        <a class="adicionar" href="noticias/novanoticia"><img src="assets/img/add.PNG"/>Adicionar Noticia</a>
        </tr>
        <?php
        foreach ($noticias as $key => $value) {
          echo '<tr><td>' . $value->nome . "</td>";
          echo '<td>' . $value->descricao . '</td>';
          echo '<td><a href="' . base_url() . 'index.php/noticias/uptade/' . $value->id_noticia . '" class="btn btn-sm btn-warning">Editar</a></td>';
          echo '<td><a href="' . base_url() . 'index.php/noticias/delete/' . $value->id_noticia . '" class="btn btn-sm btn-danger">Eliminar</a></td></tr>';
        }
        ?>
        </table>

      </ul>
    </li>
  </ul>


</body>

</html>