<?php

    function manejador_errores_personalizado($excepcion){
        echo "Excepción capturada: " .$excepcion->getMessage();
    }

    set_exception_handler("manejador_errores_personalizado");

    //No hay necesidad de usar try catch
    //Ejemplo 1

    //Isando Finlally

echo "<br/>";
    
try {
    throw new Exception("Excepcion provocada");
} finally {
    echo"Esta linea se ejecuta siempre";
}