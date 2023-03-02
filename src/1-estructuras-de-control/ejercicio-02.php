<?php
  $nota = rand(1, 10);
  echo "El valor de la nota es: ". $nota;
  echo "<br>";

  if ($nota >= 0 and $nota < 5) {
    echo "Insuficiente";
  } elseif ($nota >= 5 and $nota < 6) {
    echo "Suficiente";
  } elseif ($nota >= 6 and $nota < 7) {
    echo "Bien";
  } elseif ($nota >= 7 and $nota < 9) {
    echo "Notable";
  } else {
    echo "Sobresaliente";
  }
?>