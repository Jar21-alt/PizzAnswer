<?php
include_once 'conexion.php';

$sql_leer = 'SELECT * FROM datospizzeria';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' type="text/css" href="estilo.css">
    <link rel='stylesheet' type="text/css" href="contacto.css">
    <title>Contacto</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
                        <?php foreach ($resultado as $dato) : ?>
                            <div class="datosPizza">
                                <div class="nombrePiz"><?php echo $dato['nombrePizzeria'] ?></div>
                                <div class="direcPiz"><?php echo $dato['direccion'] ?></div>
                                <div class="telPiz"><?php echo $dato['telefonoPizzeria'] ?></div>
                                <a href="<?php echo $dato['urlFacebook'] ?>" target="_blank"><img src="images/logoFacebook.png" alt=""></a>
                                <a href="<?php echo $dato['urlMaps'] ?>" target="_blank"><img src="images/logoMaps.png" alt=""></a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div type="button" class="btn btn-danger">Regresar</div>
        </div>
    </section>


</body>

</html>