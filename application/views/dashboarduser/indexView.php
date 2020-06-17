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
      flex-grow:0;
      width: 20vw;
    }
    .perfil{
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow:1;
      width: 20vw;
    }
    .outros{
      background: black;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow:1;
      width: 20vw;
    }
    .eventos{
      background: black;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow:1;
      width: 20vw;
    }
    .noticias{
      background: black;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow:1;
      width: 20vw;
    }
    .flex-x {
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      text-align: center;
      flex-grow:5;
      width:50vw;
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
      $this->load->view('common/navBaruser');
      ?></li>
    <li class="flex-x">
      <ul class="flex-container">

        <li class="flex-item perfil">
          <div> <img src="assets/img/logo.svg" height="100px"></div>
          <h2>Tiago Nunes</h2>
          <h3>Administrador</h2>
          <button>Editar Perfil</button>
        </li><br>
        <li class="flex-item eventos">
          <h2>Adicionar Evento</h2>
        <li class="flex-item noticias">
          <h2>Adicionar Noticia</h2>
        </li>
      </ul>
    </li>
  </ul>


</body>

</html>