<style>
.fundo{
  background-color:#333333;
  height: 1000px;
  width:15%;
  position:center;
}

</style>

<div class="btn-group-vertical fundo">
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
    <a></a>
        <a class="nav-link menu" href="<?php echo base_url(); ?>index.php/auth/logout">Terminar Sessão</a>
  </div>
</div>