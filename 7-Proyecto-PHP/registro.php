<?php

if (isset($_POST)) {

    //Conexion a base de datos
    require_once 'includes/conexion.php';
    //Creando sesion
    if (!isset($_SESSION)) {
        session_start();
        
    }

    //Recoger los valores del formulario de registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    //Operacion ternario
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    //Array de errores
    $errores = array();


    //Validar los datos antes de guardarlos en la base de datos


    //Validando el campo nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validate = true;

    }else{
        $nombre_validate = false;
        $errores ['nombre'] = "El nombre no es valido";
    }

    //Validando el campo apellidos

    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellidos_validate = true;

    }else{
        $apellidos_validate = false;
        $errores ['apellidos'] = "Los apellidos no son validos";
    }

    //Validando campo correo

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validate = true;

    }else{
        $email_validate = false;
        $errores ['email'] = "El email no es validos";
    }


    //Validando contrasena
if (!empty($password))  {
        $password_validate = true;

    }else{
        $password_validate = false;
        $errores ['password'] = "La contrasena esta vacia";
    }
 

    //si no hay error
    $guadar_usuario = false;
    if (count($errores) === 0) {
        $guadar_usuario = true;

    //Cifrar la contrasena
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

    //Insertar usuario en la tabla usuarios de la bbdd
    $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE());";
    $guardar = mysqli_query($db, $sql);

    if ($guardar) {
        $_SESSION['completado'] = "El registro se ha completado con exito";
    }else{
        $_SESSION['errores']['generales'] = "Fallo al guardar el usuario";
    }

    }else{
        //Se crea sesion
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }


    // var_dump($_POST);
    }

    header('Location: index.php');