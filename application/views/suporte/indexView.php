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
      background-color: gray;
    }

    .content-side {
      flex: 1 1;
      background-color: #F2F2F2;
      overflow: auto;
    }


    .content-info {
      font-size: 28px;
      padding-right: 5%;
      padding-left: 0%;
      margin: 0px 100px;
    }

    p {
      color: #707070;
    }

    .admin {
      background-color: white;
      margin: 5%;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
      padding: 0;
    }

    .tabela {
      background-color: #F2F2F2;
      padding: 0;
    }

    p {
      color: #707070;
      font-family: "Oswald";
      font-size: 100%;
    }

    .resolvido {
      color: #42B19D;
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
    }

    .pendente {
      color: #E47A3F;
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
    }

    .texto {
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
      color: #707070;
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
.info{
  color:white;
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
            <h1>Suporte</h1>
          </div>
          <div class="title-divider-right">
            <hr>
          </div>
        </div>

        <table class="table admin">
          <tr class="outro">
            <th width="10%">
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input name="consulta" id="txt_consulta" placeholder="Pesquisar..." type="text" class="form-control">
              </div>
            </th>
            <th width="5%"></th>
            <th width="30%"></th>
          </tr>


          <tr class="tabela">
            <th width="20%">
              <p>Nome</p>
            </th>
            <th width="15%">
              <p>Assunto</p>
            </th>
            <th width="15%">
            </th>
            <th width="10%"></th>
          </tr>
          <?php
          foreach ($suporte as $key => $value) {
            echo '<tr><td>' . '<p class="texto">' . $value->nome . '</p>' . '</td>';
            echo '<td>' . '<p class="texto">' . $value->assunto . '</p>' . '</td>';
            echo '<td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">' . '<p>Info</p></button></td>';
            echo '<td>';
            if ($value->estado == "0") {
              echo '<p class="pendente">' . "Pendente" . '</p>';
            } else {
              echo '<p class="resolvido">' . "Resolvido" . '</p>';
            }
            '</td>';
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
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        
        </ul>
      </div>
    </div>
</body>
<script>
          $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        </script>
</html>