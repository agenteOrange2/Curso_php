<?php
    //date(format, timestamp)
    //Documentación: https://www.php.net/manual/es/function.date.php

    echo "<br />";
    //Ejercicio 1: imprimir fecha actual
    $fechaActual = date("d-m-y");
    echo $fechaActual;
    echo "<br />";
    echo "<br />";
    //Ejercicio 2:
    $fechaActual = date("D-M-Y");
    echo $fechaActual;
    echo "<br />";

    echo "<br />";

    //Ejercicio 3: con hora
    $fechaActual = date("y-m-d h:i:s:a");
    echo $fechaActual;
    echo "<br />";

    echo "<br />";
    //Ejercicio 4: con hora
    $fechaActual = date("Y-M-D h:i:s:a");
    echo $fechaActual;

    echo "<br />";
    
    echo "<br />";
    //Ejercicio 5: obtener el tiempo en milisegundos
    $tiempoMilisegundos = time() + 1000;
    echo $tiempoMilisegundos;

    echo "<br />";
    echo "<br />";
    //Ejercicio 6: incrementar tiempo en milisegundos
    $tiempo = time() + 1000;
    echo "Fecha actual: " . date("y-m-d h:i:s:a", $tiempo);


    echo "<br />";
    echo "<br />";

    //Ejercicio 7: Leer el timestamp
    $fechaCompleta = getdate();
    var_dump($fechaCompleta);
    echo "<br />";
    echo "<br />";


    
    foreach ($fechaCompleta as $key => $value) {
        echo "$key => $value";
        echo "<br />";
    }

    echo "<br />";
    //Accediendo al día de la semana
    echo "Día de la semana: " . $fechaCompleta["weekday"];

    //Accediendo al día del mes
    echo "<br />";
    echo "<br />";

    echo "Día del mes: " . $fechaCompleta["mday"];

    echo "<br />";

    echo "<br />";

    //Opción 2 mas corta del día del mes
    echo "Día del mes: " . getdate()["mday"];

    echo "<br />";

    echo "<br />";
    //Funciones para trabajar con fechas
    echo date_create("now")->format("Y-m-d H:i:s");
    echo "<br />";

    echo "<br />";
    //Sumar 1 día a la fecha
    echo date_create("+1 day")->format("Y-m-d H:i:s");
    echo "<br />";

    echo "<br />";
    //Restar 1 día a la fecha
    echo date_create("-1 day")->format("Y-m-d H:i:s");
    echo "<br />";
    echo "<br />";

    //Convertir un string a fecha
    $string = "2022-05-14 12:13:00";
    $convertir = strtotime($string);
    echo date("d/M/yy H:i:s", $convertir);

    echo "<br />";
    //Obtener el tiempo por zona
    //1-Obtener zona actual
    echo date_default_timezone_get();

    //Formatear la fecha
    echo date("d/m/Y h:i:s a");

    echo "<br />";
    //Configurar la fecha por defecto
    date_default_timezone_set("America/Chihuahua");
    echo "<br />";
    echo date_default_timezone_get();
    echo "<br />";
    //Formatear la fecha
    echo date("d/m/Y H:i:s a");


    echo "<br />";
    echo "<br />";

    //Mostrar la diferencia de tiempo
    $fechaA = time();
    /*sleep(5);*/ // sleep tardara lo que se le asigne en este caso 5 seg
    $fechaB = time();
    $diferencia = ($fechaB - $fechaA) / 60;
    echo $diferencia;


    echo "<br />";

    //Obtener la diferencia de dos fechas
    $fechaInicial = date_create("2022-05-14 12:23:05");

    $fechaFinal = date_create("2022-05-30 00:23:20");

    $diferenciaFechas = date_diff($fechaFinal, $fechaInicial);

    echo "<br />";
    print_r($diferenciaFechas);


    echo "<br />";
    echo "<br />";

        //Crear una fecha con mktime
    //La función mktime() retorna el timestap Unix para una fecha.La fecha timestamp contiene el  la fecha Unix (January 1 1970 00:00:00 GMT)y la fecha determinada.

    //Crear fecha a partir de números enteros
    $d = mktime(10, 15, 58, 8, 12, 2015);
    echo "Fecha creación: " . date("Y-m-d h:i:sa", $d);
    
    