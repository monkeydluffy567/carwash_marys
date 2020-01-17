<?php
if ($viene_de_controller) {
    include_once("../views/inicio.php");
    include_once("../views/formulario_login.php");
    include_once("../views/panel_usuario.php");
    include_once("../views/usuarios.php");
    include_once("../views/listado_proformas.php");
    include_once("../views/listado_boletas.php");
    
    include_once("../views/formulario_proforma.php");
    include_once("../views/formulario_solicitud_desembolso.php");
    include_once("../views/formulario_boleta.php");
    include_once("../views/formulario_editar_usuario.php");
    include_once("../views/formulario_registrar_usuario.php");
    include_once("../views/formulario_registrar_usuario.php");
    include_once("../views/formulario_registrar_cliente.php");
} else {
    include_once("views/formulario_login.php");
    include_once("views/panel_usuario.php");
    include_once("views/usuarios.php");
    include_once("views/formulario_proforma.php");
    include_once("views/formulario_solicitud_desembolso.php");
    include_once("views/formulario_boleta.php");
}

class vista_factory
{

    public static function crear_form($tipo, $ruta)
    {

        switch ($tipo) {
            case 'formulario_login':
                return new formulario_login($ruta);
            case 'formulario_proforma';
                return new formulario_proforma($ruta);//f
            case 'formulario_boleta':
                return new formulario_boleta($ruta);
            case 'formulario_solicitud_desembolso':
                return new formulario_solicitud_desembolso($ruta);//f
            case 'formulario_editar_usuario':
                return new editar_usuario($ruta);    
            case 'formulario_registrar_usuario':
                return new formulario_registrar_usuario($ruta);        
            case 'formulario_registrar_cliente':
                return new formulario_registrar_cliente($ruta);        
            default:
                return new Exception("no existen formularios");
        }
    }

    public static function crear_cont($tipo)
    {

        switch ($tipo) {

            case 'inicio':
                return new inicio();
            case 'panel_usuario':
                return new panel_usuario();
            case 'usuarios':
                return new usuarios();
            case 'proformas':
                return new listado_proformas();
            case 'boletas':
                return new listado_boletas();    
            case 'solicitudes_reclamos':
                return new solicitud_reembolso();        
            default:
                return new Exception("no existen formularios");
        }
    }

    public function obtener_tipo()
    {
        return get_class($this);
    }
}
