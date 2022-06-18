<?php 

/*Ejercicio 3. Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto minusculas y mostrarlo en mayusculas y negritas */



$texto = "";

if (empty($texto)) {
  $texto = "Hola yo soy el relleno de la variable texto";
  $textoMAYUS = strtoupper($texto);

  echo "<strong>$textoMAYUS</strong>";
}else{
  echo "la variable tiene este contenido dentro ". $texto;
}