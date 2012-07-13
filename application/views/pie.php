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
      <li><a href="<?php echo base_url();?>buscar/<?=$categories[0]->Nombre?>/<?=$categories[0]->Id?>/0"><?=$categories[0]->Nombre?></a></li>
      <li><a href="<?php echo base_url();?>buscar/<?=$categories[1]->Nombre?>/<?=$categories[1]->Id?>/0" ><?=$categories[1]->Nombre?></a></li>
    </ul>
    <ul id="botonera_bottom">
      <li><a href="<?php echo base_url();?>buscar/<?=$categories[2]->Nombre?>/<?=$categories[2]->Id?>/0"><?=$categories[2]->Nombre?></a></li>
      <li><a href="<?php echo base_url();?>buscar/<?=$categories[3]->Nombre?>/<?=$categories[3]->Id?>/0"><?=$categories[3]->Nombre?></a></li>
    </ul>   
    <ul id="botonera_bottom" style="border:0;">
      <li><a href="<?php echo base_url();?>buscar/<?=$categories[4]->Nombre?>/<?=$categories[4]->Id?>/0"><?=$categories[4]->Nombre?></a></li>
      <li><a href="<?php echo base_url();?>buscar/<?=$categories[5]->Nombre?>/<?=$categories[5]->Id?>/0"><?=$categories[5]->Nombre?></a></li>
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