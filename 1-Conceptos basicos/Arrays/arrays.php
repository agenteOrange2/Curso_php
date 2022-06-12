<?php

/*Array es una coleccion de datos o conjunto de datos/valores, bajo un unico nombre.
Para acceder a esos valores podemos usar un indice numero o alfanumerico. */


$pelicula = "Iron Man";
$peliculas = array('Batman', 'Iron Man', 'Spiderman','Harry Potter');
//Array asociativo
$personas = array(
  'nombre' => 'Elliot',
  'apellidos' => 'Alderson',
  'sociedad' => 'Fsociety'
);
//Para ingresar al array se escribe el nombre
//var_dump($personas['sociedad']);
//por metodo get
var_dump($_GET);
echo $personas['apellidos'];


//var_dump($peliculas[3]);


//Otra forma de declarar array
$bandas = ['Linkin park', 'Megadeth','Metallica','Korn'];

//var_dump($bandas[1]);
/*
echo $peliculas[0];
echo "<br/>";
echo $bandas[2];
*/

//Para reccorrer un array uno por uno con bucle for
echo "<h2>Peliculas</h2>";
echo "<ul>";
//se utiliza count para ver el tamaño del array
for ($i=0; $i < count($peliculas); $i++) { 
  echo "<li>".$peliculas[$i]."</li>";
}

echo "</ul>";


echo "<br/>";

echo "<h2>Bandas</h2>";
echo "<ul>";
//Otra forma pero con bucle foreach

foreach($bandas as $banda){
  echo  "<li>". $banda. "</li>";
}

echo "</ul>";

//Array multidimensionales 

$contactos = array (
  array(
    'nombre' => 'Elliot',
    'email' => 'Alderson@fsociety.com',
  ),
  array(
    'nombre' => 'Darlene',
    'email' => 'Alderson@fsociety.com',
  ),
  array(
    'nombre' => 'Tyrell',
    'email' => 'Wellic@evilcorp.com',
  ),
);

//var_dump($contactos);

//Para acceder a indice 2
echo $contactos[2]['nombre']; //[para el primer array][para el valor dentro del array]