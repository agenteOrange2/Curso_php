<?php

    /*
    -Lista archivos
    -Validar achivos en carpeta
    -Validar si el nombre es un archivo o carpeta
    -Buscar coincidencias de archivo con un patrón
    -Crear un directorio
    -Copiar archivos entre directorios 
     */

     //Ejemplo 1: Listar todos los archivos en un directorio, NO ES SENSIBE A LAS MAÝUSCULAS
     $ruta = "Carpeta5";
     $resultado = scandir($ruta);
     /* var_dump($resultado); */

     echo "<br />";
     //Imprimi los archivos sin puntos
     foreach ($resultado as $archivo) {
         if($archivo != "." && $archivo != ".."){
            echo $archivo;
            echo "<br />";
         }
     }


     echo "<br />";
     //Remove (.) y (..)
     //(array_diff para separar )
     $archivos = array_diff($resultado, [".", ".."]);
     var_dump($archivos);


     
     echo "<br />";
     //Ejemplo 2: validar archivos en carpetas (Sin los puntos)
     $ruta = "Carpeta6";
     $resultado = scandir($ruta);

     foreach ($resultado as $archivo) {
        if(is_file($ruta . "/" .$archivo)){
           echo $archivo;
           echo "<br />";
        }
    }


    echo "<br />";
    //Buscar coincidencias de archivo en un patrón
    //Glob para buscar una ubicacion de archivos
    $resultado = glob("*.txt");
    var_dump($resultado);


    //Crear un directorio
    //Si no existe carpeta se usa la siguiente linea
    if (!file_exists("carpeta_prueba3")) {
        mkdir("carpeta_prueba3");
    }


    //Copiar archivos
    copy("Carpeta1/archivo1.txt", "carpeta_prueba3/archivo1.txt");

    echo "<br />";

    echo "<br />";

    //Verificar  si una carpeta o archivo existe
    $archivo = "test5.txt";

    if (file_exists($archivo)) {
        echo "El archivo o directorio existe";
        echo "<br />";

        //Validar si es un directorio
        if (is_dir($archivo)) {
            echo "Es un directorio";
            echo "<br />";
        }else{
            echo "Es un archivo";
            echo "<br />";
        }

        //Copiar el archivo
         copy($archivo, "carpeta_prueba3/$archivo");

        //Renombrar el archivo
         rename($archivo, "archivo_test5_renombrado.txt"); 

        //Borrar un archivo
        unlink("archivo_test5_renombrado.txt");

    }else{
        echo "El archivo o directorio NO existe";
        echo "<br />";
       /*  die("No hay archivos"); */
    }



    echo "<br />";

    
    //Abrir, leer contenido de un archivo y cerrarlo

    //Modos de archivo
    //r---read(lectura)
    //w---write(escritura)
    //a---append(adjuntar)

    //Método 1
    $nombreArchivo = "contenido15.txt";
    //Leer el contenido
    $contenido = file_get_contents($nombreArchivo);

    //Imprimir el contenido del archivo
    echo "<br />";
    echo $contenido;
    echo "<br />";
    echo "<br />";




    
    //Método 2:
    //Abir archivo
    $manejaArchivo = fopen($nombreArchivo, "r");
    $tamanioArchivo = filesize($nombreArchivo);
    echo "<br />";

    //Leer el contenido
    $contenido2 = fread($manejaArchivo, $tamanioArchivo);
    
    //Mostrar contenido
    echo $contenido2;

    //Cerrar archivo
    fclose($manejaArchivo);


    //Escritura de archivo
    $manejaArchivo2 = fopen($nombreArchivo, "w") or die("Imposible escribir en archivo");

    fwrite($manejaArchivo2, "GoodBye Friend"); //Permite escribir en ese archivo
    fclose($manejaArchivo2);

    echo "<br />";

    //Leer archivo de configuración como un array
    $configuracion = parse_ini_file("ejemplo.ini");
    print_r($configuracion);

    echo "<br />";

    //Para acceder a cada uno de los valores se utiliza un forEach
    foreach ($configuracion as $key => $value) {
        echo $key . " => " .$value;
        echo "<br />";
    }
    echo "<br />";
    echo "<br />";

    echo $configuracion["tag2"];
    echo "<br />"; 