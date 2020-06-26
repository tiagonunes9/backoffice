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
  </style>
</head>

<body>


  <ul class="flex-container">
  <li class="flex-item nav">
      <?php
      if ($_SESSION['admin']=="1")
      $this->load->view('common/navBaradmin');
      else if ($_SESSION['admin']=="2")
      $this->load->view('common/navBarmanager');
      else
      $this->load->view('common/navBaruser');
      ?></li>
    <li class="flex-x">
      <ul class="flex-container">
        <h1>Perfil</h1> <br>
        <?php echo form_open(base_url() . 'index.php/perfil/update/' . $perfil[0]->id_user); ?>

        <div >
          <br>
          <label>Nome:</label>
          <input type="text" name="nome" value="<?php echo $perfil[0]->nome; ?>" class="form-control">
          <label>Email:</label>
          <input type="text" name="email" value="<?php echo $perfil[0]->email; ?>" class="form-control">
          <label>Telemóvel:</label>
          <input type="text" name="contacto" value="<?php echo $perfil[0]->contacto; ?>" class="form-control">
          <label>Localidade:</label>
          <input type="text" name="morada" value="<?php echo $perfil[0]->morada; ?>" class="form-control">
          <label>Password:</label>
          <input type="password" name="password" value="<?php echo $perfil[0]->password; ?>" class="form-control">
          <br>
          <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-default btnadmin">Guardar</button><br><br>
          </div>
        </div>

      </ul>
    </li>
  </ul>


</body>

</html>