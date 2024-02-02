<?php

    # Escriba un programa que conste de dos páginas y que solicite un nombre.
	#    ● En la primera página se solicita el nombre.
	#     ● La segunda página comprueba si se ha escrito algo de texto.
	#	    ○ Si se ha escrito algo de texto, lo muestra.
	#	    ○ Si no se ha escrito ningún texto, vuelve automáticamente a la primera página.
    #Pablo Téllez Del Saz
    
    session_start();

	$nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] :""; //Isset: verifica si una variable está definida y no es nula

	if (empty($nombre)) {//La funcion Empty se utiliza para ver si una variable esta vacia
		header("Location: ej1 página1.php");
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
	<p>Nombre: <?php echo $nombre ?></p>
</body>
</html>