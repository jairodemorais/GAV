<?php echo form_open(base_url().'buscar/-/0') ?>
<input name="artist_value" type="text" class="search_top" value="<?php echo $this->session->userdata('artist_value') ?>"/>
<input name="imageField2" type="image" src="<?php echo base_url();?>img/buscar_black.png" border="0" class="btn_buscar_top" >
<?php if (isset($errorMsg)): ?>
  <h2 class="subtit_principal"><?php echo $errorMsg ?></h1>
<?php endif; ?>
<ul id="categorias_top">
  <?php if(isset($categories)): ?>
    <?php $n=0; foreach ($categories as $item): ?>
      <li><a href="<?php echo base_url();?>buscar/<? echo url_title($item["Nombre"]);?>/<? echo $item["Id"];?>/0"><? echo $item["Nombre"];?></a></li>
      <?php $n++; if ($n < count($categories)): ?>
        <li>|</li>
      <?php endif; ?>
    <?php endforeach;?>
  <?php endif; ?>
</ul>
<?php form_close() ?>