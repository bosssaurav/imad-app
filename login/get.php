<?php
	include_once 'dbconfig.php';										//CREATING THE CONNECTION WITH DB
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>File view With PHP and MySql</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
	<div id="header">
		<label>AWAITING FILES</label>
	</div>
	<div id="body">
		<table width="80%" border="1">
			<div id="body">
				<form action="viewfile.php" method="post" enctype="multipart/form-data">
					<input type="text" name="u_id" id="u_id"/>
					<button type="submit" name="btn-upload">Search</button>
				</form>
			</table>

		</div>
	</body>
	</html>