<?php 

$nameArch = $_GET['nomA'];

unlink("../proyectos/$nameArch");

$con = mysqli_connect("localhost","root","","empleo");
if ($con) {
	$sentencia = "DELETE FROM `portafoleo` WHERE portafoleo.nombre_archivo = '$nameArch'"; 
	mysqli_query($con,$sentencia);
	header("location:../lista_proyectos.php");
	
}else{
	echo "error en la consulta";
}


 ?>