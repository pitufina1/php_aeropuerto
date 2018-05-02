<?php

require_once("Empleado.php");

class AltaDireccion extends Empleado {
    var $numacciones; 

    function __construct ($nombre, $fechanacimiento, $numaciones) {
        parent::__construct ($nombre, $fechanacimiento);
        $this->numacciones = $numacciones;
    }
    function setNumAcciones ($numacciones) {
        $this->numacciones = $numacciones;
    }
    function getNumAcciones () {
        return $this->numacciones;
    }
   
    function mostrar () {
        parent::mostrar();
        echo "NumAcciones:".$this->getNumAcciones();
    }
}

?>