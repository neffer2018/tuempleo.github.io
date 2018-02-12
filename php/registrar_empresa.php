<?php 
include_once('clase_registrar_empresa.php');

$a = new registrar;

if (!empty($_POST['tipo_emp'] && $_POST['nit'] && $_POST['razon_social'] && $_POST['repre_legal'] && $_POST['email'] && $_POST['telefono'] && $_POST['direccion'] && $_POST['contrasena'])) {
	

	$a->SetTipo($_POST['tipo_emp']);
	$a->SetNit($_POST['nit']);
	$a->SetRazonSocial($_POST['razon_social']);
	$a->SetRepLegal($_POST['repre_legal']);
	$a->SetCorreo($_POST['email']);
	$a->SetTelefono($_POST['telefono']);
	$a->SetDireccion($_POST['direccion']);
	$a->SetContrasena($_POST['contrasena']);

	$tipo = $a->GetTipo();
	$nit = $a->GetNit();
	$r_social = $a->GetRazonSocial();
	$r_legal = $a->GetRepLegal();
	$correo = $a->GetCorreo();
	$telefono = $a->GetTelefono();
	$direccion = $a->GetDireccion();
	$contrasena = $a->GetContrasena();


	$registro = $a->guardar(mysqli_connect("localhost","root","","empleo"),
		"INSERT INTO empresa(tipo,nit,razon_social,rep_legal,correo,telefono,direccion,contrasena) VALUES ('$tipo','$nit','$r_social','$r_legal','$correo','$telefono','$direccion','$contrasena')");
	if ($registro==true) {
		echo "registro exitoso";
	}else{
		echo "error en el registro";
	}

}else{
	echo "no existen las variables de datos";
}

 ?>