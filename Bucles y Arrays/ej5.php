<?php
    for ($i = 0; $i < 20; $i++) {
        $numero[$i] = rand (0,100);
        $cuadrado[$i] = $numero[$i] * 2;
        $cubo[$i] = $numero[$i] * 3;
    }
       
    echo "Números: " . implode(', ', $numero) . "<br>";
    echo "Cuadrados: " . implode(', ', $cuadrado) . "<br>";
    echo "Cubos: " . implode(', ', $cubo) . "<br>";
?>