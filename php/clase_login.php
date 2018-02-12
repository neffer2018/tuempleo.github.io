<?php 
include_once('clase_persona.php');

class login extends persona {
	private $contrasena;

	public function GetIdentificacion(){
		return $this->identificacion;
	}	
	public function SetIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}

	public function GetContrasena(){
		return $this->contrasena;
	}
	public function SetContrasena($contrasena){
		$this->contrasena = $contrasena;
	}
}

 ?>
