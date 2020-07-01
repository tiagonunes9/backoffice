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
      height: 100%;
    margin: 0;
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
      height: 100%;
    }

    .content-info {
      font-size: 28px;
      padding: 0px 10px;
      margin: 0px 100px;
      height: 100vh;
    }

    h1 {
      color: #EDB347;
      font-family: "Oswald";
      font-weight: bold;
    }

    .perfil {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 20%;
      height: auto;
      margin: 2%;
      color: #333333;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
    }

    .outros {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      width: 30%;
      height: auto;
      margin: 0;
      color: #333333;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
    }

    .eventos {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: orange;
      text-align: center;
      flex-grow: 1;
      margin: 2%;
      color: #333333;
      width: 35vw;

    }

    .noticias {
      background: white;
      line-height: 150px;
      color: white;
      font-weight: bold;
      font-size: 3em;
      color: blue;
      text-align: center;
      flex-grow: 1;
      width: 35vw;
      margin: 2%;
      color: #333333;
    }

    .extra {
      color: white;
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
      width: 40vw;
      padding: 2% 5% 0 0;
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

    .aprovar {
      background-color: #42B19D;
      border-color: #42B19D;
    }

    .rejeitar {
      background-color: #E47A3F;
      border-color: #E47A3F;
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

    .texto {
      font-family: "Oswald";
      font-weight: lighter;
      font-size: 50%;
      color: #707070;
    }

    .tabela {
      background-color: #F2F2F2;
      border-radius: 15px;
    }

    .titulo {
      margin-left: 2%;
    }

    .flex-container {
      display: flex;
      flex-flow: row wrap;
      justify-content: space-around;
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .flex-item {
      background-color: white;
      margin: 5%;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
      padding: 0;
      width: 45%;
      height: auto;
      color: white;
      font-weight: bold;
      font-size: 3em;
      text-align: center;
      margin:0;
      margin-top:2%;
    }
    .admin {
      background-color: white;
      margin: 5%;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.23);
      border-radius: 15px;
      padding: 0;
    }

    h2{
      color: #707070;
      font-family: "Oswald";
      font-size: 55%;
    }
    h3{
      color: #707070;
      font-family: "Oswald";
      font-size: 40%;
    }

td,
th {
  border-collapse: collapse;
}

  </style>
</head>

<body>


  <div class="main-container">
    <div class="navigation-side">
      <?php
      $this->load->view('common/navBarmanager');
      ?>
    </div>
    <div class="content-side">

    <ul class="flex-container">
        <li class="flex-item">
        <div> <img src="../assets/img/person.png" height="100px"></div>
        <h2><?php
            if ($_SESSION['admin'] == "1")
              echo "Administrador";
            else if ($_SESSION['admin'] == "2")
              echo "Gestor";
            else
              echo "Utilizador";
            ?>
        </h2>
        <a href="perfil" class="w3-button w3-black"><button class="btn btn-warning extra">Editar Perfil</button></a>
  </li>
  </ul><br>
      <div class="div-title">
        <div class="title-h1">
          <h1 class="titulo">Por Aprovar</h1>
        </div>
        <div class="title-divider-right">
          <hr>
        </div>


      </div>

      <ul class="flex-container">
        <li class="flex-item">

          <table id="tabela" class="table">
            <thead>

              <tr>
                <th width="15%">
                  <h2>Eventos</h2>
                </th>
            </thead>

            <?php
            foreach ($eventos as $key => $value) {
              echo '<td>';
              if ($value->estado == "0") {
                echo '<tr><td>' . '<p class="texto">' . $value->nome . '</p>' . '</td>';
                echo '<td><a href="' . base_url() . 'index.php/eventos/uptade/' . $value->id_evento . '" class="btn btn-sm btn-info info">' . 'Info' . '</a></td>';
                echo '<td><a href="' . base_url() . 'index.php/eventos/delete/' . $value->id_evento . '" onclick="return confirm(\'Tem a certeza que pretende apagar este?\')" ><button type="button" class="btn btn-sm btn btn-danger rejeitar">Eliminar</button></a></td></tr>';
              } else {
              }
              '</td>';
            }
            ?>
            </tbody>
          </table>
        </li>
        <li class="flex-item">

          <table id="tabela" class="table">
            <thead>

              <tr>
                <th width="15%">
                  <h2>Noticias</h2>
                </th>
            </thead>

            <?php
            foreach ($noticias as $key => $value) {
              echo '<td>';
              if ($value->estado == "0") {
                echo '<tr><td>' . '<p class="texto">' . $value->nome . '</p>' . '</td>';
                echo '<td>' . '<a href="' . base_url() . 'index.php/noticias/uptade/' . $value->id_noticia . '" class="btn btn-sm btn-info info">' . 'Info' . '</a></td>';
                echo '<td><a href="' . base_url() . 'index.php/noticias/delete/' . $value->id_noticia . '" onclick="return confirm(\'Tem a certeza que pretende apagar esta noticia?\')" ><button type="button" class="btn btn-sm btn-danger rejeitar">Eliminar</button></a></td></tr>';
              } else {
              }
              '</td>';
            }
            ?>
            </tbody>
          </table>
        </li>
      </ul>
    </div>
  </div>
  </div>

</body>

</html>