<?php
//require('../models/servicio.php');



class formulario_proforma
{

    function formulario_proforma()
    { }

    public function mostrarForm()
    {
       
        ?>

        <div id="cuerpo">
            <form action="../controllers/proforma_controller.php" method="POST" class="informacion">

                <h3>GENERAR PROFORMA</h3>
                <!--El formato de la fecha es YMD HMS-->
                <label>Reserva<input type="checkbox" name=""><input type="date" name="reserva_fecha"><input type="time" name="reserva_hora"></label><br>
                <h4>Datos del cliente</h4>
                <label>Nombre:<input type="text" name="nombre" id="nombre"></label><br>
                <label>Apellido:<input type="text" name="apellido" id="apellido"></label><br>
                <label>DNI:<input type="text" name="dni" id="dni" required></label><br>
                <label>Telefono:<input type="text" name="telefono" id="telefono"></label><br>
                <h4>Datos del vehiculo</h4>
                <label>Placa:<input type="text" name="placa" id="placa"></label><br>
                <h4>Datos del servicio</h4>
                <label>Servicio:<input type="text" name="tipo_servicio" id="tipo_servicio"></label>
                <select name="" id="">
                    <option value="lavado_simple"> LAVADO SIMPLE</option>
                    <option value="lavado_salon"> LAVADO POR FUERA</option>
                    <option value="lavado_">LAVADO COMPLETO</option>
                </select>
                <br>
                <label>Extras:<input type="text" name="extras" id="extras"></label>
                <select name="" id=""> 
                    <option value="">Encerado</option>
                    <option value="">Lavado de motor</option>
                    <option value="">Lavado de salon</option>

                </select>
                <br>
                <label>Observaciones:<textarea name="observaciones" id="" cols="30" rows="5"></textarea></label><br><br>
                <label>Ver Disponibilidad</label><br>
                <label>Desde: <input type="date"></label><label>Hasta:<input type="date"></label>
                <input type="submit" name="generar_proforma" id="generar_proforma">
            </form>
        </div>




<?php
    }
}

?>