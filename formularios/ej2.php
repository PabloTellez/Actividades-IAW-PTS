<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    Introduce un número:
    <form action="ej2.php" method="get">
        <input type="number" name="num"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_GET["num"])) {
        $num = $_GET["num"];
        $diff = $num * 1.09;
        echo $diff;
    }
    ?>
</body>
</html>
