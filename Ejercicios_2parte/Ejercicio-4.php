<?php 

/* Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array, otra tipo string, otra int y otra booleana y que 
imprima un mensaje segeun el tipo de variable que sea */

$matriz = array("Hola mundo, 99");
$titulo = "Master en PHP";
$numero = 77;
$verdadero = true;

if (is_array($matriz)) {
  echo "<h1>EL array es una array</h1>";
}

if(is_string($titulo)){
  echo "<h2>$titulo</h2>";
}

if (is_integer($numero)) {
  echo "<h1>$numero</h1>";
}

if (is_bool($verdadero)) {
  echo "<h1>El booleano es verdadero</h1>";
}