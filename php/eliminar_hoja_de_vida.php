<?php 
session_start();
$conc = mysqli_connect("localhost","root","","empleo");
if ($conc) {
	$sentencia = "SELECT hoja_de_vida.nombre_hoja as nombre FROM hoja_de_vida";
	$resultado = mysqli_query($conc,$sentencia);
	$row = mysqli_fetch_array($resultado);
	$nombre = $row['nombre'];
	
	unlink("../hoja_de_vida/$nombre");

	$con = mysqli_connect("localhost","root","","empleo");
	if ($con) {
		$sentencia = "DELETE FROM `hoja_de_vida` WHERE hoja_de_vida.id_apre = '$_SESSION[id]'"; 
		mysqli_query($con,$sentencia);
		header("location:../vista_aprendiz.php");
		
	}else{
		echo "error en la consulta";
	}
}

?>