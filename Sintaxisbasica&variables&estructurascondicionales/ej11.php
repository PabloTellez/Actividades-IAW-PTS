<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<table border="1">
    <tr>
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>
    <?php

        #Escribe un programa que muestre tu horario de clase mediante una tabla.
        #Intercala código HTML y PHP para familiarizarte con éste último.
        #Pablo Téllez Del Saz

        $horario = [
            "8:15 - 9:15" => ["SRI", "ASO", "HLC", "ASO", "ASGBD"],
            "9:15 - 10:15" => ["SRI", "ASO", "HLC", "ASO", "ASGBD"],
            "10:15 - 11:15" => ["ASO", "SAD", "HLC", "EIEM", "SAD"],
            "11:45 - 12:45" => ["ASO", "SAD", "ASGBD", "EIEM", "SAD"],
            "12:45 - 13:45" => ["EIEM", "SRI", "IAW", "IAW", "SRI"],
            "13:45 - 14:45" => ["EIEM", "SRI", "IAW", "IAW", "SRI"],
        ];
    
        // Iterar sobre el horario e imprimir las asignaturas
        foreach ($horario as $hora => $asignaturas) {
            echo "<tr>";
            echo "<td>$hora</td>";
            foreach ($asignaturas as $asignatura) {
                echo "<td>$asignatura</td>";
            }
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>