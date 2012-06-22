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
          <h5 class="tit_categoria_desp">Registro</h5>
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
          <h1 class="tit_principal">Lo sentimos,</h1>
          <h2 class="subtit_principal">Ha ocurrido un error con los datos enviados. <br />
            Intentalo nuevamente.</h2>
            <?php if(isset($errorMsg)): ?>
              <h3 class="subtit_principal"><?= $errorMsg ?></h3>
            <?php endif; ?>
            <h2 class="subtit_principal">&lt; <a href="javascript:window.history.location(-1);">Regresar</a></h2>
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