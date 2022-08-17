<?php header('Content-type: text/html; charset=utf-8');
$firstName = get_names_from_database();
foreach ($firstName as $firstName) {
    echo "$firstName";
}
$lastName = get_names_from_database();
foreach ($lastName as $lastName) {
    echo "$lasttName";
}
?>
