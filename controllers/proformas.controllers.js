const proformasControlers = {};
const database = require('../database/database');

proformasControlers.sp_proformas_insert_update = function(req, res) {
    console.log('creacion y cambio de proformas');
};
proformasControlers.sp_proformas_listar = function(req, res) {
    console.log('listar proformas');
};
proformasControlers.sp_proformas_eliminar = function(req, res) {
    console.log('eliminar proformas');
};
proformasControlers.sp_proformas_buscar = function(req, res) {
    console.log('buscar proformas');
}
module.exports = proformasControlers;