<?php
class coches{
    public $nombre = "Nombre del modelo";
    public $precio = 1200;
  
    function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    
    public function fichaCoche(){
        return "Modelo: ".$this->nombre . " el precio es: " . $this->precio;
    }
     
    
}
class industrial extends coches{
    public $licencia;
    static $terreno = "Agricola";
            function __construct ($nombre, $precio, $licencia){
        parent:: __construct($nombre, $precio);
        $this->licencia = $licencia;
    }
   public function fichaCoche(){
        return "Modelo: ".$this->nombre . " el precio es: " . $this->precio . " la licencia es: " . $this->licencia;
    } 
}

$turismo1 = new coches('Seat Ibiza', 5780);
$turismo2 = new coches('Ford Focus ', 7790);
$industrial = new industrial("Ford turmero", 7432, "no requiere licencia");

echo industrial::$terreno;
echo $turismo2->nombre; 
?>