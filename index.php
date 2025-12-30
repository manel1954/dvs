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
    <title>Inicio</title>

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
        background: #000000;
    }
   .parpadea {
color:#1FFD08;
   }
      a {
color:#FD0847;
   }
   /*   ========   PARAMETROS CAJA LOGIN ========================================*/
    .caja_login{
    position:fixed;
    width:350px;
    top:100px;
    text-align:center;
    margin-top: 20px;
    padding: 0px 0px 0px 0px;
    background-color: #4C4C4C;
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
}
.caja_login_down_up{
    top:31px;
    }
@media screen and (max-width:580px){  
.caja_login_down_up{
    top:331px;
    } 
}
/*  ========   FIN PARAMETROS CAJA LOGIN ========================================*/
</style>
</head>

<body onload="setInterval('parpadear()', 500)" onload="setInterval('parpadear1()', 500)" id="page-top" class="index">
    <!-- Navigation -->
    
<br><br><br><br><br> 

<!--============== CAJA LOGIN ====================================-->
<div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="caja_login panel-default">
                    <div class="panel-body">
                        <p><img src="images/Logo_Ader.png" height="40"></p>
     <form method="post" action="dentro.php">

                           
                    <div class="form-group">
                          <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input name="pass" id="pass"type="password" class="form-control" placeholder="Password:" required>
                          </div>
                    </div>
                <button class="btn btn-lg btn-success btn-block" type="submit">
                    Entrar</button>

                        </form>

              </div><!-- "col-md-4 -->
           </div>
        </div><!-- row -->
</div><!-- container -->


<!--============== FIN CAJA LOGIN ====================== -->

<!-- FIN  DEL FOOTER ==================================== -->
    </header>
    <!-- jQuery -->
    <script src="custom/jquery/jquery.min.js"></script>
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
