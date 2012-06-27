<!--  DIV PARA LOGIN  -->  
<div style="display:none;">
  <div id="login" class="div_login">
    <h1>Login</h1>
    <h2>Ingresa los siguientes datos para ingresar a la Guia:</h2>
    <ul id="lista_login_tab" style="margin-bottom:0px !important;">
      <li><a href="#" id="bt_acceder" class="login_btn_gris">Acceder al sitio</a></li>
      <li><a href="./registro" class="login_btn_gris">Crear nuevo usuario</a></li>
    </ul>
    <ul id="lista_login_campos" style="border:0;">
      <li><p class="tit_form_log">Email</p><input id="userName" name="usuario" type="text" class="form_txt_login"/></li>
      <li><p class="tit_form_log">Clave</p><input id="password" name="clave" type="text" class="form_txt_login"/></li>
    </ul>
    <ul id="lista_login_mail" style="border:0;display:none;" class="box_olvido_pass">
      <p class="tit_form_log" style="width:320px;clear:both;float:left;margin-left:10px;">Ingrese el email de registracion al portal:</p>
      <li><input id="forgotEmail" type="text" name="email"  class="form_txt_login"/></li>
    </ul>
    <a href="#" class="link_olvido_pass" id="bt_olvido">¿Olvido su contraseña?</a>        
    <input id="logIn" name="imageField2" type="image" src="<?php echo base_url();?>img/forms/enviar_magenta.jpg" border="0" class="btn_enviar_form" style="margin-right:40px;">               
  </div>
</div>
<!-- -->