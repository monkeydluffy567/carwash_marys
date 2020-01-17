<?php

class formulario_login
{
    private $ruta;
    function formulario_login($ruta)
    {
        $this->ruta = trim($ruta);
    }

    public function mostrarForm()
    {
        ?>

        <center>
            <div id="cuerpo">
                <form class="form-login" action="<?php echo $this ->ruta; ?>" method="POST">
                    <table>
                        <label>Usuario: <input type="text" name="usuario" id="usuario"></label><br>
                        <label>Contraseña: <input type="password" name="password" id="password"></label><br>
                        <td><input type="submit" name="ingresar" id="Ingresar" value="Ingresar"></td>
                    </table>
                </form>
            </div>
        </center>




<?php

    }
}

?>