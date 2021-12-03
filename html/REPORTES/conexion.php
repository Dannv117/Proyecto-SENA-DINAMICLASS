<?php

class conexion{
	protected $db;
	private $driver="mysql";
	private $host="localhost";
	private $bd="proyecto_senaplay";
	private $Usuario="root";
	private $Clave="";
	public function __construct(){
		try{
   			$db=new PDO("{$this->driver}:host={$this->host};dbname={$this->bd}",$this->Usuario, $this->Clave);
   			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   			return $db;
		}catch(PDOException $e){
			print_r("No se pudo establecer la conexión con la base de datos ". $e->getMessage());
		}
	}
}

?>