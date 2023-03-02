<?php
  $lado_dado = rand(1,6);

  switch ($lado_dado) {
    case 1:
      echo "<img src='../images/dados/dice-one.svg' alt='Lado 1'>";
      break;
    
    case 2:
      echo "<img src='../images/dados/dice-two.svg' alt='Lado 2'>";
      break;
    
    case 3:
      echo "<img src='../images/dados/dice-three.svg' alt='Lado 3'>";
      break;

    case 4:
      echo "<img src='../images/dados/dice-four.svg' alt='Lado 4'>";
      break;

    case 5:
      echo "<img src='../images/dados/dice-five.svg' alt='Lado 5'>";
      break;

    default:
      echo "<img src='../images/dados/dice-six.svg' alt='Lado 6'>";
      break;
  }
?>