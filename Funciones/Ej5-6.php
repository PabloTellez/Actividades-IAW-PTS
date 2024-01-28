<?
include 'funciones2.php';

$marray = arrays(10);
echo "El array es: " . implode(", ", $marray) . "<br>";
echo "Min: " . min_array($marray) . "<br>";
echo "Max: " . max_array($marray) . "<br>";
?>