<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="ej4.php" method="get">
        <label for="num">Escoge una opción y opera: </label>
        <input type="text" name="operando1">
        <select name="operador" id="signo">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="text" name="operando2">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
 $operando1 = $_GET['operando1'];
 $operando2 = $_GET['operando2'];
 $operador = $_GET['operador'];
 
 if($operador == "+"){
  $solucion = $operando1 + $operando2;
 }else if($operador == "-"){
  $solucion = $operando1 - $operando2;
 }else if($operador == "*"){
  $solucion = $operando1 * $operando2;
 }else if($operador == "/"){
  $solucion = $operando1 / $operando2;
 }
 echo "El resultado es: ".$solucion;
?>