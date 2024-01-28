<?
include 'funciones1.php';
    echo "Números primos entre 1 y 1000:<br>";
    for ($i = 1; $i <= 1000; $i++) {
        if (esPrimo($i)) {
            echo $i . " ";
        }
    }
?>