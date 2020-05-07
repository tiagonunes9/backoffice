<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Adicionar Pergunta</title>
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
.btnadmin{
    background-color:#3990D7;
    color:white;
    width:100%;
}
h1{
  color: #fff;
}

.formadmin{
    background-color:white !important;
    border-radius: 10px;

}


</style>
</head>
<body>

<?php
		$this->load->view('common/navBar');
    ?>
    
	<div id="container">
		<div class="jumbotron">
		<h1>Adicionar Noticia</h1><br><br><br>


	<div class="container">
      
<?php echo form_open(base_url() . 'index.php/noticias/novanoticia/'); ?>

<div class="form-group col-md-6 offset-md-3 formadmin"><br>
    <label>Nome da Noticia:</label>
    <input type ="teste" class="form-control" name="NomeNoticia" required>
    <label>Descrição:</label>
    <input type="text" name="DescricaoNoticia" value="" class="form-control" required>
    <label>Data:</label>
    <input type="date" name="DataNoticia" value="" class="form-control" required>
    <label>Clube:</label>
    <input type="text" name="ClubeNoticia" value="" class="form-control" >
    <label>Professor:</label>
    <input type="text" name="ProfNoticia" value="" class="form-control" >
    <br><br>
   
    

    <br>
<div class="col-md-6 offset-md-3 formadmin">
    <button type="submit" class="btn btn-default btnadmin">Adicionar</button><br><br>
</div>
</div>

</form>
	</div>
	</div>
</div>
</body>
</html>