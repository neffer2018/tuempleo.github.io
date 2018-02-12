<?php 
session_start();

if (is_uploaded_file($_FILES['proyecto']['tmp_name'])) {
	$ruta = "../proyectos/";
	opendir($ruta);
	$destino = $ruta.$_FILES['proyecto']['name'];
	$tipo = $_FILES["proyecto"]["type"];

	if ($_FILES["proyecto"]["type"]=="application/pdf") {
		copy($_FILES['proyecto']['tmp_name'],$destino);
		$nombre = $_FILES['proyecto']['name'];
		$con = mysqli_connect("localhost","root","","empleo");

		if ($con) {
			$sentencia = "INSERT INTO portafoleo(nombre_archivo,tipo_archivo,id_apre) VALUES ('$nombre','$tipo','$_SESSION[id]')";
			$resultado = mysqli_query($con,$sentencia);

			if ($resultado) {
				echo "Se ha guardado el archivo en la base de datos"; 
			}
			else{
				echo "NO se ha podido guardar el archivo en la base de datos";
			}
		}else{
				echo "no conecta BD";
			}
	}else{
		echo "solo se permite archivo pdf";
	}
}else{
	echo "selecciona primero  un archivo";
}
 




?>