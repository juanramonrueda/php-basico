<?php
  for ($i = 1; $i <= 10; $i++) {
    echo "<h2>Tabla de multiplicar del número $i</h2>";
    
    echo "<table border='1'>";
      for ($j = 1; $j <= 10; $j++) {
        echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>x</td>";
          echo "<td>$j</td>";
          echo "<td>=</td>";
          echo "<td>".$j*$i."</td>";
        echo "</tr>";
      }
    echo "</table>";
  }
?>