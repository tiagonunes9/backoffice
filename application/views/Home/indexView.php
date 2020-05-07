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
h1{
  font-size: 200% !important;
}

.container{
  margin-top:5% !important;
}
p{
  color: #fff;
  font-family: "Rubik" Medium !important;
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
  <div class="row">
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Estatistica"><img src="<?php echo base_url('assets/img/graphic.png'); ?>" width=50% /></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Eventos"><img src="<?php echo base_url('assets/img/calendar.png'); ?>" width=50% /></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Utilizadores"><img src="<?php echo base_url('assets/img/clipboard.png'); ?>" width=50% /></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Clubes"><img src="<?php echo base_url('assets/img/team.png'); ?>" width=50% /></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Turmas"><img src="<?php echo base_url('assets/img/seo-training.png'); ?>" width=50% /></a></div>
  </div><br>
  <div class="row">
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Estatistica"><p>Estatísticas</p></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Eventos"><p>Eventos <br> Noticias</p></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Utilizadores"><p>Utilizadores</p></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Clubes"><p>Clubes</p></a></div>
    <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Turmas"><p>Turmas</p></a></div>
  </div>
</div>

</body>
</html>


    <?php
		$this->load->view('common/footLibraries');
	?>