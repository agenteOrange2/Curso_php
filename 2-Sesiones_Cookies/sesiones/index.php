<?php 


/*Sesiones*/
/*Las sesiones son una forma sencilla de almacenar datos para usuarios de manera individual usando un ID de sesión único. Esto se puede usar para hacer persistente la información de estado entre peticiones de páginas. */

/* Almacenar y persisitr datos del usuario mientras navega en un sitio web hasta que cierra sesion o cierra el navegador */


//Iniciar sesión 
session_start();

//Variable Local
$variable_normal = "Soy una cadena de texto";

//Variable session
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";


echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];
