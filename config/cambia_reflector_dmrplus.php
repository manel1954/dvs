<?php 
session_start();
//Pasar a DMR+

exec("sudo systemctl stop ysfgateway.service");
exec("sudo systemctl stop dmr2ysf.service");

exec("sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
//exec("sudo cp /opt/Analog_Bridge/dmr.ini /opt/Analog_Bridge/Analog_Bridge.ini");

$options=($_POST["options"]);
$ipsc2=($_POST["ipsc2"]);

exec("sudo sed -i '70c $ipsc2' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");
exec("sudo sed -i '77c $options' /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini");

#exec("sudo sed -i '70c $ipsc2' /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini");
#exec("sudo sed -i '78c $options' /opt/MMDVM_Bridge/MMDVM_Bridge_FCS.ini");

exec("sudo cp /opt/MMDVM_Bridge/MMDVM_Bridge_PLUS.ini /opt/MMDVM_Bridge/MMDVM_Bridge.ini");

exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgatewayd.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");
exec("sudo systemctl restart ysfgateway.service");
exec("sudo systemctl restart dmr2ysf.service");

	
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"> 
     <meta http-equiv="content-type" content="text/html">
     <meta name="author" content="EA3EIZ">
     <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon" />
     <title>cambiando</title>
     <meta http-equiv="refresh" content="2; url=sistema_plus.php" />

    <!-- CSS Bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="custom/bootstrap/css/bootstrap.css" rel="stylesheet">

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<style>
    body{
    background:#333;
    }
    .texto_centrado_blanco{
    padding-top: 60px;
    color: #FFFFFF;
    font-size: 30px;
    text-align: center;
    }
    .config_especial{
    height: 200px;
    background:#8000FF;
    border-radius: 8px 8px 8px 8px;
    }    
</style>

</head>
<body>
 <div class="container"> 
 	<br><br>
        <div class="row">
               <div class="col-md-6 col-md-offset-2 config_especial">    
               <h1 class="texto_centrado_blanco">CAMBIANDO REFLECTOR DMR+</h1>
               </div> 	                       
        </div><!--  row -->
</div><!--container-->

<!-- JavaScript================================================== -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
