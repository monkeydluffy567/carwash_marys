<?php

session_start();

require_once("../models/proforma.php");

$proforma= new proforma();    
$proformas_encontradas= $proforma->obtenerProformas();

$privilegios_sesion=$_SESSION['privilegios'];

$viene_de_controller=true;
require_once('facade_vista.php');
$obj_facade= new facade_vista();
$obj_facade->facade_panel_contenido('panel_usuario','proformas','Listado de proformas'); 
$obj_facade->crear_contenido_formulario($privilegios_sesion,$proformas_encontradas);

?>
