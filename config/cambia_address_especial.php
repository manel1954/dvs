<?php 
session_start();
$address_especial=($_POST["address_especial"]);

exec("sudo sed -i '70c Address=$address_especial' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/config/sistema_especial.php");

?>