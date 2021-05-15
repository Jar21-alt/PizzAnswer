<?php
include_once '..\conexion.php';
// session_start();
 
// if(!isset($_SESSION['user_id'])){
//     header('Location: index.php');
//     exit;
// } else {
//     // Show users the page!
// }
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="../estiloa.css">
    <title>Gerente Inicio</title>
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
            <li><a href="#">Salir</a></li> 
        </ul>
    </nav>
    </header>
    <img src="../images/pizzGerent.PNG" class="logoGerentP">
    <p class="tit1">¡Buenas tardes!</p>
    <h1 class="tit2">Esta semana la pizzeria se siente:</h1>
    <h1 class="tit3">Levantamiento de pedidos</h1>
    <h1 class="tit4">Cocina</h1>
    <h1 class="tit5">Servicio a domicilio</h1>
</body>
</html