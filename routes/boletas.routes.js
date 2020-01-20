const express = require('express');
const router = express.Router();
const boletasController = require('../controllers/boletas.controllers');


router.post('/', boletasController.sp_boletas_insert_update);
router.get('/', boletasController.sp_boletas_listar);
router.delete('/', boletasController.sp_boletas_eliminar);
router.get('/:id', boletasController.sp_boletas_buscar);
module.exports = router;