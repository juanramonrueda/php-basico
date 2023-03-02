<?php
  $i = 1;
  while ($i <= 10) {
    echo "<h2>Tabla de multiplicar del número $i</h2>";
    
    $j = 1;
    echo "<table border='1'>";
      while ($j <= 10) {
        echo "<tr>";
          echo "<td>$i</td>";
          echo "<td>x</td>";
          echo "<td>$j</td>";
          echo "<td>=</td>";
          echo "<td>".$j*$i."</td>";
        echo "</tr>";
        $j++;
      }
    echo "</table>";
    $i++;
  }
?>