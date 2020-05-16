<style>
.barranavegacao{
  background-color:#333333;
}


.menu{
  color:white !important;
  font-family: "Oswald" !important;
  font-weight: lighter;
  font-size:25px;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light barranavegacao">
<a class="nav-link menu" href="<?php echo base_url(); ?>index.php/dashboardadmin"><img  src="<?php echo base_url('assets/img/logoV.png'); ?>" width=125px /></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="vertical-menu">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/dashboardadmin">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/utilizadores">Utilizadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/eventos">Eventos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/noticias">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/suporte">Suporte</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/perfil">Perfil</a>
      </li>
      
      
    </ul>
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/auth/logout">Terminar Sessão</a>
  </div>
</nav>