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
      width: 20vw;
    }


    .flex-x {
      line-height: 150px;
      color: white;
      font-weight: lighter;
      font-size: 3em;
      text-align: center;
      flex-grow: 5;
      width: 50vw;
      color:#707070;
      font-family: 'Oswald';
    }

    .nav {
      flex-basis: auto;
      background-color: #333333;
      margin-left: 0px;
    }

    p{
      color:#707070;
    }

    .admin{
      background-color: white;
      margin:5%;
      -webkit-box-shadow: 1px 1px 20px 3px rgba(0,0,0,0.23); 
      box-shadow: 1px 1px 20px 3px rgba(0,0,0,0.23);
    }

    .link{
      color:#2F898D;
      font-family: 'Oswald';
      font-weight: bold;
    }

    .info{
      background-color:#2F898D;
      font-family: 'Oswald';
      font-weight: bold;
    }
    .eliminar{
      color:#E47A3F;
      font-family: 'Oswald';
      font-weight: bold;
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
            <h1>Utilizadores</h1> <br>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
              <input name="consulta" id="txt_consulta" placeholder="Pesquisar..." type="text" class="form-control">
            </div>


            <table class="table admin">
              <tr class="tabela">
                <th width="25%"><p> Nome </p></th>
                <th width="25%"> <p>Permissões</p> </th>
                <th width="7%"></th>
                <th width="10%"><a img src="assets/img/add.PNG" href="utilizadores/novoutilizador"><p class="link">Adicionar utilizador</p></a></th>
              </tr>
              <?php
              foreach ($utilizadores as $key => $value) {
                echo '<tr><td>' . $value->nome . "</td>"; 
                echo '<td><a href="' . base_url() . 'index.php/utilizadores/uptade/' . $value->id_user . '" class="btn btn-sm info">Info</a></td>';
                echo '<td>' . $value->email . '</td>';
                echo '<td><a href="' . base_url() . 'index.php/utilizadores/delete/' . $value->id_user . '" ><p class="eliminar">Eliminar</p></a></td></tr>';
              }
              ?>
            </table>


          <script>
            $('input#txt_consulta').quicksearch('table#tabela tbody tr');
          </script>
      </ul>
    </li>
  </ul>


</body>

</html>