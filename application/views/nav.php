<div id="cont_botonera">
  <ul id="redes_soc">
    <li><a href="#" class="icon_face"></a></li>
    <li><a href="#" class="icon_twitter"></a></li>
  </ul>
  <ul id="botonera_portada">
    <li><a href="inicio" class="botones_home">Home</a></li>
    <li><a href="#" class="botones_home">Nosotros</a></li>
    <li><a href="<?php echo base_url();?>registro" class="botones_home">Registro</a></li>
    <li><a id="contactButton" href="#contacto" class="botones_home btn_contacto">Consultas</a></li>
    
    <?php if (isset($name)): ?>
      <li><p id='welcome' class="user_welcome">Bienvenido, <b id="displayName"><?php echo $name; ?></b></p></li>
      <li><a id='profile' href="./perfil" class="botones_home">Mi Perfil</a></li>
      <li><a id='logOut' href="<?php echo base_url();?>login/logout"><img src="<?php echo base_url();?>img/logout.gif" /></a></li>
    <?php else: ?>
      <li><a id='loginButton' href="#login" class="btn_login_home btn_login"></a></li>
    <?php endif; ?>
  </ul>  
</div>
    
<?php include('application/views/login.php') ?>
<?php include('application/views/contacto.php') ?>
<script type="text/javascript" src="<?php echo base_url();?>js/nav.js"></script>