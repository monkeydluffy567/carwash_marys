const express = require('express');
const router = express.Router();
const serviciosController = require('../controllers/servicios.controllers');


router.post('/', serviciosController.sp_servicios_insert_update);
router.get('/', serviciosController.sp_servicios_listar);
router.delete('/', serviciosController.sp_servicios_eliminar);
router.get('/:id', serviciosController.sp_servicios_buscar);
module.exports = router;