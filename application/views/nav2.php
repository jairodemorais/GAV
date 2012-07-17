<ul id="botonera_top">
  <li><a href="<?php echo base_url();?>inicio">Home</a></li>
  <li><a href="#">Nosotros</a></li>
  <li><a href="<?php echo base_url();?>registro">Registro</a></li>
  <li><a id="contactButton" href="#contacto">Consultas</a></li>
  <li><a href="<?php echo base_url();?>newsboard">Newsboard</a></li>
</ul>  
<div id="login_top">
  <?php if (isset($username)): ?>
    <ul>
      <li><p id='welcome' class="user_welcome">Bienvenido, <b id="displayName"><?php echo $name; ?></b></p></li>
      <li><a id='profile' href="<?php echo base_url();?>perfil" class="botones_home">Mi Perfil</a></li>
      <li><a id='logOut' href="<?php echo base_url();?>login/logout"><img src="<?php echo base_url();?>img/logout.gif" /></a></li>
    <ul>
    <?php else: ?>
      <a id='loginButton' href="#login" class="btn_login_home"></a>
      <a href="#login" class="olvido_pass fancy">¿Olvidaste tu contraseña?</a>
    <?php endif; ?>
</div>   


<?php include('application/views/login.php') ?>
<?php include('application/views/contacto.php') ?>
<script type="text/javascript" src="<?php echo base_url();?>js/nav.js"></script>  