<?php
    //Incluimos conexion
    include 'conexion.php';

    if(isset($_POST['crearRegistro'])){
        //Importante colocar la base de datos y el metodo post
        $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
        $apellidos = mysqli_real_escape_string($con, $_POST['apellidos']);
        $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
        $email = mysqli_real_escape_string($con, $_POST['email']);

        //configurar tiempo y zona horaria
        date_default_timezone_set('America/Chihuahua');
        $time = date('h:i:s a', time());

        //Validar si no estan vacios
        if(!isset($nombre) || $nombre == '' || !isset($apellidos) || $apellidos == '' || !isset($telefono) || $telefono == '' || !isset($email) || $email == ''){
            
            $error = "Algunos campos estan vacios";
        }else{
                //se crea una nueva variable para insertar en la base de datos con los campos primeros  y los value
                $query = "INSERT INTO usuarios(nombre, apellidos, telefono, email)VALUES('$nombre', '$apellidos', '$telefono', '$email')";

            //Se hace una validacion  por si alguna razon no se pudo ejecutar
            if (!mysqli_query($con, $query)) {
                //die para que termine la ejecucion y se concatena con mysqli para poder saber cual es el error
                die('Error: ' . mysqli_error($con));
                //Se manda una variable con error para todos para indicar que no se pudo crear
                $error = "Error, no se pudo crear en registro";
            }else{
                //Sino aqui se crea un mensaje que se registro correctamente
                $mensaje = "Registro creado correctamente";

                //Se escribe header para direccionar al index donde empieza el registro
                header('location: index.php?mensaje='.urldecode($mensaje));
                
                //Se crea un exti ppara salir
                exit();
            }
        }
    }
   
?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="css/estilos.css" rel="stylesheet">

    <title>CRUD PHP Y MYSQL</title>
  </head>
  <body>
    <h1 class="text-center">CRUD PHP Y MYSQL</h1>
    <p class="text-center">Aprende a realizar las 4 operaciones básicas entre PHP y una base de datos, en este caso MYSQL: CRUD(Create, Read, Update, Delete)</p>

    <div class="container">

    <div class="row">
        <h4>Crear un Nuevo Registro</h4>
    </div>   


    <!-- Es para que aparezca mesaje de error -->
        <div class="row caja">
            <!-- Si esta configurado el error se deberia mostrar  -->
        <?php if (isset($error)) : ?>
            <h4 class="bg-danger text-white"><?php echo $error?></h4>
        <?php endif; ?>
                <h4 class="bg-danger text-white"></h4>



            <div class="col-sm-6 offset-3">
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">                    
                </div>
                
                <div class="mb-3">
                    <label for="apellidos" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" placeholder="Ingresa los apellidos">                    
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono:</label>
                    <input type="number" class="form-control" name="telefono" placeholder="Ingresa el teléfono">                    
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Ingresa el email">                    
                </div>
              
                <button type="submit" class="btn btn-primary w-100" name="crearRegistro">Crear Registro</button>

                </form>
            </div>
        </div>
    </div>
  </body>
</html>