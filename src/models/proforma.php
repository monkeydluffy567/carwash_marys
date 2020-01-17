<?php
require("conexion.php");
class proforma extends conexion
{
    protected $id_proforma;    
    protected $nombre;
    protected $apellido;
    protected $dni;
    protected $telefono;
    protected $placa;
    //protected $reserva;
    protected $hora;
    protected $fecha;
    protected $tipo_servicio;
    protected $extra;    
    protected $observaciones;

    public function proforma()
    {
        parent::__construct();
        
    }

    public function establecerProforma($nombre, $apellido,$dni,$telefono,$placa,$hora,$fecha,$servicio,$observaciones)
    {
        $sql="INSERT INTO PROFORMA(ID_PROFORMA,NOMBRE,APELLIDO,DNI,TELEFONO,PLACA,RESERVA_HORA,RESERVA_FECHA,TIPO_SERVICIO,OBSERVACIONES) VALUES ('','".$nombre."','".$apellido."','".$dni."','".$telefono."','".$placa."','".$hora."','".$fecha."','".$servicio."','".$observaciones."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        
        $sentencia->closeCursor();
        $this->conexion_db=null;
        echo "proforma registrada";

    }

    public function obtenerProformas()
    {
        $sql = "SELECT * FROM PROFORMA ";
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        return $resultado;
        $this->conexion_db = null;
    }

    public function obtenerProforma($dni)
    { 
        $sql = "SELECT * FROM PROFORMA WHERE DNI='".$dni."'";
        $sentencia = $this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();

        return $resultado;
        $this->conexion_db = null;

    }
}
