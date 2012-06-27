<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Confirmacion del usuario</title>
    <meta http-equiv="Content-Type" content="text/html;">
    <!--Fireworks CS3 Generic target.  Created Tue Jun 05 22:18:45 GMT-0300 2012-->
  </head>
  <body bgcolor="#ffffff">
    <div align="center"><img name="top_mail" src="--baseUrl--img/top_mail.jpg" width="460" height="128" border="0" alt=""></div>
    DATOS DEL REGISTRADO:</br>
    Nombre: <?= $Nombre ?> </br>
    Apellido: <?= $Apellido ?></br>
    Mail: <?= $UserEmail ?></br>
    <div>
      <strong>Para habilitar el usuario haga click en el siguiente link:</strong>
      <a><?= base_url()."habilitar/".$Id ?></a>
    </div>
    <img src="--baseUrl--img/pie_mail.jpg" alt="" name="pie_mail" width="459" height="33" border="0" usemap="#pie_mailMap">
</body>
</html>