<?php

/*Ejercicio 3
Escribir un programa que imprima por pantalla los cuadrados (un numero multiplicado por si mismo )
de los 40 primeros numeros naturales
PD: Utilizar bucle while
*/

$numero = 0;
while ($numero <= 40) {
    
    $cuadrado = $numero*$numero;
    echo "<h2>el cuadrado de $numero es: $cuadrado</h2>";

    //se actualiza
    $numero++;
}

//Con bucle for

for ($numero = 0; $numero <= 40; $numero++) {
    
    $cuadrado = $numero*$numero;
    echo "<h2>el cuadrado de $numero es: $cuadrado</h2>";
}