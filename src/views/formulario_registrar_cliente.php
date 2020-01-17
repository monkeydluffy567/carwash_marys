<?php

class formulario_registrar_cliente{
    function formulario_registrar_cliente(){

    }

    public function mostrarForm(){

        ?>

<div id="cuerpo">
            <form action='../controllers/registrar_cliente.php' method="POST">
                <div class="container">
                    <h1>Registrar Cliente</h1>
                    <p>Llene los campos necesarios.</p>
                    <hr>          

                    <label ><b>Dni:</b></label>
                    <input type="text" name="dni" required><br>         

                    <label ><b>Nombre</b></label>
                    <input type="text"  name="nombre" required><br>

                    <label ><b>Telefono</b></label>
                    <input type="text"  name="apellido" required><br>
                    

                    <label ><b>Email:</b></label>
                    <input type="text" name="email" required><br>
                    
                    <button type="submit" name="registro_cliente">Registrar</button>

                </div>
            </form>

        <?php


    }


}
?>