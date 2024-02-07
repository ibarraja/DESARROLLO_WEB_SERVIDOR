<?php
class Persona{
    private $dni;
    private $nombre;
    private $apellido;
    function __construct($dni, $nombre, $apellido){
        $this -> dni = $dni;
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;

    }

    public function getNombre(){
        return $this -> nombre;
    }
    public function getApellido(){
        return $this -> apellido;
    }

    public function setNombre($nombre){
        $this -> nombre = $nombre;
    }
    public function setApellido($apellido){
        $this -> apellido = $apellido;
    }

    public function __toString(){
        return "Persona: $this -> nombre $this -> apellido &nbsp&nbsp [DNI: $this -> dni";
    }


}

$p = new Persona('23334940','Javier','Ibarra');
print $p;
