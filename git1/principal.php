<?php
session_start();
$usuario=$_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PWR9MNH');</script>
<!-- End Google Tag Manager -->
<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">     
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWR9MNH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
if(!isset($usuario)){
    header("location:index.php");
    
  }else{
      echo "<h1>BIENVENIDO ".$usuario."y has ingresado ".$_COOKIE[$_SESSION['username']]."</h1>"  ;
    
  }
?>
  <div class="aviso-cookies" id="aviso-cookies">
		<img class="galleta" src="./img/cookie.svg" alt="Galleta">
		<h3 class="titulo">Cookies</h3>
		<p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
		<button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
		<a class="enlace" href="aviso-cookies.html">Aviso de Cookies</a>
	</div>
	<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

	<script src="js/cookies.js"></script>

<?php    echo"<a href='salir.php'>Salir </a>" ?>
</body>
</html>