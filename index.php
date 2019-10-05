<?php 
// include_once("test.html");
$basic_info = fopen("./hello.csv", 'w');
header("Content-disposition: attachment; filename=test.csv");
header("Content-Type: text/csv");
header('Content-Length: ' . filesize("php://output"));
readfile("./hello.csv");
?>
