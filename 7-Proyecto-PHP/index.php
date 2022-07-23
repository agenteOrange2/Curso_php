<?php require_once 'includes/header.php' ?>




    <?php require_once 'includes/lateral.php' ?>



        <!-- Contenido principal -->
        <div id="principal">
                <h1>Ultimas entradas</h1>                

                <?php 
                    $entradas = conseguirUltimasEntradas($db);
                    if (!empty($entradas)) :
                        while ($entrada = mysqli_fetch_assoc($entradas)) :
                ?> 
                    <article class="entrada">
                        
            <a href="">

                    <h2><?=$entrada['titulo']?></h2>
                    <!-- Mostrando la categoria -->
                    <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                    <p><?=substr($entrada['descripcion'], 0, 350)."..." ?></p>
            </a>
                </article>

                <?php 
                        endwhile;
                    endif;                        
                ?>

        <div id="ver-todas">
            <a href="">Ver todas las entradas</a>
        </div>
        </div>

 

    <!-- Pie de página -->

    <?php require_once 'includes/pie.php'?>

</body>
</html>