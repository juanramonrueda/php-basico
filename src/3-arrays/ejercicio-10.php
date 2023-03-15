<?php
  $paises = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

  # Ordenación del array mediante la clave
  ksort($paises);

  # Se recorre el array
  foreach ($paises as $valor => $clave) {
    # Se convierte el valor del array a mayúsculas
    $valor = strtoupper($valor);

    # Se convierte la clave del array a mayúsculas
    $clave = strtoupper($clave);
    
    echo "La capital de $valor es $clave";
    echo "<br>";
  }
?>