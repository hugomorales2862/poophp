<?php
class Usuario {
    //definicion de productos 
    public float $precio= 2.56;
    public string $nombre= "nombre";
    public bool $disponible= true;
// definicion de metodos o de funciones 

    function mostrarNombre(){
        echo $this -> nombre;
    }
    
}

//creacion de objeto
// crear una instancia

$mesa= new Usuario();
$mesa -> nombre= "mesa";
$mesa -> precio= 500;
$mesa -> disponible= true;

$silla= new Usuario();
$silla -> nombre= "mesa";
$silla -> precio= 500;
$silla  -> disponible= true;

echo "<pre>";
var_dump ($mesa);
var_dump ($silla);
echo "</pre>";


$mesa -> mostrarNombre();
$silla -> mostrarNombre();

?>