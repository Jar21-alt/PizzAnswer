<?php

$link = 'mysql:host=localhost; dbname=pizzanswer';
$usuario = 'root'
$pass = 'jioortiz'

try {
    $pdo = new PDO($link, $usuario, $pass)

    echo 'Conectado';
} catch (PDOExecption $e)) {
    print "¡Error!: " . $e.->getMessage() . "<br\>";
    die();
}

?>