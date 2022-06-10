<?php


echo "<br />";


//Ejercicio 1
// $num = 1;

// do {
//     echo$num;
//     echo "<br />";

//     if($num >= 400){
//         //Es importante agregar un break para evitar el loop o bucle
//         break;
//     }
//     $num++;
// } while (true);
// //Continue, se salta a la siguiente linea y avanza hacia el proximo ciclo o loop

$num2 = 1;

while (true) {
    $resulta = $num2  % 2;

    if ($resulta == 1 ) {
        $num2++;
        continue;
    }

    if ($num2 > 10) {
        break;
    }

    echo "Pares: " . $num2;
    echo "<br />";
    $num2++;
}

