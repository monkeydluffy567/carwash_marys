const usuariosControlers = {};
const database = require('../database/database');

usuariosControlers.sp_usuarios_insert_update = function(req, res) {
    console.log('creacion y cambio de usuarios');
};
usuariosControlers.sp_usuarios_listar = function(req, res) {
    console.log('listar usuarios');
};
usuariosControlers.sp_usuarios_eliminar = function(req, res) {
    console.log('eliminar usuarios');
};
usuariosControlers.sp_usuarios_buscar = function(req, res) {
    console.log('buscar usuarios');
}
module.exports = usuariosControlers;