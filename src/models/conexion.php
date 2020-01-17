<?php
//require("config.php");

class conexion{
    protected $conexion_db;

    public function __construct(){
        
        try{
            $this->conexion_db=new PDO('mysql:host=localhost; dbname=carwash','root','');
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8 ");
            return $this->conexion_db;

        }catch(Exception $e){
            echo "La linea de error es: ". $e->getLine();

        }
    }

}

?>