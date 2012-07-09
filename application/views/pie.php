<div id="bottom">
  <div id="centrar_bottom">
    <img src="<?php echo base_url();?>img/logo_bottom.png" />
    <ul id="botonera_bottom">
      <li><a href="#">Home</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Registro</a></li>
      <li><a href="#contacto" class="fancy">Consultas</a></li>
    </ul>  
    <?php if (isset($errorMsg)): ?>
      <h2 class="subtit_principal"><?php echo $errorMsg ?></h1>
  <?php endif; ?>
  <?php if(isset($categories)): ?>
    <ul id="botonera_bottom">
      <li><a href="buscar/cat/<?=$categories[0]->Id?>"><?=$categories[0]->Nombre?></a></li>
      <li><a href="buscar/cat/<?=$categories[1]->Id?>" ><?=$categories[1]->Nombre?></a></li>
    </ul>
    <ul id="botonera_bottom">
      <li><a href="buscar/cat/<?=$categories[2]->Id?>"><?=$categories[2]->Nombre?></a></li>
      <li><a href="buscar/cat/<?=$categories[3]->Id?>"><?=$categories[3]->Nombre?></a></li>
    </ul>   
    <ul id="botonera_bottom" style="border:0;">
      <li><a href="buscar/cat/<?=$categories[4]->Id?>"><?=$categories[4]->Nombre?></a></li>
      <li><a href="buscar/cat/<?=$categories[5]->Id?>"><?=$categories[5]->Nombre?></a></li>
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
<?php $this->output->enable_profiler(TRUE);?>

</body>
</html>