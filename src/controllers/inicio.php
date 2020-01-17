<?php

session_start();

$privilegios_sesion=$_SESSION['privilegios'];

$viene_de_controller=true;
require_once('facade_vista.php');
$obj_facade= new facade_vista();
$obj_facade->facade_panel_contenido('panel_usuario','inicio','Inicio'); 
$obj_facade->crear_contenido_formulario($privilegios_sesion,$usuarios_encontrados);



?>