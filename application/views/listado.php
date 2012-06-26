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
            <?php include('application/views/buscar_artistas_form.php') ?>
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
          <div id="lista_alfabetico">
            <p class="tit_orden_alfa">Buscar por orden alfabetico</p>
            <ul>
              <li><a href="<?php echo base_url();?>buscar/A">A</a></li>
              <li><a href="<?php echo base_url();?>buscar/B">B</a></li>
              <li><a href="<?php echo base_url();?>buscar/C">C</a></li>
              <li><a href="<?php echo base_url();?>buscar/D">D</a></li>
              <li><a href="<?php echo base_url();?>buscar/E">E</a></li>
              <li><a href="<?php echo base_url();?>buscar/F">F</a></li>
              <li><a href="<?php echo base_url();?>buscar/G">G</a></li>
              <li><a href="<?php echo base_url();?>buscar/H">H</a></li>
              <li><a href="<?php echo base_url();?>buscar/I">I</a></li>
              <li><a href="<?php echo base_url();?>buscar/J">J</a></li>
              <li><a href="<?php echo base_url();?>buscar/K">K</a></li>
              <li><a href="<?php echo base_url();?>buscar/L">L</a></li>
              <li><a href="<?php echo base_url();?>buscar/M">M</a></li>
              <li><a href="<?php echo base_url();?>buscar/N">N</a></li>
              <li><a href="<?php echo base_url();?>buscar/Ñ">Ñ</a></li>
              <li><a href="<?php echo base_url();?>buscar/O">O</a></li>
              <li><a href="<?php echo base_url();?>buscar/P">P</a></li>
              <li><a href="<?php echo base_url();?>buscar/Q">Q</a></li>
              <li><a href="<?php echo base_url();?>buscar/R">R</a></li>
              <li><a href="<?php echo base_url();?>buscar/S">S</a></li>
              <li><a href="<?php echo base_url();?>buscar/T">T</a></li>
              <li><a href="<?php echo base_url();?>buscar/U">U</a></li>
              <li><a href="<?php echo base_url();?>buscar/V">V</a></li>
              <li><a href="<?php echo base_url();?>buscar/X">X</a></li>
              <li><a href="<?php echo base_url();?>buscar/Y">Y</a></li>
              <li><a href="<?php echo base_url();?>buscar/Z">Z</a></li>
            </ul>
          </div>
          <?php if (isset($errorMsg)): ?>
            <h1 class="tit_principal"><?php echo $errorMsg ?></h1>
          <?php endif; ?>
          <ul id="listado_artistas">
            <?php if(isset($artists)): ?>
              <?php $n=0; foreach ($artists as $res): ?>
                <li><img width="135" height="105" src="<?php echo base_url();?>backend/public_html/imagenes/obras/thumb/<? echo $imgs[$n]; ?>" /><a href="<?php echo base_url();?>artista/<? echo  url_title ($res->Nombre); ?>/<?=$res->Id?>" class="link_artista"><?= $res->Nombre?></a></li>
              <?php $n++; endforeach;?>
            <?php endif; ?>
          </ul>
          <div id="alinear_paginador">
            <?php echo $this->pagination->create_links(); ?>
          </div>
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
