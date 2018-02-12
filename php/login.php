<?php 
include_once('clase_login.php');

$c = new login;

$c->SetIdentificacion($_POST['identificacion']);
$c->SetContrasena($_POST['contrasena']);


$identificacion = $c->GetIdentificacion();
$contrasena = $c->GetContrasena();

$conexion = mysqli_connect("localhost","root","","empleo");

if ($conexion) {
	$sentencia = "SELECT id_apre,nombre,identificacion,contrasena FROM aprendiz WHERE identificacion='$identificacion'AND contrasena='$contrasena' ";

	$resultado = mysqli_query($conexion,$sentencia);

	if($row=(mysqli_fetch_array($resultado))){
		session_start();

		$_SESSION['id'] = $row['id_apre'];
		$_SESSION['nom'] = $row['nombre'];
		
		header("location:../vista_aprendiz.php");
	}else{
		echo "usuario o contraseña incorrectos";
	}
}

?>