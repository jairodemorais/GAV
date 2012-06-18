<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <?php include('application/views/head.php') ?>
  
  <script src="clearbox/clearbox.js" type="text/javascript"></script> 
  <link href='js/prettify.css' rel="stylesheet" type="text/css" />
  <script src='js/prettify.js' type="text/javascript"></script>
  <script src='js/jquery.showcase-2.0.2.min.js' type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $('li.margen_izq_cat').hover(
      function() { $('ul', this).css('display', 'block'); },
      function() { $('ul', this).css('display', 'none'); });
    });
    
    $(function () {
      $("#showcase").showcase({
        //* css: { width: "800px", height: "600px" },
        animation: { type: "fade" },
        images: [{ url: 'img/img_ampliar_news.jpg', description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec purus ut justo sodales euismod vitae sit amet quam. " }],
        navigator: { css: { padding: "15px", margin: "0px 0px 0px 0px"} },
        titleBar: { css: { height: "40px", width: "580px", padding: "10px 20px 0px 20px"} }
      });
      // SyntaxHighlighter.all();
      prettyPrint();
    });
  </script>
  </head>
  <body class="fondo_gris_repeat">
    <div id="contenedor_prin" >
      <div id="contenedor_central"> 
        <div id="contenido_newsboard">
          <div id="centro_newsboard">
            <div id="cont_botonera">
              <ul id="redes_soc">
                <li><a href="#" class="icon_face"></a></li>
                <li><a href="#" class="icon_twitter"></a></li>
              </ul>
              <?php include('application/views/nav2.php') ?>
            </div>
            <div id="buscador_newsboard">
              <img src="<?php echo base_url();?>img/logo_news.gif" />
              <div id="cont_buscar_news">
                <?php include('application/views/buscar_artistas_form.php') ?>
              </div>
            </div>
            <ul id="categorias_home">
              <li class="margen_izq_cat">
                <a href="#" class="cats_home cat_magenta">Categoría 1</a>
                <ul>
                  <li><a href="#" class="submenu_home">Subcategoría 1</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 2</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 3</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 4</a></li>
                </ul>
              </li>
              <li class="margen_izq_cat">
                <a href="#" class="cats_home cat_verde">Categoría 2</a>
                <ul>
                  <li><a href="#" class="submenu_home">Subcategoría 1</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 2</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 3</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 4</a></li>
                </ul>
              </li>
              <li class="margen_izq_cat"><a href="#" class="cats_home cat_violeta">Categoría 3</a></li>
              <li class="margen_izq_cat"><a href="#" class="cats_home cat_turquesa">Categoría 4</a></li>
              <li class="margen_izq_cat">
                <a href="#" class="cats_home cat_naranja">Categoría 5</a>
                <ul>
                  <li><a href="#" class="submenu_home">Subcategoría 1</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 2</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 3</a></li>
                  <li><a href="#" class="submenu_home">Subcategoría 4</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div id="contenedor_seccion">
            <div id="lateral_derecho">
              <ul id="lista_banners">
                <li><img src="<?php echo base_url();?>img/banner_right.jpg" /></li>
                <li><img src="<?php echo base_url();?>img/200x240.jpg" /></li>
                <li><img src="<?php echo base_url();?>img/anuncie_gav.jpg" /></li>
                <li><img src="<?php echo base_url();?>img/200x60.jpg" /></li>
              </ul>
            </div>
            <div id="lateral_izquierdo">
              <div id="cont_newsboard" style="margin:0px;">
                <ul>
                  <li><a href="#">TODOS</a></li>
                  <li><a href="#">BENEFICIOS</a></li>
                  <li><a href="#">NOVEDADES</a></li>
                  <li><a href="#">CLASIFICADOS</a></li>  
                </ul>
              </div>
              <div id="top_ampliar_news" class="news_novedades">
                <p class="fecha_news"><?= $noticia['Fecha'] ?></p>
                <ul id="redes_soc_news">
                  <li><a href="#"><img src="<?php echo base_url();?>img/icon_tweet.jpg" /></a></li>
                  <li><a href="#"><img src="<?php echo base_url();?>img/icon_send_face.jpg" /></a></li>
                  <li><a href="#"><img src="<?php echo base_url();?>img/icon_googleplus.jpg" /></a></li>
                </ul>
              </div>
              <div id="contenido_amp_news">
                <h1 class="tit_novedades"><?= $noticia['Titulo'] ?></h1>
                <div class="<?php echo base_url();?>img_amp_news">
                  <a href="<?php echo base_url();?>img/img_ampliar_news.jpg" rel="clearbox[gallery=GAV]" title="Phasellus euismod varius mi, sed mollis felis rutrum sodales." class="link_amp_img_news"><img src="<?php echo base_url();?>img/img_ampliar_news.jpg" /></a>
                  <p class="click_ampliar">(Click para ampliar) </p>
                </div>
                <div id="contenido_news">
                  <p><?= $noticia['Cuerpo'] ?></p>
                </div>
                <div class="<?php echo base_url();?>img_amp_news">
                  <img src="<?php echo base_url();?>img/google_300x250.jpg" /> 
                </div>
              </div>
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
