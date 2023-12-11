<?php
$servername='newdb1.mysql.database.azure.com';
$username='admin1';
$password='pass@123456';
$dbname = "moviebook";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>
