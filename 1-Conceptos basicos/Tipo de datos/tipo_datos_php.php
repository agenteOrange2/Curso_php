<?php


/* -Integers o enteros son numeros
-no contienen decimales
-Pueden ser positivos o negativos
-Puede contener números octales (base9),
Hexadecimales(base9), binarios (base 2 )*/

echo "<br/>";
echo "---------Enteros---------";
echo "<br/>";


$puntaje = 120;
echo $puntaje;
echo "<br/>";

//Hexadecimal
$numHexa = 0x6FFF6;
echo $numHexa;
echo "<br/>";

//Convertir string a entero
$puntaje = 20;
$total = "120" + $puntaje;
echo $total;
echo "<br/>";
//Numero negativo
$puntajeTotal = 8 - 20;
echo $puntajeTotal;
echo "<br/>";

//Obtener tamaño de un entero (Determinado por el sistema)
echo PHP_INT_SIZE;
echo "<br/>";

//Obtener mínimo número entero (Determinado por el sistema)
echo PHP_INT_MIN;
echo "<br/>";

//Obtener maxio número entero (Determinado por el sistema)
echo PHP_INT_MAX;
echo "<br/>";
echo "---------DECIMALESs---------";
echo "<br/>";
/*
//Definir decimal
-Decimales son números reales
-Se escriben con punto (.)
-Se pueden redondear con el método round()
-Pueden ser negativos
 */

 $pagoTotal = 102.45;
  echo "<br/>";
  echo $pagoTotal;
  echo "<br/>";
  $saldoPendiente = -56.23;
  echo "<br/>";
  echo $saldoPendiente;
  echo "<br/>";

  //Redondear decimales
  $puntaje = 48.51;
  echo "<br/>";
  echo round($puntaje);


  //Comparar decimales con precision 0.1
  $precio = 1.87;
  $estimado = 1.97;
  echo "<br/>";
  echo (abs($precio - $estimado) < 0.1) ? "Paga" : "No Paga";

  echo "<br/>";
  echo "---------BOOLEANOS---------";
  echo "<br/>";

  /* 
  -Verdadero o falso: true/false o TRUE/FALSE
  -No son case sensitive
  -Cuando se imprime con echo true = 1 false = 0
  -Para valores enteros el 0 es false y cualquier otro valor diferente de 0 es true
  -Para valores strint el 0 es false y cualquier otro valor diferente de 0 es true*/

  $puedeAcceder = true;
  $validado = false;

  echo ($puedeAcceder) ? "verdero" : "Falso";
  echo "<br/>";
  echo ($validado) ? "verdero" : "Falso";

  //Imprimiendo variables booleanas
  echo "<br/>";
  echo "Verdadero: " . $puedeAcceder . "<br/>"; 
  echo "<br/>";
  echo "Falso: " . $validado . "<br/>"; 
  echo "<br/>";



  //Como usar un string como booleano
  $estaslogeado = true;
  $inicioSesion = "Elliot Alderson";
  echo($estaslogeado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";
  echo "<br/>";


    //Como usar un entero como booleano
    $estaslogeado = true;
    $inicioSesion = 0; //Si es 0 es falso
    echo($estaslogeado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";
  echo "<br/>";

  echo "<br/>";
  echo "---------Strings---------";
  echo "<br/>";

  /*Definir strings
  -Los strings se definen en doble o comilla simple
  -Las comillas dobles pueden interpolar variables, las simples no
  -Aunque no hay limite en general para una variable string, este si esta definido por el sistema
  -Se deben escapar los caracteres de comillas doble y otros caracteres
  -Se pueden realizar tareas de manipulacion sobre los strings con otros métodos */

  $nombre = 'Elliot';
  $apellidos = "Alderson";

  echo "$nombre y $apellidos";

  echo "<br/>";
  //Combinando strings

  $nombre = $nombre . " - " . $apellidos;
  echo $nombre;
  
  echo "<br/>";

  //Escapar caracteres con contra barra o backslash

  $nombre3 = "Ejemplo de caracter \"especial\"";
  echo $nombre3;

  echo "<br/>";

  //Introduccion a los metodos para operaciones con string, obtener la longitud de un string strlen

  $nombre4 = "Elliot Alderson";
  echo strlen($nombre4);

  //null

  echo "<br/>";
  echo "---------NULL---------";
  echo "<br/>";

  /* 
  Null no es case sensitive  NULL/null
  -Es usualmente usado para inicializar una variable con un  valor vacio
  -Usa metodos como unset y is_null
  */

  //Definir nulo
  $documento = null;
  echo $documento;
  echo($documento) ? " / Contiene valor" : " Sin valor";
  echo "<br/>";

  //Metodo is_null

  echo $documento = null;
  echo(!is_null($documento)) ? " / Contiene valor" : "Sin valor";
  echo "<br/>";

  //Borrar la variable del programa y memoria con unset()
  unset($documento);
  echo(!is_null($documento)) ? " / Contiene valor" : "Sin valor";
  echo "<br/>";

