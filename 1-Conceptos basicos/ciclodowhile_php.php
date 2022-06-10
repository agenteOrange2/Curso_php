<?php


//Similar a bucle while
//La condicion se evalua al final de bloque de estructuras y el codigo solo se ejeecutara una vez y comprobar algo
/* 
do{
    //Código que se ejecuta
}while(condición);
 */

echo "<br />";

//Ejercicio
/*
$max = 50;
$num = 1;

//Con el do while por lo menos se ejecuta una vez
do {
    // echo $num;
    // echo "<br />";
    // $num *= 2;
} while ($num <= $max);

//Tener cuidado conla condición que siempre sea true o verdadera por que se crea un Ciclo o Loop infinito
do {
    echo $num;
    echo$num++;
    echo "<br />";
    
} while (true);
echo "<br />";
echo "<br />";

*/
//Ejemplo
$edad = 18;
$contador = 1;
do {
    echo "Tienes acceso al local privado $contador <br/>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);