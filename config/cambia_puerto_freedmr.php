<?php 
session_start();
$port_freedmr=($_POST["port_freedmr"]);

exec("sudo sed -i '71c Port=$port_freedmr' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");

header("Location:/dvs/config/sistema_freedmr.php");

?>