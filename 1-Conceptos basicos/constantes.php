<?php 


//Constantes
/* No se necesita usar $
  2- Solo se definen con metodo define
  3-Se asignan una unica vez
  4- el alcance o SCOPE es global, se puede acceder desde cualquier lugar
*/

//Definir constante y su valor 
define('CUOTA', 300);
$valorCuota = CUOTA;
echo "Valor de la cuota: $valorCuota";
/*
echo "Valor de la cuota: Cuota;"; //No pude declararse asi
*/
echo "<br/>";
echo "Valor de la cuota: " . CUOTA . "<br/>";
echo "<br/>";
echo "El valor de la cuota: " . CUOTA . "<br/>";
echo "<br/>";

//No podemos redifinir constantes
/*
define('CUOTA', 500);
$valorCuota = CUOTA;
echo "Valor de la cuota: $valorCuota";
*/

//Acceder con el metodo constant

echo constant('CUOTA');
echo "<br/>";

//No podemos utilizar el isset
/*define('VERSION', '');
echo isset(VERSION);*/

//Buenas practicas con constantes
//MAYUSCULAS
define('NOMBRE', 'Elliot Alderson');

//No usar nombres de constantes como
define('__VALOR__', 'Valor');

//No usar nombre de constantes con guión bajo
/*define('__valor', 'valor')*/

//Magic constantes
echo "<br/>";
echo __LINE__ . "<br/>"; //Para visualizar en que lina voy
echo __DIR__; //Para saber ruta


?>


