<?php

class Tienda{
    var $nombre;
    var $numlocal;
    var $mtrscuadrados;
  
    function __construct ($nombre, $numlocal, $mtrscuadrados){
        $this->nombre = $nombre;
        $this->numlocal = $numlocal;
        $this->mtrscuadrados = $mtrscuadrados;
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getNumLocal (){
        return $this->numlocal;
    }

    function setNumLocal ($numlocal){
        $this->numlocal = $numlocal;
    }

    function getMtrsCuadrados (){
        return $this->mtrscuadrados;
    }

    function setMtrsCuadrados ($mtrscuadrados){
        $this->mtrscuadrados = $mtr;
    }

        function mostrar () {
        echo $this->getNombre()." <br>";
        echo $this->getNumLocal()." <br>";
        echo $this->getMtrsCuadrados()." <br>";
    }
}
?>