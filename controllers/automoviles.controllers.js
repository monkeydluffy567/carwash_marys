const automovilesControlers = {};
const database = require('../database/database');

automovilesControlers.sp_automoviles_insert_update = function(req, res) {
    console.log('creacion y cambio de automoviles');
};
automovilesControlers.sp_automoviles_listar = function(req, res) {
    console.log('listar automoviles');
};
automovilesControlers.sp_automoviles_eliminar = function(req, res) {
    console.log('eliminar automoviles');
};
automovilesControlers.sp_automoviles_buscar = function(req, res) {
    console.log('buscar automoviles');
}
module.exports = automovilesControlers;