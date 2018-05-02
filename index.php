<?php
require_once("agencia.php");

$ag1 = new Agencia ("Aena");

//ALTAS Y BAJAS -> EMPLEADOS.
$e1 = new AltaDireccion ("Adrian","25-02-1970",35);
$ag1->altaEmpleado($e1);

$e2 = new ControladorAereo ("Blas","28-01-1977",2500);
$ag1->altaEmpleado($e2);

$e3 = new ControladorAereo ("Celia","25-09-1982","20",1750);
$ag1->altaEmpleado($e3);

$e4 = new PersonalOperativo ("Daniel","16-03-1978","T1");
$ag1->altaEmpleado($e4);

$e5 = new PersonalOperativo ("Eugenia","03-04-1985","T2");
$ag1->altaEmpleado($e5);

$e6 = new PersonalOperativo ("Fatima","13-05-1983","T3");
$ag1->altaEmpleado($e6);

$ag1->bajaEmpleado("Fatima");



//ALTAS Y BAJAS -> AEROPUERTO

$aero1 = new AeropuertoInternacional ("MAD","42º33'N","50º01'E",5,4);
$ag1->altaAeropuerto($a1);

$a2 = new AeropuertoInternacional ("BCN","29º42'S","13º03'O",3,3);
$ag1->altaAeropuerto($a2);

$ag1->bajaAeropuerto("BCN");


//ALTAS Y BAJAS -> COMPAÑIAS AEREAS

$compaerea1 = new CompaniaGamma ("Iberia", 915687356, 150, "1963");
$ag1->altaCompaniaAerea ($ag1);

$compaerea2 = new CompaniaAlfa ("Spanair", 918836902, 120, "A00003864");
$ag1-> altaCompaniaAerea($compaerea2);

$ag1->bajaCompaniaAerea("Spanair");
 

//ALTAS Y BAJAS -> VUELOS

$vu1 = new Vuelo ("3478", "Madrid", "Mallorca", "06-04-2018", "11:00");
$ag1->altaVuelo ($vu1);

$vu2 = new Vuelo ("4897", "Badajoz", "Barcelona", "08-04-2018", "16:00");
$ag1 = altaVuelo ($vu2);

$ag1->bajaVuelo ("4897");


//ALTAS Y PISTAS -> PISTAS

$pi1 = new Pista ("200", "Norte");
$ag1->altaPista ($pi1);

$pi2 = new Pista ("200", "Sur");
$ag1->altaPista ($pi2);

$ag1->bajaPista ("200");



echo "<pre>";
print_r ($ag1);
echo "</pre>";

?>