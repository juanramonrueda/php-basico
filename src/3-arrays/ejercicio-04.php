<?php
  $lista = array();

  define("NUMERO_ELEMENTOS", 10);

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    $lista[$i] = rand(0,30);
  }

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>";
  }

  $posicion_numero_minimo = 0;

  $minimo = $lista[0];
  for ($i = 1; $i < NUMERO_ELEMENTOS; $i++) {
    if ($lista[$i] < $minimo) {
      $minimo = $lista[$i];
      $posicion_numero_minimo = $i;
    }
  }

  echo "El número mínimo es ==> $minimo";
  echo "<br>";
  echo "La posición del número mínimo es ==> $posicion_numero_minimo"
?>