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
<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">  
  <style>
    .jumbotron {
      background-color: #F2F2F2 !important;
    }

    body,
    html {
      background-color: #F2F2F2 !important;
    }

    h1 {
      color: #EDB347;
      font-family: "Oswald";
      font-weight: bold;
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
      margin: 2%;
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
      background: #F2F2F2;
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
      background: #F2F2F2;
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

    .barra {
      width: 82%;
      margin-top: 2%;
    }

    .texto {
      margin-left: 2%;
    }

    .adde {
      color: #2F898D;
      font-family: "Oswald";
      margin-top: 7%;
    }

    .addn {
      color: #2F898D;
      font-family: "Oswald";
      margin-top: 7%;
    }

    .mais {
      width: 30%;
    }
  </style>
</head>

<body>


  <div class="main-container">
    <div class="navigation-side">
      <?php
      $this->load->view('common/navBaruser');
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
        </div><br><br>
        <div class="eventos">
          <a href="eventos/novoevento"><img src="../assets/img/plus.png" class="mais">
            <h2 class="adde">Adicionar evento </h2>
          </a>
          <div class="flex-item noticias">
            <a href="noticias/novanoticia"><img src="../assets/img/plus.png" class="mais">
              <h2 class="addn">Adicionar Noticia </h2>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>