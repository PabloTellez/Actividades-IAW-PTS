<?php

    #Una persona sólo puede conducir si tiene carnet de conducir y si es mayor
    #de 18 años. Haz un programa que pida por pantalla estas dos condiciones y
    #determine si puede o no conducir.
    #Pablo Téllez Del Saz
    
    $num = readline("Introduce un numero: ");
    $carnet = readline("¿Tiene usted carnet de conducir?: ");
    
    if ( $num >= 18 && $carnet == "si") {
        echo "Esta persona puede conducir";
    } else {
        echo "La persona no puede conducir";
    }
?>