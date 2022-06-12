<?php 

    //Conectar a Mysql
    $con = mysqli_connect("localhost", "root", "", "crud_php_mysql");

    //Probar conexión
    if(mysqli_connect_errno()){
        echo "Fallo al conectarse a Mysql: "  .mysqli_connect_error();
    } /*else{
        echo "Conectado correctamente";
    }*/