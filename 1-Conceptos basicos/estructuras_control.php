<?php


/*
== igual
=== Identico
!= diferente
<> diferente
!== no identico
<menor que
> mayor que
<= menor o igual que
>= mayor que


//Operadores logicos
&& AND = Y
|| OR o O
! NOT = NO
and, or
*/

//Ejemplo igual
$year = 2022;

if ($year === 2022) {
    echo "Es correcto el year";
}else{
    echo "No, estamos en 2022";
}

echo "<br>";
echo "<br>";

///Ejemplo diferente
$year2 = 2022;

if ($year2 != 2022) {
    echo "el ano es el mismo";
}else{
    echo "si son diferentes";
}



echo "<br>";
echo "<br>";

//Ejemplo igual
$year2 = 2022;

if ($year2 < 2020) {
    echo "es menor";
}else{
    echo "es mayor";
}

echo "<br>";
echo "<br>";


///Operaciones de comparacion

$nombre = "Elliot Alderson";
$ciudad = "Mexico";
$edad = 27;
$edadAdulta = 20;


if ($edad >= $edadAdulta) {
    echo "Ya eres un adulto " .$nombre;
    echo "<br>";
    echo "En: " .$ciudad;
}else{
    echo "Eres menor de edad " .$nombre;
    echo "<br>";

    echo "En: " .$ciudad;
}


//Else If //sirve para no anidar tantos if en un if


//No es la mejor practica
echo "<br>";
echo "<br>";

$dia = 3;
/*
if ($dia == 1) {
    echo "Es Lunes";
}else{
    if ($dia == 2) {
        echo "Es Martes";
    }else {
        if ($dia ==3) {
            echo "Miercoles";
        }else{
            if ($dia == 4) {
                # code..
            }
        }
    }
}
*/

//Mejores practicas
if ($dia == 1) {
    echo "El dia es Lunes";
}elseif($dia == 2){
  echo "El dia es Martes";
}elseif($dia == 3){
    echo "El dia es Miercoles";
}elseif($dia == 4){
    echo "El dia es Jueves";
}elseif($dia == 5){
    echo "El dia es Viernes";
}elseif($dia == 6){
    echo "El dia es Sabado";
}elseif($dia == 7){
    echo "El dia es Domingo";
}

echo "<br>";
echo "<br>";
//Operadores logicos
$edad1 = 18;
$edad2 = 64;

//Comprobar si puede trabajar
$edad_oficial = 20;
//si quiero comprobar otra condicion se utiliza &&
if ($edad_oficial >= $edad1 &&  $edad_oficial <= $edad2) {
    echo "Esta en edad para trabajar";
}else{
    echo "Aun no puede trabajar";
}


echo "<br>";
echo "<br>";

$pais = "Francia";

if ($pais == "Mexico" || $pais == "Espana" || $pais == "Colombia") {
    echo "Se habla espanol";
}else{
    echo "no se habla espanol";
}

//Goto es para saltar a otra seccion del programa
goto marca;
echo "<h3> Instruccion 1 </h3";
echo "<h3> Instruccion 2 </h3";
echo "<h3> Instruccion 3 </h3";
echo "<h3> Instruccion 4 </h3";


//con goto 

marca:
echo "<h3> Instruccion 4 </h3";


