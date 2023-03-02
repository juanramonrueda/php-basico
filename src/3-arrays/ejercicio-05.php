<?php
  $lista = array();

  define("NUMERO_ELEMENTOS", 10);

  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    $lista[$i] = rand(0,30);
  }

  // for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
  //   echo $lista[$i];
  
  //   echo "<br>";
  // }

  #--------------------------------------------------
  # Media de las "temperaturas" aleatorias
  
  $suma = 0;
  
  for ($i = 0; $i < NUMERO_ELEMENTOS; $i++) {
    $suma = $suma + $lista[$i];
  }

  # Realización de la media de las temperaturas
  $media = $suma / NUMERO_ELEMENTOS;

  #--------------------------------------------------
  # Cota superior de las "temperaturas"
  
  $posicion_numero_maximo = 0;

  $maximo = $lista[0];

  for ($i = 1; $i < NUMERO_ELEMENTOS; $i++) {
    if ($lista[$i] > $maximo) {
      $maximo = $lista[$i];

      // $posicion_numero_maximo = $i;
    }
  }

  #--------------------------------------------------
  # Cota inferior de las "temperaturas"
  
  // $posicion_numero_minimo = 0;

  $minimo = $lista[0];

  for ($i = 1; $i < NUMERO_ELEMENTOS; $i++) {
    if ($lista[$i] < $minimo) {
      $minimo = $lista[$i];

      // $posicion_numero_minimo = $i;
    }
  }

  #--------------------------------------------------
  # Se muestran los resultados obtenidos

  echo "La media de las temperaturas es ==> $media";
  echo "<br>";
  echo "La mayor temperatura es ==> $maximo";
  echo "<br>";
  echo "La menor temperatura es ==> $minimo";
?>