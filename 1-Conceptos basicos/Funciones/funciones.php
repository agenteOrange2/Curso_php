<?php
/*Funciones:
Una función es un conjunto de instrucciones agrupadas bajo un nombre concreto y que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos.

//Estructura

funcion miFuncion($parametro){
  //Bloque / Conjunto de instrucciones

}

miFuncion($mi_parametro); //Se manda a llamar la funcion
*/


//Ejemplo 1
/*
function muestraNombres(){
  echo "Nombre: Elliot ALderson <br/>";
  echo "Nombre: Tyrell Wellick <br/>";
  echo "Nombre: Darlene ALderson <br/>";
  echo "<hr>";

}

muestraNombres();
*/
//Ejemplo 2 tabla de multiplicar

function tabla($numero){
  echo "<h3>Tabla de multiplicar del número: $numero<h3>";

  //Se crea un for
  for ($i=0; $i <= 10; $i++) { 
    
    $operacion = $numero*$i;

    echo "$numero x $i = $operacion <br/>";
  }
}

//Para comprobar que llegue por get
/*if (isset($_GET['numero'])) {
  tabla($_GET['numero']);
}else{
  echo"No hay numero para sacar la tabla";
}*/

/*//Para imprimir la tabla del 1 al 10
for ($i=0; $i <= 10 ; $i++) { 
  tabla($i);
}*/


//Pasar varios parametros a una funcion 

//Ejercicio 3
/*
function calculadora($numero1, $numero2, $negrita = false){

  //Conjunto de instrucciones a ejecutar
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $multiplicacion = $numero1 * $numero2;
  $division = $numero1 / $numero2;

  if ($negrita) {
    echo"<h1>";
  }else{
    echo "<h4>";
  }


  echo "Suma: $suma </br>";
  echo "Resta: $resta </br>";
  echo "Multiplicacion: $multiplicacion </br>";
  echo "Division: $division </br>";
  echo "<hr>";

  //En el caso de que se este imprimiendo algo un booleano se utiliza
  return true;
}

calculadora(10, 30, false); //Importante si le coloque dos paramatros respetar ello
calculadora(5, 15, true);
calculadora(9, 30, false );


function devuelveElNombre($nombre){
  return "El nombre es: $nombre";
}
 echo devuelveElNombre("Elliot Alderson");


*/
 //Estructurado mejor

 
function calculadora($numero1, $numero2, $negrita = false){

  //Conjunto de instrucciones a ejecutar
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $multiplicacion = $numero1 * $numero2;
  $division = $numero1 / $numero2;

  $cadena_texto = "";

  if ($cadena_texto) {
      $cadena_texto .= "<h1>";
     }


  $cadena_texto .= "Suma: $suma </br>";
  $cadena_texto .= "Resta: $resta </br>";
  $cadena_texto .= "Multiplicacion: $multiplicacion </br>";
  $cadena_texto .= "Division: $division </br>";
  $cadena_texto .= "<hr>";

  if ($cadena_texto) {
    $cadena_texto .= "<h1>";
   }

   $cadena_texto .= "<h1>";

  //En el caso de que se este imprimiendo algo un booleano se utiliza
  return $cadena_texto;
}

echo calculadora(10, 30, false); //Importante si le coloque dos paramatros respetar ello
echo calculadora(5, 15, true);
echo calculadora(9, 30, false );

