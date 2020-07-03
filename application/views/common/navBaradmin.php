<style>
  .sidenav {
    height: 100vh;
    width: 100%;
    background-color: #333333;
  }

  .sidenav a {
    padding: 30px 30px;
    text-decoration: none;
    font-family: "Oswald";
    font-weight: lighter;
    font-size: 150%;
    color: white;
    display: block;
  }

  .sidenav a:hover {
    color: #f1f1f1;
  }

  .icone {
    width: 10%;
    height: auto;
    margin-left: 2%;
    margin-right: 10%;
  }

  .imagem {
    width: 70%;
    margin-left: 15%;
    margin-top: 5%;
  }

  .teste {
    padding: 0;
    margin-left: 20%;
    height: 5%;
    margin-top:5%;
  }
</style>

<div class="btn-group-vertical fundo">
  <div class="sidenav">
    <img src="./assets/img/logo.svg" class="imagem" /><br>
      <a class="nav-link teste" href="<?php echo base_url(); ?>dashboardadmin"><img src="./assets/img/speedometer.png" class="icone" />Dashboard</a>
      <a class="nav-link teste" href="<?php echo base_url(); ?>utilizadores"><img src="./assets/img/user.png" class="icone" />Utilizadores</a>
      <a class="nav-link teste" href="<?php echo base_url(); ?>eventos"><img src="./assets/img/event.png" class="icone" />Eventos</a>
      <a class="nav-link teste" href="<?php echo base_url(); ?>noticias"><img src="./assets/img/news.png" class="icone" />Noticias</a>
      <a class="nav-link teste" href="<?php echo base_url(); ?>suporte"> <img src="./assets/img/support.png" class="icone" />Suporte</a>
      <a class="nav-link teste" href="<?php echo base_url(); ?>perfil"><img src="./assets/img/settings.png" class="icone" />Perfil</a>
      <a class="nav-link teste" href="<?php echo base_url(); ?>auth/logout"><img src="./assets/img/logout.png" class="icone" />Terminar Sessão</a>
  </div>
</div>