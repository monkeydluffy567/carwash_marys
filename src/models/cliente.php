<?php

require_once('conexion.php');

class cliente extends conexion{

    protected $dni;
    protected $nombre;
    protected $telefono;    
    protected $email;
    protected $direccion;  


    function cliente(){
        parent::__construct();

        
    }

    public function establecerCliente($dni,$nombre,$telefono,$email,$direccion){
        $sql="INSERT INTO CLIENTE(DNI,NOMBRE,TELEFONO,EMAIL,DIRECCION) VALUES ('".$dni."','".$nombre."','".$telefono."','".$email."','".$direccion."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $sentencia->closeCursor();
        $this->conexion_db=null;
    }

    public function obtenerClientes(){

        $sql="SELECT * FROM CLIENTE";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;

    }

    public function obtenerCliente($dni){
        $sql="SELECT * FROM CLIENTE WHERE DNI='".$dni."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();    
        

        if (count($resultado)==0) {
            echo 'Usuario no encontrado';
        }else{
            return $resultado;
        }
        $this->conexion_db=null;
        
    }

    public function modificarCliente($dni){

        $sql="SELECT * FROM CLIENTE WHERE DNI='".$dni."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;


    }


}
?>