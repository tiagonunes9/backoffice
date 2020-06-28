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

    body,
    html {
      background-color: #F2F2F2 !important;
    }

    .main-container {
      height: 100vh;
      display: flex;
      flex-direction: row;
    }

    .navigation-side {
      flex: 0 0 20%;
      background-color: #333333;
    }

    .content-side {
      flex: 1 1;
      background-color: #F2F2F2;
      overflow: auto;
    }

    .content-info {
      font-size: 28px;
      padding: 0px 10px;
      margin: 0px 100px;
    }

    h1 {
      color: #EDB347;
      font-family: "Oswald";
      font-weight: bold;
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
      margin:0;
      color: #333333;
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
      margin: 2%;
      color: #333333;
    }

    .eventos {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 20vw;
      margin: 2%;
      color: #333333;

    }

    .noticias {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: blue;
      text-align: center;
      flex-grow: 1;
      width: 20vw;
      margin: 2%;
      color: #333333;
    }

    .extra {
      color: white;
    }


    .texto {
      margin-left: 2%;
    }

    .div-title {
      height: 15%;
      margin: 0;
      padding: 0;
      display: flex;
      flex-wrap: nowrap;
      align-items: center;
      justify-content: center;
    }

    .title-divider-right {
      flex-grow: 1;
      width: 60%;
      padding: 2% 10% 0 0;
    }

    .title-h1 {
      flex-grow: 1;
      width: 0em;
      margin-top:2%;
      text-align: center;
    }


    .title-divider-right hr {
      margin: 0;
      padding: 0;
      border: 0;
      height: 10px;
      background-color: #EDB347;
    }
  </style>
</head>

<body>


  <div class="main-container">
    <div class="navigation-side">
      <?php
        $this->load->view('common/navBarmanager');
      ?>
    </div>
    <div class="content-side">
      <div class="content-info">

        <div class="content-info perfil">
          <div> <img src="../assets/img/person.png" height="100px"></div>
          <h2><?php
              if ($_SESSION['admin'] == "1")
                echo "Administrador";
              else if ($_SESSION['admin'] == "2")
                echo "Gestor";
              else
                echo "Utilizador";
              ?>
          </h2>
          <a href="perfil" class="w3-button w3-black"><button class="btn btn-warning extra">Editar Perfil</button></a>
        </div>
        <div class="content-info outros">
          <div> <img src="../assets/img/calendar.png" height="100px"></div>
          <h2>Gestão de Utilizadores</h2>
          <h3>Adicione ou remova utilizadores</h3>
          <a href="utilizadores" class="w3-button w3-black"><button class="btn btn-warning extra">Ir para lá</button></a>
        </div><br>
        <div class="div-title">
          <div class="title-h1">
            <h1 class="texto">Por Aprovar</h1>
          </div>
          <div class="title-divider-right">
            <hr>
          </div>
        </div>

        <div class="content-info eventos">
          <h2>Eventos</h2>

          <div class="content-info noticias">
            <h2>Noticias</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>