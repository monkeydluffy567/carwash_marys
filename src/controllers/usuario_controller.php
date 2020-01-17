<?php
//importando usuario privilegio
require_once("../models/usuario_privilegio.php");
session_start();

if (isset($_POST['ingresar'])) {
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $usuario_logueado = new usuario_privilegio();  //instanciamos la clase usuario_privilegio();

    if ($usuario_encontrado = $usuario_logueado->loginUsuario($usuario, $password)) { //erificarmos si existe el usuario 
        //extraer los privilegios del usuario encontrado en la tabla de usuario_privilegio  
        //print_r($usuario_encontrado);con esto veo los arrays producto del metodo
        $id_encontrados = $usuario_encontrado[0]; //esto son los IDs array de un usuario encontrado             
        $id = (int) $id_encontrados['id_usuario']; //convirtiendo a Int
        //echo $id . '<br>'; imprimiendo id 8
        $usuario_privilegios = $usuario_logueado->obtenerPrivilegio($id); //DEVUELVE LOS PRIVILEGIOS EN forma de arrays (array de arrays)
        //print_r($usuario_privilegios);
        //echo '<br>';
        $privilegios = array();
        $i = 0;
        foreach ($usuario_privilegios as $registro) {
            $privilegios[$i] = (int) $registro['ID_PRIVILEGIO']; //todo esto se puefe convertir en una funcion
            //echo $privilegios[$i];
            $i = $i + 1;
        }
        $_SESSION['privilegios'] = $privilegios;
        $viene_de_controller = true;
        include_once('facade_vista.php');

        $obj_facade = new facade_vista();
        $obj_facade->facade_panel('panel_usuario', 'bienvenido');
        $obj_facade->crear_contenido($privilegios);
    } else {
        echo "USUARIO O CONTRASEÑA INCORRECTAS";
    }
} else {
    echo "ACCESO DENEGADO";
}

/*
class usuario_controller
{

    function validarUsuario($usuario, $password)
    {
        $usuario_logueado = new usuario_privilegio();
        $usuario_encontrado = $usuario_logueado->loginUsuario($usuario, $password);

        if ($usuario_encontrado) {
            echo 'BIENVENIDO ' . $usuario . '';
            $id_encontrado = $usuario_encontrado[0];
            $id = (int) $id_encontrado['id_usuario'];
        } else {
            $respuesta = 0;
        }

        return $id;
    }

    function obtener_usuario()
    { }

    function  obtener_privilegios($id)
    { }
}*/
