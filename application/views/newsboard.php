<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <?php include('application/views/head.php') ?>
  <script>
  $(document).ready(function(){
    $('li.margen_izq_cat').hover(
      function() { $('ul', this).css('display', 'block'); },
      function() { $('ul', this).css('display', 'none'); });
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
                <?php echo $buscarDiv; ?>
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
            <div id="lateral_izquierdo" class="newsboard_lat">
              <div id="cont_newsboard">
                <ul>
                  <li><a href="#">TODOS</a></li>
                  <li><a href="#">BENEFICIOS</a></li>
                  <li><a href="#">NOVEDADES</a></li>
                  <li><a href="#">CLASIFICADOS</a></li>
                </ul>
              </div>
              <?php if (isset($errorMsg)): ?>
                <h1 class="tit_principal"><?php echo $errorMsg ?></h1>
              <?php endif; ?>
              <ul id="lista_newsboard">
              <?php if(isset($noticias)): ?>
                <?php foreach ($noticias as $key=>$res): ?>
                  <li class="<?= ($key%2) ? 'noved_gris' : 'noved_blanco' ?>">
                  <h1><?=$res->Titulo?></h1>
                  <img src="<?php echo base_url().$res->Imagen;?>" width="119" height="79" class="thumb_noved"/>
                  <p class="breve_descrip"><?= $res->Copete ?></p>
                  <p class="fecha_noved"><?= $res->Fecha ?></p>
                  <a href="<?php echo base_url();?>noticia/<?= $res->Id ?>" class="ampliar_noti"><img src="<?php echo base_url();?>img/ampliar_noticia.png" /></a>
                </li>
                <?php endforeach;?>
              <?php endif; ?>
              </ul>
              <div id="alinear_paginador">
                <?php echo $this->pagination->create_links(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>