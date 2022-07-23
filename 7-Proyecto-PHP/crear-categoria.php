<?php require_once 'includes/redireccion.php'; ?>	
<?php require_once 'includes/header.php'; ?>	
<?php require_once 'includes/lateral.php'; ?>


<div id="principal">
    <h1>Crear categorias</h1>

    <p>Agrega nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas</p> <br>
    <form action="guardar-categoria.php" method="POST">
        <Label for="nombre">Nombre de la categoría</Label>
        <input type="text" name="nombre">

        <input type="submit" value="Guardar">
    </form>
</div>


<?php require_once 'includes/pie.php';