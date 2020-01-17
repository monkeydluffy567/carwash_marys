<?php

require_once ("../models/servicio.php");

$tipo_servicio = $_POST["tipo_servicio"];
$descripcion = $_POST["descripcion"];

$servicio_registrado = new servicio();
$servicio_registrado->set_servicio($tipo_servicio,$descripcion);



?>