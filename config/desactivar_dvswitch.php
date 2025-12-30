<?php 
session_start();


exec("sudo systemctl stop analog_bridge.service");
exec("sudo systemctl stop ircddbgatewayd.service");
exec("sudo systemctl stop md380-emu.service");
exec("sudo systemctl stop mmdvm_bridge.service");
exec("sudo systemctl stop nxdngateway.service");
exec("sudo systemctl stop ysfgateway.service");
exec("sudo systemctl stop dmr2ysf.service");
exec("sudo systemctl stop p25gateway.service");


	
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8"> 
     <meta http-equiv="content-type" content="text/html">
     <meta name="author" content="EA3EIZ">
     <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon" />
     <title>cambiando</title>
     <meta http-equiv="refresh" content="2; url=../../index_botones.php" />

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
               <h1 class="texto_centrado_blanco">DESACTIVANDO DVSWITCH</h1>
               </div> 	                       
        </div><!--  row -->
</div><!--container-->

<!-- JavaScript================================================== -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
