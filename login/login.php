<!-- Login page for various users-->

<!DOCTYPE html>
<html>

	<head> 
		<meta charset="UTF-8"> 
		<title>INDIAN RAILWAYS </title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
	</head>
	
	<body>
		<form action="process.php" method="post">
			<div class="wrap">
				<div class="avatar">
					<img src="Indian_Railway.svg.png">
				</div>
				<input type="text" placeholder="username"  id="user" name="user" required>
				<div class="bar">
					<i></i>
				</div>
				<input type="password" placeholder="password" id="pass" name="pass" required>
				<a href="" class="forgot_link">forgot ?</a>
				<button id="signin">Sign in</button>
			</div>
		</form>
	</body>
	
</html>