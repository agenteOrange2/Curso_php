<?php

//Ejercicio 1 if

$edad = 17;

/*
if($edad >= 18){
    echo "Puedo ingresar";
}*/

//
/*
if($edad >= 18){
    echo "Puede ingresar";
} else {
    echo "No Puede ingresar";
}

echo "<br/>";
*/

//Ejercicio 2 else

/* if($edad >= 18){
    echo "Puede ingresar";
} else {
    echo "No Puede ingresar";
} */

//Ejercicio 2 and && y OR ||
/*
$identificacion = true;
//if($edad >= 18 && $identificacion == true) { //Para que pueda ser verdad se deben cumplir las 2 sino se cumple se va directo al else
//if($edad >= 18 && $identificacion){ // sin el "=='
if($edad >= 18 || $identificacion){ //con que solo se cumpla una condicion es true
    echo "Puede ingresar";
}else{
    echo "No se puede ingresar";
}

echo "<br/>";
*/

//Ejercicio 4
// $nombreCompleto = "Tyrel Wellick";
// if(is_null($nombreCompleto)){
//     echo "Nombre no esta vacio";
// }else{
//     echo "Nombre esta vacio";
// }

// //Ejercicio 5
// $nombreCompleto = "";
// if($nombreCompleto != ""){
//     echo "Nombre no esta vacio";
// }else{
//     echo "Nombre esta vacio";
// }

//Ejercicio 6
        ///Empty
// $nombreCompleto = "";
// if(!empty($nombreCompleto)){
//     echo "Nombre no esta vacio";        //Mejor forma para evaluar
// }else{
//     echo "Nombre esta vacio";
// }


//Ejercicio 7 - Sintaxis sin llaves, solo una linea
// $nombreCompleto = "";
// if($nombreCompleto != "")
//     echo "Nombre no esta vacio";
// else
//     echo "Nombre esta vacio";


//Ejercicio 8 - Validar tipo de dato
$edad2 = 24;

if($edad2 == "24"){
    echo "Ingresa";
}else{
    echo "No Ingresa";
}