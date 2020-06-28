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

    h1 {
      color: #EDB347;
      font-family: "Oswald";
      font-weight: bold;
    }

    
    html,
    body {
      background-color: #F2F2F2 !important;
      height: 100%;
      margin: 0;
    }

    .main-container {
      height: 100%;
      display: flex;
      flex-direction: row;
    }

    .navigation-side {
      flex: 0 0 20%;
      background-color: gray;
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
    .icone{
    width: 25%;
    height: auto;
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

    .flex-container {
      display: flex;
      flex-flow: row wrap;
      justify-content: space-around;
      padding: 0;
      margin-left: 5%;
      margin-right: 5%;
      list-style: none;
    }

    .flex-item {
      background: blue;
      width: 250px;
      height: 200px;
      margin-top: 6%;
      margin-left: 3%;
      margin-right: 3%;
      margin-bottom: 5%;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      text-align: center;
    }

    .hide {
      display: none;
    }

    .myDIV:hover+.hide {
      display: block;
      color: white;
    }
  </style>
</head>

<body>


<div class="main-container">
    <div class="navigation-side">
        <?php
        if ($_SESSION['admin'] == "1")
          $this->load->view('common/navBaradmin');
        else if ($_SESSION['admin'] == "2")
          $this->load->view('common/navBarmanager');
        else
          $this->load->view('common/navBaruser');
        ?>
    </div>
    <div class="content-side">
      <div class="content-info">
        <div class="div-title">
          <div class="title-h1">
            <h1>Noticias</h1>
          </div>
          <div class="title-divider-right">
            <hr>
          </div>
        </div>


        <a class="adicionar" href="noticias/novanoticia"><img src="../assets/img/add.PNG" class="icone" />Adicionar Noticia</a>
        <div class="content-info">
          <ul class="flex-container">

            <?php
            foreach ($noticias as $key => $value) {
              echo '<li class="flex-item myDIV">' . $value->nome . "</li>";
              echo '<a href="' . base_url() . 'index.php/noticias/delete/' . $value->id_noticia . '" class="btn btn-sm btn-danger hide">Eliminar</a>';
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
</body>

</html>