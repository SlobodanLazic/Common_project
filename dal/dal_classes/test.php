<?php
	include_once("db_connection.php");
	
	$query = "SELECT * FROM USER";
	
	$array[] = DBConn::Select($query);
	
	var_dump($array);	
?>