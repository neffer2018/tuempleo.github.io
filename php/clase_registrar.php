<?php 
include_once("clase_persona.php");

class registrar extends persona{
	private $contrasena;

	public function GetNombre(){
		return $this->nombre;
	}	
	public function SetNombre($nombre){
		$this->nombre = $nombre;
	}

	public function GetApellido(){
		return $this->apellido;
	}
	public function SetApellido($apellido){
		$this->apellido = $apellido;
	}

	public function GetIdentificacion(){
		return $this->identificacion;
	}
	public function SetIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}

	public function GetArea(){
		return $this->area;
	}
	public function SetArea($area){
		$this->area = $area;
	}

	public function GetCorreo(){
		return $this->correo;
	}
	public function SetCorreo($correo){
		$this->correo = $correo;
	}

	public function GetContrasena(){
		return $this->contrasena;
	}
	public function SetContrasena($contrasena){
		$this->contrasena = $contrasena;
	}
	public function guardar($conexion,$sentencia){
	$con = $conexion;
	 if($con){
		$consulta = $sentencia;
		$resultado = mysqli_query($con,$consulta);
		if ($resultado) {
			return true;
			}
    	}
	}

}


 ?>