<?php header('Content-type: text/html; charset=utf-8');
$servername='localhost:5432';
$username='admin';
$password='12345';
$dbname = "users";
$conn=mysqli_connect ($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
   }
   return $mysqli;
?>