<?php
include_once '..\conexion.php';
session_start();
 
if(!isset($_SESSION['user_id'])){
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="../estiloa.css">
    <title>Gerente Promociones</title>
</head>
<body>
    <header>
    <nav class = "menuPizza">
        <img src="../images/logoNegro.PNG" class="logoP">
        <label class="logoPizza">PizzAnswer/Gerencia</label>
        <ul class="menupizza_item">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Promociones</a></li>
            <li><a href="#">Encuesta</a></li>
        </ul>
    </nav>
    </header>
</body>
</html