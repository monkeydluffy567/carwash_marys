<?php 

require("conexion.php");
class boleta extends conexion{
    
    protected $nombre;
    protected $apellido;
    protected $dni;
    protected $telefono;
    protected $tipo_servicio;
    
        
    function boleta(){
        parent::__construct();
        
    }

    public function establecerBoleta($id_proforma,$nombre,$apellido,$dni,$tipo_servicio)
    {
        $sql="INSERT INTO BOLETA(ID_BOLETA,ID_PROFORMA,NOMBRE,APELLIDO,DNI,TIPO_SERVICIO) VALUES ('','".$id_proforma."','".$nombre."','".$apellido."','".$dni."','".$tipo_servicio."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        
        $sentencia->closeCursor();
        $this->conexion_db=null;
        echo "boleta registrada";
    }

    public function obtenerBoletas(){
        $sql = "SELECT * FROM BOLETA";
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        return $resultado;
        $this->conexion_db = null;
    }

    public function obtenerBoleta($dni){
        $sql = "SELECT * FROM BOLETA WHERE DNI='".$dni."'";        
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        return $resultado;
        $this->conexion_db = null;
    }


    
}


?>