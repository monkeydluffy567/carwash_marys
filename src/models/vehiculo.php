<?php

require("conexion.php");
class vehiculo extends conexion{

    public function vehiculo(){
        parent::__construct();      
    }

    public function set_vehiculo($placa,$tipo,$id_cliente){
        $sql="INSERT INTO VEHICULO(PLACA,TIPO,ID_CLIENTE) VALUES ('".$placa."','".$tipo."','".$id_cliente."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $sentencia->closeCursor();
        $this->conexion_db=null;
    }

    public function get_vehiculos(){
        $sql="SELECT * FROM VEHICULO ";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;

    }

    


}


?>
