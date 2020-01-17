<?php
class formulario_solicitud_desembolso
{

    function formulario_solicitud_desembolso()
    { }

    public function mostrarForm()
    {

        ?>
        <div>
            <form action="../controllers/proforma_controller.php" method="POST">
                <label> Buscar: <input type="text" name="dato_ingresado"></label>
                <input type="submit" name="buscar_proforma" value="buscar">
            </form>
        </div>
        <div>
            <form action="../controllers/boleta_controller.php" method="POST">
                <label> Buscar: <input type="text" name="dato_ingresado"></label>
                <input type="submit" name="buscar_proforma" value="buscar">
            </form>
        </div>

        <div id="cuerpo">
            <form class="informacion" action="../controllers/desembolso_controller">
                <h3>GENERAR SOLICITUD</h3>
                <label>visualizar(Buscar) Proforma: <input type="text"></label><br>
                <label>visualizar(Buscar) Boleta: <input type="text" readonly></label><br>
                <label>Extraer observaciones de la Proforma: <input type="text" readonly></label><br>
                <label>Tipo de reclamo: <input type="text" readonly></label><br>
                <label>Daño: <input type="radio" name="tipo_reclamo" value="daño"> Pérdida:<input type="radio" name="tipo_reclamo" value="perdida"></label><br>
                <label><input type="submit" name="registrar_solicitud" value="Registrar solicitud"></label>

            </form>
        </div>



<?php
    }
}
?>