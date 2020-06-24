<style>
  a {
    color: white;
    font-size: 40%;
    font-family: "Oswald";
    font-weight: lighter;
  }

  a:hover {
    color: white;
    font-size: 45%;
  }
  .icone{
    width: 5%;
    margin-left: 2%;
    margin-right: 10%;
  }
</style>

<div class="btn-group-vertical fundo">
  <ul class="navbar-nav mr-auto">
  <img src="assets/img/logo.svg" class="imagem"/>

      <a class="nav-link" href="<?php echo base_url(); ?>index.php/dashboardadmin"><img src="assets/img/speedometer.png" class="icone"/>Dashboard</a>
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/utilizadores"><img src="assets/img/user.png" class="icone"/>Utilizadores</a>
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/eventos"><img src="assets/img/event.png" class="icone"/>Eventos</a>
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/noticias"><img src="assets/img/news.png" class="icone"/>Noticias</a>
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/suporte"> <img src="assets/img/support.png" class="icone"/>Suporte</a>
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/perfil"><img src="assets/img/settings.png" class="icone"/>Perfil</a>
      <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/auth/logout"><img src="assets/img/logout.png" class="icone"/>Terminar Sessão</a>


  </ul>
  
</div>
</div>