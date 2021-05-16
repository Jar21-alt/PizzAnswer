<?php
include_once 'conexion.php';
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="estilo.css">
    <title>Inicio</title>
</head>
<body>
    <header>
    <nav class = "menuPizza">
        <img src="images/logo.PNG" class="logoP">
        <label class="logoPizza">PizzAnswer</label>
        <ul class="menupizza_item">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="promociones.php">Promociones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>
    </header>
    <section class="lateral1"></section>
    <section class="lateral2"></section>
    <h1 class="tituloBien">Bienvenido(a)</h1>
    <section class="section1">
        <p class="promoSec1"> Promociones</p>
		<article class="article_uno">
			<img src="images/pizzaSec.png" class="promo1">
		</article>
	</section>
    <section class="section2">
        <p class="promoSec2">Contacto</p>
		<article class="article_dos">
			<img src="images/contactoSec.png" class="promo2">
		</article>
	</section>
    <section class="section3">
        <p class="promoSec3">Encuesta</p>
		<article class="article_tres">
			<img src="images/encuesta.png" class="promo2">
		</article>
	</section>
    <p class="derechos">2021 Ⓒ PizzAnswer Todos los derechos reservados. Términos y condiciones</p>
</body>
</html>