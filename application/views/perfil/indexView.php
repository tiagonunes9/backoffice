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

    .admin {
      background-color: white;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.05);
      width: 50vw;
      height: 50%;
      margin-top: 20%;
    }

    label {
      font-size: 50%;
      color: #707070;
      font-family: "Oswald";
      font-weight: normal;
    }

    .outros {
      width: 50%;
      margin-left: 25%;
    }

    .texto {
      text-align: left;
    }

    .perfil {
      background: white;
      line-height: 150px;
      color: orange;
      text-align: center;
      flex-grow: 1;
      margin: 2%;
      color: #333333;
    }

    .btnadmin {
      background-color: #42B19D;
      color: white;
      font-family: "Oswald";
      font-weight: bold;
    }

    .titulo{
      margin-top:7%;
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
        <h1 class="titulo">Perfil</h1><hr> <br>
        <?php echo form_open(base_url() . 'index.php/perfil/update/' . $perfil[0]->id_user); ?>
        <!--<input type="image" name="imagem" value="<?php echo $perfil[0]->imagem; ?>" class="form-control"> -->
        <label class="texto">Email:</label>
        <input type="email" name="email" value="<?php echo $perfil[0]->email; ?>" class="form-control outros">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?php echo $perfil[0]->nome; ?>" class="form-control outros">
        <label>Morada:</label>
        <input type="text" name="morada" value="<?php echo $perfil[0]->contato; ?>" class="form-control outros">
        <label>Contato:</label>
        <input type="text" name="contato" value="<?php echo $perfil[0]->morada; ?>" class="form-control outros">
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $perfil[0]->password; ?>" class="form-control outros">
        <br>
        <div class="col-md-6 offset-md-3">
          <button type="submit" class="btn btn-default btnadmin">Guardar</button><br><br>
        </div>
      </div>
    </div>
</body>

</html>