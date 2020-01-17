<?php

session_start();


require_once("../models/usuario_privilegio.php");

if (isset($_GET['id_usuario'])) {
    $id_usuario=$_GET['id_usuario'];
    $usuario= new usuario_privilegio();    
    $usuarios_encontrados= $usuario->obtenerUsuario($id_usuario);  

}else {
    $usuario= new usuario_privilegio();    
    $usuarios_encontrados= $usuario->get_usuarios();
}

$privilegios_sesion=$_SESSION['privilegios'];

$viene_de_controller=true;
require_once('facade_vista.php');
$obj_facade= new facade_vista();
$obj_facade->facade_panel_contenido('panel_usuario','usuarios','Listado de usuarios'); 
$obj_facade->crear_contenido_formulario($privilegios_sesion,$usuarios_encontrados);

?>