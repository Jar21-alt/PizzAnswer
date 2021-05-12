<?php

//NO MOVER
$link = 'mysql:host=sql3.freesqldatabase.com:3306/; dbname=sql3411883';
$usuario = 'sql3411883';
$pass = 'I8r8vJ2nEp';

try {
    $pdo = new PDO($link, $usuario, $pass);

    echo 'Conectado';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br\>";
    die();
}

?>