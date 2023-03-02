<?php
  $numero_dia = rand(1, 7);
  echo "El número del día es: " . $numero_dia;
  echo "<br>";

  switch ($numero_dia) {
    case 1:
      echo "Es lunes";
      break;

    case 2:
      echo "Es martes";
      break;

    case 3:
      echo "Es miércoles";
      break;

    case 4:
      echo "Es jueves";
      break;

    case 5:
      echo "Es viernes";
      break;

    case 6:
      echo "Es sábado";
      break;

    default:
      echo "Es domingo";
      break;
  }
?>