<?php

class formulario_registrar_usuario
{
    function formulario_registrar_usuario()
    { }

    public function mostrarForm()
    {
        ?>

        <div id="cuerpo">
            <form action='../controllers/registrar_usuario.php' method="POST">
                <div class="container">
                    <h1>Registrar usuario</h1>
                    <p>Llene los campos necesarios.</p>
                    <hr>                   

                    <label ><b>Nombre</b></label>
                    <input type="text"  name="nombre" required><br>

                    <label ><b>Apellido</b></label>
                    <input type="text"  name="apellido" required><br>

                    <label ><b>Dni:</b></label>
                    <input type="text" name="dni" required><br>

                    <label ><b>Email:</b></label>
                    <input type="text" name="email" required><br>

                    <label ><b>usuario</b></label>
                    <input type="text"  name="usuario" required><br>

                    <label ><b>Password</b></label>
                    <input type="text"  name="password"><br>

                    <button type="button" class="cancelar">Cancelar</button>
                    <button type="submit" name="registro_usuario">Registrar</button>

                </div>
            </form>




        </div>









<?php
    }
}
?>