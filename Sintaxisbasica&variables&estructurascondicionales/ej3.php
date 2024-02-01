<?php

    #Realiza un ejercicio en el que usuario introduzca un número y determine si
    #es par o impar
    #Pablo Téllez Del Saz
    
    $num = readline("Introduce un numero: ");

    if ($num % 2 == 0) {
        echo "El número $num es par\n";
    } else {
        echo "El número $num impar\n";
    }
?>