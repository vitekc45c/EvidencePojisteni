<?php header('Content-type: text/html; charset=utf-8');
$servername='localhost:3306';
$username='root';
$password='';
$dbname = "users";
$conn=mysqli_connect ($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
   }
   return $mysqli;
?>