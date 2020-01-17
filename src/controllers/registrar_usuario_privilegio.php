<?php
//require_once("models/formulario_usuario_privilegio.html");
$id_usuario=$_POST["id_usuario"];
$id_privilegio=$_POST["privilegio"];

$usuario_privilegio = new usuario_privilegio();
$usuario_privilegio->set_usuario_privilegio($id_usuario,$id_privilegio);

?>