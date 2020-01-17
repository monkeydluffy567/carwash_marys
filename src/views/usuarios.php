<?php
class usuarios
{
    function usuarios()
    { }

    public function mostrarVista($usuarios_encontrados)
    {

        if (count($usuarios_encontrados) == 1) {
            ?>

            <div id="cuerpo">
                <table class="informacion">

                    <tbody>
                        <?php
                                    foreach ($usuarios_encontrados as $registro) {
                                        echo "<tr>";
                                        echo "<th> ID  </th>";
                                        echo "<td>" . $registro["id_usuario"] . "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th> Usuario  </th>";
                                        echo "<td>" . $registro["usuario"] . "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th> Nombre  </th>";
                                        echo "<td>" . $registro["nombre"] . "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th> Apellido  </th>";
                                        echo "<td>" . $registro["apellido"] . "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th> Dni </th>";
                                        echo "<td>" . $registro["dni"] . "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th> Email  </th>";
                                        echo "<td>" . $registro["email"] . "</td>";
                                        echo "</tr>";

                                        echo "<tr>";
                                        echo "<th>  </th>";
                                        echo "<td><a href='../controllers/editar_usuario_controller.php?id_usuario=" . $registro['id_usuario'] . "'><button type='button'>Editar</button></a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                    </tbody>
                </table>
            </div>
        <?php
                } else {

                    ?>

            <div id="cuerpo">
                <table class="informacion">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                    foreach ($usuarios_encontrados as $registro) {
                                        echo "<tr class ='active-row'>";
                                        echo "<td>" . $registro["id_usuario"] . "</td>";
                                        echo "<td>" . $registro["usuario"] . "</td>";
                                        echo "<td>" . $registro["email"] . "</td>";
                                        echo "<td><a href='../controllers/visualizar_usuarios.php?id_usuario=" . $registro['id_usuario'] . "'><button type='button'>Detalles</button></a></td>";
                                        echo "</tr>";
                                    }
                                    ?>
                    </tbody>
                </table>
            </div>
<?php

        }
    }
}


?>