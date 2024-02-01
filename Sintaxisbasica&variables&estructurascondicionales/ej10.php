<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<table border="1">
    <tr>
        <th>Inglés</th>
        <th>Español</th>
    </tr>
    <?php

        #Escribe un programa que muestre por pantalla 10 palabras en inglés junto
        #a su correspondiente traducción al castellano. Las palabras deben estar
        #distribuidas en dos columnas. Utiliza la etiqueta <table> de HTML
        #Pablo Téllez Del Saz

        $palabras = array(
            "Hello" => "Hola",
            "Goodbye" => "Adiós",
            "Cat" => "Gato",
            "Dog" => "Perro",
            "Book" => "Libro",
            "Watermelon" => "Sandía",
            "Sun" => "Sol",
            "Moon" => "Luna",
            "Computer" => "Computadora",
            "Friend" => "Amigo"
        );

        foreach ($palabras as $ingles => $espanol) {
            echo "<tr><td>$ingles</td><td>$espanol</td></tr>";
        }
    ?>
</table>
</body>
</html>