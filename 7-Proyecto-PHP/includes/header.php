<?php require_once 'conexion.php'; ?>
<?php require_once 'includes/helpers.php'?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de videojuegos</title>

    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
</head>
<body>
    
    <!-- Cabecera  -->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de videojuegos
            </a>
        </div>


    <!-- Menu -->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>
    <?php $categorias = conseguirCategorias($db);
                if (!empty($categorias)) :
                    
                    while ($categoria = mysqli_fetch_assoc($categorias)): 
    ?>             

                <li>
                    <a href="categoria.php?id=<?=$categoria['nombre']?>"><?=$categoria['nombre']?></a>
                </li>
            
            <?php   endwhile;
                endif;
            ?>
            <li>
                <a href="index.php">Sobre mi</a>
            </li>
            <li>
                <a href="index.php">Contacto</a>
            </li>
        </ul>
    </nav>
    <div class="clearfix"></div>

    </header>


    <div  id="contenedor">