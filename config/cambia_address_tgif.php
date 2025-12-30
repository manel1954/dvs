<?php 
session_start();
$address_tgif=($_POST["address_tgif"]);

exec("sudo sed -i '70c Address=$address_tgif' /opt/MMDVM_Bridge/MMDVM_Bridge_TGIF.ini");

header("Location:/dvs/config/sistema_tgif.php");

?>