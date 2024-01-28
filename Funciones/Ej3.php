<?
include 'funciones1.php';
echo "Números capicúa entre 1 y 99999:<br>";
for ($i = 1; $i <= 99999; $i++) {
    if (esCapicua($i)) {
        echo $i . " ";
    }
}
?>