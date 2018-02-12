<?php 
class registrar {
	private $tipo;
	private $nit;
	private $razon_social;
	private $rep_legal;
	private $correo;
	private $telefono;
	private $direccion;
	private $contrasena;
	

	public function GetTipo(){
		return $this->tipo;
	}	
	public function SetTipo($tipo){
		$this->tipo = $tipo;
	}
	public function GetNit(){
		return $this->nit;
	}	
	public function SetNit($nit){
		$this->nit = $nit;
	}

	public function GetRazonSocial(){
		return $this->razon_social;
	}
	public function SetRazonSocial($razon_social){
		$this->razon_social = $razon_social;
	}

	public function GetRepLegal(){
		return $this->rep_legal;
	}
	public function SetRepLegal($rep_legal){
		$this->rep_legal = $rep_legal;
	}

	public function GetCorreo(){
		return $this->correo;
	}
	public function SetCorreo($correo){
		$this->correo = $correo;
	}
	public function GetTelefono(){
		return $this->telefono;
	}
	public function SetTelefono($telefono){
		$this->telefono = $telefono;
	}
	public function GetDireccion(){
		return $this->direccion;
	}
	public function SetDireccion($direccion){
		$this->direccion = $direccion;
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