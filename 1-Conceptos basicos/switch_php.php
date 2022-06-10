<?php


echo "<br />";




// Ejercicio 1: día de la semana
/* 
1-Domingo
2-Lunes
3-Martes
4-Miércoles
5-Jueves
6-Viernes
7-Sábado
*/


$numeroDia = 5;
switch ($numeroDia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Lunes";
         break;
    case 3:
        echo "Martes";
        break;
    case 4:
        echo "Miercoles";
        break;
    case 5:
        echo "Jueves";
        break;
    case 6:
        echo "Viernes";
        break;
    case 7:
        echo "Sabado";
        break;
    default:
        echo "Numero invalido";

        break;
}


echo "<br />";


//Ejercicio 2: Numero par e impar
//Utilizar el modulo (%)

$numeroIngresado = 13;
$resultado = $numeroIngresado % 2;

switch ($resultado) {
    case 1:
        echo "Numero Impar";
        break;
    case 0:
        echo "Numero Par";
        break;
}
