<?php
include_once 'dbconfig.php';
if(isset($_POST['filename'])){
    $filename = $_POST['filename'];
}

if(isset($_POST['filename1'])){
    $filename1 = $_POST['filename1'];
}


$sql1="UPDATE tbl_uploads set flag=1 where u_id=$filename and id=$filename1;";  
$result1=mysqli_query($con,$sql1);


session_start();
$_SESSION['user'] = $filename;
include_once 'viewfile.php';


?>