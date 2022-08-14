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
print_r($POST);
?>