<?
include 'funciones1.php';

    $num = 13;
    if (esCapicua($num)) {
        echo "$num es capicúa.";
    } else {
        echo "$num no es capicúa.";
    }
?>
<br>
<?
    if (esPrimo($num)) {
        echo "$num es primo.";
    } else {
        echo "$num no es primo.";
    }
?>