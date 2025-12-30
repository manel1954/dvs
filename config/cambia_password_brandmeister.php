<?php 
session_start();
$password_bm=($_POST["password_bm"]);

exec("sudo sed -i '74c Password=$password_bm' /opt/MMDVM_Bridge/MMDVM_Bridge_BM.ini");

header("Location:/dvs/config/sistema_brandmeister.php");

?>