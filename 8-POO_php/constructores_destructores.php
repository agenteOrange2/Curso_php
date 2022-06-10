<?php
//Programacion orientada a objetos

//Definir una clase
class Usuario{

  //Dentro del cuerpo se puede crear propiedades (atributos, variables)
  public $nombre = "Elliot";
  public $email = "Mrrobot@fsociety.com";


  //Constructor
  /*
  public function __construct(){
    echo "carga el constructor";  //no se tiene que mandar a llamar
  }*/

  //ejemplo 2
  //dandole valores
  public function __construct($nombre, $email){
      $this->nombre = $nombre;
      $this->email = $email;
  }


  //Descontructor
  //Se usa para cerrar conexiones a base de datos, limpiar o cerrar
  //Carga al final si no hay mas elementos
  
  public function __destruct(){
    echo "corriendo destructor";
  }





  //Crear metodos (funciones)
  public function presentacion(){
    //return a la palabra this hace referencia a que se pueda acceder a los propiedades y metodos de esta misma clases 
    return $this->nombre . " Hello friend";
  }
}


//Instanciar la calse para poder acceder a las propiedades
$usuario1 = new Usuario("Elliot Alderson", "Mrrobot@fsociety.com");

//Para imprimir o acceder
echo $usuario1->nombre . " y el email es: " . $usuario1->email;


echo "<br/>";

//creando otro usuario

$usuario2 = new Usuario("Tyrell wellick", "Tyrell@fsociety.com");

//Para imprimir o acceder
echo $usuario2->nombre . " y el email es: " . $usuario2->email;