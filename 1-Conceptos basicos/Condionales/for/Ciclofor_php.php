<?php

/* 
    -Inicialización de un ciclo for o para
    for(inicializacion, condicion, incremento){
        //Código que se ejecuta
    }
*/


echo "<br />";


//Ejercicio 1: (REcomendado) Imprimir numeros del 1 al 200

//  Inicializacion //  La condicion que debe cumplir // se va incrementando hasta llegar a 200

/*
for($num1 = 1; $num1 <= 200; $num1 ++){
    print $num1;
    echo "<br />";

}*/


//Ejercicio 2: Numeros impares hasta el 20 Recomendado

// for ($i=1; $i <= 20; $i++) { 
//     $resultado = $i % 2;
//     if($resultado > 0){
//         echo "Numero impar: $i";
//         echo "<br />";
//     }
// }


//Ejercicio 3 
$i = 1;
 for ($i=1; $i <= 20; $i++) { 
//      $resultado = $i % 2;
//      if($resultado > 0){
//          echo "Numero impar: $i";
//          echo "<br />";
//      }
}



//Ejercicio 3 Incrementador
$i = 1;
 for ($i=1; $i <= 20;) { 
     $resultado = $i % 2;
     if($resultado > 0){/* 
        do{
            //Código que se ejecuta
        }while(condición);
         */
         echo "Numero impar: $i";
         echo "<br />";
     }
     $i++; //Tambien funciona colocandoio afuera el incrementador
}
echo "<br />";
echo "<br />";

//Ejercicio 5: Tablas de multiplicar
//Importante colocar una condicion  //Importante no quitar el incrementador ya que puede caer en un bucle infinito
for ($num3=0; $num3 <= 12; $num3++) { 
    for ($num4=0; $num4 <= 10; $num4++) {  //Ciclos anidados
        echo "$num3 X $num4 = "  . $num3 * $num4;
        echo "<br />";
    }
}


