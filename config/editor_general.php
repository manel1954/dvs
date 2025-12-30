<?php 
session_start();



$reflector_dstar = exec("sudo sed -n '5p' /etc/ircddbgateway");
$reflector_dstar = substr("$reflector_dstar", 12, 8);

$reflector_ysf = exec("sudo sed -n '42p' /opt/YSFGateway/YSFGateway.ini");
$reflector_ysf = substr("$reflector_ysf", 8, 20);


$fcs = exec("sudo sed -n '5p' /opt/MMDVM_CM/DMR2YSF/TG-YSFList.txt");
$fcs = substr("$fcs", 2, 8);





$puerto = exec("sudo sed -n '55p' /opt/Analog_Bridge/Analog_Bridge.ini");
$puerto = substr("$puerto", 9, 5);

$callsign = exec("sudo sed -n '2p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$callsign = substr("$callsign", 9, 11);

$id = exec("sudo sed -n '40p' /opt/Analog_Bridge/Analog_Bridge.ini");
$id = substr("$id", 13, 9);

$frecuencia = exec("sudo sed -n '8p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$frecuencia = substr("$frecuencia", 12, 9);

$latitude = exec("sudo sed -n '11p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$latitude = substr("$latitude", 9, 10);

$longitude = exec("sudo sed -n '12p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$longitude = substr("$longitude", 10, 10);

$longitude = exec("sudo sed -n '12p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$longitude = substr("$longitude", 10, 10);

$location = exec("sudo sed -n '14p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$location = substr("$location", 9, 25);

$url = exec("sudo sed -n '16p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$url = substr("$url", 4, 25);

$reflector_dstar = exec("sudo sed -n '18p' /etc/ircddbgateway");
$reflector_dstar = substr("$reflector_dstar", 11, 10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Allstar Link">
    <meta name="description" content="Allstar Link">
    <meta name="author" content="EA3EIZ">

<!-- refresca la página cada 10 segundo (implantado por mi) -->
<!-- ====================================================== -->
<!-- <meta http-equiv="refresh" content="5" /> -->

    <link rel="shortcut icon" href="img/favicon.png">
    <title>DVSWITCH</title>

    <!-- CSS Bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="custom/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS tema -->
    <link href="css/freelancer.css" rel="stylesheet">
    
    <!-- <Fuentes -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
    body{
background-image: url(img/fondo_02.png);
    }
.sistema{
    height: 50px;
    color:#FFFFFF;
    font-size: 25px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
.ambe{
    height: 450px;
    color:#FFFFFF;
    font-size: 26px;
    padding-top: 5px;
    text-align: center;
    background:#800080;
    border-radius: 4px 4px 4px 4px;
    }
.ambe_desactivado{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 100%;
    height: 41px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #000000;
    border-radius: 5px 5px 5px 5px;
    font-size: 24px;
    color:#F00000;
    border: 1px solid #ccc;
}
.ambe_activado{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 100%;
    height: 41px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #108040;
    border-radius: 5px 5px 5px 5px;
    font-size: 24px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.version{
    height: 50px;
    color:#FFFFFF;
    font-size: 20px;
    padding-top: 8px;
    text-align: center;
    background:#6F2B0A;
    border-radius: 4px 4px 4px 4px;
    }    
.callsign{
    height: 50px;
    color:#000000;
    font-size: 20px;
    padding-top: 11px;
    text-align: center;
    background:#FFFF0A;
    border-radius: 4px 4px 4px 4px;
    } 
.ipcs2{
    color:#000000;
    font-size: 25px;
    padding-top: 11px;
    }
@media (max-width: 360px) {
.ipcs2{
    color:#000000;
    font-size: 18px;
    padding-top: 11px;
    }
    .sistema{
    height: 40px;
    color:#FFFFFF;
    font-size: 18px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
}
@media (min-width: 375px) {
.ipcs2{
    color:#000000;
    font-size: 18px;
    padding-top: 11px;
    }
    .sistema{
    height: 40px;
    color:#FFFFFF;
    font-size: 18px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
}
@media (min-width: 767px) {
.ipcs2{
    color:#000000;
    font-size: 25px;
    padding-top: 11px;
    }
    .sistema{
    height: 50px;
    color:#FFFFFF;
    font-size: 25px;
    padding-top: 5px;
    text-align: center;
    background:#108040;
    border-radius: 4px 4px 4px 4px;
    } 
}
.color_verde{
    color:#21FF06;
    }     
.fuente_boton{
    font-size:16px;
    color:#FFFFFF;
    }
.fuente_boton1{
    font-size:24px;
    color:#f00000;
    }
.fuente_boton2{
    font-size:14px;
    color:#FFFFFF;
    }
.fuente_boton3{
    font-size:20px;
    color:#f00000;
    }
.config{
    background:#6F2B0A;
    border-radius: 8px 8px 8px 8px;
    }
.config_especial{
    width: 500px;
    height: 450px;
    background:#d9540c;
    border-radius: 8px 8px 8px 8px;
    }
h4{
    text-align:center;
    color:#FFFFFF;
    font-size:24px;
} 
h5{
    text-align:center;
    color:#FFFFFF;
    font-size:18px;
   text-transform: none;
} 
h6{
    text-align:center;
    color:#FFFFFF;
    font-size:14px;
}  
.fondo_datos{
    margin-top: 1px;
    margin-bottom: 7px;
    width: 100%;
    height: 25px;
    text-align:center;
    padding: 0px 0px 0px 0px;
    background-color: #4C4C4C;
    border-radius: 5px 5px 5px 5px;
    font-size: 16px;
    color:#FFFFFF;
    border: 1px solid #ccc;
}
.form-control {
    height: 25px;
    text-align: center;
    font-size: 16px;
}
</style>
</head>
<body>



    <!-- Navigation -->


<div class="container"> 
<br><br><br>
<!--============== CAJA LOGIN ====================================-->      
 <div class="row">
    <div class="col-md-4 config_especial"><br>     
        <h5>CONFIGURACIÓN GENERAL</h5>

<form method="post" action="/dvs/config/cambia_puerto.php">    
<div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;PUERTO USRP: </span><span class="color_verde" style="margin-left: auto;"><?php echo $puerto;?> </span>
        <input name="puerto" class="fuente_boton3 form-control" placeholder="Puerto USRP + Enter" style="margin-left: 2px; width: 200px;"style="margin-left: 2px; width: 200px;">       
        </div> 
</form>

<form method="post" action="/dvs/config/cambia_configuracion_indicativo.php">
<div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;INDICATIVO: </span><span class="color_verde" style="margin-left: auto;"><?php echo $callsign;?></span>
        <input name="indicativo" class="fuente_boton3 form-control" placeholder="Indicativo + Enter" style="margin-left: 2px; width: 200px;">
        </div>
</form>

<form method="post" action="/dvs/config/cambia_configuracion_id.php">            
<div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;ID: </span><span class="color_verde"style="margin-left: auto;"><?php echo $id;?></span>
        <input name="id" class="fuente_boton3 form-control" placeholder="Id de 9 Dígitos + Enter" style="margin-left: 2px; width: 200px;"> 
        </div> 
</form>

<form method="post" action="/dvs/config/cambia_configuracion_frecuencia.php">            
<div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">   
        <span>&nbsp;&nbsp;FRECUENCIA: </span><span class="color_verde"style="margin-left: auto;"><?php echo $frecuencia;?></span>
        <input name="frecuencia" class="fuente_boton3 form-control" placeholder="9 dígitos + Enter" style="margin-left: 2px; width: 200px;">
        </div> 
</form>

<form method="post" action="/dvs/config/cambia_configuracion_latitud.php">            
<div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;LATITUD: </span><span class="color_verde"style="margin-left: auto;"><?php echo $latitude;?></span>
        <input name="latitude" class="fuente_boton3 form-control" placeholder="Latitude  + Enter" style="margin-left: 2px; width: 200px;">
        </div> 
</form>

<form method="post" action="/dvs/config/cambia_configuracion_longitud.php">            
    <div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;LONGITUD </span><span class="color_verde"style="margin-left: auto;"><?php echo $longitude;?></span>
        <input name="longitude" class="fuente_boton3 form-control" placeholder="Longitude  + Enter" style="margin-left: 2px; width: 200px;">
    </div> 
</form>

<form method="post" action="/dvs/config/cambia_configuracion_location.php">            
    <div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;CIUDAD: </span><span class="color_verde"style="margin-left: auto;"><?php echo $location;?></span>
        <input name="location" class="fuente_boton3 form-control" placeholder="Ciudad  + Enter" style="margin-left: 2px; width: 200px;">
    </div> 
</form>

<form method="post" action="/dvs/config/cambia_configuracion_url.php">            
    <div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;URL: </span><span class="color_verde"style="margin-left: auto;"><?php echo $url;?></span>
        <input name="url" class="fuente_boton3 form-control" placeholder="Web preferida + Enter" style="margin-left: 2px; width: 200px;">
    </div> 
</form>

<form method="post" action="/dvs/config/cambia_reflector_dstar.php">            
    <div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: center;">
        <span>&nbsp;&nbsp;REFLECTOR DSTAR: </span>
        <span class="color_verde"style="margin-left: auto;">
        <?php echo $reflector_dstar;?></span>
        <input name="reflector_dstar" class="fuente_boton3 form-control" placeholder="ej. DCS018 D + Enter" style="margin-left: 2px; width: 200px;"> 
    </div> 
</form>

<form method="post" action="/dvs/config/cambia_reflector_ysf.php">            
    <div class="fondo_datos" style="display: flex; justify-content: space-between; align-items: left;">
        <span>&nbsp;&nbsp;REFLECTOR YSF: </span>
        <span class="color_verde"style="margin-left: auto;">
        <?php echo $reflector_ysf;?></span>        
        <input name="reflector_ysf" class="fuente_boton3 form-control" placeholder="ej. EA-Distrito-4 + Enter" 
        style="margin-left: ; width: 200px;">
    </div>
</form>




<!-- <br>
<form method="post" action="/dvs/config/cambia_sala_FCS.php">   
    <div class="fondo_datos">Sala FCS:  
        <span class="color_verde"><?php echo $fcs;?></span>
    </div>  
<input name="fcs" class="fuente_boton3 form-control" placeholder="Introduce Sala FCS ej:FCS0065 + Enter">
        
</form> -->
<br>
<form method="post" action="../../index.php">
    <button class="btn btn-success btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button>
</form>
<br>
   </div><!-- "col-md-4 -->
</div><!-- row -->

<!--============== FIN CAJA LOGIN ====================== -->



</div><!-- container -->

    
<?php
//}else {
//header('Location:/dvs/index.php');    
//}
?>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/freelancer.min.js"></script>
<script>
function parpadear() {
with (document.getElementById("parpadeo").style)
visibility = (visibility == "visible") ? "hidden" : "visible";
}
</script>
</body>
</html>
