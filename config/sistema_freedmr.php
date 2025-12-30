<?php 
session_start();

$address = exec("sed -n '70p' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");
$address = substr("$address", 8, 30);

$port = exec("sed -n '71p' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");
$port = substr("$port", 5, 5);

$password = exec("sed -n '74p' /opt/MMDVM_Bridge/MMDVM_Bridge_FREEDMR.ini");
$password = substr("$password", 9, 20);

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
.config_tgif{
    height: 370px;
    background:rgb(55, 27, 213);
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
<br><br>
<!--============== CAJA LOGIN ====================================-->       
 <div class="row">
    <div class="col-md-4 config_tgif"><br>     
        <h5>CONFIGURACIÓN FREEDMR</h5>
  
<form method="post" action="cambia_address_freedmr.php">
            <div class="fondo_datos">Address: 
                <span class="color_verde"><?php echo $address;?></span>
            </div>   
        <input name="address_freedmr" class="fuente_boton3 form-control" placeholder="Introduce Address + Enter">
      

</form>
<br>
<form method="post" action="cambia_puerto_freedmr.php">
            <div class="fondo_datos">Puerto Freedmr: 
                <span class="color_verde"><?php echo $port;?></span>
            </div>  
        <input name="port_freedmr" class="fuente_boton3 form-control" placeholder="Introduce Port + Enter">
       

</form>
<br>
<form method="post" action="cambia_password_freedmr.php">
            <div class="fondo_datos">Password Freedmr: 
                <span class="color_verde"><?php echo $password;?></span>
            </div> 
        <input name="password_freedmr" class="fuente_boton3 form-control" placeholder="Introduce Password + Enter"> 


</form>
<br>

<form method="post" action="../../index_botones.php">
    <button class="btn btn-warning btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button>
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