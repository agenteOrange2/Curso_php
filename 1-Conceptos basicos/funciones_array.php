<?php
$bandas = ['Linkin park', 'Megadeth','Metallica','Korn'];
$numeros = ['1','6','3','10','0'];
//Ordenar el array asort
asort($bandas);
sort($numeros); // ordenado

var_dump($bandas);
echo "<br/>";
echo "<br/>";
//Array de numeros
var_dump($numeros);


//Añadir elementos array
$bandas[] = "Part Time";
array_push($bandas, "Interpol");
echo "<br/>";
echo "<br/>";
//var_dump($bandas);


//Eliminar elementos array
array_pop($bandas);
unset($bandas[1]);
echo "<br/>";

///Aleatorio
$indice = array_rand($bandas);
echo $bandas[$indice];
echo "<br/>";


//Dar la vuelta

var_dump(array_reverse($numeros));

echo "<br/>";
echo "<br/>";

//Buscar dentro de un array
$resultado = array_search('Metallica', $bandas);
var_dump($resultado);
echo "<br/>";
echo "<br/>";

//Contar numero de elementos
echo count($bandas);
echo "<br/>";

//tambien se puede poner 
echo sizeof($bandas);

echo"hola";