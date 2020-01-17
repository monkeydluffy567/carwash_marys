<?php
session_start();
require_once("../models/usuario_privilegio.php");
$usuario= new usuario_privilegio();    
$usuarios_encontrados= $usuario->get_usuarios();

$privilegios_sesion=$_SESSION['privilegios'];
$viene_de_controller=true;
require_once('facade_vista.php');
$obj_facade = new facade_vista();
$obj_facade -> facade_panel_formulario('panel_usuario','formulario_solicitud_desembolso','../controllers/desembolso_controller.php','Generar Solicitud');
$obj_facade-> crear_panel_formulario($privilegios_sesion);


?>