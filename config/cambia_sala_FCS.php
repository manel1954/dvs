<?php 
session_start();
//Pasar a FCS |

$fcs=strtoupper($_POST["fcs"]);
//$TG="9;";
//$fcs=$TG.$fcs;
exec("sudo sed -i '5c 9;$fcs' /opt/MMDVM_CM/DMR2YSF/TG-YSFList.txt");

exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgatewayd.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngatewayd.service");
exec("sudo systemctl restart dmr2ysf.service");

header("Location:/dvs/config/editor_general.php");	
?>