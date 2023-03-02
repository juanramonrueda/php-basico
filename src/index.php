<?php
  $nombre = "Pepe";
  $edad = 30;
  $lista = array("Pepe", "María", "Juan");
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Ejemplo</title>
  </head>
  <body>
      <p>Contenido escrito en HTML</p>
      <?php echo "Contenido escrito desde PHP";
            echo "<br>";
            echo "El nombre del usuario es: $nombre";
            echo "<br>";
            echo $edad;
            echo "<br>";
            print_r($lista);
      ?>
  </body>
</html>