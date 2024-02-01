<?php
#Realiza un ejercicio en el que el usuario introduzca su edad y determine si
#es menor o mayor de edad.
#Pablo Téllez Del Saz

    $num = readline("Introduce una edad: ");

    if ($num >= 18) {
        echo "Es mayor de edad\n";
    }
    else {
        echo "Es menor de edad\n";
    }
?>