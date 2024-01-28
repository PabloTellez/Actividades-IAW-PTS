<?php
    $f = readline("Introduce el numero que quieres mostrar en Fibonacci: ");
       
    if ($f < 1) {
        echo "Introduce un número mayor o igual a 1";
    } else {
        $a = 0;
        $b = 1;
    }   

    echo "Los primeros $f términos de Fibonacci son: \n";
    for ($e = 0; $e < $f; $e++ ) {
        echo "$a\n";
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
?>