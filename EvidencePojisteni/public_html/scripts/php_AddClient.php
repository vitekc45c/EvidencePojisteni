<?php
 $servername='localhost:5432';
 $username='admin';
 $password='12345';
 $dbname = "clients";
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
    }
$firstName = $_POST["firstName"];
$email = $_POST["email"];
$address = $_POST["address"];
$lastName = $_POST["lastName"];
$phoneNumber = $_POST["phoneNumber"];
$city = $_POST["city"];
$postalCode = $_POST["postalCode"];

var_dump($firstName, $email, $address. $lastName, $phoneNumber, $city, $postalCode);

$sql = "INSERT INTO clients (firstName,email,address,lastName,phoneNumber,city,postalCode)
     VALUES ('$fistName','$email','$address','$lastName','$phoneNumer','$city','$postalCode')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>
