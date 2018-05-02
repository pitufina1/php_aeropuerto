<?php

require_once("Empleado.php");

class PersonalOperativo extends Empleado {
    var $terminal; //Terminal: T1, T2, ...

    function __construct ($nombre, $fechanacimiento, $terminal) {
        parent::__construct ($nombre, $fechanacimiento);
        $this->terminal = $terminal;
    }
    function setTerminal ($terminal) {
        $this->terminal = $terminal;
    }
    function getTerminal () {
        return $this->terminal;
    }
   
    function mostrar () {
        parent::mostrar();
        echo "Terminal:".$this->getTerminal();
    }
}

?>