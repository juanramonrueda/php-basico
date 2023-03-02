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
?>