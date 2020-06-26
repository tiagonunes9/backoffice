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

    .perfil {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 40vw;
      margin:2%;
      color:#333333;
    }

    .outros {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 30vw;
      margin:2%;
      color:#333333;
    }

    .eventos {
      background: #F2F2F2;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 20vw;
      margin:2%;
      color:#333333;
      
    }

    .noticias {
      background: #F2F2F2;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: blue;
      text-align: center;
      flex-grow: 1;
      width: 20vw;
      margin:2%;
      color:#333333;
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
    .extra{
      color:white;
    }

    .barra{
      width: 82%;
      margin-top: 2%;
    }

    .texto{
      margin-left: 2%;
    }

    .adde{
      color:#2F898D;
      font-family: "Oswald";
      margin-top: 7%;
    }

    .addn{
      color:#2F898D;
      font-family: "Oswald";
      margin-top: 7%;
    }

    .mais{
      width: 30%;
    }
  </style>
</head>

<body>


  <ul class="flex-container">
    <li class="flex-item nav">
      <?php
      $this->load->view('common/navBarmanager');
      ?></li>
    <li class="flex-x">
      <ul class="flex-container">

        <li class="flex-item perfil">
          <div> <img src="../assets/img/person.png" height="100px"></div>
          <h2><?php
              if (isset($this->session->nome))
              ?></h2>
          <a href="perfil" class="w3-button w3-black"><button class="btn btn-warning extra">Editar Perfil</button></a>
        </li>
        <li class="flex-item outros">
          <div> <img src="../assets/img/calendar.png" height="100px"></div>
          <h2>Gestão de Utilizadores</h2>
          <h3>Adicione ou remova utilizadores</h3>
          <a href="utilizadores" class="w3-button w3-black"><button class="btn btn-warning extra">Ir para lá</button></a>
        </li><br><br>
        <li class="flex-item eventos">
        <img src="../assets/img/plus.png" class="mais">
          <h2 class="adde">Adicionar evento </h2>
        <li class="flex-item noticias">
        <img src="../assets/img/plus.png" class="mais">
        <h2 class="addn">Adicionar Noticia </h2>
        </li>
      </ul>
    </li>
  </ul>


</body>

</html>