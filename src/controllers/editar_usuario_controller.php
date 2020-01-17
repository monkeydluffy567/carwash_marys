<?php

session_start();
require_once("../models/usuario_privilegio.php");
$usuario_instanciado = new usuario_privilegio();

if ($_GET["id_usuario"]) {
    $id_usuario = $_GET["id_usuario"];    
    $usuario_encontrado = $usuario_instanciado->obtenerUsuario($id_usuario);
    $privilegios_sesion = $_SESSION['privilegios'];

    $viene_de_controller = true;
    require_once('facade_vista.php');
    $obj_facade = new facade_vista();
    $obj_facade->facade_panel_formulario('panel_usuario', 'formulario_editar_usuario','../controllers/usuario_controller.php', 'Listado de usuarios');
    $obj_facade->crear_contenido_formulario($privilegios_sesion,$usuario_encontrado);
} else {

    echo "Error";
}


