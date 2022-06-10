<?php

    //se crea clase usuario
    class Usuario{
        //Se crea un metodo pulbico
        public $nombre;
        //se crea un public estatico 
        public static $edadMinima = 18;

        //Metodo estatico donde se hace la validacion
        public static function validarEdad($edad){
            //condicional si la edad es mayor o igual  //se utiliza self por que se esta trabajando en esta misma clase
            if($edad>= self ::$edadMinima){
                //si es verdad retorna verdad
                return true;
            }else{
                //dado caso false
                return false;
            }
        }
    }

    //los parametros estaticos no necesitan estar instanciados

    $edad = 27;
    //se crea condicional 
    //se accede directo a la clase y con los :: se ingresa a al metodo validar  //el parametro seria $edad 
    if (Usuario::validarEdad($edad)){
        echo "Puede ingresar";
    }else{
        echo "No puede ingresar";
    }