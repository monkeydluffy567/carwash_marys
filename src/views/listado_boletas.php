<?php
class listado_boletas
{
    function listado_boletas()
    { }

    function mostrarVista($boletas_encontradas)
    {
        ?>

        <div id="cuerpo">
            <table class="informacion">
                <thead>
                    <tr>
                        <th>Id</th>                        
                        <th>Dni</th>
                        <th>Nombre</th>                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            foreach ($boletas_encontradas as $registro) {
                                echo "<tr class ='active-row'>";
                                echo "<td>" . $registro["id_boleta"] . "</td>";                    
                                echo "<td>" . $registro["dni"] . "</td>";
                                echo "<td>" . $registro["nombre"] . "</td>";
                                echo "<td><a href='../controllers/detalles_usuario.php?id_boleta=" . $registro['id_boleta'] . "'><button type='button'>Detalles</button></a></td>";
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