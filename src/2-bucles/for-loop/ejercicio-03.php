<?php
  echo "<table border='1'>";
    for ($i = 1; $i <= 100; $i++) {
      if ($i % 2 == 0) {
        echo "<tr>";
          echo "<td>$i</td>";
        echo "</tr>";
      }
    }
  echo "</table>";
?>