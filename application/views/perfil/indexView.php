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



    h1 {
      color: #EDB347;
      font-family: "Oswald";
      font-weight: bold;
    }

    html,
    body {
      background-color: #F2F2F2 !important;
      height: 100%;
      margin: 0;
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

    .admin {
      background-color: white;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.05);
      width: 50vw;
      height: 50%;
      margin-top: 20%;
    }

    label {
      font-size: 50%;
      color: #707070;
      font-family: "Oswald";
      font-weight: normal;
    }

    .outros {
      width: 50%;
      margin-left: 20%;
      margin-top: -4%;
    }

    .texto {
      text-align: right;
      margin-left: 10%;
      margin-top: 5%
    }

    .perfil {
      background: white;
      line-height: 150px;
      color: orange;
      text-align: center;
      flex-grow: 1;
      margin: 2%;
      color: #333333;
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

    .caixa {
      background-color: white;
      margin: 5%;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
      padding: 0;
    }

    .centrar {
      margin-left: 40%;
      margin-right: 60%;
      margin-top: 5%;
      margin-bottom: 5%;
    }

    .container {
      position: relative;
      width: 50%;
    }

    .image {
      opacity: 1;
      display: block;
      height: auto;
      transition: .5s ease;
      backface-visibility: hidden;
      width:30%;
      margin-top:5%;
    }

    .middle {
      transition: .5s ease;
      opacity: 0;
      position: absolute;
      top: 70%;
      left: 20%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
      border-radius: 15px;
      width: 50%;
      height: auto;
    }

    .container:hover .image {
      opacity: 0.3;
    }

    .container:hover .middle {
      opacity: 1;
    }

    .text {
      background-color: gray;
      font-family: "Oswald";
      font-weight: bold;
      color: white;
      font-size: 50%;
      padding: 16px 32px;
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
            <h1>Perfil</h1>
          </div>
          <div class="title-divider-right">
            <hr>
          </div>
        </div>
        <div class="caixa"><br>
        <?php echo form_open_multipart(base_url() . 'perfil/update/' . $this->session->userdata('ID')) ?>
          <div class="container">
          <?php
            if($this->session->userdata('IMG_AVATAR') == NULL){
              $caminho = base_url('person.png');
            }else{
              $caminho = base_url('upload/' . $this->session->userdata('IMG_AVATAR'));
            }
            echo "<div> <img class='image' src='$caminho'></div>";
          ?><br>
            <div class="middle">
              <div class="text">Alterar
                <input type="file" style="visibility:none;" name="imagem" size="20" id="imagem">

              </div>
            </div>
          </div>
          <label class="texto">Email:</label>
          <input type="email" name="email" value="<?php echo $this->session->userdata('EMAIL') ?>" class="form-control outros">
          <label class="texto">Nome:</label>
          <input type="text" name="nome" value="<?php echo $this->session->userdata('NOME') ?>" class="form-control outros">
          <label class="texto">Morada:</label>
          <input type="text" name="morada" value="<?php echo $this->session->userdata('MORADA') ?>" class="form-control outros">
          <label class="texto">Contato:</label>
          <input type="text" name="contato" value="<?php echo $this->session->userdata('CONTACTO') ?>" class="form-control outros">

          <label class="texto">Password:</label>
          <input type="password" name="password" class="form-control outros" required>
          <br>
          <div class="btn-group centrar">
            <button type="submit" class="btn btn-default btnadmin">Guardar</button>
            <button type="button" class="btn btn-default btnadmine" onclick="history.back()">Voltar</button>
          </div>
        </div>
      </div>
    </div>
</body>

</html>