<?php
    $num = readline("Introduce un numero: ");
    $num = abs($num);
    $numDigitos = strlen((string) $num);
    echo "El número $num tiene $numDigitos dígitos\n";
?>