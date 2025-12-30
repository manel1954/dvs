<?php 
session_start();
$sala_nxdn=($_POST["sala_nxdn"]);

exec("sudo sed -i '10c $sala_nxdn' /opt/NXDNClients/NXDNGateway/private/NXDNHosts.txt");

header("Location:/dvs/panel_configuracion.php");

?>