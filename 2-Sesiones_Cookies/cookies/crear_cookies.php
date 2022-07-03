<?php
/** Cookie: es un fichero que almacena en el ordenador del usuario que visita la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web */


//Crear cookie
//estructura de cookie //setcookie("nombre", "valor que solo se puede ser texto", caducidad, ruta, dominio);
//cookie basica
setcookie("micookie", "valor de mi galleta");


//Cookies con expiración
setcookie("unyear","Valor de mi cookie de 365 dias", time()+(60*60*24*365));
header('location:ver_cookies.php');
?>
