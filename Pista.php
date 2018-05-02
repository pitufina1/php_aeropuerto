<?php

class Pista{
    var $longitud;
    var $orientacion;  //"Norte", "Sur".
    
    function __construct ($longitud, $orientacion){
        $this->longitud = $longitud;
        $this->orientacion = $orientacion;
    }

    function getLongitud (){
        return $this->longitud;
    }

    function setLongitud ($longitud){
        $this->longitud = $longitud;
    }

    function getOrientacion (){
        return $this->orientacion;
    }

    function setOrientacion ($orientacion){
        $this->orientacion = $orientacion;
    }

    function mostrar () {
        echo $this->getLongitud()." <br>";
        echo $this->getOrientacion()." <br>";
    }
}
?>