<?php
	$con=mysqli_connect("localhost","root","","railway");						//SELECT AND CONNECTION TO THE DATABASE
	mysqli_select_db($con,"railway");

	$username=mysqli_real_escape_string($con,$_POST['user']);					//FETCHING  THE CREDENTIALS
	$password=mysqli_real_escape_string($con,$_POST['pass']);

	$result=mysqli_query($con,"select * from users where EMPNO like '$username' and PAN like '$password'") //VALIDATING THE CREDENTIALS FROM DB
	or die("Failed to query database".mysqli_error());
	$row=mysqli_fetch_assoc($result);
	
	if((strcmp($row['EMPNO'],$username) and strcmp($row['PAN'],$password))!=0)			//ALERT FOR INVALID CREDENTIALS
	{
		?>
			<script type="text/javascript">alert("INVALID Login Crendentials") </script>
		<?php									
	}
	else{
		if(strcmp($row['DESIGCODE'],"COURIER")!=0){			//IF CREDENTIALS ARE OF ACKNOWLEDGING OFFICER THE PROVDING UPLOADED FILE VIEW		
			include_once "viewfile.php";
		}
		else{												//IF CREDENTIALS OF UPLOADER THEN PROVIDING UPLOADER VIEW
			include_once "uploadfile.php";
	}
	}
	
?>