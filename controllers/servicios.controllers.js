const serviciosControlers = {};
const database = require('../database/database');

serviciosControlers.sp_servicios_insert_update = function(req, res) {
    console.log('creacion y cambio de servicios');
};
serviciosControlers.sp_servicios_listar = function(req, res) {
    console.log('listar servicios');
};
serviciosControlers.sp_servicios_eliminar = function(req, res) {
    console.log('eliminar servicios');
};
serviciosControlers.sp_servicios_buscar = function(req, res) {
    console.log('buscar servicios');
}
module.exports = serviciosControlers;