<?php

    #Realiza un ejercicio en el que el usuario introduzca un número del 1 al 7 y
    #el determine qué día de la semana es.
    #Pablo Téllez Del Saz
    
    $num = readline("Introduce un numero: ");   
    switch ($num) {
        case 1:
            echo "Lunes\n";
            break;
        case 2:
            echo "Martes\n";
            break;

        case 3:
            echo "Miércoles\n";
            break;
    
        case 4:
            echo "Jueves\n";
            break;

        case 5:
            echo "Viernes\n";
            break;

        case 6:
            echo "Sábado\n";
            break;

        case 7:
            echo "Domingo\n";
            break;
    }
?>