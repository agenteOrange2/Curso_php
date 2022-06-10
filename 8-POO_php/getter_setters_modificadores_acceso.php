<?php
//Programacion orientada a objetos

//Definir una clase
class Usuario{

  //Dentro del cuerpo se puede crear propiedades (atributos, variables)
  private $nombre = "Elliot"; //private no se pueden acceder desde fuera
  private $email = "Mrrobot@fsociety.com";



  //ejemplo 2
  //dandole valores
  public function __construct($nombre, $email){
      $this->nombre = $nombre;
      $this->email = $email;
  }


  //metodos magicos personalizados getters y setters
  public function getNombre(){
      return $this->nombre;
  }

  public function setNombre($nombre){
      //validando si la propiedad existe
    $this->nombre = $nombre;
      
}

  //Descontructor
  //Se usa para cerrar conexiones a base de datos, limpiar o cerrar
  //Carga al final si no hay mas elementos
  
  /*public function __destruct(){
    echo " corriendo destructor";
  }
*/

    //Metodos magicos de php __get __set

    public function __get($propiedad){
       if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
        
    }



    
    public function __set($propiedad, $valor){
        if (property_exists($this, $propiedad)) {
             $this->$propiedad = $valor;
         }
         return $this;
     }

}


//Instanciar la calse para poder acceder a las propiedades
$usuario1 = new Usuario("Elliot Alderson", "Mrrobot@fsociety.com");

//con getters y setters personalizados
// echo $usuario1->getNombre();

//setear
echo "<br/>";

// echo $usuario1->setNombre("Tyrell");
// echo $usuario1->getNombre();


echo $usuario1->__get('nombre');
echo "<br/>";

echo $usuario1->__get('email');

echo "<br/>";

// set
$usuario1->__set("email", "Tyrel@fsociety.com");
echo $usuario1->__get('email');