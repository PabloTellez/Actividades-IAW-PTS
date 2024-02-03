<?php

    #Crea un programa en PHP que guarde en sesión 2 variables (a y b) y se muestre el
    #valor de cada una de las variables junto con un desplegable con las siguientes
    #opciones:
	#    a. incrementar a, sume 1 a la variable a
	#    b. decrementar a, reste 1 a la variable a
	#    c. incrementar b, sume 1 a la variable b
	#    d. decrementar b, reste 1 a la variable b
	#    e. borrar sesión, que destruya la sesión
    #Pablo Téllez Del Saz

    if (! isset($_SESSION['a'])){
        $_SESSION['a'] = 0;
    }

    if (! isset($_SESSION['b'])){
        $_SESSION['b'] = 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        if (isset($_POST['accion'])) {
            switch ($_POST['accion']) {
                case 'incrementar_a':
                    $_SESSION['a']++;
                    break;
                case 'decrementar_a':
                    $_SESSION['a']--;
                    break;
                case 'incrementar_b':
                    $_SESSION['b']++;
                    break;
                case 'decrementar_b':
                    $_SESSION['b']--;
                    break;
                case 'borrar_sesion':
                    session_destroy();
                    break;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Valores de las variables:</h1>
    <p>Variable 'a': <?php echo $_SESSION['a']; ?></p>
    <p>Variable 'b': <?php echo $_SESSION['b']; ?></p>

    <h2>Acciones:</h2>
    <form method="post">
        <select name="accion">
            <option value="incrementar_a">Incrementar a</option>
            <option value="decrementar_a">Decrementar a</option>
            <option value="incrementar_b">Incrementar b</option>
            <option value="decrementar_b">Decrementar b</option>
            <option value="borrar_sesion">Borrar sesión</option>
        </select>
        <input type="submit" value="Ejecutar">
    </form>
</body>
</html>