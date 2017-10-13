<?php
	$dbhost = "localhost:5432";									//DATABASE CONNECTION FILE
	$dbuser = "coolsaurav10";										//DATABASE USER CREDENTIALS
	$dbpass = "db-coolsaurav10-33613
";												
	$dbname = "coolsaurav10";								//DATABASE NAME
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('cannot connect to the server'); 
	mysqli_select_db($con,$dbname) or die('database selection problem');
?>