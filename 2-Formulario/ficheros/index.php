<?php
/*glosario*/
//abrir archivo
//$archivo = fopen("fichero_texto.txt", "r" );
//Para permitir que pueda escribir en el archivo se agrega permiso "a+" //permise leer y escribir
/*
$archivo = fopen("fichero_texto.txt", "a+" );


//Leer contenido
//Para que lea todas las lines se ocupa un ciclo whlle
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido."<br/>";    
}


//Escrobor

fwrite($archivo, "***Soy un texto metido desde php****");

//cerrar archivo
fclose($archivo);

*/

//Copiar fichero
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");


//Renombrar un fichero
//rename('fichero_copiado.txt','archivo_recopiado.txt');

//Eliminar archivo
//unlink('archivo_recopiado.txt') or die("Error al eliminar");

/**File Exist: nos permite comprobar si un archivo existe o no */
if (file_exists("fichero_texto.txt")) {
    echo "El archivo existe!";
}else{
    echo"No existe";
}