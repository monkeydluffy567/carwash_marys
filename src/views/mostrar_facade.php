<?php
include_once('facade_vista.php');

$obj_facade= new facade_vista('formulario_login','../controllers/validar_usuario.php','Login');

$obj_facade->crear_vista();

?>

