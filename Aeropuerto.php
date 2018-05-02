<?php

require_once("Vuelo.php");
require_once("Pista.php");
require_once("Tienda.php");

class Aeropuerto {
    var $deninternacional;
    var $latitud;
    var $longitud;
    var $vuelos;
    var $pistas;
    var $numtiendas;

    function __construct ($deninternacional, $latitud, $longitud){
        $this->deninternacional = $deninternacional;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->vuelos = array ();
        $this->pistas = array ();
        $this->numtiendas = array ();
    }

    function getDenInternacional(){
        return $this->deninternacional;
    }

    function setDenInternacional ($deninternacional){
        $this->deninternacional = $deninternacional;
    }

    function getLatitud (){
        return $this->latitud;
    }

    function setLatitud ($latitud){
        $this->latitud = $latitud;
    }

    function getLongitud (){
        return $this->longitud;
    }

    function setLongitud ($longitud){
        $this->longitud = $longitud;
    }

    function mostrar () {
        echo $this->getDenInternacional()." <br>";
        echo $this->getLatitud()." <br>";
        echo $this->getLongitud()." <br>";

        for ($i=0; $i < count ($this->vuelos) ; $i++) { 
            $this->vuelos[$i]->mostrar();
        }

        for ($i=0; $i < count ($this->pistas) ; $i++) { 
            $this->pistas[$i]->mostrar();
        }

        for ($i=0; $i < count ($this->numtiendas) ; $i++) { 
            $this->numtiendas[$i]->mostrar();
        }
    }
}

?>