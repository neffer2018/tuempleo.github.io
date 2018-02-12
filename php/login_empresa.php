<?php 

include_once('clase_login.php');

$c = new login;

$c->SetIdentificacion($_POST['nit_empresa']);
$c->SetContrasena($_POST['cont_empresa']);


$identificacion = $c->GetIdentificacion();
$contrasena = $c->GetContrasena();

$conexion = mysqli_connect("localhost","root","","empleo");

if ($conexion) {
	$sentencia = "SELECT id_emp,nit,contrasena FROM empresa WHERE nit='$identificacion'AND contrasena='$contrasena' ";

	$resultado = mysqli_query($conexion,$sentencia);

	if($row=(mysqli_fetch_array($resultado))){
		session_start();

		$_SESSION['id_empresa'] = $row['id_emp'];
		
		header("location:../vista_empresa.php");
	}else{
		echo "usuario o contraseña incorrectos";
	}
}


 ?>