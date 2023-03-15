<?php
  echo "<h2>Antes de ordenar el array:</h2>";
  
  $usuarios = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

  foreach ($usuarios as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
  }

  echo "<br>";

  echo "<h2>Después de ordenar el array por valor de menor a mayor:</h2>";
  
  asort($usuarios);

  foreach ($usuarios as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
  }

  echo "<br>";

  echo "<h2>Después de ordenar el array por valor de mayor a menor:</h2>";

  arsort($usuarios);

  foreach ($usuarios as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
  }

  echo "<br>";

  echo "<h2>Después de ordenar el array por clave de menor a mayor:</h2>";

  ksort($usuarios);

  foreach ($usuarios as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
  }

  echo "<br>";

  echo "<h2>Después de ordenar el array por clave de mayor a menor:</h2>";

  krsort($usuarios);

  foreach ($usuarios as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor;
    echo "<br>";
  }
?>