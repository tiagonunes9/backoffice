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
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.ico">
    <style>
        .jumbotron {
            background-color: #F2F2F2 !important;
        }

        body,
        html {
            background-color: #F2F2F2 !important;
        }

        .main-container {
            height: 100vh;
            display: flex;
            flex-direction: row;
        }

        .navigation-side {
            flex: 0 0 20%;
            background-color: #333333;
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

        h1 {
            color: #EDB347;
            font-family: "Oswald";
            font-weight: bold;
            margin-left: 5%;
        }

        p {
            color: #707070;
            font-family: "Oswald";
            font-size: 55%;
        }

        .admin {
            background-color: white;
            margin: 5%;
            -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
            box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
            border-radius: 15px;
            padding: 0;
        }

        .link {
            color: #2F898D;
            font-family: 'Oswald';
            font-weight: bold;
            font-size: 60%;
        }

        .link:hover {
            color: #2F898D;
            font-family: 'Oswald';
            font-weight: bold;
            font-size: 60%;
            text-decoration: none;
        }

        .eliminar:hover {
            color: #E47A3F;
            font-family: 'Oswald';
            font-weight: lighter;
            font-size: 100%;
            text-decoration: none;
        }

        .info {
            background-color: #2F898D;
            font-family: 'Oswald';
            font-weight: normal;
            color: white;
        }

        .textito {
            font-family: "Oswald";
            font-weight: lighter;
            font-size: 1.5vw;
            color: #707070;
            text-align: right;
            margin-left: 10%;
            margin-top: 5%
        }

        .outros {
            width: 60%;
            margin-left: 30%;
            margin-top: -5%;
        }

        .btnadmin {
            background-color: #42B19D;
            color: white;
            font-family: "Oswald";
            font-weight: bold;
            margin-left: 40%;
            margin-right: 60%;
            width:5vw;
      font-size: 1vw;
        }

        .btnadmine {
            background-color: #E47A3F;
            color: white;
            font-family: "Oswald";
            font-weight: bold;
            margin-left: 40%;
            margin-right: 60%;
            width:5vw;
      font-size: 1vw;
        }


        .title-divider-right {
            margin-left: 1%;
            margin-top: 0.6%;
            width: 81%;
            padding: 0 10% 0 0;
            border-radius: 5px;
        }


        .div-title {
            height: 15%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            justify-content: center;
        }

        .title-divider-right {
            flex-grow: 1;
            width: 55%;
            padding: 2% 0% 0 0;
        }

        .title-h1 {
            flex-grow: 1;
            width: 0em;
            margin-top: 2%;
            text-align: center;
        }


        .title-divider-right hr {
            margin: 0;
            padding: 0;
            border: 0;
            height: 10px;
            background-color: #EDB347;
        }

        .ativo {
            color: #42B19D;
            font-family: "Oswald";
            font-weight: lighter;
            font-size: 100%;
        }

        .desativo {
            color: #E47A3F;
            font-family: "Oswald";
            font-weight: lighter;
            font-size: 100%;
        }

        .centrar {
            margin-left: 40%;
            margin-right: 60%;
            margin-top: 5%;
            margin-bottom: 5%;
        }
    </style>
</head>

<body>


    <div class="main-container">
        <div class="navigation-side">
            <?php
            if ($_SESSION['admin'] == "1")
                $this->load->view('common/navBaradmin1');
            else if ($_SESSION['admin'] == "2")
                $this->load->view('common/navBarmanager1');
            else
                $this->load->view('common/navBaruser1');
            ?>
        </div>
        <div class="content-side">
            <div class="content-info">
                <div class="div-title">
                    <div class="title-h1">
                        <h1>Eventos</h1>
                    </div>
                    <div class="title-divider-right">
                        <hr>
                    </div>
                </div>


                <?php echo form_open_multipart(base_url() . 'eventos/novoevento/'); ?>
               

                <div class="admin">
                    <label class="textito">Nome do Evento:</label>
                    <input type="teste" class="form-control outros" name="nome" maxlength="50" placeholder="Nome" required>
                    <label class="textito">Descrição:</label>
                    <textarea name="descricao" placeholder="Descrição" class="form-control outros" rows="4" cols="50"></textarea>
                    <label class="textito">Data:</label>
                    <input type="date" name="data" class="form-control outros"placeholder="Data" >
                    <label class="textito">Local:</label>
                    <input type="text" name="local" class="form-control outros"placeholder=""Local >
                    <label class="textito">Imagem:</label>
                    <input type="file" name="imagem" size="20" class="form-control outros" required>
                    <label class="textito">Autor:</label>
                    <input type="text" name="autor" class="form-control outros"placeholder="Autor" >
                    <input type="hidden" name="estado" value="0">
                    <div class="btn-group centrar">
                        <button type="submit" class="btn btn-default btnadmin">Guardar</button>
                        <button type="button" class="btn btn-default btnadmine" onclick="history.back()">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>