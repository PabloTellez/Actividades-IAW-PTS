<?php

    #Realiza un ejercicio en el que el usuario introduce dos números y
    #determine si son iguales
    #Pablo Téllez Del Saz
    
    $num = readline("Introduce un numero: ");
    $num2 = readline ("Introduce un segundo numero: ");

    if ($num == $num2) {
        echo "Los números son iguales\n";
    } else {
        echo "Son números diferentes\n";
    }
?>