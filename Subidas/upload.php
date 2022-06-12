<?php


$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];

$tipo = $archivo['type'];

if ($tipo == "imagen/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif") {
    
    //Crear un directorio de upload en dado caso existiera
    if (!is_dir('images')) {
        mkdir('images', 0777);
    }

    //move_upload_file = recoge el archivo que se subio y se guarde en un destino
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

    header("Refresh: 5; URL=index.php");
    echo "<h2>Imagen subida correctamente</h2>";

}else{
    //Para que regressque 
    header("Refresh: 5; URL=index.php");
    echo "</h2>Sube una imagen con un formato correcto por favor...</h2>";
}
