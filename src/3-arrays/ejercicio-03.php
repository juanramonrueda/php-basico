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

  $posicion_numero_maximo = 0;

  $maximo = $lista[0];
  
  for ($i = 1; $i < NUMERO_ELEMENTOS; $i++) {
    if ($lista[$i] > $maximo) {
      $maximo = $lista[$i];
      $posicion_numero_maximo = $i;
    }
  }

  echo "El número máximo es ==> $maximo";
  echo "<br>";
  echo "La posición del número máximo es ==> $posicion_numero_maximo";
?>