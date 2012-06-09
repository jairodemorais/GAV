<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <link rel="stylesheet" href='<?php echo base_url();?>css/estilos.css' type="text/css" /> 
  <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>fancybox/jquery.fancybox-1.3.1.js"></script>
  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />

  <script type="text/javascript">
  $(document).ready(function() {
    $('li.margen_izq_cat').hover(
      function() { $('ul', this).css('display', 'block'); },
      function() { $('ul', this).css('display', 'none'); });
    
    init();
  });
  </script>  
</head>
<body class="fondo_gris_repeat">
  <div id="contenedor_prin">
    <div id="contenedor_central"> 
      <div id="home">
        <?php include('application/views/nav.php') ?>
        <div id="buscador_home">
          <form action="" method="post">
            <input name="" type="text" class="search_home"/>
            <input name="imageField2" type="image" src="<?php echo base_url();?>img/btn/buscar.gif" border="0" class="btn_buscar_home">
          </form>
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
          <li class="margen_izq_cat"><a href="#" class="cats_home cat_naranja">Categoría 5</a></li>
        </ul>    
      </div>
    </div>
    <div class="corte"></div>
  </div>
</body>
</html>
