<?php
require_once ("../models/vehiculo.php");

$placa=$_POST["placa"];
$tipo=$_POST["tipo"];
$id_cliente=$_POST["id_cliente"];

$vehiculo_registrado= new vehiculo();
$vehiculo_registrado->set_vehiculo($placa,$tipo,$id_cliente);


?>