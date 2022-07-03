<?php

/*Conexion a la base de datos */

$conexion = mysqli_connect("localhost", "root", "", "base_prueba");

//Comprobar si conexion es correcta
if (mysqli_connect_errno()) {
    echo "LA conexion a la base de datos MYSQL ha fallado" .mysqli_connect_errno();
}else{
    echo "Conexion realizada correctamente!";
}


//Consulta para configurar la codificacion de caracteres
mysqli_query($conexion, "SET NAMES 'utf8'");

//Consulta select desde php

$query = mysqli_query($conexion, "SELECT * FROM notas");

while($nota = mysqli_fetch_assoc($query)){
    echo "<br>";
    // var_dump($nota);
    echo "<h2>".$nota['titulo']."</h2>";

    echo $nota['descripcion'].'<br/>';

}
// $notas = ($query);



//Insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null,'Notas desde PHP', 'Esto es una nota de PHP', 'green')";
$insert = mysqli_query($conexion, $sql);

echo "<hr>";

if ($insert) {
    echo "Datos insertados correctamente";
}else{
    echo "Error: ".mysqli_error($conexion);
}