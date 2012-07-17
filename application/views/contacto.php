<!--  DIV PARA CONTACTO   -->  
<div style="display:none;">
  <div id="contacto" class="div_contacto">
      <h1>Contacto</h1>
      <h2>Completa los siguientes datos con tus comentarios ó sugerencias. A la brevedad nos comunicaremos contigo!.</h2>
      <span id="contactError"> </span>
      <ul class="lista_contacto">
        <li class="lista_cont_corto">
          <p>Nombre</p>
          <input id="contactName" type="text" name="Nombre" class="form_txt_contacto" />
        </li>
        <li class="lista_cont_corto">
          <p>E-mail</p>
          <input id="contactMail"type="text" name="Mail" class="form_txt_contacto" />
        </li>
        <li class="lista_cont_largo">
          <p class="lista_p_largo">Comentarios</p>
          <input id="contactMessage" type="textarea" name="Comentario" class="form_txt_contacto form_multi" />
        </li>
        <li class="lista_cont_largo">
          <div id="captcha_cont">
            <input type="button" name="imageField2" onClick="sendContactData()" style="background-image:url('img/forms/btn_enviar.jpg'); width: 121px; height: 35px;" border="0" class="btn_enviar_form" />          
          </div>     
        </li>
      </ul>
  </div>
</div>
<script type="text/javascript">
  function sendContactData() {
    if (validateFields() == false) return;
    $.ajax({
      type: 'POST',
      url: '<?= base_url();?>contact/create',
      data: { 'Nombre' : $('#contactName').val(), 'Mail' : $('#contactMail').val(), 'Comentario' : $('#contactMessage').val() },
      success: function(data) { if (data == 'true') { window.location.reload(); } } 
    });
  };
  function validateFields(){
    var message = "";
    if ($('#contactName').val() == "")
    {
      message += "Debe ingresar un nombre.";
    }
    if ($('#contactMail').val() == "")
    {
      message += "Debe ingresar un Mail.";
    }
    if ($('#contactMessage').val() == "")
    {
      message += "Debe ingresar un Mensaje.";
    }
    if (message != ""){
      $('#contactError').text(message);
      return false;
    } else {
      return true;
    }
  }
</script>
<!-- -->  