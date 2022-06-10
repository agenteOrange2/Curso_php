<?php


//se crea unos metodos
class Usuario{
    protected $nombre = "Tyrel Wellick";  //protected se pueden heredar desde otra clase cuando son protegidas
    protected $edad = 42;
}

//se crea otro metodo pero con extend que va a extender a la clase usuario
class Cliente extends  Usuario{
    public function ahorroCliente(){
        return $this->nombre . " tiene: " . $this->edad . "años y $ 100.000 usd ahorrados";
    }
}


$cliente1 = new Cliente;
echo $cliente1->ahorroCliente();