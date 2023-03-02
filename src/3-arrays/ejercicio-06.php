<?php
  $lista = array();

  define("NUMERO_ELEMENTOS", 10);

  $i = 0;

  while ($i < NUMERO_ELEMENTOS) {
    $lista[$i] = rand(0,30);

    $i = $i + 1;
  }

  #--------------------------------------------------
  # Media de las "temperaturas" aleatorias
  
  $suma = 0;

  $i = 0;

  while ($i < NUMERO_ELEMENTOS) {
    $suma = $suma + $lista[$i];

    $i = $i + 1;
  }

  $media = $suma / NUMERO_ELEMENTOS;

  #--------------------------------------------------
  # Cota superior de las "temperaturas"

  $posicion_numero_maximo = 0;

  // $maximo = $lista[0];
  
  $i = 1;
  
  while ($i < NUMERO_ELEMENTOS) {
    if ($lista[$i] > $maximo) { 
      $maximo = $lista[$i];

      // $posicion_numero_maximo = $i;
    }
    
    $i = $i + 1;
  }

  #--------------------------------------------------
  # Cota inferior de las "temperaturas"

  // $posicion_numero_minimo = 0;

  $minimo = $lista[0];

  $i = 0;

  while ($i < NUMERO_ELEMENTOS) {
    if ($lista[$i] < $minimo) {
      $minimo = $lista[$i];

      // $posicion_numero_minimo = $i;
    }

    $i = $i + 1;
  }

  #--------------------------------------------------
  # Se muestran los resultados obtenidos

  echo "La media de las temperaturas es ==> $media";
  echo "<br>";
  echo "La mayor temperatura es ==> $maximo";
  echo "<br>";
  echo "La menor temperatura es ==> $minimo";
?>