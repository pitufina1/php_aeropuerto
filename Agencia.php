<?php

require_once("altadireccion.php");
require_once("controladoraereo.php");
require_once("personaloperativo.php");
require_once("empleado.php");
require_once("aeropuerto.php");
require_once("aeropuertointernacional.php");
require_once("companiaaerea.php");
require_once("companiaalpha.php");
require_once("companiagamma.php");

class Agencia {
    var $nombre;
    var $empleados;
    var $aeropuertos;
    var $companiasaereas;

    function __construct ($nombre){
        $this->nombre = $nombre;
        $this->empleados = array();
        $this->aeropuertos = array();
        $this->companiasaereas = array();
    }

    function getNombre (){
        return $this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function altaEmpleado ($empleado){

        if (count($this->empleados) == 0){
            $this->empleados[] = $empleado;
        }
        else {
            $aux = false;
            for ($i = 0; (($i < count($this->empleados)) && ($aux == false)); $i++){
                        if ($this->empleados[$i] == null){
                            $this->empleados[$i] = $empleado;
                            $aux = true;
                        }
            }
            if ($aux == false){
                for ($i = count($this->empleados); $i > 0; $i--){
                    $this->empleados[$i] = $this->empleados[$i-1];
                }
                $this->empleados[0] = $empleado;
            }
        }     
    }

    function bajaEmpleado ($nombreempleado){
        $pos = false;
        for ($i = 0; ($i < count($this->empleados)) && ($pos == false); $i++){
            if ($this->$nombreempleado == $this->empleados[$i]->getNombre()){
                $this->empleados[$i] = null;
                $pos = true;
            }
        }
    }

    function altaAeropuerto ($aeropuerto){
        $this->aeropuertos[] = $aeropuerto;
    }
    
    function bajaAeropuerto ($deninternaccional){
        $enc = false;
        for ($i = 0; ($i < count($this->aeropuertos)) && ($enc == false); $i++){
            if ($this->aeropuertos[$i] != null){
                if ($this->deninternacional == $this->aeropuertos[$i]->getDenInternacional()){
                $this->aeropuertos[$i] = null;
                $enc = true;
                }
            }
        }
    }

    function altaCompaniaAerea ($companiaaerea){
        $this->companiasaereas[] = $companiaaerea;
    }
    
    function bajaCompaniaAerea ($nombrecompaniaaerea){
        $enc = false;
        for ($i = 0; ($i < count($this-companiasaereas)) && ($enc == false); $i++){
            if ($this->companiasaereas[$i] != null){
                if ($this->nombrecompaniaaerea == $this->companiasaereas[$i]->getNombre()){
                $this->companiasaereas[$i] = null;
                $enc = true;
                }
            }
        }
    }

    
    function altaVuelo ($vuelo){
        $this->vuelos[] = $vuelo;
    }
    
    function bajaVuelo ($numerovuelo){
        $enc = false;
        for ($i = 0; ($i < count($this-vuelos)) && ($enc == false); $i++){
            if ($this->vuelos[$i] != null){
                if ($this->numerovuelo == $this->vuelos[$i]->getNumero()){
                $this->vuelos[$i] = null;
                $enc = true;
                }
            }
        }
    }

    
    function altaPista ($pista){
        $this->pistas[] = $pista;
    }
    
    function bajaPista ($longitudpista){
        $enc = false;
        for ($i = 0; ($i < count($this-pistas)) && ($enc == false); $i++){
            if ($this->pistas[$i] != null){
                if ($this->longitudpista == $this->pistas[$i]->getLongitud()){
                $this->pistas[$i] = null;
                $enc = true;
                }
            }
        }
    }
}

?>