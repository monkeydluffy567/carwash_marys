<?php
class formulario_boleta
{

    function formulario_boleta()
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

        <div id="cuerpo">
            <form action="../controllers/boleta_controller.php" method="POST" class="informacion">

                <h3>GENERAR BOLETA</h3>
                <!--El formato de la fecha es YMD HMS-->
                <h4>Datos del cliente</h4>
                <label>Nombre:<input type="text" name="nombre"></label><br>
                <label>Apellido:<input type="text" name="apellido"></label><br>
                <label>DNI:<input type="text" name="dni" id="dni"></label><br>
                <label>Telefono:<input type="text" name="telefono"></label><br>

                <h4>Datos del servicio</h4>
                <label>Servicio:<input type="text" name="tipo_servicio"></label><br>
                <label>Extras:<input type="text" name="extras"></label><br><br>
                <label>TOTAL:<input type="text" name="total"></label><br><br>

                <input type="submit" name="registrar_boleta">
            </form>
        </div>



        <?php
            }

            public function mostrarVista($proformas_encontradas)
            {
                foreach ($proformas_encontradas as $registro) {

                    ?>

            <div id="cuerpo">
                <form action="../controllers/boleta_controller.php" method="POST" class="informacion">

                    <h3>GENERAR BOLETA</h3>
                    <!--El formato de la fecha es YMD HMS-->
                    <h4>Datos de Proforma</h4>
                    <label>ID Proforma:<input type="text" name="id_proforma" value="<?php echo $registro['id_proforma']; ?>" readonly></label><br>

                    <label>Nombre:<input type="text" name="nombre" value="<?php echo $registro['nombre']; ?>" readonly></label><br>

                    <label>Apellido:<input type="text" name="apellido" value="<?php echo $registro['apellido']; ?>" readonly></label><br>

                    <label>DNI:<input type="text" name="dni" id="dni" value="<?php echo $registro['dni']; ?>" readonly></label><br>

                    <label>Telefono:<input type="text" name="telefono" value="<?php echo $registro['telefono']; ?>" readonly></label><br>

                    <h4>Datos del servicio</h4>
                    <label>Servicio:<input type="text" name="tipo_servicio" value="<?php echo $registro['tipo_servicio']; ?>" readonly></label><br>
                    <label>Extras:<input type="text" name="extras" readonly></label><br><br>
                    <label>TOTAL:<input type="text" name="total" readonly></label><br><br>

                    <input type="submit" name="registrar_boleta" value="registrar">
                </form>
            </div>

<?php

        }
    }
}
?>