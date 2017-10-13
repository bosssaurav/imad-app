<?php
	include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<meta charset="utf-8"/>
	<head>
		<title>E-Tapaal</title>
		
		<!-- STYLESHEETS -->
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link rel="stylesheet" href="bootstrap.min.css">
		
		<!-- JAVASCRIPT  -->
		<script type="text/javascript" src="val.js"></script>
	</head>
	<body>
		<!-- HEADER  -->
		<div id="header">
			<label>E-Tapaal</label>
		</div>
		
		<!-- FILE UPLOADER  -->
		<div id="body">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<table width="35%" border="2"><br>
				<tr><th colspan="2"><center><br>Tapaal Uploader...<br></center></th><br></tr>
			
				<!-- RECEPIENT ADDER -->
				<tr>
					<td><label> Enter The Recepient ID: </label></td>
					<td><input type="text" name="u_id" onkeypress="return event.charCode>=48 && event.charCode<=57" onBlur="valId()" placeholder="User Id" id="u_id"/></td>
				</tr>
			
				<!-- FILE CHOOSER -->
				<tr>
					<td><label> Choose the file to upload:</label></td>
					<td><input type="file" name="file" onclick="vallId()" style="width:200px"/></td>
				</tr>
			
				<!-- FILE UPLOAD BUTTON -->
				<tr>
					<td></td>
					<td><button type="submit" name="btn-upload" class="btn btn-success" >Upload</button></td>
				</tr>	
			</form>
			<br /><br />
		</div>
	</body>
</html>