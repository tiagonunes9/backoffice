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
      background-color: #13616D;
    }

    .jumbotron {
      background-color: #13616D !important;
    }

    h1 {
      font-size: 200% !important;
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
  $this->load->view('common/navBar');
  ?>



  <div class="container">
    <div class="jumbotron">
      
        <div class="row">
          <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Alunos"><img src="<?php echo base_url('assets/img/book.png'); ?>" width=50% /></a></div>
          <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Professores"><img src="<?php echo base_url('assets/img/teacher.png'); ?>" width=50% /></a></div>
          <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Encarregados"><img src="<?php echo base_url('assets/img/family.png'); ?>" width=50% /></a></div>
        </div><br>
        <div class="row">
          <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Alunos">
              <p>Alunos</p>
            </a></div>
          <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Professores">
              <p>Professores</p>
            </a></div>
          <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Encarregados">
              <p>Encarregados <br>de Educação</p>
            </a></div>
        
      </div>
    </div>
  </div>
</body>

</html>


<?php
$this->load->view('common/footLibraries');
?>