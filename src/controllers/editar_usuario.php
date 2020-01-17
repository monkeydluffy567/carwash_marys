
<?php

require_once("../models/usuario_privilegio.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$id_usuario = $_POST['id_usuario'];

$usuario_instanciado = new usuario_privilegio();
$usuario_edicion = $usuario_instanciado->actualizarUsuario($id_usuario, $nombre, $apellido, $dni, $email);

?>
    