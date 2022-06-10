<?php 

    //Incluir la conexion
    include_once __DIR__ . "/conexion_sqlite.php";

    //Mostrar registros

    $query = "SELECT * FROM registros";
    $stmt = $baseDatos->query($query);


    //Crear variable registros para ver en pantalla
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);


    //Mostrarle en pantalla
    var_dump($registros);