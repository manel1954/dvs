<?php
include_once 'include/config.php';
include_once 'include/tools.php';
$callsign = exec("sudo sed -n '2p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$callsign = substr("$callsign", 9, 11); 	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" lang="en">
<head>
    <meta name="robots" content="index" />
    <meta name="robots" content="follow" />
    <meta name="language" content="English" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="generator" content="DVSwitch" />
    <meta name="Author" content="Andrew Taylor (MW0MWZ), Waldek (SP2ONG)" />
    <meta name="Description" content="Dashboard based on Pi-Star Dashboard, © Andy Taylor (MW0MWZ) and adapted to DVSwitch by SP2ONG" />
    <meta name="KeyWords" content="MMDVM_Bridge,Analog_Bridge,ircDDBGateway,D-Star,ircDDB,DMRGateway,DMR,YSFGateway,YSF,C4FM,NXDNGateway,NXDN,P25Gateway,P25,DVSwitch,DL5DI,DG9VH,MW0MWZ,SP2ONG" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />

<!-- refresca la página cada 60 segundo (implantado por mi) -->
<!-- ====================================================== -->
<meta http-equiv="refresh" content="600" />

<link rel="shortcut icon" href="images/favicon.ico" sizes="16x16 32x32" type="image/png">
    <title>DVSwitch Dashboard</title>
<?php include_once "include/browserdetect.php"; ?>
    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript" src="scripts/pcm-player.min.js"></script>
    <script type="text/javascript">
      $.ajaxSetup({ cache: false });
    </script>
    <link href="css/featherlight.css" type="text/css" rel="stylesheet" />
    <script src="scripts/featherlight.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">

#caja_cambiar_port{     
display: none;   
}
    </style>
</head>
<body style="background-image: url(images/fondo_02.png);font: 11pt arial, sans-serif;">
<center>
<fieldset style="box-shadow:0 0 10px #999; background-color:#000; width:0px;margin-top:15px;margin-left:0px;margin-right:5px;font-size:13px;border-top-left-radius: 10px; border-top-right-radius: 10px;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
<div style="margin-top:8px;background:#000;" class="container"> 
<div class="header" style="margin-top:8px;background:#341434;">
<center>
<h2>DVSwitch Dashboard&nbsp;&nbsp;<?php echo $callsign;?></h2>
<img src="Logo_Ader.png" width="120" alt=""/></img>
</center>
</div>
<div style="margin-top:8px;background:#000;" class="content">
<center>
<div style="margin-top:8px;background:#000;">

<?php
if ( RXMONITOR == "YES" ) {
echo '<button class="button link" onclick="playAudioToggle(8080, this)"><b>&nbsp;&nbsp;&nbsp;<img src=images/speaker.png alt="" style="vertical-align:middle">&nbsp;&nbsp;RX Monitor&nbsp;&nbsp;&nbsp;</b></button>';}
?>
</div>
</center>
</div>
<?php
function getMMDVMConfigFileContent() {
		// loads ini fule into array for further use 
		$conf = array();
		if ($configs = @fopen('/opt/MMDVM_Bridge/MMDVM_Bridge.ini', 'r')) {
			while ($config = fgets($configs)) {
				array_push($conf, trim ( $config, " \t\n\r\0\x0B"));
			}
			fclose($configs);
		}
		return $conf;
	}

$mmdvmconfigfile = getMMDVMConfigFileContent();
    /* echo '<table style="border:none; border-collapse:collapse; cellspacing:0; cellpadding:0; background-color:#fafafa;"><tr style="border:none;background-color:#fafafa;">';
    echo '<td width="200px" valign="top" class="hide" style="border:none;background-color:#fafafa;">';
    echo '<div class="nav">'."\n";
    echo '<script type="text/javascript">'."\n";
    echo 'function reloadModeInfo(){'."\n";
    echo '  $("#modeInfo").load("include/status.php",function(){ setTimeout(reloadModeInfo,1000) });'."\n";
    echo '}'."\n";
    echo 'setTimeout(reloadModeInfo,1000);'."\n";
    echo '$(window).trigger(\'resize\');'."\n";
    echo '</script>'."\n";
    echo '<div id="modeInfo">'."\n"; */
    //include 'include/status.php';			// Mode and Networks Info
    
    echo '</div>'."\n";
    echo '</div>'."\n";
    echo '</td>'."\n";

    echo '<td valign="top" style="border:none; height: 480px; background-color:#fafafa;">';
    echo '<div class="content">'."\n";
    echo '<script type="text/javascript">'."\n";define("RXMON","YES");define("RXMON","YES");


    echo 'function reloadLocalTx(){'."\n";
    echo '  $("#localTxs").load("include/localtx.php",function(){ setTimeout(reloadLocalTx,1500) });'."\n";
    echo '}'."\n"; 
    echo 'setTimeout(reloadLocalTx,1500);'."\n";    
    echo 'function reloadLastHerd(){'."\n"; 
    echo '  $("#lastHerd").load("include/lh_info.php",function(){ setTimeout(reloadLastHerd,1500) });'."\n";
    echo '}'."\n";
    echo 'setTimeout(reloadLastHerd,1500);'."\n";
    echo '$(window).trigger(\'resize\');'."\n";
    echo '</script>'."\n";        
/*     echo "<br />\n";
    echo "<br />\n";
    echo "<br />\n"; */
/*     echo "<br />\n";
    echo "<br />\n"; */
    echo "<br />\n";
    echo '<center><div id="lastHerd">'."\n";
   // include 'include/lh.php';
    echo '</div></center>'."\n";
    echo "<br />\n";
    echo '</td>';
?>
</tr></table>


<div class="content">
<!-- <center><span style="font: 7pt arial, sans-serif;">DVSwitch Dashboard <?php $cdate=date("Y"); if ($cdate > "2020") {$cdate="2020-".date("Y");} echo $cdate; ?>
	 
    <br>Dashboard based on Pi-Star Dashboard, © Andy Taylor (MW0MWZ) and adapted to DVSwitch by SP2ONG</span><br>

    </center> -->
<!-- DVSwitch Dashboard: version 20220225 -->

	</div>
</div>

<div>
<?php
/*     echo '<div class="button link_verde" style="font: 12pt arial, sans-serif;">'."\n";
    echo "Sistema Activo: &nbsp;&nbsp;&nbsp;** ".$abinfo['tlv']['ambe_mode']." **"; */ 
    ?> 
</div>

<?php
/*     echo '<div class="button link_naranja" style="font: 12pt arial, sans-serif;">'."\n";
    echo "Port TXPort: &nbsp;&nbsp;&nbsp;** ".$abinfo['usrp']['tx_port']." **"; */
    ?>

</fieldset>





<div>
<button class="button link_especial" ><a href="/dvs/index_dvswitch_buster.php" class="btn btn-danger" style="color:#9af240;">VOLVER AL DASHBOARD PRINCIPAL</a</buttton>
</div> 







<script>
function abre_caja_cambia_port(){
    $("#caja_cambiar_port").css("display","block");
}
</script>
</body>
</html>
