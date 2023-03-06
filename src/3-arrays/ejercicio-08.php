<?php
  $lista = array();

  define("NUMERO_ELEMENTOS", 10);

  echo "<h2>Antes de ordenar:</h2>";

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    $lista[$i] = rand(0,30);
  }

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    echo $lista[$i];
  
    echo "<br>";
  }

  echo "<br>";
  
  sort($lista, SORT_NUMERIC);

  echo "<h2>Después de ordenar de menor a mayor:</h2>";

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    echo $lista[$i];
  
    echo "<br>";
  }

  echo "<br>";

  rsort($lista, SORT_NUMERIC);

  echo "<h2>Después de ordenar de mayor a menor:</h2>";

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    echo $lista[$i];
  
    echo "<br>";
  }
?>