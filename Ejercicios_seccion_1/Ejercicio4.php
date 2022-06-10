<?php


/*
Recoger dos numeros por la url(Parametros GET) y hacer todas las operaciones basicas de una
calculadora(suma, resta, multiplicacion y division) de esos dos numeros

*/


$numero1 = 5;
$numero2 = 2;
//var_dump($_GET);
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
$numero1 = $_GET['numero1'];

$numero2 = $_GET['numero2'];

echo "<h1>Calculadora</h2>";
echo "Sumea:".($numero1+$numero2)."<br/>";
echo "Resta:".($numero1-$numero2)."<br/>";
echo "Multiplicacion:".($numero1*$numero2)."<br/>";
echo "Division:".($numero1/$numero2);


}else{
    echo"<h3>Introduce correctamente los valores por la URL</h3>";
}

//se agrega despues de la url los numeros y se hace el calculo de acuerdo los numeros que se entregen por la 
//url
