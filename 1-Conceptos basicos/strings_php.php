<?php


echo "<br/>";

//Ejercicio 1: Combinar String usando (.)

$nombre = "Elliot";
$apellidos = " Alderson";

$nombreCompleto = $nombre . $apellidos;
echo $nombreCompleto;


echo "<br/>";

//Ekercocop 2 concatenar diferentes tipos de variable
$calificacion = 9;
$mayorEdad = true;

$infoUsuario = "El usuario : $nombreCompleto, tiene una calificacion de: " . $calificacion . " y es mayor de edad: " . $mayorEdad;
echo $infoUsuario;


/*Heredoc: para escribir un bloque de texto (string) */

//Ejercicio 3
$nombre2 = "Tyrel Wellick";
$numbero = 23;

echo <<< 'TEXTO1'
Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the year
$nombre2 es una persona
$numero * 2
(true) ? "Verdadero" : "Falso";
<strong> texto en negrilla </strong>
TEXTO1;

echo "<br />";

/*
strlen - Cantidad de caracteres
*/
$nombres = "Elliot";
echo strlen($nombres);

//Forma recomendada de validar cantidad de strings
echo "<br />";
if(strlen($nombres)){
 echo $nombres;
 echo "<br />";
}else{
   echo "El nombre está vacío";
   echo "<br />";
}


echo "<br />";

/*

strpos - Encontrar la posición de un string
     */
    $texto = "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.";

    $textoABuscar = "combined";

    $posicion = strpos($texto, $textoABuscar);
    echo $posicion;

    //Comparar posición de strings
    if($posicion === false){
        echo "No encontrado";
        echo "<br />";
    }


    echo "<br />";
    


    /* 
    str_replace - reemplazar strings
     */

    $texto3 = "written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. popular";

    echo $texto3;
    echo "<br />";
    echo "Texto reemplazado: " . str_replace('popular', 'MASIVO', $texto3);


    echo "<br />";
   /* 
   str_word_count - contar palabras
    */

   $articulo = "written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. popular";

   echo "Cantidad palabras: " . str_word_count($articulo);

   echo "<br />";
   /* 
   str_shuffle - Reordenar aleatoriamente un string
    */

    $producto = "Acetaminofen x  500mg";

    $ordernarProducto = str_shuffle($producto);
    echo $ordernarProducto;
    echo "<br />";


    /*
    strpos - Hallar la posicion de un string
     */

     $texto5 = "Written in 45 BC. This book is a treatise on the theory of ethics, very popular during the RENA. popular";

     echo strpos($texto5, 'during');


     echo "<br />";

     echo "<br />";



     //Convertir a mayúsculas
    echo strtoupper($texto5);

     echo "<br />";
     //Convertir a minúsculas
     echo strtolower($texto5);


     echo "<br />";

     /* 
     wordwrap - Envolver cantidad de caracteres
      */

      $texto6 = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";

      //echo $texto6;
      echo "<br />";
      echo "<br />";
      echo wordwrap($texto6, 100, "<br />\n"); //Para limitar caracteres

      echo "<br />";
      echo "<br />";


    /*
      trim - Eliminar espacios en blanco en el texto
      */

      $texto7 = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.";

      echo trim($texto7);