<?php

class editar_usuario
{

    function editar_usuario()
    { }

    function mostrarVista($usuario_encontrado)
    {
        ?>

        <div id="cuerpo">
            <?php foreach ($usuario_encontrado as $registro) {                
                ?>
                <form action='../controllers/editar_usuario.php' method="POST">
                    <div class="container">
                        <h1>Editando usuario</h1>
                        <p>Llene los campos necesarios.</p>
                        <hr>

                        <label for="nombre"><b>ID</b></label>
                        <input type="text" value="<?php echo $registro['id_usuario']; ?>" name="id_usuario" readonly>

                        <label for="nombre"><b>Nombre</b></label>
                        <input type="text" value="<?php echo $registro['nombre']; ?>" name="nombre" required>

                        <label for="apellido"><b>Apellido</b></label>
                        <input type="text" value="<?php echo $registro['apellido']; ?>" name="apellido" required>

                        <label for="dni"><b>Dni:</b></label>
                        <input type="text" value="<?php echo $registro['dni']; ?>" name="dni" required>

                        <label for="email"><b>Email:</b></label>
                        <input type="text" value="<?php echo $registro['email']; ?>" name="email" required>                                              

                        <button type="button" class="cancelar">Cancelar</button>
                        <button type="submit" class="enviar">Editar</button>
                        
                    </div>
                </form>

            <?php } ?>


        </div>




<?php

    }
}


?>