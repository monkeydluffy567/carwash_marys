<?php
require("conexion.php");

class usuario extends conexion{
    
    protected $id_usuario;
    protected $nombre;
    protected $apellido;
    protected $dni;
    protected $usuario;
    protected $password;

    public function usuario(){
        parent::__construct();
        
    }

    public function get_usuarios(){
        $sql="SELECT * FROM USUARIO ";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        
        return $resultado;
        $this->conexion_db=null;
        
    }

    public function set_usuario($nombre,$apellido,$dni,$usuario,$password){
        $sql="INSERT INTO USUARIO(ID_USUARIO,NOMBRE,APELLIDO,DNI,USUARIO,`PASSWORD`) VALUES ('','".$nombre."','".$apellido."','".$dni."','".$usuario."','".$password."')";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        
        $sentencia->closeCursor();
        $this->conexion_db=null;
        
    }

    public function loginUsuario($usuario,$password){
        $sql="SELECT * FROM USUARIO WHERE `USUARIO`='".$usuario."' AND `PASSWORD`='".$password."'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        //echo"loginUsuario";
        
        return $resultado;
        $this->conexion_db=null;
    }

    public function obtenerUsuario($id_usuario){
        $sql="SELECT * FROM USUARIO WHERE `ID_USUARIO`='".$id_usuario."'";

        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        echo"loginUsuario";
        return $resultado;
        $this->conexion_db=null;
    }

    /*public function update_usuario($nombre,$apellido,$dni,$usuario,$password,$email){

        $sql="UPDATE USUARIO SET NOMBRE = '".$nombre."' , APELLIDO= '".$apellido."', DNI='".$dni."' , USUARIO='".$usuario."',`PASSWORD`='".$password."' , EMAIL='".$email."' WHERE ID_USUARIO=";

    }*/

    public function obtenerId($usuario,$password){
        $sql="SELECT `ID_USUARIO` FROM USUARIO WHERE `USUARIO`='".$usuario."' AND `PASSWORD`='".$password."'";

        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        echo"loginUsuario <br>";
        return $resultado;
        $this->conexion_db=null;
    }

    public function actualizarUsuario($id_usuario,$nombre,$apellido,$dni,$email){
        $sql="UPDATE `USUARIO` SET `NOMBRE`='".$nombre."',APELLIDO='".$apellido."',DNI='".$dni."', EMAIL='".$email."' WHERE `ID_USUARIO`='".$id_usuario."'";

        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute((array()));
        $sentencia->closeCursor();
               
        $this->conexion_db=null;

    }

    


}

?>