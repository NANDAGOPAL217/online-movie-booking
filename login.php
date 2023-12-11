<?php
include "Database.php";
session_start();
if($_POST['username'] == '' || $_POST['password'] == ''){
  foreach ($_POST as $key => $value) {
      echo "<li>Please Enter ".$key.".</li>";
  }
  exit();
}
$uname = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$data=array('email'=>$uname,'password'=>$password);
$url="https://registration-success.azurewebsites.net/api/HttpTrigger1?code=zscJNNOBKqZyRoCjKw7vS--RxNLZL3tcW6FL4cg9R7qPAzFuHtJvXg==";
$options = array(
	        'http' => array(
	            'method' => 'POST',
	            'content' => json_encode($data)
	        )
	    );
	    $context = stream_context_create($options);
	    $result = file_get_contents($url, false, $context);

$response = json_decode($result, true);

if($response['authenticated']){
        $_SESSION['uname'] = $uname;
        echo 1;
}else{
    echo "<li>Invlid Username or password.</li>";
    exit();
}
