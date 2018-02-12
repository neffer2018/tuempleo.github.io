<?php 
$conec = mysqli_connect("localhost","root","","empleo");
if ($conec) {
  $sentencia = "SELECT hoja_de_vida.nombre_hoja as nombre,hoja_de_vida.tipo_hoja as tipo from hoja_de_vida";
  $resultado = mysqli_query($conec,$sentencia);
  $row = mysqli_fetch_array($resultado);

  $nombre = $row['nombre'];
  $tipo = $row['tipo'];


   $file = "hoja_de_vida/$nombre";
   $fp = file_get_contents($file);

   header("Content-type:$tipo");
   echo $fp;

}else{
  echo "error en la conexion";
}

?>