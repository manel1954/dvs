<?php  	
session_start();
$passIng = strip_tags(sha1($_POST['pass']));
$mipass="356a192b7913b04c54574d18c28d46e6395428ab";
if ($passIng==$mipass){
$_SESSION['permisos'] = 1;
header("Location:index_dvswitch_buster.php");	
}
else{
header("Location:index.php");
}
?>