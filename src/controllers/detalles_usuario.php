<?php
$id_usuario=$_GET["id_usuario"];
require_once("../models/usuario.php");
$usuario=new usuario();
$detalle_usuario=$usuario->obtener_usuario($id_usuario);
require_once("../views/informacion_detalle_usuario.php");

?>