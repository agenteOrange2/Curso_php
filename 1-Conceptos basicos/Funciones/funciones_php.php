<?php
    declare(strict_types = 1); //Permite para detectar o valide que el tipo de dato sea el correcto
    /*
    Funciones en php
    function nombre_funcion(parametro1, parametro2, ...){
        Instruccion1;
        Instruccion2:

        return valor;
    }
    */


    echo "<br />";
    //Definiendo funciones
    function sumaNumeros(){
        $num1 = 2;
        $num2 = 3;
        echo $num1 + $num2;
    }

    //Llamar función
    sumaNumeros();
    echo "<br />";

      //Ejemplo 2: Imprimir números impares

      function numerosImpares($tope){
            for ($i=0; $i < $tope; $i++) { 
                
                if ($i % 2 > 0) {
                    echo "Numero: $i";
                    echo "</br>";
                }
            }
      }
      //llamar la funcion y ponerle el limite
    /* numerosImpares(30); */ //Funciona como numeros enteros
    /* numerosImpares("30"); */ //Funciona igual como string

    echo "<br />";
    echo "<br />";

    //Ejemplo 3
    function suma($num1, $num2){
        return ($num1 + $num2);
    }

    echo suma(12, 10);


    echo "<br />";
    echo "<br />";



        //Ejemplo 3: Pasando parámetros a funciones
        function numerosImpares2(int $limite, $saltaNumero){
            for ($i=0; $i < $limite; $i++) { 
                if($i == $saltaNumero){
                    continue;
                }
                    //Haciendo nueva validacion
                if($i % 2 != 0){
                    echo "Número impar: $i";
                    echo "<br />";
                }
            }
        }
    //Llamar a la función
    /*numerosImpares2(30, 7);*/ //Primer parametro es el limite (30) el segundo parametro es el numero que se requiere validar (7): el cual lo salta
     /*numerosImpares2(30, "7");*/ //Si el limitador es un int esta correcto
    /*numerosImpares2(30); */ //Error por que esta solicitando dos parametros


     //Retornar valores de funciones
   function multiplica($x, $y) : int{
    $valor = $x * $y;
    return $valor; //retornar valores 
}

echo "Resultado: " . multiplica(2, 3);
echo "<br />";



   //Ejemplo retornando array
        //nom funcion   (se da un parametro)   :=reornar un array
   function arrayImpares($limite) : array{
    $retornaArray = [];
    for ($i=0; $i < $limite; $i++) { 
        if($i % 2 != 0){
            $retornaArray[] = $i; //se llena el array
        }
    }
    return $retornaArray;
}

$numsImpares = arrayImpares(20);
print_r($numsImpares);



   //Ejemplo 4: Parámetros por defecto y opcionales
   echo "<br />";
   function imprimirImpares3(int $limite, $saltaNumero = -1){
       for ($i=0; $i < $limite; $i++) { 
           if($i == $saltaNumero){
               continue;
           }

           if($i % 2 != 0){
               echo "Número impar: $i";
               echo "<br />";
           }
       }
   }

   echo "<br />";
   imprimirImpares3(10, 3);




   
    //Funciones dinámicas, se pueden llamar desde una variable
    function sumar3($x, $y) : int{ //retorna un entero en suma
        return $x + $y;
    }

    function resta3($x, $y) : int{ //retorna un entero en resta
        return $x - $y;
    }

    //se crea una variable sumar
    $funcionOperacion = "sumar3"; //Se llama la suma
    echo "<br />";
    echo $funcionOperacion(3,5);

    $funcionOperacion2 = "resta3"; //se llama la resta 3
    echo "<br />";
    echo $funcionOperacion2(3,5); 


    echo "<br />";
    echo "<br />";

    //funciones anonimas 
    $nombre = "Tyrel Wellick";

    $imprimirNombre = function() use($nombre){ //para poder acceder desde afuera se usa use
        echo $nombre;
    };

    $imprimirNombre();


    echo "<br />";
    echo "<br />";

    //Pasando argumentos como referencias
    $total4 = 0;
    
    function suma4($x, $y, &$total4 = null){
        $total4 = $x + $y;
    }

    echo "<br />";
    echo $total4;
    echo "<br />";
    suma4(2, 4, $total4);
    echo "<br />";
    echo $total4;


    //Funciones propias de PHP
    //https://www.php.net/manual/es/funcref.php