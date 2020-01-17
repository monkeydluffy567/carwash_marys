<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../views/css/estilosothers.css">
</head>

<body>
    <h2>DETALLE DE USUARIO</h2>
    <table class="happy-table">
        <?php
        foreach ($detalle_usuario as $registro) {
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
            echo "<td><a href='../controllers/editar_usuario.php?id_usuario=" . $registro['id_usuario'] . "'><button type='button'>Editar</button></a></td>";            
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>