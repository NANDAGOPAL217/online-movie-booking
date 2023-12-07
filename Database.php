<?php
$servername='first-site1-server.mysql.database.azure.com';
$username='uxthajphoz';
$password='UJ57J14KB0P054G3$';
$dbname = "first-site1-database";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>
