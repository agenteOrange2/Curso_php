<?php


//Escribir un script que nos muestre en pantalla de todos los numeros que hay del 1 al 100 



$numero = 0;

for ($i=0; $i <= 100; $i++) { 
    
    if ($i%2 == 0) {
        echo $i."<br/>";
    }
    
}