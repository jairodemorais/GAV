<?php echo form_open(base_url().'buscar/-/0') ?>
<input name="artist_value" type="text" class="search_top" value="<?php echo $this->session->userdata('artist_value') ?>"/>
<input name="imageField2" type="image" src="<?php echo base_url();?>img/buscar_black.png" border="0" class="btn_buscar_top" >
<?php form_close() ?>