<?php 
session_start();
exec("sudo sh actualizar_reflectores.sh");

header("Location: /dvs/config/actualizando_reflectores.php");

?>