<?php
include("conexion.php");
session_start();
$usuario =$_POST['user'];
$clave=$_POST['pasword'];
include("conexion.php");
$sql = "SELECT COUNT(*) as contar FROM login WHERE usuario ='$usuario' and password='$clave'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($row['contar']>0){
    $_SESSION['username']=$usuario;
if(isset($_COOKIE[$usuario])){
 $cont =$_COOKIE[$usuario] ;
 setcookie($usuario,$cont+1,time()+3600);
}else{
 setcookie($usuario,1,time()+3600) ;
}
  header("location:principal.php");  
}else{
echo("datos errones");    
}

?>