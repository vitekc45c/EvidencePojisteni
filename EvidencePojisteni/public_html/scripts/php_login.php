<?php
if (empty($_POST["userName"])) {
    die("Jméno nemůže být prázdné");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Chybný email");
}
if (strlen($_POST["password"]) < 3) {
    die("Heslo musí mít alespoň 3 znaky");
}
$servername='localhost:5432';
$username='admin';
$password='12345';
$dbname = "users";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
   }
print_r($POST);
?>