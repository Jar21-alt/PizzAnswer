<?php
function db_query($query) {
    $connection = mysqli_connect("sql3.freesqldatabase.com:3306/","sql3411883","I8r8vJ2nEp","sql3411883");
    $result = mysqli_query($connection,$query);

    return $result;
}

function delete($tblname,$field_id,$id){ //Funcion para borrar registros

	$sql = "delete from ".$tblname." where ".$field_id."=".$id."";
	
	return db_query($sql);
}

function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;
}
?>