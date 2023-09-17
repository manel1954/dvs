<?php 
session_start();
exec("/opt/MMDVM_Bridge/dvswitch.sh mode NXDN");
header("Location: ../index_dvswitch_buster.php");
?>