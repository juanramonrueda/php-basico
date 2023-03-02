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

  # Media del array mediante una función de PHP
  // $suma = array_sum($lista);
  // $media = $suma / NUMERO_ELEMENTOS;
  // echo "Media ==> $media";

  # Media del array mediante un for
  $suma = 0;

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    $suma = $suma + $lista[$i];
  }

  $media = $suma / NUMERO_ELEMENTOS;
  echo "<br>";
  echo "Media ==> $media";
?>