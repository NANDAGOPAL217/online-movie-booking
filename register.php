
<?php
include_once "Database.php";
session_start();
if (isset($_POST['submit']))
 {
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$mobile=$_POST['number'];
 	$city=$_POST['city'];
 	$password=$_POST['password'];
	$filename=$_FILES['image']['name'];
	echo $filename;
$location='admin/image/'.$filename;



$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif');

$response=0;

if(in_array($file_extension,$image_ext)){
	if(move_uploaded_file($_FILES['image']['tmp_name'],$location)){
		$response=$location;
	}
}
echo $response;

$status=1;
$insert_record=mysqli_query($conn,"INSERT INTO user (`username`,`email`,`mobile`,`city`,`password`,`image`)VALUES('".$username."','".$email."','".$mobile."','".$city."','".$password."','".$filename."')");
//$query = mysqli_query($con, "SELECT ..."); // Your SQL query
echo "i am here"
if (!$inserted_record) {
    die('Error in SQL query: ' . mysqli_error($con)); // Display the SQL error if any
}
if(!$insert_record){
	echo "not inserted";
}
echo "i am here too"
else
{
	echo "hii";
 //echo "<script>window.location = 'login_form.php';</script>";
}
echo $status;
}
?>
