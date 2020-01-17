<?php

require("usuario.php");
require("privilegio.php");

class usuario_privilegio extends usuario implements privilegio{
    public function usuario_privilegio(){

        parent::__construct();
        
    }


    public function establecerUsuarioPrivilegio($id_usuario,$id_privilegio){
        $sql="INSERT INTO USUARIO_PRIVILEGIO(ID_USUARIO,ID_PRIVILEGIO) VALUES ('".$id_usuario."','".$id_privilegio."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $sentencia->closeCursor();
        $this->conexion_db=null;
    }   

    public function obtenerUsuariosPrivilegios(){
        $sql="SELECT * FROM USUARIO_PRIVILEGIO";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $resultado;
        $this->conexion_db=null;

    }

    public function obtenerUsuarioPrivilegio($id_usuario){
        $sql="SELECT * FROM USUARIO_PRIVILEGIO WHERE `ID_USUARIO`='".$id_usuario."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $resultado;
        $this->conexion_db=null;

    }

    

    //---------------------------------------------------------

    public function set_privilegio()
    {
        
    }

    public function obtenerPrivilegio($id_usuario){
        $sql="SELECT ID_PRIVILEGIO FROM USUARIO_PRIVILEGIO WHERE `ID_USUARIO`='".$id_usuario."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $resultado;
        $this->conexion_db=null;

    }

    public function get_privilegios()
    {
        
    }


}

?>