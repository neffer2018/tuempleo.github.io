<?php 
session_start();


	$conec = mysqli_connect("localhost","root","","empleo");
	if ($conec) {
	$name = $_FILES["proyecto"]["name"];
	$type = $_FILES["proyecto"]["type"];
	$tmp = $_FILES["proyecto"]["tmp_name"];
	$size = $_FILES["proyecto"]["size"];

	if ($tmp != "none"){
	    $archivopre = @fopen($tmp, "rb");
	    $conte = @fread($archivopre, $size);
	    $conte = addslashes($conte);
	    @fclose($archivopre); 
	    
	    $qry = "INSERT INTO portafoleo(nombre,tipo,id_apre) VALUES 
	            ('$name','$conte','$type','$_SESSION[id]')";

	    mysqli_query($conec,$qry);

	    if(mysqli_affected_rows($conec) > 0){
	       print "Se ha guardado el archivo en la base de datos.";
	    }
	    else{
	       print "NO se ha podido guardar el archivo en la base de datos.";
	    }
	}
 	else{
 		print "No se ha podido subir el archivo al servidor";
	}
	}else{
		echo "NO sirves para esto !RETIRATE!";
	}
 ?>