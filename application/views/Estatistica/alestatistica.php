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

.container{
  margin-top:5% !important;
}
p{
  color: #fff;
  font-family: "Rubik" Medium !important;
  align-items: center;
  color: #fff;
}
h1{
  color: #fff;
}
.centro{
  text-align: center !important;
}


</style>
</head>
<body>


    <?php
		$this->load->view('common/navBar');
    ?>



    <div class="container">
    <h1 class="centro">Alunos por Ano </h1>
    <div class="jumbotron">

      <div class="row">
        <div class="col"><p>7º Ano</p></div>
        <div class="col"><p>8º Ano</p></div>
        <div class="col"><p>9º Ano</p></div>
        <div class="col"><p>10º Ano</p></div>
        <div class="col"><p>11º Ano</p></div>
        <div class="col"><p>12º Ano</p></div>
      </div><br>
      <div class="row">
        <div class="col"><p><?php
        $query = $this->db->query('SELECT turma.ID_Turma, turma.Ano, turma.LetraTurma, alunos.ID_Turma FROM turma, alunos 
        WHERE turma.ID_Turma = alunos.ID_Turma AND turma.Ano LIKE 7');
        echo $query->num_rows();
        ?></p></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT turma.ID_Turma, turma.Ano, turma.LetraTurma, alunos.ID_Turma FROM turma, alunos 
        WHERE turma.ID_Turma = alunos.ID_Turma AND turma.Ano LIKE 8');
        echo $query->num_rows();
        ?></p></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT turma.ID_Turma, turma.Ano, turma.LetraTurma, alunos.ID_Turma FROM turma, alunos 
        WHERE turma.ID_Turma = alunos.ID_Turma AND turma.Ano LIKE 9');
        echo $query->num_rows();
        ?></p></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT turma.ID_Turma, turma.Ano, turma.LetraTurma, alunos.ID_Turma FROM turma, alunos 
        WHERE turma.ID_Turma = alunos.ID_Turma AND turma.Ano LIKE 10');
        echo $query->num_rows();
        ?></p></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT turma.ID_Turma, turma.Ano, turma.LetraTurma, alunos.ID_Turma FROM turma, alunos 
        WHERE turma.ID_Turma = alunos.ID_Turma AND turma.Ano LIKE 11');
        echo $query->num_rows();
        ?></p></div>
        <div class="col"><p><?php
        $query = $this->db->query('SELECT turma.ID_Turma, turma.Ano, turma.LetraTurma, alunos.ID_Turma FROM turma, alunos 
        WHERE turma.ID_Turma = alunos.ID_Turma AND turma.Ano LIKE 12');
        echo $query->num_rows();
        ?><p></div>
      </div>
      <div class="row">
        <div class="col"><p>Alunos</p></div>
        <div class="col"><p>Alunos</p></div>
        <div class="col"><p>Alunos</p></div>
        <div class="col"><p>Alunos</p></div>
        <div class="col"><p>Alunos</p></div>
        <div class="col"><p>Alunos</p></div>
      </div>
    </div>
<br><br><br>
    <h1 class="centro">Alunos por Clube </h1>

<div class="container">
  <div class="row">
    <div class="col"><p>Xadrez</p></div>
  </div><br>
  <div class="row">
    <div class="col"><p><?php
    $query = $this->db->query('SELECT * FROM clubes WHERE NomeClube LIKE "Xadrez"');
    echo $query->num_rows();
    ?></p></div>
  </div>
  <div class="row">
    <div class="col"><p>Alunos</p></div>
  </div>
</div>

    </div>

</body>
</body>
</html>


<?php
    $this->load->view('common/footLibraries');
?>