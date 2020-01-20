const jwt = require('jwt-simple');
const moment = require('moment');
const secret = 'iTeamDevs';

exports.crearToken = function(usuario) {
    const payload = {
        id_usuario: usuario.id_usuario,
        nombre: usuario.nombre,
        apellido: usuario.apellido,
        email: usuario.email,
        telefono: usuario.telefono,
        iat: moment().unix(),
        exp: moment().add(30, 'dias').unix
    };
    return jwt.encode(payload, secret);
};

exports.decodificarToken = function(req, res) {
    const token = req.split(" ")[1];
    const payload = jwt.decode(token, secret);
    return payload;
};