<?php

  $a = 10;
  $b = 5;

  echo "Esto se ejecuta antes del if - Se ejecuta siempre";
  echo "<br>";
  if ($a > $b) {
    echo "a es mayor que b";
  } else {
    echo "a NO es mayor que b";
  }

  echo "<br>";
  echo "Esto se ejecuta después del if - Se ejecuta siempre";
  echo "<br>";
?>