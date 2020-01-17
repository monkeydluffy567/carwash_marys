<?php
require("conexion.php");

class servicio extends conexion{
    protected $id_servicio;
    protected $tipo_servicio;
    protected $descripcion;

    public function servicio(){
        parent::__construct();
        
    }

    public function obtenerServicios(){
        $sql="SELECT * FROM SERVICIO ";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;
    }

    public function establecerServicio($tipo_servicio,$descripcion){
        $sql="INSERT INTO SERVICIO(ID_SERVICIO,TIPO_SERVICIO,DESCRIPCION) VALUES ('','".$tipo_servicio."','".$descripcion."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $sentencia->closeCursor();
        $this->conexion_db=null;

    }

    public function obtenerServicio($id_servicio){
        $sql="SELECT * FROM SERVICIO WHERE ID_SERVICIO = '".$id_servicio."' ";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;
    }

    public function actualizarServicio($id_servicio,$descripcion){
        $sql=" UPDATE `SERVICIO` SET `TIPO_SERVICIO`='".$id_servicio."',`DESCRIPCION`='".$descripcion."' WHERE ID_SERVICIO='".$descripcion."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $sentencia->closeCursor();
        $this->conexion_db=null;
    }

}

?>