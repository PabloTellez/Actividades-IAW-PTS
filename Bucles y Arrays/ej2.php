<?php
    $num = readline("Introduce un numero para mostrar su tabla de multiplicar: ");
       
    echo "Tabla de multiplicar del $num: ";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado\n";
    }
?>