
<?php
include_once "Database.php";
session_start();
if (isset($_POST['submit']))
 {
 	$username=$_POST['username'];
 	$email=$_POST['email'];
 	$mobilenum=$_POST['number'];
	$mobile=(int)$mobilenum
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
	 $query="insert into user values('$username','$email','$mobile','$city','$password','$filename')";
	$insert_record=mysqli_query($conn, $query);
	if(!$insert_record){
		echo "not inserted";
	}
	else
	{
		echo "hii";
	 //echo "<script>window.location = 'login_form.php';</script>";
	}

}
?>
