
<?php if (isset($errorMsg)): ?>
  <h2 class="subtit_principal"><?php echo $errorMsg ?></h1>
<?php endif; ?>

<ul id="categorias_home">

  <?php if(isset($categories)){ ?>
  
    <?php $styles = array("0" => "cat_magenta","1" => "cat_verde", "2" => "cat_violeta", "3" => "cat_turquesa", "4" => "cat_naranja", "5" => "cat_magenta");?>
    <?php $n=0; foreach ($categories as $item) { $current=$item["Nombre"]; ?>
      <li class="margen_izq_cat">
        <a href="<?php echo base_url();?>buscar/<? echo $item["Nombre"];?>/<? echo $item["Id"];?>/0" class="cats_home <? echo $styles[$n]?>"><? echo $item["Nombre"];?></a>
        <ul>
        <? if ( !empty($sub[$current])) { foreach ($sub[$current] as $item2) { ?>
          <li><a href="<?php echo base_url();?>buscar/<? echo url_title($item2["Nombre"]);?>/<? echo $item["Id"];?>/0" class="submenu_home"><? echo $item2["Nombre"];?></a></li>
        <? } }?>
        </ul>
      </li>
    <?php $n++; }?>
    
  <?php } ?>
  
</ul>
