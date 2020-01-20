const rolesControlers = {};
const database = require('../database/database');

rolesControlers.sp_roles_insert_update = function(req, res) {
    console.log('creacion y cambio de roles');
};
rolesControlers.sp_roles_listar = function(req, res) {
    console.log('listar roles');
};
rolesControlers.sp_roles_eliminar = function(req, res) {
    console.log('eliminar roles');
};
rolesControlers.sp_roles_buscar = function(req, res) {
    console.log('buscar roles');
}
module.exports = rolesControlers;