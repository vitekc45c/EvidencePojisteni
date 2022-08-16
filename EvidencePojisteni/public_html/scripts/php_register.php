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
if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Heslo musí obsahovat minimálně jedno písmeno");
}
if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Heslo musí obsahovat minimálně jedno číslo");
}
if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Chybné potvrzení");
}
$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$servername='localhost:5432';
$username='admin';
$password='12345';
$dbname = "users";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect MySql Server:' .mysql_error());
   }
$sql = "INSERT INTO userDatabase (name, email, password_hash)
        VALUES (?, ?, ?)";
$stmt = $mysqli->stmt_init();
if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);          
if ($stmt->execute()) {
    header("Location: signup-success.html");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
?>