const express = require('express');
const router = express.Router();
const rolesController = require('../controllers/roles.controllers');


router.post('/', rolesController.sp_roles_insert_update);
router.get('/', rolesController.sp_roles_listar);
router.delete('/', rolesController.sp_roles_eliminar);
router.get('/:id', rolesController.sp_roles_buscar);
module.exports = router;