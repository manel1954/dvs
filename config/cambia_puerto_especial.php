<?php 
session_start();
$port_especial=($_POST["port_especial"]);

exec("sudo sed -i '71c Port=$port_especial' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/config/sistema_especial.php");	

?>