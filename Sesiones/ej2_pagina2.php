<?php

    # Escriba un programa que conste de dos páginas y que solicite una edad.
	#    ● En la primera página se solicita una edad entre 18 y 130 años.
	#    ● La segunda página comprueba si se ha escrito un número entero entre 18 y 130.
	#	    ○ Si se ha escrito un número entero entre 18 y 130, lo muestra.
	#	    ○ Si la edad se deja vacía, si no se escribe un número o si se escribe un
	#	      número que no esté comprendido entre 18 y 130, vuelve automáticamente a
	#	      la primera página, mostrando el aviso correspondiente.
    #Pablo Téllez Del Saz
	
    session_start();

    $edad = isset($_SESSION['edad']) ? $_SESSION['edad'] : null;

    if (!isset($edad) || !is_numeric($edad) || $edad < 18 || $edad > 130) {
        header("Location: ej2_pagina1.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php if (!empty($edad)): ?>
        <p>Edad: <?php echo htmlentities($edad); ?></p>
    <?php else: ?>
        <p>La edad no es válida. Vuelve a la <a href="ej2_pagina1.php">primera página</a>.</p>
    <?php endif; ?>
</body>
</html>
