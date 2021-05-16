<?php
include_once '..\conexion.php';

$sql_leer = 'SELECT * FROM Promocion';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="../estiloa.css">
    <link rel='stylesheet' type="text/css" href="addPromo.css">
</head>
    <title>Gerencia | Agregar promoción</title>
<body>
    <header>
        <nav class = "menuPizzaAP">
            <img src="../images/logoNegro.PNG" class="logoP">
            <label class="logoPizza">PizzAnswer/Gerencia</label>
            <ul class="menupizza_item">
                <li><a href="principalGerente.php">Inicio</a></li>
                <li><a href="verPromo.php">Promociones</a></li>
                <li><a href="#">Encuesta</a></li>
            </ul>
        </nav>
    </header>
    <div class="form">
        <form action="#" method="POST" enctype="multipart/formdata">
            <input type="text" name="nombre" placeholder="Escriba un nombre..." required>
            <br>
            <br>
            <br>
            <input type="date" name="vigencia" required>
            <br>
            <br>
            <br>
            <div id="div_file">
                <p id="texto">Seleccionar archivo...</p>
                <input type="file" id="btn_enviar" required>
            </div>
        </form>
    </div>
    <p class="pt1">Agregar Promoción</p>
    <p class="pt2">Nombre:</p>
    <p class="pt3">Vigencia:</p>
    <p class="pt4">Imagen Promo:</p>
    <button type="submitR">Regresar</button>
    <button type="submitA">Aceptar</button>
</body>
</html