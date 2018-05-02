<?php

class Empleado {
    var $nombre;
    var $fechanacimiento;

    function __construct ($nombre, $fechanacimiento){
        $this->nombre = $nombre;
        $this->fechanacimiento = $fechanacimiento;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getFechaNacimiento (){
        return $this->fechanacimiento;
    }

    function setFechaNacimiento ($fechanacimiento){
        $this->fechanacimiento = $fechanacimiento;
    }


    function mostrar () {
        echo $this->getNombre()." <br>";
        echo $this->getFechaNacimiento()." <br>";
        echo $this->getNumVuelos()." <br>";
    }
}
?>