<?php

    #Realiza un ejercicio en el que el usuario introduzca 3 números y determine
    #cuál de los tres es mayor.
    #Pablo Téllez Del Saz
    
    $num = readline("Introduce un primer numero: ");
    $num2 = readline ("Introduce un segundo numero: ");
    $num3 = readline ("Introduce un tercer numero: ");

    if ($num > $num2) {
        echo "El número $num es el mayor\n";
    } elseif ($num2 > $num and $num2 > $num3) {
        echo "El número $num2 es el mayor\n";
    }
    else {
        echo "El número $num3 es el mayor";
    }
?>