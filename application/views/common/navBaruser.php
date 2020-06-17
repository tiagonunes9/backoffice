<style>
  a {
    color: white;
    font-size: 20%;
  }

  a:hover {
    color: white;
    font-size: 30%;
  }
</style>

<div class="btn-group-vertical fundo">
  <ul class="navbar-nav mr-auto">
  <img src="assets/img/logo.svg" class="imagem">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/dashboarduser">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/eventos">Eventos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/noticias">Noticias</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>index.php/perfil">Perfil</a>
    </li>


  </ul>
  <a></a>
  <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/auth/logout">Terminar Sessão</a>
</div>
</div>