<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <?php include('application/views/head.php') ?>
  <script type="text/javascript">
  $(document).ready(function() {
    $(".btn_ampliar_obra").fancybox({
      'titlePosition'    : 'inside',
      'transitionIn'    : 'none',
      'transitionOut'    : 'none'
    });
  });
  
  function verVideo(codigo) {
    var boxvideo;
    boxvideo += '<object width="520" height="250">';
    boxvideo += '<param name="movie" value="'+codigo+'"></param>';
    boxvideo += '<param name="autoplay" value="1">';
    boxvideo += '<param name="wmode" value="transparent"></param>';
    boxvideo += '<embed width="520" height="250" src="http://www.youtube.com/v/'+codigo+'?version=3&amp;hl=es_ES" type="application/x-shockwave-flash" wmode="transparent">';
    boxvideo += '</embed></object>';
    $("#video_contenedor").empty();
    $(boxvideo).appendTo("#video_contenedor");
}
  </script>
  
  <?php if(isset($artista['Video'])): ?>
    <script>
    $(document).ready(function() {
      verVideo($("#video_contenedor").attr("name"));
    });
    </script>
  <?php endif; ?>
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
          <h5 class="tit_categoria_desp">Nombre de la categoría</h5>
          <a href="#" class="top_ver_todas">Ver todas >></a>
        </div>  
        <div id="lat_der_artistas">
          <ul>
            <?php if(isset($obras)): ?>
              <?php foreach ($obras as $res): ?>
                <li>
                  <div><? if (isset($res->Nombre)) { ?><a href="<? echo base_url();?>ampliar/<?=$res->Id?>" class="btn_ampliar_obra"><img width="135" height="105" src="<?= base_url()."backend/public_html/imagenes/obras/crop/".$res->Nombre;?>" /></a><? } ?></div>
                  <a href="<? echo base_url();?>ampliar/<?=$res->Id?>" class="link_artista btn_ampliar_obra"><?= $res->Epigrafe?></a>
                </li>
              <?php endforeach;?>
            <?php endif; ?>
          </ul>
        </div>
        <div id="lateral_artistas">
          <h1 class="tit_izq_principal tit_artistas"><?= $artista['Nombre']?></h1>
          <p class="parrafo_izq pf_artista"><?= $artista['Descripcion']?></p>
          <div id="video_contenedor" class="multi_artista" name="<?=$artista['Video']?>"></div>
          <ul id="contacto_artista">
            <?php if($artista['Direccion'] != ""): ?>
              <li class="adress_prov"><?= $artista['Direccion']?> (<a href="#">ver mapa</a>)</li>
            <?php endif; ?>
            <?php if($artista['Mail'] != ""): ?>
              <li class="mail_prov"><?= $artista['Mail']?></li>
            <?php endif; ?>
            <?php if($artista['Telefono'] != ""): ?>
              <li class="phone_prov"><?= $artista['Telefono']?></li>
            <?php endif; ?>
            <?php if($artista['Web'] != ""): ?>
              <li class="web_prov"><?= $artista['Web']?></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>