<?php  	
session_start();
$passIng = strip_tags(sha1($_POST['pass']));
$mipass="6ab4d12f3f825d988004d61bbc9653a551fbc385";
if ($passIng==$mipass){
$_SESSION['permisos'] = 1;
header("Location:/dvs/panel_configuracion.php");	
}
else{
header("Location:/dvs/index.php");
}
?>