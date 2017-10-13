<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File View</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<div id="body">
	<table width="80%" border="1">
    <tr>
		<th colspan="6">Your Uploads...</th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
	<td>Status</td>
    </tr>
 <?php
include_once 'dbconfig.php';
if(isset($_SESSION['user'] )){
    	$xyz = $_SESSION['user'];
	}
	else{
		$xyz = mysqli_real_escape_string($con, $_POST['user']);		
	}
	$sql="SELECT * FROM tbl_uploads
		where u_id=$xyz";
	$result_set=mysqli_query($con,$sql);
	$rowcount=mysqli_num_rows($result_set);
	if($rowcount==0){
    	?>
    	<script type="text/javascript">
    		alert("Invalid Employee Id");
    	</script>
    	<?php    include_once 'get.php';  
    	
	}
	?>
	
	
	<?php
	while($row=mysqli_fetch_array($result_set))
	{
		?>
      <tr>
		<td-1><?php $z= $row['id'] ?></td> 
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
		<td><form action="xyz.php" method="POST" enctype="multipart/form-data" >
		<input type="hidden" name="filename" value="<?php echo $xyz; ?>">
		<input type="hidden" name="filename1" value="<?php echo $z; ?>">
		<button type="submit" name="btn-upload" <?php if ($row['flag'] == '1'){ ?> disabled <?php   } ?> >Acknowledge</button>
		</form>
	<?php 
	echo $z;
	echo $xyz; ?>
	<br>
	
	</td>
      </tr>
        <?php
	}
	
	?>
