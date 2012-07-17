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
          <h5 class="tit_categoria_desp"><?= $title ?></h5>
          <?php if (isset($categorySearch)):?>
            <a href="<?php echo base_url();?>buscar/todos/0" class="top_ver_todas">Ver todas >></a>
          <?endif?>
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
          <div id="lista_alfabetico">
            <p class="tit_orden_alfa">Buscar por orden alfabetico</p>
            <ul>
              <li><a href="<?php echo base_url();?>buscar/A/0">A</a></li>
              <li><a href="<?php echo base_url();?>buscar/B/0">B</a></li>
              <li><a href="<?php echo base_url();?>buscar/C/0">C</a></li>
              <li><a href="<?php echo base_url();?>buscar/D/0">D</a></li>
              <li><a href="<?php echo base_url();?>buscar/E/0">E</a></li>
              <li><a href="<?php echo base_url();?>buscar/F/0">F</a></li>
              <li><a href="<?php echo base_url();?>buscar/G/0">G</a></li>
              <li><a href="<?php echo base_url();?>buscar/H/0">H</a></li>
              <li><a href="<?php echo base_url();?>buscar/I/0">I</a></li>
              <li><a href="<?php echo base_url();?>buscar/J/0">J</a></li>
              <li><a href="<?php echo base_url();?>buscar/K/0">K</a></li>
              <li><a href="<?php echo base_url();?>buscar/L/0">L</a></li>
              <li><a href="<?php echo base_url();?>buscar/M/0">M</a></li>
              <li><a href="<?php echo base_url();?>buscar/N/0">N</a></li>
              <li><a href="<?php echo base_url();?>buscar/O/0">O</a></li>
              <li><a href="<?php echo base_url();?>buscar/P/0">P</a></li>
              <li><a href="<?php echo base_url();?>buscar/Q/0">Q</a></li>
              <li><a href="<?php echo base_url();?>buscar/R/0">R</a></li>
              <li><a href="<?php echo base_url();?>buscar/S/0">S</a></li>
              <li><a href="<?php echo base_url();?>buscar/T/0">T</a></li>
              <li><a href="<?php echo base_url();?>buscar/U/0">U</a></li>
              <li><a href="<?php echo base_url();?>buscar/V/0">V</a></li>
              <li><a href="<?php echo base_url();?>buscar/X/0">X</a></li>
              <li><a href="<?php echo base_url();?>buscar/Y/0">Y</a></li>
              <li><a href="<?php echo base_url();?>buscar/Z/0">Z</a></li>
            </ul>
          </div>
          <?php if (isset($errorMsg)): ?>
            <h1 class="tit_principal">Resultado de búsqueda</h1>
            <h2 class="subtit_principal"><?php echo $errorMsg ?></h1>
          <?php endif; ?>
          <ul id="listado_artistas">
            <?php if(isset($artists)): ?>
              <?php $n=0; foreach ($artists as $res): ?>
                <li>
                  <div>
                  <? if (isset($res->Imagen)) {?>
                    <img width="135" height="105" src="<?php echo base_url();?>backend/public_html/imagenes/obras/thumb/<?=$res->Imagen?>" />
                  <? } ?>
                  </div>
                  <a href="<?php echo base_url();?>artista/<? echo  url_title ($res->Nombre); ?>/<?=$res->Id?>" class="link_artista"><?= $res->Nombre?></a>
                </li>
              <?php $n++; endforeach;?>
            <?php endif; ?>
          </ul>
          <div id="PAG">
            <?php echo $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
    </div>
