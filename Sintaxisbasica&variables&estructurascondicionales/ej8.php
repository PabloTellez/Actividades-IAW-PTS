<?php
    #Determinar el tipo de triángulo. Haz un programa que pida la longitud de
    #los tres lados de un triángulo y determine si es triángulo equilátero, isósceles
    #o escaleno
    #Pablo Téllez Del Saz

    $lado1 = readline("Introduce la longitud del primer lado: ");
    $lado2 = readline("Introduce la longitud del segundo lado: ");
    $lado3 = readline("Introduce la longitud del tercer lado: ");

    $lado1 = intval($lado1);
    $lado2 = intval($lado2);
    $lado3 = intval($lado3);

    if ( $lado1 == $lado2 && $lado2 == $lado3) {
        echo "Es un triángulo equilátero\n";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3){
        echo "Es un triángulo isósceles\n";
    } else {
        echo "Es un triángulo escaleno\n";
    }
?>