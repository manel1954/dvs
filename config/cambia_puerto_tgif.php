<?php 
session_start();
$port_tgif=($_POST["port_tgif"]);

exec("sudo sed -i '71c Port=$port_tgif' /opt/MMDVM_Bridge/MMDVM_Bridge_TGIF.ini");

header("Location:/dvs/config/sistema_tgif.php");

?>