<?php
include_once '..\conexion.php';
session_start();
$sql_leer = 'SELECT * FROM promocion';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
} else {
    // Show users the page!
}


?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="../estiloa.css">
    <link rel='stylesheet' type="text/css" href="verPromo.css">
    <title>Gerente Promociones</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <header>
        <nav class="menuPizza">
            <img src="../images/logoNegro.PNG" class="logoP">
            <label class="logoPizza">PizzAnswer/Gerencia</label>
            <ul class="menupizza_item">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Promociones</a></li>
                <li><a href="#">Encuesta</a></li>
            </ul>
        </nav>
    </header>
    <div class="titulo">
        Promociones
    </div>
    <div class="contenedorpromos">
        <?php foreach ($resultado as $dato) : ?>
            <?php if (strtotime($dato['vigenciaPromo']) >= strtotime(date("d-m-Y", time()))) : ?>
                <div class="promo">
                    <img src="../promos/<?php echo $dato['imagen'] ?>" alt="" class="imgPromo">
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
    <div class="contenedorbotones">
        <a href="addPromo.php"><button type="#" class="botones">Agregar</button></a>
        <a href=""><button type="#" class="botones">Eliminar</button></a>
        <a href=""><button type="#" class="botones">Regresar</button></a>
    </div>
</body>

</html