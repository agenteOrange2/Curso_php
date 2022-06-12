<?php


  //Expresiones y operadores

  //Ejemplo de una expresion
  $nombre = "Elliot Alderson";
  $salario = 3000;
  //$total = suma(10, 20);
  
  //El = es un operador de asignacion, los operadores se usan para realizar operaciones sobre las variables
  $apellidos = "Alderson";
  //$x++;
  $suma = 30 + 2;

  //Diferentes tipos de operadores
  //Aritmeticos
  $sueldo = 100;
  $subsidioTransporte = "2000";
  $salud = "1000";
  $pension = "1000";
  $ingresos = $sueldo + $subsidioTransporte;
  $egresos = $salud + $pension;
  $total = $ingresos - $egresos;
  echo "El total del sueldo es: $total";
  echo "<br/>";


  //Calcular área de un rectangulo
  $base = 10;
  $altura = 14;
  $area = $base * $altura;
  echo $area;
  echo "<br/>";


    //Porcentaje
    $sumaNotas = 42;
    $cantidadMaterias = 5;
    $promedio = $sumaNotas / $cantidadMaterias;
    echo $promedio;
    echo "<br/>";

    //Modulo
    $a = 51 % 2;
    echo $a;
    echo "<br/>";

    //Exponenciación
    $c = 4;
    $d = 3;
    $resultadoExponenciacion = $c ** $d;
    echo $resultadoExponenciacion;
    echo "<br/>";

    //Operadores condicionales
    $puedeIngresar = (false) ? "Entra" : "No entra";  //lo que hay despues ? es verdadero y lo que hay despues de : es falso
    echo $puedeIngresar;
    echo "<br/>";

    //Operadores logicos and o && ||
    $permiso = true;
    $autenticado = true;
    echo ($permiso and $autenticado) ? "Bienvenido administrador" : "Bienvenido invitado";
  /*  echo ($permiso && $autenticado) ? "Bienvenido administrador" : "Bienvenido invitado";  Sera lo mismo que and*/ 
  //  echo ($permiso || ó or $autenticado) ? "Bienvenido administrador" : "Bienvenido invitado";  Si se cumple una de las dos condiciones es verdadero
  echo "<br/>";
    $total = 89;
    $pasaMateria = 50;
    $validarPasa = ($total >= $pasaMateria) ? true : false;
    echo($validarPasa) ? "PASA" : "NO PASA";

    //asignacioón
    $nombre = "Elliot Alderson";
    $salario = 3400;
    echo "<br/>";
    //Operador +=
    $contador = 1;
    //$contador = $contador +1; forma 1
    $contador += $contador ;
    echo $contador;
    echo "<br/>";

    //Operador -=
    $contador = 1;
    //$contador = $contador +1; forma 1
    $contador -= $contador ;
    echo $contador;
    echo "<br/>";

    //Operador *=
    $contador = 1;
    //$contador = $contador +1; forma 1
    $contador *= $contador ;
    echo $contador;
    echo "<br/>";

    //Operador -=
    $contador = 20;
    //$contador = $contador +1; forma 1
    $contador /= 2 ;
    echo $contador;
    echo "<br/>";

    //Operador %=
    $contador = 10;
    //$contador = $contador +1; forma 1
    $contador-= 2 ;
    echo $contador;
    echo "<br/>";

    //.=
    $nombreCompleto = "Elliot ";
    $nombreCompleto .= "Alderson ";
    $nombreCompleto .= "Mr Robot";
    echo $nombreCompleto;
    echo "<br/>";

    //Operadores de incremento
    $conta = 20;
    $conta += 1;
    echo $conta;
    echo "<br/>";

    //Post incremento
    echo $conta++;
    echo "<br/>";
    echo $conta;
    echo "<br/>";

    //Pre incremento
    echo ++$conta;
    echo "<br/>";
    echo $conta;
    echo "<br/>";


    //Operadores de decremento
    $conta = 20;
    $conta -= 1;
    echo $conta;
    echo "<br/>";


    //Post incremento
    echo $conta--;
    echo "<br/>";
    echo $conta;
    echo "<br/>";

    //Pre incremento
    echo --$conta;
    echo "<br/>";
    echo $conta;
    echo "<br/>";
    

    //Operador de ejecucion
    // echo `dir * .php`;

    //Precedencia de operadores
    echo "<br/>";
    $val = 20;
    echo $val++;
    $contad = $val++;
    echo "<br/>";

    echo $contad;
    echo "<br/>";
    echo$val;
    echo "<br/>";


    //Ejemplo 2
    $valor1 = 3 * 4 +2;
    echo $valor1;
    echo "<br/>";

    //Ejemplo 3
    $resultado1 = true && false;
    $resultado2 = true and false;

    echo ($resultado1) ? "Verdadero" : "falso"; //da falso  por la presedencia del lado rerecho como es falso, se ejecuta el lado derecho
    echo "<br/>";
    
    echo ($resultado2) ? "Verdadero" : "falso"; //despues de = ve el true y lo marca como verdadero

?>