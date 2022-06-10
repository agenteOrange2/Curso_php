<?php 

/*   Else if nos permite evaluar varias condiciones y se cumplirá una de ellas
    La sentencia elseif es ejecutada solamente si la expresión if precedente y cualquiera de las expresiones elseif precedentes son evaluadas como FALSE, y la expresión elseif actual se evalúa como TRUE. 
*/


echo "<br />";

// Ejercicio 1

$num1 = 8;
$num2 = 10;

/*
if($num1 > $num2){
    echo "$num1 es Mayor que $num2";
}else if($num1 == $num2){
    echo "$num1 es igual que $num2";
}else if($num1 == $num2){

}else{
    echo "$num1 es Menor que $num2";
}*/


// Ejercicio 2
//Sintaxis 2 sin llaves

if($num1 > $num2)
    echo "$num1 es Mayor que $num2";
else if($num1 == $num2)
    echo "$num1 es igual que $num2";
else if($num1 == $num2)
    echo "$num1 es Menor que $num2";
else 
    echo "$num1 es Menor que $num2";

    echo "<br />";

// Ejercicio 2

$a = true;
$b = true;
$c = true;

if($a == true){
    echo "a: $a";
}elseif($b == true){
    echo "b: $b";
}else{
    echo "c: $c";
}

echo "<br />";


//Con if normales
if($a == true){
    echo "a: $a";
 }

 if($b == true){
    echo "b: $b";
 }

 if($c == true){
    echo "c: $c";
 }