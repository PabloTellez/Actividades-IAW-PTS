<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Validaciones Pablo Téllez</title>
</head>
<body>

<?php
// Función para validar el nombre
function validarNombre($nombre) {
    return preg_match("/^[a-zA-Z]+$/", $nombre);
}

// Función para validar el número de teléfono
function validarTelefono($telefono) {
    return preg_match("/^[6-7]\d{8}$/", $telefono);
}

// Función para validar la dirección de correo
function validarCorreo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

// Función para mostrar los datos
function mostrarDatos($nombre, $telefono, $correo) {
    echo "<h2>Datos Validados:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Teléfono: $telefono</p>";
    echo "<p>Correo: $correo</p>";
}

// Inicializar variables
$nombre = $telefono = $correo = "";
$errores = array();

// Procesar el formulario cuando se envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar el nombre
    $nombre = $_POST["nombre"];
    if (!validarNombre($nombre)) {
        $errores["nombre"] = "El nombre solo debe contener letras.";
    }

    // Validar el número de teléfono
    $telefono = $_POST["telefono"];
    if (!validarTelefono($telefono)) {
        $errores["telefono"] = "El número de teléfono debe tener 9 dígitos y comenzar por 6 o 7.";
    }

    // Validar la dirección de correo
    $correo = $_POST["correo"];
    if (!validarCorreo($correo)) {
        $errores["correo"] = "La dirección de correo no es válida.";
    }

    // Mostrar los datos si no hay errores
    if (empty($errores)) {
        mostrarDatos($nombre, $telefono, $correo);
    }
}
?>

<h1>Formulario de Validación</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
    <?php if (!empty($errores["nombre"])) echo "<span style='color:red;'>{$errores["nombre"]}</span><br>"; ?>

    Teléfono: <input type="text" name="telefono" value="<?php echo $telefono; ?>"><br>
    <?php if (!empty($errores["telefono"])) echo "<span style='color:red;'>{$errores["telefono"]}</span><br>"; ?>


    <input type="submit" value="Enviar">
</form>
</body>
</html>
