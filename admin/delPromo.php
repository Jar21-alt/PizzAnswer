<?php
include_once '..\conexion.php';
session_start();
$sql_leer = 'SELECT * FROM promocion';

$gsent = $pdo->prepare($sql_leer);
$gsent->execute();

$resultado = $gsent->fetchAll();

// if (!isset($_SESSION['user_id'])) {
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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" href="bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' type="text/css" href="../estiloa.css">
    <link rel='stylesheet' type="text/css" href="delPromo.css">
    <title>Eliminar Promociones</title>
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
        Eliminar Promocion
    </div>
    <div class="main-wrapper">
        <br><br>

        <?php
        include("delete/function.php");
        ?>
        <table border="1" width="50%">
            <tr>
                <th width="60%">Nombre Promo</th>
                <th width="31%">Vigencia</th>
                <th width="9%">Opcion</th>
            </tr>
            <?php
            $sql = "select * from promocion";
            $result = db_query($sql);
            while ($row = mysqli_fetch_object($result)) {
            ?>
                <tr>
                    <td><?php echo $row->nombrePromo; ?></td>
                    <td><?php echo $row->vigenciaPromo; ?></td>
                    <td>
                        <a class="btn btn-danger" href="delete/borrarPromo.php?id=<?php echo $row->idPromocion; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <div class="contenedorbotones">
        <a href="verPromo.php"><button type="#" class="botones">Guardar y salir</button></a>
    </div>

    
</body>

</html>