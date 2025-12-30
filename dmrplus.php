<?php 

//Pasar a DMR+

exec("cp /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

//RESTAURAR LOS SERVICIOS
exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngatewayd.service");

header("Location: ../index_botones.php");
?>
