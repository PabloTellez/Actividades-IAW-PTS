<?php
    
    #Realiza un ejercicio en el que el usuario introduzca un número y determine
    #si es positivo, negativo o cero
    #Pablo Téllez Del Saz
    
    $num = readline("Introduce un numero: ");

    if ($num > 0){
        echo "El número es positivo\n";
    }

    elseif ($num < 0) {
        echo "El número es negativo\n";
    }

    else {
        echo "El número es cero\n";
    }
?>