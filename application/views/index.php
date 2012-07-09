<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>GAV</title>
  <?php include('application/views/head.php') ?>
  <script>
  $(document).ready(function() {
    $('li.margen_izq_cat').hover(
      function() { $('ul', this).css('display', 'block'); },
      function() { $('ul', this).css('display', 'none'); });
      
      <?php if (isset($load_view) && $load_view == 'contact'): ?>
        var j1 = document.getElementById("contactButton");
        j1.href = '#contacto';
        $("#contactButton").trigger('click');
      <?php endif; ?>
  });
  </script>
</head>
<body class="fondo_gris_repeat">
  <div id="contenedor_prin">
    <div id="contenedor_central">
      <div id="home">
        <?php include('application/views/nav.php') ?>
        <div id="buscador_home">
          <?php echo $buscarDiv; ?>
        </div>
        <div id="menu_div"><?php echo $menuDiv; ?></div>
      </div>
    </div>
    <div class="corte"></div>
  </div>
</body>
</html>
