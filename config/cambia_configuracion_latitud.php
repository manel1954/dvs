<?php 
session_start();
$latitude=($_POST["latitude"]);
exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '11c Latitude=$latitude' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

exec("sudo sed -i '8c latitude=$latitude' /etc/ircddbgateway");

header("Location:/dvs/config/editor_general.php");		


?>
