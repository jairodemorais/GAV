<ul id="botonera_top">
  <li><a href="inicio">Home</a></li>
  <li><a href="#">Nosotros</a></li>
  <li><a href="registro">Registro</a></li>
  <li><a id="contactButton" href="#contacto">Consultas</a></li>
  <li><a href="#">Newsletter</a></li>
</ul>  
<div id="login_top">
  <?php if (isset($username)): ?>
    <ul>
      <li><p id='welcome' class="user_welcome">Bienvenido, <b id="displayName"><?php echo $name; ?></b></p></li>
      <li><a id='profile' href="./perfil" class="botones_home">Mi Perfil</a></li>
      <li><a id='logOut' href="#"><img src="<?php echo base_url();?>img/logout.gif" /></a></li>
    <ul>
    <?php else: ?>
      <a id='loginButton' href="#login" class="btn_login_home"></a>
      <a href="#" class="olvido_pass">¿Olvidaste tu contraseña?</a>
    <?php endif; ?>
</div>   

<?php include('application/views/login.php') ?>
<?php include('application/views/contacto.php') ?>
<script type="text/javascript" src="<?php echo base_url();?>js/nav.js"></script>  