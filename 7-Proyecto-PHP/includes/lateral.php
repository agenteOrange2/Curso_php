<!-- Sidebar -->
<aside id="sidebar">

        <!-- Login -->
    <?php if (isset($_SESSION['usuario'])) :?>
        <div class="bloque" id="usuario-logueado">
            <h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>

            <!-- Botones -->
            <a href="cerrar.php" class="boton boton-verde">Crear entradas</a>
            <a href="crear-categoria.php" class="boton">Crear categorias</a>
            <a href="cerrar.php" class="boton boton-naranja">Mis datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a>

            
        </div>
    <?php endif;?>
    
    
    <!-- Condicion para ocultar login y registro al iniciar sesion -->

    <?php if (!isset($_SESSION['usuario'])) :?>

    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <!-- Mostrar alerta para el error  -->
        <?php if (isset($_SESSION['error_login'])) :?>
        <div class="alerta alerta-error" >
            <?=$_SESSION['error_login'];?>
        </div>
    <?php endif;?>

        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Entrar">
        </form>
    </div>

    <div id="register" class="bloque registro">

    <!-- Mostrar Errores -->
        <?php  if(isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'];?>              
            </div> 
            <?php elseif(isset($_SESSION['errores']['general'])): ?>
            <div class="alerta alerta-exito">
            <?= $_SESSION['errores']['general'] ?> 
            </div> 
            <?php endif; ?>
    <!-- Mostrar Errores -->
    
        <h3>Registrate</h3>
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : '' ; ?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : '' ; ?>
            <label for="email">Email</label>
            <input type="email" name="email">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : '' ; ?>
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
            <input type="submit" name="submit" value="Registrar">
        </form>
        <?php borrarErrores(); ?>
    </div>

    <?php endif;?><!-- Cierre Condicion para ocultar login y registro al iniciar sesion -->
</aside>