<?php



class panel_usuario
{
    private $privilegios;
    private $id_usuario;
    private $ruta;

    function panel_usuario()
    { }

    public function mostrarVista($privilegios)
    {

        ?>

        <div id="navbar" class="sidebar">
            <h2>MENU</h2>
            <ul>
                <li><a href="">Inicio</a></li>
                <?php
                        
                        foreach ($privilegios as $privilegio) {
                            ?>

                    <?php if ($privilegio == 2) { ?>
                        <li><a href='../controllers/proforma.php'>Generar proforma</a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 3) { ?>
                        <li><a href='../controllers/visualizar_proformas.php'>Visualizar proformas</a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 4) { ?>
                        <li><a href='../controllers/boleta.php'>Emitir boleta</a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 5) { ?>
                        <li><a href='../controllers/visualizar_boletas.php'>visualizar boleta</a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 6) { ?>
                        <li><a href='../controllers/solicitud_desembolso.php'>Generar solicitud de desembolso</a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 7) { ?>
                        <li><a href='../controllers/generar_reclamos.php'>Visualizar Reclamos</a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 8) { ?>
                        <li><a href='../controllers/visualizar_usuarios.php'>visualizar usuarios
                                </a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 9) { ?>
                        <li><a href='../controllers/registrar_usuario.php'>Registrar
                                usuarios </a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 11) { ?>
                        <li><a href='../controllers/registrar_cliente.php'>Registrar
                                cliente </a></li>
                    <?php }  ?>

                    <?php if ($privilegio == 12) { ?>
                        <li><a href='../controllers/registrar_vehiculo.php'>Registrar
                                vehiculo </a></li>
                    <?php }  ?>

                    

                <?php }
                        ?>


            </ul>

        </div>

<?php
    }
}
?>