<?php 
session_start();
$port_bm=($_POST["port_bm"]);

exec("sudo sed -i '71c Port=$port_bm' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");

header("Location:/dvs/config/sistema_brandmeister.php");

?>