<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php

        #Realiza un conversor de euros a dólares. La cantidad en euros que se
        #quiere convertir deberá estar almacenada en una variable
        #Pablo Téllez Del Saz

        $cantidadEuros = 50;
        $tasaConversion = 1.09;
        $cantidadDolares = $cantidadEuros * $tasaConversion;
    ?>
    <p>La cantidad en euros es: <?php echo $cantidadEuros; ?></p>
    <p>La cantidad en dólares es: <?php echo $cantidadDolares; ?></p>
</body>
</html>