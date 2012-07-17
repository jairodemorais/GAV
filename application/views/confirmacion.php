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
          <h5 class="tit_categoria_desp"><?= $conf_title?></h5>
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
          <h1 class="tit_principal">Muchas Gracias!</h1>
          <h2 class="subtit_principal">
            <div><?= $message ?></div>
            <strong>Guía de Artes visuales</strong>.</h2>
            <h2 class="subtit_principal">Atentamente;<br />
              El Equipo de <strong>GAV</strong></h2>
            </div>
          </div>
        </div>