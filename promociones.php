<?php
include_once 'conexion.php';

$sql_leer = 'SELECT * FROM promocion';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

//echo strtotime(date("Y-m-d", time()));

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
    <link rel='stylesheet' type="text/css" href="promociones.css">
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
    <h1 class="tituloBien"> Promociones </h1>
    <div class="contenedorpromos">
        <?php foreach ($resultado as $dato) : ?>
            <?php if (strtotime($dato['vigenciaPromo']) > strtotime(date("d-m-Y", time()))) : ?>
                <div class="promo">
                    <img src="promos/<?php echo $dato['imagen'] ?>" alt="">
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>


</body>

</html>