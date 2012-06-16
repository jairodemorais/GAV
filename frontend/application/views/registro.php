<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <?php include('application/views/head.php') ?>
</head>
<body>
  <div id="contenedor_prin">
    <div id="top">            
      <div id="centrar_top">
        <div id="top_superior">
          <img src="<?php echo base_url();?>img/logo_negro.gif" class="logo_top"/>
          <div id="buscador_top">
            <form action="" method="post">
              <input name="" type="text" class="search_top"/>
              <input name="imageField2" type="image" src="<?php echo base_url();?>img/btn/buscar_black.gif" border="0" class="btn_buscar_top">
            </form>
            <ul id="categorias_top">
              <li><a href="#">Categoría 1</a></li>
              <li>|</li>
              <li><a href="#">Categoría 2</a></li>
              <li>|</li>
              <li><a href="#">Categoría 3</a></li>
              <li>|</li>
              <li><a href="#">Categoría 4</a></li>
              <li>|</li>
              <li><a href="#">Categoría 5</a></li>
            </ul>
          </div>
          <img src="<?php echo base_url();?>img/gav_black.jpg" class="gav_icon_top"/> 
        </div>  
        <?php include('application/views/nav2.php') ?>
      </div>
    </div>
    <div id="contenedor_central"> 
      <div id="contenedor_seccion">
        <div id="desplegable">
          <h5 class="tit_categoria_desp">Artistas</h5>
          <a href="#" class="top_ver_todas">Ver todas >></a>
        </div>  
        <div id="lateral_derecho">
          <ul id="lista_banners">
            <li><img src="<?php echo base_url();?>img/banner_right.jpg" /></li>
            <li><img src="<?php echo base_url();?>img/200x240.jpg" /></li>
            <li><img src="<?php echo base_url();?>img/anuncie_gav.jpg" /></li>
            <li><img src="<?php echo base_url();?>img/200x60.jpg" /></li>
          </ul>
        </div>
        <div id="lateral_izquierdo">
          <?php if (isset($user)): ?>
            <h1 class="tit_principal">Mis Datos</h1>
          <?php else: ?>
            <h1 class="tit_principal">Registro</h1>
          <?php endif; ?>
          <h2 class="subtit_principal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h2>
          <ul id="tipo_registro">
            <li class="fondo_reg_free">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li class="fondo_reg_premium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          </ul>
          <?php if (isset($errorMsg)): ?>
            <h1 class="tit_principal"><?php echo $errorMsg ?></h1>
          <?php endif; ?>
          <?php echo validation_errors(); ?>
          <?php echo form_open('register/updateOrCreate') ?>
            <ul class="form_registro">
              <li style="display:none;">
                <?php
                $data = array(
                  'name'        => 'id',
                  'value'       =>  isset($user) ? $user['Id'] : ""
                  );
                echo form_input($data) ?>
              </li>
              <li>
                <p>Nombre</p> 
                <?php
                $data = array(
                  'name'        => 'nombre',
                  'value'       => isset($user) ? $user['Nombre'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?>
              </li>
              <li>
                <p>E-mail</p>
                <?php
                $data = array(
                  'name'        => 'email',
                  'value'       =>  isset($user) ? $user['Mail'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li>
                <p>Télefono</p>
                <?php
                $data = array(
                  'name'        => 'telefono',
                  'value'       =>  isset($user) ? $user['Telefono'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li>
                <p>Ciudad</p>
                <?php
                $data = array(
                  'name'        => 'ciudad',
                  'value'       =>  isset($user) ? $user['Ciudad'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li>
                <p>Código Postal</p>
                <?php
                $data = array(
                  'name'        => 'cp',
                  'value'       =>  isset($user) ? $user['CP'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li style="padding-top:25px;">
                <p>Tipo de registracion</p> 
                <p>
                  <b>Free</b>
                </p>
                <?php
                $data = array(
                  'name'        => 'tipo_reg',
                  'value'       => 'Free',
                  'checked'     => TRUE,
                  'class'       =>'form_option',
                  );
                  echo form_radio($data); ?>
                <p>
                  <b>Premium</b>
                </p> 
                <?php
                $data = array(
                  'name'        => 'tipo_reg',
                  'value'       => 'Premium',
                  'class'       =>'form_option',
                  );
                  echo form_radio($data); ?>
              </li>
              <li>
                <?php
                $data = array(
                  'name' => 'imageField2',
                  'type' => 'image',
                  'src' => base_url().'img/forms/enviar_magenta.jpg',
                  'border' => '0',
                  'class' => 'btn_enviar_form',
                  'style' => 'float:left; margin-top:20px;'
                );

                echo form_input($data); ?>
               </li>
            </ul>
            <ul class="form_registro" style="margin-left:50px;">
              <li>
                <p>Apellido</p>
                <?php
                $data = array(
                  'name'        => 'apellido',
                  'value'       =>  isset($user) ? $user['Apellido'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li>
                <p>Password</p>
                <?php
                $data = array(
                  'name'        => 'password',
                  'class'       => 'campos_reg',
                  );
                echo form_password($data) ?> 
              </li>
              <li>
                <p>Dirección</p>
                <?php
                $data = array(
                  'name'        => 'direccion',
                  'value'       =>  isset($user) ? $user['Direccion'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li>
                <p>Provincia</p>
                <?php
                $data = array(
                  'name'        => 'provincia',
                  'value'       =>  isset($user) ? $user['Provincia'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?> 
              </li>
              <li>
                <p>País</p>
                <?php
                $data = array(
                  'name'        => 'pais',
                  'value'       =>  isset($user) ? $user['Pais'] : "",
                  'class'       => 'campos_reg',
                  );
                echo form_input($data) ?>
              </li>
              <li>
                <p>Captcha</p>
                <div class="captcha_reg">
                  <?= $recaptcha ?>
                </div>  
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <div id="bottom">
      <div id="centrar_bottom">
        <img src="<?php echo base_url();?>img/logo_bottom.png" />
        <ul id="botonera_bottom">
          <li><a href="#">Home</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Registro</a></li>
          <li><a href="#">Consultas</a></li>
        </ul>  
        <ul id="botonera_bottom">
          <li><a href="#">Categoria 01</a></li>
          <li><a href="#">Categoria 02</a></li>
        </ul>
        <ul id="botonera_bottom">
          <li><a href="#">Categoria 03</a></li>
          <li><a href="#">Categoria 04</a></li>
        </ul>   
        <ul id="botonera_bottom" style="border:0;">
          <li><a href="#">Categoria 05</a></li>
          <li><a href="#">Categoria 06</a></li>
        </ul>  
        <ul id="redes_soc_bottom">
          <li><p>Seguinos en:</p></li>
          <li><a href="#" class="icon_face"></a></li>
          <li><a href="#" class="icon_twitter"></a></li>
        </ul>
      </div>
    </div>
    <div class="corte"></div>
  </div>
</body>
</html>