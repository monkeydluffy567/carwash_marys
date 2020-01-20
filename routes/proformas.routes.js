const express = require('express');
const router = express.Router();
const proformasController = require('../controllers/proformas.controllers');


router.post('/', proformasController.sp_proformas_insert_update);
router.get('/', proformasController.sp_proformas_listar);
router.delete('/', proformasController.sp_proformas_eliminar);
router.get('/:id', proformasController.sp_proformas_buscar);
module.exports = router;