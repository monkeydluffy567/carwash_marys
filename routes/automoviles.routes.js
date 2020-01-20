const express = require('express');
const router = express.Router();
const automovilesController = require('../controllers/automoviles.controllers');


router.post('/', automovilesController.sp_automoviles_insert_update);
router.get('/', automovilesController.sp_automoviles_listar);
router.delete('/', automovilesController.sp_automoviles_eliminar);
router.get('/:id', automovilesController.sp_automoviles_buscar);
module.exports = router;