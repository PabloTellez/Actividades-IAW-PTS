<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php

        #Realiza un conversor de dólares a euros. La cantidad en dólares que se
        #quiere convertir deberá estar almacenada en una variable.
        #Pablo Téllez Del Saz

        $cantidadDolares = 50;
        $tasaConversion = 0.85;
        $cantidadEuros = $cantidadDolares * $tasaConversion;
    ?>
    <p>La cantidad en Dólares es: <?php echo $cantidadDolares; ?></p>
    <p>La cantidad en Euros es: <?php echo $cantidadEuros; ?></p>
</body>
</html>