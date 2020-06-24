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
      font-weight: lighter;
      font-size: 3em;
      text-align: center;
      flex-grow: 5;
      width: 50vw;
      color: #707070;
      font-family: 'Oswald';
    }

    .nav {
      flex-basis: auto;
      background-color: #333333;
      margin-left: 0px;
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
      box-shadow: 1px 1px 20px 3px rgba(0, 0, 0, 0.05);
      border-radius: 15px;
    }

    .link {
      color: #2F898D;
      font-family: 'Oswald';
      font-weight: bold;
      font-size: 50%;
    }

    .info {
      background-color: #2F898D;
      font-family: 'Oswald';
      font-weight: bold;
      color:white;
    }

    .eliminar {
      color: #E47A3F;
      font-family: 'Oswald';
      font-weight: lighter;
      font-size: 200%;
    }

    .texto {
      font-family: "Oswald";
      font-weight: lighter;
      color: #707070;
    }

    .tabela {
      background-color: #F2F2F2;
      
      border-radius: 15px;
    }

    .outro {
      background-color: white;
      border-radius: 15px;
    }

     .title-divider-right {
    width: 30%;
    padding: 0 10% 0 0; 
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
        <h1>Utilizadores</h1> 
        <div class="title-divider-right">
                <hr>
            </div> <br>



        <table class="table admin">
          <tr class="outro">
            <th width="10%">
              <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input name="consulta" id="txt_consulta" placeholder="Procurar..." type="text" class="form-control">
              </div>
            </th>
            <th width="5%"></th>
            <th width="30%"></th>
            <th width="10%">
               <a href="utilizadores/novoutilizador" class="link"><img src="assets/img/add.PNG"/>Adicionar utilizador</a>
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
            echo '<td><button type="button" class="btn btn-primary info" data-toggle="modal" data-target="#exampleModal">'.'<p>Info</p></button></td>';
            echo '<td>' . '<p class="texto">' . $value->email . '</p>' . '</td>';
            echo '<td><a href="' . base_url() . 'index.php/utilizadores/delete/' . $value->id_user . '" ><p class="eliminar">Eliminar</p></a></td></tr>';
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

        <script>
          $('input#txt_consulta').quicksearch('table#tabela tbody tr');
        </script>
      </ul>
    </li>
  </ul>


</body>

</html>