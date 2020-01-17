<?php

if ($viene_de_controller) {
    require_once("../views/encabezado.php");
    require_once("../views/pie.php");
    require_once("../controllers/vista_factory.php");
    
}else{
    require_once("views/encabezado.php");
    require_once("views/pie.php");
    require_once("controllers/vista_factory.php");
}

class facade_vista
{
    private $head;
    private $pie;
    private $panel_usuario;
    private $form_factory;
    private $panel_factory;
    private $nueva_vista;
    private $id;

    function facade_vista()
    { }


    function facade_form($tipo, $ruta, $titulo)
    {
        $this->head = new encabezado($titulo);
        $this->pie = new pie;
        //$this -> panel_usuario = new panel_usuario($id);
        $this->form_factory = new vista_factory;
        $this->nueva_vista = $this->form_factory->crear_form($tipo, $ruta);
    }

    function facade_panel($tipo, $titulo)
    {
        $this->head = new encabezado($titulo);
        $this->pie = new pie;
        $this->panel_factory = new vista_factory;
        $this->nueva_vista = $this->panel_factory->crear_cont($tipo);
    }

    function facade_panel_contenido($tipo,$tipo2, $titulo)
    {
        $this->head = new encabezado($titulo);
        $this->pie = new pie;
        $this->panel_factory = new vista_factory;
        $this->panel_usuario = $this->panel_factory->crear_cont($tipo);
        $this->form_factory = new vista_factory;
        $this->nueva_vista = $this->panel_factory->crear_cont($tipo2);
    }

    public function facade_panel_formulario($tipo,$tipo2,$ruta,$titulo){
        $this->head = new encabezado($titulo);
        $this->pie = new pie;
        $this->panel_factory = new vista_factory;
        $this->panel_usuario = $this->panel_factory->crear_cont($tipo);
        $this->form_factory = new vista_factory;
        $this->nueva_vista = $this->panel_factory->crear_form($tipo2,$ruta);

    }

    public function crear_formulario()
    {
        $this->head->mostrarEncabezado();
        $this->nueva_vista->mostrarForm();
        $this->pie->mostrarPie();
    }
    public function crear_contenido($id)
    {
        $this->head->mostrarEncabezado();
        $this->nueva_vista->mostrarVista($id);
        $this->pie->mostrarPie();
    }

    public function crear_contenido_formulario($id,$usuarios)
    {
        $this->head->mostrarEncabezado();
        $this->panel_usuario->mostrarVista($id);
        $this->nueva_vista->mostrarVista($usuarios);
        $this->pie->mostrarPie();
    }

    public function crear_panel_formulario($id){
        $this->head->mostrarEncabezado();
        $this->panel_usuario->mostrarVista($id);
        $this->nueva_vista->mostrarForm();
        $this->pie->mostrarPie();
        
    }
}
