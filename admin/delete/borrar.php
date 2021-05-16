<?php 
include("function.php");
$id = $_GET['id'];
delete('promocion','idPromocion',$id);
header("location:../delPromo.php");
?>