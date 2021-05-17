<?php 
include("function.php");
$id = $_GET['id'];
delete('pregunta','idPregunta',$id);
header("location:../delPregunta.php");
?>