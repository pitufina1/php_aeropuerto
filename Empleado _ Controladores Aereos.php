<?php

require_once("Empleado.php");

class ControladorAereo extends Empleado {
    var $numhorastrab; 

    function __construct ($nombre, $fechanacimiento, $numhorastrab) {
        parent::__construct ($nombre, $fechanacimiento);
        $this->numhorastrab = $numhorastrab;
    }
    function setNumHorasTrab ($numhorastrab) {
        $this->numhorastrab = $numhorastrab;
    }
    function getNumHorasTrab () {
        return $this->numhorastrab;
    }
   
    function mostrar () {
        parent::mostrar();
        echo "NumHorasTrab:".$this->getNumHorasTrab();
    }
}

?>