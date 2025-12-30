<?php 
session_start();
$indicativo=strtoupper($_POST["indicativo"]);
$_SESSION["indicativo"]=$indicativo;

exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_TGIF.ini");
exec("sudo sed -i '2c Callsign=$indicativo' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");

exec("sudo sed -i '2c gatewayCallsign=$indicativo' /etc/ircddbgateway");
exec("sudo sed -i '13c repeaterCall1=$indicativo' /etc/ircddbgateway");
exec("sudo sed -i '95c ircddbUsername=$indicativo' /etc/ircddbgateway");
exec("sudo sed -i '117c ircddbUsername=$indicativo' /etc/ircddbgateway");

exec("sudo sed -i '115c dplusEnabled=1' /etc/ircddbgateway");
exec("sudo sed -i '176c language=7' /etc/ircddbgateway");
exec("sudo sed -i '179c logEnabled=1' /etc/ircddbgateway");

exec("sudo sed -i '2c Callsign=$indicativo' /opt/YSFGateway/YSFGateway.ini");

exec("sudo systemctl restart ircddbgatewayd.service");

header("Location:/dvs/config/editor_general.php");	



?>
