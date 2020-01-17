<?php

session_start();

require_once('../models/cliente.php');

if (isset($_POST['registro_cliente'])) {
    $dni=$_POST['dni'];
    $dni=$_POST['nombre'];
    $dni=$_POST['telefono'];
    $dni=$_POST['email'];
    $dni=$_POST['direccion'];

$cliente = new cliente();
$cliente-> establecerCliente($dni,$nombre,$telefono,$email,$direccion);
    
}else {
    
    $privilegios_sesion = $_SESSION['privilegios'];

    $viene_de_controller=true;

    require_once('facade_vista.php');
    $obj_facade = new facade_vista();

    $obj_facade->facade_panel_formulario('panel_usuario', 'formulario_registrar_cliente', '../controllers/registrar_cliente.php', 'Registrar Cliente');
    $obj_facade->crear_panel_formulario($privilegios_sesion);



}

?>