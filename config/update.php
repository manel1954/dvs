<?php 

exec("cd /var/www/html/dvs/; git pull");

header("Location:/dvs/panel_configuracion.php");

?>