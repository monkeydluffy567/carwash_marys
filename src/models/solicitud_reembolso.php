<?php 

require("conexion.php");
class solicitud_reembolso extends conexion{
    
    protected $tipo_reclamo;
    
    function solicitud_reembolso(){
        parent::__construct();     

    }

    public function establecerSolicitud($id_proforma,$id_boleta,$tipo_reclamo)
    {
        $sql="INSERT INTO SOLICITUD_DESEMBOLSO(ID_SOLICITUD,ID_PROFORMA,ID_BOLETA,TIPO_RECLAMO) VALUES ('','".$id_proforma."','".$id_boleta."','".$tipo_reclamo."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        
        $sentencia->closeCursor();
        $this->conexion_db=null;
        echo "proforma registrada";
    }

    public function obtenerSolicitud(){
        $sql = "SELECT * FROM SOLICITUD_DESEMBOLSO";
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        return $resultado;
        $this->conexion_db = null;
    }


    
}


?>