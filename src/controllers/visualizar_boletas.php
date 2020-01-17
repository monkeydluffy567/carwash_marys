<?php

session_start();

require_once("../models/boleta.php");

$boleta= new boleta();    
$boletas_encontradas= $boleta->obtenerBoletas();

$privilegios_sesion=$_SESSION['privilegios'];

$viene_de_controller=true;
require_once('facade_vista.php');
$obj_facade= new facade_vista();
$obj_facade->facade_panel_contenido('panel_usuario','boletas','Listado de boletas'); 
$obj_facade->crear_contenido_formulario($privilegios_sesion,$boletas_encontradas);

?>