<?php 
session_start();
$reflector_ysf=($_POST["reflector_ysf"]);

exec("sudo sed -i '42c Startup=$reflector_ysf' /opt/YSFGateway/YSFGateway.ini");

exec("sudo systemctl restart ysfgateway.service");

header("Location:/dvs/config/editor_general.php");	

?>