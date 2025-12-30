<?php 
session_start();
$longitude=($_POST["longitude"]);
exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '12c Longitude=$longitude' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

exec("sudo sed -i '9c longitude=$longitude' /etc/ircddbgateway");

header("Location:/dvs/config/editor_general.php");	

?>
