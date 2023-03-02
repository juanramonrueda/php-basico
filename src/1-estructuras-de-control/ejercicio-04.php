<?php
  $lado_dado = rand(1, 6);

  if ($lado_dado == 1) {
    echo "<img src='../images/dados/dice-one.svg' alt='Lado 1'>";
  } elseif ($lado_dado == 2) {
    echo "<img src='../images/dados/dice-two.svg' alt='Lado 2'>";
  } elseif ($lado_dado == 3) {
    echo "<img src='../images/dados/dice-three.svg' alt='Lado 3'>";
  } elseif ($lado_dado == 4) {
    echo "<img src='../images/dados/dice-four.svg' alt='Lado 4'>";
  } elseif ($lado_dado == 5) {
    echo "<img src='../images/dados/dice-five.svg' alt='Lado 5'>";
  } else {
    echo "<img src='../images/dados/dice-six.svg' alt='Lado 6'>";
  }
?>