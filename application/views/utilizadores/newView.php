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
            font-size: 100%;
            color: #707070;
            text-align: right;
            margin-left: 10%;
            margin-top: 5%
        }

        .outros {
            width: 60%;
            margin-left: 30%;
            margin-top: -3%;
        }

        .btnadmin {
            background-color: #42B19D;
            color: white;
            font-family: "Oswald";
            font-weight: bold;
            margin-left: 40%;
            margin-right: 60%;
        }

        .btnadmine {
            background-color: #E47A3F;
            color: white;
            font-family: "Oswald";
            font-weight: bold;
            margin-left: 40%;
            margin-right: 60%;
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
                $this->load->view('common/navBaradmin');
            else if ($_SESSION['admin'] == "2")
                $this->load->view('common/navBarmanager');
            else
                $this->load->view('common/navBaruser');
            ?>
        </div>
        <div class="content-side">
            <div class="content-info">
                <div class="div-title">
                    <div class="title-h1">
                        <h1>Utilizadores</h1>
                    </div>
                    <div class="title-divider-right">
                        <hr>
                    </div>
                </div>


                <?php echo form_open(base_url() . 'index.php/utilizadores/novoutilizador/'); ?>

                <div class="admin">
                    <label class="textito">Nome:</label>
                    <input type="teste" class="form-control outros" name="nome" required>
                    <label class="textito">Email:</label>
                    <input type="text" name="email" class="form-control outros" required>
                    <label class="textito">Password:</label>
                    <input type="text" name="password" class="form-control outros" required>
                    <label class="textito">Tipo de utilizador:</label>
                    <input type="text" name="tipo_user" class="form-control outros" required>
                    <div class="btn-group centrar">
                        <button type="submit" class="btn btn-default btnadmin">Adicionar</button>
                        <button type="button" class="btn btn-default btnadmine" onclick="history.back()">Voltar</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>