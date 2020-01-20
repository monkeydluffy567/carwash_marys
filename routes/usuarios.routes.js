const express = require('express');
const router = express.Router();
const usuariosController = require('../controllers/usuarios.controllers');


router.post('/', usuariosController.sp_usuarios_insert_update);
router.get('/', usuariosController.sp_usuarios_listar);
router.delete('/', usuariosController.sp_usuarios_eliminar);
router.get('/:id', usuariosController.sp_usuarios_buscar);
module.exports = router;