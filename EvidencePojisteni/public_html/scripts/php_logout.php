<?php header('Content-type: text/html; charset=utf-8');
session_start();
session_destroy();
header("Location: ../html/index.html");
exit;
?>