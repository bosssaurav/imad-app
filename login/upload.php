<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{   
	// generate a random number to append to filename
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
	
	// fetch the file location
    $file_loc = $_FILES['file']['tmp_name'];
	
	//fetch the file size
	$file_size = $_FILES['file']['size'];
	
	// fetch the file type
	$file_type = $_FILES['file']['type'];
	
	// storage folder
	$folder="uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024; 
	
	// new file size in KB
	$u_id = mysqli_real_escape_string($con, $_POST['u_id']);
	
	// make file name in lower case
	$new_file_name = strtolower($file);
	
	// make file name in lower case
	$final_file=str_replace(' ','-',$new_file_name);?>
	
	
	<?php
	
	// insert the file details into the database
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO tbl_uploads(file,type,size,u_id) VALUES('$final_file','$file_type','$new_size','$u_id')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='uploadfile.php?success';
        </script>
		<?php
	}
	else
	
	// insert failed
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='uploadfile.php?fail';
        </script>
		<?php
	}
}
?>