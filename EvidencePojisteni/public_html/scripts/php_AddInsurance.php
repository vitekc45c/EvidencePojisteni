<?php header('Content-type: text/html; charset=utf-8');
$mysqli = require __DIR__ . "/../php_databaseConnect.php";
$type = $_POST["type"];
$amount = $_POST["amount"];

var_dump($type, $amount);

$sql = "INSERT INTO insuranceDatabase (type,amount)
     VALUES ('$type','$amount')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>
