<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    Introduce un número:
    <form action="ej3.php" method="get">
        <input type="number" name="num"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["num"])) {
        $num = $_GET["num"];
        $diff = $num * 0.85;
        echo "La cantidad de dólares a euros es: " . $diff . "€";
    }
    ?>
</body>
</html>