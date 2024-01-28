<?php
    $nums_randoms = array();
    for ($i = 0; $i < 15; $i++) {
        $numero = rand (0,100);
        $nums_randoms[] = $numero;
    }

    echo "Numeros randoms: ";
    print_r($nums_randoms);

    $rotate_array = array();
    $aux = $nums_randoms[0]; 
    for ($i = 1; $i < 15; $i++) {
        $rotate_array[$i - 1] = $nums_randoms[$i];
    }
       
    $rotate_array[14] = $aux;

?>
       <br>
<?
    echo "Contenido del array rotado: " . implode(", ", $rotate_array);
?>