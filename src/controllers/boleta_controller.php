<?php

require_once('../models/boleta.php');

if (isset($_POST['registrar_boleta'])) {
    $id_proforma=$_POST['id_proforma'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $telefono=$_POST['telefono'];
    $tipo_servicio=$_POST['tipo_servicio'];
    $extras=$_POST['extras'];
    $total=$_POST['total'];

    $boleta= new boleta();
    $boleta -> establecerBoleta($id_proforma,$nombre,$apellido,$dni,$telefono,$tipo_servicio);    

}else if (false) {
    # code...
}else if (isset($_POST['buscar_boleta'])) {
    $dato_ingresado = $_POST['dato_ingresado'];
    $boleta = new boleta();
    $boletas_encontradas = $boleta->obtenerBoleta($dato_ingresado);

    $privilegios_sesion = $_SESSION['privilegios'];
    $viene_de_controller = true;
    require_once('facade_vista.php');

    $obj_facade = new facade_vista();
    $obj_facade->facade_panel_formulario('panel_usuario', 'formulario_solicitud_desembolso', '../controllers/boleta_controller.php', 'Generar Boleta');

}







?>