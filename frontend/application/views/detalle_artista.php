<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <link href="css/estilos.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
  <script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.js"></script>
  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.1.css" media="screen" />
  <script type="text/javascript">
  $(document).ready(function() {
    $(".btn_ampliar_obra").fancybox({
      'titlePosition'		: 'inside',
      'transitionIn'		: 'none',
      'transitionOut'		: 'none'
    });
  });
  </script>
</head>
<body>
  <div id="contenedor_prin">
    <div id="top">            
      <div id="centrar_top">
        <div id="top_superior">
          <img src="img/logo_negro.gif" class="logo_top"/>
          <div id="buscador_top">
            <form action="" method="post">
              <input name="" type="text" class="search_top"/>
              <input name="imageField2" type="image" src="img/btn/buscar_black.gif" border="0" class="btn_buscar_top">
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
          <img src="img/gav_black.jpg" class="gav_icon_top"/> 
        </div>
        <ul id="botonera_top">
          <li><a href="#">Home</a></li>
          <li><a href="#">Nosotros</a></li>
          <li><a href="#">Registro</a></li>
          <li><a href="#">Consultas</a></li>
          <li><a href="#">Newsletter</a></li>
        </ul>  
        <div id="login_top">
          <a href="#" class="btn_login_home"></a>
          <a href="#" class="olvido_pass">¿Olvidaste tu contraseña?</a>
        </div>          
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
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_1" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_2" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_3" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_1" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_2" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_3" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_1" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_2" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_2" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_3" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_1" class="link_artista btn_ampliar_obra">Artista</a></li>
            <li><img src="img/galeria/thumbs.jpg" /><a href="#ampliar_obra_2" class="link_artista btn_ampliar_obra">Artista</a></li>
          </ul>
        </div>
        <div id="lateral_artistas">
          <h1 class="tit_izq_principal tit_artistas">Nombre del proveedor</h1>
          <p class="parrafo_izq pf_artista"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

          <p class="parrafo_izq pf_artista">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

          <p class="parrafo_izq pf_artista">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>

          <div class="multi_artista"><img src="img/video.jpg" width="520" height="185" /></div>
          <ul id="contacto_artista">
            <li class="adress_prov">Piedras 1468 1º Piso (<a href="#">ver mapa</a>)</li>

            <li class="mail_prov">nombreyapellido@mail.com</li>

            <li class="phone_prov">(011)1555-1115</li>

            <li class="web_prov">www.miwebsite.com.ar</li>
          </ul>
        </div>
      </div>
    </div>
    <div id="bottom">
      <div id="centrar_bottom">
        <img src="img/logo_bottom.png" />
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
  <!--  AMPLIAR OBRA NUMERO 1  -->  
  <div style="display:none;">
    <div id="ampliar_obra_1" class="div_obras">
      <img src="img/galeria/ampliar.jpg" />
      <ul class="datos_obra">    
        <li> <h2>Nombre de la obra ampliada</h2> </li>
        <li> <p class="caract_obra"><b>Técnica:</b> Acuarela</p> </li>
        <li> <p class="caract_obra"><b>Medidas:</b> 148cm x 76cm</p> </li>
        <li> <p class="caract_obra"><b>Año:</b> 2002</p> </li>
        <li>   
          <div class="valor_ref">
            <p class="tit_valor_ref">Valor de referencia</p>
            <p class="total_valor">U$S 1.200</p>
          </div>
        </li>    
      </ul>
    </div>
  </div>
  <!-- -->  
  <!--  AMPLIAR OBRA NUMERO 2  -->  
  <div style="display:none;">
    <div id="ampliar_obra_2" class="div_obras">
      <img src="img/galeria/test2.jpg" />
      <ul class="datos_obra">    
        <li> <h2>Nombre de la obra ampliada</h2> </li>
        <li> <p class="caract_obra"><b>Técnica:</b> Acuarela</p> </li>
        <li> <p class="caract_obra"><b>Medidas:</b> 148cm x 76cm</p> </li>
        <li> <p class="caract_obra"><b>Año:</b> 2002</p> </li>
        <li>   
          <div class="valor_ref">
            <p class="tit_valor_ref">Valor de referencia</p>
            <p class="total_valor">U$S 1.200</p>
          </div>
        </li>    
      </ul>
    </div>
  </div>
  <!-- -->  
  <!--  AMPLIAR OBRA NUMERO 3 -->  
  <div style="display:none;">
    <div id="ampliar_obra_3" class="div_obras">
      <img src="img/galeria/test3.jpg" />
      <ul class="datos_obra">    
        <li> <h2>Nombre de la obra ampliada</h2> </li>
        <li> <p class="caract_obra"><b>Técnica:</b> Acuarela</p> </li>
        <li> <p class="caract_obra"><b>Medidas:</b> 148cm x 76cm</p> </li>
        <li> <p class="caract_obra"><b>Año:</b> 2002</p> </li>
        <li>   
          <div class="valor_ref">
            <p class="tit_valor_ref">Valor de referencia</p>
            <p class="total_valor">U$S 1.200</p>
          </div>
        </li>    
      </ul>
    </div>
  </div>
  <!-- -->  
</body>
</html>
