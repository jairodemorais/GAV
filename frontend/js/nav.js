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
    $.post('index.php/login/validateUser',
    { 'usuario':username, 'clave' : password}, 
    function(result){
      if(result =='true'){
        window.location.reload();
      } else {
        alert('Error');
      }
    });
  });

  $('#logOut').click(function(){
    $.post('index.php/login/logout',
    {}, 
    function(result){
      window.location.reload();
    });
  });
}


