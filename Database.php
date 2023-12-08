<?php
$servername='movieonline12-server.mysql.database.azure.com';
$username='ipwrqaoryd';
$password='23C75A46C0611880$';
$dbname = "movieonline12-database";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>
