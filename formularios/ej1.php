<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    Introduce dos números:
    <form action="ej1.php" method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit" value="Enviar">
    </form>
    
    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        echo "El resultado es: " . $num1 * $num2;
    } else {
        echo "No has pasado los parametros";
    }
    ?>
</body>
</html>
