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
      width: 20vw;
    }

    .outros {
      background: black;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 20vw;
    }

    .eventos {
      background: black;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 20vw;
    }

    .noticias {
      background: black;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: blue;
      text-align: center;
      flex-grow: 1;
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

    .extra {
      color: white;
      -webkit-box-shadow: -4px 4px 23px -5px rgba(145, 145, 145, 1);
      -moz-box-shadow: -4px 4px 23px -5px rgba(145, 145, 145, 1);
      box-shadow: -4px 4px 23px -5px rgba(145, 145, 145, 1);
      font-family: "Oswald";
      font-weight:normal;
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

        <li class="flex-item perfil">
          <div> <img src="assets/img/user.png" height="100px"></div>
          <h2><?php
              if (isset($this->session->nome))
                echo $_SESSION['nome'];
              echo $_SESSION['email'];
              ?></h2>
          <button class="btn btn-warning extra">Editar Perfil</button>
        </li>
        <li class="flex-item outros">
          <div> <img src="assets/img/calendar.png" height="100px"></div>
          <h2>Gestão de Utilizadores</h2>
          <h3>Adicione ou remova utilizadores</h3>
          <button class="btn btn-warning extra">Ir para lá</button>
        </li><br>
        <h1>Por Aprovar _______________________________________________________________________________________</h1><br>
        <li class="flex-item eventos">
          <h2>Eventos</h2>
          
        <li class="flex-item noticias">
          <h2>Noticias</h2>
        </li>
      </ul>
    </li>
  </ul>


</body>

</html>