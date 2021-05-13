<?php
include_once 'conexion.php';
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="estilo.css">
    <link rel='stylesheet' type="text/css" href="contacto.css">
    <title>Contacto</title>
</head>

<body>
    <header>
        <nav class="menuPizza">
            <img src="images/logo.PNG" class="logoP">
            <label class="logoPizza">PizzAnswer</label>
            <ul class="menupizza_item">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Promociones</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <section class="lateral1"></section>
    <section class="lateral2"></section>
    <section class="padreContacto">
        <h1 class="tituloBien"> ¡Contactanos! </h1>
        <div class='contenedorFlex'>
            <div class='row'>
                <div class='column'>
                    <div class='left-column'>
                        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5850.817359694268!2d-104.8881475188543!3d21.48841657444215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84273720ef367fcb%3A0xfffd51f0b844db98!2sDomino&#39;s%20Manglar!5e0!3m2!1ses-419!2smx!4v1620885800374!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class='column'>
                    <div class='right-column'>
                        <div class="datosPizza">
                            <div class="nombrePiz">Pizzeria Centro</div>
                            <div class="direcPiz">Puebla 73</div>
                            <div class="telPiz">311 225 6581</div>
                            <a href="https://www.facebook.com/DominosMexico/" target="_blank"><img src="images/logoFacebook.png" alt=""></a>
                            <a href="https://g.page/DominosManglar?share" target="_blank"><img src="images/logoMaps.png" alt=""></a>
                        </div>
                        <div class="datosPizza">
                            <div class="nombrePiz">Pizzeria Villas</div>
                            <div class="direcPiz">Lomas Agrias 12</div>
                            <div class="telPiz">311 297 6545</div>
                            <a href="https://www.facebook.com/DominosMexico/" target="_blank"><img src="images/logoFacebook.png" alt=""></a>
                            <a href="https://g.page/DominosManglar?share" target="_blank"><img src="images/logoMaps.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" style="text-decoration-line: none;">
            <h1 class="boton">
                Regresar
            </h1>
        </a>
    </section>


</body>

</html>