<?php header('Content-type: text/html; charset=utf-8');
$servername='localhost:5432';
$username='admin';
$password='12345';
$dbname = "users";
$db_connection = pg_connect("host=$servername dbname=$dbname user=$username password=$password");
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
   }
   return $mysqli;
?>