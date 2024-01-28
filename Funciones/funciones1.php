<?php
    function esCapicua($numero) {
        $numeroInvertido = strrev($numero);
        return $numero == $numeroInvertido;
    }
    
    function esPrimo($numero) {
        if ($numero < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
?>