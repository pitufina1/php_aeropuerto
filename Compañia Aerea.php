<?php

require_once("Aeronave.php");

class CompaniaAerea {
    var $nombre;
    var $tlfnoemergencias;
    var $aeronaves;

    function __construct ($nombre, $tlfnoemergencias){
        $this->nombre = $nombre;
        $this->tlfnoemergencias = $tlfnoemergencias;
        $this->aeronaves = array ();
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nommbre = $nombre;
    }

    function getTlfnoEmergencias (){
        return $this->tlfnoemergencias;
    }

    function setTlfnoemergencias ($tlfnoemergencias){
        $this->tlfnoemergencias = $tlfnoemergencias;
    }

    //Las funciones de get y set, no tienen sentido crearlas en aeronave, xk es un array.

    function altaAeronave ($aeronave){
        $this->aeronaves[] = $aeronave;
    }
    
    function bajaAeronave ($nombreaeronave){
        $enc = false;
        for ($i = 0; ($i < count($this-aeronaves)) && ($enc == false); $i++){
            if ($this->nombreaeronave == $this->aeronaves[$i]->getNombre()){
                $this->aeronaves[$i] = null;
                $enc = true;
            }
        }
    }

    function mostrar () {
        echo $this->getNombre()." <br>";
        echo $this->getTlfnoEmergencias()." <br>";

        for ($i=0; $i < count ($this->aeronaves) ; $i++) { 
            $this->aeronaves[$i]->mostrar();
        }
    }
}

?>