<?php
class listado_proformas
{
    function listado_proformas()
    { }

    function mostrarVista($proformas_encontradas)
    {
        ?>

        <div id="cuerpo">
            <table class="informacion">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Reserva</th>
                        <th>Dni</th>
                        <th>Nombre</th>                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            foreach ($proformas_encontradas as $registro) {
                                echo "<tr class ='active-row'>";
                                echo "<td>" . $registro["id_proforma"] . "</td>";
                                echo "<td>" . $registro["reserva_fecha"] . "</td>";                         
                                echo "<td>" . $registro["dni"] . "</td>";
                                echo "<td>" . $registro["nombre"] . "</td>";
                                echo "<td><a href='../controllers/detalles_usuario.php?id_proforma=" . $registro['id_proforma'] . "'><button type='button'>Detalles</button></a></td>";
                                echo "</tr>";
                            }
                            ?>
                </tbody>
            </table>
        </div>
<?php

    }
}


?>