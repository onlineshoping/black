<?php

require("db_connect.php");

if(isset($_POST['action'])) {
	$action = $_POST['action'];
	unset($_POST['action']);
	
	if($action == "getListing") {
		$sql = "SELECT * FROM products";
	
		$query = mysql_query($sql);
		$results = [];
		
		while($row = mysql_fetch_assoc($query)) {
			$results[] = $row;
		}
		
		echo JSON_ENCODE($results);
	}
}
