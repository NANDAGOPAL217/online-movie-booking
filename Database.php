<?php
$servername='movie12onlineserver.mysql.database.azure.com';
$username='gkyxuotvub';
$password='EXK4408A102KJX4J$';
$dbname = "movie12onlinedatabase";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>
