<?php 
session_start();

// Activando DVSWITCH
exec("sudo systemctl restart analog_bridge.service");
exec("sudo systemctl restart ircddbgatewayd.service");
exec("sudo systemctl restart md380-emu.service");
exec("sudo systemctl restart mmdvm_bridge.service");
exec("sudo systemctl restart nxdngateway.service");
exec("sudo systemctl restart ysfgateway.service");
exec("sudo systemctl restart dmr2ysf.service");
exec("sudo systemctl restart p25gateway.service");

// Activando HBLINK
exec("sudo systemctl restart hblink.service");
exec("sudo systemctl restart hbmon.service");
exec("sudo systemctl restart parrot.service");

exec("sed -i '1c ON' /var/www/html/dvs/config/estado-dvswitch-hblink.txt");
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"> 
     <meta http-equiv="content-type" content="text/html">
     <meta name="author" content="EA3EIZ">
     <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon" />
     <title>cambiando</title>
     <meta http-equiv="refresh" content="2; url=../index_dvswitch_buster.php" />

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
               <h1 class="texto_centrado_blanco">ACTIVANDO DVSWITCH & HBLINK</h1>
               </div> 	                       
        </div><!--  row -->
</div><!--container-->

<!-- JavaScript================================================== -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
