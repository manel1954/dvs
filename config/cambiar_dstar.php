<?php 
session_start();
exec("/opt/MMDVM_Bridge/dvswitch.sh mode DSTAR");
header("Location: ../index_dvswitch_buster.php");
?>