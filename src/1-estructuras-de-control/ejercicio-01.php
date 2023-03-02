<?php
  $cara = "../images/moneda/cara-moneda.png";

  $cruz = "../images/moneda/cruz-moneda.png";

  // El número "1" se simula que es cara, el número "2" se simula que es cruz
  $aleatorio = rand(1, 2);
  
  if ($aleatorio == 1) {
    echo "<img src='".$cara."' alt='Cara'>";
  } else {
    echo "<img src='".$cruz."' alt='Cruz'>";
  }
?>