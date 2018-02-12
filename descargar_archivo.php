<?php  
	$conec = mysqli_connect("localhost","root","","empleo");
	  if ($conec) {
	  	$id = $_GET['id_A'];

	      $qry = "SELECT tipo, contenido FROM portafoleo WHERE id_port = $id";
	      $res = mysqli_query($conec,$qry);
	      $respu = mysqli_fetch_assoc($res);
	      $tipo = $respu['tipo'];
	      $datos = $respu['contenido'];
	      header("Content-type: $tipo");
	      print_r($datos);
	    }else{
	    echo "NO sirves para esto !RETIRATE!";
	  }

  ?>