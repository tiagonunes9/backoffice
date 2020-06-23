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

        .textito {
            font-size: 50%;
            color: #707070;
        }

        .admin {
            background-color: white;
            -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
            box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.05);
            width:50vw;
            height: 50%;
        }
        .traço{
            color:pink;
            width:80%;
            border:20;
        }
    </style>
</head>

<body>


    <ul class="flex-container">
        <li class="flex-item nav">
            <?php
            $this->load->view('common/navBaradmin');
            ?></li>
        <li class="flex-x">
            <ul class="flex-container">
                <h1>Utilizadores</h1> <hr class="traço"><br>


                <?php echo form_open(base_url() . 'index.php/utilizadores/novoutilizador/'); ?>

                <div class="admin">
                    <label class="textito">Nome do Evento:</label>
                    <input type="teste" class="form-control" name="NomeEvento">
                    <label class="textito">Descrição:</label>
                    <input type="text" name="Descricao" value="" class="form-control">
                    <label class="textito">Data:</label>
                    <input type="date" name="Data" value="" class="form-control">
                        <button type="submit" class="btn btn-default">Adicionar</button><br><br>
                </div>
            </ul>
        </li>
    </ul>


</body>

</html>