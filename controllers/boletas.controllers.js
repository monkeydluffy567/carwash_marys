const boletasControlers = {};
const database = require('../database/database');

boletasControlers.sp_boletas_insert_update = function(req, res) {
    console.log('creacion y cambio boletas');
};
boletasControlers.sp_boletas_listar = function(req, res) {
    console.log('listar boletas');
};
boletasControlers.sp_boletas_eliminar = function(req, res) {
    console.log('eliminar boletas');
};
boletasControlers.sp_boletas_buscar = function(req, res) {
    console.log('buscar boletas');
}
module.exports = boletasControlers;