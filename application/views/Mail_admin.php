<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>Confirmacion del usuario</title>
    <meta http-equiv="Content-Type" content="text/html;">
    <!--Fireworks CS3 Generic target.  Created Tue Jun 05 22:18:45 GMT-0300 2012-->
  </head>
  <body bgcolor="#ffffff">
    DATOS DEL REGISTRADO:
    Nombre: <?= $user['Nombre'] ?>
    Apellido: <?= $user['Apellido'] ?>
    Mail: <?= $user['Mail'] ?>
    Telefono: <?= $user['Telefono'] ?>
    Direccion: <?= $user['Direccion'] ?>
    Ciudad: <?= $user['Ciudad'] ?>
    Provincia: <?= $user['Provincia'] ?>
    Pais: <?= $user['Pais'] ?>
    CP: <?= $user['CP'] ?>

    <div>
      <strong>Para habilitar el usuario haga click en el siguiente link:</strong>
      <a><?= base_url()."habilitar/".$user["Id"] ?></a>
    </div>
</body>
</html>