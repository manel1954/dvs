<?php 
session_start();
$password_freedmr=($_POST["password_freedmr"]);

exec("sudo sed -i '74c Password=$password_freedmr' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");

header("Location:/dvs/config/sistema_freedmr.php");

?>