<?php 
session_start();
$id=($_POST["id"]);//id 9 cifras

$id7cifras = substr("$id", 0, 7);

exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");
exec("sudo sed -i '3c Id=$id' /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini");
exec("sudo sed -i '3c Id=$id7cifras' /opt/MMDVM_Bridge/MMDVM_Bridge_TGIF.ini");
exec("sudo sed -i '3c Id=$id7cifras' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");

exec("sudo sed -i '39c gatewayDmrId = $id7cifras' /opt/Analog_Bridge/Analog_Bridge.ini");
exec("sudo sed -i '40c repeaterID = $id' /opt/Analog_Bridge/Analog_Bridge.ini");

exec("sudo sed -i '5c Id=$id7cifras' /opt/YSFGateway/YSFGateway.ini");

header("Location:/dvs/config/editor_general.php");	

?>
