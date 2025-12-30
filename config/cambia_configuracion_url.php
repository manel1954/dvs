<?php 
session_start();
$url=($_POST["url"]);
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '16c URL=$url' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

exec("sudo sed -i '12c url=$url' /etc/ircddbgateway");

header("Location:/dvs/config/editor_general.php");		

?>
