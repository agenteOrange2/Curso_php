<?php include "includes/header.php" ?>

<?php 
//Configurar zona horaria
date_default_timezone_set('America/Chihuahua');

//Mostrar registros
$query = "SELECT * FROM registros";
$stmt = $conn->query($query);


  //Insertamos datos
  if (isset($_POST["registrarHoras"])) {
        
    //Obtener valores
    //Si se presiono el boton de registro de horas se obtiene los datos solicitados
    $idEmpleado = $_POST["idEmpleado"];
    $fecha = $_POST["fecha"];
    $festivo = $_POST["festivo"];
    $horaInicial = $_POST["horaInicial"];
    $horaFinal = $_POST["horaFinal"];

    //Validamos si esta vacío
    if (empty($idEmpleado) || empty($fecha) || empty($horaInicial) || empty($horaFinal)) {
        $error = "Error, algunos campos obligatorios están vacíos";
        header('Location: lista_horas.php?error=' . $error);
    }else{           

        //Si entra por aqui es porque se puede ingresar el nuevo registro
        $query = "INSERT INTO registros(tipo, fecha, festivo, hora_inicial, hora_final, empleado_id, fecha_creacion)VALUES(:tipo, :fecha, :festivo, :hora_inicial, :hora_final, :empleado_id, :fecha_creacion)";
        //Variable para la fecha
        $fechaActual = date('Y-m-d');
        $festivoEvaluado = null;
        $tipo = "Registro Horas Extras";

        //Se crea condicional si seleccinaron una opcion de festivo
        if($festivo != ""){
          $festivoEvaluado = $festivo;
        }
        
        $stmt = $conn->prepare($query); 

        $stmt->bindParam(":tipo", $tipo, PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
        $stmt->bindParam(":festivo", $festivoEvaluado, PDO::PARAM_STR);
        $stmt->bindParam(":hora_inicial", $horaInicial, PDO::PARAM_STR);
        $stmt->bindParam(":hora_final", $horaFinal, PDO::PARAM_STR);
        $stmt->bindParam(":empleado_id", $idEmpleado, PDO::PARAM_INT);
        $stmt->bindParam(":fecha_creacion", $fechaActual, PDO::PARAM_STR);

        $resultado = $stmt->execute();

        if ($resultado) {
           $mensaje = "Registro de horas creado correctamente";
           //Se menda un bloque de html y se coloca el apartado para que se refresque la pagina
           echo ("<meta http-equiv='refresh' content='1'>");//Refrescar po HTTP
           exit();
        }else{
            $error = "Error, no se pudo crear el registro";
            header('Location: lista_horas.php?error=' . $error); 
            exit();
        }
    }
}

//var_dump($registros);

?>

              <div class="card-header">               
                <div class="row">
                  <div class="col-md-9">
                    <h3 class="card-title">Lista de todos los registros horas extras</h3>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-primary btn-xl pull-right w-100" data-toggle="modal" data-target="#modal-ingresar-horas">
                      <i class="fa fa-plus"></i> Ingresar nuevo registro
                    </button>
                 </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="tblRegistros" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Festivo</th>
                    <th>Hora inicial</th>
                    <th>Hora final</th>
                    <th>Empleado</th>                  
                    <th>Fecha creación</th>
                  
                  </tr>
                  </thead>
                  <tbody>

                  <?php foreach($registros as $fila)  :?>

                
                   
                      <tr>
                          <td><?php echo $fila->id; ?></td>
                          <td><?php echo $fila->tipo; ?></td>
                          <td><?php echo $fila->fecha; ?></td>
                          <td><?php echo $fila->festivo; ?></td>
                          <td><?php echo $fila->hora_inicial; ?></td>
                          <td><?php echo $fila->hora_final; ?></td>
                          <td><?php echo $fila->empleado_id; ?></td>
                          <td><?php echo $fila->fecha_creacion; ?></td>                                       
                      </tr>
                      <?php endforeach; ?>
                  </tbody>                  
                </table>
              </div>
              <!-- /.card-body -->


<?php include "includes/footer.php" ?>

<!-- page script -->
<script>
 $(function () {   
    $('#tblRegistros').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });   

    //Date range picker
    $('#fecha').datetimepicker({
      format:'YYYY-MM-DD HH:mm:ss'
    });

    //Hora Inicial
    $('#timepicker').datetimepicker({
        format: 'HH:mm',        
        enabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        stepping: 30
    })

    //Hora Final
    $('#timepicker2').datetimepicker({
        format: 'HH:mm',        
        enabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
        stepping: 30
    })


    $('#buscar_cedula').click(function(){

      //Si el botón ha si do clickeado
      //Obtengo el código del empleado
      var cedula =  $('#buscaCedula').val();

      if(cedula == "" || cedula == null){
        $('#mensajes').html("Error, campo vacío, ingresa un # de c édula");
        $('#nombre').val("");
        $('#idEmpleado').val("");
        return false;
      }

      //Enviar con ajax
      $.ajax({
          //La url del archivo php
          type: "GET",
          url: "http://localhost/horas_extras/buscar.php",
          data: {
            cedula : cedula
          },
          success: function(returnData){
            /* console.log(returnData); */
            $('#nombre').val("");
            $('#idEmpleado').val("");

            //Parsear el json
            var results = JSON.parse(returnData);

            $.each(results, function(key, value){

              if(value == "" || value == null){
                $('#nombre').val("");
                $('#idEmpleado').val("");
                $('#mensajes').html("No existe empleado con esa cédula!");
              }else{
                $('#nombre').val(value.nombre);
                $('#idEmpleado').val(value.id);
                $('#mensajes').html("");
              }           
            
          });
          }
      });
    });    
  });
</script>
