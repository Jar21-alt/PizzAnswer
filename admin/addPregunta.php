<?php
include_once '..\conexion.php';

$sql_leer = 'SELECT * FROM pregunta';

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
    <link rel='stylesheet' type="text/css" href="addPregunta.css">
</head>
    <title>Gerencia | Agregar pregunta</title>
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
        <form action="#" method="POST">
            <select name="area">
                <option selected disabled="">Seleccione una opción</option>
                <option value="pedidos">Levantamiento de pedidos</option>
                <option value="cocina">Cocina</option>
                <option value="servdomicilio">Servicio a domicilio</option>
            </select>
            <br>
            <br>
            <br>
            <select name="tipo">
                <option selected disabled="">Seleccione una opción</option>
                <option value="satisfaccion">Pregunta de satisfacción</option>
                <option value="abierta">Pregunta abierta</option>
            </select>
            <br>
            <br>
            <br>
            <input type="text" name="pregunta"  placeholder="Escriba su pregunta aquí..." required>
        </form>
    </div>
    <p class="pt1">Agregar Pregunta</p>
    <p class="pt2">Área:</p>
    <p class="pt3">Tipo:</p>
    <p class="pt4">Pregunta:</p>
    <button type="submitR">Regresar</button>
    <button type="submitA">Aceptar</button>
</body>
</html