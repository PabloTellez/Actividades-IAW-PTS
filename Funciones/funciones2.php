<?php
function arrays($num) {
    $array = [];
    for ($i = 0; $i < $num; $i++) {
        $array[] = rand(0, 100);
    }
    return $array;
}

function min_array($array){
    return min($array);
}

function max_array($array){
    return max($array);
}
?>
