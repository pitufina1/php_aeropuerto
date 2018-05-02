<?php

require_once("Aeropuerto.php");

class AeropuertoInternacional extends Aeropuerto {
    var $numterminales;
    var $numpistas;

    function __construct ($deninternacional, $latitud, $longitud, $numterminales, $numpistas){
        parent::__construct ($deninternacional, $latitud, $longitud);
    }

    function setNumTerminal ($numterminales) {
    $this->numterminales = $numterminales;
    }
    function getNumTerminal  () {
    return $this->numterminales;
    }

    function setNumPista ($numpistas){
        $this->numpistas = $numpistas;
    }

    function getNumPista  () {
        return $this->numpistas;
    }

    function mostrar () {
        parent::mostrar();   
        echo "NumTerminal :".$this->getNumTerminal ();  
        echo "NumPista :".$this->getNumPista ();
    }
}

?>