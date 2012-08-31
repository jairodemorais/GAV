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
            <?php echo $buscarDiv; ?>
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
          <h2 class="subtit_principal">Formá parte de la Guía de Artes Visuales y mantenete al tanto sobre todas las novedades y anuncios del mundo del arte!.</h2>
          <ul id="tipo_registro">
            <li class="fondo_reg_free">Registrandote gratuitamente, podrás suscribirte a nuestro newsletter y de ese modo recibirás todas nuestras novedades sobre nuevos artistas, noticias del mundo del arte y acceder a ver el valor de las obras de los artistas que forman parte de la guía.</li>
            <li class="fondo_reg_premium">Como premiun, además de ser un socio exclusivo de GAV, podrás acceder a diversos beneficios y descuentos que obtendremos para vos. La suscripción como premium tiene un costo mensual ó anual, puedes pagarla como prefieras!.</li>
          </ul>
          <?php if (isset($errorMsg)): ?>
          <div class="error_campos"><?php echo $errorMsg ?></div>
          <?php endif; ?>
          <div class="error_campos"><?php echo validation_errors(); ?></div>
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
                  'name'        => 'permisos',
                  'value'       => 'Free',
                  'checked'     => ($user['Permisos'] == "Free"),
                  'class'       =>'form_option',
                  );
                  echo form_radio($data); ?>
                <p>
                  <b>Premium</b>
                </p> 
                <?php
                $data = array(
                  'name'        => 'permisos',
                  'value'       => 'Premium',
                  'checked'     => ($user['Permisos'] == "Premium"),
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
            </ul>
          </form>
        </div>
      </div>
    </div>