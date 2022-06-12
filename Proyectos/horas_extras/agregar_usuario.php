<?php include "includes/header.php" ?>

<?php 

  //Insertamos datos
  if (isset($_POST["crearEmpleado"])) {
        
    //Obtener valores
    //Si se presiono el boton de registro de horas se obtiene los datos solicitados
    $cedula = $_POST["cedula"];
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];
    $esAdmin = $_POST["es_admin"];

    //se crea validacion para que cuando se registren no se dupliquen
    $query = "SELECT * FROM empleados WHERE cedula = :cedula";
    $stmt = $conn->prepare($query);
    $stmt->bindparam(":cedula", $cedula);
    $resultado = $stmt->execute();

    //se guarda en una consulta
    $registroCedula = $stmt->fetch(PDO::FETCH_ASSOC);

    //se tiene que hacer una validacion si tiene o no un valor}
    if ($registroCedula) {
        $error = "Error, el numero de cedula ya se encuentra registrado";
    }else{
        //si entra por aqui, es por que la cedula no existe y se puede crear
        $query = "INSERT INTO empleados(cedula, email, nombre, es_admin)VALUES(:cedula, :email, :nombre, :es_admin)";
   

        //preparamos el query
        $stmt = $conn->prepare($query); 

        $stmt->bindParam(":cedula", $cedula, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":es_admin", $esAdmin, PDO::PARAM_INT);

        $resultado = $stmt->execute();

        if ($resultado) {
           $mensaje = "Registro de usuario creado correctamente";
           //Se menda un bloque de html y se coloca el apartado para que se refresque la pagina

        }else{
            $error = "Error, no se pudo crear el usuario";
        }
    }
    }

?>


<div class="row">
    <div class="col-sm-12">
        <?php if(isset($mensaje)) :?>
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                <strong><?php echo $mensaje; ?></strong>
                <buton type="button" class="close" data-dismiss="alert" arial-label="close">
                    <span aria-hidden="true">&times;</span>
                </buton>
            </div>
        <?php endif;?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <?php if(isset($error)) :?>
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                <strong><?php echo $error; ?></strong>
                <buton type="button" class="close" data-dismiss="alert" arial-label="close">
                    <span aria-hidden="true">&times;</span>
                </buton>
            </div>
        <?php endif;?>
    </div>
</div>


              <div class="card-header">               
                <div class="row">
                  <div class="col-md-9">
                    <h3 class="card-title">Lista de todos los registros usuarios</h3>
                  </div>
                
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="cedula"># de Cédula:</label>
                        <input type="number" class="form-control" name="cedula" placeholder="Ingresa el # de cédula">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>                 
                    <div class="form-group">
                        <label for="esAdmin">Es Administrador</label>
                        <select class="form-control" name="es_admin">
                        <option value="">--Selecciona un valor--</option>
                        <option value="1">Si</option>
                        <option value="0">No</option>                        
                        </select>
                    </div>
                    <button type="submit" name="crearEmpleado" class="btn btn-primary w-100"><i class="fas fa-user"></i> Crear Nuevo Empleado</button>
                    </form>
              </div>
              <!-- /.card-body -->
<?php include "includes/footer.php" ?>
            