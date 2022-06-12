<?php
$error = 'faltan_valores';
//colocar !!empty para indentificar que no esta vacio
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])  ){
    
    $error = 'ok';

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    //va;idar nombre
/**glosario 
     * !is_string = si no es un string 
     * !preg_match = si no es un numero
     * 
     * //validacion de edad
     * filter_var = funciona para validar edad y mete un filtro que sea una constante que sea FILTER VALIDATE que puede validar si es un INT. BOLEAN, EMAIL
     * 
    */

        // Validando nombre
        if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
            $error = 'nombre';
        }
        //Validando apellidos
        if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
            $error = 'apellidos';
        }
  
         //Validando edad
        /*Se utiliza en ves de !preg_match se utiliza filter_var  para validar edad, email y*/
        //Se cambia el !is_string a !is_int para validar 
        if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
            $error = 'edad';
        }
        //Validando correo
        if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'email';
        }
        //Validando password
        
        if (empty($pass) || strlen($pass)<5) {
            $error = 'pass';
        }
        //  var_dump($_POST);



}else{
    $error = 'faltan_valores';    
}



//una redireccion global

if ($error != 'ok') {
    header("location: index.php?error=".$error);
    
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  if ($error == 'ok'):?>
    <h1>Datos validados correctamente</h1>
        <p><?= $nombre ?></p>
        <p><?= $apellidos ?></p>
        <p><?= $edad ?></p>
        <p><?= $email ?></p>

        
<?php  endif;?>
</body>
</html>