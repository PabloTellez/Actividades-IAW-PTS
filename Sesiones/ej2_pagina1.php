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
	$mensaje = '';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $edad = isset($_POST['edad']) ? $_POST['edad'] : null;

		if (is_numeric($edad) && $edad >= 18 && $edad <= 130){
            $_SESSION['edad'] = $edad;
            header("Location: ej2_pagina2.php");
            exit();
        } else {
            $mensaje = "Ingrese una edad válida entre 18 y 130 años";
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
	<form action="" method="post">
		<h1>Ingrese una edad entre 18 y 130 años</h1>
		<label for="edad">Edad:</label>
		<input type="number" name="edad" id="edad" required>
		<button type="submit">Enviar</button>
	</form>
	<p style="color: red;"> <?php echo $mensaje ?></p>
</body>
</html>