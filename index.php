<?php
$viene_de_controller=false;
include_once('controllers/facade_vista.php');

$obj_facade= new facade_vista();
$obj_facade->facade_form('formulario_login','controllers/usuario_controller.php','Login');
$obj_facade->crear_formulario();
?>