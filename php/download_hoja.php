<?php
$nameArch = $_GET['nomA'];

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename("../hoja_de_vida/$nameArch"));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: '.filesize("../hoja_de_vida/$nameArch"));
ob_clean();
flush();
readfile("../hoja_de_vida/$nameArch");

?>