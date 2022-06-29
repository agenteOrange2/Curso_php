<?php

/*Para borrar cookie */

if ($_COOKIE) {
  unset($_COOKIE['micookie']);
  //para borrarla tenemos que caducarla
  setcookie('micookie','',time()-100);
}

//redirección cuando hace la accion 
header('location:ver_cookies.php');