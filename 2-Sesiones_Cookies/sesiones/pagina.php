<?php 

/*Para poder usar las sesiones en otro archiv se usa session_start */

session_start();

//echo $variable_normal; //variable local no se muestra por que no existe

echo $_SESSION['variable_persistente'];


//