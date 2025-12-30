<?php 
session_start();
$address_freedmr=($_POST["address_freedmr"]);

exec("sudo sed -i '70c Address=$address_freedmr' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");

header("Location:/dvs/config/sistema_freedmr.php");

?>