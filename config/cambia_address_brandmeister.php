<?php 
session_start();
$address_bm=($_POST["address_bm"]);

exec("sudo sed -i '70c Address=$address_bm' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");

header("Location:/dvs/config/sistema_brandmeister.php");

?>