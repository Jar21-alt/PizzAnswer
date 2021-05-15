<?php
include_once '..\conexion.php';
session_start();

if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $pdo->prepare("SELECT * FROM gerente WHERE usuario=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    if (!$result) {
        
    } else {
        if ( $result['claveGerente'] ==  $password) {
            $_SESSION['user_id'] = $result['ID'];
            header('location: principalGerente.php');
        } else {
            
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel='stylesheet' type="text/css" href="../estiloa.css">
    <title>Login Gerente</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <header>
        <nav class="menuPizza">
            <img src="../images/logoGer.PNG" class="logoP">
            <label class="logoPizza">PizzAnswer/Gerencia</label>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="POST" action="" name="signin-form">
                    <br><br><br>
                    <h1>Usuario:</h1>
                    <br>
                    <input type="text" class="form-control" name="username" pattern="[a-zA-Z0-9]+" required><br>
                    <h1>Clave:</h1>
                    <br>
                    <input type="password" class="form-control" name="password" required>
                    <button class="btn btn-light mt-5" type="submit" name="login" value="login"> Iniciar sesión </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>