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
	$funcitonName='HttpTrigger1';
	$functionKey='zscJNNOBKqZyRoCjKw7vS--RxNLZL3tcW6FL4cg9R7qPAzFuHtJvXg==';
	$url='https://registration-success.azurewebsites.net/api/{$functionName}?code={$functionKey}';
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_POST, 1);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 if (curl_errno($ch)) {
        echo "Error making API call: " . curl_error($ch);
	    } else {
	        // Handle successful API call
	        echo "API call successful. Response: " . $result;
	    }

    // Close cURL session
    		curl_close($ch);
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
if(!$insert_record){
	echo "not inserted";
}
else
{
	echo "inserted successfully";
	
	// $context  = stream_context_create($options);
 //    	$result = file_get_contents($url, false, $context);

	//     if ($result === FALSE) {
	//         // Handle error
	//         echo "Error making API call";
	//     } else {
	//         // Handle successful API call
	//         echo "API call successful. Response: " . $result;
	//     }
 //echo "<script>window.location = 'login_form.php';</script>";
}
echo $status;
}
?>
