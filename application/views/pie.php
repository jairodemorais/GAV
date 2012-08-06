<div id="bottom">
  <div id="centrar_bottom">
    <img src="<?php echo base_url();?>img/logo_bottom.png" />
    <ul id="botonera_bottom">
      <li><a href="<?php echo base_url();?>">Home</a></li>
      <li><a href="<?php echo base_url();?>nosotros">Nosotros</a></li>
      <li><a href="<?php echo base_url();?>registro">Registro</a></li>
      <li><a href="#contacto" class="fancy">Consultas</a></li>
    </ul>  
    <?php if (isset($errorMsg)): ?>
      <h2 class="subtit_principal"><?php echo $errorMsg ?></h1>
  <?php endif; ?>
  <?php if(isset($categories)): ?>
    <ul id="botonera_bottom">
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($categories[0]["Nombre"]); ?>/<? echo $categories[0]["Id"]; ?>/0"><? echo $categories[0]["Nombre"]; ?></a></li>
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($categories[1]["Nombre"]); ?>/<? echo $categories[0]["Id"]; ?>/0"><? echo $categories[1]["Nombre"]; ?></a></li>
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($categories[2]["Nombre"]); ?>/<? echo $categories[0]["Id"]; ?>/0"><? echo $categories[2]["Nombre"]; ?></a></a></li>
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($categories[3]["Nombre"]); ?>/<? echo $categories[0]["Id"]; ?>/0"><? echo $categories[3]["Nombre"]; ?></a></a></li>
    </ul>   
    <ul id="botonera_bottom" style="border:0;">
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($categories[4]["Nombre"]); ?>/<? echo $categories[0]["Id"]; ?>/0"><? echo $categories[4]["Nombre"]; ?></a></a></li>
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($categories[5]["Nombre"]); ?>/<? echo $categories[0]["Id"]; ?>/0"><? echo $categories[5]["Nombre"]; ?></a></a></li>
    </ul>  
    <?php endif; ?>
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