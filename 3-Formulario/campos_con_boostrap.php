<?php

    // //Obtener los datos GEt
    // var_dump($_GET);


    // //Obtener el nombre
    // $nombreEnviado = isset($_GET['nombre']) ? $_GET['nombre'] : '';
    // echo $nombreEnviado;

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Campos HTML PHP</title>

</head>
<body>
    

  
    <!-- Ejemplo sin boostrap  -->
    <div class="container">
    <h1>Campos de formularios html con php</h1>
        <div class="row">
            
            <div class="col-sm-12">
            
            <form method="POST" action="recibe_php.php">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                </div>

                <!-- <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div> -->

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="cine">
                    <label class="form-check-input-label" for="cine">cine</label>

                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="cocina">
                    <label class="form-check-input-label" for="cocina">Cocina</label>

                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="lectura">
                    <label class="form-check-input-label" for="lectura">lectura</label>
                </div>

                <div class="form-group">
                    <label for="tipoDocumento">Tipo documento</label>
                    <select class="form-control" name="tipoDocumento">
                        <option value="Cédula">Cédula</option>
                        <option value="Registro civil">Registro civil</option>
                        <option value="Pasaporte">Pasaporte</option>                  
                    </select>
                </div>

                <div class="form-group">
                    <label for="vehiculo">Vehículo</label>
                    <select multiple class="form-control" name="vehiculo[]" id="vehiculo">
                        <option value="Carro">Carro</option>
                        <option value="Moto">Moto</option>
                        <option value="Bicicleta">Bicicleta</option>                 
                    </select>
                </div>

                <div class="form-group">
                    <label for="Observación">Observación</label>
                    <textarea class="form-control" name="observacion" rows="3"></textarea>
                </div>

                                 <!--Subida de archivo-->
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control-file" name="foto">
                </div>

                <h4>Género</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="masculino" >
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="genero" value="femenino">
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>

                <input type="hidden" value="44">

                <button type="submit" class="btn btn-primary">Enviar</button>

                <a href="https://www.w3schools.com/tags/tag_input.asp">Ver todos los campos HTML</a>
                </form>    
            
            </div>

        
                
            </div>
        </div>
    </div>


</body>
</html>