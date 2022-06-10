<?php

/*Hacer un programa que muestre todos los numeros entre dos numeros IMPARES que nos lleguen por la url
usando el $_GET */
//isset es para saber si existen

//comprobamos que nos llegen los parametros por la ulr
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    
    //Inicialiciamos algunas variables que nos lleguen por la url
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    //Comprobamos que el numero primero sea menor al numero segundo
    if ($numero1 < $numero2) {
        //Hacemos el bucle y recorremos desde el numero uno al numero dos
        for ($i=$numero1; $i <= $numero2 ; $i++) { 

            if ($i%2 != 0) {
                # code...
                //Se muestra contenido
                echo "<h4>$i es Impar</h4>";
            }else{
                echo "<h4>$i es Par</h4>";
                
            }
        }
    }else{
        echo "<h1>El numero 1 debe ser menor al numero 2</h1>";
    }
}else{
    echo"<h2>Los parametros get no existen</h2>";
}



