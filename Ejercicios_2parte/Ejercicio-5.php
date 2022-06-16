<?php


/*
Crear un array con el contenido de la siguiente tabla
Accion  Aventura  Deportes
GTA     ASSASING            FIFA2022
COD     CRASH               PES 2022
PUBG    PRINCE OF PERSIA      MOTO GP 2022

cada columna debe ir en un fichero separado (includes)
 */

 $tabla = array(
   "ACCION" => array("GTA5", "COD", "PUBG"),
   "AVENTURA" => array("ASSASIN","CRASH", "PRINCE OF PERCIA"),
   "DEPORTES" => array("FIFA2022","PES 2022", "MOTO GP 2022")
 );


 $categorias = array_keys($tabla);
 ?>

 <table border="1">
  <?php require_once 'ejercicio-5/encabezado.php';?>

  <?php require_once 'ejercicio-5/primera.php';?>
  <?php require_once 'ejercicio-5/segunda.php';?>
  <?php require_once 'ejercicio-5/tercera.php';?>





 </table>

 