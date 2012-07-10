<?php if (isset($errorMsg)): ?>
  <h2 class="subtit_principal"><?php echo $errorMsg ?></h1>
<?php endif; ?>
<ul id="categorias_home">
  <?php if(isset($categories)): ?>
    <?php $styles = array("0" => "cat_magenta","1" => "cat_verde", "2" => "cat_violeta", "3" => "cat_turquesa", "4" => "cat_naranja", "5" => "cat_magenta");?>
    <?php foreach ($categories as $index=>$cat): ?>
      <li class="margen_izq_cat">
        <a href="<?php echo base_url();?>buscar/cat/<?=$cat->Id?>" class="cats_home <?= $styles[$index]?>"><?=$cat->Nombre?></a>
        <ul>
          <li><a href="#" class="submenu_home">Subcategoría 1</a></li>
          <li><a href="#" class="submenu_home">Subcategoría 2</a></li>
          <li><a href="#" class="submenu_home">Subcategoría 3</a></li>
          <li><a href="#" class="submenu_home">Subcategoría 4</a></li>
        </ul>
      </li>
    <?php endforeach;?>
  <?php endif; ?>
</ul>