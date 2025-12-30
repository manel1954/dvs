<?php 
session_start();

$ipsc2 = exec("sudo sed -n '70p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$ipsc2 = substr("$ipsc2", 8, 30);

$options = exec("sudo sed -n '77p' /opt/MMDVM_Bridge/MMDVM_Bridge.ini");
$options = substr("$options", 0, 50);


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

    <link rel="shortcut icon" href="img/Logo_Ader.png">
    <title>Configuracion</title>
    <!-- CSS Bootstrap-->
    <link href="custom/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- CSS tema -->
    <link href="css/freelancer.css" rel="stylesheet">
    
    <!-- <Fuentes -->
    <link href="custom/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<style type="text/css">
body{
    background-image: url(../images/fondo_02.png);
}
 .color_verde{
    color:#21FF06;
}  
.texto_blanco{
    color:#FFFFFF;
    ont-weight: bold;  
    font-size: 18px;
    text-align: left;
}
.texto_negro{
    color:#000000;
    font-weight: bold;  
    font-size:  18px;
    text-align: left;
}
.fuente_boton1{
    color:#000000;
    font-weight: bold;  
    font-size: 13px;
    text-align: left;
}
/*   ========   PARAMETROS CAJA LOGIN 1========================================*/
    .caja_login1{
    position: absolute;
    width:430px;
    top:100px;
    left:10px;
    margin-top: 20px;
    padding: 0px 0px 0px 0px;
    background-color: #60007F;
    transition: all linear 0.55s;
    -ms-transition: all linear 0.55s;
    -moz-transition: all linear 0.55s;
    -webkit-transition: all linear 0.55s;
    -o-transition: all linear 0.55s;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    border-radius: 5px 5px 5px 5px;
    z-index:1000;
    font-size: 18PX;
}    
/*  ========   FIN PARAMETROS CAJA LOGIN 1========================================*/
/*   ========   PARAMETROS CAJA LOGIN 2========================================*/
.caja_login2{
    position: absolute;
    width:430px;
    top:340px;
    left:10px;
    margin-top: 20px;
    padding: 0px 0px 0px 0px;
    background-color: #60007F;
    transition: all linear 0.55s;
    -ms-transition: all linear 0.55s;
    -moz-transition: all linear 0.55s;
    -webkit-transition: all linear 0.55s;
    -o-transition: all linear 0.55s;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    border-radius: 5px 5px 5px 5px;
    z-index:1000;
    font-size: 18PX;
}    
/*  ========   FIN PARAMETROS CAJA LOGIN 2========================================*/
/*   ========   PARAMETROS CAJA LOGIN 3========================================*/
.caja_login3{
    position: absolute;
    width:430px;
    top:505px;
    left:10px;
    margin-top: 20px;
    padding: 0px 0px 0px 0px;
    background-color: #60007F;
    transition: all linear 0.55s;
    -ms-transition: all linear 0.55s;
    -moz-transition: all linear 0.55s;
    -webkit-transition: all linear 0.55s;
    -o-transition: all linear 0.55s;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    border-radius: 5px 5px 5px 5px;
    z-index:1000;
    font-size: 18PX;
}    
/*  ========   FIN PARAMETROS CAJA LOGIN 3========================================*/
/*   ========   PARAMETROS CAJA LOGIN 3========================================*/
.caja_login4{
    position: absolute;
    width:430px;
    top:730px;
    left:10px;
    margin-top: 20px;
    padding: 0px 0px 0px 0px;
    background-color: #60007F;
    transition: all linear 0.55s;
    -ms-transition: all linear 0.55s;
    -moz-transition: all linear 0.55s;
    -webkit-transition: all linear 0.55s;
    -o-transition: all linear 0.55s;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    border-radius: 5px 5px 5px 5px;
    z-index:1000;
    font-size: 18PX;
}    
/*  ========   FIN PARAMETROS CAJA LOGIN 3========================================*/
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
</style>
</head>
<body>

    <!-- Navigation -->


<div class="container"> 

<!--============== CAJA LOGIN 1====================================-->
<div class="row">
    <div class="col-md-4">
        <div class="caja_login1 ">
            <div class="panel-body">
            <p class="text-center"><img src="img/Logo_plus.png" height="40"></p><br>
    <form method="post" action="cambia_reflector_dmrplus.php">        
            <label class="texto_blanco">MASTER IPSC2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <select class="texto_negro" name="ipsc2" size="1">
            <option value="">Elige IPSC2</option>
            <option value="Address=217.61.2.11">IPSC2-Catalunya</option>
            <option value="Address=212.237.3.141">IPSC2-EA-Hotspot</option>
            <option value="Address=94.177.189.17">IPSC2-EA-RPTR</option>
            <option value="Address=217.61.97.204">IPSC2-EA1Master</option>
            <option value="Address=185.47.129.230">IPSC2-EA2Master</option>
            <option value="Address=212.237.4.86">IPSC2-EA3-RPTR</option>
            <option value="Address=89.36.222.146">IPSC2-EA3Master</option>
            <option value="Address=80.211.226.37">IPSC2-EA4Master</option>
            <option value="Address=217.61.98.58">IPSC2-EA5Master</option>
            <option value="Address=212.237.50.28">IPSC2-EA7Master</option>          
            <option value="">-----------------------------------</option>
            </select>
            <br>
            <div class="fondo_datos">
            <span class="color_verde">Address=<?php echo $ipsc2;?></span>
            
            </div>     
            <button class="btn btn-info btn-sm btn-block" type="submit">CONFIRMAR LOS CAMBIOS</button><br>
    </form>
    <form method="post" action="../index_dvswitch_buster.php">
                <!-- <button class="btn btn-danger btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button> -->
    </form>
          </div><!-- panel-body -->
       </div><!-- caja -->
   </div><!-- "col-md-4 -->
</div><!-- row -->
<!--============== FIN CAJA LOGIN1 ====================== -->
<!--============== CAJA LOGIN 2====================================-->
<div class="row">
    <div class="col-md-4">
        <div class="caja_login2 ">
            <div class="panel-body">
    <form method="post" action="cambia_options_dmrplus.php">        
            <label class="texto_blanco">OPTIONS DMR+:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>      
            <select class="texto_negro" name="options" size="1">
            <option value="">Elige Reflector de la lista</option>
            <option value="Options=StartRef=4370;RelinkTime=15">4370</option>
            <option value="Options=StartRef=4371;RelinkTime=15">4371</option>
            <option value="Options=StartRef=4372;RelinkTime=15">4372</option>
            <option value="Options=StartRef=4373;RelinkTime=15">4373</option>
            <option value="Options=StartRef=4374;RelinkTime=15">4374</option>
            <option value="Options=StartRef=4375;RelinkTime=15">4375</option>
            <option value="Options=StartRef=4376;RelinkTime=15">4376</option>
            <option value="Options=StartRef=4377;RelinkTime=15">4377</option>
            <option value="Options=StartRef=4378;RelinkTime=15">4378</option>
            <option value="Options=StartRef=4379;RelinkTime=15">4379</option>
            <option value="Options=StartRef=4000;RelinkTime=15">7</option>
            <option value="Options=StartRef=4000;RelinkTime=15">214</option>
            <option value="Options=StartRef=4000;RelinkTime=15">704</option>
            <option value="Options=StartRef=4000;RelinkTime=15">2140</option>
            <option value="Options=StartRef=4000;RelinkTime=15">708</option>
            <option value="Options=StartRef=4000;RelinkTime=15">7226</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21404</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21410</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21411</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21418</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21421</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21423</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21428</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21429</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21441</option>
            <option value="Options=StartRef=4000;RelinkTime=15">21465</option>
            <option value="Options=StartRef=4000;RelinkTime=15">79999</option>
            <option value="">----------------------------------</option>
            </select>
            <br>
            <div class="fondo_datos">
            <span class="color_verde"><?php echo $options;?></span>
            </div>                     
            <button class="btn btn-info btn-sm btn-block" type="submit">CONFIRMAR LOS CAMBIOS</button><br>
    </form>

    <form method="post" action="../index_dvswitch_buster.php">
            <!-- <button class="btn btn-danger btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button> -->
    </form>
          </div><!-- panel-body -->
       </div><!-- caja -->
   </div><!-- "col-md-4 -->
</div><!-- row -->
<!--============== FIN CAJA LOGIN 2====================== -->
<!--============== CAJA LOGIN 3====================================-->
<div class="row">
    <div class="col-md-4">
        <div class="caja_login3 ">
            <div class="panel-body">
            <label class="texto_blanco">CONFIGURAR OPTIONS MANUALMENTE</label>                 
    <form method="post" action="cambia_options_dmrplus.php">
            <input name="options" class="form-control fuente_boton1" placeholder="Introduce Options,  Ej. Options=StartRef=4370;RelikTime=15;">
            <div class="fondo_datos"> 
            <span class="color_verde"><?php echo $options;?></span>
            </div> 
                      
            <button class="btn btn-info btn-sm btn-block" type="submit">CONFIRMAR LOS CAMBIOS</button><br>
            </form>
    <form method="post" action="../index_dvswitch_buster.php"><br>
            <!-- <button class="btn btn-danger btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button> -->
    </form>
          </div><!-- panel-body -->
       </div><!-- caja -->
   </div><!-- "col-md-4 -->
</div><!-- row -->
<!--============== FIN CAJA LOGIN 3====================== -->

<!--============== CAJA LOGIN4 ====================================-->
<div class="row">
    <div class="col-md-4">
        <div class="caja_login4 ">
            <div class="panel-body">
            <label class="texto_blanco">CONFIGURAR REFLECTOR MANUALMENTE</label>                 
    <form method="post" action="cambia_reflector_dmrplus_manualmente.php">
            <input name="ipsc2" class="form-control fuente_boton1" placeholder="Introduce Reflrector,  Ej. 212.237.3.141">
            <div class="fondo_datos"> 
            <span class="color_verde">Address=<?php echo $ipsc2;?></span>
            </div> 
                      
            <button class="btn btn-info btn-sm btn-block" type="submit">CONFIRMAR LOS CAMBIOS</button>
            </form>
    <form method="post" action="../../index_botones.php"><br>
            <button class="btn btn-danger btn-sm btn-block" type="submit">VOLVER AL DASHBOARD</button>
    </form>
          </div><!-- panel-body -->
       </div><!-- caja -->
   </div><!-- "col-md-4 -->
</div><!-- row -->
<!--============== FIN CAJA LOGIN 4====================== -->


</div><!-- container -->

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                                            </div>
                </div>
            </div>
        </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- FOOTER ==================================== -->

      <footer>
<!-- <p class="ir-arriba pull-right"><a href="#"><span class="glyphicon glyphicon-arrow-up"></span></a></p>
 -->        <p class="color_naranja_izquierd">&copy; DVSWITCH MOBILE ADER 2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Design by:&nbsp;&nbsp;( EA3EIZ )</p>
      </footer>
<!-- FIN  DEL FOOTER ==================================== -->
    </header>
    <?php
//}else {
//header('Location:/dvs/index.php');    
//}
?>
    <!-- jQuery -->
    <script src="custom/jquery/jquery.min.js"></script>
    <script src="custom/bootstrap/js/bootstrap.min.js"></script>
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

