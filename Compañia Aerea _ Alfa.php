<?php

require_once("CompaniaAerea.php");

class CompaniaAlfa extends CompaniaAerea {
    var $cdgautorizacionaerea; 

    function __construct ($nombre, $tlfnoemergencias, $cdgautorizacionaerea) {
        parent::__construct ($nombre, $tlfnoemergencias);
        $this->cdgautorizacionaerea = $cdgautorizacionaerea;
    }
    function setCdgAutorizacionAerea ($cdgautorizacionaerea) {
        $this->cdgautorizacionaerea = $cdgautorizacionaerea;
    }
    function getCdgAutorizacionAerea () {
        return $this->cdgautorizacionaerea;
    }
   
    function mostrar () {
        parent::mostrar();
        echo "CdgAutorizacionAerea:".$this->getCdgAutorizacionaerea();
    }
}

?>