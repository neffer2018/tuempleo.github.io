<?php 
session_start();

#verifica si no hay registro en la tabla hoja_de_vida
if (is_uploaded_file($_FILES['hoja_de_vida']['tmp_name'])) {
		function conteo(){
		$con = mysqli_connect("localhost","root","","empleo");

			if ($con) {
			$cont = "SELECT count(*) from hoja_de_vida,aprendiz WHERE aprendiz.id_apre = hoja_de_vida.id_apre AND aprendiz.id_apre = '$_SESSION[id]'";	

			$conteo = mysqli_query($con,$cont);
			$row = mysqli_fetch_array($conteo);
			return $row[0];
				}
			}

	$numero = conteo();

		if ($numero == 0) {
				$ruta = "../hoja_de_vida/";
				opendir($ruta);
				$destino = $ruta.$_FILES['hoja_de_vida']['name'];
				$tipo = $_FILES["hoja_de_vida"]["type"];

				if ($_FILES["hoja_de_vida"]["type"]=="application/pdf") {
					copy($_FILES['hoja_de_vida']['tmp_name'],$destino);
					$nombre = $_FILES['hoja_de_vida']['name'];
					$con = mysqli_connect("localhost","root","","empleo");

					if ($con) {
						$sentencia = "INSERT INTO hoja_de_vida(nombre_hoja,tipo_hoja,id_apre) VALUES ('$nombre','$tipo','$_SESSION[id]')";
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
					echo "solo se permite archivos pdf";
				}
		}else{
			echo "ye existe un registro";
		}
}else{
	echo "selecciona primero un archivo !!";
}
?>