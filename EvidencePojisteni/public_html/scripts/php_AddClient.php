<?php header('Content-type: text/html; charset=utf-8');
$mysqli = require __DIR__ . "/../php_databaseConnect.php";
$firstName = $_POST["firstName"];
$email = $_POST["email"];
$address = $_POST["address"];
$lastName = $_POST["lastName"];
$phoneNumber = $_POST["phoneNumber"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

var_dump($firstName, $email, $address. $lastName, $phoneNumber, $city, $postalCode);

$sql = "INSERT INTO clientDatabse (firstName,email,address,lastName,phoneNumber,city,postalCode)
     VALUES ('$firstName','$email','$address','$lastName','$phoneNumber','$city','$postalCode')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>
