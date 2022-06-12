<?php
//Debugear
$nombre = "Elliot Alderson";

var_dump($nombre);
echo "<br/>";


//fechas
echo date('d-m-Y');
echo "<br/>";
//Hora
echo time();


//Matematicas
echo "<br/>";
echo "Raiz cuadrada de 10".sqrt(10);
echo "<br/>";
//Numeros aleatorios
echo "Numero aleatorio entre 10 y 40: ".rand(10,40);

//pi
echo "<br/>";
echo "Numero pi:".pi();

//Redondear
echo "<br/>";
echo "Redondear ".round(7.89426, 2);


echo "<br/>";
echo gettype($nombre); //que tipo es 

echo "<br/>";
if(is_string($nombre)){
  echo "Esta variable es un string";
}

echo "<br/>";
if(!is_float($nombre)){
  echo "la variable nombre no es un numero con decimales";
}

//Comprobar si existe una variable
//isset podemos averiguar si una variable existen dentro de nuesto programa
echo "<br/>";
if (isset($edad)) {
  echo "Existe la variable";
}else{
  echo"La variable no existe";
}


//Limpiar espacios
echo "<br/>";
$fraase ="    Contenido    ";
var_dump(trim($frase));

//Eliminar variables / indices
$year = 2022;
unset($year);
var_dump($year);
echo "<br/>";

//empty comprobar que una variable este vacia, no existe o su valor sea 0
$texto = "";

if(empty($texto)){
  echo"la Variable texto esta vacia";
}else{
  echo"La variable no esta vacia";
}
echo "<br/>";

//Contar caracteres de un string
$cadena ="12345";

echo strlen($cadena);
echo "<br/>";

//Encontrar caracter
$frase = "La vida es bella";

echo strpos($frase, "bella");
echo "<br/>";

//Remplazar palabras de un string
$frase = str_replace("vida","chica",  $frase);
echo $frase;
echo "<br/>";

//Mayusculas y minusculas
echo strtolower($frase);
echo "<br/>";

echo strtoupper($frase);
