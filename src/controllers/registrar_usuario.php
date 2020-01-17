<?php

session_start();

require_once("../models/usuario_privilegio.php");

if (isset($_POST['registro_usuario'])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $usuario_registrado = new usuario_privilegio();
    $usuario_registrado->set_usuario($nombre, $apellido, $dni, $usuario, $password);
    
} else {

    $usuario = new usuario_privilegio();
    $usuarios_encontrados = $usuario->get_usuarios();

    $privilegios_sesion = $_SESSION['privilegios'];

    $viene_de_controller = true;
    require_once('facade_vista.php');
    $obj_facade = new facade_vista();
    $obj_facade->facade_panel_formulario('panel_usuario', 'formulario_registrar_usuario', '../controllers/registrar_usuario.php', 'Registrar Usuario');
    $obj_facade->crear_panel_formulario($privilegios_sesion);
    
    
}

    