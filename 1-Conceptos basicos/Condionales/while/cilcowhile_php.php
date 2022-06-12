<?php

/* Estructura de control que itera o repite la ejecucion de una serie de instrucciones 
tantas veces como sea necesaria, en base a una condicion */
/* 
    while(condición){
        //El código que se ejecuta
    }
*/

// echo "<br/>";

// //Ejercicio 1: Imprimir numeros del 1 al 30
// $numero = 0;

// while ($numero <= 30) {
//     echo $numero;
//     echo "<br/>";

//     //Muy importante el incrementador
//     $numero ++; //si no se coloca el incrementador nunca se aumentara y se quedara cargando infinitamente
// }

// echo "<br/>";

/*
//Ejercicio 2: Numeros pares del 1 al 20

$numero2 = 1;

while ($numero2  <= 20) {
    $resultado = $numero2 % 2;
    if ($resultado == 0) {
        echo "Numero par: $numero2";
        echo "<br/>";
    }
    $numero2++;
}

*/

//Ejercicio 3

echo "<br/>";
echo "<br/>";

$numero3 = 0;
//Si el numero es menor igual que cero comienza el contador de 0 a 100
while ($numero3 <= 100) {
    echo $numero3;
    //Si numero3 es diferente de 100, imprimes una coma para separar los numeros
    if ($numero3 != 100) {
        echo ", ";
    }
    //Se incrementa el numero
    $numero3++;
}


echo "<br/>";
echo "<br/>";

    //Isset su funcion es para verificar que haya una variable y dentro de los parentesis lo que hay
if (isset($_GET['numero'])) {
    //Para castear un variable significa cambiar el tipo entre()
    $numero3 = (int) $_GET['numero'];
}else{
    $numero3 = 1;
}

//var_dump($numero3);
echo "<br/>";
echo "<br/>";
echo "<h1> Tabla de multiplicar del numero $numero3 </h1>";

$contador = 1;

while ($contador <= 10) {
    echo "$numero3 x $contador = ".($numero3*$contador)."<br/>";
    $contador++;
}