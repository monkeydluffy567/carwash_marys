<?php
require_once('../models/proforma.php');

session_start();


if (isset($_POST['generar_proforma'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $placa = $_POST['placa'];
    $hora = $_POST['reserva_hora'];
    $fecha = $_POST['reserva_fecha'];
    $servicio = $_POST['tipo_servicio'];
    //$extras=$_POST['extras'];
    $observaciones = $_POST['observaciones'];

    $nueva_proforma = new proforma();

    $nueva_proforma->establecerProforma($nombre, $apellido, $dni, $telefono, $placa, $hora,$fecha, $servicio, $observaciones);

} elseif (isset($_POST['editar_proforma'])) { 
    # gsdhaksjdh

} elseif (isset($_POST['buscar_proforma'])) {

    $dato_ingresado = $_POST['dato_ingresado'];
    $proforma = new proforma();
    $proformas_encontradas = $proforma->obtenerProforma($dato_ingresado);

    $privilegios_sesion = $_SESSION['privilegios'];
    $viene_de_controller = true;
    require_once('facade_vista.php');

    $obj_facade = new facade_vista();
    $obj_facade->facade_panel_formulario('panel_usuario', 'formulario_boleta', '../controllers/boleta_controller.php', 'Generar Boleta');
    $obj_facade->crear_contenido_formulario($privilegios_sesion, $proformas_encontradas);
}
