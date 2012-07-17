function init() {
  $("#contactButton").fancybox();

  $("#loginButton").fancybox();

  $('#bt_olvido').click(function(event){
    event.preventDefault();
    $('#lista_login_mail').attr("style","display:block;");
    $('#lista_login_campos').attr("style","display:none;");
  });


  $('#bt_acceder').click(function(event){
    event.preventDefault();
    $('#lista_login_mail').attr("style","display:none;");
    $('#lista_login_campos').attr("style","display:block;");
  });

  $('#logIn').click(function() {
    var username = $('#userName').val();
    var password = $('#password').val();
    var email = $('#forgotEmail').val();

    if (!email) {
      $.post('/gav/index.php/login/validateUser',
      { 'usuario':username, 'clave' : password}, 
      function(result){
        if(result =='true'){
          window.location.reload();
        } else {
          alert('Error: El usuario ingresado no existe o aun no fue habilitado.');
        }
      });
    } else {
      $.post('/gav/index.php/login/forgot',
      { 'email': email}, 
      function(result){
        if(result == "true") {
          alert('Se ha enviado un email a su casilla de correo electronico');
        } else {
          alert('El email ingresado es incorrecto.');
        }
      });
    }
  });
  
  $('#logOut').click(function(){
    $.post('index.php/login/logout',
    {}, 
    function(result){
      window.location.reload();
    });
  });
};


