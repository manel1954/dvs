<?php 
session_start();
$location=($_POST["location"]);
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");
exec("sudo sed -i '14c Location=$location' /opt/MMDVM_Bridge/MMDVM_Bridge_TGIF.ini");
exec("sudo sed -i '10c description1=$location' /etc/ircddbgateway");

header("Location:/dvs/config/editor_general.php");		

?>
