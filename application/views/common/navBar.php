<style>
.barranavegacao{
  background-color:#45AB99;
}


.menu{
  color:white !important;
  font-family: "Rubik" !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light barranavegacao">
<a class="nav-link menu" href="<?php echo base_url(); ?>index.php/home"><img  src="<?php echo base_url('assets/img/logoV.png'); ?>" width=125px /></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Estatistica">Estatistica</a>
        </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/eventosnoticias">Eventos/Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/utilizadores">Utilizadores</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Clubes">Clubes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/Turmas">Turmas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/administradores">Administradores</a>
      </li>
      
      
    </ul>
    <?php
      if(isset($this->session->UsernameAdmin))
        echo $_SESSION['UsernameAdmin'] ;
    ?>
    <a></a>
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/auth/logout">Terminar Sessão</a>
  </div>
</nav>