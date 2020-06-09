<?php
	$h	= "localhost";
	$u	= "root";
	$i 	= "";
	$d 	= "db_kredit";

	$con = new mysqli($h, $u, $i, $d);
	if ($con->connect_error) {
		die("Connection Failed: " . $con->connection_error);
	}
?>