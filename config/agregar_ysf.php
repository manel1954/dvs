<?php 
session_start();
$nombre_sala="ES-ADER";
$sala="aderdigital.ddns.net:42000";

# guardamos el valor para luego recuperarlo llamando al script agrgar_ysf.sh
exec("sed -i '1c $nombre_sala' /home/pi/.local/datos_dvswitch");
exec("sed -i '2c $sala' /home/pi/.local/datos_dvswitch");
exec("cd /var/www/html/dvs/config; sudo sh agregar_ysf.sh");

 ?>