
<?php 
//Conexion
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'master_blog';

$db = mysqli_connect($server, $username, $password, $database);

//COnsulta con query
mysqli_query($db, "SET NAMES 'utf8'");


//Iniciar la sesion

session_start();