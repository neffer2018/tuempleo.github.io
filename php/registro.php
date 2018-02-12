<?php 
include_once('clase_registrar.php');

$a = new registrar;

if (!empty($_POST['nombre_apre'] && $_POST['apellido_apre'] && $_POST['ide_apre'] && $_POST['area_apre'] && $_POST['correo_apre'] && $_POST['cont_apre'])) {
	
	$a->SetNombre($_POST['nombre_apre']);
	$a->SetApellido($_POST['apellido_apre']);
	$a->SetIdentificacion($_POST['ide_apre']);
	$a->SetArea($_POST['area_apre']);
	$a->SetCorreo($_POST['correo_apre']);
	$a->SetContrasena($_POST['cont_apre']);

	$nombre = $a->GetNombre();
	$apellido = $a->GetApellido();
	$identificacion = $a->GetIdentificacion();
	$area = $a->GetArea();
	$correo = $a->GetCorreo();
	$contrasena = $a->GetContrasena();

	$registro = $a->guardar(
	//parametro que hace la conexion
	mysqli_connect("localhost","root","","empleo"),
	//sentencia que guarda en la base de datos
	"INSERT INTO aprendiz(nombre,apellido,identificacion,area,correo,contrasena) VALUES ('$nombre','$apellido','$identificacion','$area','$correo','$contrasena')");

	//validacion de registro de datos
	if($registro==true){
		echo "exito";
	}else{
		echo "error en el registro";
	}

}else{
	echo "no existen las variables de datos";
}

?>