<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
      font-size: 1vw;
    }

    .link:hover {
      color: #2F898D;
      font-family: 'Oswald';
      font-weight: bold;
      font-size: 1vw;
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
      color:white;
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

    .ativo {
      color: #42B19D;
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
    }

    .desativo {
      color: red;
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
    }
    .pendente{
      color: #E47A3F;
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 100%;
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

        <table id="tabela" class="table admin">
        <thead>
          <tr class="outro">
            <th width="15%">
              <div class="form-group input-group">
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input name="consulta" id="txt_consulta" placeholder="Procurar..." type="text" class="form-control">
              </div>
            </th>
            <th width="20%"></th>
            <th width="10%"></th>
            <th width="10%">
              <a href="noticias/novanoticia" class="link"><img src="./assets/img/add.PNG" class="icone" />Adicionar Noticia</a>
              </a>
            </th>
          </tr>

          <tr class="tabela">
            <th width="15%">
              <p>Nome</p>
            </th>
            <th width="20%"><p>Autor</p></th>
            <th width="10%">
            </th>
            <th width="10%"></th>
          </tr>
  </thead>
          
            <?php
            foreach ($noticias as $key => $value) {
              echo '<tbody><tr><td>' . '<p class="texto">' . $value->nome . '</p>' . '</td>';
              echo '<td> <p class="texto">' . $value->autor . '</p></td>';
              echo '<td>' . '<a href="' . base_url() . 'noticias/uptade/' . $value->id_noticia . '" class="btn btn-sm btn-info info">' . 'Info' . '</a></td>';
              echo '<td>';
              if ($value->estado == "1") {
                echo '<p class="ativo"> Ativo </p>';
              } else if ($value->estado == "2") {
                echo '<p class="desativo"> Desativado </p>';
              }else if ($value->estado == "0") {
                echo '<p class="pendente"> Pendente </p>';
              }'</td></tr>';
            }
            ?>
          </tbody>
        </table>


      </div>
    </div>
  </div>


</body>
<script>
  $('input#txt_consulta').quicksearch('table#tabela tbody tr');
</script>

</html>