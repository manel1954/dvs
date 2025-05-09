<?php 
session_start();
exec("/opt/MMDVM_Bridge/dvswitch.sh mode NXDN");

//RESTAURAR LOS SERVICIOS
exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngatewayd.service");

header("Location: ../index_dvswitch_buster.php");
?>