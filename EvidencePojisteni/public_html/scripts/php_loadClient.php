<?php header('Content-type: text/html; charset=utf-8');
$mysqli = require __DIR__ . "../php_databaseConnect.php";
$firstName = "SELECT firstName FROM clientDatabase";
foreach ($firstName as $firstName) {
    echo "$firstName";
}
$lastName = "SELECT lastName FROM clientDatabase";
foreach ($lastName as $lastName) {
    echo "$lasttName";
}
?>
