<!--  DIV PARA CONTACTO   -->  
<div style="display:none;">
  <div id="contacto" class="div_contacto">
    <?php echo validation_errors(); ?>
    <?php echo form_open('contact/create') ?>
      <h1>Contacto</h1>
      <h2>Completa los siguientes datos con tus comentarios ó sugerencias. A la brevedad nos comunicaremos contigo!.</h2>
      <ul class="lista_contacto">
        <li class="lista_cont_corto">
          <p>Nombre</p>
          <?php
            $data = array(
              'name'        => 'Nombre',
              'class'       => 'form_txt_contacto'
            );
            echo form_input($data) ?>
        </li>
        <li class="lista_cont_corto">
          <p>E-mail</p>
          <?php
            $data = array(
              'name'        => 'Mail',
              'class'       => 'form_txt_contacto'
            );
            echo form_input($data) ?>
        </li>
        <li class="lista_cont_largo">
          <p class="lista_p_largo">Comentarios</p>
          <?php
            $data = array(
              'name'        => 'Comentario',
              'class'       => 'form_txt_contacto form_multi'
            );
            echo form_textarea($data) ?>
        </li>
        <li class="lista_cont_largo">
          <div id="captcha_cont">
            <?php
                $data = array(
                  'name' => 'imageField2',
                  'type' => 'image',
                  'src' => base_url().'img/forms/btn_enviar.jpg',
                  'border' => '0',
                  'class' => 'btn_enviar_form'
                );

             echo form_input($data); ?>            
          </div>     
        </li>
      </ul>
    </form>
  </div>
</div>
<!-- -->  