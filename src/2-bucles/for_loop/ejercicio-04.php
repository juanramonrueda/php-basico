<?php
  $aleatorio = rand(1, 10);

  echo "<h2>Tabla de multiplicar del número $aleatorio</h2>";
  
  echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<tr>";
        echo "<td>$aleatorio</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo "<td>=</td>";
        echo "<td>".$i*$aleatorio."</td>";
      echo "</tr>";
    }
  echo "</table>";
?>