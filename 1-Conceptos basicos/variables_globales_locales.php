<?php
/*
Variables locales: Son las que se definen dentro de una funcion y no pueden ser usadas fuera
de la funcion, solo estan disponibles dentro. A no ser que hagamos un return

Variables GlobaleS: Son las que se declaran fuera de una funcion y estan disponibles dentro 
y fuera de las funciones.
*/


//Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;


function helloFriend(){
    //En php no se puede hacer esto, se debe declarar la frase dentro de la funcion y se usa global
    global $frase;
    echo "<h3>$frase</h3>";

    $year = 2022;
    echo "<h3>$year</h3>";

    //La unica forma de utilizar la variable $year fuera es con un return
    return $year;
}
//y se coloca echo
echo helloFriend();


//Si quiero declarar la variable $year fuera de la funcion tira error
//$year //tira error



echo "<br/>";

function buenosDias(){
    return "<h1>Hola! buenos dias</h1>";
}

function buenasTardes(){
    return "<h1>Que tal la tarde</h1>";
}

function buenasNoches(){
    return "<h1>Que descanses</h1>";
}


//$horario = "buenosDias";
//Otra forma
//$horario = "Dias";
//Por metodo GET

$horario = $_GET['horario'];


//echo $horario();
//otra forma
$miFuncion = "buenas".$horario; //"buenos /buenas/ tiene que tener  "
echo $miFuncion();