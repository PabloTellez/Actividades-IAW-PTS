<?php

    # Escriba un programa que conste de dos páginas y que solicite un nombre.
	#    ● En la primera página se solicita el nombre.
	#     ● La segunda página comprueba si se ha escrito algo de texto.
	#	    ○ Si se ha escrito algo de texto, lo muestra.
	#	    ○ Si no se ha escrito ningún texto, vuelve automáticamente a la primera página.
    #Pablo Téllez Del Saz
    
    session_start();
	if ($_SERVER['REQUEST_METHOD'] == "POST"){ //Aqui estamos verificando si la solicitud es de tipo POST
		$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : ''; 

		$_SESSION['nombre'] = $nombre;

		header("Location: ej1 página2.php");
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
	<form action="" method="post">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" id="nombre" required>
		<button type="submit">Enviar</button>
	</form>
</body>
</html>