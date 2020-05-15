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
            background-image: url("assets/img/fundo.svg");
            background-repeat: no-repeat;
            background-size: 100%;
            background-color: #F2F2F2;
        }

        h1 {
            color: #EDB347;
            font-family: "Oswald";
            font-weight: bold;
        }

        .tabela2 {
            background-color: white !important;
            border-radius: 10px;
        }

        .btnadmin {
            background-color: #3990D7;
            color: white;
            width: 100%;
        }
    </style>
</head>

<body>


    <?php
    $this->load->view('common/navBaradmin');
    ?>

    <div id="container">
        <div class="jumbotron">
            <h1>Editar Noticias</h1>
        </div>
    </div>

    <div class="container">

        <?php echo form_open(base_url() . 'index.php/noticias/update/' . $noticias[0]->ID_Noticia); ?>

        <div class="form-group col-md-6 offset-md-3 tabela2">
            <br><label>Nome do Noticia:</label>
            <input type="text" name="NomeNoticia" value="<?php echo $noticias[0]->NomeNoticia; ?>" class="form-control" required>
            <label>Descricão:</label>
            <input type="text" name="DescricaoNoticia" value="<?php echo $noticias[0]->DescricaoNoticia; ?>" class="form-control" required>
            <label>Data:</label>
            <input type="date" name="DataNoticia" value="<?php echo $noticias[0]->DataNoticia; ?>" class="form-control" required>
            <label>Clube:</label>
            <input type="data" name="ClubeNoticia" value="<?php echo $noticias[0]->ClubeNoticia; ?>" class="form-control">
            <label>Professor:</label>
            <input type="data" name="ProfNoticia" value="<?php echo $noticias[0]->ProfNoticia; ?>" class="form-control">

            <br><br><br>
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-default btnadmin">Guardar</button><br><br><br>
            </div>
        </div>


        </form>
    </div>

</body>

</html>