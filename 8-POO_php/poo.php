<?php
//Programacion orientada a objetos

//Definir una clase
class Usuario{

  //Dentro del cuerpo se puede crear propiedades (atributos, variables)
  public $nombre = "Elliot";
  public $email = "Mrrobot@fsociety.com";

  //Crear metodos (funciones)
  public function presentacion(){
    //return a la palabra this hace referencia a que se pueda acceder a los propiedades y metodos de esta misma clases 
    return $this->nombre . " Hello friend";
  }
}


//Instanciar la calse para poder acceder a las propiedades
$usuario1 = new Usuario;
//Para acceder a nombre
echo $usuario1->nombre;

echo "<br/>";
//ingresar al email
echo $usuario1->email;
echo "<br/>";
//acceder a la funcion
echo $usuario1->presentacion();

//pasar los datos dinamicamente
$usuario2 = new Usuario;
//Para acceder a nombre
$usuario2->nombre = "Tyrel";

echo "<br/>";
//ingresar al email
$usuario2->email = "Tyrel@fsociety.com";
echo "<br/>";
//acceder a la funcion
echo $usuario2->presentacion();
