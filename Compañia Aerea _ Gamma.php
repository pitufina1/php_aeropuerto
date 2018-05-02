<?php

require_once("CompaniaAerea.php");

class CompaniaGamma extends CompaniaAerea {
    var $anofundacion; 

    function __construct ($nombre, $tlfnoemergencias, $anofundacion) {
        parent::__construct ($nombre, $tlfnoemergencias);
        $this->anofundacion = $anofundacion;
    }
    function setAnoFundacion ($anofundacion) {
        $this->anofundacion = $anofundacion;
    }
    function getAnoFundacion  () {
        return $this->anofundacion;
    }
   
    function mostrar () {
        parent::mostrar();
        echo "AnoFundacion :".$this->getAnoFundacion ();
    }
}

?>