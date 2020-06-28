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
      font-size: 42%;
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
      font-weight: bold;
      color: white;
    }

    .eliminar {
      color: #E47A3F;
      font-family: 'Oswald';
      font-weight: lighter;
      font-size: 100%;
    }

    .texto {
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
      color: #707070;
    }

    .tabela {
      background-color: #F2F2F2;
      border-radius: 15px;
    }

    .title-divider-right {
      margin-left: 1%;
      margin-top: 0.6%;
      width: 81%;
      padding: 0 10% 0 0;
      border-radius: 5px;
    }

    .icone {
      width: 20%;
      height: auto;
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

        <table class="table admin">
          <tr class="outro">
            <th width="15%">
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input name="consulta" id="txt_consulta" placeholder="Procurar..." type="text" class="form-control">
              </div>
            </th>
            <th width="10%"></th>
            <th width="30%"></th>
            <th width="15%">
              <a href="utilizadores/novoutilizador" class="link"><img src="../assets/img/add.PNG" class="icone" />Adicionar utilizador</a>
              </a>
            </th>
          </tr>


          <tr class="tabela">
            <th width="10%">
              <p>Nome</p>
            </th>
            <th width="5%"></th>
            <th width="30%">
              <p>Permissões</p>
            </th>
            <th width="10%"></th>
          </tr>
          <?php
          foreach ($utilizadores as $key => $value) {
            echo '<tr><td>' . '<p class="texto">' . $value->nome . '</p>' . '</td>';
            echo '<td>' . '<button type="button" class="btn btn-info" data-toggle="modal" data-target="exampleModal">' . '<p>Info</p>' . '</button></td>';
            echo '<td>';
            if ($value->tipo_user == "1") {
              echo '<p class="texto">' . "Administrador" . '</p>';
            } else if ($value->tipo_user == "2") {
              echo '<p class="texto">' . "Gestor" . '</p>';
            } else {
              echo '<p class="texto">' . "Utilizador" . '</p>';
            }
            '</td>';
            echo '<td><a href="' . base_url() . 'index.php/utilizadores/delete/' . $value->id_user . '" onclick="return confirm(\'Tem a certeza que pretende apagar esse utilizador?\')" ><p class="eliminar">Eliminar</p></a></td></tr>';
          }
          ?>
        </table>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                teste
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  $('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>

</html>