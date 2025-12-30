<?php 
session_start();
$password_especial=($_POST["password_especial"]);

exec("sudo sed -i '74c Password=$password_especial' /opt/MMDVM_Bridge/MMDVM_Bridge_ESPECIAL.ini");

header("Location:/dvs/config/sistema_especial.php");	

?>