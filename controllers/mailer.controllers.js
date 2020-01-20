const nodemailer = require("nodemailer");
const mailerController = {};

mailerController.sendPassword = function(data, flag) {
    let transporter = nodemailer.createTransport({
        host: 'smtp.gmail.com',
        port: 465,
        secure: true,
        auth: {
            user: 'cuenta@gmail.com',
            pass: 'password'
        }
    });
    transporter.sendMail({
        from: 'cuenta@gmail.com',
        to: data.email,
        subject: 'car wash',
        text: '',
        html: bodyEmail(data, flag)
    });
};


function bodyEmail(dato, tipo) {

    var body = ''
    if (tipo == 1) {

        body = `
    <table class="contenedor" border="0" style="width: 60%; padding-left: 5%;" width="60%">
    <tr>
        <td>
            <div class="header"
                style="background: #ed4b5a; text-align: center; height: 100%; padding-top: 20px; padding-bottom: 20px; border-radius: 22px 0px;">
                <a href="https://ubicania.com/comercio/car-wash-mary-s-10102394271" style="text-decoration: none;">
                    <span class="titulo"
                        style="color: #fff; font-size: 40px; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
                        ¡ BIENVENIDO A cardwash marys !</span>
                </a>
            </div>
        </td>
    </tr>
    <tr class="cuerpo"
        style="background: #F2F3F4; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
        <td>
            <div class="cuerpo2" style="padding-left: 5%;">
                <br><br>
                <div class="titulo2"
                    style="font-size: 20px; text-align: center; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
                    <b> <span> Accede a la aplicacion con las siguientes credenciales:</span></b> <br><br>
                </div>
              
                <table>
                    <tr>
                        <td><b>Usuario</b></td>
                        <td><b>:</b>  ` + dato.email + `</td>
                    </tr>
                    <tr>
                        <td><b>Contraseña</b></td>
                        <td><b>:</b> ` + dato.password + `</td>
                    </tr>
                    
                </table>
              <p>
                *Importate: te recomendamos que cambies tu contraseña la primera vez que accedas a la aplicacion
              </p>
                <br>
                <br>
                <br>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="footer"
                style="background: #ed4b5a; text-align: center; height: 100%; padding-top: 10px; padding-bottom: 10px; color: #fff; font-size: 12px; border-radius: 0px 0px 10px 10px; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
                <span>© 2019 cardwash marys. Todos los derechos reservados.</span>
            </div>
        </td>
    </tr>
</table>
    `
    } else {

        body = `
    <table class="contenedor" border="0" style="width: 60%; padding-left: 5%;" width="60%">
    <tr>
        <td>
            <div class="header"
                style="background: #ed4b5a; text-align: center; height: 100%; padding-top: 20px; padding-bottom: 20px; border-radius: 22px 0px;">
                <a href="https://ubicania.com/comercio/car-wash-mary-s-10102394271" style="text-decoration: none;">
                    <span class="titulo"
                        style="color: #fff; font-size: 40px; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
                        ¡  cardwash marys !</span>
                </a>
            </div>
        </td>
    </tr>
    <tr class="cuerpo"
        style="background: #F2F3F4; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
        <td>
            <div class="cuerpo2" style="padding-left: 5%;">
                <br><br>
                <div class="titulo2"
                    style="font-size: 20px; text-align: center; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
                    <b> <span> Solicitaste restablecer tu contraseña, usa el siguiente código para acceder temporalmente y luego  configura una nueva contraseña.</span></b> <br><br>
                </div>
              
                <table>
                    <tr>
                        <td><b>Acceso Temporal</b></td>
                        <td><b>:</b> ` + dato.password + `</td>
                    </tr>
                    <tr>
                        <td><b>Usuario</b></td>
                        <td><b>:</b> ` + dato.email + `</td>
                    </tr>
                    
                </table>
              <p>
                *Importate: te recomendamos que cambies tu contraseña la primera vez que accedas a la aplicacion.
              </p>
                <br>
                <br>
                <br>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div class="footer"
                style="background: #ed4b5a; text-align: center; height: 100%; padding-top: 10px; padding-bottom: 10px; color: #fff; font-size: 12px; border-radius: 0px 0px 10px 10px; font-family: ‘Lucida Sans’, ‘Lucida Sans Regular’, ‘Lucida Grande’, ‘Lucida Sans Unicode’, Geneva, Verdana, sans-serif;">
                <span>© 2019 cardwash marys. Todos los derechos reservados.</span>
            </div>
        </td>
    </tr>
</table>
    `
    }
    return body;
}


module.exports = mailerController;