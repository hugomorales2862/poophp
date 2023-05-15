<?php
class Transporte{
    public $ruedas;
    public $capacidad;
    public function __construct($ruedas,$capacidad){
        $this->ruedas = $ruedas;
        $this->capacidad = $capacidad;

    }
    public function getInfo (): void{
        echo "el transporte tiene $this->rueda ruedas, y tiene capacidad de: $this->capacidad";
    }
    public function getInfo(): void{
        echo "el transporte tiene $this->ruedas ruedas";

    }

}
//extends se usa para no repetir todo lo que esta arriba
class Carro extends Transporte{
    public $puertas;
    public function getInfo(): void {
        echo "el transporte tiene $this->ruedas ruedas, tiene capacidad de: $this->capacidad y $this->puertas puertas"; 
    }
}
class Bicicleta extends Transporte{
    public function getInfo(): void {
    echo "el transporte tiene $this->ruedas ruedas, y tiene capacidad de: $this->capacidad";
    }
}
$carroToyota=new Carro(4,5);


?>