<?php 
session_start();
exec("sudo sh actualizar_reflectores.sh");

header("Location: ../index_dvswitch_buster.php");

?>