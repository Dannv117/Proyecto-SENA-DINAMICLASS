<?php
require_once ('./conexion.php');
class metodos extends conexion{
public function __construct(){
	  $this->db=parent::__construct();

    }
    public function getdb(){
        return $this->db;
      }
    
    public function getCita(){
        $rows=null;
        $statement=$this->db->prepare("CALL prueba();");
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }

}

?>