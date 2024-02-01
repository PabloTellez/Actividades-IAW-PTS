<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php

    #Escribe un programa que utilice las variables $x y $y. Asignales los
    #valores 144 y 999 respectivamente. A continuación, muestra por pantalla el
    #valor de cada variable, la suma, la resta, la división y la multiplicación.
    #Pablo Téllez Del Saz

        $x = 999;
        $y = 144;

        echo "El valor de x es: $x <br>";
        echo "El valor de y es: $y <br><br>";
        $sum = $x + $y;
        $rest = $x - $y;
        $mult = $x * $y;
        $divi = ($y != 0) ? $x / $y : "No es posible dividir por cero";

        echo "Suma: $sum <br>";
        echo "Resta: $rest <br>";
        echo "Multiplicación: $mult <br>";
        echo "División: $divi <br>";

    ?>
</body>
</html>