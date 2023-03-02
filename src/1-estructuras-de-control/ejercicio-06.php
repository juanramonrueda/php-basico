<?php
  $lado_dado = rand(1, 6);

  $array_imagenes = [
    1 => '../images/dados/dice-one.svg',
    2 => '../images/dados/dice-two.svg',
    3 => '../images/dados/dice-three.svg',
    4 => '../images/dados/dice-four.svg',
    5 => '../images/dados/dice-five.svg',
    6 => '../images/dados/dice-six.svg'
  ];

  echo "<img src='".$array_imagenes[$lado_dado]."' alt= 'Lado ".$lado_dado."'>";
?>