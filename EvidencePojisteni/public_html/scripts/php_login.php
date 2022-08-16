<?php
if (empty($_POST["userName"])) {
    die("Jméno nemůže být prázdné");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Chybný email");
}
if (strlen($_POST["password"]) < 8) {
    die("Heslo musí mít alespoň 8 znaků");
}
$servername='localhost:5432';
$username='admin';
$password='12345';
$dbname = "users";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
   }
    $sql = sprintf("SELECT * FROM userDatabase
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"])); 
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            session_start();           
            session_regenerate_id();          
            $_SESSION["user_id"] = $user["id"];          
            header("Location: index.php");
            exit;
        }
    }
    $is_invalid = true;
?>