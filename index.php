<?php 
// include_once("test.html");
// $basic_info = fopen("./hello.csv", 'w');
header("Content-disposition: attachment; filename=hello.csv");
header("Content-Type: text/csv");
header('Content-Length: ' . filesize("./hello.csv"));

readfile("./hello.csv");
?>
