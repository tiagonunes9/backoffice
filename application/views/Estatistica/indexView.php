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
.jumbotron{
  background-color: #13616D !important;
}

body {
			background-image: url("assets/img/fundo.svg");
			background-repeat: no-repeat;
			background-size: 100%;
			background-color: #13616D;
		}
    h1{
  color: #fff;
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
</head>
<body>


    <?php
		$this->load->view('common/navBar');
    ?>



    <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/estatistica/alunos/"><img src="<?php echo base_url('assets/img/graphic.png'); ?>" width=50% /></a></div>
        <div class="col"><img src="<?php echo base_url('assets/img/calendar.png'); ?>" width=50% /></div>
        <div class="col"><img src="<?php echo base_url('assets/img/clipboard.png'); ?>" width=50% /></div>
      </div><br>
      <div class="row">
        <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Estatistica"><p>Alunos</p></a></div>
        <div class="col"><p>Professores </p></div>
        <div class="col"><p>Encarregados de Educação</p></div>
      </div>
      <div class="row">
        <div class="col"><a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Estatistica"><p><?php
        $query = $this->db->query('SELECT * FROM alunos');
        echo $query->num_rows();
        ?></p></a></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT * FROM professores');
        echo $query->num_rows();
        ?> </p></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT * FROM encarregados');
        echo $query->num_rows();
        ?></p></div>
      </div>
    </div>

    </div>
</body>
</body>
</html>


<?php
    $this->load->view('common/footLibraries');
?>