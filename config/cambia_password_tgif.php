<?php 
session_start();
$password_tgif=($_POST["password_tgif"]);

exec("sudo sed -i '74c Password=$password_tgif' /opt/MMDVM_Bridge/MMDVM_Bridge_TGIF.ini");

header("Location:/dvs/config/sistema_tgif.php");

?>