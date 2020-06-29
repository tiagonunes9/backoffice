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

        h1 {
            color: #EDB347;
            font-family: "Oswald";
            font-weight: bold;
        }

        .main-container {
            height: 100%;
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

        .textito {
            font-size: 50%;
            color: #707070;
        }

        .admin {
            background-color: white;
            -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
            box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.05);
            width: 50vw;
            height: 50%;
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
      width: 60%;
      padding: 2% 10% 0 0;
    }

    .title-h1 {
      flex-grow: 1;
      width: 0em;
      margin-top:2%;
      text-align: center;
    }


    .title-divider-right hr {
      margin: 0;
      padding: 0;
      border: 0;
      height: 10px;
      background-color: #EDB347;
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
            <h1>Noticias</h1>
          </div>
          <div class="title-divider-right">
            <hr>
          </div>
        </div>


                <?php echo form_open(base_url() . 'index.php/noticias/novanoticia/'); ?>

                <div class="admin">
                    <label class="textito">Nome do Evento:</label>
                    <input type="teste" class="form-control" name="nome" required>
                    <label class="textito">Descrição:</label>
                    <input type="text" name="descricao" value="" class="form-control">
                    <label class="textito">Data:</label>
                    <input type="date" name="data" value="" class="form-control">
                    <input type="hidden" name="estado" value="0">
                    <button type="submit" class="btn btn-default">Adicionar</button><br><br>
                </div>
            </div>
        </div>
</body>

</html>