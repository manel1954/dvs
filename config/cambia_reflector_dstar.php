<?php 
session_start();
$reflector_dstar=strtoupper($_POST["reflector_dstar"]);
//$_SESSION["reflector_dstar"]=$reflector_dstar;

exec("sudo sed -i '18c reflector1=$reflector_dstar' /etc/ircddbgateway");
exec("sudo sed -i '19c atStartup1=1' /etc/ircddbgateway");
exec("sudo sed -i '20c reconnect1=1' /etc/ircddbgateway");

exec("sudo systemctl restart ircddbgatewayd.service");

header("Location:/dvs/config/editor_general.php");	

?>