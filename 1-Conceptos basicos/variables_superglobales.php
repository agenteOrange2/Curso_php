<?php


//Variables superglobales

//Variables de servidor
/*
echo '<h1>';
echo $_SERVER['SERVER_ADDR']; 
echo '</h1>';
echo '<br>';


echo '<h1>';
echo $_SERVER['SERVER_NAME'];  //PARA SACAR DOMINIO
echo '</h1>';
echo '<br>';

echo '<br>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //PARA SOFTWARE 
echo '</h1>';
echo '<br>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //PARA SABER NAVEGADOR
echo '</h1>';
echo '<br>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //SACAR IPE 
echo '</h1>';

*/
//GET y POST

//Action del formulario es para llevar a una pagina
?>


<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <h1>Formulario</h1>
    <form method="POST" action="recibir.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" >
        <br>

        <label for="apellidos">apellidos</label>
        <input type="text" name="apellidos" >
        <br>

        <input type="submit" value="Enviar datos">

    </form>    
</body>
</html>


