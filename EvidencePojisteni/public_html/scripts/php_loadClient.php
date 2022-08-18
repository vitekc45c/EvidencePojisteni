<?php header('Content-type: text/html; charset=utf-8');
$firstName = "SELECT firstName FROM clientDatabase";
foreach ($firstName as $firstName) {
    echo "$firstName";
}
$lastName = "SELECT lastName FROM clientDatabase";
foreach ($lastName as $lastName) {
    echo "$lasttName";
}
?>
