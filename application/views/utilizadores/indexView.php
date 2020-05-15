<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MY VIRIATO ADMINISTRADOR</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">

  <?php
  $this->load->view('common/headLibraries');
  ?>
  <style>
    body {
      background-image: url("assets/img/fundo.svg");
      background-repeat: no-repeat;
      background-size: 100%;
      background-color: #F2F2F2;
    }

    h1{
  color: #EDB347;
  font-family: "Oswald";
  font-weight: bold;
}

    .container {
      margin-top: 5% !important;
    }

    p {
      color: #fff;
      font-family: "Rubik"Medium !important;
      align-items: center;
    }
  </style>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
</head>

<body>
  <?php
  $this->load->view('common/navBaradmin');
  ?>



  <div class="container">
  </div>
</body>

</html>


<?php
$this->load->view('common/footLibraries');
?>