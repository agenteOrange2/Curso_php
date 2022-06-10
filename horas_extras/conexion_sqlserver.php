<?php
   
    //Configurar datos de acceso a la Base de datos
    //$host = "localhost";
    //$dbname = "HorasExtras";
/*    $dbuser = "sa";
    $userpass = "Contraseña123";
    
    $dsn = "sqlsrv:Server=KUIRAFRONTEND\SQLEXPRESS;Database=HorasExtras"; $dbuser; $userpass;
    
    try{
     //Crear conexión a postgress
     $conn = new PDO($dsn);
    
     //Mostrar mensaje si la conexión es correcta
     if($conn){
      // echo "Conectado a la base correctamente!"; 
     echo "\n";
     }
    }catch (PDOException $e){
     //Si hay error en la conexión mostrarlo
     echo $e->getMessage();
    }*/

        //Conectar a Mysql
    $con = mysqli_connect("localhost", "root", "", "crud_php_mysql");

    //Probar conexión
    if(mysqli_connect_errno()){
        echo "Fallo al conectarse a Mysql: "  .mysqli_connect_error();
    } /*else{
        echo "Conectado correctamente";
    }*/