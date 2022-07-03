<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivos</title>
</head>
<body>

<h1>Subir archivos con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>

    <h2>Listado de imagenes</h2>
    <!-- Para que se muestren las imagenes subidas -->
    <?php 
    //Crea variable gestor para abrir el directorio de imagenes
    $gestor = opendir('./images');
    //Se crea un if so da trie 
    if ($gestor) :
        //Mientras que imagen = leer gestor mientras que sea distinto a false
        while (($image = readdir($gestor)) !== false) :
            //Se recorre todos los ficheros
            //si la imagen es diferente al punto 
            if ($image != '.' && $image != '..') :
                //en cada iteracion se hace un echo y encuentra la imagen y la imprime
                echo "<img src='images/$image' width='200px'/><br/>";
            endif;
        endwhile;
    endif;
    ?>
</body>
</html>